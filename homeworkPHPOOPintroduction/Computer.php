<?php

class Computer
{
    private $year;
    private $price;
    private $isNotebook;
    private $hardDiskMemory;
    private $freeMemory;
    private $operationSystem;

    private $newOperationSystem;
    private $memory;

    public function __construct($year,$price,$isNotebook,$hardDiskMemory,$freeMemory,$operationSystem)
    {
        $this->year = $year;
        $this->price = $price;
        $this->isNotebook = $isNotebook;
        $this->hardDiskMemory = $hardDiskMemory;
        $this->freeMemory = $freeMemory;
        $this->operationSystem = $operationSystem;
    }


    public function getYear(){
        return $this->year;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getIsNotebook(){
        return $this->isNotebook;
    }
    public function getHardDiskMemory(){
        return $this->hardDiskMemory;
    }
    public function getFreeMemory(){
        return $this->freeMemory;
    }
    public function getOperationSystem(){
        return $this->operationSystem;
    }

    public function getMemory(){
        return $this->memory;
    }


    public function changeOperationSystem($newOperationSystem)
    {
        $this->operationSystem = $newOperationSystem;
    }
    public function getInfo() {
        return 'Year of proction:'.$this->getYear()
        .', '.'Price:'.$this->getPrice()
        .', '.'Is computer Notebook:'.$this->getIsNotebook()
        .', '.'Hard disk memory:'.$this->getHardDiskMemory()
        .', '.'Free memory:'.$this->getFreeMemory()
        .', '.'Operation system:'.$this->getOperationSystem();

    }


    public function useMemory($memory)
    {
        $this->freeMemory -= $memory;
    }
}