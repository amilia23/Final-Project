<?php
include '../config.php';


	$id = $_GET['id'];

	$result = "DELETE FROM student WHERE id=$id";
	$sql_run = mysqli_query($mysqli, $result);

	if($sql_run)
	{
        echo 
        "<script>
        alert ('Deleted successfully');
		window.location.href='liststudent.php';
        </script>";
		
	}
	else
	{
        echo 
        "<script>
        alert ('Error. Please try again later');
		window.location.href='liststudent.php';
        </script>";

	}

?>