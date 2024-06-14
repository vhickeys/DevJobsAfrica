<?php

class Sector
{
    private $db;

    public function __construct(Database $database)
    {
        $this->db = $database->getConnection();
    }

    public function createSector($name, $description, $status)
    {
        $sql = "INSERT INTO sectors (name, description, status) VALUES(?,?,?)";
        $statement = $this->db->prepare($sql);
        $statement->execute([$name, $description, $status]);

        if ($statement) {
            $_SESSION['successMessage'] = "Job Sector Created Successfully!";
            header("location: ../view-sectors.php");
            exit (0);
        } else {
            $_SESSION['errorMessage'] = "Something Went Wrong!";
            header("location: ../view-sectors.php");
            exit (0);
        }
    }

    public function editSector($name, $description, $status, $sector_id)
    {
        $sql = "UPDATE sectors SET name=?, description=?, status=? WHERE id=?";
        $statement = $this->db->prepare($sql);
        $statement->execute([$name, $description, $status, $sector_id]);

        if ($statement) {
            $_SESSION['successMessage'] = "Sector Updated Successfully!";
            header("location: ../view-sectors.php");
            exit (0);
        } else {
            $_SESSION['errorMessage'] = "Something Went Wrong!";
            header("location: ../view-sectors.php");
            exit (0);
        }
    }

    public function getSectors($table = "sectors")
    {
        $sql = "SELECT * FROM $table";
        $statement = $this->db->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        if ($result != null) {
            return $result;
        } else {
            return $result = null;
        }
    }
}