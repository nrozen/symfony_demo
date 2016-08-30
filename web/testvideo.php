<?php

$output_filename = "testmp3.mp3";

$host = "https://p.scdn.co/mp3-preview/b876c1f84d79ce148d825df8830a10144a11209e";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $host);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_AUTOREFERER, false);
curl_setopt($ch, CURLOPT_REFERER, "http://www.xcontest.org");
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
curl_setopt($ch, CURLOPT_HEADER, 0);
$result = curl_exec($ch);
curl_close($ch);


// the following lines write the contents to a file in the same directory (provided permissions etc)
$fp = fopen($output_filename, 'w');
fwrite($fp, $result);
fclose($fp);

echo exec('whoami');

$cmd = "ffmpeg -framerate 5  -loop 1 -i \"img%04d.png\" -c:v libx264 -s 1080x810 -preset veryfast -crf 28 -r 25 -pix_fmt yuv420p -t 00:0:30 out3.mp4";

echo exec($cmd);


$cmd  = "ffmpeg -i out4.mp4 -i test.mp3 -codec copy -shortest out5.mp4";


echo exec($cmd);