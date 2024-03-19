<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
    <div class="inbox">
        <img src="Picture/Avatar.jpg" class="person">
        <h1>Login Here</h1>
        <form action="#" method="post">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password"><br>
            <input type="submit" name="submit" value="Login"><br>
            <a href="#">Lost your password?</a><br>
            <a href="form.php">Don't have an account?</a>

        </form>
    </div>
</body>
</html>

<?php
include "connection.php";

if(isset($_POST['submit'])){
$user=$_POST['username'];
$pass=$_POST['password'];

$ans=mysqli_query($conn,"SELECT * FROM passenger WHERE Username='$user' AND PASSWORD=md5('$pass')")
or die("cannot select from table.");
$row=mysqli_fetch_assoc($ans);

if(is_array($row) && !empty($row)){
    $valid=$row['Username'];
    $_SESSION['valid']=$valid;
    $_SESSION['fname']=$row['Firstname'];
    $_SESSION['lname']=$row['Lastname'];
    $_SESSION['id']=$_row['ID'];
    header("Location:user.php");
}

else{
    echo "It is invalid";
}
}