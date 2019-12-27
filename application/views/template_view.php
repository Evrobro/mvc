<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
    <meta charset="utf-8">
    <title>Главная</title>
</head>
<body>
<?php
if ($_SESSION["auth_ok"]) {
    echo "Здарова, {$_SESSION["auth_login"]}! (<a href='/logout'>выход</a>)";
} else {
    echo "<a href='/login'>Залогинься</a> или <a href='/register'>зарегайся</a>, а то чё как лох";
}
?>
<br>
<?php include 'application/views/' . $content_view; ?>
<!--<script src="/js/jquery-1.6.2.js" type="text/javascript"></script>-->
</body>
</html>

