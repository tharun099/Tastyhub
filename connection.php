<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "prodemo";

$conn = mysqli_connect($servername, $username, $password, $database);
if($_SERVER['REQUEST_METHOD'] == 'POST')
{ 
    $email = $_POST['email'];
    $pass = $_POST['pass'];
}
if (!$conn) {
    die("Sorry we failed to connect". mysqli_connect_error());
}
else{
    //echo "Connected successfully";
    $sql = "INSERT INTO `demotest` (`email`, `pass`) VALUES ('$email', '$pass')";
    $result = mysqli_query($conn, $sql);
    if($result) {
        header("Location: project.html" , true, 301);
    }
    else{
        echo "The values are not inserted successfully". mysqli_error($conn);
    }
}
?>