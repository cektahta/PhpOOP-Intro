<?php
require_once'Call.php';
class GSM
{
    private $model;
    private $hasSimCard;
    private $simMobileNumber;
    private $outgoingCallsDuration = 1;
    private $lastIncomingCall;
    private $lastOutgoingCall;
    private $sumPrice;
    private $price = 2;

    public function __construct($model) {
        $this->model = $model;
    }

    public function getModel() {
        return $this->model;
    }
    public function getSimMobileNumber() {
        return $this->simMobileNumber;
    }
    public function getOutGoingCallDuration() {
        return $this->outgoingCallsDuration;
    }
    public function getLastIncomingCall() {
        return $this->lastIncomingCall;
    }
    public function getLastOutgoingCall() {
        return $this->lastOutgoingCall;
    }

    public function setOutgoingCallsDuration ($outgoingCallsDuration) {
        $this->outgoingCallsDuration = $outgoingCallsDuration;
    }

    public function setLastIncomingCall ($value) {
        $this->lastIncomingCall = $value;
    }
    public function setLastOutgoingCall($value) {
        $this->lastOutgoingCall = $value;
    }



    function insertSimCard($simMobileNumber)
    {
        $new  = substr($simMobileNumber,0,2);
        $countz = strlen($simMobileNumber);
        if ($countz == 10 && $new == '08') {
            $this->simMobileNumber = $simMobileNumber;
            $this->hasSimCard = true;
        } else {
            echo "Not a valid number";
        }
    }
    public function removeSimCard() {
        $this->hasSimCard = false;
        $this->simMobileNumber = 0;
    }
    public function getHasSimCard() {
        return $this->hasSimCard;
    }




    public function call($receiver,$duration) {
        $calr = $this->getSimMobileNumber();
        $reve = $receiver->getSimMobileNumber();
        $calrSim = $this->getHasSimCard();
        $reveSim = $receiver->getHasSimCard();
        if (($duration < 0 || $duration > 120) || ($calr == $reve) || ($calrSim == 0 || $reveSim == 0)  ) {
            return $this->duration = 'Not a valid input';
        } else {
            $receiver->setLastIncomingCall("Last incoming call duration was: $duration");
            $this->setLastOutgoingCall("Last outgoing call duration was : $duration");
            $this->outgoingCallsDuration += $duration;
            echo "Please, answer it's emergent!";

        }

    }
    public function getSumForAll() {
        echo $this->sumPrice = $this->getOutGoingCallDuration() * $this->price.' '.'Leva';
    }
}