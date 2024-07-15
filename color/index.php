<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index_post.php" method="POST">
        <input type="text" placeholder="enter your value" name="value">
        <button type="submit" name="submit">submit</button>

        <!-- color red -->
        <?php if (isset($_SESSION["red"])) { ?>
            <p style="color: red">
                <?php echo $_SESSION["red"]; ?>

            </p>
        <?php } unset($_SESSION["red"]);?>

        <!-- color green -->
        <?php if (isset($_SESSION["green"])) { ?>
            <p style="color: green">
                <?php echo $_SESSION["green"]; ?>

            </p>
        <?php } unset($_SESSION["green"]);?>

       <!-- color blue -->
       <?php if (isset($_SESSION["blue"])) { ?>
            <p style="color: blue">
                <?php echo $_SESSION["blue"]; ?>

            </p>
        <?php } unset($_SESSION["blue"]);?> 
        
        <!-- color yellow -->
       <?php if (isset($_SESSION["yellow"])) { ?>
            <p style="color: yellow">
                <?php echo $_SESSION["yellow"]; ?>

            </p>
        <?php } unset($_SESSION["yellow"]);?> 

        <!-- color orange -->
       <?php if (isset($_SESSION["orange"])) { ?>
            <p style="color: orange">
                <?php echo $_SESSION["orange"]; ?>

            </p>
        <?php } unset($_SESSION["orange"]);?> 

        <!-- color brown -->
       <?php if (isset($_SESSION["brown"])) { ?>
            <p style="color: brown">
                <?php echo $_SESSION["brown"]; ?>

            </p>
        <?php } unset($_SESSION["brown"]);?> 

        <!-- color black -->
       <?php if (isset($_SESSION["black"])) { ?>
            <p style="color: black">
                <?php echo $_SESSION["black"]; ?>

            </p>
        <?php } unset($_SESSION["black"]);?> 

         <!-- color error -->
         <?php if (isset($_SESSION["error"])) { ?>
            <p style="color: black; font-size: 20px;">
                <?php echo $_SESSION["error"]; ?>

            </p>
        <?php } unset($_SESSION["error"]);?>   
       
        
         <!-- color error-1 -->
         <?php if (isset($_SESSION["error-1"])) { ?>
            <p style="color: black;">
                <?php echo $_SESSION["error-1"]; ?>

            </p>
        <?php } unset($_SESSION["error-1"]);?>   

    </form>
</body>

</html>