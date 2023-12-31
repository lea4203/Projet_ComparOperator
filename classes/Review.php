<?php


class Review
{
    private $id;

    private $message;

    private $author;

    private $tourOperatorId;



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
     * Get the value of message
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of message
     */
    public function setMessage($message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get the value of author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of author
     */
    public function setAuthor($author): self
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of tourOperatorId
     */
    public function getTourOperatorId()
    {
        return $this->tourOperatorId;
    }

    /**
     * Set the value of tourOperatorId
     */
    public function setTourOperatorId($tourOperatorId): self
    {
        $this->tourOperatorId = $tourOperatorId;

        return $this;
    }
}