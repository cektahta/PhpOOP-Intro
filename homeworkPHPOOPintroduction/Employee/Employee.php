<?php



namespace Employee;
use Task\Task;


class Employee
{
    private $name;
    private $currentTask;
    private $hourRemaining;

    public function __construct($name)
    {
        if (is_string($name)){
            $this->name = $name;
        } else {
            echo "You must enter a valid name!";
        }
    }

    //GETTERS
    public function getName(){

        return $this->name;
    }
    public function getCurrentTask(){
        return $this->currentTask;
    }

    public function getHoursRemaining()
    {

        return $this->hourRemaining;
    }
    //SETTERS
    public function setCurrentTask($currentTask)
    {
        $this->currentTask = $currentTask;
    }

    public function setHoursRemaining($value)
    {
        if (is_numeric($value)) {
            $this->hourRemaining = $value;
        } else {
            echo "You must enter a valid numeric input and the input must be greater than 0!!!";
        }

    }
    //METHODS

    public function work(){
        $hoursWorker =$this->getHoursRemaining();
        $hoursTask = $this->currentTask->getHoursLeft();
        if ($hoursWorker < $hoursTask) {
            $hoursTask = $hoursTask - $hoursWorker;
            $this->currentTask->setTaskHour($hoursTask);
            $this->setHoursRemaining(0);

        } else if ($hoursWorker > $hoursTask) {
            $hoursWorker = $hoursWorker - $hoursTask;
            $this->setHoursRemaining($hoursWorker);
            $this->getCurrentTask()->setTaskHour(0);

        } else {
            $this->setHoursRemaining(0);
            $this->getCurrentTask()->setTaskHour(0);
        }
    }
    public function showReport() {
        echo 'Name: '.$this->getName().'   '.'Task name: '.$this->currentTask->getName()
        .'  '.'Task hours left: '.$this->currentTask->getHoursLeft().'  '.'Worker hours left: '.$this->getHoursRemaining();
    }


}