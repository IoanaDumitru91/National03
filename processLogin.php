<?php
include 'functions.php';
$userEmail = $_POST['email'];
$user = User::findOneBy('email',$userEmail);

if(is_null($user)) {
    $_SESSION['error_message'] = 'User not found!';
    header('Location:login.php');
} else {
    if(md5($salt.$_POST['password'].$salt)==$user->password){
        $_SESSION['success_message'] = 'Login successful!';
        $_SESSION['user_id']=$user->id;
        header('Location:secured.php');
    } else {
        $_SESSION['error_message'] = 'Wrong password!';
        header('Location:login.php');
    }
}
