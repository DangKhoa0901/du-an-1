<?php

function getone_user($id)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM user WHERE id=" . $id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function updatetk($id, $ten, $email, $diachi,$img)
{
    $conn = connectdb();
    if ($img == "") {
        $sql = "UPDATE user  SET ten='" . $ten . "',email='" . $email . "',diachi='" . $diachi . "' WHERE id=" . $id;
    }else{
        $sql = "UPDATE user  SET ten='" . $ten . "',email='" . $email . "',diachi='" . $diachi . "', img='".$img."'  WHERE id=" . $id;
    }
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}
?>