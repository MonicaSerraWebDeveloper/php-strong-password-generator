<?php 
    session_start();
    $officialPassword = $_SESSION['password']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- /Bootstrap  -->
    <title>Document</title>
</head>
<body>
    <section style="background-color: #001632" class="vh-100 d-flex align-items-center">
        <div class="container p-4 ">
            <div class="row">
                <div class="col-4 p-4 rounded m-auto" style="background-color: #fff">
                    <p>La tua password è: <span class="font-monospace"><?php echo $officialPassword ?></span></p>
                    <p>Grazie per aver usato il nostro generatore di password</p>
                    <a href="index.php"><button class="btn btn-primary">Torna alla Home</button></a>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>