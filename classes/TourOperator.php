<?php

class TourOperator 
{
    private $id;

    private $name;

    private $link;

    private $gradeCount;

    private $gradeTotal;

    private $isPremium;

    

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
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of link
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set the value of link
     */
    public function setLink($link): self
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get the value of gradeCount
     */
    public function getGradeCount()
    {
        return $this->gradeCount;
    }

    /**
     * Set the value of gradeCount
     */
    public function setGradeCount($gradeCount): self
    {
        $this->gradeCount = $gradeCount;

        return $this;
    }

    /**
     * Get the value of gradeTotal
     */
    public function getGradeTotal()
    {
        return $this->gradeTotal;
    }

    /**
     * Set the value of gradeTotal
     */
    public function setGradeTotal($gradeTotal): self
    {
        $this->gradeTotal = $gradeTotal;

        return $this;
    }

    /**
     * Get the value of isPremium
     */
    public function getIsPremium()
    {
        return $this->isPremium;
    }

    /**
     * Set the value of isPremium
     */
    public function setIsPremium($isPremium): self
    {
        $this->isPremium = $isPremium;

        return $this;
    }
}