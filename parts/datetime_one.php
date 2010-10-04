<?php
$age = rand(10,30);
$now = mktime();
header('Cache-Control: max-age='.$age.', must-revalidate');
?>
<div class="box">
    <p>Cached for <?php print $age; ?> seconds.</p>
    <div class="lastupdate">
        created <?php print date("d.m.Y H:i:s", $now);?><br />
        expire <?php print date("d.m.Y H:i:s", $now+$age);?><br />
        age <?php print $age.' seconds'?> - 
        <a href="http://github.com/bitmand/esi/blob/master/parts/datetime_one.php">source</a>
    </div>
</div>