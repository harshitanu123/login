<?php include("connection.php") ?>
<?php

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


if  (isset($_POST["submit"]))
 {
  if (empty($_POST['fname'])) 
  {
    $nameErr = "Name is required";
  
  } else {
    $first = test_input($_POST['fname']);
    if (!preg_match("/^[a-zA-Z-' ]*$/", $first)) {
      $nameErr = "Only letters and white space allowed";
    
    }
  }


  
  // if (empty($_POST['email'])) {
  //   $emailErr = "email is required";
    
  // } else {
  //   $email = test_input($_POST["email"]);
  //   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  //     $emailErr = "Invalid email format";

    
  //   }
  // }


echo $first;
  $last=$_POST['lname'];
  $email=$_POST['email'];
  $mobile=$_POST['phone'];
  $gender=$_POST['gender'];
  $password=$_POST['password'];
  $cpassword=$_POST['cpassword'];
  
  
$q="INSERT INTO student VALUES ('' , '$first','$last','$email','$mobile','$gender','$password','$cpassword')";
$data=mysqli_query($conn,$q);
if($data)
{
  header("location:login.php");

  }
  else{
    echo "<script>alert('password not match')<script>";
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
    <title>Registration</title>
</head>
<body>
<form action=" " method="POST">
    <div class= "container-1">
     
        <div class="heading">
            <h1> Registration Form </h1>
        </div>

      
        <div class="wrapper">
            <div class="col">
              <p>First Name</p>
              <input type="text" placeholder ="enter your First Name" class ="user" name="fname">
              <span class="error"><?php  if(isset($nameErr)) echo $nameErr;?></span>
            </div>
            <div class="col">
              <p>Last Name</p>
              <input type="text" placeholder="enter your Last Name" class ="user" name="lname">
            </div>
            <div class="col">
              <p>Email</p>
              <input type="email" placeholder ="enter your Email" class ="user" name="email">
            </div>
            <div class="col">
              <p>Mobile</p>
              <input type="text" placeholder ="enter your mobile" class ="user" name="phone">
            </div>
            <div class="col-gen">
              <p>Gender</p>
            <select name="gender">
              <option  width="100px">Choose</option>
              <option>Male</option>
              <option>Female</option>
              </select>
            </div>
            <div class="col">
              <p>Password</p>
              <input type="password" placeholder="enter your Password" class="password" name="password">
            </div>
            <div class="col">
              <p> 
                Confirm Password</p>
              <input type="password" placeholder ="enter your Password" class="password" name="cpassword">
            </div>
             <div class="col">
           <input type="submit" value="LOGIN" class="btn" name="submit">

            </div>
        </div>
    </div>
    </form>
</body>
</html>