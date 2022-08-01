<?php include "functions.php";?>
<html lang="en">
<?php include "parts/head.php"; ?>
<body>
<div class="container">
    <?php include "parts/header.php"; ?>
    <form action="processRegister.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Phone</label>
            <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter phone">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Confirm password</label>
            <input name="confirm_pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Retype Password">
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>

    <a href="login.php" class="btn btn-primary">Login</a>
</div>
</body>
</html>
