<?php
class Categories
{
    public function all()
    {
        global $conn;
        $sql = "SELECT * FROM `categories`";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ); //array => object
        $rows = $stmt->fetchAll();
        return $rows;
    }
    //trả về record theo id 
    public function find($id)
    {
        global $conn;
        $sql = "SELECT * FROM `categories` WHERE ID = $id";
        // var_dump($sql);die();
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ); //array => object
        $row = $stmt->fetch();
        return $row;
    }
    public function store($data)
    {
        global $conn;
        $categories_name  = $data['categories_name']; 
        global $conn;
        $sql = "INSERT INTO `categories`(`categories_name`)
         VALUES ('$categories_name') ";
        $conn->exec($sql);
    }
    //xu ly them moi
    public function update($id, $data)
    {
        global $conn;
        $categories_name = $data['categories_name'];
        $sql = "UPDATE `categories` SET 
        `categories_name` = '$categories_name'
        WHERE `ID` = $id";
        $conn->exec($sql);
    }
    //xu ly xoa
    public function delete($id)
    {
        global $conn;
        $sql = "DELETE FROM `categories` WHERE ID = $id";
        $conn->exec($sql);
    }
}
