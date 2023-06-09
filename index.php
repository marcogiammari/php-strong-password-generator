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

function generatePassword($length) {
    $characters = 'qwertyuiopasdfghjklzxcvbnm1234567890';
    $charactersSplit = str_split($characters);
    $password = "";
    for ($i=0; $i < $length; $i++) { 
        
        $password .= $characters[rand(0, count($charactersSplit))];
    }
    echo $password;
}

?>

<body class="d-flex justify-content-center align-items-center bg-dark text-white">
    <main class="d-flex flex-column align-items-center gap-3 w-25">
        <h1 class="text-secondary text-center">Strong Password Generator</h1>
        <h3>Genera una password sicura</h3>
        <div class="my-result w-100 text-black py-4 px-5 rounded-3">
            <?php generatePassword($_GET['length']) ?>
        </div>
        <div class="bg-light w-100 text-black py-4 px-5 rounded-3">
            <form action="./index.php" method="get">
                <div class="d-flex justify-content-between mx-auto">
                    <label class="" for="length">Lunghezza password</label>
                    <input class="form-control w-auto" type="number" name="length" id="length" min=0 max=24>
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