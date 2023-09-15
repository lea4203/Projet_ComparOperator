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
        if ($this->tourOperatorExists($tour_operator_id)) {
            $sql = 'INSERT INTO destination (location, price, tour_operator_id) VALUES (:location, :price, :tour_operator_id)';

             
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(':location', $location);
                $stmt->bindParam(':price', $price);
                $stmt->bindParam(':tour_operator_id', $tour_operator_id);
                $stmt->execute();
            
        }
    }

    public function tourOperatorExists($tour_operator_id)
    {
        $req = $this->db->prepare('SELECT * FROM tour_operator WHERE id = :id');
        $req->execute([
            'id' => $tour_operator_id
        ]);
        $result = $req->fetch(PDO::FETCH_ASSOC);
        return $result;
    }







    // INNER JOIN tour_operator ON destination.tour_operator_id = tour_operator.id 
    public function getHomeDestination()
    {
        $req = $this->db->prepare('SELECT * FROM destination ORDER BY price');

        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    public function getHomeTourOperator($id)
    {
        $req = $this->db->prepare('SELECT * FROM tour_operator WHERE id = :id ORDER BY price ASC LIMIT 1');
        $req->execute([
            'id' => $id
        ]);
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }






    public function getTourOperatorByLocation($location)
    {
        $req = $this->db->prepare('SELECT * FROM destination WHERE location = :location');

        $req->execute([
            'location' => $location
        ]);
        $destinationData = $req->fetchAll(PDO::FETCH_ASSOC);

        $tourOperators = [];

        foreach ($destinationData as $destination) {
            $tourOperatorId = $destination['tour_operator_id'];

            $req = $this->db->prepare('SELECT * FROM tour_operator WHERE id = :tour_operator_id');
            $req->execute([
                'tour_operator_id' => $tourOperatorId
            ]);

            $tourOperatorData = $req->fetchAll(PDO::FETCH_ASSOC);

            if (!empty($tourOperatorData)) {
                $tourOperators[] = $tourOperatorData[0];
            }
        }

        return $tourOperators;
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

    public function getDestinationByLocation($location)
    {
        $req = $this->db->prepare('SELECT * FROM destination WHERE location = :location LIMIT 1');
        $req->execute([
            'location' => $location
        ]);
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


    public function deleteDestination($id)
    {
        $req = $this->db->prepare('DELETE FROM destination WHERE id = :id');
        $req->execute([
            'id' => $id
        ]);
    }


    public function deleteTourOperator($tourOperatorID)
    {
        $req = $this->db->prepare('DELETE FROM tour_operator WHERE id = :id');
        $req->execute([
            'id' => $tourOperatorID
        ]);
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

    public function getTourOperator($id)
    {
        $req = $this->db->prepare('SELECT * FROM tour_operator WHERE id = :id');
        $req->execute([
            'id' => $id
        ]);
        $result = $req->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getDestination($id)
    {
        $req = $this->db->prepare('SELECT * FROM destination WHERE id = :id');
        $req->execute([
            'id' => $id
        ]);
        $result = $req->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function updateDestination($id, $location, $price)
    {
        $req = $this->db->prepare('UPDATE destination SET location = :location, price = :price WHERE id = :id');
        $req->execute([
            'id' => $id,
            'location' => $location,
            'price' => $price,
        ]);
    }



    public function updateTourOperatorIsPremium($id, $is_premium)
    {
        $req = $this->db->prepare('UPDATE tour_operator SET is_premium = :is_premium WHERE id = :id');
        $req->execute([
            'id' => $id,
            'is_premium' => $is_premium,
        ]);
    }

    public function getPremiumTourOperator()
    {
        $req = $this->db->prepare('SELECT * FROM tour_operator WHERE is_premium = 1');
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllTourOperators()
    {
        $req = $this->db->prepare('SELECT * FROM tour_operator');
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    public function addAdministrator($username, $passwordHash)
    {
        $req = $this->db->prepare("INSERT INTO administrator (username, password) VALUES (:username, :password)");
        $req->execute([
            "username" => $username,
            "password" => $passwordHash,
            // Utilisez $passwordHash au lieu de $password
        ]);
    }

    public function getAllAdministrator($username)
    {
        $req = $this->db->prepare("SELECT * FROM administrator WHERE username = :username LIMIT 1 ");
        $req->bindParam(":username", $username);
        $req->execute();
        return $req->fetch(PDO::FETCH_ASSOC);
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