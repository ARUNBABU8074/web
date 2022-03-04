<?php
$n=10;
$s=0;
$fs=0;
$ds=0;
$l=1;
while($l<=$n)
{
$s=$s+$l;
$l++;
}
for($i=1;$i<=$n;$i++)
{
$fs=$fs+$i;
}
do{
$ds=$ds+$l-1;
$l--;
}while($l>0);
echo " sum of first 10 natural numbers using while = ".$s."<br>";
echo " sum of first 10 natural numbers using do while = ".$ds."<br>";
echo " sum of first 10 natural numbers using for = ".$fs;
?>
