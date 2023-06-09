<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<?php 

include './functions.php'

?>

<body class="d-flex justify-content-center align-items-center bg-dark text-white">
    <main class="container min-w-50 d-flex flex-column align-items-center gap-3">
        <h1 class="text-secondary text-center">Strong Password Generator</h1>
        <h3>Genera una password sicura</h3>
        <div class="my-result w-100 text-black fst-italic py-4 px-5 rounded-3">
            <?php generatePassword($_GET['length']) ?>
        </div>
        <div class="my-form bg-light w-100 text-black py-5 px-5 rounded-3">
            <form action="./index.php" method="get">
                <div class="d-flex justify-content-between mx-auto mb-3">
                    <label for="length">Lunghezza password</label>
                    <input class="form-control w-auto" type="number" name="length" id="length" min=0 max=24>
                </div>                
                <div class="d-flex justify-content-between mx-auto mb-3">
                    <span>Consenti ripetizioni di uno o più caratteri</span>
                    <div class="d-flex gap-1">
                        <label for="repetitions">Sì</label>
                        <input class="form-check-input" type="radio" name="repetitions" id="repetitions">
                        <label for="no-repetitions">No</label>
                        <input class="form-check-input" type="radio" name="repetitions" id="no-repetitions" value="">
                    </div>
                </div>
                <div class="d-flex flex-column align-items-end mx-auto mb-2">
                    <div>
                        <span>Letters</span>
                        <input class="form-check-input ms-1" type="checkbox" name="letters" id="letters">                         
                    </div>
                    <div>
                        <span>Numbers</span>  
                        <input class="form-check-input ms-1" type="checkbox" name="numbers" id="numbers">                       
                    </div>
                    <div>
                        <span>Symbols</span>
                        <input class="form-check-input ms-1" type="checkbox" name="symbols" id="symbols">                         
                    </div>
                </div>
                <div>
                    <button class="btn btn-primary" type="submit">INVIA</button>
                    <button class="btn btn-secondary" type="reset">CANCELLA</button>
                </div>
            </form>

        </div>
    </main>
</body>

</html>