<?php

class Record
{
    private $db;

    public function __construct(Database $database)
    {
        $this->db = $database->getConnection();
    }

    public function getRecord($table, $recordID)
    {
        $sql = "SELECT * FROM $table WHERE id=?";
        $statement = $this->db->prepare($sql);
        $statement->bindParam(1, $recordID, PDO::PARAM_INT);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        if ($result != null) {
            return $result;
        } else {
            return $result = null;
        }
    }

    public function getRecordByColumn($table, $columnName, $record)
    {
        $sql = "SELECT * FROM $table WHERE $columnName=?";
        $statement = $this->db->prepare($sql);
        $statement->bindParam(1, $record, PDO::PARAM_INT);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        if ($result != null) {
            return $result;
        } else {
            return $result = null;
        }
    }

    public function getRecordByColumnParam($table, $columnName, $record)
    {
        $sql = "SELECT * FROM $table WHERE $columnName=?";
        $statement = $this->db->prepare($sql);
        $statement->bindParam(1, $record, PDO::PARAM_STR);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        if ($result != null) {
            return $result;
        } else {
            return $result = null;
        }
    }

    public function getRecordByColumnAndId($table, $columnName, $id, $record)
    {
        $sql = "SELECT * FROM $table WHERE id=? AND $columnName=?";
        $statement = $this->db->prepare($sql);
        $statement->bindParam(1, $id, PDO::PARAM_INT);
        $statement->bindParam(2, $record, PDO::PARAM_INT);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        if ($result != null) {
            return $result;
        } else {
            return $result = null;
        }
    }

    public function getRecords($table)
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

    public function getRecordsByStatus($table, $status)
    {
        $sql = "SELECT * FROM $table WHERE status=?";
        $statement = $this->db->prepare($sql);
        $statement->execute([$status]);
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        if ($result != null) {
            return $result;
        } else {
            return $result = null;
        }
    }

    public function getUpcomingEvents()
    {
        date_default_timezone_set('Africa/lagos');
        $currentDate = date("Y-m-d");
        $nexthreeMonths = date("Y-m-d", strtotime('+2 months'));

        $upSquery = "SELECT id,title_of_event FROM events WHERE date BETWEEN '$currentDate' AND '$nexthreeMonths' AND status=0 ORDER BY date ASC";
        $statement = $this->db->prepare($upSquery);
        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        if ($result != null) {
            return $result;
        } else {
            return $result = null;
        }
    }

    public function deleteRecord($table, $recordID, $record, $view_page_name)
    {
        $sql = "DELETE FROM $table WHERE id=?";
        $statement = $this->db->prepare($sql);
        $statement->execute([$recordID]);

        if ($statement) {
            $_SESSION['successMessage'] = "$record Deleted Successfully!";
            header("location: ../$view_page_name");
            exit(0);
        } else {
            $_SESSION['errorMessage'] = "Something Went Wrong!";
            header("location: ../$view_page_name");
            exit(0);
        }
    }

    public function countRecords($table)
    {
        $sql = "SELECT * FROM $table";
        $statement = $this->db->prepare($sql);
        $statement->execute();
        $result = $statement->rowCount();

        if ($result != null) {
            return $result;
        } else {
            return $result = null;
        }
    }

    public function countByCondition($table, $column, $data, $orderColumn, $order)
    {
        $sql = "SELECT * FROM $table WHERE $column=? ORDER by $orderColumn $order";
        $statement = $this->db->prepare($sql);
        $statement->execute([$data]);
        $result = $statement->rowCount();

        if ($result != null) {
            return $result;
        } else {
            return $result = null;
        }
    }
}