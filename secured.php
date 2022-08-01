<?php
include 'functions.php';
checkLogin();
?>
<html lang="en">
<?php
include "parts/head.php";
?>
<body>
<div class="container">
    <?php
    include "parts/header.php";
    ?>
    <h1>Secret!!</h1>
    <a href="logout.php" class="btn btn-primary">Logout!</a>
</div>
</body>
</html>
