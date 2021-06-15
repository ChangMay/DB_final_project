<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Create Table</title>
</head>
<body>
<!-- partial:index.partial.html -->
<html>


<style>
	input[type=text], select {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
	}

	input[type=number]{
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
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

	div {
		border-radius: 5px;
		background-color: #f2f2f2;
		padding: 20px;
	}
</style>
<body>
	<div class = "create">
		<form 
			id = "form"
			method = "get"
			action = "./insert_action.php"
		>
			<label for="table">choose table</label>
			<select name="table" id="table" required>
				<option value="" selected disabled>請選擇 table</option>
				<option value="107a1">107a1</option>
				<option value="107a2">107a2</option>
				<option value="108a1">108a1</option>
				<option value="108a2_jantojun">108a2_jantojun</option>
				<option value="108a2_jultode">108a2_jultode</option>
				<option value="109a1">109a1</option>
				<option value="109a2_jantojun">109a2_jantojun</option>
				<option value="109a2_jultode">109a2_jultode</option>
			</select>
			
			<br><br>
			
			<label>發生時間</label>
			<input
				id="HappenTime"
				name="HappenTime" 
				type="text"
				maxlength="30"
				required=""
			>
			
			<br><br>
			<label>發生地點</label>
			<input
				id="HappenLocation"
				name="HappenLocation" 
				type="text"
				maxlength="50"
				required=""
			>
			
			<br><br>
			<label>死亡人數</label>
			<input
				id="Death"
				name="Death" 
				type="number"
				maxlength="4"
				required=""
			>
			
			<br><br>
			<label>受傷人數</label>
			<input
				id="Injury"
				name="Injury" 
				type="number"
				maxlength="4"
				required=""
			>
			<br><br>

			<!-- <label>車種</label>
			<input
				id="KindOfCar"
				name="KindOfCar" 
				type="text"
				maxlength="100"
				required=""
			> -->

			<label for="KindOfCar">車種</label>
			<select name="KindOfCar[]" id="KindOfCar" multiple size = "15" required>
				<option value="" selected disabled>請選擇車種</option>
				<option value="行人">行人</option>
				<option value="腳踏自行車">腳踏自行車</option>
				<option value="電動輔助自行車">電動輔助自行車</option>
				<option value="電動自行車">電動自行車</option>
				<option value="小型輕型機車">小型輕型機車</option>
				<option value="普通輕型機車">普通輕型機車</option>
				<option value="普通重型機車">普通重型機車</option>
				<option value="大型重型1">大型重型1</option>
				<option value="大型重型2">大型重型2</option>
				<option value="特種車">特種車</option>
				<option value="小客車">小客車</option>
				<option value="大客車">大客車</option>
				<option value="小貨車">小貨車</option>
				<option value="大貨車">大貨車</option>

			</select>
			<p>Hold down the Ctrl (windows) or Command (Mac) button to select multiple options.</p>
			
			<br><br>
			<label>經度</label>
			<input
				id="Longitude"
				name="Longitude" 
				type="number"
				step="0.0001"
				maxlength="10"
				required=""
			>
			<br><br>
			<label>緯度</label>
			<input
				id="Latitude"
				name="Latitude" 
				type="number"
				step="0.0001"
				maxlength="10"
				required=""
			>
			<br><br>
			<button 
			  name="submit" 
			  value="submit" 
			  type="submit"
			><b>submit</b></button>
		</form>
	</div>
</body>


</html>
<!-- partial -->
  
</body>
</html>

<?php
    if(isset($_GET['message'])){
      echo "<script> alert(\"".$_GET['message']."\") </script>";
      $_GET['message'] = "";
    }
?>

<html>
    <br>
    <input type = "button" value = "回到選擇功能頁面" onclick = "location.href='crud_jump.php'">
</html>