<?php

include 'team.php';

$teamName = $_GET['teamName'];
$ht1 = $_GET['ht1'];
$at1 = $_GET['at1'];
$ht2 = $_GET['ht2'];
$at2 = $_GET['at2'];
$ht3 = $_GET['ht3'];
$at3 = $_GET['at3'];

$homeTeam = new Team($teamName);

$homeTeam->finalScore($ht1, $at1);
$homeTeam->finalScore($ht2, $at2);
$homeTeam->finalScore($ht3, $at3);

echo "Goal Average for $teamName: " . $homeTeam->getGoalAverage();

?>
