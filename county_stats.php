<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Statistics of Counties</title>
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
<strong>107-109年A1, A2事故各縣市統計</strong>
</h1>
<br>
<table>
<caption>107-109年A1, A2事故北部各縣市統計</caption>
<tr>
	<th>縣市</th>
	<th>臺北市</th>
	<th>基隆市</th>
	<th>新北市</th>
	<th>宜蘭縣</th>
	<th>新竹市</th>
	<th>新竹縣</th>
	<th>桃園市</th>
</tr>
<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "db_final_project";

	$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	
	if(!$con){
		die("Could not connect to server: ".mysqli_connect_error());
	}
	
	$sql_county = array("臺北市%'", "基隆市%'", "新北市%'", "宜蘭縣%'", "新竹市%'", "新竹縣%'", "桃園市%'");
	$count = array(0, 0, 0, 0, 0, 0, 0);
	$count_a2 = array(0, 0, 0, 0, 0, 0, 0);
	for($x = 0; $x < count($sql_county); $x++){
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `107a1` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count[$x] += $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `108a1` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count[$x] += $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `109a1` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count[$x] += $row['cnt'];
	}
	
	for($x = 0; $x < count($sql_county); $x++){
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `107a2` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count_a2[$x] += $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `108a2_jantojun` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count_a2[$x] += $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `108a2_jultode` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count_a2[$x] += $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `109a2_jantojun` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count_a2[$x] += $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `109a2_jultode` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count_a2[$x] += $row['cnt'];
	}
	
	echo "<tr>";
	echo "<th>A1事故累計數量（件）</th>";
	for($x = 0; $x < count($sql_county); $x++){
		echo "<td>" . $count[$x] . "</td>";
	}
	echo "</tr>";
	
	echo "<tr>";
	echo "<th>A2事故累計數量（件）</th>";
	for($x = 0; $x < count($sql_county); $x++){
		echo "<td>" . $count_a2[$x] . "</td>";
	}
	echo "</tr>";
	mysqli_close($con);
?>
</table>

<br>

<table>
<caption>107-109年A1, A2事故中部各縣市統計</caption>
<tr>
	<th>縣市</th>
	<th>苗栗縣</th>
	<th>臺中市</th> 
	<th>彰化縣</th> 
	<th>南投縣</th>  
	<th>雲林縣</th>
</tr>
<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "db_final_project";

	$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	
	if(!$con){
		die("Could not connect to server: ".mysqli_connect_error());
	}
	
	$sql_county = array("苗栗縣%'", "臺中市%'", "彰化縣%'", "南投縣%'", "雲林縣%'");
	$count = array(0, 0, 0, 0, 0);
	$count_a2 = array(0, 0, 0, 0, 0);
	for($x = 0; $x < count($sql_county); $x++){
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `107a1` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count[$x] += $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `108a1` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count[$x] += $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `109a1` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count[$x] += $row['cnt'];
	}
	
	for($x = 0; $x < count($sql_county); $x++){
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `107a2` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count_a2[$x] += $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `108a2_jantojun` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count_a2[$x] += $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `108a2_jultode` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count_a2[$x] += $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `109a2_jantojun` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count_a2[$x] += $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `109a2_jultode` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count_a2[$x] += $row['cnt'];
	}
	
	echo "<tr>";
	echo "<th>A1事故累計數量（件）</th>";
	for($x = 0; $x < count($sql_county); $x++){
		echo "<td>" . $count[$x] . "</td>";
	}
	echo "</tr>";
	
	echo "<tr>";
	echo "<th>A2事故累計數量（件）</th>";
	for($x = 0; $x < count($sql_county); $x++){
		echo "<td>" . $count_a2[$x] . "</td>";
	}
	echo "</tr>";
	mysqli_close($con);
?>
</table>

<br>

<table>
<caption>107-109年A1, A2事故南部各縣市統計</caption>
<tr>
	<th>縣市</th> 
	<th>嘉義市</th> 
	<th>嘉義縣</th> 
	<th>臺南市</th> 
	<th>高雄市</th> 
	<th>澎湖縣</th> 
	<th>屏東縣</th>
