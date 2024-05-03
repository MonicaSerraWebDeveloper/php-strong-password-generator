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
    <section style="background-color: darkblue" class="vh-100 d-flex align-items-center" >
        <div class="container p-4 m-auto">
            <div class="row">
                <div class="col-6 p-4 m-auto ">
                    <div class="d-flex py-4 flex-column align-items-center" style="color: #fff">
                        <h1>Strong Password Generator</h1>
                        <h2>Genera una password sicura</h2>
                        <p><?php echo $officialPassword ?></p>
                    </div>
                    <div class="rounded p-4" style="background-color: #ddd">
                        <form method="GET">
                            <div class="d-flex py-3">
                                <label class="col-6" for="length-password">Lunghezza password:</label>
                                <input id="length-password" class="form-control" type="number" name="length-password" value="<?php echo $numberLengthPassword ?>" />
                            </div>
                            
                            <div class="py-3 d-flex justify-content-between">
                                <div>Consenti ripetizione di uno o più caratteri</div>
                                <div>
                                    <div>
                                        <input class="form-check-input" <?php echo $letterCheck ? 'checked' : '' ?> id="repetition" type="radio" name="repetition" value="true">
                                        <label for="repetition">Sì</label>
                                    
                                    </div>
                                    <div>
                                        <input class="form-check-input" <?php echo $numberCheck ? 'checked' : '' ?> id="no-repetition" type="radio" name="repetition" value="false">
                                        <label for="no-repetition">No</label> 
                                    </div>
                                </div>
                            </div>
                                <div class="d-flex flex-column align-items-end">
                                    <div>
                                        <input class="form-check-input" id="letter" <?php echo $letterCheck ? 'checked' : '' ?> type="checkbox" name="letter" value="letter">
                                        <label for="letter">Lettere</label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" id="number" <?php echo $numberCheck  ? 'checked' : '' ?> type="checkbox" name="number" value="number">
                                        <label for="number">Numeri</label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" id="symbol" <?php echo $symbolCheck ? 'checked' : '' ?> type="checkbox" name="symbol" value="symbol">
                                        <label for="symbol">Simboli</label>
                                    </div>
                                </div>
                        
                            <button type="submit"class="btn btn-primary">Invia</button>
                            <a href="#"><button type="reset" class="btn btn-secondary">Reset</button></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>