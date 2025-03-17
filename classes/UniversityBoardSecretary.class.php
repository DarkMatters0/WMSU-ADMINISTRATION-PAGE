<?php
require_once 'database.class.php';

class UniversityBoardSecretary {
    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

        // Fetch all products
        function fetchAll()
        {
            $sql = "SELECT * FROM university_board_secretary";
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

                  // Upload
                  function add_official($name, $title)
                  {
                      try {
                          $sql = "INSERT INTO university_board_secretary (name, title) VALUES (:name, :title)";
                          $query = $this->db->connect()->prepare($sql);
                          
                          $query->bindParam(':name', $name);
                          $query->bindParam(':title', $title);
                          
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
}
?>