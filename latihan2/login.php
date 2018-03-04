<?php
session_start();
$user = $_POST["inputEmail"];
$pass = $_POST["inputPassword"];
//====================================
$dbuser = "admin@gmail.com";
$dbpass = "admin123";
//====================================
if($user == $dbuser && $pass == $dbpass){
    echo '<h1>selamat anda berhasil login</h1>';
}else{
    if(isset($_SESSION["salah"])){
        $_SESSION["salah"]="Username atau Password salah";
        $_SESSION["salah"]++;
    }else{
        $_SESSION["salah"]="Username atau password tidak boleh kosong";
        $_SESSION["salah"] = 1;
    }
   header("location:index.php");//redirect
}