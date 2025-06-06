<?php
require_once 'database.class.php';

class PresSubOffices {

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    // Fetch all products
    function fetchAll()
    {
        $sql = "
            SELECT 
                ps.*, 
                h.short AS honorific_short
            FROM president_suboffices AS ps
            LEFT JOIN honorifics AS h ON ps.honorifics_id = h.id
        ";
    
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

    function add_official($office, $office_head, $honorifics_id)
        {
            try {
                $sql = "INSERT INTO president_suboffices (office, office_head, honorifics_id) VALUES (:office, :office_head, :honorifics_id)";
                $query = $this->db->connect()->prepare($sql);
                
                $query->bindParam(':office', $office);
                $query->bindParam(':office_head', $office_head);
                $query->bindParam(':honorifics_id', $honorifics_id);
                
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

    function fetchRecord($recordID)
        {
            $sql = "SELECT * FROM president_suboffices WHERE id = :recordID;";
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':recordID', $recordID);
            $data = null;
            if ($query->execute()) {
                $data = $query->fetch();
            }
            return $data;
        }

function edit() {
    try {
        if (!empty($this->file_name)) {
            // Update including image
            $sql = "UPDATE president_suboffices 
                    SET office = :office, 
                        office_head = :office_head, 
                        honorifics_id = :honorifics_id, 
                        image = :image, 
                        description = :description 
                    WHERE id = :id";
        } else {
            // Update without changing the image
            $sql = "UPDATE president_suboffices 
                    SET office = :office, 
                        office_head = :office_head, 
                        honorifics_id = :honorifics_id, 
                        description = :description 
                    WHERE id = :id";
        }

        $query = $this->db->connect()->prepare($sql);

        // Common parameters
        $query->bindParam(':office', $this->office);
        $query->bindParam(':office_head', $this->office_head);
        $query->bindParam(':honorifics_id', $this->honorifics);
        $query->bindParam(':description', $this->description);
        $query->bindParam(':id', $this->id, PDO::PARAM_INT);

        if (!empty($this->file_name)) {
            $query->bindParam(':image', $this->file_name);
        }

        return $query->execute();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}





        function deleteOfficial($id) {
            $sql = "DELETE FROM president_suboffices WHERE id = :id";
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':id', $id);
            return $query->execute();
        }

        function fetchSuboffices()
    {
        $sql = "SELECT * FROM president_suboffices ORDER BY office ASC;";
        $query = $this->db->connect()->prepare($sql);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
        }
        return $data;
    }

    function upload($office, $office_head, $honorifics_id, $description ,$file_name)
    {
        try {
            $sql = "INSERT INTO president_suboffices (office, office_head, honorifics_id, description, image) VALUES (:office, :office_head, :honorifics_id, :description, :image)";
            $query = $this->db->connect()->prepare($sql);
            
            $query->bindParam(':office', $office);
            $query->bindParam(':office_head', $office_head);
            $query->bindParam(':honorifics_id', $honorifics_id);
            $query->bindParam(':description', $description);
            $query->bindParam(':image', $file_name);
            
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