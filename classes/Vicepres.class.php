<?php
require_once 'database.class.php';

class VicePres {
    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function fetchAll()
    {
        $sql = "
            SELECT 
                vp.id,
                vp.name,
                vp.title_id,
                dvp.designation AS title,
                vp.page_link,
                h.short AS honorific_short
            FROM vice_presidents AS vp
            LEFT JOIN honorifics AS h ON vp.honorifics_id = h.id
            LEFT JOIN designation_vp AS dvp ON vp.title_id = dvp.id
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
    
    

    // Upload
    function add_official($name, $designation_vp, $page_link, $honorifics_id)
    {
        try {
            $sql = "INSERT INTO vice_presidents (name, title_id, page_link, honorifics_id) VALUES (:name, :title_id, :page_link, :honorifics_id)";
            $query = $this->db->connect()->prepare($sql);
            
            $query->bindParam(':name', $name);
            $query->bindParam(':title_id', $designation_vp);
            $query->bindParam(':page_link', $page_link);
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

    function deleteOfficial($id) {
    $sql = "DELETE FROM vice_presidents WHERE id = :id";
    $query = $this->db->connect()->prepare($sql);
    $query->bindParam(':id', $id);
    return $query->execute();
}

function fetchRecord($recordID)
{
    $sql = "SELECT * FROM vice_presidents WHERE id = :recordID;";
    $query = $this->db->connect()->prepare($sql);
    $query->bindParam(':recordID', $recordID);
    $data = null;
    if ($query->execute()) {
        $data = $query->fetch();
    }
    return $data;
}

function edit()
{
    $sql = "UPDATE vice_presidents SET name = :name, title_id = :title_id, page_link = :page_link, honorifics_id = :honorifics_id WHERE id = :id;";
    $query = $this->db->connect()->prepare($sql);
    $query->bindParam(':name', $this->name);
    $query->bindParam(':title_id', $this->title_id);
    $query->bindParam(':page_link', $this->page_link);
    $query->bindParam(':honorifics_id', $this->honorifics);
    $query->bindParam(':id', $this->id);
    return $query->execute();
}
}
?>