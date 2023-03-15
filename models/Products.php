<?php
class Products
{
    public function all()
    {
        global $conn;
        $sql = "SELECT * FROM `products`";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ); //array => object
        $rows = $stmt->fetchAll();
        return $rows;
    }
    //trả về record theo id 
    public function find($id)
    {
        global $conn;
        $sql = "SELECT * FROM `products` WHERE ID = $id";
        // var_dump($sql);die();
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ); //array => object
        $row = $stmt->fetch();
        return $row;
    }
    public function store($data)
    {
        global $conn;
        $TENSANPHAM  = $data['TENSANPHAM']; 
        $category_id   = $data['category_id'];
        $IMAGE  = $data['IMAGE']; 
        global $conn;
        $sql = "INSERT INTO `products`(`TENSANPHAM`,`category_id`,`IMAGE`)
         VALUES ('$TENSANPHAM','$category_id','$IMAGE') ";
        $conn->exec($sql);
    }
    //xu ly them moi
    public function update($id, $data)
    {
        global $conn;
        $TENSANPHAM = $data['TENSANPHAM'];
        $category_id = $data['category_id'];
        $IMAGE = $data['IMAGE'];
        $sql = "UPDATE `products` SET 
        `TENSANPHAM` = '$TENSANPHAM',
        `category_id` = '$category_id',
        `IMAGE` = '$IMAGE'
        WHERE `ID` = $id";
        $conn->exec($sql);
    }
    //xu ly xoa
    public function delete($id)
    {
        global $conn;
        $sql = "DELETE FROM `products` WHERE ID = $id";
        $conn->exec($sql);
    }
}
