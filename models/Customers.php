<?php
class CusTomers
{
    public function all()
    {
        global $conn;
        $sql = "SELECT * FROM `customers`";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ); //array => object
        $rows = $stmt->fetchAll();
        return $rows;
    }
    //trả về record theo id 
    public function find($id)
    {
        global $conn;
        $sql = "SELECT * FROM `customers` WHERE ID = $id";
        // var_dump($sql);die();
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ); //array => object
        $row = $stmt->fetch();
        return $row;
    }
    public function store($data)
    {
        global $conn;
        $TENKHACHHANG = $data['TENKHACHHANG'];
        $DIACHI = $data['DIACHI'];
        $EMAIL = $data['EMAIL'];
        $IMAGE = $data['IMAGE'];
        $SODIENTHOAI = $data['SODIENTHOAI'];
        global $conn;
        $sql = "INSERT INTO `customers` 
        (`TENKHACHHANG`, `DIACHI`,`EMAIL`,`IMAGE`,`SODIENTHOAI`) 
        VALUES 
        ('$TENKHACHHANG' , '$DIACHI' ,'$EMAIL','$IMAGE',$SODIENTHOAI) ";
        $conn->exec($sql);
    }
    //    cập nhật
    public function update($id, $data)
    {
        global $conn;
        $TENKHACHHANG = $data['TENKHACHHANG'];
        $DIACHI = $data['DIACHI'];
        $EMAIL = $data['EMAIL'];
        $IMAGE = $data['IMAGE'];
        $SODIENTHOAI = $data['SODIENTHOAI'];
        $sql = "UPDATE `customers` SET 
            `TENKHACHHANG` = '$TENKHACHHANG',
            `DIACHI` = '$DIACHI',
            `EMAIL` = '$EMAIL',
            `IMAGE` = '$IMAGE',
            `SODIENTHOAI` = '$SODIENTHOAI'
        WHERE `ID` = $id";
        $conn->exec($sql);
    }
    //xu ly xoa
    public function delete($id)
    {
        global $conn;
        $sql = "DELETE FROM `customers` WHERE ID = $id";
        $conn->exec($sql);
    }
}
