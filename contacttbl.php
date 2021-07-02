<?php
  require 'includes/dbconnect.php';

$query = $pdo -> query ('SELECT * from person');
$person = $query -> fetchALL();

?>


                      <table class="tblstyle">
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
