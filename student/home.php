<?php include('dashboard.php'); ?>
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
    
    <div class="main">
    <br><br>
    <center>
    <h3>Welcome <?php echo $name; ?>! </h3>
    <br><br><br><br><br><br>
    <button title="Book" class="btn btn-warning font-weight-bold" onclick="location.href='search.php'">
		Book Now</button>
   
    </center>

</div>
</body>