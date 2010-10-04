<?php
header('Cache-Control: no-cache');

if (preg_match("/^[a-z][0-9]+", $_POST['username']))
    if (sizeof($_POST['username']) <= 15 )
        setcookie("user", $_POST['username']);

header("Location: /");

?>