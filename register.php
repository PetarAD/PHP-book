<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="register.css" charset="utf-8">
    <meta charset="utf-8">
    <title>Register</title>
  </head>
  <body>
    <header>
      <h1>
        PHP BOOK
      </h1>
    </header>
    <h2>Register form</h2>
    <form  action="register.php" method="post">
      <label for="username"> Input username</label>
      <input type="text" name="username" placeholder="Username">
      <br>
      <label for="password">Input password</label>
      <input type="password" name="password" placeholder="Password">
      <br>
      <label for="mail">Input Email</label>
      <input type="email" name="mail" placeholder="Email">
      <br>
      <label for="Name">Input First Name</label>
      <input type="text" name="Name" placeholder="First name">
      <br>
      <label for="Last">Input Last Name</label>
      <input type="text" name="Last" placeholder="Last name">
      <br>
      <input type="submit" name="submit" value="Register" id="button">
    </form>
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'php_book');
    if (!empty($_POST['submit'])) {
      $username=$_POST['username'];
      $password=$_POST['password'];
      $mail=$_POST['mail'];
      $name=$_POST['Name'];
      $last=$_POST['Last'];


    $insert_query ="INSERT INTO user_info( username, password, email, first_name, last_name ) VALUES ('$username','$password','$mail','$name','$last' )";
        $insert_result= mysqli_query($conn, $insert_query);
        if ($insert_result) {
          echo "Успешно добавихте се регистрирахте!";
          echo "<a href='http://localhost/php-book/book.php'>Log in</a>";
        }else{
          echo "Неуспешна регистрация";
        }

      }
     ?>
  </body>
</html>
