<?php



function generatePassword($length) {

    session_start();
    
    $letters = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
    $numbers = '1234567890';
    $symbols = '!?$%&/^@#*';
    $password = "";
    $characters = '';

    $_GET['letters'] && $characters .= $letters;
    $_GET['numbers'] && $characters .= $numbers;
    $_GET['symbols'] && $characters .= $symbols;

    for ($i=0; $i < $length; $i++) { 
        $randomCharacter = $characters[rand(0, strlen($characters))];
        if (!$_GET['repetitions']) {
            if (!str_contains($password, $randomCharacter)) {
                $password .= $randomCharacter;
            }
        } else {
            $password .= $randomCharacter;
        }
    }

    $_SESSION['password-generated'] = $password;

    if ($password)  {
        header('Location: success.php');
    } else {
        echo 'Compila il form';
    }
}

?>