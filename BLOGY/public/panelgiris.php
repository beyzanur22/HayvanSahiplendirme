<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */ /*childs elementslerini düzenle  */
  display: flex; 
  width: 100%;/* tam genişlik */
  margin-bottom: 15px;  /* alt boşluk */
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: darkgreen;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>

<form action="panelgiris.php" method="post" style="max-width:500px;margin:auto">
  <h2>GİRİŞ</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Kullanıcı adı" name="usrnm">
  </div>


  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Parola" name="psw">
  </div>

  <button type="submit" class="btn">Giriş Yap</button>
</form>

</body>
</html>
<?php

session_start();

if(isset($_POST["usrnm"],$_POST["psw"])){
  if($_POST["usrnm"]=="beyza" && $_POST["psw"]=="12345"){

    $_SESSION["user"]=$_POST["usrnm"];
    header("location:panel.php");


  }
  else{
    echo"<script> alert('Kullanıcı adı veya şifre yanlış!')</script>";
    
  }

}

?>