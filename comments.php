<?php
$age = 60;
$now = mktime();
header('Cache-Control: max-age='.$age.', must-revalidate');
?>
<div class="box">
    <p>TODO: fetch last 5 comments.</p>
    <div class="lastupdate">
        created <?php print date("d.m.Y H:i:s", $now);?><br />
        expire <?php print date("d.m.Y H:i:s", $now+$age);?><br />
        age <?php print $age.' seconds'?> - 
        <a href="http://github.com/bitmand/esi/blob/master/comments.php">source</a>
    </div>
</div>