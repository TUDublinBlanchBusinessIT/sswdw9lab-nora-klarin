<?php

include 'team.php';
$team = new Team("Test Team");

$team->finalScore(3, 1); 
$team->finalScore(2, 2); 
$team->finalScore(1, 0); 

echo "Expected Goal Average: 2<br>";
echo "Calculated Goal Average: " . $team->getGoalAverage();

?>
