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
    <style>
        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>


<?php
require 'includes/helper.php';
require 'includes/dbconnect.php';
if (isset($_POST['submit'])) :
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $teacher_id = $_POST['teacher_id'];
    $avatar = $_POST['avatar'];

    $sql =
        "INSERT INTO courses (
            title,
            subtitle,
            teacher_id,
            avatar
        )
        VALUES (
            '$title',
            '$subtitle',
            '$teacher_id',
            '$avatar'
        );";
    $query = $pdo->prepare($sql);
    $query->execute();

    header("Location: dashboard.php");
endif;
?>

<body>
    <div class="container" style="padding: 70px ;">
        <form action="createCourse.php" method="POST">
            <div>Krijo Kursin</div>
            <div class="form-control" style="width: 300px;">
                <label>Titulli kursit</label>
                <div style="margin-bottom: 2rem;">
                    <input class="form-input" id="title" type="text" name="title" placeholder="Shkruani emrin e kursit">
                </div>
            </div>
            <div class="form-control" style="width: 300px;">
                <label>Nentitullit</label>
                <div style="margin-bottom: 2rem;">
                    <input class="form-input" id="subtitle" type="text" name="subtitle" placeholder="Shkruani emrin e kursit">
                </div>
            </div>
            <?php
            $sql = 'SELECT
                users.id,
                users.name,
                users.email
            FROM
                users
            INNER JOIN teacher ON teacher.teacher_id = users.id';
            $teachers = get_all_data($sql);
            ?>
                <div class="form-control" style="width: 300px;">
                    <label>Ligjeruesi</label>
                    <div style="margin-bottom: 2rem;">
                        <select name="teacher_id" id="teacher_id" class="form-input">
                            <option>Zgjidh Ligjeruesin</option>
                            <?php foreach ($teachers as $teacher) : ?>
                            <option value="<?= $teacher['id'] ?>"><?= $teacher['name'] ?></option>
                            <?php endforeach?>
                        </select>
                    </div>
                </div>
            <div class="form-control" style="width: 300px;">
                <label>Imazhi i kursit ne link (url)</label>
                <div style="margin-bottom: 2rem;">
                    <input class="form-input" id="avatar" type="text" name="avatar" placeholder="Shkruani emrin e kursit">
                </div>
            </div>

            <div>
                <div style="margin-top: 2rem;">
                    <button class="btn-primary" type="submit" name="submit">Krijo</button>
                </div>
                <div style="margin-top: 2rem;">
                    <a href="dashboard.php" class="btn-outline">Kthehu</a>
                </div>
            </div>


        </form>
    </div>
</body>

</html>