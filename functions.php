<?php 

    $numberLengthPassword = isset($_GET['length-password']) ? intval($_GET['length-password']) : '';
    $repetitionCaracther = isset($_GET['repetition']) && $_GET['repetition'] === 'true' ? true : false;
    $letterCheck = isset($_GET['letter']) && $_GET['letter'] === 'letter' ? true : false;
    $numberCheck = isset($_GET['number']) && $_GET['number'] === 'number' ? true : false;
    $symbolCheck = isset($_GET['symbol']) && $_GET['symbol'] === 'symbol' ? true : false;

    $userPreferences = '';
    $alphaNumericString = 'abcdefghijklmnopqrstuvzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@.<>-_#+|*';
    $letter = 'abcdefghijklmnopqrstuvzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $number = '0123456789';
    $symbol = '@.<>-_#+|*';
    
        if (!$numberCheck && !$letterCheck && !$symbolCheck) {
            $userPreferences = $alphaNumericString;
        };
       
        if ($numberCheck || $letterCheck || $symbolCheck) {

            if ($letterCheck) {
                $userPreferences .= $letter;
            }
            if ($numberCheck) {
                $userPreferences .= $number;
            } 
            if ($symbolCheck) {
                $userPreferences .= $symbol;
            };
    
        };
        

        $officialPassword = generatePassword($numberLengthPassword, $repetitionCaracther, $userPreferences);

    function generatePassword($number, $boolean, $userPreferences) {
        
        
        $newPassword = '';
        if (!empty($_GET['length-password']) && intval($_GET['length-password']) <= 10) {
            $randomIndex = 0;
            if($boolean === true) {
                for($i = 0; $i <= $number - 1; $i++) {
                    $randomIndex = rand(0, strlen($userPreferences) - 1);  
                    $newPassword .= $userPreferences[$randomIndex];
                };
            } elseif ($boolean !== true) {
                while (strlen($newPassword) <= $number - 1) {
                    $randomIndex = rand(0, strlen($userPreferences) - 1);
                    if (!str_contains($newPassword, $userPreferences[$randomIndex])) {
                        $newPassword .= $userPreferences[$randomIndex];
                    };
                };
            };
            
            return $newPassword;
        };
    };
?>