<?php

require "classes/classes.php";
class Setup
{
    public $bees = [];
    public function addBee($className, $total)
    {
        for ($i = 0; $i < $total; $i++) {
            $this->bees[] = new $className();
        }
    }
    public function random()
    {
        return $this->bees[array_rand($this->bees, 1)];
    }
    public function getTotal()
    {
        return $this->bees;
    }
    public function killAll()
    {
            foreach ($this->bees as $key => $bee) {
                $bee->kill();
            }
    }

}
