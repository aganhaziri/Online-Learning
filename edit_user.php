<?php 
	require 'includes/dbconnect.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $sql = 'SELECT * FROM users WHERE id = :id';
    $query = $pdo->prepare($sql);
    $query->execute(['id' => $id]);

    $users = $query->fetch();
	
	if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];

        $sql = 'UPDATE users SET name = :name, email = :email WHERE id = :id';
        $query = $pdo->prepare($sql);
      
       
        $query->bindParam('name' , $name);
        $query->bindParam('email' , $email);
        $query->bindParam('id' , $id);

        $query->execute();
		
        header("Location: users.php");
    }
?>

<div class="mt-2">
    <div class="container">
        <form method="post">
            <input type="text" name="name" value="<?php echo $users['name']; ?>" /><br>
            <input type="text" name="email" value="<?php echo $users['email']; ?>" /><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</div>
