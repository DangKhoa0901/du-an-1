<?php
function themgiohang($idsp, $idkh)
{
    $conn = connectdb();
    $sql = "INSERT INTO giohang (idsp, idkh)
    VALUES ('$idsp', '$idkh')";
    $conn->exec($sql);
}
function getallgiohang($idkh){
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT gh.id, gh.soluong, sp.tensp, sp.img , sp.dongia  FROM giohang gh LEFT JOIN user us ON gh.idkh = us.id
    LEFT JOIN sanpham sp ON gh.idsp = sp.id  WHERE us.id=" . $idkh);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function updatesl($idsp, $idkh, $sl)
{
    $conn = connectdb();
    $sql = ("UPDATE giohang  SET soluong='" . $sl . "' WHERE idsp='". $idsp."' AND idkh=".$idkh);
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function getonegh($idkh)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM giohang WHERE idkh=" . $idkh);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
};
function deletecart($id)
{
    $conn = connectdb();
    $sql = "DELETE FROM giohang WHERE id=$id";
    $conn->exec($sql);
}
