


<?php
$str = "aBcE fGHij";     
$result=preg_match_all("/[a-z]([a-z])[a-z]([a-z])[a-z]/i",$str,$matches,PREG_SET_ORDER);
echo "PREG_SET_ORDER: $result <br>";                          
print_r($matches);
echo "<br>";  
$result=preg_match_all('/[a-z]([a-z])[a-z]([a-z])[a-z]/i',$str,$matches,PREG_PATTERN_ORDER);
echo "PREG_PATTERN_ORDER: $result <br>";                          
print_r($matches);
?>