<?php 

    $numberLengthPassword = isset($_GET['length-password']) ? intval($_GET['length-password']) : '';
    $repetitionCaracther = isset($_GET['repetition']) && $_GET['repetition'] === 'true' ? true : false;
    $officialPassword = generatePassword($numberLengthPassword, $repetitionCaracther);

    function generatePassword($number, $boolean) {
        $alphaNumericString = 'abcdefghijklmnopqrstuvzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@.<>-_';
        $newPassword = '';
        if (!empty($_GET['length-password']) && intval($_GET['length-password']) <= 20) {
            $randomIndex = 0;
            if($boolean === true) {
                for($i = 0; $i <= $number - 1; $i++) {
                    $randomIndex = rand(0, strlen($alphaNumericString));  
                    $newPassword .= $alphaNumericString[$randomIndex];
                };
            } elseif ($boolean !== true) {
                while (strlen($newPassword) <= $number - 1) {
                    $randomIndex = rand(0, strlen($alphaNumericString));
                    if (!str_contains($newPassword, $alphaNumericString[$randomIndex])) {
                        $newPassword .= $alphaNumericString[$randomIndex];
                    };
                };
            };
            
            return $newPassword;
        };
    };
?>