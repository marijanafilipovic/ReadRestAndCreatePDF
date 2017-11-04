<?php

require_once 'callApp.php';

class secondCase extends callApp {
public $appCase='http://r.viselio.com/api/v1/testJson';
public $app_choice= [];

   public function getData(){
        $app = new callApp();
        $app_choice = $app::register('http://r.viselio.com/api/v1/testJson');
        $app_choice = json_decode($app_choice,true);

        return $app_choice;
    }
}