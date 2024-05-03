<?php 

    $numberLengthPassword = intval($_GET['length-password']);
    $officialPassword = generatePassword($numberLengthPassword);
    var_dump($officialPassword);

    function generatePassword($number) {
        $alphaNumericString = 'abcdefghijklmnopqrstuvzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@.<>-_';
        $newPassword = '';
        for($i = 0; $i <= $number; $i++) {
            $randomIndex = rand(0, strlen($alphaNumericString));  
            $newPassword .= $alphaNumericString[$randomIndex];   
        };
        return $newPassword;
    };


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- /Bootstrap  -->

    <title>Password sicura</title>
</head>
<body>
    <h1>Strong Password Generator</h1>
    <h2>Genera una password sicura</h2>
    <p>La tua password è: <?php  ?> </p>
    <form method="GET">
        <label for="length-password">Lunghezza password:</label>
        <input id="length-password" class="form-control" type="number" name="length-password" />
        <button type="submit"class="btn btn-primary">Invia</button>
    </form>
</body>
</html>