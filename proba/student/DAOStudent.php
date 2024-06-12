<?php
require_once '../config/db.php';

class DAOStudent {
    private $db;

    private $UPDATESTUDENT = "UPDATE student SET ime=?, prezime=?, brIndeksa=? WHERE id=?";
    private $STUDENTPOSTOJI = "SELECT * FROM student WHERE id=?";

    public function __construct() {
        $this->db = DB::createInstance();
    }

    public function studentExist($id) {
        $statement = $this->db->prepare($this->STUDENTPOSTOJI);
        $statement->bindValue(1, $id);
        $statement->execute();
        return $statement->fetch() !== false;
    }

    public function update($id, $ime, $prezime, $brIndeksa) {
        $statement = $this->db->prepare($this->UPDATESTUDENT);
        $statement->bindValue(1, $ime);
        $statement->bindValue(2, $prezime);
        $statement->bindValue(3, $brIndeksa);
        $statement->bindValue(4, $id);

        $statement->execute();

    }
}
?>
