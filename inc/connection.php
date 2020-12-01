<?php

$con = mysqli_connect("localhost", "root", "", "lab");


$url = "http://localhost/aptechProject/lab/";

if (!$con) {
  echo "connection fail";
}
if(isset($_POST["current_id"]) && isset($_POST["email"]) && isset($_POST["edited"]) ) {
  // echo '<script>alert('.$_POST["edited"].')</script>';
  $edit= $_POST["edited"];
  $status_text = $edit == "Pending" ? "block" :"allow";
  $sql = "UPDATE register SET status='$edit' WHERE id=".$_POST["current_id"]."";

  if (mysqli_query($con, $sql)) {
    echo '
    <div class="alert alert-success alert-dismissible fade show " role="alert">
      <strong>'.$_POST["email"].' is '.$status_text.'</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
  } else {
    echo '
    <div class="alert alert-danger alert-dismissible fade show " role="alert">
      <strong>Error updating record: '.mysqli_error($con).'</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
  }
}
?>
