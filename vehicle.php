<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Statistics of Vehicles</title>
  <style>
	table, th, td {
		border: 1px solid #009393;
		border-collapse: collapse;
		color: #009393;
		font-family:courier;
		width: 100%;
	}
	th, td {
		width: 50px;
		padding: 15px;
		text-align: center;
	}
	td {
		color: black;
	}
	caption {
		font-size: 150%;
		color: black;
		font-family:courier;
	}
	input[type=button] {
		width: 100%;
		background-color: #009393;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		border-radius: 4px;
		cursor: pointer;
	}
	input[type=button]:hover {
		background-color: #45a049;
	}
	</style>
</head>

<body>

<h1 style="font-size:2.0em;text-align:center;">
<strong>107-109年A1, A2事故車種統計</strong>
</h1>
<br>

<table>
<caption>107-109年A1事故車種統計</caption>
<tr>
	<th>車種\年份</th>
	<!--<th bgcolor='#D2E9FF'>107年</th>
	<th bgcolor='#FFECEC'>108年</th>
	<th bgcolor='#D2E9FF'>109年</th>
	<th bgcolor='#FFECEC'>總計</th>-->
	<th>107年</th>
	<th>108年</th>
	<th>109年</th>
	<th>總計</th>
</tr>
<tr>
<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "db_final_project";

	$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	
	if(!$con){
		die("Could not connect to server: ".mysqli_connect_error());
	}
	
	$county_vehicle = array("行人", "腳踏自行車", "電動輔助自行車", "電動自行車","小型輕型-機車", "普通輕型-機車", "普通重型-機車", "大型重型1(550C.C.以上)-機車", "大型重型2(250-550C.C.)-機車", "特種車", "小客車", "大客車", "小貨車", "大貨車");
	$vehicle_str = "%'";
	$sum = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
	$sum107 = 0;
	$sum108 = 0;
	$sum109 = 0;
	$sumAll = 0;
	
	for($x = 0; $x < count($county_vehicle); $x++){
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `107a1` WHERE KindOfCar LIKE '%";
		$sql .= $county_vehicle[$x];
		$sql .= $vehicle_str;
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$sum[$x] += $row['cnt'];
		$sum107 += $row['cnt'];
		$sumAll += $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `108a1` WHERE KindOfCar LIKE '%";
		$sql .= $county_vehicle[$x];
		$sql .= $vehicle_str;
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$sum[$x] += $row['cnt'];
		$sum108 += $row['cnt'];
		$sumAll += $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `109a1` WHERE KindOfCar LIKE '%";
		$sql .= $county_vehicle[$x];
		$sql .= $vehicle_str;
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$sum[$x] += $row['cnt'];
		$sum109 += $row['cnt'];
		$sumAll += $row['cnt'];
	}
	
	for($x = 0; $x < count($county_vehicle); $x++){
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `107a1` WHERE KindOfCar LIKE '%";
		$sql .= $county_vehicle[$x];
		$sql .= $vehicle_str;
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		echo "<th>" . $county_vehicle[$x] . "</th>";
		echo "<td>" . $row['cnt'] . " (" . round((floatval($row['cnt']) / floatval($sum107) * 100), 1) . "%)" ."</td>";
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `108a1` WHERE KindOfCar LIKE '%";
		$sql .= $county_vehicle[$x];
		$sql .= $vehicle_str;
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		echo "<td>" . $row['cnt'] . " (" . round((floatval($row['cnt']) / floatval($sum108) * 100), 1) . "%)" ."</td>";
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `109a1` WHERE KindOfCar LIKE '%";
		$sql .= $county_vehicle[$x];
		$sql .= $vehicle_str;
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		echo "<td>" . $row['cnt'] . " (" . round((floatval($row['cnt']) / floatval($sum109) * 100), 1) . "%)" ."</td>";
		
		echo "<td>" . $sum[$x] . " (" . round((floatval($sum[$x]) / floatval($sumAll) * 100), 1) . "%)" ."</td>";
		echo "</tr>";
	}
	mysqli_close($con);
?>
</tr>
</table>

<br>
<br>

