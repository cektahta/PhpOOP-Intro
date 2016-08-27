<?php
require_once('Computer.php');

$computer1 = new Computer(2005,'1500$','Yes','500Gb','200GB','Windows');
$computer2 = new Computer(2010,'2000$','No','1000Gb','500GB','Linux');

$computer1->changeOperationSystem('NewOS');
$computer2->useMemory(400);

$str1 = $computer1->getInfo();
$str2 = $computer2->getInfo();

echo "Computer1 info: .$str1".PHP_EOL;
echo "Computer2 info: .$str2".PHP_EOL;
