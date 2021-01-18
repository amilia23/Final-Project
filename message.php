<?php
include "config.php"; 

if(isset($_POST['submit']))
{       
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = mysqli_query($mysqli,"INSERT INTO contactus (name, email, subject, message) VALUES ('$name','$email','$subject','$message')");

    if(!$name && !$email && !$subject && !$message)
    {
        echo "<script type=\"text/javascript\">window.alert('Please fill the form correctly.'); window.location.href = 'index.html'; </script>";

    }
    else
    {
        echo "<script type=\"text/javascript\">window.alert('Message successfully submitted.'); window.location.href = 'index.html';</script>";

    }
}
?>
