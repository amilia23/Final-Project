<!DOCTYPE html>
<html>

<head>
    <title>FSKIK Student Lecturer Appointment System</title>
    <link rel="stylesheet" href="../CSS/bootstrap.min.css" />
    <link rel="stylesheet" href="../CSS/login.css" />
    <script src="https://code.jquery.com/jquery.js"></script>
  </head>
    
<body>

 <div>
      <img src="../images/banner.png" alt="banner" width="100%" />
    </div>
    <button type="text" class="btn btn-danger" style="position: absolute; left: 1%;" onclick="window.location.href='../index.html'" > Home</button>
    <div class="container">
    <div class="box-login">
        <div class="header-box">Admin Login</div>
        <br><br>
        <center>
            <form action="" method="post">
                Email :<br>
                <input type="email" name="email" /><br>
                Password :<br>
                <input type="password" name="password" /><br><br>
                <input type="submit" name="submit" value="Login" />
            </form>
        </center>
    </div>
</div>
</body>
</html>
<?php session_start();  ?>

<?php 

    if(isset($_POST['submit'])){
        include '../config.php';
        $email = $_POST['email'];
        $password = $_POST['password'];

        $check = mysqli_query($mysqli, "SELECT * FROM admin WHERE email = '".$email."'AND password = '".$password."'");
        $data = mysqli_fetch_array($check);
        
        $id= $data['id'];
        $name_pelogin = $data['name'];
        $role_pelogin = $data['role'];
        $password_pelogin = $data['password'];
        $email_pelogin = $data['email'];
        $profile = $data['profile'];

        if(mysqli_num_rows($check) > 0){

            session_start();

            $_SESSION['name'] = $name_pelogin;
            $_SESSION['role'] = $role_pelogin;
            $_SESSION['id'] = $id;
            
            if($role_pelogin == 'admin'){
                header('location:home.php');
            }
            else{
                echo  "<script type=\"text/javascript\">window.alert('Error: Wrong email or password'); window.location.href = 'adminlogin.php'; </script>";
            }  
        }
    else{
        echo  "<script type=\"text/javascript\">window.alert('Error: Wrong email or password'); window.location.href = 'adminlogin.php'; </script>";
    }  
         
    }
  
?>