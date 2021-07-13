<?php
include 'connect.php';
if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql ="insert into `crud` (name,email,mobile,password) 
    values('$name','$email','$mobile','$password')";
    
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "data successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
    
}
?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>crud operation</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="POST">
  <div class="form-group">
    <label for="">Name</label>
    <input type="text" class="form-control"  placeholder="Enter name" name="name">
   </div>
  <div class="form-group">
    <label for="">email</label>
    <input type="email" class="form-control"  placeholder="Enter email" name="email">
   </div>
  <div class="form-group">
    <label for="">mobile</label>
    <input type="text" class="form-control"  placeholder="Enter mobile" name="mobile">
   </div>
  <div class="form-group">
    <label for="">password</label>
    <input type="password" class="form-control"  placeholder="Enter password" name="password">
   </div>
  
  <button type="submit" class="btn btn-primary"name="submit">Submit</button>
</form>
    </div>
  </body>
</html>