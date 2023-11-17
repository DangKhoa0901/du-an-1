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
        <img src="../assets/img/bnimg.png" alt="">
    </div>
</div>

</div>
</header>
<div class="container__product">
    <h3 class="container__product--h3">
        KẾT QUẢ TÌM KIẾM SẢN PHẨM
    </h3>
    <div class="container__product--sale">
        <?php
        if (isset($kqsp) && count($kqsp) > 0) {
            foreach ($kqsp as $sp) {
                echo '
                        <a href="index.php?act=detail&id=' . $sp['id'] . '" class="container__product--sale--a">
                          <div class="container__product--sale--a--item">
                            <img class="container__product--sale--a--item--img" src="' . $sp['img'] . '" alt="">
                            <div class="container__product--sale--a--item--name">
                            ' . $sp['tensp'] . '
                            </div>
                            <div class="container__product--sale--a--item--price">
                            ' . number_format($sp['dongia']) . '
                            </div>
                          </div>
                        </a> ';
            }
        }else{
            echo '
            <div>
            <h2 style="color:red;">Tìm kiếm thất bại!</h2>
            <img width="70%" src="../upload/search.webp" alt="">
            </div>';
        }
        
        ?>
    </div>
</div>