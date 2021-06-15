<html>

<head>
	<meta charset="UTF-8">
	<title>Statistics of Campuses</title>
	<style>
		tr:hover {
			background-color: #D1E9E9;
		}
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
		}
		th, td {
			padding: 15px;
			width: 120px;
		}
		caption {
			font-size: 2.0em;
		}
		
		div {
			border-radius: 5px;
			background-color: #FFFFFF;
			padding: 20px;
		}
		body {
			background-color: #f2f2f2;
		}
	</style>
</head>

<body>

<div>
<table>
<?php
//ini_set('memory_limit', '256M');

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "db_final_project";

//$c_con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
/*
if(!$c_con){
	die("Could not connect to server: ".mysqli_connect_error());
}
*/
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$con){
	die("Could not connect to server: ".mysqli_connect_error());
}

$college = $_GET["college"];
$college2 = $_GET["college2"];

$c_sql = "SELECT longitude, latitude, name FROM `campus` WHERE id=$college";
$c_result = mysqli_query($con, $c_sql);
$c_row= mysqli_fetch_assoc($c_result);

if($college2 != "-1"){
	$c2_sql = "SELECT longitude, latitude, name FROM `campus` WHERE id=$college2";
	$c2_result = mysqli_query($con, $c2_sql);
	$c2_row= mysqli_fetch_assoc($c2_result);
}

$sql71 = "SELECT longitude, latitude, KindOfCar FROM `107a1`";
$result71 = mysqli_query($con, $sql71);
$result71_2 = mysqli_query($con, $sql71);

$sql81 = "SELECT longitude, latitude, KindOfCar FROM `108a1`";
$result81 = mysqli_query($con, $sql81);
$result81_2 = mysqli_query($con, $sql81);

$sql91 = "SELECT longitude, latitude, KindOfCar FROM `109a1`";
$result91 = mysqli_query($con, $sql91);
$result91_2 = mysqli_query($con, $sql91);

$count71 = 0;
$count81 = 0;
$count91 = 0;
$count71_2 = 0;
$count81_2 = 0;
$count91_2 = 0;

//$county_vehicle = array("0行人%'", "1腳踏自行車%'", "2電動輔助自行車%'", "3電動自行車%'","4小型輕型%'", "5普通輕型-機車%'", "6普通重型_機車%'", "7大型重型1%'", "8大型重型2%'", "9特種車%'", "10小客車%'", "11大客車%'", "12小貨車%'", "13大貨車%'");
$count71_v = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
$count81_v = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
$count91_v = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
$count71_v2 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
$count81_v2 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
$count91_v2 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

// college
if(mysqli_num_rows($result71) > 0){
	while($row = mysqli_fetch_assoc($result71)){
		if((abs($row["longitude"]-$c_row["longitude"]) < 0.02) and (abs($row["latitude"]-$c_row["latitude"]) < 0.02)){
			$count71++;
			if(strpos($row["KindOfCar"], "行人")){
				$count71_v[0]++;
			}
			if(strpos($row["KindOfCar"], "腳踏自行車")){
				$count71_v[1]++;
			}
			if(strpos($row["KindOfCar"], "電動輔助自行車")){
				$count71_v[2]++;
			}
			if(strpos($row["KindOfCar"], "電動自行車")){
				$count71_v[3]++;
			}
			if(strpos($row["KindOfCar"], "小型輕型")){
				$count71_v[4]++;
			}
			if(strpos($row["KindOfCar"], "普通輕型")){
				$count71_v[5]++;
			}
			if(strpos($row["KindOfCar"], "普通重型")){
				$count71_v[6]++;
			}
			if(strpos($row["KindOfCar"], "大型重型1")){
				$count71_v[7]++;
			}
			if(strpos($row["KindOfCar"], "大型重型2")){
				$count71_v[8]++;
			}
			if(strpos($row["KindOfCar"], "特種車")){
				$count71_v[9]++;
			}
			if(strpos($row["KindOfCar"], "小客車")){
				$count71_v[10]++;
			}
			if(strpos($row["KindOfCar"], "大客車")){
				$count71_v[11]++;
			}
			if(strpos($row["KindOfCar"], "小貨車")){
				$count71_v[12]++;
			}
			if(strpos($row["KindOfCar"], "大貨車")){
				$count71_v[13]++;
			}
		}
	}
}

if(mysqli_num_rows($result81) > 0){
	while($row = mysqli_fetch_assoc($result81)){
		if((abs($row["longitude"]-$c_row["longitude"]) < 0.02) and (abs($row["latitude"]-$c_row["latitude"]) < 0.02)){
			$count81++;
			if(strpos($row["KindOfCar"], "行人")){
				$count81_v[0]++;
			}
			if(strpos($row["KindOfCar"], "腳踏自行車")){
				$count81_v[1]++;
			}
			if(strpos($row["KindOfCar"], "電動輔助自行車")){
				$count81_v[2]++;
			}
			if(strpos($row["KindOfCar"], "電動自行車")){
				$count81_v[3]++;
			}
			if(strpos($row["KindOfCar"], "小型輕型")){
				$count81_v[4]++;
			}
			if(strpos($row["KindOfCar"], "普通輕型")){
				$count81_v[5]++;
			}
			if(strpos($row["KindOfCar"], "普通重型")){
				$count81_v[6]++;
			}
			if(strpos($row["KindOfCar"], "大型重型1")){
				$count81_v[7]++;
			}
			if(strpos($row["KindOfCar"], "大型重型2")){
				$count81_v[8]++;
			}
			if(strpos($row["KindOfCar"], "特種車")){
				$count81_v[9]++;
			}
			if(strpos($row["KindOfCar"], "小客車")){
				$count81_v[10]++;
			}
			if(strpos($row["KindOfCar"], "大客車")){
				$count81_v[11]++;
			}
			if(strpos($row["KindOfCar"], "小貨車")){
				$count81_v[12]++;
			}
			if(strpos($row["KindOfCar"], "大貨車")){
				$count81_v[13]++;
			}
		}
	}
}

if(mysqli_num_rows($result91) > 0){
	while($row = mysqli_fetch_assoc($result91)){
		if((abs($row["longitude"]-$c_row["longitude"]) < 0.02) and (abs($row["latitude"]-$c_row["latitude"]) < 0.02)){
			$count91++;
			if(strpos($row["KindOfCar"], "行人")){
				$count91_v[0]++;
			}
			if(strpos($row["KindOfCar"], "腳踏自行車")){
				$count91_v[1]++;
			}
			if(strpos($row["KindOfCar"], "電動輔助自行車")){
				$count91_v[2]++;
			}
			if(strpos($row["KindOfCar"], "電動自行車")){
				$count91_v[3]++;
			}
			if(strpos($row["KindOfCar"], "小型輕型")){
				$count91_v[4]++;
			}
			if(strpos($row["KindOfCar"], "普通輕型")){
				$count91_v[5]++;
			}
			if(strpos($row["KindOfCar"], "普通重型")){
				$count91_v[6]++;
			}
			if(strpos($row["KindOfCar"], "大型重型1")){
				$count91_v[7]++;
			}
			if(strpos($row["KindOfCar"], "大型重型2")){
				$count91_v[8]++;
			}
			if(strpos($row["KindOfCar"], "特種車")){
				$count91_v[9]++;
			}
			if(strpos($row["KindOfCar"], "小客車")){
				$count91_v[10]++;
			}
			if(strpos($row["KindOfCar"], "大客車")){
				$count91_v[11]++;
			}
			if(strpos($row["KindOfCar"], "小貨車")){
				$count91_v[12]++;
			}
			if(strpos($row["KindOfCar"], "大貨車")){
				$count91_v[13]++;
			}
		}
	}
}

