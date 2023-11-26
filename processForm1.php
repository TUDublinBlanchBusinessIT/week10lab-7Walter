<?php

date_default_timezone_set('Europe/Dublin');
 
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];       
    $luggage = isset($_POST['luggage']) ? 1 : 0;

    $_SESSION['passengerFN'] = $firstname;
    $_SESSION['passengerSN'] = $surname;  
    $_SESSION['luggage'] = $luggage;

    if(isset($_POST['luggage'])) {
        $_SESSION['luggage'] = 1;
        header("Location: luggage.html");
    }else{
        $_SESSION['luggage'] = 0;
        header("Location: finalStep.php");
    exit();
    }
}
?>