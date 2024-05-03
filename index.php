<?php 

    require __DIR__ . '/functions.php'; 

    // session_start();
    // if (!empty($_GET['length-password'])) {
    //     $_SESSION ['password'] = $officialPassword;
    //     header('Location: ./thankyou.php');
    // }
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
    <p>La tua password è: <?php echo $officialPassword ?> </p>
    <form method="GET">
        <label for="length-password">Lunghezza password:</label>
        <input id="length-password" class="form-control" type="number" name="length-password" />
        <div>
            <div>Consenti ripetizione di uno o più caratteri</div>
            <label for="repetition">Sì</label>
            <input id="repetition" type="radio" name="repetition" value="true">
            <label for="repetition">No</label> 
            <input id="repetition" type="radio" name="repetition" value="false">
        </div>
    
        <button type="submit"class="btn btn-primary">Invia</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
    </form>
</body>
</html>