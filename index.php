<?php
session_start();
include ("Link.php");
include ("Functions.php");


if(($_SERVER['REQUEST_METHOD'])=="POST")
{
    //something was posted
   $username= $_POST['user'];
   $password=$_POST['Pass'];
   if(!empty($username) && !empty($password) && !is_numeric($username))
   {
//read from database
$query ="select * from login where username = '$username' limit 1";
$result=mysqli_query($con, $query);
if($result)
{
  if($result && mysqli_num_rows($result)>0)
    {
        $user_data=mysqli_fetch_assoc($result);
        if($user_data['Password']=== $password)
        {
          $_SESSION['UserID']=$user_data['UserID'];
          header("Location:welcome.php");
          die;

        }   
    }
}
echo "Wrong Username or Password";
   }
   else
   {
    echo "Wrong Username or Password";
   }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NKIRIA BOOKS</title>
    <link rel="stylesheet"type="text/css"href="Style.css">
</head>
<body>
    <div id="form">
        <h1 style="text-align:center;">LOGIN</h1>
        <form name="login_form"action="index.php"onsubmit="return isvalid()"method="POST">
            <label>Username: </label>
            <input type="text"style="border:none;outline:none; text-decoration:none;" id="user" name="user"><br></br>
            <label>Password: </label>
            <input type="password"style="border:none;outline:none; text-decoration:none;" id="Pass" name="Pass"><br></br>
                <label for=""><input type="checkbox">Remember Me</label><br></br>
                <a href="#">Forgot Password</a><br></br>
            <input type="submit"id="button"value="Login"name="submit"/><br></br>
            <span class="sign">Don't have an account?</span> <a class="signup" href="Signup.php">Sign Up</a>
        <div class="signup">
        </form>
    </div>
       
</body>
</html>