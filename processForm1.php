<?php

date_default_timezone_set('Europe/Dublin');
 
session_start();

$_SESSION['firstname'];
$_SESSION['surname'];  

if(isset($_POST['luggage'])) {
    $_SESSION['luggage'] = 1;
    header("Location: luggage.html");
}else{
    $_SESSION['luggage'] = 0;
    header("Location: finalStep.php");
    exit();
}
?>