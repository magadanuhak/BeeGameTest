<?php

class Bee
{
    public $health;
    public $current_health;
    public $hit;
    public $name;
    public function __construct()
    {
        $this->current_health = $this->health;
    }

    /**
     * @return mixed
     */
    public function getHealth()
    {
        return $this->health;
    }
    public function getCurrentHealth()
    {
        return (int) $this->current_health;
    }

    public function setCurrentHealth($health)
    {
        $this->current_health = $health;
    }

    public function hit(){
        $this->setCurrentHealth( $this->getCurrentHealth() - $this->getHit() );
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getHit()
    {
        return (int) $this->hit;
    }
    public function isDead(){
        return (bool) $this->getCurrentHealth() <= 0;
    }

    /**
     * @param mixed $health
     */
    public function kill()
    {
        $this->setCurrentHealth(0);
    }
}