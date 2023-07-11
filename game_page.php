<?php session_start(); ?>
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

        .main {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            margin-top: 50px;
        }

        .left,
        .right {
            width: 200px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .center {
            text-align: center;
            margin: 0 20px;
        }

        fieldset {
            border: none;
            padding: 0;
        }

        p {
            margin: 0;
            color: #333;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        img {
            height: 150px;
            width: 150px;
        }
    </style>
</head>

<body>
    <div class="main">
        <?php
        $dice1 = rand(1, 6);
        $dice2 = rand(1, 6);
        $user1 = $_SESSION['user1'];
        $user2 = $_SESSION['user2'];
        ?>
        <div class="left">
            <fieldset style="height:100px;">
                <p>User 1: <?php echo $user1; ?></p>
                <p>Dice Number: <?php echo $dice1; ?></p>
            </fieldset>
        </div>
        <div class="center">
            <fieldset>
                <form action="" method="POST">
                    <input type="submit" class="button" name="randomDice" Value="Dice">&nbsp;&nbsp;
                    <input type="submit" class="button" name="exit" value="Exit">
                    <?php
                    if (isset($_POST['exit'])) {
                        session_destroy();
                        header('location:index.php');
                    }
                    ?>
                    <br><br>

                    <?php
                    if (isset($_POST['randomDice'])) {
                        echo "<img src='img/$dice1.png' alt='Dice 1'>";
                        echo "&nbsp;";
                        echo "<img src='img/$dice2.png' alt='Dice 2'>";
                        echo "<br>";
                        if ($dice1 > $dice2) {
                            echo $user1 . " wins!";
                        } else if ($dice1 < $dice2) {
                            echo $user2 . " wins!";
                        } else {
                            echo "No one wins";
                        }
                    }
                    ?>
                </form>
            </fieldset>
        </div>
        <div class="right">
            <fieldset style="height:100px;">
                <p>User 2: <?php echo $user2; ?></p>
                <p>Dice Number: <?php echo $dice2; ?></p>
            </fieldset>
        </div>
    </div>

</body>

</html>
