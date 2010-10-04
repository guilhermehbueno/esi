<?php
$age = 3600;
$now = mktime();
header('Cache-Control: max-age='.$age.', must-revalidate');
?>
<div class="box">
    <h2>Comments</h2>
    <p>Feel free to say something. Only allowed characters is a-z, 0-9 and spaces - and max. 200 chars.</p>
    <form method="post" action="/comment_add.php">
        <input type="textarea"></textarea><br />
        <input type="submit" value="Send" />
    </form>
    <div class="lastupdate">
        created <?php print date("d.m.Y H:i:s", $now);?><br />
        expire <?php print date("d.m.Y H:i:s", $now+$age);?><br />
        age <?php print $age.' seconds'?> - 
        <a href="http://github.com/bitmand/esi/blob/master/parts/comments_form.php">source</a>
    </div>
</div>
