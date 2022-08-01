<?php
include "Classes/BaseClass.php";
include "Classes/User.php";

$salt = 'Test!23';
session_start();

$conn = mysqli_connect('45.15.23.59','root','Sco@l@it123','national-03-ioana');


function runQuery($queryProduct) {
    global $conn;
    $query = mysqli_query($conn, $queryProduct);
    if(!$query) {
        die("MySql error on query: $queryProduct -".mysqli_error($conn));
    }
    if(is_bool($query)){
        return mysqli_insert_id($conn);
    } else {
        return $query->fetch_all(MYSQLI_ASSOC);
    }

}

function checkLogin() {
    if(!isset($_SESSION['user_id'])) {
        header('Location: login.php');
    }

}


