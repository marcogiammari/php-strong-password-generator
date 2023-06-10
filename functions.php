<?php



function generatePassword($length) {

    session_start();
    
    $letters = array_merge(range('a', 'z'), range('A', 'Z'));
    $numbers = range('0', '9');
    $symbols = str_split('|!$%&/()=?^@#[]{}><');
    $password = "";
    $characters = [];

    $_GET['letters'] && $characters = array_merge($characters, $letters);
    $_GET['numbers'] && $characters = array_merge($characters, $numbers);
    $_GET['symbols'] && $characters = array_merge($characters, $symbols);

    for ($i=0; $i < $length; $i++) { 
        $randomCharacter = $characters[rand(0, count($characters)-1)];
        if (!$_GET['repetitions']) {
            if (!str_contains($password, $randomCharacter)) {
                $password .= $randomCharacter;
            }
        } else {
            $password .= $randomCharacter;
        }
    }
    $characters = [];

    $_SESSION['password-generated'] = $password;

    if ($password)  {
        header('Location: success.php');
    } else {
        echo 'Compila il form';
    }
}

?>