<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
}

require 'includes/dbconnect.php';

if (isset($_POST['submit'])) :

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = $pdo->prepare('SELECT id, name, email, password FROM users WHERE email= :email');
    $query->bindParam(':email', $email);
    $query->execute();

    $user = $query->fetch();

    $sql = "SELECT users.id, users.name, users.email, users.password, roles.type, roles.url 
    FROM users 
    INNER JOIN roles ON users.roles_id=roles.roles_id";

    $query1 = $pdo->prepare($sql);
    $query1->execute();
    $user1 = $query1->fetchAll(PDO::FETCH_ASSOC);
    if (count($user) > 0 && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['name'] = $user['name'];

        foreach ($user1 as $row) {
            if ($row['name'] == $user['name']) {
                if ($row['type'] == 'student') {
                    header("Location: " . $row['url'] . ".php");
                } elseif ($row['type'] == 'teacher') {
                    header("Location: " . $row['url'] . ".php");
                } else {
                    header("Location: " . $row['url'] . ".php");
                }
            }
        }
    } else {
        echo "Email ose Fjalëkalimi gabim";
    }

endif;
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
    <form action="login.php" method="POST">
        <div class="form-login">
            <div class="logo" style="padding-bottom: 3rem; text-align:center;margin:0;">
                <h4>GJEJ VETEN</h4>
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
                    <button class="btn-primary" type="submit" name="submit">Kyçu</button>
                </div>

            </div>


        </div>
    </form>
    <script src="login.js"></script>
    <script src="app.js"></script>
</div>