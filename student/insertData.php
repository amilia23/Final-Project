<?php 
include_once("../config.php"); 
include('dashboard.php'); 
?>
<head>
  <title>FSKIK Student Lecturer Appointment System</title>
  <link rel="stylesheet" href="../CSS/bootstrap.min.css" />
  <script
    src="https://kit.fontawesome.com/9a81059403.js"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../CSS/style.css" />
</head>

<?php

$result = mysqli_query($mysqli, "SELECT * FROM student WHERE id= '".$_SESSION['id']."'");
if($result){
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if($row) {
        $login_session = $row['id'];
    }

        //receive input from the form
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    

    //send it to the database---insert into
    $sql = "UPDATE student SET  email='$email', password = '$password', phone='$phone' WHERE id='$login_session'";
    $result = mysqli_query($mysqli, $sql);
    if ($result) {
        echo 
        "<script>
        alert ('Data has been updated');
        window.location.href='detail.php';
        </script>";
    } else { 
        echo 
        "<script>
        alert ('Problem to update data');
        window.location.href='detail.php';
        </script>";
    }
}
?>

