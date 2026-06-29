<?php
$Score = 85;


$result = ($Score >= 80) ? "Excellent" : 
(($Score >= 50) ? "Pass" : "Fail");
 
echo "Your score is: " . $Score . " . <br/>" . $result;
?>