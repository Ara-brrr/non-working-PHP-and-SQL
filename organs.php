<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $conn = mysqli_connect('localhost', 'root', '', 'users') or die("connection failed:" .mysqli_connect_errno());

    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['organ'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $organ = $_POST['organ'];

        $stmt = mysqli_prepare($conn, "INSERT INTO `users`(`name`, `email`, `phone`, `organ`) VALUES ('$name', '$email', '$phone', '$organ");
        mysqli_stmt_bind_param($stmt, 'ssss', $name, $email, $phone, $organ);

        if(mysqli_stmt_execute($stmt)){
            echo "Data inserted successfully";
        }
        else{
            echo "Data not inserted";
        }
    }
}
?>
