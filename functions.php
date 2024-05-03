<?php 

    $numberLengthPassword = isset($_GET['length-password']) ? intval($_GET['length-password']) : '';
    $repetitionCaracther = isset($_GET['repetition']) && $_GET['repetition'] === 'true' ? true : false;
    $filteringTypology = isset($_GET['typology']) ? $_GET['typology'] : '';
    $officialPassword = generatePassword($numberLengthPassword, $repetitionCaracther, $filteringTypology);

    function generatePassword($number, $boolean, $typology) {

        $userPreferences = '';
        if (!$typology) {
            $userPreferences .= $alphaNumericString = 'abcdefghijklmnopqrstuvzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@.<>-_#+|*';
        } elseif ($typology) {
            if ($typology === 'letter') {
                $userPreferences .= 'abcdefghijklmnopqrstuvzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            }
            if ($typology === 'number') {
                $userPreferences .= '0123456789';
            } 
            if ($typology === 'symbol') {
                $userPreferences .= '@.<>-_#+|*';
            };
        };
        
        
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