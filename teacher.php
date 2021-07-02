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
    direct_page('login', false);

    ?>

    <nav>
        <div class="logo">
            <div class="logo" onclick="window.location.href='profili.php'">
                <h4>Teacher Profile</h4>
            </div>
        </div>
        <ul class="nav-links">
           
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
    <div class="container" style="padding-top: 70px ;">
        <div style="position:relative; display:flex; ">
            <?php
            $sql = "SELECT
               users.id,
                users.name,
                users.email,
                courses.title,
                courses.subtitle,
                courses.avatar,
                courses.price
            FROM
                users
            INNER JOIN courses ON courses.teacher_id = users.id
            INNER JOIN teacher ON teacher.teacher_id = users.id  where id = " . $_SESSION['user_id'];
            $teachers = get_all_data($sql);
            
            foreach ($teachers as $teacher) : ?>

                <div class="card">
                    <div class="top-half" style="background-image: url(<?= $teacher['avatar'] ?>)">
                    </div>
                    <div class="bottom-half">
                        <div class="subtitle" style="margin-bottom: 5px;">
                            <?= $teacher['name'] ?>
                        </div>
                        <div class="title"><?= $teacher['title'] ?></div>
                        <div class="subtitle">
                            <?= $teacher['subtitle'] ?>
                        </div>
                        <div class="subtitle">
                            <?= $teacher['price'] ?>
                        </div>
                    </div>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
    

    <script src="app.js"></script>
</body>

</html>