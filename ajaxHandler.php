
<?php 
if(isset($_POST['text'])){

	$searchText = $_POST['text']; 
}



$mysqli = new mysqli("localhost", "root", "", "telephone");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
else{

		echo "Connected to the databse"."\n";

}

$sql = "SELECT *FROM directory where name like '%$searchText%'";
// echo $sql;
if ($result=mysqli_query($mysqli,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("%s (%s)\n ",$row[0],$row[1]);
   	echo $row[2].$row[4];
    }
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($mysqli);

?>