<?php
header('Cache-Control: no-cache');

$login = false;
if (preg_match("/^[a-z0-9]{1,15}$/", $_POST['username']))
{
    $login = true;
    setcookie("user", $_POST['username']);
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Varnish and ESI example</title>
    <link rel="stylesheet" type="text/css" href="/design.css" />
</head>

<body>

    <div id="header">
        <h1>Varnish and ESI Example Page</h1>
    </div>
    <div id="maincontainer">
        <div class="box">
            <?php
                if ($login)
                    print "<h2>Login successful</h2>\n";
                else
                    print "<h2>Login failed - only a-z and 0-9</h2>\n";

                print "<p><a href=\"/\">Back to front page</a></p>";
            ?>
        </div>
    </div>
    </div>
    <div id="footer">
        <p>This is just a simpe test page - you can read more about it on ... - thanks to Varnish!</p>
    </div>

</body>
</html>