<?php include('dashboard.php'); 
include('../config.php');
?>

<html>
<head>
  <title>FSKIK Student Lecturer Appointment System</title>
  <link rel="stylesheet" href="../CSS/bootstrap.min.css" />
  <script
    src="https://kit.fontawesome.com/9a81059403.js"
    crossorigin="anonymous"
  ></script>
  <link rel="stylesheet" href="../CSS/style.css" />
  <link rel="stylesheet" href="../CSS/dashboard.css" />
</head>

  <body>
    
<div class="main">
<br><br><br><br><br><br>

<center>
<h1>Book Appointment</h1><br>
<form action="searchresult.php" method="post" class="form-group">

<!-- testing -->
<div class="form-group">
    <label for="LecturerName">Search By Lecturer Name</label>
    <select class="form-control col-sm-5" id="name" name="name">
      <option>-Select-</option>
      <option>Fattah Bin Amin</option>
      <option>Siti Nordiana Binti Ali</option>
      <option>Muhammad Ramlan Bin Saidi</option>
      <option>Nur Afiqah Binti Khairil</option>
    </select>
  </div>
<div class="form-group">
    <label for="Subject">Search Subject</label>
    <select class="form-control col-sm-5" id="subject" name="subject">
      <option>-Select-</option>
      <option>MTD3063 (Database Driven Web Programming)</option>
      <option>MTS3023 (Data Structure)</option>
      <option>MME3022 (Integrated Entrepreneurship)</option>
      <option>MCU3033 (Robotic Technology)</option>
    </select>
</div>

<button class= 'btn btn-info' name="submit" type="submit" >Search</button>
<br>

</form>
</center>
</body>