<?php
$server = "localhost";
$user="root";
$password ="";
$db ="techkrunch-ajax";
$conn = mysqli_connect($server, $user, $password, $db);
if($conn){
    echo"";
}else{
    echo"mysqli_error";
}
?>