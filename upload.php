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
      <select  name="gender">
      <option value="php">PHP</option>
      <option value="if">If/switch</option>
      <option value="form">Php forms</option>
      <option value="foreach">foreach</option>
      <option value="array">array</option>
      <option value="function">function</option>
      <option value="mysql">mysql</option>
      <option value="crud">Crud</option>
      <option value="string_function">String function</option>
    </select>
      <textarea name="exam" rows="30" cols="100" placeholder="PHP exam"></textarea>
      <input type="submit" name="submit" value="Submit" id="button">
    </form>
    <hr>
    <a href="http://localhost/php-book/exams.php">read</a>
    <?php
if (!empty($_POST['submit'])) {
  $gender=$_POST['gender'];
  $exam=$_POST['exam'];

$conn = mysqli_connect('localhost', 'root', '', 'php_book');
$insert_query = 	"INSERT INTO `exercise`( `gender`, `exam`) VALUES ('$gender','$exam')";
    $insert_result= mysqli_query($conn, $insert_query);
    if ($insert_result) {
      echo "Успешно добавихте задача!";
    }else{
      echo "Неуспешна задача";
    }
}
     ?>
  </body>
</html>
