<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: antiquewhite">
<form action="/login/personal" method="post">
    <div style="display: flex;justify-content: center;flex-direction: column ; align-items: center;margin-top: 350px;">
        <input type="email" name="ml" placeholder="mail" style="padding: 5px; margin: 15px;">
        <input type="password" name="pswrd" placeholder="password" style="padding: 5px;margin: 15px;">
        <input type="submit" style="margin: 15px;">
    </div>
    <div class="error" style="display: flex;justify-content: center;">
        <?php
        print $data;
        ?>
    </div>
</form>
</body>
</html>
<?php
