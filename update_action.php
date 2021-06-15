<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_final_project";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$cars = $_GET["KindOfCar"];
$cars = input_treat($cars);
// echo $cars;

function input_treat($input){
	if(gettype($input)=="string"){
		return htmlentities(trim($input),ENT_QUOTES);
	}
	else if(gettype($input)=="array"){
		$nd="";
		foreach($input as $v){
			$nd .=htmlentities(trim($v),ENT_QUOTES)." ";
		}
		return $nd;
	}
	else{
		return false;
	}
}

$query = [
  'table' => htmlspecialchars($_GET["table"]),
  'time' => htmlspecialchars($_GET["HappenTime"]),
  'location' => htmlspecialchars($_GET["HappenLocation"]),
  'Death' => htmlspecialchars($_GET["Death"]),
  'Injury' => htmlspecialchars($_GET["Injury"]),
  'longitude' => htmlspecialchars($_GET["Longitude"]),
  'latitude' => htmlspecialchars($_GET["Latitude"])
];


checkData($query['table'],$query['time'], $query['location']
, $query['Death'], $query['Injury'], $cars, $query['longitude'],$query['latitude'], $conn);

function checkData($table, $time, $location, $Death, $Injury, $car, $longitude, $latitude, $conn){
	$sql_check = "SELECT HappenTime FROM $table WHERE HappenTime='$time'";
	$count = mysqli_query($conn, $sql_check);
	// echo "$count";
	if(mysqli_num_rows($count) == 0){
		header("Location: ./update_page.php?message=更新失敗，沒有此筆資料");
	}
	else{
		updateData($table, $time, $location, $Death, $Injury, $car, $longitude, $latitude, $conn);
	}

}

function updateData($table, $time, $location, $Death, $Injury, $car, $longitude, $latitude, $conn) {
	$DeathInjury = '死亡' . $Death . ';' . '受傷' . $Injury;
	$sql = "UPDATE $table SET HappenLocation = '$location', DeathInjury = '$DeathInjury'
	, KindOfCar= '$car', Longitude = '$longitude', Latitude = '$latitude' WHERE HappenTime = '$time'";
	mysqli_query($conn, $sql);
	header("Location: ./update_page.php?message=成功更新資料");
}

$conn->close();
?>