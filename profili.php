<!DOCTYPE html>
<html>

<head>
    <title>
        GJEJ VETEN
    </title>
    <link rel="stylesheet" href="./css/indeks.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Squada+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

</head>

<body>


        
    <?php
        require 'includes/helper.php';
        $user_name = $_SESSION['name'];
        direct_page('login',false);     
           
    ?>
   
        <nav>
            <div class="logo">
                <div class="logo" onclick="window.location.href='profili.php'">
                    <h4>GJEJ VETEN</h4>
                </div>
            </div>
            <ul class="nav-links">
                <li class="fx-center">
                    <a href="products.php">Produkte</a>
                </li>
                <?php if (isset($user_name)) : ?>
                    <li class="fx-center"><a href="oferta.php">
                            <?= $user_name; ?></a></li>
                            <li class="fx-center"><a href="logout.php">Log Out</a></li>
                <?php endif; ?>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
    </ul>
    <script src="app.js"></script>
</body>

</html>