<?php
session_start();
include("Link.php");
include("functions.php");

if(($_SERVER['REQUEST_METHOD'])=="POST")
{
    //something was posted
   $username= $_POST['user'];
   $password=$_POST['Pass'];
   if(!empty($username) && !empty($password) && !is_numeric($username))
   {
//save to database
$UserID=random_num(20);
$query ="insert into login(UserID, username, password) values('$UserID', '$username', '$password')";
mysqli_query($con, $query);
header("Location:index.php");
   }else
   {
    echo "Please enter some valid information!";
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NKIRIA BOOKS</title>
    <link rel="stylesheet"type="text/css"href="Style2.css">
</head>
<body>
    <div id="form2">
        <h1>SIGN UP</h1>
        <form name="signup_form"action="Signup.php"onsubmit="return isvalid()"method="POST">
            <label>Username: </label>
            <input type="text" id="user" name="user"><br></br>
            <label>Password: </label>
            <input type="password" id="Pass" name="Pass"><br></br>
            <input type="submit"id="button"value="Sign Up"name="submit"/><br></br>
        </form>
    </div>
       
</body>
</html>