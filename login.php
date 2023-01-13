
<!DOCTYPE html>
<html lang="en">
<head>
<?php
// php script
include("functions/controller_login.php");

?>
  <!-- Design by foolishdeveloper.com -->
    <title>Web</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 540px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 20px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 25px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 10px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 4px;
    cursor: pointer;
}
button:hover{
    color:green;
}
.fade-hover {
  opacity: 1;
  transition: opacity 0.5s;
}

.fade-hover:hover {
  opacity: 0.5;
}

button >a{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 10px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 4px;
    cursor: pointer;
}
.btn-show{
    width:100%;
    margin-top: 3px ;
    padding: 10spx 0;
    font-size: 12px;
    font-weight: 200;
    border-radius: 8px;
    background : transparent;
    color : white;
    cursor: pointer;
}
.btn-show:hover{
    color : gray;
}
.btn-daftar>a:hover{
    color : blue;
}
.btn-daftar>a{
    text-decoration : none;
}

    </style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="login.php" method="POST">
        <h3>Login disini</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Masukan username"  name="username">

        <label for="password">Password</label>
        <input type="password" placeholder="Masukan Password" name="password" id="password">
        <button type="button" class="btn-show" onclick="showPassword()" >Show Password</button>
        <script>function showPassword() {
  var password = document.getElementById("password");
  if (password.type === "password") {
    password.type = "text";
  } else {
    password.type = "password";
  }
}
</script>
        <button name="submit">Masuk</button>
        <button class="btn-daftar"><a href="daftar.php">Daftar</a></button>
       <script type="text/javascript" src="./script.js"></script>
    </form>
</body>
</html>
