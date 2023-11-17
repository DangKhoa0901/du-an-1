<?php
function comment($idkh, $idsp, $noidung)
{
    $conn = connectdb();
    $sql = "INSERT INTO binhluan (idkh, idsp, noidung)
    VALUES ('$idkh', '$idsp', '$noidung')";
    $conn->exec($sql);
}
function get_binhluan($id)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM binhluan WHERE idsp=" . $id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function get_binhluankh($id)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT bl.*, us.ten, us.img ,sp.id 
    FROM binhluan bl 
    JOIN user us ON bl.idkh = us.id
    JOIN sanpham sp ON bl.idsp = sp.id  
    WHERE sp.id=" . $id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
?>