<?php
function getall_sanpham()
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT sp.*, dm.tendm FROM sanpham sp LEFT JOIN danhmuc dm ON sp.iddm = dm.id");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function getlimit_sanpham()
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM sanpham ORDER BY id desc LIMIT 10");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

function getall_sp($id)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM sanpham WHERE iddm=" . $id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

function getone_sp($id)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM sanpham WHERE id=" . $id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

function get_sanphamdm($id)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT sp.*, dm.tendm 
    FROM sanpham sp 
    LEFT JOIN danhmuc dm ON sp.iddm = dm.id 
    WHERE sp.id=" . $id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

function them_sanpham($iddm, $tensp, $dongia,$giamgia, $img, $mota, $ngay)
{
    $conn = connectdb();
    $sql = "INSERT INTO sanpham (iddm, tensp, dongia, giamgia, img, mota, ngay)
    VALUES ('$iddm', '$tensp', '$dongia','$giamgia','$img', '$mota', '$ngay')";
    $conn->exec($sql);
}
function deletesp($id)
{
    $conn = connectdb();
    $sql = "DELETE FROM sanpham WHERE id=$id";
    $conn->exec($sql);
}


function updatesp($id, $iddm, $tensp, $dongia ,$giamgia, $img, $mota, $ngay)
{
    $conn = connectdb();
    if ($img == "") {
        $sql = "UPDATE sanpham  SET tensp='" . $tensp . "'  , dongia='" . $dongia . "' , giamgia='".$giamgia."',
         iddm='" . $iddm . "',mota='" . $mota . "',ngay='" . $ngay . "'  WHERE id=" . $id;
    } else {
        $sql = "UPDATE sanpham  SET tensp='" . $tensp . "', dongia='" . $dongia . "',
         iddm='" . $iddm . "',mota='" . $mota . "',ngay='" . $ngay . "' ,giamgia='".$giamgia."', img='" . $img . "'  WHERE id=" . $id;
    }
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}


function view_update($id){
    $conn = connectdb();
    $sql = "UPDATE sanpham  SET view= view + 1 WHERE id=" . $id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
function getall_sanpham2()
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT sp.* ,COUNT(sp.iddm) as soluong, dm.tendm 
    FROM sanpham sp 
    LEFT JOIN danhmuc dm ON sp.iddm = dm.id 
    GROUP BY sp.iddm, dm.tendm");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function search($title){
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM `sanpham` WHERE `tensp` like '%$title%' or `dongia` 
    like '%$title%'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kqsp = $stmt->fetchAll();
    return $kqsp;
}
?>