<?php
$names=array("arun"=>95,"manu"=>65,"vinu"=>87);
print_r($names);
echo '<br>';
echo 'weight of manu is '.$names['manu'].'<br>';
asort($names);
print_r($names);
echo '<br>';
arsort($names);
print_r($names);
?>
