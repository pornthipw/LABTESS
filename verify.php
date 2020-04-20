<?php
  $access_token = 'i+Itl8bVO5Aklntbzz4S/YhlfsQmkQcBRt5xQDQ3jwDjQyLTx2NrcucvETLLioS++vG50MT01BZmVvc1tLp0Lr+iyiIAiL0eHr2q5y/pTs/35gEjr2OTr14t+V31M/pdHjgCfjLyCPuH0dxtIdfxwgdB04t89/1O/w1cDnyilFU=';
  $url = 'https://api.line.me/v1/oauth/verify';
  $headers = array('Authorization: Bearer ' . $access_token);
  $ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  $result = curl_exec($ch);curl_close($ch);
  echo $result;

?>
