<?php
include "Setup.php";


class Game
{
    public $setup;
    public $log;
    public $isGameOver = false;
    public function __construct(){
        $this->setup = new Setup();
        $this->setup->addBee("QueenBee", 1);
        $this->setup->addBee("WorkerBee", 5);
        $this->setup->addBee("DroneBee", 8);
    }
    public function play(){
        $bee = $this->setup->random();
        if ($bee->isDead()) {
            return false;
        }
        $bee->hit();
        $log = [];
        $log[] = $bee->getName().' bee was attacked with '.$bee->getHit().' and now '.($bee->getCurrentHealth() > 0 ? 'has '.$bee->getHealth().' health left' : 'is dead');
        if ($bee->getName() == "QeenBee" && $bee->isDead()) {
            $this->setup->killAll();
            $log[] = $bee->getName().' bee is dead, so the hive has been drestoryed.';
            $this->isGameOver = true;
        }
        if ($this->isGameOver) {
            $log[] = 'All bees are dead, game over.';
        }
        $this->log = $log;
    }
    public function showResult(){
            echo json_encode($this->log);
    }
}