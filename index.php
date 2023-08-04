<?php
if (!isset($userName)){
    $userName = '';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Php validation form</title>
    <div class="box">
        <div class="img-container">
            <img src="./images/avatar.svg" alt="avatar">
        </div>
        <form action="results.php" method="POST">
            <input type="text" placeholder="username" name="user_name" value="<?php echo htmlspecialchars($userName) ?>" > </br>
            <?php if (isset($name_error)) { ?>
                <p class="error"><?php echo $name_error  ?></p>
            <?php } ?>
            <input type="password" placeholder="password" name="user_password"> </br>
            <?php if (isset($password_error)) { ?>
                <p class="error"><?php echo $password_error  ?></p>
            <?php } ?>
            <input class="register_button" type="submit" value="REGISTER">
        </form>
    </div>
</head>
<body>
    
</body>
</html>