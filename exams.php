<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="read.css"  charset="utf-8">
    <title>Exams</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
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
        echo '<p class="bg-danger">'. $row["exam"].'</p>';
  		}
    	}

    }
     ?>
  </body>
</html>
