<?php 

require_once($_SERVER['DOCUMENT_ROOT'] . "/assets/incl/init.php");
?>


<?php 

$song = new User();
$song->id = "1";
$song->username = "raje";
$song->firstName = "Rasmus";
$song->lastName = "Jensen";
$song->email = "rjen@placeholder.dk";
$song->password = "qwerty1234";
$song->birthday = "01/01-2000";
// $song->showUserDetails();
// $song->getFullName();




?>