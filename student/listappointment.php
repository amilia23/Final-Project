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

<div class="main">
<div class = "container text-center">


<br><br><br>
<h3>Appointments Application</h3>
			<div class = "d-flex table-data ">
			<table class ="table table-striped table-light table-sm text-sm">
				<thead class ="bg-info">
					<tr>
						<th>#</th>
						<th class="col-auto">Lecturer Name</th>
						<th class="col-auto">Lecturer Email</th>
						<th  class="col-md-auto">Subject</th>
                        <th  class="col-md-auto">Group</th>
                        <th>Student Name</th>
                        <th>Student Phone</th>
						<th>Student Email</th>
						<th>Date</th>
                        <th>Time</th>
                        <th>Reason</th>
						<th>Platform</th>
						<th>Status</th>
						<th></th>
					</tr>
				</thead>
				
			<?php 
			$i = 0;
			$_SESSION['name'] = $name;

				$result1 = mysqli_query($mysqli, "SELECT * FROM booking WHERE studentname ='$name'");
				while ($row = $result1->fetch_array()):
					$lecturername = $row['lecturername']; 
                    $lectureremail = $row['lectureremail'];
                    $subject = $row['subject'];
                    $groupclass = $row['groupclass'];
                    $studentname = $row['studentname']; 
					$studentphone = $row['studentphone']; 
                    $studentemail = $row['studentemail'];
                    $date = $row['date']; 
                    $time = $row['time']; 
                    $reason = $row['reason']; 
					$platform = $row['platform']; 
					$status = $row['status']; 
					
					if($row['status'] == "0"){
						$status2 = "Pending"; }
					elseif($row['status'] == "1"){
						$status2 =  "<span style='color:Green;'> Approved </span>"; }  
					elseif($row['status'] == "2"){
						$status2 =  "<span style='color:Red;'> Rejected </span>"; }
					
			$i++;
			?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $lecturername; ?></td>
						<td><?php echo $lectureremail ?></td>
                        <td><?php echo $subject; ?></td>
                        <td><?php echo $groupclass; ?></td>
						<td><?php echo $studentname ?></td>
                        <td><?php echo $studentphone; ?></td>
                        <td><?php echo $studentemail; ?></td>
						<td><?php echo $date ?></td>
                        <td><?php echo $time; ?></td>
                        <td><?php echo $reason ?></td>
                        <td><?php echo $platform; ?></td>
						<td><?php echo $status2; ?></td>
						<td><button title="Delete" type="button" class="btn btn-danger" aria-label="Left Align" onclick="location.href='delete.php?id=<?php echo $row['id']?>'">
					<i class="fas fa-trash-alt" aria-label="true"></i>
				</button>
					</tr>
				<?php endwhile; ?>
			</table>
		</div>
<style>
td { 
        text-overflow: ellipsis;

    
}
.table{
  font-size: 12px;
}
</style>
