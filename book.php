<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" >
    <title>PHP Book</title>
  </head>
  <body>
    <?php
  if (isset($_POST['submit'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];

  $conn = mysqli_connect('localhost', 'root', '', 'php_book');
  $read_query = 	"SELECT * FROM `user_info`";
  $read_result = mysqli_query($conn, $read_query);
  	if (mysqli_num_rows($read_result) > 0) {
  		while($row = mysqli_fetch_assoc($read_result)){
  if ($username==$row['username']) {
    if ($password==$row['password']) {
  // echo "<a href='http://localhost/php-book/upload.php'>go to</a>";
  header('Location: http://localhost/php-book/upload.php');
    }
    else {
      echo "You have worng password";
    //  echo "obrakal si reisa";
    }
  }
  //echo $row['username'];
  //echo $row['password'];

  }
  }
}
     ?>
        <header>
          <h1>
            PHP BOOK
          </h1>
        </header>
          <form action="book.php" method="post">
          <label for="username">Input username</label>
          <input type="text" name="username" placeholder="Username">
          <br>
          <label for="password">Input password</label>
          <input type="password" name="password" placeholder="Password">
          <br>
          <input type="submit" name="submit" value="Log in" id='button'>
          <a href="register.php">Register</a>
        </form>

  </body>
</html>
