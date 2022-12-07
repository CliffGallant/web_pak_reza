<?php
include('./db_connect.php');

if(isset($_POST['register-btn'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $confirm_password = md5($_POST['confirm_password']);

    if($password == $confirm_password)
    {
        $query = "INSERT INTO users(firstname,lastname,contact, email,password) VALUES('$firstname', '$lastname', '$contact', '$email', '$password')";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            header('Location: /document_sharing/login.php');
            $message = "Registrasi berhasil";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        else 
        {
            header('Location: /document_sharing/register.php');
        }
    }
    else
    {
        header('Location: /document_sharing/register.php');
        $message = "Password tidak sama";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}
?>