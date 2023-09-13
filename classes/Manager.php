<?php


class Manager
{
    private $db;


    public function __construct($db)
    {
        $this->setDb($db);
    }
    public function addAllDestination($location, $price, $tourOperatorID)
    {
        if ($this->tourOperatorExists($tourOperatorID)) {
            $req = $this->db->prepare('INSERT INTO destination(location, price, tour_operator_id) VALUES(:location, :price, :tourOperatorID)');

            $req->execute([
                'location' => $location,
                'price' => $price,
                'tourOperatorID' => $tourOperatorID,
            ]);
        } else {
            echo "L'ID du tour-operator n'existe pas.";
        }
    }


    public function getAllDestination()
    {
        $req = $this->db->prepare('SELECT * FROM destination INNER JOIN tour_operator ON destination.tour_operator_id = tour_operator.id');
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    }

    public function addAllTourOperator($name, $grade_count, $grade_total, $link)
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

    public function getDestinationsByTourOperator($tourOperatorID)
    {
        $req = $this->db->prepare('SELECT * FROM destination WHERE tour_operator_id = :tour_operator_id');
        $req->execute([
            'tour_operator_id' => $tourOperatorID
        ]);
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function deleteDestination($destinationID)
    {
        $req = $this->db->prepare('DELETE FROM destination WHERE id = :id');
        $req->execute([
            'id' => $destinationID
        ]);
    }
    public function deleteTourOperator($tourOperatorID)
    {
        $req = $this->db->prepare('DELETE FROM tour_operator WHERE id = :id');
        $req->execute([
            'id' => $tourOperatorID
        ]);
    }


    public function tourOperatorExists($tourOperatorID)
    {
        $req = $this->db->prepare('SELECT * FROM tour_operator WHERE id = :id');
        $req->execute([
            'id' => $tourOperatorID
        ]);
        $result = $req->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

 public function updateTourOperator($id, $name, $grade_count, $grade_total, $link)
    {
        $req = $this->db->prepare('UPDATE tour_operator SET name = :name, grade_count = :grade_count, grade_total = :grade_total, link = :link WHERE id = :id');
        $req->execute([
            'id' => $id,
            'name' => $name,
            'grade_count' => $grade_count,
            'grade_total' => $grade_total,
            'link' => $link
        ]);
    }
    


    public function getOneTourOperator($id)
    {
        $req = $this->db->prepare('SELECT * FROM tour_operator WHERE id = :id');
        $req->execute([
            'id' => $id
        ]);
        $result = $req->fetch(PDO::FETCH_ASSOC);
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