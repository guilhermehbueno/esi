<?php
$age = 3600;
$now = mktime();
header('Cache-Control: max-age='.$age.', must-revalidate');
?>
<div class="box">
    <h2>Code</h2>
    <p>...</p>
    <div class="lastupdate">
        created <?php print date("d.m.Y H:i:s", $now);?><br />
        expire <?php print date("d.m.Y H:i:s", $now+$age);?><br />
        age <?php print $age.' seconds'?> - 
        <a href="http://nocache.esi.bitmand.com/code.phps">source</a>
    </div>
</div>