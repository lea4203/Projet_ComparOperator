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

   public function getAllDestination()
   {
         $req = $this->db->prepare('SELECT * FROM destination');
         $req->execute();
         $result = $req->fetchAll(PDO::FETCH_ASSOC);
         return $result;
   }

   public function addAllTourOperator($name, $grade_count,$grade_total, $link)
   {
            $req = $this->db->prepare('INSERT INTO tour_operator(name, grade_count,grade_total,link) VALUES(:name,:grade_count,:grade_total,:link)');
            $req->execute([
                'name' => $name,
                'grade_count' => $grade_count,
                'grade_total' => $grade_total,
                'link' => $link
            ]);
   }

   public function getAllTourOperator()
   {
            $req = $this->db->prepare('SELECT * FROM tour_operator');
            $req->execute();
            $result = $req->fetchAll(PDO::FETCH_ASSOC);
            return $result;
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