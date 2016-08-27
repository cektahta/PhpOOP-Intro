<?php
require_once'GSM.php';


class Call
{
private $priceForAMinute;
private $caller;
private $receiver;
private $duration;

    public function __construct($caller, $receiver, $duration) {
        $this->caller = $caller;
        $this->receiver = $receiver;
        $this->duration = $duration;
}

    public function getPriceForAMinute() {
        return $this->priceForAMinute;
}
    public function getCaller() {
        return $this->caller;
    }
    public function getReceiver() {
        return $this->receiver;
    }
    public function getDuration() {
        return $this->duration;
    }


    public function setPriceForAMinute($value) {
        $this->priceForAMinute = $value;
    }
    public function setCaller($caller) {
        $this->caller = $caller;
    }
    public function setReceiver($receiver) {
        return $this->receiver = $receiver;
    }
    public function setDuration($value) {
        return $this->duration = $value;
    }






}
