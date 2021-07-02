
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact us form validation Using Javascript</title>
    <link rel="stylesheet" href="css/contactforma.css">
    <link rel="stylesheet" href="css/indeks.css">
    

    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link href="https://fonts.googleapis.com/css2?family=Squada+One&display=swap" rel="stylesheet">
    <script src="contacty.js"></script>
</head>
<body>
<?php include "includes/menu.php"; ?> 
<section>
<div class="wrappery">
  <h2>Contact us</h2>
  <div id="error_message"></div>
  <form action="connect.php" method="post" id="myform" onsubmit=" return validate();">
    <div class="input_field">
        <input type="text" placeholder="Name" id="name" name="name">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Subject" id="subject" name="subject">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Phone" id="phone" name="phone">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Email" id="email" name="email">
    </div>
    <div class="input_field">
        <textarea placeholder="Message" id="message" name="message"></textarea>
    </div>
    <div class="btn">
        <input type="submit">
    </div>
  </form>
</div>
</section>
<script src="app.js"></script>

</body>
</html>