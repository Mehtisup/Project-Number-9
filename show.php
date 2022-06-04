<?php 
require_once 'database.php';

$username = $_POST['username'];
$password = $_POST['password'];
$age = $_POST['age'];

$add = mysqli_query($database, "INSERT INTO data (username, password, age) VALUES ('$username','$password','$age')");

if($add) {
    print "DONE";
} else {
    print "EROR";
}

?>
