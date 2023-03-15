<?php

class Login
{
    public function all()
    {
        global $conn;
        $sql = "SELECT * FROM `login`";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ); //array => object
        $rows = $stmt->fetchAll();
        return $rows;
    }
}
?>