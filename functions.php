<?php



function generatePassword($length) {

    session_start();
    
    $characters = 'qwertyuiopasdfghjklzxcvbnm1234567890';
    $charactersSplit = str_split($characters);
    $password = "";
    
    for ($i=0; $i < $length; $i++) { 
        
        $password .= $characters[rand(0, count($charactersSplit))];
    }

    $_SESSION['password-generated'] = $password;
    echo $password;

    header('Location: success.php');
}

?>