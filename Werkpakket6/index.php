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

foreach($json['DB'] as $employee){

    $output.="Connection : ".$klant['id']."<br />";
    $output.="Host : ".$klant['name']."<br />";
    $output.="Port : ".$klant['email']."<br />";
    $output.="Database : ".$klant['postcode']."<br />";
    $output.="Username : ".$klant['postcode']."<br />";
    $output.="Password : ".$klant['postcode']."<br />";
    $output.="<br/>";
}
echo $output;

?>