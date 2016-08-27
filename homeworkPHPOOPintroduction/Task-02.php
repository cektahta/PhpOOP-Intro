<?php
require_once('Call.php');
require_once('GSM.php');

$phoneOne = new GSM('iPhone');
$phoneTwo = new GSM('Samsung');

$phoneOne->insertSimCard('0885111111');
$phoneTwo->insertSimCard('0883222222');

//echo $phoneOne->getSimMobileNumber();
//echo $phoneTwo->getSimMobileNumber();
//echo $phoneOne->getHasSimCard();

$call = new Call($phoneTwo,$phoneTwo,20);
echo $phoneOne->call($phoneTwo,$call->getDuration());
echo $phoneOne->getSumForAll();













