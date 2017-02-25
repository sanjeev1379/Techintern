<?php
include 'include/connection.php';

if(isset($_POST['register'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
if(!empty($name)&&!empty($mobile)&&!empty($email)){
    if(@($password_hash!=$password_again_hash)){

      }else{
      $query="INSERT into register (name,email,mobile) values('$name','$email','$mobile')";
      $query_pro=mysqli_query($con,$query);
      if($query_pro){
        echo "<script>alert('Thanku! you are successfully Registerd!')</script>";
        echo  "<script>window.open('index.php','_self')</script>";
      }else{
        /*  header("Location:home.php?q=".$email);*/
      }
   }
  }else{
    echo "<script>alert('All field are Required!')</script>";
    echo  "<script>window.open('index.php','_self')</script>";
  }
	}
?>