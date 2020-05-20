<?php
require "../connection.php";
header('Content-Type: application/json');  // <-- header declaration
$leader = $_GET['leader'];



$cursor = $db->tasks->distinct('workers',['leader'=>$leader]);


echo json_encode($cursor);