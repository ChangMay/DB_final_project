<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Delete Table</title>
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
			action = "./delete_action.php"
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
    <br><br>
    <input type = "button" value = "回到選擇功能頁面" onclick = "location.href='crud_jump.php'">
</html>