<table>
<caption>107-109年A2事故車種統計</caption>
<tr>
	<th>車種\年份</th>
	<!--<th bgcolor='#D2E9FF'>107年</th>
	<th bgcolor='#FFECEC'>108年</th>
	<th bgcolor='#D2E9FF'>109年</th>
	<th bgcolor='#FFECEC'>總計</th>-->
	<th>107年</th>
	<th>108年</th>
	<th>109年</th>
	<th>總計</th>
</tr>
<tr>
<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "db_final_project";

	$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	
	if(!$con){
		die("Could not connect to server: ".mysqli_connect_error());
	}
	
	$county_vehicle = array("行人", "腳踏自行車", "電動輔助自行車", "電動自行車","小型輕型-機車", "普通輕型-機車", "普通重型-機車", "大型重型1(550C.C.以上)-機車", "大型重型2(250-550C.C.)-機車", "特種車", "小客車", "大客車", "小貨車", "大貨車");
	$vehicle_str = "%'";
	$sum = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
	$sum107 = 0;
	$sum108 = 0;
	$sum109 = 0;
	$sumAll = 0;
	
	for($x = 0; $x < count($county_vehicle); $x++){
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `107a2` WHERE KindOfCar LIKE '%";
		$sql .= $county_vehicle[$x];
		$sql .= $vehicle_str;
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$sum[$x] += $row['cnt'];
		$sum107 += $row['cnt'];
		$sumAll += $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `108a2_jantojun` WHERE KindOfCar LIKE '%";
		$sql .= $county_vehicle[$x];
		$sql .= $vehicle_str;
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$sum[$x] += $row['cnt'];
		$sum108 += $row['cnt'];
		$sumAll += $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `108a2_jultode` WHERE KindOfCar LIKE '%";
		$sql .= $county_vehicle[$x];
		$sql .= $vehicle_str;
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$sum[$x] += $row['cnt'];
		$sum108 += $row['cnt'];
		$sumAll += $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `109a2_jantojun` WHERE KindOfCar LIKE '%";
		$sql .= $county_vehicle[$x];
		$sql .= $vehicle_str;
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$sum[$x] += $row['cnt'];
		$sum109 += $row['cnt'];
		$sumAll += $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `109a2_jultode` WHERE KindOfCar LIKE '%";
		$sql .= $county_vehicle[$x];
		$sql .= $vehicle_str;
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$sum[$x] += $row['cnt'];
		$sum109 += $row['cnt'];
		$sumAll += $row['cnt'];
	}
	
	for($x = 0; $x < count($county_vehicle); $x++){
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `107a2` WHERE KindOfCar LIKE '%";
		$sql .= $county_vehicle[$x];
		$sql .= $vehicle_str;
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		echo "<th>" . $county_vehicle[$x] . "</th>";
		echo "<td>" . $row['cnt'] . " (" . round((floatval($row['cnt']) / floatval($sum107) * 100), 1) . "%)" ."</td>";
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `108a2_jantojun` WHERE KindOfCar LIKE '%";
		$sql .= $county_vehicle[$x];
		$sql .= $vehicle_str;
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$temp = $row['cnt'];
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `108a2_jultode` WHERE KindOfCar LIKE '%";
		$sql .= $county_vehicle[$x];
		$sql .= $vehicle_str;
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$temp += $row['cnt'];
		echo "<td>" . $temp . " (" . round((floatval($temp) / floatval($sum108) * 100), 1) . "%)" ."</td>";
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `109a2_jantojun` WHERE KindOfCar LIKE '%";
		$sql .= $county_vehicle[$x];
		$sql .= $vehicle_str;
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$temp = $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `109a2_jultode` WHERE KindOfCar LIKE '%";
		$sql .= $county_vehicle[$x];
		$sql .= $vehicle_str;
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$temp += $row['cnt'];
		echo "<td>" . $temp . " (" . round((floatval($temp) / floatval($sum109) * 100), 1) . "%)" ."</td>";
		
		echo "<td>" . $sum[$x] . " (" . round((floatval($sum[$x]) / floatval($sumAll) * 100), 1) . "%)" ."</td>";
		echo "</tr>";
	}
	mysqli_close($con);
?>
</tr>
</table>

</body>


<br>
<input type = "button" value = "回到主頁面" onclick = "location.href='index.html'">
</html>
