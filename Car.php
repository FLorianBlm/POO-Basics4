<?php

class Car
{
    //const
    const INCREASE_SPEED = 20;
    const DEINCREASE_SPEED = 5;
    // Les paramètres

    /**
     * @var integer
     */
    private $nbWheels = 4;

    /**
     * @var integer
     */
    private $currentSpeed = 0;

    /**
     * @var string
     */
    private $color;

    /**
     * @var integer
     */
    private $nbSeats;

    /**
     * @var string
     */
    private $energy;

    /**
     * @var integer
     */
    private $energyLevel = 50;

    /**
     * @var boolean
     */
    private $hasParkBrake = true;

    // Les méthodes

    /**
     * nombre de voiture
     * @return int
     */
    public function getNbWheels(int $nbWheels)
    {
        return $this->nbWheels;
    }

    /**
     * la couleur
     * @return string
     */
    public function getColor(string $color)
    {
        return $this->color;
    }

    /**
     * nombre de siège
     * @return int
     */
    public function getNbSeats(int $nbSeats)
    {
        return $this->nbSeats;
    }

    /**
     * vitesse de la voiture
     * @return int
     */
    public function getSpeedCurrent(int $speedCurrent)
    {
        return $this->speedCurrent;
    }

    /**
     * type d'énergie utilisée par la voiture
     * @return string
     */
    public function getEnergy(string $energy)
    {
        return $this->energy;
    }

    /**
     * niveau d'énergie disponible
     * @return integer
     */
    public function getEnergyLevel(int $energyLevel)
    {
        return $this->energyLevel;
    }

    /**
     * construction d'objet
     * @param
     */

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    /**
     * ready to go
     */
    public function start()
    {
        if ($this->hasParkBrake == true) {
            throw new Exception("Your park brake block your car!");
        }
        $ready = "ready to go! vroum vourm";
        return $ready;
    }

    /**
     *  method forward
     */
    public function forward()
    {
        if ($this->start() === "ready to go! vroum vourm") {
            $this->currentSpeed = $currentSpeed + self::INCREASE_SPEED;
        }
    }

    /**
     * method brake
     */
    public function brake()
    {
        if ($this->currentSpeed >= self::DEINCREASE_SPEED) {
            $this->currentSpeed -= self::DEINCREASE_SPEED;
        } else {
            $this->currentSpeed = 0;
        }
    }

    /**
     * change hasParkBrake's stats
     */
    public function setParkBrake()
    {
        if ($this->hasParkBrake === true) {
            $this->hasParkBrake = false;
        } else {
            $this->hasParkBrake = true;
        }
    }
}