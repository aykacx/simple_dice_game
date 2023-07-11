<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dice Game</title>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }

        .main-div {
            max-width: 600px;
            margin: 0 auto;
            padding: 30px;
            background-color: #ffcccc;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
        }

        .left-div {
            flex: 1;
            margin-right: 20px;
        }

        .right-div {
            flex: 1;
        }

        h2 {
            margin: 0;
            color: #cc0000;
        }

        form {
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="submit"] {
            padding: 10px;
            border: 1px solid #cc0000;
            border-radius: 5px;
            font-size: 16px;
            color: #cc0000;
        }

        input[type="submit"] {
            background-color: #cc0000;
            color: #fff;
            cursor: pointer;
        }

        .rules {
            background-color: #ffdddd;
            padding: 20px;
            border-radius: 5px;
        }

        ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }

        li {
            margin-bottom: 10px;
            color: #cc0000;
        }
    </style>
</head>

<body>
    <div class="main-div">
        <div class="left-div">
            <h2>Dice Game</h2><br><br><br><br>
            <form action="" method="POST">
                <font color="#cc0000" face="tahoma">User 1: </font> <input type="text" name="user1" required><br><br><br>
                <font color="#cc0000" face="tahoma">User 2: </font> <input type="text" name="user2" required><br><br><br>
                <input type="submit" name="submit" value="Play">
            </form>
        </div>
        <div class="right-div">
            <div class="rules">
                <h2>Rules</h2>
                <ul>
                    <li>Enter your names before you embark on this thrilling journey!</li>
                    <li>Let the first name control the left dice, and the second name control the right dice.</li>
                    <li>Press the play button to step into the captivating game page.</li>
                    <li>May the luckiest roll claim the precious oxygen!</li>
                    <li>Remember, the numbers are at the whims of fate. Best of luck on your daring adventure!</li>
                </ul>
            </div>
        </div>

        <?php
        if ($_POST) {
            session_start();
            $play = $_POST['submit'];
            $user1 = $_POST['user1'];
            $user2 = $_POST['user2'];

            if (isset($play)) {
                $_SESSION['user1'] = $user1;
                $_SESSION['user2'] = $user2;
                header('location:game_page.php');
            }
        }
        ?>

    </div>
</body>

</html>