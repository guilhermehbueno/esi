<?php
$age = 2;
$now = mktime();
header('Cache-Control: max-age='.$age.', must-revalidate');
?>
<div class="box">
    <h2>What is this?!</h2>
    <p>This is a simple example on how to create very fast websites (stats at bottom of page) using regular apache/php as backend and <a href="http://www.varnish-cache.org/">Varnish</a> and <a href="http://www.varnish-cache.org/trac/wiki/ESIfeatures">Edge Side Includes</a> (ESI) as a frontend.</p>
    <p>It is a very simple idea, make small independent elements in the backend and let Varnish glue stuff together before sending it to the user. There are several advantages to doing this, for once, Varnish is extremely fast and used correctly it can speed up your website and take the load of Apache/PHP.</p>
    <p>Secondly, it's much easier to spot what going on in the backend. Consider your website being slow, and you can see a lot of hits to a specific page, but traditionally a page is build by letting php glue every element on a page together and it can be some task to figure out which of the 40 sql queries you are running is slowing everything down.</p>
    <h3>This page looks confusing!</h3>
    <p>Admitted, it's not pretty. The grey text in the bottom of each element displays information about when the element was create/requested, when it will expire and for how long it is cached in varnish. Also, there is a link to the source of that element.</p>
    <p>I would recommend you start by looking at the <a href="http://github.com/bitmand/esi/blob/master/index.php">source for the main page</a>. As you can see, its just a very simple HTML page with some ESI include tags. When Varnish receives this page from the backend, it will find the ESI tags, make a request and replace the tag with the content it receives from the backend.</p>
    <p>The result is sent to your browser. Have a look at the source in your browser, no ESI tags, just a regular html page.</p>
    <p>The trick here, is that each element can be cached differently, so Varnish will only ask the backend when needed. Think about it, why have a php page to go through thousands lines of code each and every time to build a html page that is exactly the same every time.</p>
    <h3>Headers</h3>
    <p>..</p>
    <h3>Clear cache on demand</h3>
    <p>..</p>
    <h3>Varnish configuration</h3>
    <p>..</p>
    <h3>Performance Statistics</h3>
    <p>..</p>
    <div class="lastupdate">
        created <?php print date("d.m.Y H:i:s", $now);?> - 
        age <?php print $age.' seconds'?><br />
        expire <?php print date("d.m.Y H:i:s", $now+$age);?> - 
        <a href="http://github.com/bitmand/esi/blob/master/description.php">source</a>
    </div>
</div>