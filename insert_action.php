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

insertData($query['table'], $query['time'], $query['location']
	, $query['Death'], $query['Injury'], $cars, $query['longitude'],$query['latitude'],$conn);

function insertData($table, $time, $location, $Death, $Injury, $car, $longitude, $latitude, $conn) {
	$DeathInjury = '死亡' . $Death . ';' . '受傷' . $Injury;
	$sql = "INSERT INTO $table (HappenTime, HappenLocation, DeathInjury, KindOfCar, Longitude, Latitude)
	VALUES ('$time', '$location', '$DeathInjury', '$car', '$longitude',$latitude)";
	if (mysqli_query($conn, $sql)){
		header("Location: ./insert_main_page.php?message=成功增加資料");
	} 
	else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}  
}

$conn->close();