</tr>
<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "db_final_project";

	$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	
	if(!$con){
		die("Could not connect to server: ".mysqli_connect_error());
	}
	
	$sql_county = array("嘉義市%'", "嘉義縣%'", "臺南市%'", "高雄市%'", "澎湖縣%'", "屏東縣%'");
	$count = array(0, 0, 0, 0, 0, 0);
	$count_a2 = array(0, 0, 0, 0, 0, 0);
	for($x = 0; $x < count($sql_county); $x++){
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `107a1` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count[$x] += $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `108a1` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count[$x] += $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `109a1` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count[$x] += $row['cnt'];
	}
	
	for($x = 0; $x < count($sql_county); $x++){
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `107a2` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count_a2[$x] += $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `108a2_jantojun` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count_a2[$x] += $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `108a2_jultode` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count_a2[$x] += $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `109a2_jantojun` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count_a2[$x] += $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `109a2_jultode` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count_a2[$x] += $row['cnt'];
	}
	
	echo "<tr>";
	echo "<th>A1事故累計數量（件）</th>";
	for($x = 0; $x < count($sql_county); $x++){
		echo "<td>" . $count[$x] . "</td>";
	}
	echo "</tr>";
	
	echo "<tr>";
	echo "<th>A2事故累計數量（件）</th>";
	for($x = 0; $x < count($sql_county); $x++){
		echo "<td>" . $count_a2[$x] . "</td>";
	}
	echo "</tr>";
	mysqli_close($con);
?>
</table>

<br>

<table>
<caption>107-109年A1, A2事故東部各縣市統計</caption>
<tr>
	<th>縣市</th> 
	<th>花蓮縣</th>
	<th>臺東縣</th>
</tr>
<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "db_final_project";

	$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	
	if(!$con){
		die("Could not connect to server: ".mysqli_connect_error());
	}
	
	$sql_county = array("花蓮縣%'", "臺東縣%'");
	$count = array(0, 0);
	$count_a2 = array(0, 0);
	for($x = 0; $x < count($sql_county); $x++){
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `107a1` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count[$x] += $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `108a1` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count[$x] += $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `109a1` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count[$x] += $row['cnt'];
	}
	
	for($x = 0; $x < count($sql_county); $x++){
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `107a2` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count_a2[$x] += $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `108a2_jantojun` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count_a2[$x] += $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `108a2_jultode` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count_a2[$x] += $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `109a2_jantojun` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count_a2[$x] += $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `109a2_jultode` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count_a2[$x] += $row['cnt'];
	}
	
	echo "<tr>";
	echo "<th>A1事故累計數量（件）</th>";
	for($x = 0; $x < count($sql_county); $x++){
		echo "<td>" . $count[$x] . "</td>";
	}
	echo "</tr>";
	
	echo "<tr>";
	echo "<th>A2事故累計數量（件）</th>";
	for($x = 0; $x < count($sql_county); $x++){
		echo "<td>" . $count_a2[$x] . "</td>";
	}
	echo "</tr>";
	mysqli_close($con);
?>
</table>

<br>

<table>
<caption>107-109年A1, A2事故福建省各縣市統計</caption>
<tr>
	<th>縣市</th>
	<th>金門縣</th> 
	<th>連江縣</th>
</tr>
<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "db_final_project";

	$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	
	if(!$con){
		die("Could not connect to server: ".mysqli_connect_error());
	}
	
	$sql_county = array("金門縣%'", "連江縣%'");
	$count = array(0, 0);
	$count_a2 = array(0, 0);
	for($x = 0; $x < count($sql_county); $x++){
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `107a1` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count[$x] += $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `108a1` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count[$x] += $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `109a1` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count[$x] += $row['cnt'];
	}
	
	for($x = 0; $x < count($sql_county); $x++){
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `107a2` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count_a2[$x] += $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `108a2_jantojun` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count_a2[$x] += $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `108a2_jultode` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count_a2[$x] += $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `109a2_jantojun` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count_a2[$x] += $row['cnt'];
		
		$sql = "SELECT COUNT(*) AS 'cnt' FROM `109a2_jultode` WHERE HappenLocation LIKE '%";
		$sql .= $sql_county[$x];
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$count_a2[$x] += $row['cnt'];
	}
	
	echo "<tr>";
	echo "<th>A1事故累計數量（件）</th>";
	for($x = 0; $x < count($sql_county); $x++){
		echo "<td>" . $count[$x] . "</td>";
	}
	echo "</tr>";
	
	echo "<tr>";
	echo "<th>A2事故累計數量（件）</th>";
	for($x = 0; $x < count($sql_county); $x++){
		echo "<td>" . $count_a2[$x] . "</td>";
	}
	echo "</tr>";
	mysqli_close($con);
?>
</table>
  
</body>
<br>
<input type = "button" value = "回到主頁面" onclick = "location.href='index.html'">
</html>
