<?php 
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
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM lecturer WHERE id=$id");
if($result){
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if($row)
        $login_session = $row['id'];
?>


<html>
<div class="main">

    <center>
	<h1>Lecture Detail</h1><br>
    <div style="margin-left:270px;">
		<table class="table">
		<tr>
			<td>
                <label for="name">Name</label>
                <td width="2%">:</td>
                <td>
                <input type="text" id="name" name="name" size="50" value="<?php echo $row['name']?>"disabled><br><br>
			</td>
		</tr>
		<tr>
			<td>
				<label for="email">Email</label>
                <td width="2%">:</td>
                <td>
                <input type="text" id="email" name="email" size="50" value="<?php echo $row['email']?>"disabled><br><br>
			</td>
		</tr>
		<tr>
			<td>
				<label for="subject">Subject 1</label>
				</td>
                <td width="2%">:</td>
                <td>
                <input type="text" id="subject1" name="subject1" size="50" value="<?php echo $row['subject1']?>"disabled><br><br>
			</td>
		</tr>
		<tr>
			<td>
				<label for="subject">Subject 2</label>
				</td>
                <td width="2%">:</td>
                <td>
                <input type="text" id="subject2" name="subject2" size="50" value="<?php echo $row['subject2']?>" disabled><br><br>
			</td>
		</tr>
		<tr>
			<td>
				<label for="phone">No Phone</label>
				</td>
                <td width="2%">:</td>
                <td>
                <input type="text" id="phone" name="phone" size="50" value="<?php echo $row['phone']?>"disabled><br><br>
			</td>
		</tr>
		</table>
		 </div>
		 <a class="btn btn-danger" onclick="window.location.href='listlecturers.php'" > Back</a>
		 </center>
</body>
</div>
</html>
<?php
}
?>