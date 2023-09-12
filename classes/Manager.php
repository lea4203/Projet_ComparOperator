<?php


class Manager
{
    private $db;


    public function __construct($db)
    {
        $this->setDb($db);
    }

   public function addAllDestination($location, $price, $tour_operator_id)
   {
         $req = $this->db->prepare('INSERT INTO destination(location, price,tour_operator_id) VALUES(:location,:price,:tour_operator_id)');
        $req->execute([
            'location' => $location,
            'price' => $price,
            'tour_operator_id' => $tour_operator_id
        ]);
   }


    /**
     * Get the value of db
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * Set the value of db
     */
    public function setDb($db): self
    {
        $this->db = $db;

        return $this;
    }



}