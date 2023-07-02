<?php
$servername = "localhost";
$username ="root";
$password = "";
$database = "signinup";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
//     echo "connected";
    
// }
// else{
    die("error".mysqli_connect_error());
}

?>