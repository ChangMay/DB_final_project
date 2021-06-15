<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_final_project";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$query = [
  'table' => htmlspecialchars($_GET["table"]),
  'time' => htmlspecialchars($_GET["HappenTime"]),
];


checkData($query['table'], $query['time'], $conn);

function checkData($table, $time, $conn){
	$sql_check = "SELECT HappenTime FROM $table WHERE HappenTime='$time'";
	$count = mysqli_query($conn, $sql_check);
	if(mysqli_num_rows($count) == 0){
		header("Location: ./delete_page.php?message=刪除失敗，沒有此筆資料");
	}
	else{
		deleteData($table, $time, $conn);
	}
}

function deleteData($table, $time, $conn) {
	$sql = "DELETE FROM $table WHERE HappenTime='$time'";
	mysqli_query($conn, $sql);
	header("Location: ./delete_page.php?message=成功刪除資料");
}

$conn->close();
?>

