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
        <div id="column2" class="widecolumn">
            <esi:include src="/description.php"/>
        </div>
        <div id="column3" class="column">
            <esi:include src="/login.php?UUID"/>
            <esi:include src="/comments_form.php"/>
            <esi:include src="/comments.php"/>
        </div>
    </div>
    <div id="footer">
        <p>This is just a simpe test page - you can read more about it on ... - thanks to Varnish!</p>
    </div>
    <div class="lastupdate">
        created <?php print date("d.m.Y H:i:s", $now);?> 
        expire <?php print date("d.m.Y H:i:s", $now+$age);?> 
        age <?php print $age.' seconds'?> - 
        <a href="http://github.com/bitmand/esi/blob/master/index.php">source</a>
    </div>

</body>
