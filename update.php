<?php include("connection.php") ?>
<?php
$id=$_GET['id'];
$q="SELECT * from student where id=$id";
$data=mysqli_query($conn,$q);
$result=mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Update</title>
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
              <input type="text" placeholder ="enter your First Name"  value="<?php echo $result['fname']?>"  class ="user" name="fname">
            </div>
            <div class="col">
              <p>Last Name</p>
              <input type="text" placeholder="enter your Last Name"  value="<?php echo $result['lnam']?>"  class ="user" name="lname">
            </div>
            <div class="col">
              <p>Email</p>
              <input type="email" placeholder ="enter your Email"  value="<?php echo $result['email']?>"  class ="user" name="email">
            </div>
            <div class="col">
              <p>Mobile</p>
              <input type="text" placeholder ="enter your mobile"   value="<?php echo $result['mobile']?>" class ="user" name="phone">
            </div>
            <div class="col-gen">
              <p>Gender</p>
            <select name="gender"  value="<?php echo $result['gender']?>" >
              <option >Male</option>
              <option>Female</option>
            </div>
            <div class="col">
              <p>Password</p>
              <input type="password" placeholder="enter your Password"   value="<?php echo $result['password']?>" class="password" name="password">
            </div>
            <div class="col">
              <p> 
                Confirm Password</p>
              <input type="password" placeholder ="enter your Password"   value="<?php echo $result['cpassword']?>" class="password" name="cpassword">
            </div>
             <div class="col">
           <input type="submit" value="LOGIN" class="btn"  name="update">

            </div>
        </div>
    </div>
    </form>
</body>
</html>
<?php
if(isset($_POST['update']))
{
  $first=$_POST['fname'];
  $last=$_POST['lname'];
  $email=$_POST['email'];
  $mobile=$_POST['phone'];
  $gender=$_POST['gender'];
  $password=$_POST['password'];
  $cpassword=$_POST['cpassword'];
  
  if($password==$cpassword)
  {
    $query="UPDATE PHOTO SET id='$id', fname='$first', lname='$last',gender='$gender', mobile='$phone',email='$mail', password='$pass', cpassword='$cpass' where id=$id";
$data=mysqli_query($conn,$q);
if($data)
{
  header("location:login.php");
}

  }
  else{
    echo "<script>alert('password not match')<script>";
  }
  
}

 ?>

