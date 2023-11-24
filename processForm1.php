<?php

date_default_timezone_set('Europe/Dublin');
 
session_start();

echo "Passenger firstname:" .$_SESSION['firstname']."<BR>";
    
echo "Passenger surname:" .$_SESSION['surname']."<BR>";  


if(isset($_POST['luggage'])) {
    $_SESSION['luggage'] = 1;
    header("Location: luggage.html");
}else{
    $_SESSION['luggage'] = 0;
    header("Location: finalStep.php");
    exit();
}
?>