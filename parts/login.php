<?php
$age = 60;
$now = mktime();
header('Cache-Control: max-age='.$age.', must-revalidate');
?>
<div class="box">
    <h2>Login</h2>
    <?php

        if (isset($_COOKIE['user']))
        {
            ?>
            <p>Logged in as: <?php print $_COOKIE['user']; ?><br />
                <a href="/action_logout.php">Log out</a></p>
            <?php
        }
        else
        {
            ?>
            <form method="post" action="/action_login.php">
                <input type="text" name="username" size="15" maxlength="15" /> 
                <input type="submit" value="Log in" />
            </form>
            <p>Allowed chars: a-z and 0-9</p>
            <?php
        }
    ?>
    <div class="lastupdate">
        created <?php print date("d.m.Y H:i:s", $now);?><br />
        expire <?php print date("d.m.Y H:i:s", $now+$age);?><br />
        age <?php print $age.' seconds'?> - 
        <a href="http://github.com/bitmand/esi/blob/master/parts/login.php">source</a>
    </div>
</div>