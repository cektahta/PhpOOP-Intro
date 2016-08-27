<?php
require_once 'autoload.php';
use Task\Task;
use Employee\Employee;
$vork = new Task('kopane',2);


$employee = new Employee('Ivan');
$employee->setCurrentTask($vork);
$employee->setHoursRemaining(2);
$employee->work();
echo $employee->showReport();




