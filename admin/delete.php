<?php
include '../config.php';


	$id = $_GET['id'];

	$result = "DELETE FROM contactus WHERE id=$id";
	$sql_run = mysqli_query($mysqli, $result);

	if($sql_run)
	{
		?>
        <script type="text/javascript">
        alert('Success: Delete Successful');
        window.location.href='contactus.php';
        </script>
        <?php	}
	else
	{
		?>
        <script type="text/javascript">
        alert('Error: Please try again later');
        window.location.href='contactus.php';
        </script>
        <?php	}

	

?>
