<?php

include("../config.php");
$LecturerName = $_POST["lecturername"];
$LecturerEmail = $_POST["lectureremail"];
$Subject = $_POST["subject"];
$GroupClass = $_POST["groupclass"];
$StudentName = $_POST["studentname"];
$StudentEmail = $_POST["studentemail"];
$StudentPhone = $_POST["studentphone"]; 
$Date = date('Y-m-d', strtotime($_POST['date']));
$Time = $_POST["time"];
$Reason = $_POST["reason"];
$Platform = $_POST["platform"];
$Status = $_POST["status"];

$result = "INSERT INTO booking (lecturername, lectureremail, subject, groupclass, studentname, studentphone, studentemail, date, time, reason, platform, status) 
VALUES ('$LecturerName', '$LecturerEmail', '$Subject', '$GroupClass', '$StudentName', '$StudentPhone ', '$StudentEmail', '$Date', '$Time ', '$Reason', '$Platform', '$Status')";
$sql_run = mysqli_query($mysqli, $result);

if(!$sql_run)
{
echo 
"<script>
alert ('Problem to update data');
window.location.href='listappointment.php';
</script>";
}
else 
{
    echo 
    "<script>
    alert ('Data has been updated');
    window.location.href='listappointment.php';
    </script>";        
}


?>