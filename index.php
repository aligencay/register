<?php

if($_POST){
    if(isset($_POST['name']) && isset($_POST['age']) && isset($_POST['gender']) && isset($_POST['password'])){
        if($_POST['age']<18){
            echo "Yaşınız kayıt yapmak için uygun değil";
        }
        elseif(strlen($_POST['password'])<8 || strlen($_POST['passwordConfirm'])<8){
            echo "Şifreniz 8 karakterden az olamaz";
        }
        elseif($_POST['password']!=$_POST['passwordConfirm']){
            echo "Şifreleriniz uyuşmuyor";
        }
        else{
            echo "Kayıt başarılı";
        }
    }
    else{
        echo "Tüm alanları doldurunuz!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Odev</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="screen">
            <div class="screen-content">
    <form action="" method="post">
        <div class="form-group">
            <label for="">Ad Soyad: </label>
            <input type="text" name="name" placeholder="Ad Soyad giriniz">
        </div>
        <div class="form-group">
            <label for="">Yaş: </label>
            <input type="text" name="age" placeholder="Yaşınızı giriniz">
        </div>
        <div class="form-group form-group-gender">
            <label for="">Cinsiyet: </label>
            <br>
            <div class="form-group-gender-options">
            <label for="">Erkek</label>
            <input type="radio" name="gender" value="male">
            <label for="">Kadın</label>
            <input type="radio" name="gender" value="female">
            </div>
        </div>
        <div class="form-group">
            <label for="">Şifre:</label>
            <input type="password" name="password" placeholder="Şifrenizi giriniz">
        </div>
        <div class="form-group">
            <label for="">Şifrenizi tekrar girin:</label>
            <input type="password" name="passwordConfirm" placeholder="Şifrenizi tekrar giriniz">
        </div>
        <div class="form-group form-group-submit">
            <div class="form-group-submit-text">
            <input type="submit" value="Gönder">
            </div>
        </div>
    </form>
    </div>
    </div>
    </div>
</body>
</html>