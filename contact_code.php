<?php include_once("db.php"); ?>

<?php
  if(isset($_POST['send']))
  {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $msg=$_POST['msg'];

    date_default_timezone_set('Asia/Kolkata');
    $dt=date("Y-m-d");

    $sql="INSERT INTO `contact` (`name`, `email`, `subject`, `msg`, `dt`) VALUES('$name', '$email', '$subject', '$msg', '$dt')";
    $data=mysqli_query($conn, $sql);
              if($data==1)
              {
                echo"<script>alert('Message send successfully.'); location.href='contact.php';</script>";
              }
              else{
                echo "Error occured!!! Try Again".$data.error();
              }
  }
?>