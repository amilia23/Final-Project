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
  <script
    src=https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js 
  ></script>
</head>



  <body>
    <div class="area">
    <div class="main"><br>
    <?php 
		session_start();
		echo $_SESSION['name'];
		?>
		<br>You are login as
		<?php 
		echo $_SESSION['role'];
    ?><br>

<?php
include_once("../config.php");

$result = mysqli_query($mysqli, "SELECT * FROM admin WHERE id= '".$_SESSION['id']."'");
while ($row = mysqli_fetch_array($result)) {
    $name = $row['name'];
    $profile = $row['profile'];
    
}
?>


</div>
    <nav class="main-menu">
    
    <header class="avatar">
		<img src="profile/<?php echo $profile ?>" alt="">
    <h2><?php echo $name?></h2> <!-- Call session profile -->
    </header>
            <i class="fa fa-user fa-2x"></i>
            <span class="nav-text">Admin Dashboard </span>
        <li>
          <a href="home.php">
            <i class="fa fa-home fa-2x"></i>
            <span class="nav-text"> Home </span>
          </a>
        </li>
        <li class="has-subnav">
          <a href="listlecturers.php">
            <i class="fa fa-list fa-2x"></i>
            <span class="nav-text"> List Lecturers </span>
          </a>
        </li>
        <li class="has-subnav">
          <a href="liststudent.php">
            <i class="fa fa-list fa-2x"></i>
            <span class="nav-text"> List Students </span>
          </a>
        </li>
        <li class="has-subnav">
          <a href="listappointment.php">
            <i class="fa fa-list fa-2x"></i>
            <span class="nav-text"> List Appointments </span>
          </a>
        </li>
        <li>
          <a href="contactus.php">
            <i class="fa fa-envelope fa-2x"></i>
            <span class="nav-text"> Feedback </span>
          </a>
        </li>
       
    
      </ul>

      <ul class="logout">
        <li>
          <a href="../logout.php">
            <i class="fa fa-power-off fa-2x"></i>
            <span class="nav-text"> Logout </span>
          </a>
        </li>
      </ul>
    </nav>

  </body>
</html>