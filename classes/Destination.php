<?php


class Destination 
{
    private $id;

    private $location;

    private $price;

    private $tourOperator;



    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set the value of location
     */
    public function setLocation($location): self
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     */
    public function setPrice($price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of tourOperator
     */
    public function getTourOperator()
    {
        return $this->tourOperator;
    }

    /**
     * Set the value of tourOperator
     */
    public function setTourOperator($tourOperator): self
    {
        $this->tourOperator = $tourOperator;

        return $this;
    }
}