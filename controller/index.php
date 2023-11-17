<?php
session_start();
ob_start();
include "../model/connect.php";
include "../model/danhmucad.php";
include "../model/sanpham.php";
include "../model/xl_form.php";
include "../model/manager.php";
include "../model/comment.php";
include "../model/giohang.php";
include "../interface/header.php";

connectdb();
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'product':
            if (isset($_GET['id']) && $_GET['id']) {
                $id = $_GET['id'];
                $kq = getall_sp($id);
            }
            $danhmuc = getall_dm();
            include "../interface/product.php";
            break;
        case 'detail':
            if (isset($_GET['id']) && $_GET['id']) {
                $id = $_GET['id'];
                $viewud = view_update($id);
                $kq = getone_sp($id);
                $tendm = get_sanphamdm($id);
                $blkh = get_binhluankh($id);
            }
            include "../interface/detail.php";
            break;
        case 'login':
            include "../interface/login.php";
            break;
        case 'signin':
            include "../interface/signin.php";
            break;
        case 'thoat':
            unset($_SESSION['id']);
            unset($_SESSION['name']);
            unset($_SESSION['role']);
            header('location: index.php');
            break;
        case 'quanli':
            $id = $_SESSION['id'];
            $kq = getone_user($id);
            include "../interface/manager.php";
            break;
        case 'updatetk':
            $id = $_SESSION['id'];
            if (isset($_POST['luu'])) {
                $ten = $_POST['name'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
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
                updatetk($id, $ten, $email, $diachi, $img);
            }
            $kq = getone_user($id);
            include "../interface/manager.php";
            break;

        case 'comment':
            if (isset($_SESSION['id']) && $_SESSION['id'] != "") {
                $idkh = $_SESSION['id'];
                if (isset($_POST['gui']) && $_POST['gui']) {
                    $idsp = $_GET['id'];
                    $content = $_POST['comment'];
                    $kq = getone_sp($idsp);
                    $tendm = get_sanphamdm($idsp);
                    $blkh = get_binhluankh($idsp);
                    comment($idkh, $idsp, $content);
                    header("Location: index.php?act=detail&id=$idsp");
                }
            } else {
                header("Location: index.php?act=login");
            }
            break;      
        case 'cart':
            if (isset($_SESSION['id']) && $_SESSION['id'] != "") {
                $idkh = $_SESSION['id'];
                $kq = getallgiohang($idkh);
                include "../interface/cart.php";
            } else {
                header("Location: index.php?act=login");
            }
            break;
        case 'deletecart':
            if (isset($_GET['id']) && $_GET['id']) {
                $id = $_GET['id'];
                $del = deletecart($id);
            }
            header("Location: index.php?act=cart");
            break;
        case 'themgio':
            if (isset($_SESSION['id']) && $_SESSION['id'] != "") {
                if (isset($_POST['addsp']) && $_POST['addsp']) {
                    $idsp = $_GET['id'];
                    $idkh = $_SESSION['id'];
                    $kq = getonegh($idkh);
                    $co = 0;
                    if (isset($kq) && count($kq) > 0) {
                        foreach ($kq as $check) {
                            if ($check['idsp'] == $idsp) {
                                $sl = $check['soluong'];
                                $sl = $sl + 1;
                                updatesl($idsp, $idkh, $sl);
                                header("Location: index.php?act=cart&id=$idsp");
                                $co = 1;
                                break;
                            }
                        }
                    } else {
                        themgiohang($idsp, $idkh);
                        header("Location: index.php?act=cart&id=$idsp");
                        $co = 1;
                        break;
                    }
                    if (count($kq) > 0 && $co == 0) {
                        themgiohang($idsp, $idkh);
                        header("Location: index.php?act=cart&id=$idsp");
                        break;
                        // themgiohang($idsp, $idkh);
                    }
                    header("Location: index.php?act=cart&id=$idsp");
                } else {
                    header("Location: index.php?act=login");
                }
            }else{
                header("Location: index.php?act=login");
            }
            break;
        default:
            include "../interface/home.php";
            break;
        case 'searchsp':
            if (isset($_POST['timkiem']) && $_POST['timkiem']) {
                $title = $_POST['titlesr'];
                $kqsp = search($title);
            }
            include "../interface/search.php";
            break;
    }
} else {
    include "../interface/home.php";
};
include "../interface/footer.php";
