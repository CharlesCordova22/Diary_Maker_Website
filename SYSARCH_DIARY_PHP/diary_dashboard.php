<?php
    session_start();

    require('local_setting.php');
    $user_id = $_GET['user_id'];
    $fetchQuery = "SELECT * 
        FROM diary INNER JOIN user on user.user_id = diary.user_id
        WHERE diary.user_id = {$user_id}";
        $result = $conn->query($fetchQuery);

    error_reporting(0);
    if(count($_POST)>0) {
    $diary_title = $_POST['diary_title'];
    $result = mysqli_query($conn,"SELECT * FROM diary where diary_title='$diary_title'");
    }

    require('fetch_lastname.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="d-low-resolution-logo-black-on-transparent-background (1).png" type="image/icon type">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Archivo' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="icon" type="image/png" href="image/tab_logo.png">
        
        <title>Diary Dashboard</title>
    </head>
    <style>
        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        background: #434242;
        
    }
    h1{
        font-family: 'Archivo';
        background-color: transparent;
        margin-top: -600px;
        position: absolute;
        font-size: 35px;
        margin-left: -600px;
    }
    .container1{
        background: radial-gradient(circle, rgba(235,235,235,1) 0%, rgba(104,104,105,1) 79%);
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
    .login{
        width: 920px;
        min-height: 400px;
        overflow: hidden;
        border: 8px solid rgba(34,34,34,0.8);
        border-radius: 15px;
        background: #434242;
        box-shadow: 15px 5px 30px rgba(0,0,0,0.3);
    }
    
/*-------------------------------------------------------------*/
    ::placeholder{
        color: #777;
        padding-left: 30px;
        font-size: small;
        font-weight: 300;
    }
    table {
        border-collapse: collapse;
        width: 100%;
        font-family: 'Archivo';
        font-size: 20px;
        color: white;
        }
        td{
        padding: 18px;
        text-align: center;
        }
        th {
        background-color: rgba(34,34,34,0.8);
        padding: 18px;
        text-align: center;
        }

        tr:nth-child(even) {
        background-color: #f2f2f2;
        }
    .diary_style{
        margin: 35px 0;  
    }
    .diary_style input{
        border-radius: 5px;
        margin-left: 210px;
        margin-bottom: -10px;
        margin-top: -30px;
        font-size: 13px;
        width: 95px;
        height: 25px;
        position: absolute;
        text-align: center;
        font-family: 'Archivo';
        background: rgba(255,255,2555,0.7);
        box-shadow: rgba(0,0,0,0.3) 0px 19px 38px, rgba(0,0,0,0.22) 0px 15px 12px;
    }
    .public_wall{
        margin: 35px 0;  
    }
    .public_wall input{
        border-radius: 5px;
        margin-left: 418px;
        margin-bottom: -10px;
        margin-top: -30px;
        font-size: 13px;
        width: 95px;
        height: 25px;
        position: absolute;
        text-align: center;
        font-family: 'Archivo';
        background: rgba(255,255,2555,0.7);
        box-shadow: rgba(0,0,0,0.3) 0px 19px 38px, rgba(0,0,0,0.22) 0px 15px 12px;
    }
    .logout{
        margin: 35px 0; 
    }
    .logout input{
        border-radius: 5px;
        margin-left: 314px;
        margin-bottom: -10px;
        margin-top: -30px;
        font-size: 13px;
        width: 95px;
        height: 25px;
        position: absolute;
        text-align: center;
        font-family: 'Archivo';
        background: rgba(255,255,2555,0.7);
        box-shadow: rgba(0,0,0,0.3) 0px 19px 38px, rgba(0,0,0,0.22) 0px 15px 12px;
    }
    .search i{
        position: absolute;
        margin-left: 20px;
        color: black;
        margin-top: -26px;

    }
    .search input::placeholder{
        position: absolute;
        margin-top: 4px;
        color: black;
        margin-left: -30px;
    }
    .search input{
        padding-left: 30px;
        border-radius: 5px;
        margin-left: 10px;
        margin-bottom: -10px;
        margin-top: -30px;
        font-size: 13px;
        width: 190px;
        height: 25px;
        position: absolute;
        font-family: 'Archivo';
        background: rgba(255,255,2555,0.7);
        box-shadow: rgba(0,0,0,0.3) 0px 19px 38px, rgba(0,0,0,0.22) 0px 15px 12px;
    }
    .story_style{
        border-radius: 5px;
        font-size: 13px;
        width: 95px;
        height: 35px;
        text-align: center;
        font-family: 'Archivo';
        background: rgba(255,255,2555,0.7);
    }
    .edit_style{
        border-radius: 5px;
        font-size: 13px;
        margin-left: -45px;
        width: 40px;
        height: 35px;
        text-align: center;
        position: absolute;
        background: rgba(255,255,2555,0.7);
    }
    .edit_style i{
        background-color: transparent;
        font-size: 20px;
    }
    .delete_style{
        border-radius: 5px;
        font-size: 13px;
        margin-right: -45px;
        width: 40px;
        height: 35px;
        text-align: center;
        background: rgba(255,255,2555,0.7);
    }
    .delete_style i{
        background-color: transparent;
        font-size: 30px;
    }
/*----------------------------------------------------------------*/

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
        h1{
        font-family: 'Archivo';
        background-color: transparent;
        margin-top: -580px;
        font-size: 35px;
        width: 0%;
        margin-left: -500px;
        }
        .story_style{
        border-radius: 5px;
        font-size: 13px;
        width: 95px;
        height: 35px;
        text-align: center;
        font-family: 'Archivo';
        background: rgba(255,255,2555,0.7);
        }
        .edit_style{
        border-radius: 5px;
        font-size: 13px;
        margin-left: -45px;
        width: 40px;
        height: 35px;
        text-align: center;
        position: absolute;
        background: rgba(255,255,2555,0.7);
        }
        .edit_style i{
            background-color: transparent;
            font-size: 20px;
        }
        .delete_style{
            border-radius: 5px;
            font-size: 13px;
            margin-right: -45px;
            width: 40px;
            height: 35px;
            text-align: center;
            background: rgba(255,255,2555,0.7);
        }
        .delete_style i{
            background-color: transparent;
            font-size: 30px;
        }
    }
    </style>
