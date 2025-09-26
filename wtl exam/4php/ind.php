<?php
header("Content-Type : application/json");
// $rawData = file_get_contents('php://input');
$rawdata = ["name1" => "atharva" , "colour1" => "red"];
// $data = json_decode($rawdata, true); // [ "name1" => "xyc" , "colour1" => "red"];
echo json_encode($rawdata); // sending data to fornted
?>