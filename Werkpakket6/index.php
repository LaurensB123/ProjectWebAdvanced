<?php
/**
 * Created by PhpStorm.
 * User: Hannah Patronoudis
 * Date: 17/05/2017
 * Time: 15:39
 */

$jsonData = file_get_contents("DB.json");
$json = json_decode($jsonData, true);

echo '<h1>Data</h1>';

$output="";

foreach($json['DB'] as $config){

    $output.="DB_CONNECTION=".$config['CONNECTION']."<br />";
    $output.="DB_HOST=".$config['HOST']."<br />";
    $output.="DB_PORT=".$config['PORT']."<br />";
    $output.="DB_DATABASE=".$config['DATABASE']."<br />";
    $output.="DB_USERNAME=".$config['USERNAME']."<br />";
    $output.="DB_PASSWORD=".$config['PASSWORD']."<br />";
    $output.="<br/>";
}
echo $output;
