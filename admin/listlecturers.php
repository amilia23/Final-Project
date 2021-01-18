<?php include('dashboard.php'); ?>

<head>
  <title>FSKIK Student Lecturer Appointment System</title>
  <link rel="stylesheet" href="../CSS/bootstrap.min.css" />
  <script
    src="https://kit.fontawesome.com/9a81059403.js"
    crossorigin="anonymous"
  ></script>
  <link rel="stylesheet" href="../CSS/style.css" />
</head>

<?php
	$conn = new mysqli('localhost', 'root', '', 'final');
	$result = $conn->query("SELECT * FROM lecturer") or die($conn->error());
?>
<div class="main">


<div class = "container text-center">
<h3>List Lecturers</h3>
			<div class = "d-flex table-data">
			<table class ="table table-striped table-light">
				<thead class ="bg-info">
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Email</th>
						<th>No. Phone</th>
						<th>Subject 1</th>
						<th>Subject 2</th>
						<th>Profile Picture</th>
						<th colspan="3">Operation</th>
					</tr>
				</thead>
				
			<?php 
			$i = 0;
				while ($row = $result->fetch_array()):
					$name = $row['name']; 
					$email = $row['email'];
          			$phone = $row['phone']; 
          			$subject1 = $row['subject1']; 
					$subject2 = $row['subject2']; 
					$profile = $row['profile'];
        
			$i++;
			?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $name; ?></td>
						<td ><?php echo $email ?></td>
						<td><?php echo $phone; ?></td>
						<td width="150"><?php echo $subject1; ?></td>
						<td width="150"><?php echo $subject2;?></td>
						<td><img src= "../lecturer/profile/<?php echo $profile; ?>" width="150"></td>
		
					
        <td><button title="Details" type="button" class="btn btn-info" aria-label="Left Align" onclick="location.href='viewlecturer.php?id=<?php echo $row['id']?>'">
				<i class="fas fa-eye" aria-label="true"></i>
				</button>
				<td><button title="Update" type="button" class="btn btn-success" aria-label="Left Align" onclick="location.href='updatelecturer.php?id=<?php echo $row['id']?>'">
					<i class="fas fa-pencil-alt" aria-label="true"></i>
				</button>
				<td><button title="Delete" type="button" class="btn btn-danger" aria-label="Left Align" onclick="location.href='deletelecturer.php?id=<?php echo $row['id']?>'">
					<i class="fas fa-trash-alt" aria-label="true"></i>
				</button>
			</td>
					</tr>
				<?php endwhile; ?>
			</table>
		</div>
           <br> <br> <br> 
<?php

	function pre_r( $array ) {
		echo '<pre>';
		print_r($array);
		echo '</pre>';
}
?>
</div>
