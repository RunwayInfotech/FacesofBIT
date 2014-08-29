<?php
// Calculate the expected % outcome
function expected($Rb, $Ra) {
 return 1/(1 + pow(10, ($Rb-$Ra)/400));
}
// Calculate the new winnner score
function win($score, $expected, $k = 24) {
 return $score + $k * (1-$expected);
}
// Calculate the new loser score
function loss($score, $expected, $k = 24) {
 return $score + $k * (0-$expected);
}
/*function pop($images[0]->wins,$images[0]->losses) {
	return ($images[0]->wins/$images[0]->wins+$images[0]->losses)*100;	
}
function pop1($images[1]->wins,$images[1]->losses) {
	return ($images[1]->wins/$images[1]->wins+$images[1]->losses)*100;	
} */
?>