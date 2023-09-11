<?php


class Manager
{
    private $db;


    public function __construct($db)
    {
        $this->setDb($db);
    }

   public function addAllDestination(Destination $destination)
   {
         $req = $this->db->prepare('INSERT INTO destination(location, price) VALUES(:location, :price)');
         $req->bindValue(':location', $destination->getLocation());
         $req->bindValue(':price', $destination->getPrice());
         $req->execute();
   }


    /**
     * Get the value of bdd
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * Set the value of bdd
     */
    public function setDb($db): self
    {
        $this->db = $db;

        return $this;
    }



}