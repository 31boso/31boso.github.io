﻿<?php
 header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
 header('Access-Control-Allow-Credentials: true');
 header('Access-Control-Max-Age: 86400');
"<br />"    $ip= $_SERVER['REMOTE_ADDR'];
echo $ip;
?>