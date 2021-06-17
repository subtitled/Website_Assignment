<?php
session_start();
$DATABASE_HOST = 'localhost'
$DATABASE_USER = 'root';
$DATABASE_PASS = 'password';
$DATABASE_NAME ='games';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
 
// Check connection
if(mysqli_connect_errno()){
    exit('Failed to connect: ' .mysqli_connect_error());
}

if(!isset($_POST['username'], $_POST['password'])){
    exit('Please fill in both fields!');
}
if($stment = $con->prepare('SELECT ID, PASSWORD FROM USERS WHERE username = ?')) {
    $stment->bind_param('s', $_POST['username']);
    $stment->execute();
    $stment->store_result();
    if ($stment->num_rows > 0) {
        $stment->bind_result($id, $password);
        $stment->fetch();
        if(password_verify($_POST['password'], $password)) {
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            echo'Welcom'.$_SESSION['name'].'!';
        } else{
            echo'Incorrect Password!';
        }
    } else{
        echo'Incorrect username!';
    } 
    $stment->close();
}
?>