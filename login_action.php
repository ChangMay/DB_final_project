<?php
$password = $_GET["password"];
// echo $password;
if($password == "123"){
    // location.href='crud_jump.php';
    header('Location: crud_jump.php');
}
else{
    header('Location: login_page.php?message=密碼錯誤請重新輸入');
}
?>