<?php
/**
 * Created by PhpStorm.
 * User: Marijana
 * Date: 9/21/2017
 * Time: 8:43 PM
 * Recived  value are written in text file with current timestamp
 * U tekst fajl na sisetmu je upisije vrednost i timestamp
 */

/*
    $file= 'log.txt';
    $handle = fopen("log.txt", "r+");
    $content = $cache;
    $content .= " ";
    $content .= NOW();
    fwrite($handle,$content);
    fclose($handle);
*/
$time= date('Y-m-d H:i:s');

$myfile = fopen("LogFile.txt", "a") or die("Unable to open file!");
$txt = "LogFile has been updated.";

fwrite($myfile, $txt);
$txt = "value = 0\n";
$txt .= $time."\n";
//$txt .= NOW();
fwrite($myfile, $txt);
fclose($myfile);
