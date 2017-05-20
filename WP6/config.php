<?php
/**
 * Created by PhpStorm.
 * User: 11302521
 * Date: 17/05/2017
 * Time: 15:10
 */

$str = file_get_contents("config.json");
$json = json_decode($str);

echo $json->database->host;

/*$con = mysqli_connect("127.0.0.1", "root", "root","php");
if (mysqli_connect_errno())
{
    echo "Failed to connect to the database: ".$json->database->dbname. mysqli_connect_error()."\n";
}
else
{
    echo "connected to database ".$json->database->dbname."\n";
}
exit("done");*/



