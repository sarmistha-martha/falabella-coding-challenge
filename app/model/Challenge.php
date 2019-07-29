<?php
namespace Model;

class Challenge
{
    public $remainder3;
    public $remainder5;
    public $remainder15;
    public $number;
    public $result;

    public function getRemainder($number, $param) {
        return $number % $param;
    }

    public function execute() {
    	$this->result = Array();
        for($i =1; $i <=100;$i++)
        {
            $this->number = $i;
            $this->remainder3  = $this->getRemainder($i,3);
            $this->remainder5  = $this->getRemainder($i,5);
            $this->remainder15 = $this->getRemainder($i,15);
            $this->result[] = $this->writeOutput($this);
        }
        return $this->result;
    }

    public function writeOutput($result) {
    	$printval = "";
        switch ($result) {
            case ($result->remainder15 == 0 ):
                $printval = "Linianos";
                break;
            case ($result->remainder5 == 0):
                $printval = "IT";
                break;
            case ($result->remainder3==0):
                $printval = "Linio";
                break;
            default:
                $printval = $result->number;
        }
        return $printval;
    }
}
