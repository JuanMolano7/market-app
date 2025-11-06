<?php
    echo "Welcom to main !!!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/icon" href="src/icons/market_main.png">
    <title>Marketapp - Home</title>
</head>
<body>
    <center><b>User:</b>Here print your name </center>
    <?php echo $SESSION ?>
    <a href ="list_users.php">List all users</a>
    <a href ="logout.php">Logout</a>
</body>
</html>
