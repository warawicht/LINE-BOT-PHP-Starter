<?php
$access_token = 'xNXCvutylzfVmnaEeDneB8naWZ2PEN4E/RJpPB38PshFC2+aHtsYq+aphDLX7O0VLD7firk6OJgUDvu/FmmUaEdmtgVBTteeeXMxYn99qwOvLptlGyAbBQWXNu4jZ9J5HlRLNeKgSwHKA0Z2avrRHQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;