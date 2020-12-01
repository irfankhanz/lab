<?php
//include connection for database
require 'inc/connection.php';

error_reporting(0);
$edit = $_GET['edit'];
$update = $_POST['Update'];

if(isset($update)){
    $updatequery = "UPDATE `register` SET `name`='".$_POST['user_name']."',`email`='".$_POST['email']."',`password`='".$_POST['pass']."' WHERE Id = '".$edit."'";
    mysqli_query($con,$updatequery);
    
    echo '<script type="text/javascript">
             window.location = "'.$url.'profile.php"
        </script>';
}
if(isset($edit)){
    $select = "select * from register where id = ".$edit."";
    //echo $select;
    $result = mysqli_query($con,$select);
    $row = mysqli_fetch_array($result);}

?>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Registration</title>
  <!-- Iconic Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="vendors/iconic-fonts/flat-icons/flaticon.css">
  <link rel="stylesheet" href="vendors/iconic-fonts/cryptocoins/cryptocoins.css">
  <link rel="stylesheet" href="vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css">
  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery UI -->
  <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
  <!-- Toola Board styles -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
</head>
<body>
<div class="container">
<div class="row">
<form method="post" action="edit.php?edit=<?php echo $edit?>">
  <div class="form-group">
  
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" value="<?php echo $row['name']?>" name="user_name" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" value="<?php echo $row['email']?>"name="email" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" value="<?php echo $row['password']?>" name="pass" placeholder="Password">
  </div>
  <input type="submit" class="btn btn-primary" name="Update" value="Update">
</form>
</div></div>
