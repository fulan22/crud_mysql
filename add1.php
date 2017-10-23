<!DOCTYPE html>
<html>
<head><title>instagram | ...</title>



<link rel="stylesheet" type="text/css" href="style.css">


</head>

<body class="container-body">

<div class="login-form-container" id="login-form">
    <div class="login-form-header">
            
            <h3>instagram</h3>
    </div>
    <div class="login-form-content">
        
        <form action="index.php" method="post" name="form1" class="login-form">
        
            <div class="input-container">
                <i class="fa fa-envelope"></i>
                <input type="email" class="input" name="email" placeholder=" Email"/>
            </div>
             <div class="input-container">
                <i class="fa fa-fullname"></i>
                <input type="text" class="input" name="name" placeholder=" Fullname"/>
            </div>
            <div class="input-container">
                <i class="fa fa-username"></i>
                <input type="text" class="input" name="username" placeholder=" Username"/>
            </div>
            <div class="input-container">
                <i class="fa fa-lock"></i>
                <input type="password"  id="login-password" class="input" name="password" placeholder=" Password"/>
            </div>
            <div class="input-container">
                <i class="fa fa-lock"></i>
                <input type="submit" name="submit" value="add"/>
            </div>


            
        </form>
    
    
        <div class="bwh">
            Dengan mendaftar, Anda menyetujui<br>
        <a href="#">
            <font color="#a59999">      
                <b>Kebijakan dan Privasi</b>
            </font>
        </a>
        </div>
       
        
        
    
    </div>
</div>
<?php
    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        include_once("config.php");
        $result = mysqli_query($mysqli, "INSERT INTO users(name,email,username,password) VALUES('$name','$email','$username','$password')");
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>