<body>
    <div class="container1">
    <input name="user_id" type="hidden" value="<?php echo $_GET['user_id']?>">
        <h1>Welcome <?php echo $userDetails['last_name']?>!</h1>
        <div class="login">

            <div class="diary_style">
                <form action="create_diary_page.php?user_id=<?php echo $_GET["user_id"];?>" method="POST">
                    <input type="submit" value="ADD DIARY">
                </form>
            </div>

            <div class="logout">
                <form action="logout_session.php">
                    <input type="submit" value="LOGOUT">
                </form>
            </div>

            <div class="search">
                <form action="diary_dashboard.php?user_id=<?php echo $user_id?>" method="POST">
                <input name="user_id" type="hidden" value="<?php echo $_GET['user_id']?>">
                <i class="fa fa-search"></i><input name="diary_title" type="text" placeholder="SEARCH DIARY TITLE">
                </form>
            </div>

            <div class="public_wall">
                <form action="public_wall.php?user_id=<?php echo $_GET["user_id"];?>" method="POST">
                    <input name="user_id" type="hidden" value="<?php echo $_GET['user_id']?>">
                    <input type="submit" value="PUBLIC WALL">
                </form>
            </div>

            <header>
            <table>
                <tr>
                    <th>User Id</th>
                    <th>Diary Id</th>
                    <th>Status</th>
                    <th>Diary Created</th>
                    <th>Diary Title</th>
                    <th>Story</th>
                    <th>Actions</th>
                </tr>
            <?php
            $i=0;
                while($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><a><?php echo $row['user_id']; ?></a></td>
                    <td><a><?php echo $row['diary_id']; ?></a></td>
                    <td><a><?php echo $row['status']; ?></a></td>
                    <td><a><?php echo $row['diary_created']; ?></a></td>
                    <td><a><?php echo $row['diary_title']; ?></a></td>
                    <td>
                        <form method="POST" action="story_dashboard.php?diary_id=<?php echo $row['diary_id']?>">
                        <input name="user_id" type="hidden" value="<?php echo $_GET['user_id']?>">
                            <button type="submit" class="story_style">ADD STORY</button>
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="edit_diary_page.php?diary_id=<?php echo $row['diary_id']?>">
                            <input name="user_id" type="hidden" value="<?php echo $_GET['user_id']?>">
                            <button class="edit_style"><i class="fa">&#xf044;</i></button>
                        </form>
                        <form method="POST" action="delete_diary_backend.php?diary_id=<?php echo $row['diary_id']?>">
                            <input name="user_id" type="hidden" value="<?php echo $_GET['user_id']?>">
                            <button class="delete_style"><i class="material-icons">&#xe872;</i></button>
                        </form>
                    </td>
                </tr>
            <?php
            $i++;
            }
            ?>
            </table>
            </header>
        </div>
    </div>
</body>

</html>