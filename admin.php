<?php include('server.php') ?>
<?php  
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['login']);
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="header">
  <h2>Home Page</h2>
</div>
<div class="content">
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['login'])) : ?>

      <p>Welcome <strong>
        <?php
           echo $_SESSION['login'];
        ?>
        </strong></p>
      <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>

<?php
$con = mysqli_connect("127.0.0.1", "root", "", "testing");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }
 $sql = 'SELECT * FROM person';
 $res = mysqli_query($con, $sql);
?>
  <table class="header">
    <caption class="title">All users</caption>
    <thead>
      <tr>
        <th>id</th>
        <th>login</th>
        <th>fname</th>
        <th>lname</th>
        <th>role</th>
      </tr>
    </thead>
    <tbody>
    <?php
  
    $no   = 1;
    $total  = 0;
    while ($row = mysqli_fetch_assoc($res))
    {
        if($row['login']==='admin_log'){
            continue;
        }
      echo 
      '<tr>
        <td>'.$no.'</td>
        <td>'.$row['login'].'</td>
        <td>'.$row['fname'].'</td>
        <td>'.$row['lname'].'</td>
        <td>'.$row['role'].'</td>
      </tr>';
      $no++;
    }
    mysqli_close($db);
  ?>
    </tbody>
        <p> <a href="register.html?submit='1'" style="color: red">register someone</a> </p>
        <p> <a href="delete.html?submit='1'" style="color: red">delete someone</a> </p>
        <p> <a href="edit.html?submit='1'" style="color: red">edit someone</a> </p>
</table>

</body>
</html>