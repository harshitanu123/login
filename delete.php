<?php include("connection.php")  ;?>

<?php 
$id=$_GET['id'];
$q="DELETE From student where id=$id";
$data=mysqli_query($conn,$q);
if($data)
{
    header('Location:display.php');
}
?>