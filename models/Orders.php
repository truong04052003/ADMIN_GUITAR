<?php
class Orders
{
    public function all()
    {
        global $conn;
        $sql = "SELECT * FROM `orders`";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ); //array => object
        $rows = $stmt->fetchAll();
        return $rows;
    }
    //trả về record theo id 
    public function find($id)
    {
        global $conn;
        $sql = "SELECT * FROM `orders` WHERE ID = $id";
        // var_dump($sql);die();
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ); //array => object
        $row = $stmt->fetch();
        return $row;
    }
    public function store($data)
    {
        global $conn;
        $total = $data['total'];
        $customer_id  = $data['customer_id'];
        $NGAYDATHANG = $data['NGAYDATHANG'];
        global $conn;
        $sql = "INSERT INTO `orders`(`total`,`customer_id`,`NGAYDATHANG`)
         VALUES ('$total','$customer_id','$NGAYDATHANG') ";
        $conn->exec($sql);
    }
    //xu ly them moi
    public function update($id, $data)
    {
        global $conn;
        $total = $data['total'];
        $customer_id = $data['customer_id'];
        $NGAYDATHANG = $data['NGAYDATHANG'];
        $sql = "UPDATE `orders` SET 
        `total` = '$total',
        `customer_id` = '$customer_id',
        `NGAYDATHANG` = '$NGAYDATHANG'
        WHERE `ID` = $id";
        $conn->exec($sql);
    }
    //xu ly xoa
    public function delete($id)
    {
        global $conn;
        $sql = "DELETE FROM `orders` WHERE ID = $id";
        $conn->exec($sql);
    }
}
