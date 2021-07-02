<?php
session_start();

if(isset($_SESSION['user_id'])){
    header("Location: index.php");
}
    
include 'includes/dbconnect.php';

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email= $_POST['email'];
        $password =  password_hash($_POST['password'], PASSWORD_BCRYPT);

        $sql = 'INSERT INTO users (name, email, password) VALUES (:name,:email,:password)';
        $query =$pdo ->prepare($sql);
        $query->bindParam('name', $name);
        $query->bindParam('email', $email);
        $query->bindParam('password', $password);

        if($query->execute()){
            $message =" Jeni regjistru me sukses" ;
            header("Location: login.php");
            
        }else{
            $message="ka nje problem gjate regjistrimit";
        }
    }
?>
<head>
    <title>
        GJEJ VETEN
    </title>
    <link rel="stylesheet" href="./css/indeks.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Squada+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
</head>
<div class="container fx-center justify-content-center">
<div class="container">
    <?php if(!empty($message)){
        echo $message;
    }
    ?>
    
    <div class="container fx-center justify-content-center">
     <form action="signup.php" method="post">
     <div class="form-login">
         <div class="logo" style="padding-bottom: 3rem; text-align:center;margin:0;">
                <h4>GJEJ VETEN</h4>
            </div>
            <div class="form-control" style="width: 300px;">
                <label>Emri</label>
                <div style="margin-bottom: 2rem;">
                    <input class="form-input" id="name" type="text" name="name" placeholder="Shkruani emrin tuaj" required> 
                </div>
            </div>
            <div class="form-control" style="width: 300px;">
                <label>E-mail</label>
                <div style="margin-bottom: 2rem;">
                    <input class="form-input" id="email" type="email" name="email" placeholder="Shkruani e-mailin tuaj" required> 
                </div>
            </div>
            <div class="form-control" style="width: 300px;">
                <label>Fjalëkalimi</label>
                <div style="margin-bottom: 2rem;">
                    <input class="form-input" id="password" type="password" placeholder="*******" name="password" required>
                </div>
            </div>
    <div style=" display: flex; justify-content: space-between; align-items: center; ">
                <div style="margin-top: 2rem;">
                    <a href="index.php" class="btn-outline">Kthehu</a>
                </div>
                <div style="margin-top: 2rem;">
                    <button class="btn-primary" type="submit" name="submit">Registrohu</button>
                </div>

            </div>


        </div>

    </form>
    <script src="app.js"></script>
</div>