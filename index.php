<?php
$age = 1800;
$now = mktime();
header('Cache-Control: max-age='.$age.', must-revalidate');
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
        <div id="information">
            <h1>Building blazingly fast dynamic<br />websites using Varnish and ESI</h1>
        </div>
        <div id="column1" class="column">
            <esi:include src="/datetime_text.php"/>
            <esi:include src="/datetime_one.php"/>
            <esi:include src="/datetime_two.php"/>
            <esi:include src="/datetime_three.php"/>
        </div>
        <div id="column2" class="column">
            <esi:include src="/explanation.php"/>
        </div>
        <div id="column3" class="column">
            <esi:include src="/code.php"/>
        </div>
        <div id="column4" class="column">
            <div class="box">
                <h2>Comments</h2>
                <p>Feel free to say something. Only allowed characters is a-z, 0-9 and spaces - and max. 200 chars.</p>
                <form method="post" action="/comment_add.php">
                    <input type="textarea"></textarea><br />
                    <input type="submit" value="Send" />
                </form>
            </div>
            <esi:include src="/comments.php"/>
            <div class="box">
                <h2>Cacheable but..</h2>
                <p>..a comment section needs to be updated on demand.</p>
                <p>Explanation...</p>
            </div>
        </div>
    </div>
    <div id="footer">
        <p>This is just a simpe test page - you can read more about it on ... - thanks to Varnish!</p>
    </div>
    <div class="lastupdate">
        created <?php print date("d.m.Y H:i:s", $now);?> 
        expire <?php print date("d.m.Y H:i:s", $now+$age);?> 
        age <?php print $age.' seconds'?> - 
        <a href="http://nocache.esi.bitmand.com/explanation.phps">source</a>
    </div>

</body>