// college2
if($college2 != "-1"){
	if(mysqli_num_rows($result71_2) > 0){
		while($row = mysqli_fetch_assoc($result71_2)){
			if((abs($row["longitude"]-$c2_row["longitude"]) < 0.02) and (abs($row["latitude"]-$c2_row["latitude"]) < 0.02)){
				$count71_2++;
				if(strpos($row["KindOfCar"], "行人")){
					$count71_v2[0]++;
				}
				if(strpos($row["KindOfCar"], "腳踏自行車")){
					$count71_v2[1]++;
				}
				if(strpos($row["KindOfCar"], "電動輔助自行車")){
					$count71_v2[2]++;
				}
				if(strpos($row["KindOfCar"], "電動自行車")){
					$count71_v2[3]++;
				}
				if(strpos($row["KindOfCar"], "小型輕型")){
					$count71_v2[4]++;
				}
				if(strpos($row["KindOfCar"], "普通輕型")){
					$count71_v2[5]++;
				}
				if(strpos($row["KindOfCar"], "普通重型")){
					$count71_v2[6]++;
				}
				if(strpos($row["KindOfCar"], "大型重型1")){
					$count71_v2[7]++;
				}
				if(strpos($row["KindOfCar"], "大型重型2")){
					$count71_v2[8]++;
				}
				if(strpos($row["KindOfCar"], "特種車")){
					$count71_v2[9]++;
				}
				if(strpos($row["KindOfCar"], "小客車")){
					$count71_v2[10]++;
				}
				if(strpos($row["KindOfCar"], "大客車")){
					$count71_v2[11]++;
				}
				if(strpos($row["KindOfCar"], "小貨車")){
					$count71_v2[12]++;
				}
				if(strpos($row["KindOfCar"], "大貨車")){
					$count71_v2[13]++;
				}
			}
		}
	}

	if(mysqli_num_rows($result81_2) > 0){
		while($row = mysqli_fetch_assoc($result81_2)){
			if((abs($row["longitude"]-$c2_row["longitude"]) < 0.02) and (abs($row["latitude"]-$c2_row["latitude"]) < 0.02)){
				$count81_2++;
				if(strpos($row["KindOfCar"], "行人")){
					$count81_v2[0]++;
				}
				if(strpos($row["KindOfCar"], "腳踏自行車")){
					$count81_v2[1]++;
				}
				if(strpos($row["KindOfCar"], "電動輔助自行車")){
					$count81_v2[2]++;
				}
				if(strpos($row["KindOfCar"], "電動自行車")){
					$count81_v2[3]++;
				}
				if(strpos($row["KindOfCar"], "小型輕型")){
					$count81_v2[4]++;
				}
				if(strpos($row["KindOfCar"], "普通輕型")){
					$count81_v2[5]++;
				}
				if(strpos($row["KindOfCar"], "普通重型")){
					$count81_v2[6]++;
				}
				if(strpos($row["KindOfCar"], "大型重型1")){
					$count81_v2[7]++;
				}
				if(strpos($row["KindOfCar"], "大型重型2")){
					$count81_v2[8]++;
				}
				if(strpos($row["KindOfCar"], "特種車")){
					$count81_v2[9]++;
				}
				if(strpos($row["KindOfCar"], "小客車")){
					$count81_v2[10]++;
				}
				if(strpos($row["KindOfCar"], "大客車")){
					$count81_v2[11]++;
				}
				if(strpos($row["KindOfCar"], "小貨車")){
					$count81_v2[12]++;
				}
				if(strpos($row["KindOfCar"], "大貨車")){
					$count81_v2[13]++;
				}
			}
		}
	}

	if(mysqli_num_rows($result91_2) > 0){
		while($row = mysqli_fetch_assoc($result91_2)){
			if((abs($row["longitude"]-$c2_row["longitude"]) < 0.02) and (abs($row["latitude"]-$c2_row["latitude"]) < 0.02)){
				$count91_2++;
				if(strpos($row["KindOfCar"], "行人")){
					$count91_v2[0]++;
				}
				if(strpos($row["KindOfCar"], "腳踏自行車")){
					$count91_v2[1]++;
				}
				if(strpos($row["KindOfCar"], "電動輔助自行車")){
					$count91_v2[2]++;
				}
				if(strpos($row["KindOfCar"], "電動自行車")){
					$count91_v2[3]++;
				}
				if(strpos($row["KindOfCar"], "小型輕型")){
					$count91_v2[4]++;
				}
				if(strpos($row["KindOfCar"], "普通輕型")){
					$count91_v2[5]++;
				}
				if(strpos($row["KindOfCar"], "普通重型")){
					$count91_v2[6]++;
				}
				if(strpos($row["KindOfCar"], "大型重型1")){
					$count91_v2[7]++;
				}
				if(strpos($row["KindOfCar"], "大型重型2")){
					$count91_v2[8]++;
				}
				if(strpos($row["KindOfCar"], "特種車")){
					$count91_v2[9]++;
				}
				if(strpos($row["KindOfCar"], "小客車")){
					$count91_v2[10]++;
				}
				if(strpos($row["KindOfCar"], "大客車")){
					$count91_v2[11]++;
				}
				if(strpos($row["KindOfCar"], "小貨車")){
					$count91_v2[12]++;
				}
				if(strpos($row["KindOfCar"], "大貨車")){
					$count91_v2[13]++;
				}
			}
		}
	}
}

echo "<caption><strong>107-109年 A1事故校園周邊統計</strong></caption>";
echo "<thead><th bgcolor='#E0E0E0'>A1 三年<br>總累積件數</th>";
echo "<th bgcolor='#FFFFFF'>".$c_row["name"]."</th>";
echo "<th colspan=3 bgcolor='#E0E0E0'>".$count71+$count81+$count91."</th>";
if($college2 != "-1"){
	echo "<th bgcolor='#FFFFFF'>".$c2_row["name"]."</th>";
	echo "<th colspan=3 bgcolor='#E0E0E0'>".$count71_2+$count81_2+$count91_2."</th></thead>";
}
else{
	echo "<th bgcolor='#FFFFFF'></th>";
	echo "<th colspan=3 bgcolor='#E0E0E0'></th></thead>";
}

echo "<tbody><tr>";
echo "<th colspan=3 bgcolor='#D2E9FF'>107年（件）</th>";
echo "<th colspan=3 bgcolor='#FFECEC'>108年（件）</th>";
echo "<th colspan=3 bgcolor='#D2E9FF'>109年（件）</th>";
echo "</tr>";

echo "<tr>";
echo "<th bgcolor='#FFFFFF'></th>";
echo "<th bgcolor='#FFFFFF'>".$c_row["name"]."</th>";
if($college2 != "-1")
	echo "<th bgcolor='#FFFFFF'>".$c2_row["name"]."</th>";
else
	echo "<th bgcolor='#FFFFFF'></th>";
echo "<th bgcolor='#FFFFFF'></th>";
echo "<th bgcolor='#FFFFFF'>".$c_row["name"]."</th>";
if($college2 != "-1")
	echo "<th bgcolor='#FFFFFF'>".$c2_row["name"]."</th>";
else
	echo "<th bgcolor='#FFFFFF'></th>";
echo "<th bgcolor='#FFFFFF'></th>";
echo "<th bgcolor='#FFFFFF'>".$c_row["name"]."</th>";
if($college2 != "-1")
	echo "<th bgcolor='#FFFFFF'>".$c2_row["name"]."</th>";
else
	echo "<th bgcolor='#FFFFFF'></th>";
echo "</tr>";

echo "<tr>";
echo "<th bgcolor='#E0E0E0'>總件數</th>";
echo "<th bgcolor='#E0E0E0'><center>".$count71."</center></th>";
if($college2 != "-1"){
	echo "<th bgcolor='#E0E0E0'><center>".$count71_2."</center></th>";
}
else{
	echo "<th bgcolor='#E0E0E0'></th>";
}
echo "<th bgcolor='#E0E0E0'>總件數</th>";
echo "<th bgcolor='#E0E0E0'><center>".$count81."</center></th>";
if($college2 != "-1"){
	echo "<th bgcolor='#E0E0E0'><center>".$count81_2."</center></th>";
}
else{
	echo "<th bgcolor='#E0E0E0'></th>";
}
echo "<th bgcolor='#E0E0E0'>總件數</th>";
echo "<th bgcolor='#E0E0E0'><center>".$count91."</center></th>";
if($college2 != "-1"){
	echo "<th bgcolor='#E0E0E0'><center>".$count91_2."</center></th>";
}
else{
	echo "<th bgcolor='#E0E0E0'></th>";
}
echo "</tr>";

