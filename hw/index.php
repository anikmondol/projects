<?php

session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index_post.php" method="POST">
        <input type="text" placeholder="enter your value" name="year">

        <?php if (isset($_SESSION["error"])) { ?>

            <p style="color:red"> <?php echo $_SESSION["error"] ?> </p>

        <?php } unset($_SESSION["error"]); ?>


        <?php if (isset($_SESSION["sucess"])) { ?>

            <p style="color:green"> <?php echo $_SESSION["sucess"] ?> </p>

        <?php } unset($_SESSION["sucess"]); ?>


        <button type="submit" name="submit">submite</button>
    </form>
</body>

</html>