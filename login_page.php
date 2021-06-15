<html lang="en" >
<html>
    <style>
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #009393;
            border-radius: 4px;
            box-sizing: border-box;
        }
    </style>
    <form
        id = "form"
        method = "get"
        action = "./login_action.php"
    >
        <label>請輸入管理者密碼</label>
        <input
            id="password"
            name="password" 
            type="text"
            maxlength="10"
            required=""
        >

    </form>

</html>

<?php
    if(isset($_GET['message'])){
      echo "<script> alert(\"".$_GET['message']."\") </script>";
      $_GET['message'] = "";
    }
?>