<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exams</title>
  </head>
  <body>
    <form  action="exams.php" method="get">
      <label for="gender">chose gender</label>
      <input type="text" name="gender" placeholder="Please chose gender">
      <input type="submit" name="submit" value="submit">
    </form>
    <?php
    if (isset($_GET['submit'])) {
      $gender=$_GET['gender'];
    }
    $conn = mysqli_connect('localhost', 'root', '', 'php_book');
    $read_query = 	"SELECT * FROM `exercise` WHERE `gender` LIKE '%$gender'";
  $read_result = mysqli_query($conn, $read_query);

    	if (mysqli_num_rows($read_result) > 0) {
    		while($row = mysqli_fetch_assoc($read_result)){
    		echo  $row['exam'];

    		}
    	}
     ?>
  </body>
</html>
