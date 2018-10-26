<?php

function h($s){
   return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

function goHome(){
  header('Location: https://' . $_SERVER['HTTP_HOST'] . '/twitter_connect/');
  exit;
}
