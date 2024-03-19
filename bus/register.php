<?php
include "connection.php";
$first=$_POST["fname"];
$last=$_POST["lname"];
$userName=$_POST["uname"];
$place=$_POST["add"];
$email=$_POST["email"];
$phone=$_POST["contact"];
$pass=$_POST["npassword"];

$ans=mysqli_query($conn,"INSERT INTO Passenger(Firstname,Lastname,Username,Address,Email,Phone_No,Password) VALUES('$first','$last','$userName','$place','$email','$phone',md5('$pass'))") 
or die(mysqli_error($conn));
echo "You are registerd.";
?>

<?php
include "connection.php";
function createUser($email)
{
     $sql = "SELECT * FROM vols2012 WHERE email='$email'" ;

     $result = mysql_query( $sql ) ;

     if( mysql_num_rows( $result ) > 0 )
     {
 die( "There is already a user with that email!" ) ;
     }
    }
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}

function show_error($myError)
{

}

?>