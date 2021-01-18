<html>
<head>
  <title>FSKIK Student Lecturer Appointment System</title>
  <link rel="stylesheet" href="../CSS/bootstrap.min.css" />

  <link rel="stylesheet" href="../CSS/dashboard.css" />
  <link rel="stylesheet" href="../CSS/style.css" />
</head>
<?php
include('dashboard.php'); 

include_once("../config.php");

$result = mysqli_query($mysqli, "SELECT * FROM student WHERE id= '".$_SESSION['id']."'");
while ($row = mysqli_fetch_array($result)) {
    $name = $row['name'];
    $profile = $row['profile'];
    
}
?>
<div class="main">
<a style="text-align:center;"><h2></h2></a>
<form action="insert_book.php" method="post" >

					<label>
						Lecturer Name:<select name="address" type="text" style="width: 110px;margin-right: 175px;" />
												<option>-Select-</option>
												<option>Fattah Bin Amin</option>
												<option>Siti Nordiana Binti Ali</option>
											</select>
					</label><br><br>
					
					<label for="date">Date</label>
					<input type="date" id="date" name="date" >
					<br><br>
					<label>
						 Time:<select name="time" type="text" style="width: 110px;margin-right: 175px;" />
												<option>-Select-</option>
												<option>9:00 AM</option>
												<option>11:00 AM</option>
												<option>1:00 PM</option>
												<option>3:00 PM</option>
												<option>4:00 PM</option>
											</select>

					</label><br><br>
					
					<label>
						 Reason:<select name="reason" type="text" style="width: 110px;margin-right: 175px;" />
												<option>-Select-</option>
												<option>Consultation</option>
												<option>Presentation</option>
												<option>Others</option>
											
											</select>

					</label><br><br>
					<label>
						 Platform:<select name="platform" type="text" style="width: 110px;margin-right: 175px;" />
												<option>-Select-</option>
												<option>Google Meet</option>
												<option>Lecturer Room</option>
												<option>In Class</option>
												<option>Meeting Room</option>
											
											</select>
					</label><br><br>
					
					<input type="hidden"  name="status" value="0">
					
					<button name="submit" type="submit" style="border-radius: 3px;color:#000;margin-left: 145px;margin-top: 8px;">BOOK</button>
					<br>

					
					</form>



					
		 	</div>
			</html>
			
