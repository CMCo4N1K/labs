<?php
require "../connection.php";
$leader = $_GET['leader'];



$cursor = $db->tasks->find([
	'leader'	=>	$leader
]);
$tasks = iterator_to_array($cursor);



echo count($tasks);