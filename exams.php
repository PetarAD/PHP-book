<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="read.css"  charset="utf-8">
    <title>Exams</title>
  </head>
  <body>
    <form  action="exams.php" method="get">
      <label for="gender">Gender chose</label>
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
      <input type="submit" name="submit" value="submit" id="button">
    </form>
    <a href="http://localhost/php-book/upload.php">upload</a>
    <?php
    if (isset($_GET['submit'])) {
      $gender=$_GET['gender'];

    $conn = mysqli_connect('localhost', 'root', '', 'php_book');
    $read_query = 	"SELECT * FROM `exercise` WHERE `gender` LIKE '%$gender'";
  $read_result = mysqli_query($conn, $read_query);
    	if (mysqli_num_rows($read_result) > 0) {
    		while($row = mysqli_fetch_assoc($read_result)){
    		echo $row["exam"]."<hr>";

    		}
    	}

    }
     ?>
  </body>
</html>
