<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../assets/css/home.css">
  <link rel="stylesheet" href="../assets/css/detail.css">
  <link rel="stylesheet" href="../assets/css/product.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/acount.css">
  <link rel="stylesheet" href="../assets/css/cart.css">
  <link rel="shortcut icon" href="../assets/img/logo3.png" type="image/x-icon">
  <title>Thuong mai diện tu</title>
</head>
<style>
  .header__top--right--icon {
    position: relative;
  }

  .header__top--right--icon:hover>.header__top--right--icon--login {
    display: block;
  }

  .header__top--right--icon--login {
    display: none;
    position: absolute;
    width: 200px;
    background-color: #000;
    z-index: 100;
    border: 1px solid #4e4f50;
    text-align: center;
    top: 45px;
    left: -76px;
    padding: 15px 0;
  }

  .header__top--right--icon--login--ul {
    padding: 0;
    margin: 0;
    list-style: none;
  }

  .header__top--right--icon--login--ul--li {

    padding: 5px 20px;
  }

  .header__top--right--icon--login--ul--li:hover {
    background-color: #F13D3E;
  }

  .header__top--right--icon--login--ul--li>a {
    text-decoration: none;
    color: white;
    font-size: 14px;
  }

  .header__top--right--icon--cart {
    width: 320px;
    left: -150px;
    top: 46px;
    padding-top: 10px;
    padding-bottom: 20px;
  }

  .header__top--right--icon--cart>img {
    width: 100%;
  }

  .header__top--right--icon--sl {
    position: absolute;
    background-color: #F13D3E;
    color: #000;
    width: 20px;
    height: 20px;
    text-align: center;
    font-size: 14px;
    font-weight: 600;
    border-radius: 50%;
    top: -7px;
    right: -15px;
  }

  .header__top--right--icon--cart-table {
    display: grid;
    grid-template-columns: 1fr 2fr 1fr;
    font-size: 12px;
    border-bottom: 1px solid #4e4f50;
    padding: 5px 0;
  }

  .header__top--right--icon--cart-mua {
    max-width: 100px;
    margin: 0 auto;
    background-color: #F13D3E;
    font-size: 16px;
    padding: 5px;
    margin-top: 10px;
  }

  .header__top--right--icon--cart-mua>a {
    color: white;
    text-decoration: none;
  }

  .header__top--right--icon>a {
    color: white;
  }


  /* ////////////////////////// */
  /* CSS cho thông báo */
  .notification {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #4CAF50;
    color: white;
    text-align: center;
    padding: 10px;
    transition: opacity 0.3s ease-in-out;
  }

  .notification.show {
    display: block;
    opacity: 1;
  }
</style>

<body>
  <header>
    <div class="header">
      <div class="header__top">
        <div class="header__top--logo">
          <a href="index.php"><img class="header__top--logo--img" src="../assets/img/logo3.png" alt=""></a>
        </div>
        <div class="header__top--right">
          <form action="index.php?act=searchsp" method="post">
            <div class="header__top--right--search">
              <input class="header__top--right--search--input" type="search" name="titlesr" id="">
              <input class="header__top--right--search--submit" type="submit" value="Tìm kiếm" name="timkiem">
            </div>
          </form>
          <div class="header__top--right--icon">
            <i class="bi bi-person-fill"></i>
            <div class="header__top--right--icon--login">
              <ul class="header__top--right--icon--login--ul">
                <?php
                if (isset($_SESSION['name']) && ($_SESSION['name']) != "") {
                  if (isset($_SESSION['img']) && $_SESSION['img']) {
                    echo '
                         <li><a href="#"><img class="img-avt-login" src="' . $_SESSION['img'] . '" alt="" width="50px"></a></li>';
                  } else {
                    echo '
                          <li><a href="#"><img class="img-avt-login" src="../upload/avt.png" alt="" width="50px"></a></li>';
                  }
                  echo '
                  <li class="header__top--right--icon--login--ul--li"><a href="index.php?act=quanli">' . $_SESSION['name'] . '</a></li>
                  <li class="header__top--right--icon--login--ul--li"><a href="index.php?act=thoat">Đăng xuất</a></li>
                  <li class="header__top--right--icon--login--ul--li"><a href="index.php?act=quanli">Quản lý tài khoản</a></li>
                  
                  ';

                  if ($_SESSION['role'] == 1) {
                    echo '<li class="header__top--right--icon--login--ul--li"><a class="hover-effect" href="../admin/index.php">Quản lý admin</a></li>';
                  }
                } else { ?>
                  <li class="header__top--right--icon--login--ul--li"><a href="index.php?act=login">Đăng nhập</a></li>
                  <li class="header__top--right--icon--login--ul--li"><a href="index.php?act=signin">Đăng kí</a></li>

                <?php } ?>
              </ul>
            </div>
          </div>
          <div class="header__top--right--icon">
            <a href="index.php?act=cart"><i class="bi bi-bag-fill"></i></a>
            <div class="header__top--right--icon--sl">
              <?php
              if (isset($_SESSION['id']) && $_SESSION['id'] != "") {
                $idkh = $_SESSION['id'];
                $kq = getallgiohang($idkh);
                // if (isset($kq) && count($kq) > 0) {
                //   foreach ($kq as $sp) {
                echo count($kq);
                //   }
                // }
              } else {
                echo '
                0
                ';
              }
              ?>
            </div>
            <div class="header__top--right--icon--login header__top--right--icon--cart">
              <?php
              if (isset($_SESSION['id']) && $_SESSION['id'] != "") {
                $idkh = $_SESSION['id'];
                $kq = getallgiohang($idkh);
                if (isset($kq) && count($kq) > 0) {
                  foreach ($kq as $sp) {
                    echo '
                  <div class="header__top--right--icon--cart-table">
                    <div class="header__top--right--icon--cart-table-img">
                      <img src="' . $sp['img'] . '" style="width: 30px; height: 30px;" alt="">
                    </div>
                    <div class="header__top--right--icon--cart-table-name">
                    ' . $sp['tensp'] . '
                    </div>
                    <div class="header__top--right--icon--cart-table-gia">
                    ' . number_format($sp['dongia'] * $sp['soluong']) . '
                    </div>
                  </div>';
                  }
                } else {
                  echo '
                  <img src="../upload/empty_cart2.webp" alt="">
                  ';
                }
              } else {
                echo '
                <img src="../upload/empty_cart2.webp" alt="">
                ';
              }
              ?>
              <div class="header__top--right--icon--cart-mua">
                <a href="index.php?act=cart">Đến giỏ hàng</a>
              </div>

            </div>
          </div>
        </div>
      </div>