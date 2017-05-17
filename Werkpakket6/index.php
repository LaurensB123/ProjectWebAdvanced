<?php
/**
 * Created by PhpStorm.
 * User: Hannah Patronoudis
 * Date: 17/05/2017
 * Time: 15:39
 */

$jsonData = file_get_contents("klant.json");
$json = json_decode($jsonData, true);

echo '<h1>Klanten data</h1>';

foreach($json['employee'] as $employee){

    $output="ID : ".$klant['id']."<br />";
    $output="Naam : ".$klant['name']."<br />";
    $output="Email : ".$klant['email']."<br />";
    $output="Postcpde : ".$klant['postcode']."<br />";

}

?>