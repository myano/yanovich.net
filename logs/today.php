<?php

$path = '.';

$dir_handle = @opendir($path) or die("Unable to open $path");

$filearray = array();

//running the while loop
while ($file = readdir($dir_handle))
{
    $filearray[] = $file;
}

rsort($filearray);

$today = count($filearray) - 1;

$latest = $filearray[4];

/*
$i=1;
while($i<=$today)
{
    echo $filearray[$i];
    echo "<br>";
    $i = $i + 1;
}
 */

$latest_title = substr_replace($latest, '', -4, 4);
//$latest_url = substr_replace($latest, '', -1, 1);
echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\" />
        <title>#osu_osc Logs -- $latest_title</title>
        <meta http-equiv=\"REFRESH\" content=\"0; url=$latest_title\">
    </head>
    <body>
        You are being re-directed to <a href=\"https://yanovich.net/\">https://yanovich.net/</a>
    </body>
</html>";

?>
