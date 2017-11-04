<?php
/**
 * Created by PhpStorm.
 * User: Marijana
 * Date: 9/21/2017
 * Time: 7:41 PM
 * http://{Your Website}/api.php?action=get_app&id=
 *
 */

$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
$app_choice = file_get_contents('http://r.viselio.com/api/v1/testTrigger', false, stream_context_create($arrContextOptions));
     $app_choice = json_decode($app_choice, true);
if($app_choice == 0 )
{

echo "U tekst fajl na sisetmu je upisije vrednost i timestamp";
}else if($app_choice == 1)
{
echo "Poziva se drugi api i podaci se ucitavaju u jqurey tabelu, ta strana da se eksportuje u pdf i dugme za dawnload. ";
}else{

   echo "Service is out of reach at momment, please try later.";
}


    ?>
    <table>
        <tr>
            <td>App Name: </td><td> <?php // echo $app_info["app_name"] ?></td>
        </tr>
        <tr>
            <td>Price: </td><td> <?php //echo $app_info["app_price"] ?></td>
        </tr>
        <tr>
            <td>Version: </td><td> <?php //echo $app_info["app_version"] ?></td>
        </tr>
    </table>
    <br />
    <?php /*
}
else // else take the app list
{
    $app_list = file_get_contents('http://{Your Website}/api.php?action=get_app_list');
    $app_list = json_decode($app_list, true);
    */?>
