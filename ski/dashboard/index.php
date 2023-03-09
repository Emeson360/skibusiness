<?php
include_once __DIR__ .'/../includes/database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>
    <?php if(isset($_SESSION['signin-success'])): ?>
        <div style="background-color: #cfc; border-radius: 10px; margin-bottom: 10px;">
            <p style="color: green; text-align: center; padding: 10px;"><b>
                <?= $_SESSION['signin-success'];
                    unset($_SESSION['signin-success']);
                ?></b>
            </p>
        </div>
    <?php endif ?>
    
</body>
</html>