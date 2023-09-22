<?php include("connection.php")  ;
session_start();
?>
<?php
if(isset($_POST['login']))
{
  $username=$_POST['email'];
  $pass=$_POST['password'];
  $q= "SELECT * FROM student where email='$username' && password='$pass'";
  $data=mysqli_query($conn,$q);
  $rows=mysqli_num_rows($data);
  if($rows==1)
  {
  
      $_SESSION['use']=$username;
      header('Location:display.php');
      }
      else
      {
       echo   "<script> alert('incorrect Password')</script>";
      }
  
  

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
  <form action ="" method="post">
    <div class= "container">
      <img src="lo.jpg" class="avatar">
        <div class="heading">
            <h1> Login </h1>
        </div>
        <div class="wrapper">
            <div class="col">
              <p>Username</p>
              <input type="email" placeholder ="enter your Email" class ="user" name="email">
            </div>
            <div class="col">
              <p>Password</p>
              <input type="password" placeholder="enter your Password" class="password" name="password">
            </div>
            <div class="col">
             <a href="#" class="forget">Forget pasword<a>
              
            </div>
             <div class="col">
           <input type="submit" value="LOGIN" class="btn" name="login">
           <div class="col">
            
             New User<a href="Registration.php" id="regist">Register<a>
            </div>

            </div>
        </div>
    </div>
</form>
</body>
</html>