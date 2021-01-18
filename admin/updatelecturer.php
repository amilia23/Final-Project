<?php 
include('../config.php');
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
if(isset($_POST['update']))
{
    $id = $_GET['id'];
        //receive input from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject1 = $_POST['subject1'];
    $subject2 = $_POST['subject2'];
    $phone = $_POST['phone'];
    

    //send it to the database---insert into
    $sql = "UPDATE lecturer SET name='$name', email='$email', subject1 = '$subject1', subject2 = '$subject2', phone='$phone' WHERE id='$id'";
    $result = mysqli_query($mysqli, $sql);
    if ($result) {
        echo 
        "<script>
        alert ('Data has been updated');
		window.location.href='listlecturers.php';
        </script>";
    } else { 
        echo 
        "<script>
        alert ('Problem to update data');
        window.location.href='listlecturers.php';
        </script>";
    }
}
?>
<?php

$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM lecturer WHERE id= $id");
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
		<form action = "" method  = "POST">  
		<table class="table">
		<tr>
			<td>
                <label for="name">Name</label>
                <td width="2%">:</td>
                <td>
                <input type="text" id="name" name="name" size="50" value="<?php echo $row['name']?>"><br><br>
			</td>
		</tr>
		<tr>
			<td>
				<label for="email">Email</label>
                <td width="2%">:</td>
                <td>
                <input type="text" id="email" name="email" size="50" value="<?php echo $row['email']?>"><br><br>
			</td>
		</tr>
		<tr>
			<td>
				<label for="subject">Subject 1</label>
				</td>
                <td width="2%">:</td>
                <td>
                <input type="text" id="subject1" name="subject1" size="50" value="<?php echo $row['subject1']?>"><br><br>
			</td>
		</tr>
		<tr>
			<td>
				<label for="subject">Subject 2</label>
				</td>
                <td width="2%">:</td>
                <td>
                <input type="text" id="subject2" name="subject2" size="50" value="<?php echo $row['subject2']?>"><br><br>
			</td>
		</tr>
		<tr>
			<td>
				<label for="phone">No Phone</label>
				</td>
                <td width="2%">:</td>
                <td>
                <input type="text" id="phone" name="phone" size="50" value="<?php echo $row['phone']?>"><br><br>
			</td>
		</tr>
		<tr>
			<td >
			<button type = "submit" class = "btn btn-primary" name = "update">Update</button>
			</td>
		</tr>
		</table>
		 </form>
		 <a class="btn btn-danger" onclick="window.location.href='listlecturers.php'" > Cancel</a>
		 </div>
		 </center>
</body>
</div>
</html>
<?php
}
?>