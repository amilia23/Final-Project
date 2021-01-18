
<?php include('dashboard.php'); 

?>

<html>
<head>
  <title>FSKIK Student Lecturer Appointment System</title>
  <link rel="stylesheet" href="../CSS/bootstrap.min.css" />
  <script
    src="https://kit.fontawesome.com/9a81059403.js"
    crossorigin="anonymous"
  ></script>
  <link rel="stylesheet" href="../CSS/style.css" />
  <link rel="stylesheet" href="../CSS/dashboard.css" />
</head>

<!-- result -->
<div class='main'>
        <div class = 'container text-center'><br><br>
        <h3>List Lecturers</h3>

    <?php 
    include('../config.php');
    

    $sql = "SELECT * FROM lecturer WHERE name = '" . $_POST["name"]."' 
    AND subject1 = '" . $_POST["subject"]."' 
    OR subject2 = '" . $_POST["subject"]."' ";
    $result = mysqli_query($mysqli,$sql);
    $count = mysqli_num_rows($result);

    if($count>=1){
        echo "
                    <div class = 'd-flex table-data'>
                    <table class ='table table-striped table-light'>
                        <thead class ='bg-info'>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject 1</th>
                                <th>Subject 2</th>
                                <th>Book</th>
                                
                            </tr>
                        </thead>";
        while($row=mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['subject1']."</td>";
                echo "<td>".$row['subject2']."</td>";
        ?>
            <td><a href="booking.php?id=<?php echo $row['id'] ?>">Book</a></td>
        <?php 		
                
                echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
        echo "</div>";
      
    } 
    else{
        print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
    }

    ?>
    <!-- result -->
  <center>
    <a class= 'btn btn-info ' href='search.php'>Search Again</a>
    </center>
    </div></div>
	