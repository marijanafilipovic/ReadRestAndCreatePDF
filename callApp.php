<?php

/**
 * Created by PhpStorm.
 * User: Marijana
 * Date: 9/23/2017
 * Time: 6:03 PM
 */
class callApp
{
   public $appCase ='';

   public function register($appCase){
$arrContextOptions=array(
"ssl"=>array(
"verify_peer"=>false,
"verify_peer_name"=>false,
),
);
$app_choice = file_get_contents($appCase, false, stream_context_create($arrContextOptions));
$app_choice = json_decode($app_choice,true);
 //  var_dump($app_choice);
return json_encode($app_choice);
}

}
