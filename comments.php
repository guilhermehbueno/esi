<?php
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
?>
<div class="box">
    <p>..fetch last 5 comments..</p>
    <div class="lastupdate">[ <?php print date("d.m.Y H:i:s", mktime());?> ]</div>
</div>