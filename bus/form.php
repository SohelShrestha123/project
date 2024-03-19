<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Account</title>
    <link rel="stylesheet" type="text/css" href="design.css">
    <link rel="script" type="text/javascript" href="validate.js">


</head>
<body>
    
    <div class="copy">
        <h1>Register</h1>

        <form action="register.php" method="post">
            <label for="fname">Firstname:</label><br>
            <input type="text" id ="fname" name="fname" placeholder="First Name" required><br>

            <label for="lname">Lastname:</label><br>
            <input type="text"  id="lname" name="lname" placeholder="Last Name" required><br>

            <label for="uname">Username:</label><br>
            <input type="text" id="uname" name="uname" placeholder="User Name" required><br>

            <label for="uname">Address:</label><br>
            <input type="text" id="add" name="add" placeholder="Address" required><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" placeholder="Email" required><br>

            <label for="contact">Phone_No:</label><br>
            <input type="text" id="contact" name="contact" placeholder="Mobile No" required><br>

            <label for="npassword">New Password:</label><br>
            <input type="password" name="npassword" placeholder="New Password" required><br>

            <label for="cpassword">Confirm Password:</label><br>
            <input type="password"  name="cpassword" placeholder="Confirm Password" required><br>

            <label for="gender">Gender:</label>
            <label for="M"><input type="radio"  name="gender"  value="male">Male</label>
            <label for="F"><input type="radio"  name="gender"  value="female">Female</label>
            <br>
            <button type="submit" onclick="validation()">Register</button>
            <button type="reset">Cancel</button>
        </form>
    </div>
</body>
</html>