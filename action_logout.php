<?php
header('Cache-Control: no-cache');

setcookie("user", false);
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
            <h2>Logged out</h2>
            <p><a href="/">Back to front page</a></p>
        </div>
    </div>
    </div>
    <div id="footer">
        <p>This is just a simpe test page - you can read more about it on ... - thanks to Varnish!</p>
    </div>

</body>
</html>