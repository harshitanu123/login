<?php include "connection.php" ?>
<?php session_start(); ?>
<html>
   <head>
   
   <link rel="stylesheet" href="css/style.css">
</head>
   




<body>
   <div class="container-2">
      <div class="logout">
     <a href="logout.php"><input type="submit" value="Logout" class="btn"><a>
</div>
   <div class="heading">
      <h1>Display Records</h1>
</div>
   

<?php 
$userprofile= $_SESSION['use'];
if($userprofile==true)
{
   
 $q = "SELECT * FROM student";
 $data=mysqli_query($conn,$q);
 $rows=mysqli_num_rows($data);
 if($rows!=0)
 {
?>

<table border=2>
<tr>
    <th>id</th>
    <th>First Name</th>
    <th>last Name</th>
    <th>Gender</th>
    <th>Mobile</th>
    <th>Email</th>
    <th colspan=2>operation</th>
 </tr>
<?php
     while($result=mysqli_fetch_assoc($data))
     {
        echo
        "<tr>
        <td>".$result['id']."</td>
      
      
        <td>".$result['fname']."</td>
        <td>".$result['lnam']."</td>
        <td>".$result['gender']."</td>
        <td>".$result['mobile']."</td>
        <td>".$result['email']."</td>
        <td><a href='delete.php?id=$result[id]'><input type='submit' class='delete' value='delete'></a></td>
        <td><a href='update.php?id=$result[id]'><input type='submit' class='update' value='update'></a></td>
        
         </tr>";
     }
   
 } }
 else{
   header('Location:login.php');
 }
 ?>
</table>
</div>
</div>

</head>
</body>
</html>

 