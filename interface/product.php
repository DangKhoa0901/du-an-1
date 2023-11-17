<div class="header__banner">
    <div class="header__banner--text">
        <h2 class="header__banner--text--h2">
            Belkinon
        </h2>
        <h4 class="header__banner--text--h3">New powerfull</h3>
            <h3 class="header__banner--text--h3">Headphones</h3>
            <button class="header__banner--text--btn">More</button>
    </div>
    <div class="header__banner--img">
        <img src="../assets/img/banerbig2.png" alt="">
    </div>
</div>

</div>
</header>

<article>
    <div class="main">
        <div class="main__top">
            <ul class="main__top--ul">
                <li class="main__top--ul--li">
                    <a href="index.php">Trang chủ</a>
                </li>
                <i class="bi bi-chevron-right"></i>
            </ul>
        </div>
        <div class="main__product">
            <div class="main__product--category">
                <p class="main__product--category--p">
                    Danh mục
                </p>
                <ul class="main__product--category--ul">
                    <?php
                    if (isset($danhmuc) && count($danhmuc) > 0) {
                        foreach ($danhmuc as $dm) {
                            echo '  
                    <li class="main__product--category--ul--li"><a href="index.php?act=product&id=' . $dm['id'] . '">' . $dm['tendm'] . '</a></li>
                    ';
                        }
                    }
                    ?>
                </ul>
            </div>
            <div class="main__product--show">
                <?php
                if (isset($kq) && count($kq) > 0) {
                    foreach ($kq as $sp) {
                        echo '               
                <a href="index.php?act=detail&id=' . $sp['id'] . '" class="container__product--sale--a">
                    <div class="container__product--sale--a--item">
                        <img class="container__product--sale--a--item--img" src="' . $sp['img'] . '" alt="">
                        <div class="container__product--sale--a--item--name">
                        ' . $sp['tensp'] . '
                        </div>
                        <div class="container__product--sale--a--item--price">
                        ' . $sp['dongia'] . '
                        </div>
                    </div>
                </a>
                ';
                    }
                } else {
                    echo '<div class="container__product--sale--a--item">
                    <img class="container__product--sale--a--item--img" src="../upload/empty_cart.webp" alt="">
                    </div>';
                }

                ?>
            </div>
        </div>
    </div>
</article>