// 行人
echo "<tr>";
echo "<td><strong>行人</strong></td>";
if($count71 > 0)
	echo "<td><center>".$count71_v[0]."（".round($count71_v[0]/$count71*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count71_2 > 0)
	echo "<td><center>".$count71_v2[0]."（".round($count71_v2[0]/$count71_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>行人</strong></td>";
if($count81 > 0)
	echo "<td><center>".$count81_v[0]."（".round($count81_v[0]/$count81*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count81_2 > 0)
	echo "<td><center>".$count81_v2[0]."（".round($count81_v2[0]/$count81_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>行人</strong></td>";
if($count91 > 0)
	echo "<td><center>".$count91_v[0]."（".round($count91_v[0]/$count91*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count91_2 > 0)
	echo "<td><center>".$count91_v2[0]."（".round($count91_v2[0]/$count91_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "</tr>";

// 腳踏自行車
echo "<tr>";
echo "<td><strong>腳踏自行車</strong></td>";
if($count71 > 0)
	echo "<td><center>".$count71_v[1]."（".round($count71_v[1]/$count71*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count71_2 > 0)
	echo "<td><center>".$count71_v2[1]."（".round($count71_v2[1]/$count71_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>腳踏自行車</strong></td>";
if($count81 > 0)
	echo "<td><center>".$count81_v[1]."（".round($count81_v[1]/$count81*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count81_2 > 0)
	echo "<td><center>".$count81_v2[1]."（".round($count81_v2[1]/$count81_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>腳踏自行車</strong></td>";
if($count91 > 0)
	echo "<td><center>".$count91_v[1]."（".round($count91_v[1]/$count91*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count91_2 > 0)
	echo "<td><center>".$count91_v2[1]."（".round($count91_v2[1]/$count91_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "</tr>";

// 電動輔助自行車
echo "<tr>";
echo "<td><strong>電動輔助自行車</strong></td>";
if($count71 > 0)
	echo "<td><center>".$count71_v[2]."（".round($count71_v[2]/$count71*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count71_2 > 0)
	echo "<td><center>".$count71_v2[2]."（".round($count71_v2[2]/$count71_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>電動輔助自行車</strong></td>";
if($count81 > 0)
	echo "<td><center>".$count81_v[2]."（".round($count81_v[2]/$count81*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count81_2 > 0)
	echo "<td><center>".$count81_v2[2]."（".round($count81_v2[2]/$count81_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>電動輔助自行車</strong></td>";
if($count91 > 0)
	echo "<td><center>".$count91_v[2]."（".round($count91_v[2]/$count91*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count91_2 > 0)
	echo "<td><center>".$count91_v2[2]."（".round($count91_v2[2]/$count91_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "</tr>";

// 電動自行車
echo "<tr>";
echo "<td><strong>電動自行車</strong></td>";
if($count71 > 0)
	echo "<td><center>".$count71_v[3]."（".round($count71_v[3]/$count71*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count71_2 > 0)
	echo "<td><center>".$count71_v2[3]."（".round($count71_v2[3]/$count71_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>電動自行車</strong></td>";
if($count81 > 0)
	echo "<td><center>".$count81_v[3]."（".round($count81_v[3]/$count81*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count81_2 > 0)
	echo "<td><center>".$count81_v2[3]."（".round($count81_v2[3]/$count81_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>電動自行車</strong></td>";
if($count91 > 0)
	echo "<td><center>".$count91_v[3]."（".round($count91_v[3]/$count91*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count91_2 > 0)
	echo "<td><center>".$count91_v2[3]."（".round($count91_v2[3]/$count91_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "</tr>";

// 小型輕型機車
echo "<tr>";
echo "<td><strong>小型輕型機車</strong></td>";
if($count71 > 0)
	echo "<td><center>".$count71_v[4]."（".round($count71_v[4]/$count71*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count71_2 > 0)
	echo "<td><center>".$count71_v2[4]."（".round($count71_v2[4]/$count71_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>小型輕型機車</strong></td>";
if($count81 > 0)
	echo "<td><center>".$count81_v[4]."（".round($count81_v[4]/$count81*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count81_2 > 0)
	echo "<td><center>".$count81_v2[4]."（".round($count81_v2[4]/$count81_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>小型輕型機車</strong></td>";
if($count91 > 0)
	echo "<td><center>".$count91_v[4]."（".round($count91_v[4]/$count91*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count91_2 > 0)
	echo "<td><center>".$count91_v2[4]."（".round($count91_v2[4]/$count91_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "</tr>";

// 普通輕型機車
echo "<tr>";
echo "<td><strong>普通輕型機車</strong></td>";
if($count71 > 0)
	echo "<td><center>".$count71_v[5]."（".round($count71_v[5]/$count71*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count71_2 > 0)
	echo "<td><center>".$count71_v2[5]."（".round($count71_v2[5]/$count71_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>普通輕型機車</strong></td>";
if($count81 > 0)
	echo "<td><center>".$count81_v[5]."（".round($count81_v[5]/$count81*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count81_2 > 0)
	echo "<td><center>".$count81_v2[5]."（".round($count81_v2[5]/$count81_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>普通輕型機車</strong></td>";
if($count91 > 0)
	echo "<td><center>".$count91_v[5]."（".round($count91_v[5]/$count91*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count91_2 > 0)
	echo "<td><center>".$count91_v2[5]."（".round($count91_v2[5]/$count91_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "</tr>";

// 普通重型機車
echo "<tr>";
echo "<td><strong>普通重型機車</strong></td>";
if($count71 > 0)
	echo "<td><center>".$count71_v[6]."（".round($count71_v[6]/$count71*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count71_2 > 0)
	echo "<td><center>".$count71_v2[6]."（".round($count71_v2[6]/$count71_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>普通重型機車</strong></td>";
if($count81 > 0)
	echo "<td><center>".$count81_v[6]."（".round($count81_v[6]/$count81*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count81_2 > 0)
	echo "<td><center>".$count81_v2[6]."（".round($count81_v2[6]/$count81_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>普通重型機車</strong></td>";
if($count91 > 0)
	echo "<td><center>".$count91_v[6]."（".round($count91_v[6]/$count91*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count91_2 > 0)
	echo "<td><center>".$count91_v2[6]."（".round($count91_v2[6]/$count91_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "</tr>";

// 大型重型機車1(550c.c.以上)
echo "<tr>";
echo "<td><strong>大型重型機車1(550c.c.以上)</strong></td>";
if($count71 > 0)
	echo "<td><center>".$count71_v[7]."（".round($count71_v[7]/$count71*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count71_2 > 0)
	echo "<td><center>".$count71_v2[7]."（".round($count71_v2[7]/$count71_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>大型重型機車1(550c.c.以上)</strong></td>";
if($count81 > 0)
	echo "<td><center>".$count81_v[7]."（".round($count81_v[7]/$count81*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count81_2 > 0)
	echo "<td><center>".$count81_v2[7]."（".round($count81_v2[7]/$count81_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>大型重型機車1(550c.c.以上)</strong></td>";
if($count91 > 0)
	echo "<td><center>".$count91_v[7]."（".round($count91_v[7]/$count91*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count91_2 > 0)
	echo "<td><center>".$count91_v2[7]."（".round($count91_v2[7]/$count91_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "</tr>";

// 大型重型機車2(250-550c.c.)
echo "<tr>";
echo "<td><strong>大型重型機車2(250-550c.c.)</strong></td>";
if($count71 > 0)
	echo "<td><center>".$count71_v[8]."（".round($count71_v[8]/$count71*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count71_2 > 0)
	echo "<td><center>".$count71_v2[8]."（".round($count71_v2[8]/$count71_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>大型重型機車2(250-550c.c.)</strong></td>";
if($count81 > 0)
	echo "<td><center>".$count81_v[8]."（".round($count81_v[8]/$count81*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count81_2 > 0)
	echo "<td><center>".$count81_v2[8]."（".round($count81_v2[8]/$count81_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>大型重型機車2(250-550c.c.)</strong></td>";
if($count91 > 0)
	echo "<td><center>".$count91_v[8]."（".round($count91_v[8]/$count91*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count91_2 > 0)
	echo "<td><center>".$count91_v2[8]."（".round($count91_v2[8]/$count91_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "</tr>";

// 特種車
echo "<tr>";
echo "<td><strong>特種車</strong></td>";
if($count71 > 0)
	echo "<td><center>".$count71_v[9]."（".round($count71_v[9]/$count71*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count71_2 > 0)
	echo "<td><center>".$count71_v2[9]."（".round($count71_v2[9]/$count71_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>特種車</strong></td>";
if($count81 > 0)
	echo "<td><center>".$count81_v[9]."（".round($count81_v[9]/$count81*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count81_2 > 0)
	echo "<td><center>".$count81_v2[9]."（".round($count81_v2[9]/$count81_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>特種車</strong></td>";
if($count91 > 0)
	echo "<td><center>".$count91_v[9]."（".round($count91_v[9]/$count91*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count91_2 > 0)
	echo "<td><center>".$count91_v2[9]."（".round($count91_v2[9]/$count91_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "</tr>";

// 小客車
echo "<tr>";
echo "<td><strong>小客車</strong></td>";
if($count71 > 0)
	echo "<td><center>".$count71_v[10]."（".round($count71_v[10]/$count71*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count71_2 > 0)
	echo "<td><center>".$count71_v2[10]."（".round($count71_v2[10]/$count71_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>小客車</strong></td>";
if($count81 > 0)
	echo "<td><center>".$count81_v[10]."（".round($count81_v[10]/$count81*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count81_2 > 0)
	echo "<td><center>".$count81_v2[10]."（".round($count81_v2[10]/$count81_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>小客車</strong></td>";
if($count91 > 0)
	echo "<td><center>".$count91_v[10]."（".round($count91_v[10]/$count91*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count91_2 > 0)
	echo "<td><center>".$count91_v2[10]."（".round($count91_v2[10]/$count91_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "</tr>";

// 大客車
echo "<tr>";
echo "<td><strong>大客車</strong></td>";
if($count71 > 0)
	echo "<td><center>".$count71_v[11]."（".round($count71_v[11]/$count71*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count71_2 > 0)
	echo "<td><center>".$count71_v2[11]."（".round($count71_v2[11]/$count71_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>大客車</strong></td>";
if($count81 > 0)
	echo "<td><center>".$count81_v[11]."（".round($count81_v[11]/$count81*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count81_2 > 0)
	echo "<td><center>".$count81_v2[11]."（".round($count81_v2[11]/$count81_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>大客車</strong></td>";
if($count91 > 0)
	echo "<td><center>".$count91_v[11]."（".round($count91_v[11]/$count91*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count91_2 > 0)
	echo "<td><center>".$count91_v2[11]."（".round($count91_v2[11]/$count91_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "</tr>";

// 小貨車
echo "<tr>";
echo "<td><strong>小貨車</strong></td>";
if($count71 > 0)
	echo "<td><center>".$count71_v[12]."（".round($count71_v[12]/$count71*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count71_2 > 0)
	echo "<td><center>".$count71_v2[12]."（".round($count71_v2[12]/$count71_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>小貨車</strong></td>";
if($count81 > 0)
	echo "<td><center>".$count81_v[12]."（".round($count81_v[12]/$count81*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count81_2 > 0)
	echo "<td><center>".$count81_v2[12]."（".round($count81_v2[12]/$count81_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>小貨車</strong></td>";
if($count91 > 0)
	echo "<td><center>".$count91_v[12]."（".round($count91_v[12]/$count91*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count91_2 > 0)
	echo "<td><center>".$count91_v2[12]."（".round($count91_v2[12]/$count91_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "</tr>";

// 大貨車
echo "<tr>";
echo "<td><strong>大貨車</strong></td>";
if($count71 > 0)
	echo "<td><center>".$count71_v[13]."（".round($count71_v[13]/$count71*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count71_2 > 0)
	echo "<td><center>".$count71_v2[13]."（".round($count71_v2[13]/$count71_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>大貨車</strong></td>";
if($count81 > 0)
	echo "<td><center>".$count81_v[13]."（".round($count81_v[13]/$count81*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count81_2 > 0)
	echo "<td><center>".$count81_v2[13]."（".round($count81_v2[13]/$count81_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>大貨車</strong></td>";
if($count91 > 0)
	echo "<td><center>".$count91_v[13]."（".round($count91_v[13]/$count91*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count91_2 > 0)
	echo "<td><center>".$count91_v2[13]."（".round($count91_v2[13]/$count91_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "</tr></tbody>";

//mysqli_close($c_con);
mysqli_close($con);
?>
</table>
<br>
<table>
<?php
ini_set('memory_limit', '1024M');

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "db_final_project";

//$c_con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
/*
if(!$c_con){
	die("Could not connect to server: ".mysqli_connect_error());
}
*/
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$con){
	die("Could not connect to server: ".mysqli_connect_error());
}

$college = $_GET["college"];
$college2 = $_GET["college2"];

$c_sql = "SELECT longitude, latitude, name FROM `campus` WHERE id=$college";
$c_result = mysqli_query($con, $c_sql);
$c_row= mysqli_fetch_assoc($c_result);

if($college2 != "-1"){
	$c2_sql = "SELECT longitude, latitude, name FROM `campus` WHERE id=$college2";
	$c2_result = mysqli_query($con, $c2_sql);
	$c2_row= mysqli_fetch_assoc($c2_result);
}

$sql72 = "SELECT longitude, latitude, KindOfCar FROM `107a2`";
$result72 = mysqli_query($con, $sql72);
$result72_2 = mysqli_query($con, $sql72);

$sql82jj = "SELECT longitude, latitude, KindOfCar FROM `108a2_jantojun`";
$result82jj = mysqli_query($con, $sql82jj);
$result82jj_2 = mysqli_query($con, $sql82jj);

$sql82jd = "SELECT longitude, latitude, KindOfCar FROM `108a2_jultode`";
$result82jd = mysqli_query($con, $sql82jd);
$result82jd_2 = mysqli_query($con, $sql82jd);

$sql92jj = "SELECT longitude, latitude, KindOfCar FROM `109a2_jantojun`";
$result92jj = mysqli_query($con, $sql92jj);
$result92jj_2 = mysqli_query($con, $sql92jj);

$sql92jd = "SELECT longitude, latitude, KindOfCar FROM `109a2_jultode`";
$result92jd = mysqli_query($con, $sql92jd);
$result92jd_2 = mysqli_query($con, $sql92jd);

$count72 = 0;
$count82 = 0;
$count92 = 0;
$count72_2 = 0;
$count82_2 = 0;
$count92_2 = 0;

//$county_vehicle = array("0行人%'", "1腳踏自行車%'", "2電動輔助自行車%'", "3電動自行車%'","4小型輕型%'", "5普通輕型-機車%'", "6普通重型_機車%'", "7大型重型1%'", "8大型重型2%'", "9特種車%'", "10小客車%'", "11大客車%'", "12小貨車%'", "13大貨車%'");
$count72_v = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
$count82_v = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
$count92_v = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
$count72_v2 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
$count82_v2 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
$count92_v2 = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

// college
if(mysqli_num_rows($result72) > 0){
	while($row = mysqli_fetch_assoc($result72)){
		if((abs($row["longitude"]-$c_row["longitude"]) < 0.02) and (abs($row["latitude"]-$c_row["latitude"]) < 0.02)){
			$count72++;
			if(strpos($row["KindOfCar"], "行人")){
				$count72_v[0]++;
			}
			if(strpos($row["KindOfCar"], "腳踏自行車")){
				$count72_v[1]++;
			}
			if(strpos($row["KindOfCar"], "電動輔助自行車")){
				$count72_v[2]++;
			}
			if(strpos($row["KindOfCar"], "電動自行車")){
				$count72_v[3]++;
			}
			if(strpos($row["KindOfCar"], "小型輕型")){
				$count72_v[4]++;
			}
			if(strpos($row["KindOfCar"], "普通輕型")){
				$count72_v[5]++;
			}
			if(strpos($row["KindOfCar"], "普通重型")){
				$count72_v[6]++;
			}
			if(strpos($row["KindOfCar"], "大型重型1")){
				$count72_v[7]++;
			}
			if(strpos($row["KindOfCar"], "大型重型2")){
				$count72_v[8]++;
			}
			if(strpos($row["KindOfCar"], "特種車")){
				$count72_v[9]++;
			}
			if(strpos($row["KindOfCar"], "小客車")){
				$count72_v[10]++;
			}
			if(strpos($row["KindOfCar"], "大客車")){
				$count72_v[11]++;
			}
			if(strpos($row["KindOfCar"], "小貨車")){
				$count72_v[12]++;
			}
			if(strpos($row["KindOfCar"], "大貨車")){
				$count72_v[13]++;
			}
		}
	}
}

if((mysqli_num_rows($result82jj) > 0) or (mysqli_num_rows($result82jd) > 0)){
	if(mysqli_num_rows($result82jj) > 0){
		while($row = mysqli_fetch_assoc($result82jj)){
			if((abs($row["longitude"]-$c_row["longitude"]) < 0.02) and (abs($row["latitude"]-$c_row["latitude"]) < 0.02)){
				$count82++;
				if(strpos($row["KindOfCar"], "行人")){
					$count82_v[0]++;
				}
				if(strpos($row["KindOfCar"], "腳踏自行車")){
					$count82_v[1]++;
				}
				if(strpos($row["KindOfCar"], "電動輔助自行車")){
					$count82_v[2]++;
				}
				if(strpos($row["KindOfCar"], "電動自行車")){
					$count82_v[3]++;
				}
				if(strpos($row["KindOfCar"], "小型輕型")){
					$count82_v[4]++;
				}
				if(strpos($row["KindOfCar"], "普通輕型")){
					$count82_v[5]++;
				}
				if(strpos($row["KindOfCar"], "普通重型")){
					$count82_v[6]++;
				}
				if(strpos($row["KindOfCar"], "大型重型1")){
					$count82_v[7]++;
				}
				if(strpos($row["KindOfCar"], "大型重型2")){
					$count82_v[8]++;
				}
				if(strpos($row["KindOfCar"], "特種車")){
					$count82_v[9]++;
				}
				if(strpos($row["KindOfCar"], "小客車")){
					$count82_v[10]++;
				}
				if(strpos($row["KindOfCar"], "大客車")){
					$count82_v[11]++;
				}
				if(strpos($row["KindOfCar"], "小貨車")){
					$count82_v[12]++;
				}
				if(strpos($row["KindOfCar"], "大貨車")){
					$count82_v[13]++;
				}
			}
		}
	}
	if(mysqli_num_rows($result82jd) > 0){
		while($row = mysqli_fetch_assoc($result82jd)){
			if((abs($row["longitude"]-$c_row["longitude"]) < 0.02) and (abs($row["latitude"]-$c_row["latitude"]) < 0.02)){
				$count82++;
				if(strpos($row["KindOfCar"], "行人")){
					$count82_v[0]++;
				}
				if(strpos($row["KindOfCar"], "腳踏自行車")){
					$count82_v[1]++;
				}
				if(strpos($row["KindOfCar"], "電動輔助自行車")){
					$count82_v[2]++;
				}
				if(strpos($row["KindOfCar"], "電動自行車")){
					$count82_v[3]++;
				}
				if(strpos($row["KindOfCar"], "小型輕型")){
					$count82_v[4]++;
				}
				if(strpos($row["KindOfCar"], "普通輕型")){
					$count82_v[5]++;
				}
				if(strpos($row["KindOfCar"], "普通重型")){
					$count82_v[6]++;
				}
				if(strpos($row["KindOfCar"], "大型重型1")){
					$count82_v[7]++;
				}
				if(strpos($row["KindOfCar"], "大型重型2")){
					$count82_v[8]++;
				}
				if(strpos($row["KindOfCar"], "特種車")){
					$count82_v[9]++;
				}
				if(strpos($row["KindOfCar"], "小客車")){
					$count82_v[10]++;
				}
				if(strpos($row["KindOfCar"], "大客車")){
					$count82_v[11]++;
				}
				if(strpos($row["KindOfCar"], "小貨車")){
					$count82_v[12]++;
				}
				if(strpos($row["KindOfCar"], "大貨車")){
					$count82_v[13]++;
				}
			}
		}
	}
}

if((mysqli_num_rows($result92jj) > 0) or (mysqli_num_rows($result92jd) > 0)){
	if(mysqli_num_rows($result92jj) > 0){
		while($row = mysqli_fetch_assoc($result92jj)){
			if((abs($row["longitude"]-$c_row["longitude"]) < 0.02) and (abs($row["latitude"]-$c_row["latitude"]) < 0.02)){
				$count92++;
				if(strpos($row["KindOfCar"], "行人")){
					$count92_v[0]++;
				}
				if(strpos($row["KindOfCar"], "腳踏自行車")){
					$count92_v[1]++;
				}
				if(strpos($row["KindOfCar"], "電動輔助自行車")){
					$count92_v[2]++;
				}
				if(strpos($row["KindOfCar"], "電動自行車")){
					$count92_v[3]++;
				}
				if(strpos($row["KindOfCar"], "小型輕型")){
					$count92_v[4]++;
				}
				if(strpos($row["KindOfCar"], "普通輕型")){
					$count92_v[5]++;
				}
				if(strpos($row["KindOfCar"], "普通重型")){
					$count92_v[6]++;
				}
				if(strpos($row["KindOfCar"], "大型重型1")){
					$count92_v[7]++;
				}
				if(strpos($row["KindOfCar"], "大型重型2")){
					$count92_v[8]++;
				}
				if(strpos($row["KindOfCar"], "特種車")){
					$count92_v[9]++;
				}
				if(strpos($row["KindOfCar"], "小客車")){
					$count92_v[10]++;
				}
				if(strpos($row["KindOfCar"], "大客車")){
					$count92_v[11]++;
				}
				if(strpos($row["KindOfCar"], "小貨車")){
					$count92_v[12]++;
				}
				if(strpos($row["KindOfCar"], "大貨車")){
					$count92_v[13]++;
				}
			}
		}
	}
	if(mysqli_num_rows($result92jd) > 0){
		while($row = mysqli_fetch_assoc($result92jd)){
			if((abs($row["longitude"]-$c_row["longitude"]) < 0.02) and (abs($row["latitude"]-$c_row["latitude"]) < 0.02)){
				$count92++;
				if(strpos($row["KindOfCar"], "行人")){
					$count92_v[0]++;
				}
				if(strpos($row["KindOfCar"], "腳踏自行車")){
					$count92_v[1]++;
				}
				if(strpos($row["KindOfCar"], "電動輔助自行車")){
					$count92_v[2]++;
				}
				if(strpos($row["KindOfCar"], "電動自行車")){
					$count92_v[3]++;
				}
				if(strpos($row["KindOfCar"], "小型輕型")){
					$count92_v[4]++;
				}
				if(strpos($row["KindOfCar"], "普通輕型")){
					$count92_v[5]++;
				}
				if(strpos($row["KindOfCar"], "普通重型")){
					$count92_v[6]++;
				}
				if(strpos($row["KindOfCar"], "大型重型1")){
					$count92_v[7]++;
				}
				if(strpos($row["KindOfCar"], "大型重型2")){
					$count92_v[8]++;
				}
				if(strpos($row["KindOfCar"], "特種車")){
					$count92_v[9]++;
				}
				if(strpos($row["KindOfCar"], "小客車")){
					$count92_v[10]++;
				}
				if(strpos($row["KindOfCar"], "大客車")){
					$count92_v[11]++;
				}
				if(strpos($row["KindOfCar"], "小貨車")){
					$count92_v[12]++;
				}
				if(strpos($row["KindOfCar"], "大貨車")){
					$count92_v[13]++;
				}
			}
		}
	}
}

// college2
if($college2 != "-1"){
	if(mysqli_num_rows($result72_2) > 0){
		while($row = mysqli_fetch_assoc($result72_2)){
			if((abs($row["longitude"]-$c2_row["longitude"]) < 0.02) and (abs($row["latitude"]-$c2_row["latitude"]) < 0.02)){
				$count72_2++;
				if(strpos($row["KindOfCar"], "行人")){
					$count72_v2[0]++;
				}
				if(strpos($row["KindOfCar"], "腳踏自行車")){
					$count72_v2[1]++;
				}
				if(strpos($row["KindOfCar"], "電動輔助自行車")){
					$count72_v2[2]++;
				}
				if(strpos($row["KindOfCar"], "電動自行車")){
					$count72_v2[3]++;
				}
				if(strpos($row["KindOfCar"], "小型輕型")){
					$count72_v2[4]++;
				}
				if(strpos($row["KindOfCar"], "普通輕型")){
					$count72_v2[5]++;
				}
				if(strpos($row["KindOfCar"], "普通重型")){
					$count72_v2[6]++;
				}
				if(strpos($row["KindOfCar"], "大型重型1")){
					$count72_v2[7]++;
				}
				if(strpos($row["KindOfCar"], "大型重型2")){
					$count72_v2[8]++;
				}
				if(strpos($row["KindOfCar"], "特種車")){
					$count72_v2[9]++;
				}
				if(strpos($row["KindOfCar"], "小客車")){
					$count72_v2[10]++;
				}
				if(strpos($row["KindOfCar"], "大客車")){
					$count72_v2[11]++;
				}
				if(strpos($row["KindOfCar"], "小貨車")){
					$count72_v2[12]++;
				}
				if(strpos($row["KindOfCar"], "大貨車")){
					$count72_v2[13]++;
				}
			}
		}
	}

	if((mysqli_num_rows($result82jj_2) > 0) or (mysqli_num_rows($result82jd_2) > 0)){
		if(mysqli_num_rows($result82jj_2) > 0){
			while($row = mysqli_fetch_assoc($result82jj_2)){
				if((abs($row["longitude"]-$c2_row["longitude"]) < 0.02) and (abs($row["latitude"]-$c2_row["latitude"]) < 0.02)){
					$count82_2++;
					if(strpos($row["KindOfCar"], "行人")){
						$count82_v2[0]++;
					}
					if(strpos($row["KindOfCar"], "腳踏自行車")){
						$count82_v2[1]++;
					}
					if(strpos($row["KindOfCar"], "電動輔助自行車")){
						$count82_v2[2]++;
					}
					if(strpos($row["KindOfCar"], "電動自行車")){
						$count82_v2[3]++;
					}
					if(strpos($row["KindOfCar"], "小型輕型")){
						$count82_v2[4]++;
					}
					if(strpos($row["KindOfCar"], "普通輕型")){
						$count82_v2[5]++;
					}
					if(strpos($row["KindOfCar"], "普通重型")){
						$count82_v2[6]++;
					}
					if(strpos($row["KindOfCar"], "大型重型1")){
						$count82_v2[7]++;
					}
					if(strpos($row["KindOfCar"], "大型重型2")){
						$count82_v2[8]++;
					}
					if(strpos($row["KindOfCar"], "特種車")){
						$count82_v2[9]++;
					}
					if(strpos($row["KindOfCar"], "小客車")){
						$count82_v2[10]++;
					}
					if(strpos($row["KindOfCar"], "大客車")){
						$count82_v2[11]++;
					}
					if(strpos($row["KindOfCar"], "小貨車")){
						$count82_v2[12]++;
					}
					if(strpos($row["KindOfCar"], "大貨車")){
						$count82_v2[13]++;
					}
				}
			}
		}
		if(mysqli_num_rows($result82jd_2) > 0){
			while($row = mysqli_fetch_assoc($result82jd_2)){
				if((abs($row["longitude"]-$c2_row["longitude"]) < 0.02) and (abs($row["latitude"]-$c2_row["latitude"]) < 0.02)){
					$count82_2++;
					if(strpos($row["KindOfCar"], "行人")){
						$count82_v2[0]++;
					}
					if(strpos($row["KindOfCar"], "腳踏自行車")){
						$count82_v2[1]++;
					}
					if(strpos($row["KindOfCar"], "電動輔助自行車")){
						$count82_v2[2]++;
					}
					if(strpos($row["KindOfCar"], "電動自行車")){
						$count82_v2[3]++;
					}
					if(strpos($row["KindOfCar"], "小型輕型")){
						$count82_v2[4]++;
					}
					if(strpos($row["KindOfCar"], "普通輕型")){
						$count82_v2[5]++;
					}
					if(strpos($row["KindOfCar"], "普通重型")){
						$count82_v2[6]++;
					}
					if(strpos($row["KindOfCar"], "大型重型1")){
						$count82_v2[7]++;
					}
					if(strpos($row["KindOfCar"], "大型重型2")){
						$count82_v2[8]++;
					}
					if(strpos($row["KindOfCar"], "特種車")){
						$count82_v2[9]++;
					}
					if(strpos($row["KindOfCar"], "小客車")){
						$count82_v2[10]++;
					}
					if(strpos($row["KindOfCar"], "大客車")){
						$count82_v2[11]++;
					}
					if(strpos($row["KindOfCar"], "小貨車")){
						$count82_v2[12]++;
					}
					if(strpos($row["KindOfCar"], "大貨車")){
						$count82_v2[13]++;
					}
				}
			}
		}
	}

	if((mysqli_num_rows($result92jj_2) > 0) or (mysqli_num_rows($result92jd_2) > 0)){
		if(mysqli_num_rows($result92jj_2) > 0){
			while($row = mysqli_fetch_assoc($result92jj_2)){
				if((abs($row["longitude"]-$c2_row["longitude"]) < 0.02) and (abs($row["latitude"]-$c2_row["latitude"]) < 0.02)){
					$count92_2++;
					if(strpos($row["KindOfCar"], "行人")){
						$count92_v2[0]++;
					}
					if(strpos($row["KindOfCar"], "腳踏自行車")){
						$count92_v2[1]++;
					}
					if(strpos($row["KindOfCar"], "電動輔助自行車")){
						$count92_v2[2]++;
					}
					if(strpos($row["KindOfCar"], "電動自行車")){
						$count92_v2[3]++;
					}
					if(strpos($row["KindOfCar"], "小型輕型")){
						$count92_v2[4]++;
					}
					if(strpos($row["KindOfCar"], "普通輕型")){
						$count92_v2[5]++;
					}
					if(strpos($row["KindOfCar"], "普通重型")){
						$count92_v2[6]++;
					}
					if(strpos($row["KindOfCar"], "大型重型1")){
						$count92_v2[7]++;
					}
					if(strpos($row["KindOfCar"], "大型重型2")){
						$count92_v2[8]++;
					}
					if(strpos($row["KindOfCar"], "特種車")){
						$count92_v2[9]++;
					}
					if(strpos($row["KindOfCar"], "小客車")){
						$count92_v2[10]++;
					}
					if(strpos($row["KindOfCar"], "大客車")){
						$count92_v2[11]++;
					}
					if(strpos($row["KindOfCar"], "小貨車")){
						$count92_v2[12]++;
					}
					if(strpos($row["KindOfCar"], "大貨車")){
						$count92_v2[13]++;
					}
				}
			}
		}
		if(mysqli_num_rows($result92jd_2) > 0){
			while($row = mysqli_fetch_assoc($result92jd_2)){
				if((abs($row["longitude"]-$c2_row["longitude"]) < 0.02) and (abs($row["latitude"]-$c2_row["latitude"]) < 0.02)){
					$count92_2++;
					if(strpos($row["KindOfCar"], "行人")){
						$count92_v2[0]++;
					}
					if(strpos($row["KindOfCar"], "腳踏自行車")){
						$count92_v2[1]++;
					}
					if(strpos($row["KindOfCar"], "電動輔助自行車")){
						$count92_v2[2]++;
					}
					if(strpos($row["KindOfCar"], "電動自行車")){
						$count92_v2[3]++;
					}
					if(strpos($row["KindOfCar"], "小型輕型")){
						$count92_v2[4]++;
					}
					if(strpos($row["KindOfCar"], "普通輕型")){
						$count92_v2[5]++;
					}
					if(strpos($row["KindOfCar"], "普通重型")){
						$count92_v2[6]++;
					}
					if(strpos($row["KindOfCar"], "大型重型1")){
						$count92_v2[7]++;
					}
					if(strpos($row["KindOfCar"], "大型重型2")){
						$count92_v2[8]++;
					}
					if(strpos($row["KindOfCar"], "特種車")){
						$count92_v2[9]++;
					}
					if(strpos($row["KindOfCar"], "小客車")){
						$count92_v2[10]++;
					}
					if(strpos($row["KindOfCar"], "大客車")){
						$count92_v2[11]++;
					}
					if(strpos($row["KindOfCar"], "小貨車")){
						$count92_v2[12]++;
					}
					if(strpos($row["KindOfCar"], "大貨車")){
						$count92_v2[13]++;
					}
				}
			}
		}
	}
}

echo "<caption><strong>107-109年 A2事故校園周邊統計</strong></caption>";
echo "<thead><th bgcolor='#E0E0E0'>A2 三年<br>總累積件數</th>";
echo "<th bgcolor='#FFFFFF'>".$c_row["name"]."</th>";
echo "<th colspan=3 bgcolor='#E0E0E0'>".$count72+$count82+$count92."</th>";
if($college2 != "-1"){
	echo "<th bgcolor='#FFFFFF'>".$c2_row["name"]."</th>";
	echo "<th colspan=3 bgcolor='#E0E0E0'>".$count72_2+$count82_2+$count92_2."</th></thead>";
}
else{
	echo "<th bgcolor='#FFFFFF'></th>";
	echo "<th colspan=3 bgcolor='#E0E0E0'></th></thead>";
}

echo "<tbody><tr>";
echo "<th colspan=3 bgcolor='#D2E9FF'>107年（件）</th>";
echo "<th colspan=3 bgcolor='#FFECEC'>108年（件）</th>";
echo "<th colspan=3 bgcolor='#D2E9FF'>109年（件）</th>";
echo "</tr>";

echo "<tr>";
echo "<th bgcolor='#FFFFFF'></th>";
echo "<th bgcolor='#FFFFFF'>".$c_row["name"]."</th>";
if($college2 != "-1")
	echo "<th bgcolor='#FFFFFF'>".$c2_row["name"]."</th>";
else
	echo "<th bgcolor='#FFFFFF'></th>";
echo "<th bgcolor='#FFFFFF'></th>";
echo "<th bgcolor='#FFFFFF'>".$c_row["name"]."</th>";
if($college2 != "-1")
	echo "<th bgcolor='#FFFFFF'>".$c2_row["name"]."</th>";
else
	echo "<th bgcolor='#FFFFFF'></th>";
echo "<th bgcolor='#FFFFFF'></th>";
echo "<th bgcolor='#FFFFFF'>".$c_row["name"]."</th>";
if($college2 != "-1")
	echo "<th bgcolor='#FFFFFF'>".$c2_row["name"]."</th>";
else
	echo "<th bgcolor='#FFFFFF'></th>";
echo "</tr>";

echo "<tr>";
echo "<th bgcolor='#E0E0E0'>總件數</th>";
echo "<td bgcolor='#E0E0E0'><center>".$count72."</center></td>";
if($college2 != "-1"){
	echo "<td bgcolor='#E0E0E0'><center>".$count72_2."</center></td>";
}
else{
	echo "<td bgcolor='#E0E0E0'></td>";
}
echo "<th bgcolor='#E0E0E0'>總件數</th>";
echo "<td bgcolor='#E0E0E0'><center>".$count82."</center></td>";
if($college2 != "-1"){
	echo "<td bgcolor='#E0E0E0'><center>".$count82_2."</center></td>";
}
else{
	echo "<td bgcolor='#E0E0E0'></td>";
}
echo "<th bgcolor='#E0E0E0'>總件數</th>";
echo "<td bgcolor='#E0E0E0'><center>".$count92."</center></td>";
if($college2 != "-1"){
	echo "<td bgcolor='#E0E0E0'><center>".$count92_2."</center></td>";
}
else{
	echo "<td bgcolor='#E0E0E0'></td>";
}
echo "</tr>";

// 行人
echo "<tr>";
echo "<td><strong>行人</strong></td>";
if($count72 > 0)
	echo "<td><center>".$count72_v[0]."（".round($count72_v[0]/$count72*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count72_2 > 0)
	echo "<td><center>".$count72_v2[0]."（".round($count72_v2[0]/$count72_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>行人</strong></td>";
if($count82 > 0)
	echo "<td><center>".$count82_v[0]."（".round($count82_v[0]/$count82*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count82_2 > 0)
	echo "<td><center>".$count82_v2[0]."（".round($count82_v2[0]/$count82_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>行人</strong></td>";
if($count92 > 0)
	echo "<td><center>".$count92_v[0]."（".round($count92_v[0]/$count92*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count92_2 > 0)
	echo "<td><center>".$count92_v2[0]."（".round($count92_v2[0]/$count92_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "</tr>";

// 腳踏自行車
echo "<tr>";
echo "<td><strong>腳踏自行車</strong></td>";
if($count72 > 0)
	echo "<td><center>".$count72_v[1]."（".round($count72_v[1]/$count72*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count72_2 > 0)
	echo "<td><center>".$count72_v2[1]."（".round($count72_v2[1]/$count72_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>腳踏自行車</strong></td>";
if($count82 > 0)
	echo "<td><center>".$count82_v[1]."（".round($count82_v[1]/$count82*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count82_2 > 0)
	echo "<td><center>".$count82_v2[1]."（".round($count82_v2[1]/$count82_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>腳踏自行車</strong></td>";
if($count92 > 0)
	echo "<td><center>".$count92_v[1]."（".round($count92_v[1]/$count92*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count92_2 > 0)
	echo "<td><center>".$count92_v2[1]."（".round($count92_v2[1]/$count92_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "</tr>";

// 電動輔助自行車
echo "<tr>";
echo "<td><strong>電動輔助自行車</strong></td>";
if($count72 > 0)
	echo "<td><center>".$count72_v[2]."（".round($count72_v[2]/$count72*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count72_2 > 0)
	echo "<td><center>".$count72_v2[2]."（".round($count72_v2[2]/$count72_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>電動輔助自行車</strong></td>";
if($count82 > 0)
	echo "<td><center>".$count82_v[2]."（".round($count82_v[2]/$count82*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count82_2 > 0)
	echo "<td><center>".$count82_v2[2]."（".round($count82_v2[2]/$count82_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>電動輔助自行車</strong></td>";
if($count92 > 0)
	echo "<td><center>".$count92_v[2]."（".round($count92_v[2]/$count92*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count92_2 > 0)
	echo "<td><center>".$count92_v2[2]."（".round($count92_v2[2]/$count92_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "</tr>";

// 電動自行車
echo "<tr>";
echo "<td><strong>電動自行車</strong></td>";
if($count72 > 0)
	echo "<td><center>".$count72_v[3]."（".round($count72_v[3]/$count72*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count72_2 > 0)
	echo "<td><center>".$count72_v2[3]."（".round($count72_v2[3]/$count72_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>電動自行車</strong></td>";
if($count82 > 0)
	echo "<td><center>".$count82_v[3]."（".round($count82_v[3]/$count82*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count82_2 > 0)
	echo "<td><center>".$count82_v2[3]."（".round($count82_v2[3]/$count82_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>電動自行車</strong></td>";
if($count92 > 0)
	echo "<td><center>".$count92_v[3]."（".round($count92_v[3]/$count92*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count92_2 > 0)
	echo "<td><center>".$count92_v2[3]."（".round($count92_v2[3]/$count92_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "</tr>";

// 小型輕型機車
echo "<tr>";
echo "<td><strong>小型輕型機車</strong></td>";
if($count72 > 0)
	echo "<td><center>".$count72_v[4]."（".round($count72_v[4]/$count72*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count72_2 > 0)
	echo "<td><center>".$count72_v2[4]."（".round($count72_v2[4]/$count72_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>小型輕型機車</strong></td>";
if($count82 > 0)
	echo "<td><center>".$count82_v[4]."（".round($count82_v[4]/$count82*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count82_2 > 0)
	echo "<td><center>".$count82_v2[4]."（".round($count82_v2[4]/$count82_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>小型輕型機車</strong></td>";
if($count92 > 0)
	echo "<td><center>".$count92_v[4]."（".round($count92_v[4]/$count92*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count92_2 > 0)
	echo "<td><center>".$count92_v2[4]."（".round($count92_v2[4]/$count92_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "</tr>";

// 普通輕型機車
echo "<tr>";
echo "<td><strong>普通輕型機車</strong></td>";
if($count72 > 0)
	echo "<td><center>".$count72_v[5]."（".round($count72_v[5]/$count72*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count72_2 > 0)
	echo "<td><center>".$count72_v2[5]."（".round($count72_v2[5]/$count72_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>普通輕型機車</strong></td>";
if($count82 > 0)
	echo "<td><center>".$count82_v[5]."（".round($count82_v[5]/$count82*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count82_2 > 0)
	echo "<td><center>".$count82_v2[5]."（".round($count82_v2[5]/$count82_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>普通輕型機車</strong></td>";
if($count92 > 0)
	echo "<td><center>".$count92_v[5]."（".round($count92_v[5]/$count92*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count92_2 > 0)
	echo "<td><center>".$count92_v2[5]."（".round($count92_v2[5]/$count92_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "</tr>";

// 普通重型機車
echo "<tr>";
echo "<td><strong>普通重型機車</strong></td>";
if($count72 > 0)
	echo "<td><center>".$count72_v[6]."（".round($count72_v[6]/$count72*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count72_2 > 0)
	echo "<td><center>".$count72_v2[6]."（".round($count72_v2[6]/$count72_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>普通重型機車</strong></td>";
if($count82 > 0)
	echo "<td><center>".$count82_v[6]."（".round($count82_v[6]/$count82*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count82_2 > 0)
	echo "<td><center>".$count82_v2[6]."（".round($count82_v2[6]/$count82_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>普通重型機車</strong></td>";
if($count92 > 0)
	echo "<td><center>".$count92_v[6]."（".round($count92_v[6]/$count92*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count92_2 > 0)
	echo "<td><center>".$count92_v2[6]."（".round($count92_v2[6]/$count92_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "</tr>";

// 大型重型機車1(550c.c.以上)
echo "<tr>";
echo "<td><strong>大型重型機車1(550c.c.以上)</strong></td>";
if($count72 > 0)
	echo "<td><center>".$count72_v[7]."（".round($count72_v[7]/$count72*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count72_2 > 0)
	echo "<td><center>".$count72_v2[7]."（".round($count72_v2[7]/$count72_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>大型重型機車1(550c.c.以上)</strong></td>";
if($count82 > 0)
	echo "<td><center>".$count82_v[7]."（".round($count82_v[7]/$count82*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count82_2 > 0)
	echo "<td><center>".$count82_v2[7]."（".round($count82_v2[7]/$count82_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>大型重型機車1(550c.c.以上)</strong></td>";
if($count92 > 0)
	echo "<td><center>".$count92_v[7]."（".round($count92_v[7]/$count92*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count92_2 > 0)
	echo "<td><center>".$count92_v2[7]."（".round($count92_v2[7]/$count92_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "</tr>";

// 大型重型機車2(250-550c.c.)
echo "<tr>";
echo "<td><strong>大型重型機車2(250-550c.c.)</strong></td>";
if($count72 > 0)
	echo "<td><center>".$count72_v[8]."（".round($count72_v[8]/$count72*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count72_2 > 0)
	echo "<td><center>".$count72_v2[8]."（".round($count72_v2[8]/$count72_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>大型重型機車2(250-550c.c.)</strong></td>";
if($count82 > 0)
	echo "<td><center>".$count82_v[8]."（".round($count82_v[8]/$count82*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count82_2 > 0)
	echo "<td><center>".$count82_v2[8]."（".round($count82_v2[8]/$count82_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>大型重型機車2(250-550c.c.)</strong></td>";
if($count92 > 0)
	echo "<td><center>".$count92_v[8]."（".round($count92_v[8]/$count92*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count92_2 > 0)
	echo "<td><center>".$count92_v2[8]."（".round($count92_v2[8]/$count92_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "</tr>";

// 特種車
echo "<tr>";
echo "<td><strong>特種車</strong></td>";
if($count72 > 0)
	echo "<td><center>".$count72_v[9]."（".round($count72_v[9]/$count72*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count72_2 > 0)
	echo "<td><center>".$count72_v2[9]."（".round($count72_v2[9]/$count72_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>特種車</strong></td>";
if($count82 > 0)
	echo "<td><center>".$count82_v[9]."（".round($count82_v[9]/$count82*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count82_2 > 0)
	echo "<td><center>".$count82_v2[9]."（".round($count82_v2[9]/$count82_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>特種車</strong></td>";
if($count92 > 0)
	echo "<td><center>".$count92_v[9]."（".round($count92_v[9]/$count92*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count92_2 > 0)
	echo "<td><center>".$count92_v2[9]."（".round($count92_v2[9]/$count92_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "</tr>";

// 小客車
echo "<tr>";
echo "<td><strong>小客車</strong></td>";
if($count72 > 0)
	echo "<td><center>".$count72_v[10]."（".round($count72_v[10]/$count72*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count72_2 > 0)
	echo "<td><center>".$count72_v2[10]."（".round($count72_v2[10]/$count72_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>小客車</strong></td>";
if($count82 > 0)
	echo "<td><center>".$count82_v[10]."（".round($count82_v[10]/$count82*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count82_2 > 0)
	echo "<td><center>".$count82_v2[10]."（".round($count82_v2[10]/$count82_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>小客車</strong></td>";
if($count92 > 0)
	echo "<td><center>".$count92_v[10]."（".round($count92_v[10]/$count92*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count92_2 > 0)
	echo "<td><center>".$count92_v2[10]."（".round($count92_v2[10]/$count92_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "</tr>";

// 大客車
echo "<tr>";
echo "<td><strong>大客車</strong></td>";
if($count72 > 0)
	echo "<td><center>".$count72_v[11]."（".round($count72_v[11]/$count72*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count72_2 > 0)
	echo "<td><center>".$count72_v2[11]."（".round($count72_v2[11]/$count72_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>大客車</strong></td>";
if($count82 > 0)
	echo "<td><center>".$count82_v[11]."（".round($count82_v[11]/$count82*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count82_2 > 0)
	echo "<td><center>".$count82_v2[11]."（".round($count82_v2[11]/$count82_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>大客車</strong></td>";
if($count92 > 0)
	echo "<td><center>".$count92_v[11]."（".round($count92_v[11]/$count92*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count92_2 > 0)
	echo "<td><center>".$count92_v2[11]."（".round($count92_v2[11]/$count92_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "</tr>";

// 小貨車
echo "<tr>";
echo "<td><strong>小貨車</strong></td>";
if($count72 > 0)
	echo "<td><center>".$count72_v[12]."（".round($count72_v[12]/$count72*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count72_2 > 0)
	echo "<td><center>".$count72_v2[12]."（".round($count72_v2[12]/$count72_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>小貨車</strong></td>";
if($count82 > 0)
	echo "<td><center>".$count82_v[12]."（".round($count82_v[12]/$count82*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count82_2 > 0)
	echo "<td><center>".$count82_v2[12]."（".round($count82_v2[12]/$count82_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>小貨車</strong></td>";
if($count92 > 0)
	echo "<td><center>".$count92_v[12]."（".round($count92_v[12]/$count92*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count92_2 > 0)
	echo "<td><center>".$count92_v2[12]."（".round($count92_v2[12]/$count92_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "</tr>";

// 大貨車
echo "<tr>";
echo "<td><strong>大貨車</strong></td>";
if($count72 > 0)
	echo "<td><center>".$count72_v[13]."（".round($count72_v[13]/$count72*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count72_2 > 0)
	echo "<td><center>".$count72_v2[13]."（".round($count72_v2[13]/$count72_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>大貨車</strong></td>";
if($count82 > 0)
	echo "<td><center>".$count82_v[13]."（".round($count82_v[13]/$count82*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count82_2 > 0)
	echo "<td><center>".$count82_v2[13]."（".round($count82_v2[13]/$count82_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "<td><strong>大貨車</strong></td>";
if($count92 > 0)
	echo "<td><center>".$count92_v[13]."（".round($count92_v[13]/$count92*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
if($college2 == "-1")
	echo "<td></td>";
elseif($count92_2 > 0)
	echo "<td><center>".$count92_v2[13]."（".round($count92_v2[13]/$count92_2*100, 1)."％）</center></td>";
else
	echo "<td><center>0（0.0％）</center></td>";
echo "</tr></tbody></table>";

echo "<br><br>";
echo "<table>";
echo "<thead>";
echo "<tr><th colspan=2 bgcolor='#D1E9E9' style='font-size:1.5em'>校園附近 - 醫院資訊</th><tr>";
echo "</thead>";
echo "<tr>";
echo "<td bgcolor='#FFFFFF' style='padding:15px; width:400px'><a target='_blank' href=\"https://www.google.com.tw/maps/search/醫院/@" .$c_row["latitude"]. "," .$c_row["longitude"].",15z\"><font size=5><center>".$c_row["name"]."附近的醫院</center></font></a></td>";
if($college2 != "-1"){
	echo "<td bgcolor='#FFFFFF' style='padding:15px; width:400px'><a target='_blank' href=\"https://www.google.com.tw/maps/search/醫院/@" .$c2_row["latitude"]. "," .$c2_row["longitude"].",15z\"><font size=5><center>".$c2_row["name"]."附近的醫院</center></font></a></td>";
}
else
	echo "<td bgcolor='#FFFFFF' style='padding:15px; width:400px'></td>";
echo "</table>";
echo "<br><br>";

//mysqli_close($c_con);
mysqli_close($con);
?>

</div>
<br>

</body>

</html>