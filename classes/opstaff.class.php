<?php
require_once 'database.class.php';

class OpStaff {
    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }
// Fetch all operational staff
function fetchAll()
{
    $sql = "
        SELECT 
            o.id,
            o.name,
            o.title_id,
            dop.designation AS title,
            o.page_link,
            h.short AS honorific_short
        FROM opstaff AS o
        LEFT JOIN honorifics AS h ON o.honorifics_id = h.id
        LEFT JOIN designation_opstaff AS dop ON o.title_id = dop.id
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

        

    function add_official($name, $designation_opstaff, $page_link, $honorifics_id)
    {
        try {
            $sql = "INSERT INTO opstaff (name, title_id, page_link, honorifics_id) VALUES (:name, :title_id, :page_link, :honorifics_id)";
            $query = $this->db->connect()->prepare($sql);
            
            $query->bindParam(':name', $name);
            $query->bindParam(':title_id', $designation_opstaff);
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
        $sql = "DELETE FROM opstaff WHERE id = :id";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':id', $id);
        return $query->execute();
    }

    function fetchRecord($recordID)
{
    $sql = "SELECT * FROM opstaff WHERE id = :recordID;";
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
    $sql = "UPDATE opstaff SET name = :name, title_id = :title_id, page_link = :page_link, honorifics_id = :honorifics_id WHERE id = :id;";
    $query = $this->db->connect()->prepare($sql);
    $query->bindParam(':name', $this->name);
    $query->bindParam(':title_id', $this->designation_opstaff);
    $query->bindParam(':page_link', $this->page_link);
    $query->bindParam(':honorifics_id', $this->honorifics);
    $query->bindParam(':id', $this->id);
    return $query->execute();
}
}
?>