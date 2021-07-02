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
        #comments {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            font-size: 15px;
            
        }

        #comments td,
        #comments th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #comments tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #comments tr:hover {
            background-color: #ddd;
        }

        #comments th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
        .komente{
            margin-top: 50px;
        }
        a{
            color: black;
        }
       
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
}
th {
  text-align: left;
}
#comments {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;

}

#comments td, #comments th {
  border: 1px solid #ddd;
  padding: 8px;
}

#comments tr:nth-child(even){background-color: #f2f2f2;}

#comments tr:hover {background-color: #ddd;}

#comments th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

    </style>
</head>

<body>
    <?php
    require 'includes/helper.php';
    $user_name = $_SESSION['name'];
    direct_page('login', false);
    ?>
    <ul>
        <nav>
            <div class="logo">
                <div class="logo" onclick="window.location.href='dashboard.php'">
                    <h4>Admin Paneli</h4>
                </div>
            </div>
            <ul class="nav-links">
                <li class="fx-center">
                    <a href="users.php">Users</a>
                </li>
                <?php if (isset($user_name)) : ?>
                    <li><a href="oferta.php">
                            <?= $user_name; ?></a></li>
                    <li><a href="logout.php">Log Out</a></li>
                <?php endif; ?>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>


    </ul>
    <?php
    if (isset($_POST['submit'])) :
        delete_row_db('courses', 'course_id', $_POST['id']);
    endif;
    ?>

    <div class="container" style="padding-top: 170px ;">
        <div style="position:relative; display:flex; ">
            <?php
            $sql = 'SELECT
                users.id,
                users.name,
                users.email,
                teacher.profesioni,
                courses.course_id,
                courses.title,
                courses.subtitle,
                courses.avatar,
                courses.price
            FROM
                users
            INNER JOIN courses ON courses.teacher_id = users.id
            INNER JOIN teacher ON teacher.teacher_id = users.id';

            $teachers = get_all_data($sql);
            foreach ($teachers as $teacher) : ?>
                <div class="card" style="position: relative;">
                    <form action='dashboard.php' method="POST" style="position: absolute; right: 10px; top: 10px;">
                        <input type="hidden" name="id" value="<?= $teacher['course_id']; ?>">
                        <button type="submit" name="submit" class="btn-danger">Fshij</button>
                    </form>
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
        <div>
        <div style="margin-top: 2rem;">
            <a href="createCourse.php" class="btn-outline">Krijo Kurs</a>
        </div>
    </div>
    </div>
    <?php
  require 'includes/dbconnect.php';

$query = $pdo -> query ('SELECT * from person');
$person = $query -> fetchALL();

?>
    <div >  
                <table id="comments">
                <h2 class="komente">Komente nga Contact Us</h2>
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>name</th>
                            <th>subject</th>
                            <th>phone</th>
                            <th>email</th>
                            <th>message</th>
                            <th colspan="2"></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($person as $person): ?>
                            <tr>
                            <td><?php echo $person['id'] ?></td>
                              <td><?php echo $person['name'] ?></td>
                              <td><?php echo $person['subject'] ?></td>
                              <td><?php echo $person['phone'] ?></td>
                              <td><?php echo $person['email'] ?></td>
                              <td><?php echo $person['message'] ?></td>
                              
                              <td><a href="delete_comments.php?id=<?php echo $person['id']; ?>"> Delete </a></td>
                            </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
    </div>

   

</body>
<script src="app.js"></script>

</html>