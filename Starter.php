<?php

/**
 * Created by PhpStorm.
 * User: Marijana
 * Date: 9/23/2017
 * Time: 4:06 PM
 */

require_once 'primeCase.php';
require_once 'callApp.php';
class Starter
{

    public $app_choice = [];
    public  $appCase=' ';
    public function __construct(){
        $appCase='http://r.viselio.com/api/v1/testTrigger';
        $appV  = new callApp;
        $app = $appV->register($appCase);
        if($app  == 0 )
        {
           $firstCase = new primeCase();
           $firstCase::register();
              echo "Prvi slucaj azuriranja LogFile.txt.";
        }elseif($app == 1)
        {
            include_once 'table.php';

        }
        else
        {
echo 'Service is out of reach.';
        }
    }

}
