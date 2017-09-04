<?php

$a = "snake";
$b = "registration";
$c = "website";
$d = "computer";
$e = "quality";
$f = "keyboard";

$arr = array($a, $b, $c, $d, $e);
$random_keys=array_rand($arr, 1);

echo "$arr[$random_keys]";