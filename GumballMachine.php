<?php


class GumballMachine {

    private $gumballs;

    //Gets the current number of gumballs in the machine
    public function getGumballs(){

        return $this->gumballs;

    }

    //Sets the number of gumballs in the machine
    public function setGumballs($amount) {

        $this->gumballs = $amount;

    }

    //User turns the wheel and  machine dispenses the gumball
    public function turnWheel() {

        $this->setGumballs($this->getGumballs() - 1);
    }

}