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
  <link rel="stylesheet" href="../CSS/dashboard.css" />
</head>

<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM lecturer WHERE id=$id");
while ($row = mysqli_fetch_array($result)) {
	$name = $row['name']; 
	$email = $row['email'];
}
?>
<?php

$result = mysqli_query($mysqli, "SELECT * FROM student WHERE id= '".$_SESSION['id']."'");
while ($row = mysqli_fetch_array($result)) {
	$studentname = $row['name']; 
	$studentemail = $row['email'];
	$studentphone = $row['phone'];
}
?>
<html>
<div class="main"><br>
<center>	<h1>Booking Detail</h1> </center>
	<form action="insert_book.php" method="POST">
  <div class="form-row">

    <div class="form-group col-md-6">
    <label>Lecturer Name:</label>
    <input class="form-control" type="text" id="lecturername" name="lecturername" value="<?php echo $name?>"required>
    </div>

    <div class="form-group col-md-6">
    <label>Group Class:</label>
    <select class="form-control" name="groupclass" type="text" required>
												<option selected disabled>-Select-</option>
												<option value="A">A</option>
												<option value="B">B</option>
												<option value="C">C</option>
												<option value="D">E</option>
												<option value="E">E</option>
											    </select>
    </div>

    <div class="form-group col-md-6">
    <label>Lecturer Email:</label> 
    <input class="form-control" type="text" id="lectureremail" name="lectureremail" value="<?php echo $email ?>"required>
    </div>

    <div class="form-group col-md-6">
    <label>Date:</label>
    <input class="form-control" type="date" id="date" name="date" required>
    </div>

    <div class="form-group col-md-6">
    <label>Student Name</label>
    <input class="form-control" type="text" id="studentname" name="studentname" value="<?php echo $studentname?>" required>
    </div>

<div class="form-group col-md-6">
  <label>Time: </label>
  <select class="form-control" name="time" type="text" required>
												<option selected disabled>-Select-</option>
												<option value="9:00 AM">9:00 AM</option>
                        <option value="9:30 AM">9:30 AM</option>
                        <option value="10:00 AM">10:00 AM</option>
                        <option value="10:30 AM">10:30 AM</option>
												<option value="11:00 AM">11:00 AM</option>
                        <option value="11:30 AM">11:30 AM</option>
												<option value="2:00 PM">2:00 PM</option>
                        <option value="2:30 PM">2:30 PM</option>
												<option value="3:00 PM">3:00 PM</option>
                        <option value="3:30 PM">3:30 PM</option>
												<option value="4:00 PM">4:00 PM</option>
											    </select>
											  
  </div>

    <div class="form-group col-md-6">
    <label>Student Email:</label>
    <input class="form-control" type="text" id="studentemail" name="studentemail" value="<?php echo $studentemail?>"required>
    </div>

<div class="form-group col-md-6">
  <label>Reason: </label>
  <select class="form-control" name="reason" type="text"required>
												<option selected disabled>-Select-</option>
												<option value="Consultation">Consultation</option>
												<option value="Presentation">Presentation</option>
                        <option value="Discussion">Discussion</option>
												<option value="Others">Others</option>
                        </select>
											   
</div>

    <div class="form-group col-md-6">
    <label>Student Phone:</label> 
    <input class="form-control" type="text" id="studentphone" name="studentphone" value="<?php echo $studentphone?>"required>
    </div>

  <div class="form-group col-md-6">
	 <label>Platform:	</label>
   <select class="form-control" name="platform" type="text"required>
												<option selected disabled>-Select-</option>
												<option value="Google Meet">Google Meet</option>
												<option value="Lecturer Room">Lecturer Room</option>
												<option value="In Class">In Class</option>
												<option value="Meeting Room">Meeting Room</option>
											
											</select>
											
  </div>   
  
  <div class="form-group col-md-6">
  <label>Subject:	</label>
  <select class="form-control" name="subject" type="text"required>
			                	<option selected disabled>-Select-</option>
												<option value="MTD3063 (Database Driven Web Programming)">MTD3063 (Database Driven Web Programming)</option>
												<option value="MTD3023 (Data Structure)">MTD3023 (Data Structure)</option>
												<option value="MME3022 (Integrated Entrepreneurship)">MME3022 (Integrated Entrepreneurship)</option>
												<option value="MCU3033 (Robotic Technology)">MCU3033 (Robotic Technology)</option>
											  </select>

  </div>

  <div class="form-group col-md-6 text-right align-self-end">

  <input  class="btn btn-primary" type="submit" name= "submit"  value="Submit" > 
  </div>  
	<input type="hidden"  name="status" value="0">	
	
</form>
	
</body>
</div>
</html>