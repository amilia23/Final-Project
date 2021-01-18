<html>
<head>
  <title>FSKIK Student Lecturer Appointment System</title>
  <link rel="stylesheet" href="../CSS/bootstrap.min.css" />
  <script
    src="https://kit.fontawesome.com/9a81059403.js"
    crossorigin="anonymous"
  ></script>
  <link rel="stylesheet" href="../CSS/dashboard.css" />
  <link rel="stylesheet" href="../CSS/style.css" />
</head>
<?php
session_start();
include_once("../config.php");

$result = mysqli_query($mysqli, "SELECT * FROM student WHERE id= '".$_SESSION['id']."'");
while ($row = mysqli_fetch_array($result)) {
    $name = $row['name'];
    $profile = $row['profile'];
    
}
?>
  <body>
    <div class="area">
    <nav class="main-menu">
    
    <header class="avatar">
		<img src="profile/<?php echo $profile ?>" alt="">
    <h2><?php echo $name?></h2>  <!-- Call session profile -->
    </header>
      <li class="has-subnav">
            <i class="fa fa-user fa-2x"></i>
            <span class="nav-text"> Student Dashboard </span>
        </li>
        <li>
          <a href="home.php">
            <i class="fa fa-home fa-2x"></i>
            <span class="nav-text"> Home </span>
          </a>
        </li>
        <li class="has-subnav">
          <a href="detail.php">
            <i class="fa fa-id-card fa-2x"></i>
            <span class="nav-text"> Student Details </span>
          </a>
        </li>
        <li class="has-subnav">
          <a href="search.php">
            <i class="fa fa-calendar-plus fa-2x"></i>
            <span class="nav-text"> Booking Appointments </span>
          </a>
        </li>
        <li class="has-subnav">
          <a href="listappointment.php">
            <i class="fa fa-calendar-check fa-2x"></i>
            <span class="nav-text"> View Appointments </span>
          </a>
        </li>
       
       
    
      </ul>

      <ul class="logout">
        <li>
          <a href="../index.html">
            <i class="fa fa-power-off fa-2x"></i>
            <span class="nav-text"> Logout </span>
          </a>
        </li>
      </ul>
    </nav>
  </body>
</html>
