<?php
require_once 'database.class.php';

class Directors {
    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

        // Fetch all products
        function fetchAll()
        {
            $sql = "SELECT * FROM directors";
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