<?php

require "../connection.php";

$project = $_GET['project'];
$targetDate = $_GET['targetDate'];
$targetTime = $_GET['targetTime'];

$sqlSelect = "SELECT `description` FROM `work` WHERE `FID_Projects` = :id and `date` < :date or `FID_Projects` = :id and `date` = :date and `time_end` < :time";

$sth = $dbh->prepare($sqlSelect, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$sth->execute(array(':id' => $project, ':date' => $targetDate, ':time' => $targetTime));

echo "<table><tr><th></th><th>Выполненная работа</th></tr>";
foreach ($sth as $index => $row) {
    echo "<tr><td>".++$index.".</td><td>".$row['description']."</td></tr>";
}
echo "</table>";