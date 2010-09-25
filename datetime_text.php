<?php
$age = 900;
$now = mktime();
header('Cache-Control: max-age='.$age.', must-revalidate');
?>
<div class="box">
    <h2>Date & Time</h2>
    <p>These 3 containers link to 3 different pages with exactly the same code. They are just named differently to make varnish cache them as seperate files.</p>
    <p>Because they are cached, you can see when they were initially created/refreshed by the backend and for how long time.</p>
    <div class="lastupdate">
        created <?php print date("d.m.Y H:i:s", $now);?><br />
        expire <?php print date("d.m.Y H:i:s", $now+$age);?><br />
        age <?php print $age.' seconds'?> - 
        <a href="http://nocache.esi.bitmand.com/datetime_text.phps">source</a>
    </div>
</div>