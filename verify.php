<?php
  $access_token = '1sl/gWiXKwvpafqBDkv83ttkJM7mnDQpqf5EmyyRy8Ir71LQZ/UjXKsAHNR1Js/J+vG50MT01BZmVvc1tLp0Lr+iyiIAiL0eHr2q5y/pTs/gSn/Mvmc11JXnsLikDwAMiIbX+Z8T8lswfBvAF3VQaAdB04t89/1O/w1cDnyilFU=';
  $url = 'https://api.line.me/v1/oauth/verify';
  $headers = array('Authorization: Bearer ' . $access_token);
  $ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  $result = curl_exec($ch);curl_close($ch);
  echo $result;

?>
