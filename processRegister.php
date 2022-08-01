<?php
include "functions.php";


if($_POST['password'] != $_POST['confirm_pass']){
    $_SESSION['error_message']= 'Passwords do not match';
    header('Location:register.php');
    die;
}

if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $_SESSION['error_message']= 'Invalid email address';
    header('Location:register.php');
    die;
}

$userExists = User::findOneBy('email',$_POST['email']);
var_dump($userExists);

if(!is_null($userExists)){
    $_SESSION['error_message']= 'User email already exists!';
    header('Location:register.php');
    die;
}

$data = $_POST;
unset($data['confirm_pass']);
$user = new User();
$user->fromArray($data);
$user->password = md5($salt.$user->password.$salt);
$user->save();
$_SESSION['user_id'] = $user->id;
header('Location:secured.php');
