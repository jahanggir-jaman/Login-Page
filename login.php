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

    <div class="uk-grid uk-child-width-1-3@s uk-child-1-1" uk-grid>
        <form class="uk-form-stacked js-login">
            <h2>Login</h2>
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Email</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text" type="email" required="required" placeholder="john@example.com">
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Password</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-text" type="password" required="required" placeholder="********">
                </div>
            </div>
            <div class="uk-margin">
                <button class="uk-button uk button-default" type="submit">
                Register
                </button>
            </div>
        </form>
    </div>
    </div>
<?php 
define('__FOOTER__',true);
require_once('inc/footer.php') ?>
</body>
</html>