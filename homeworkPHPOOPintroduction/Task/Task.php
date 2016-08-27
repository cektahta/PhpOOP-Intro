<?php





namespace Task;

class Task
{
    private $name;
    private $hoursLeft;

    public function __construct($name,$hoursLeft)
    {
        if (is_string($name) && is_numeric($hoursLeft)){
            $this->name = $name;
            $this->hoursLeft=$hoursLeft;

        } else {
        echo "You must enter  valid attributes!";
    }

    }
    public function setTaskHour($value) {
        $this->hoursLeft = $value;
    }
    public function getName(){
        return $this->name;
    }
    public function getHoursLeft(){
        return $this->hoursLeft;
    }
}