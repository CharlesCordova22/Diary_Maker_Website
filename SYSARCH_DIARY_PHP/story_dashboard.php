<?php
    require('local_setting.php');

    if(isset($_GET['authentication2'])) {
        $authStatus = $_GET['authentication2'];
    } else {
        $authStatus = '';
    }

    $diary_id = $_GET['diary_id'];
    $fetchQuery = "SELECT * 
        FROM story INNER JOIN diary on story.diary_id = diary.diary_id
        WHERE story.diary_id = {$diary_id}";
        $result = $conn->query($fetchQuery);
    
    error_reporting(0);
    $conn = mysqli_connect("localhost","root","","sysarch_cordova_db");
    if(count($_POST)>0) {
    $story_id = $_POST['story_id'];
    $result = mysqli_query($conn,"SELECT * FROM story where story_id='$story_id'");
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="d-low-resolution-logo-black-on-transparent-background (1).png" type="image/icon type">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Archivo' rel='stylesheet'>
        <link rel="icon" type="image/png" href="image/tab_logo.png">
        
        <title>Story Dashboard</title>
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
        background: radial-gradient(circle, rgba(104,104,105,1) 0%, rgba(235,235,235,1) 79%);
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
    .login{
        width: 1400px;
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
        white-space: nowrap;
        }
        th {
        background-color: rgba(34,34,34,0.8);
        padding: 18px;
        text-align: center;
        }

        tr:nth-child(even) {
        background-color: #f2f2f2;
        }
        p .limited-text {
            white-space: nowrap;
            overflow: hidden;
            position: flex;
            text-overflow: ellipsis;
            max-width: 200px; /* Set the maximum width of the element */
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
    .back_style{
        margin: 35px 0;  
    }
    .back_style button{
        border-radius: 5px;
        margin-left: 420px;
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
        margin-left: 315px;
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
    <input name="diary_id" type="hidden" value="<?php echo $_GET['diary_id']?>">
        <div class="login">
            <div class="back_style">
                <button onclick="goBack()">BACK</button>
            </div>
            <div class="diary_style">
                <form action="create_story_page.php?diary_id=<?php echo $_GET["diary_id"];?>" method="POST">
                    <input type="submit" value="ADD STORY">
                </form>
            </div>

            <div class="logout">
                <form action="logout_session.php">
                    <input type="submit" value="LOGOUT">
                </form>
            </div>

            <div class="search">
            <form action="story_dashboard.php?diary_id=<?php echo $diary_id?>" method="POST">
                <input name="diary_id" type="hidden" value="<?php echo $_GET['diary_id']?>">
                <i class="fa fa-search"></i><input name="story_id" type="text" placeholder="SEARCH STORY ID">
                </form>
            </div>

            <header>
            <table>
                <tr>
                    <th>Story ID</th>
                    <th>Diary ID</th>
                    <th>Story</th>
                    <th>Story Date</th>
                    <th>Actions</th>
                </tr>
            <?php
            $i=0;
                while($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                <td><?php echo $row['story_id']; ?></td>
                    <td><?php echo $row['diary_id']; ?></td>
                    <td id="myText"><p name="limited-text"><?php echo $row['story_message']; ?></p></td>
                    <td><?php echo $row['story_date']; ?></p></td>
                    <td>
                        <form method="POST" action="delete_story_backend.php?story_id=<?php echo $row['story_id']?>">
                            <input name="diary_id" type="hidden" value="<?php echo $diary_id?>">
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
<script>
    function goBack() {
        window.history.back();
    }
    var text = document.getElementById("myText").textContent;
    var limitedText = text.substr(0, 20) + "..."; // Display only the first 20 characters
    document.getElementById("myText").textContent = limitedText;
</script>
</html>