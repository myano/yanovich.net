<?php
$page_title = "OSU Ruleset for HTTPS Everywhere";
$meta = "yanovich";


$content = <<<EOD

Here is a <a href="https://www.eff.org/https-everywhere">HTTPS Everywhere</a> ruleset for <a href="https://opensource.osu.edu/">The Ohio State University's Open Source Club</a> website.

<pre>
&lt;ruleset name="opensource.osu.edu"&gt;
  &lt;target host="opensource.osu.edu" /&gt;
  &lt;target hot="www.opensource.osu.edu" /&gt;

  &lt;securecookie host="^.*\.osu\.edu$" name=".*" /&gt;

  &lt;rule from="^http://(www\.)?opensource\.osu\.edu/" to="https://opensource.osu.edu/" /&gt;
&lt;/ruleset&gt;
</pre>

EOD;

include("template.php");
?>
