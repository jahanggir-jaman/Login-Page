<?php 
//allow the config
define('__CONFIG__',true);
//require the config once
require_once "C:\\xampp\htdocs\udemy\inc\config.php" 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documents</title>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.17/css/uikit.min.css" />
</head>
<body>
    <div class="uk-section uk-container">
    <?php echo date('dS-M-Y') ?>
    <p>
    <a href="/login.php">Login</a>
    <a href="/register.php">Register</a>
    </p>
    </div>

<?php 
define('__FOOTER__',true);
require_once('footer.php') ?>
</body>
</html>