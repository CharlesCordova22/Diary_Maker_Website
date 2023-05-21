<?php
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="d-low-resolution-logo-black-on-transparent-background (1).png" type="image/icon type">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <link href='https://fonts.googleapis.com/css?family=Archivo' rel='stylesheet'>
        <link rel="icon" type="image/png" href="image/tab_logo.png">
        
        <title>Registration Page</title>
    </head>
    <style>
        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        background: #434242;
        
    }
    .container1{
        background: linear-gradient(90deg, rgba(164,165,166,1) 25%, rgba(195,195,195,1) 50%, rgba(225,225,230,1) 75%);
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
    .container2 img{
    transition: 1s ease;
    }

    .container2 img:hover {
    -webkit-filter: blur(5px);
    transition: 1s ease;
    }
    .login{
        width: 800px;
        min-height: 400px;
        overflow: hidden;
        border: 8px solid rgba(34,34,34,0.8);
        border-radius: 15px 50px 30px;
        display: flex;
        background: #434242;;
        box-shadow: 15px 5px 30px rgba(0,0,0,0.3);
    }
    .container2{
        flex-basis: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background:#434242;
        padding: 10px;
    }
    .container2 img{
        width: 80%;
        padding-left: 10px;
    }
    .login-form{
        flex-basis: 50%;
        background:transparent;
        font-family: Helvetica;
        padding: 25px;
        margin-top: 0px;
    }
    .user_input{
        margin: 35px 0;  
    }
    .user_input input{
        border-radius: 40px;
        margin-top: -15px;
        margin-bottom: -10px;
        font-size: 15px;
        width: 100%;
        height: 60px;
        text-align: center;
        font-family: 'Archivo';
        background: rgba(255,255,2555,0.7);
        box-shadow: rgba(0,0,0,0.3) 0px 19px 38px, rgba(0,0,0,0.22) 0px 15px 12px;
        padding-left: 16px;
    }
    .user_input i{
        color: #434242;
        position: relative;
        font-size: 35px;
        top: 34px;
        left: 15px;
        background: transparent;
    
    }
/*-------------------------------------------------------------*/
    .pass_input{
        margin: 35px 0;  
    }
    .pass_input input{
        border-radius: 40px;
        margin-top: -20px;
        font-size: 15px;
        width: 100%;
        height: 60px;
        text-align: center;
        font-family: 'Archivo';
        background: rgba(255,255,2555,0.7);
        box-shadow: rgba(0,0,0,0.3) 0px 19px 38px, rgba(0,0,0,0.22) 0px 15px 12px;
        padding-left: 16px;
    }
    .pass_input i{
        color: #434242;
        position: relative;
        font-size: 35px;
        top: 28px;
        left: 15px;
        background: transparent;
    }

    .firstname_input{
        margin: 35px 0;  
    }
    .firstname_input input{
        border-radius: 40px;
        margin-bottom: -10px;
        margin-top: -20px;
        font-size: 15px;
        width: 100%;
        height: 60px;
        text-align: center;
        font-family: 'Archivo';
        background: rgba(255,255,2555,0.7);
        box-shadow: rgba(0,0,0,0.3) 0px 19px 38px, rgba(0,0,0,0.22) 0px 15px 12px;
        padding-left: 16px;
    }
    .firstname_input i{
        color: #434242;
        position: relative;
        font-size: 35px;
        top: 28px;
        left: 15px;
        background: transparent;
    }

    .lastname_input{
        margin: 35px 0;  
    }
    .lastname_input input{
        border-radius: 40px;
        margin-bottom: -10px;
        margin-top: -20px;
        font-size: 15px;
        width: 100%;
        height: 60px;
        text-align: center;
        font-family: 'Archivo';
        background: rgba(255,255,2555,0.7);
        box-shadow: rgba(0,0,0,0.3) 0px 19px 38px, rgba(0,0,0,0.22) 0px 15px 12px;
        padding-left: 16px;
    }
    .lastname_input i{
        color: #434242;
        position: relative;
        font-size: 35px;
        top: 28px;
        left: 15px;
        background: transparent;
    }

    ::placeholder{
        color: #777;
        padding-left: 30px;
        font-size: small;
        font-weight: 300;
        
    }
    .signup_btn{
        margin-top: 0px;
        margin-left: 35%;
        width: 30%;
        height: 40%;
        border: 0;
        border-radius: 40px;
        background: #DDDD;
        font-family: 'Archivo';
        padding: 12px;
        font-size: 15px;
        outline: none;
        background: rgba(255,255,2555,0.7);
        cursor: pointer;
        transition: .3s;
        box-shadow: rgba(0,0,0,0.3) 0px 19px 38px, rgba(0,0,0,0.22) 0px 15px 12px;
    }
/*----------------------------------------------------------------*/
    .user_signup {
        padding: 5px;
        margin-top: 10px;
        justify-content: center;
        font-family: 'Archivo';
        align-items: center;
        text-align: center;
        text-decoration: none;
    }
    .user_signup a{
        text-decoration: none;
        font-weight: bold;
        background-image: linear-gradient(
            to right,
            white,
            white 50%,
            white 50%
        );
        background-size: 200% 100%;
        background-position: -100%;
        display: inline-block;
        padding: 5px 0;
        position: relative;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        transition: all 0.3s ease-in-out;
    }
    .user_signup a:before{
        content: '';
        background: black;
        display: block;
        position: absolute;
        bottom: -3px;
        left: 0;
        width: 0;
        height: 3px;
        transition: all 0.3s ease-in-out;
    }
    .user_signup a:hover{
        background-position: 0;
    }
    .user_signup a:hover::before{
        width: 100%;
    }

    @media(max-width:768px){
        .login {
            flex-direction: column;
            margin: 0 15px;
        }
        .container2{
            padding-top: 45px;
            margin: auto;
            margin-bottom: -40px;
            width: 80%;
        }
        
    }
    span{

        justify-content: center;
        align-items: center;
        text-align: center;
        text-decoration: none;
        color: #DDDD;
    }
    </style>
<body>
    <div class="container1">
        <div class="login">
            <div class="container2">
            <img src="registration-form-low-resolution-logo-white-on-transparent-background (1).png"></div>

            <div class="login-form">
                <form action="add_user_backend.php" method="POST">
                    <div class="user_input">
                        <i class='far'>&#xf2bd;</i><input name="user_name" placeholder="USERNAME" type="text" required>
                    </div>

                    <div class="firstname_input">
                        <i class='far'>&#xf2bd;</i><input name="first_name" placeholder="FIRSTNAME" type="text" required>
                    </div>

                    <div class="lastname_input">
                        <i class='far'>&#xf2bd;</i><input name="last_name" placeholder="LASTNAME" type="text" required>
                    </div>

                    <div class="pass_input">
                        <i class='fas'>&#xf023;</i><input name="user_pass" placeholder="PASSWORD" type="password" required>
                    </div>
                    
                    <button class="signup_btn">Sign-up&nbsp;&nbsp;&#x276F;</button>
                    <br><br><br>

                </form>
                    <hr>
                    <div class="user_signup">
                        <span>already have an account? <a href="login_page.php">Login</a></span>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>