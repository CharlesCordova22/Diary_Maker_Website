<?php
    if(isset($_GET['authentication2'])) {
        $authStatus = $_GET['authentication2'];
    } else {
        $authStatus = '';
    }
?>
<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Archivo' rel='stylesheet'>
        <link rel="icon" href="d-low-resolution-logo-black-on-transparent-background (1).png" type="image/icon type">
    </head>
    <style>
        * {
            padding: 0;
            margin: 0;
            }

            body {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: radial-gradient(circle, rgba(164,165,166,1) 0%, rgba(195,195,195,1) 50%, rgba(225,225,230,1) 100%);
            }

            h1 {
                font-family: 'Archivo';
                font-size: 40px;
                max-width: 40ch;
                text-align: center;
                transform: scale(0.94);
                animation: scale 3s forwards cubic-bezier(0.5, 1, 0.89, 1);
            }

            @keyframes scale {
            100% {
                transform: scale(1);
            }
            }

            span {
            display: inline-block;
            opacity: 0;
            filter: blur(4px);
            }

            span:nth-child(1) {
            animation: fade-in 0.8s 0.1s forwards cubic-bezier(0.11, 0, 0.5, 0);
            }

            span:nth-child(2) {
            animation: fade-in 0.8s 0.3s forwards cubic-bezier(0.11, 0, 0.5, 0);
            }

            span:nth-child(3) {
            animation: fade-in 0.8s 0.5s forwards cubic-bezier(0.11, 0, 0.5, 0);
            }

            span:nth-child(4) {
            animation: fade-in 0.8s 0.7s forwards cubic-bezier(0.11, 0, 0.5, 0);
            }

            span:nth-child(5) {
            animation: fade-in 0.8s 0.9s forwards cubic-bezier(0.11, 0, 0.5, 0);
            }

            span:nth-child(6) {
            animation: fade-in 0.8s 1.1s forwards cubic-bezier(0.11, 0, 0.5, 0);
            }

            span:nth-child(7) {
            animation: fade-in 0.8s 1.3s forwards cubic-bezier(0.11, 0, 0.5, 0);
            }

            span:nth-child(8) {
            animation: fade-in 0.8s 1.5s forwards cubic-bezier(0.11, 0, 0.5, 0);
            }

            span:nth-child(9) {
            animation: fade-in 0.8s 1.7s forwards cubic-bezier(0.11, 0, 0.5, 0);
            }

            span:nth-child(10) {
            animation: fade-in 0.8s 1.9s forwards cubic-bezier(0.11, 0, 0.5, 0);
            }

            span:nth-child(11) {
            animation: fade-in 0.8s 2.1s forwards cubic-bezier(0.11, 0, 0.5, 0);
            }

            span:nth-child(12) {
            animation: fade-in 0.8s 2.3s forwards cubic-bezier(0.11, 0, 0.5, 0);
            }

            span:nth-child(13) {
            animation: fade-in 0.8s 2.5s forwards cubic-bezier(0.11, 0, 0.5, 0);
            }

            span:nth-child(14) {
            animation: fade-in 0.8s 2.7s forwards cubic-bezier(0.11, 0, 0.5, 0);
            }

            span:nth-child(15) {
            animation: fade-in 0.8s 2.9s forwards cubic-bezier(0.11, 0, 0.5, 0);
            }

            span:nth-child(16) {
            animation: fade-in 0.8s 3.1s forwards cubic-bezier(0.11, 0, 0.5, 0);
            }

            span:nth-child(17) {
            animation: fade-in 0.8s 3.3s forwards cubic-bezier(0.11, 0, 0.5, 0);
            }

            span:nth-child(18) {
            animation: fade-in 0.8s 3.5s forwards cubic-bezier(0.11, 0, 0.5, 0);
            }

            span:nth-child(19) {
            animation: fade-in 0.8s 3.7s forwards cubic-bezier(0.11, 0, 0.5, 0);
            }

            span:nth-child(20) {
            animation: fade-in 0.8s 3.9s forwards cubic-bezier(0.11, 0, 0.5, 0);
            }

            span:nth-child(21) {
            animation: fade-in 0.8s 4.1s forwards cubic-bezier(0.11, 0, 0.5, 0);
            }

            span:nth-child(22) {
            animation: fade-in 0.8s 4.3s forwards cubic-bezier(0.11, 0, 0.5, 0);
            }

            span:nth-child(23) {
            animation: fade-in 0.8s 4.5s forwards cubic-bezier(0.11, 0, 0.5, 0);
            }

            span:nth-child(24) {
            animation: fade-in 0.8s 4.7s forwards cubic-bezier(0.11, 0, 0.5, 0);
            }

            span:nth-child(25) {
            animation: fade-in 0.8s 4.9s forwards cubic-bezier(0.11, 0, 0.5, 0);
            }

            span:nth-child(26) {
            animation: fade-in 0.8s 5.1s forwards cubic-bezier(0.11, 0, 0.5, 0);
            }

            span:nth-child(27) {
            animation: fade-in 0.8s 5.3s forwards cubic-bezier(0.11, 0, 0.5, 0);
            }

            span:nth-child(28) {
            animation: fade-in 0.8s 5.5s forwards cubic-bezier(0.11, 0, 0.5, 0);
            }

            @keyframes fade-in {
            100% {
                opacity: 1;
                filter: blur(0);
            }
            }
            .animated-button {
            animation: button-appear 1.0s ease-out 7.0s forwards;
            opacity: 0;
            }

            @keyframes button-appear {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
            }

            .animated-button {
                width: 220px;
                height: 50px;
                border: none;
                outline: none;
                color: #fff;
                background: #111;
                cursor: pointer;
                position: relative;
                z-index: 0;
                border-radius: 10px;
                font-size: 20px;
                font-family: 'Archivo';
            }

            .animated-button:before {
                content: '';
                background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
                position: absolute;
                top: -2px;
                left:-2px;
                background-size: 400%;
                z-index: -1;
                filter: blur(5px);
                width: calc(100% + 4px);
                height: calc(100% + 4px);
                animation: glowing 20s linear infinite;
                opacity: 0;
                transition: opacity .3s ease-in-out;
                border-radius: 10px;
            }

            .animated-button:active {
                color: #000
            }

            .animated-button:active:after {
                background: transparent;
            }

            .animated-button:hover:before {
                opacity: 1;
            }

            .animated-button:after {
                z-index: -1;
                content: '';
                position: absolute;
                width: 100%;
                height: 100%;
                background: #111;
                left: 0;
                top: 0;
                border-radius: 10px;
            }

            @keyframes glowing {
                0% { background-position: 0 0; }
                50% { background-position: 400% 0; }
                100% { background-position: 0 0; }
            }
    </style>

    <body>
    <h1>
        <span>"Your</span>
        <span>DIARY</span>
        <span>is</span>
        <span>a</span>
        <span>safe</span>
        <span>space</span>
        <span>where</span>
        <span>you</span>
        <span>can</span>
        <span>pour</span>
        <span>out</span>
        <span>your</span>
        <span>heart</span>
        <span>and</span>
        <span>soul</span>
        <span>without</span>
        <span>fear</span>
        <span>of</span>
        <span>judgment.</span>
        <span>So,</span>
        <span>be honest,</span>
        <span>be vulnerable,</span>
        <span>and</span>
        <span>let</span>
        <span>your</span>
        <span>thoughts</span>
        <span>flow</span>
        <span>freely"</span>
        <br><br>
    </h1>
    <form method="POST" action="authentication2.php">
            <input name="user_id" type="hidden" value="<?php echo $_GET['user_id']?>">
                <button type="submit"  class="animated-button">Create Now!</button>
        </form>
    </body>
</html>
