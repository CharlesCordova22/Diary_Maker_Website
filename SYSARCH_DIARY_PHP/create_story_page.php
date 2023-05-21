<?php
    require('local_setting.php');
    $diary_id = $_GET['diary_id'];
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
        
        <title>Create Story Page</title>
    </head>
    <style>
        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        background: #434242;
        
    }
    .container1{
        background: linear-gradient(0deg, rgba(164,165,166,1) 35%, rgba(225,225,230,1) 65%);
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
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
    
/*-------------------------------------------------------------*/
    .create_btn{
        margin-top: 0px;
        margin-left: 35%;
        margin-bottom: 10px;
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
    .logout_btn{
        font-size: 13px;
    }
    .logout_btn{
        margin-top: 20px;
        margin-left: 18px;
        width: 65px;
        height: 35px;
        border: 0;
        border-radius: 35px;
        outline: none;
        font-family: 'Archivo';
        background: rgba(255,255,2555,0.7);
        cursor: pointer;
        transition: .3s;
    }
    .date_input{
        margin: 35px 0;  
    }
    .date_input input{
        border-radius: 15px;
        margin-bottom: 0px;
        margin-top: -30px;
        font-size: 15px;
        width: 100%;
        height: 60px;
        text-align: center;
        font-family: 'Archivo';
        background: rgba(255,255,2555,0.7);
        box-shadow: rgba(0,0,0,0.3) 0px 19px 38px, rgba(0,0,0,0.22) 0px 15px 12px;
        padding-left: 16px;
    }
    .date_input i{
        color: #434242;
        position: relative;
        font-size: 35px;
        top: 28px;
        left: 15px;
        background: transparent;
    }
    .user_text{
        margin: 35px 0;  
    }
    .user_text input{
        border-radius: 15px;
        margin-bottom: 0px;
        margin-top: 15px;
        font-size: 15px;
        width: 100%;
        padding-left: 25px;
        height: 60px;
        font-family: 'Archivo';
        background: rgba(255,255,2555,0.7);
        box-shadow: rgba(0,0,0,0.3) 0px 19px 38px, rgba(0,0,0,0.22) 0px 15px 12px;
    }
    ::placeholder{
        color: #777;
        font-size: small;
        font-weight: 300;
        
    }
/*----------------------------------------------------------------*/
    .user_signup {
        padding: 5px;
        margin-top: 10px;
        justify-content: center;
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
                <img src="create-story-low-resolution-logo-white-on-transparent-background.png"></div>

                <div class="login-form">
                    <form action="add_story_backend.php?diary_id=<?php echo $diary_id ?>" method="POST">
                    <input name="diary_id" type="hidden" value="<?php echo $_GET['diary_id']?>">
                        
                        <div class="user_text">
                            <input name="story_message" placeholder="Write a Story...">
                        </div>

                        <div class="date_input">
                            <i class='far'>&#xf133;</i><input name="story_date" type="date" required>
                        </div>
                        
                        <button class="create_btn">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>