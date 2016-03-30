<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="upload.css"  charset="utf-8">
        <title>Upload</title>
  </head>
  <body>
    <form  action="upload.php" method="post">
      <label for="gender">Gender</label>
      <input type="text" name="gender" placeholder="Gender">
      <input type="text" name="exam" placeholder="Php Exam">
      <input type="submit" name="submit" value="Submit">
    </form>
    <hr>
    <?php
if (!empty($_POST['submit'])) {
  $gender=$_POST['gender'];
  $exam=$_POST['exam'];
}
$conn = mysqli_connect('localhost', 'root', '', 'php_book');
$insert_query = 	"INSERT INTO `exercise`( `gender`, `exam`) VALUES ('$gender','$exam')";
    $insert_result= mysqli_query($conn, $insert_query);
    if ($insert_result) {
      echo "Успешно добавихте задача!";
    }else{
      echo "Неуспешна задача";
    }

     ?>
  </body>
</html>
