<!DOCTYPE html>
<html lang="en">
    <?php
    include("functions/controller_register.php");
    if(isset($_POST['daftar'])){
        echo "<script>document.location.href='login.php'</script>";
    }?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&display=swap');
        :root {
        --font-style : 'Nunito Sans', sans-serif ;
        }

        * {
            box-sizing : border-box ;
        }

        body{
            background-image : url('https://tse1.mm.bing.net/th?id=OIP.kQND2_LL1_6SiDCtUOSgkgHaHa&pid=Api&P=0');
            font-family : var(--font-style);
        }

        .login-box {
            position : absolute;
            top : 50% ;
            left : 50% ;
            width : 400px;
            padding : 40px;
            transform : translate(-50%,-50%);
            background : #242026 ;
            box-shadow : 0 15px 25px rgba(143,124,236,0.7);
            border-radius : 10px;
        }

        .login-box h2 {
            margin : 0 0 30px;
            padding : 0 ;
            color : #fff ;
            text-align : center ;
        }

        .login-box .user-box input {
            position : relative;
            width : 100%;
            padding :10px 0;
            font-size : 16px ;
            color : #fff ;
            margin-bottom : 30px ;
            border : none ;
            border-bottom : 1px solid #fff ;
            outline : none ;
            background : transparent;
        }

        .login-box .user-box label {
            position : relative;
            left : 0 ;
            top : -60px ;
            padding : 10px 0 ;
            font-size : 16px ;
            color : #fff ;
            pointer-events : none;
            transition : .5s ;
        }

        .login-box .user-box input:focus~label,
        .login-box .user-box input:valid~label {
            top : -85px;
            left : 0;
            color : #8F7CEC ;
            font-size : 12px ;
        }

        #submit {
            padding : 10px 20px ;
            color : #CBBDDB ;
            font-size : 16px;
            text-decoration : none ;
            text-transform : uppercase;
            overflow : hidden;
            transition : .5s ;
            letter-spacing : 4px;
            border : 1px solid #8F7CEC ;
            margin : auto ;
            background-color : black;
        }

        #submit:hover {
            background : #8F7CEC ;
            color : #fff ;
            border-radius : 5px ;
            box-shadow : 0 0 5px #8F7CEC, 0 0 25px #8F7CEC, 0 0 50px #8F7CEC, 0 0 100px #8F7CEC;
        }

        .button-form {
            display : flex ;
            flex-direction : row ;
            margin-top : 20px;
        }

       
        </style>
</head>
<body>
    <div class="login-box">
    <h2>Daftar akun</h2>
    <form method="post">
    <div class="user-box">
    <input type="text" name="username" required>
    <label>Username</label>
    </div>
    <div class="user-box">
    <input type="password" name="password" required>
    <label>Password</label>
    </div>
    <div class="button-form">
    <button id="submit" name="daftar">Daftar</a>
    
    </div>
</form>
</div>
</body>
</html>