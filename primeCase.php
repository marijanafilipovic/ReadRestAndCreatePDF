<?php

/**
 * Created by PhpStorm.
 * User: Marijana
 * Date: 9/23/2017
 * Time: 4:10 PM
 */
class primeCase
{
    public static function register()
    {
        $time = date('Y-m-d H:i:s');
        $myfile = fopen("LogFile.txt", "a") or die("Unable to open file!");
        $txt = "LogFile has been updated.";
        fwrite($myfile, $txt);
        $txt = "value = 0\n";
        $txt .= $time . "\n";
        fwrite($myfile, $txt);
        fclose($myfile);
    }
}