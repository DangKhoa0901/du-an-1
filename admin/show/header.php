<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- link icon -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--  -->
    <!-- Link chữ-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <!--  -->
    <!-- link css -->
    <link rel="stylesheet" href="show/css/home.css">
    <link rel="stylesheet" href="show/css/qlsanpham.css">
    <!--  -->

    <title>Trang chủ</title>
</head>
<style>
    .box-right__header-account {
        position: relative;
    }

    .box-right__header-account-link {
        display: none;
        position: absolute;
        background-color: white;
        box-shadow: 0px 0px 6px 1px #815ccb;
        top: 40px;
        z-index: 1000;
        width: 250px;
    }

    .box-right__header-account-link>ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .box-right__header-account-link>ul>li {
        text-align: center;
        padding: 10px;
    }

    .box-right__header-account-link>ul>li:first-child:hover {
        background-color: white;
    }

    .box-right__header-account-link>ul>li:hover {
        background-color: #F13D3E;
    }

    .box-right__header-account-link>ul>li>a {
        text-decoration: none;
        font-size: 16px;
        color: black;
    }

    .box-right__header-account:hover>.box-right__header-account-link {
        display: block;
    }

    .img-avt-login {
        width: 100px;
        height: 100px;
    }
</style>

<body>
    <div class="container3">
        <div class="container__box-left">
            <div class="box-left__logo">
                <img class="box-left__logo-img" src="show/image/logo3.png" alt="">
            </div>
            <div class="box-left__menu">
                <ul class="box-left__menu-ul">
                    <li class="box-left__menu-ul-li">
                        <a class="box-left__menu-ul-li-a" href="index.php">
                            <i class="fa-solid fa-house box-left__menu-ul-li-a-icon"></i>
                            <span class="box-left__menu-ul-li-a-span">Trang chủ</span>
                        </a>
                    </li>

                    <li class="box-left__menu-ul-li">
                        <a class="box-left__menu-ul-li-a" href="#">
                            <i class="box-left__menu-ul-li-a-icon fa-brands fa-shopify"></i>
                            <span class="box-left__menu-ul-li-a-span">Quản lý đơn hàng</span>
                        </a>
                    </li>

                    <li class="box-left__menu-ul-li" onclick="toggleSubMenu(this)">
                        <a class="box-left__menu-ul-li-a" href="#">
                            <i class=""></i>
                            <i class="box-left__menu-ul-li-a-icon fa-solid fa-table-list"></i>
                            <span class="box-left__menu-ul-li-a-span">Quản lý danh mục</span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </a>
                        <div class="box-left__menu-ul-li-menu2">
                            <ul class="menu2__ul">
                                <li class="menu2__ul-li">
                                    <a class="menu2__ul-li-a" href="index.php?act=showlibrary">Xem danh mục</a>
                                </li>
                                <li class="menu2__ul-li">
                                    <a class="menu2__ul-li-a" href="">Sửa danh mục</a>
                                </li>
                                <li class="menu2__ul-li">
                                    <a class="menu2__ul-li-a" href="">Thêm danh mục</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="box-left__menu-ul-li" onclick="toggleSubMenu(this)">
                        <a class="box-left__menu-ul-li-a" href="#">
                            <i class="box-left__menu-ul-li-a-icon fa-solid fa-cubes-stacked"></i>
                            <span class="box-left__menu-ul-li-a-span">Quản lý sản phẩm</span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </a>
                        <div class="box-left__menu-ul-li-menu2">
                            <ul class="menu2__ul">
                                <li class="menu2__ul-li">
                                    <a class="menu2__ul-li-a" href="index.php?act=showsp">Xem sản phẩm</a>
                                </li>
                                <li class="menu2__ul-li">
                                    <a class="menu2__ul-li-a" href="">Sửa sản phẩm</a>
                                </li>
                                <li class="menu2__ul-li">
                                    <a class="menu2__ul-li-a" href="">Thêm sản phẩm</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="box-left__menu-ul-li"><a class="box-left__menu-ul-li-a" href="#">
                            <i class="box-left__menu-ul-li-a-icon fa-solid fa-user"></i>
                            <span class="box-left__menu-ul-li-a-span">Quản lý khách hàng</span>
                        </a>
                    </li>

                    <li class="box-left__menu-ul-li"><a class="box-left__menu-ul-li-a" href="#">
                            <i class="box-left__menu-ul-li-a-icon fa-solid fa-truck-fast"></i>
                            <span class="box-left__menu-ul-li-a-span">Quản lý giao hàng</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container__box-right">
            <div class="box-right__header">
                <div class="box-right__header-search">
                    <input class="header-search__input" type="text" placeholder="Tìm kiếm sản phẩm">
                    <i class="fa-solid fa-magnifying-glass header-search__icon"></i>
                </div>
                <div class="box-right__header-account">
                    <i class="fa-solid fa-user box-right__header-account-icon"></i>
                    <div class="box-right__header-account-link">
                        <ul>
                            <?php
                            if (isset($_SESSION['name']) && ($_SESSION['name']) != "" && $_SESSION['role'] == 1) {
                                if (isset($_SESSION['img']) && $_SESSION['img']) {
                                    echo '
                                <li><a href="#"><img class="img-avt-login" src="' . $_SESSION['img'] . '" alt="" width="30px"></a></li>
                                ';
                                } else {
                                    echo '
                                <li><a href="#"><img class="img-avt-login" src="show/img/avt.png" alt="" width="30px"></a></li>
                                ';
                                }

                                echo '
                                <li><a href="#">' . $_SESSION['name'] . '</a></li>
                                <li><a href="index.php?act=thoat">Đăng xuất</a></li>';
                            } else { ?>
                                <li><a href="#">Đăng Nhập</a></li>
                                <li><a href="#">Đăng kí</a></li>

                            <?php } ?>
                            <li>
                                <a class="hover-effect" href="../controller/index.php">
                                    <i class="bi bi-arrow-return-right"></i>
                                    Trở về user
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>