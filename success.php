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

session_start();

?>

<body class="d-flex justify-content-center align-items-center bg-dark text-white">
    <main class="d-flex flex-column align-items-center gap-3 w-25">
        <h1 class="text-secondary text-center">Strong Password Generator</h1>
        <h3>La tua password è:</h3>
        <div class="my-result w-100 text-black py-4 px-5 rounded-3">
            <?php echo $_SESSION['password-generated'] ?>
        </div>
    </main>
</body>

</html>