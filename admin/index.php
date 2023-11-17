<?php
session_start();
ob_start();
if (isset($_SESSION['role']) && ($_SESSION['role'] == 1)) {
    include "../model/connect.php";
    include "../model/danhmucad.php";
    include "../model/sanpham.php";
    include "show/header.php";

    connectdb();
    if (isset($_GET['act'])) {
        switch ($_GET['act']) {
            case 'showsp':
                $dsdm = getall_dm();
                $kq = getall_sanpham();
                include "show/qlsp.php";
                break;
            case 'addsp':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $dongia = $_POST['dongia'];
                    $mota = $_POST['mota'];
                    $giamgia = $_POST['giamgia']; 
                    $ngay = $_POST['ngay'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["img"]["name"]);
                    $img = $target_file;
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                    if (
                        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                        && $imageFileType != "gif"
                    ) {
                        $uploadOk = 0;
                    }
                    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                    them_sanpham($iddm, $tensp, $dongia,$giamgia, $img, $mota,$ngay);
                    $iddm == "";
                    $tensp == "";
                    $dongia == "";
                    $kq = getall_sanpham();
                }
                $kq = getall_sanpham();
                header('location: index.php?act=showsp');
                break;

            case 'deletesp':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    deletesp($id);
                }
                $kq = getall_sanpham();
                include "show/qlsp.php";
                break;
            case 'updatesp':
                $dsdm = getall_dm();
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $spct = getone_sp($_GET['id']);
                }
                $kq = getall_sanpham();
                include "show/updatesp.php";
                break;
            case 'sanpham_update':
                $dsdm = getall_dm();
                if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $dongia = $_POST['dongia'];
                    $mota = $_POST['mota'];
                    $ngay = $_POST['ngay'];
                    $giamgia = $_POST['giamgia'];
                    $id = $_POST['id'];
                    if ($_FILES["img"]["tmp_name"] != "") {
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["img"]["name"]);
                        $img = $target_file;
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                        if (
                            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                            && $imageFileType != "gif"
                        ) {
                            $uploadOk = 0;
                        }
                        if ($uploadOk = 1) {
                            move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                        }
                    } else {
                        $img = "";
                    }
                    updatesp($id, $iddm, $tensp, $dongia,$giamgia, $img,$mota, $ngay);
                }
                $kq = getall_sanpham();
                include "show/qlsp.php";
                break;

            case 'showlibrary':
                $kq = getall_dm();
                include "show/qldm.php";
                break;

            case 'adddm':
                if (isset($_POST['themmoi']) && ($_POST['themmoi']) && $_POST['tendm'] != "") {
                    $tendm = $_POST['tendm'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["img"]["name"]);
                    $img = $target_file;
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                    if (
                        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                        && $imageFileType != "gif"
                    ) {
                        $uploadOk = 0;
                    }
                    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                    themdm($tendm, $img);
                    $_POST['tendm'] == "";
                }
                $kq = getall_dm();
                // header('location: show/qldm.php');
                include "show/qldm.php";
                break;
            case 'delete':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    delete($id);
                }
                $kq = getall_dm();
                include "show/qldm.php";
                break;

            case 'updatedm':
                $dsdm = getall_dm();
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $dmone = getonedm($_GET['id']);
                }
                $kq = getall_dm();
                include "show/updatedm.php";
                break;
            case 'danhmuc_update':
                $dsdm = getall_dm();
                if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                    $tendm = $_POST['tendm'];
                    $id = $_POST['id'];
                    if ($_FILES["img"]["tmp_name"] != "") {
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["img"]["name"]);
                        $img = $target_file;
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                        if (
                            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                            && $imageFileType != "gif"
                        ) {
                            $uploadOk = 0;
                        }
                        if ($uploadOk = 1) {
                            move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                        }
                    } else {
                        $img = "";
                    }
                    updatedm($id, $tendm, $img);
                }
                $kq = getall_dm();
                include "show/qldm.php";
                break;
            case 'thoat':
                unset($_SESSION['id']);
                unset($_SESSION['name']);
                unset($_SESSION['role']);
                header('location: ../index.php');
                break;
            default:
                include "show/home.php";
                break;
        }
    } else {
        include "show/home.php";
    };

    include "show/footer.php";
} else {
    header('location: ../index.php');
}
