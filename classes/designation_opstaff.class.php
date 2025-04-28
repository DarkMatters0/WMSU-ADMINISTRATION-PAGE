<?php
require_once 'database.class.php';

class DesignationOpstaff {
    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function add_designationOpstaff($designation)
    {
        try {
            $sql = "INSERT INTO designation_opstaff (designation) VALUES (:designation)";
            $query = $this->db->connect()->prepare($sql);
            
            $query->bindParam(':designation', $designation);
            
            if ($query->execute()) {
                return true;
            } else {
                // Print error if insertion fails
                print_r($query->errorInfo());
                return false;
            }
        } catch (PDOException $e) {
            echo "Database error: " . $e->getMessage();
            return false;
        }
    }

    function fetchdesignationOpstaff()
    {
        $sql = "SELECT * FROM designation_opstaff";
        $query = $this->db->connect()->prepare($sql);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
        }
        return $data;
    }


}