<?php
require_once 'database.class.php';

class ExternalStudiesUnit {
    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    // Fetch all products
    function fetchAll()
    {
        $sql = "SELECT * FROM external_studies_unit";
        // Prepare the query
        $query = $this->db->connect()->prepare($sql);
        // Execute the query and fetch data
        $data = null;
        if ($query->execute()) {
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
        }
    
        // Return the data
        return $data;
    }
}
?>