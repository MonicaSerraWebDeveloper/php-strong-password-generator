<?php 

    $numberLengthPassword = isset($_GET['length-password']) ? intval($_GET['length-password']) : '';
    $officialPassword = generatePassword($numberLengthPassword);

    function generatePassword($number) {
        $alphaNumericString = 'abcdefghijklmnopqrstuvzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@.<>-_';
        $newPassword = '';
        if (!empty($_GET['length-password'])) {
            for($i = 0; $i <= $number; $i++) {
                $randomIndex = rand(0, strlen($alphaNumericString));  
                $newPassword .= $alphaNumericString[$randomIndex];   
            };
            return $newPassword;
        }
    };
?>