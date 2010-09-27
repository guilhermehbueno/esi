<?php
$age = 3600;
$now = mktime();
header('Cache-Control: max-age='.$age.', must-revalidate');
?>
<div class="box">
    <h2>Explanation</h2>
    <p>...</p>
    <div class="lastupdate">
        created <?php print date("d.m.Y H:i:s", $now);?><br />
        expire <?php print date("d.m.Y H:i:s", $now+$age);?><br />
        age <?php print $age.' seconds'?> - 
        <a href="http://github.com/bitmand/esi/blob/master/explanation.php">source</a>
    </div>
</div>