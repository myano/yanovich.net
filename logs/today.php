<?php

$path = '.';

$dir_handle = @opendir($path) or die("Unable to open $path");

$filearray = array();

while ($file = readdir($dir_handle))
{
    if (strpos($file, "txt") !== false)
    {
        $filearray[] = $file;
    }
}

rsort($filearray);

$latest = $filearray[0];

$latest_title = substr_replace($latest, '', -4, 4);

echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\" />
        <title>#osu_osc Logs -- $latest_title</title>
        <meta http-equiv=\"REFRESH\" content=\"0; url=$latest_title\">
        <meta name=\"robots\" content=\"noindex\">
    </head>
    <body>
        You are being re-directed to <a href=\"$latest_title\">$latest_title</a>
    </body>
</html>";

?>
