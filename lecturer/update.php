<?php
 include '../config.php';
 session_start();

 if(isset($_POST['update']))
 {
    $id = $_SESSION['id'];
    $result = "UPDATE booking SET status='$status' WHERE id= '$id'";
    $sql_run = mysqli_query($mysqli, $result);
    if($sql_run){
        ?>
        <script type="text/javascript">
        alert('Success: Data updated');
        window.location.href='listappointment.php';
        </script>
        <?php
    }
    else{
        ?>
        <script type="text/javascript">
        alert('Success: Data updated');
        window.location.href='listappointment.php';
        </script>
        <?php
    }

 }
        
?>
