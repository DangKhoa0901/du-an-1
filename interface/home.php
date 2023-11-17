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

            <!-- //////////////////// -->
            <?php
            $kq = getall_dm();
            $limitsp = getlimit_sanpham();
            $sanp = getall_sanpham();
            ?>

            <!-- ///////////////// -->
            <article>
              <div class="container">
                <div class="container__header">
                  <ul class="container__header--ul">
                    <li class="container__header--ul--li">
                      <i class="container__header--ul--li--icon  bi bi-truck"></i>
                      Miễn phí vận chuyển và trả lại
                    </li>
                    <li class="container__header--ul--li">
                      <i class="container__header--ul--li--icon  bi bi-cash-coin "></i>
                      Hoàn Tiền 100%
                    </li>
                    <li class="container__header--ul--li">
                      <i class="container__header--ul--li--icon  bi bi-send-check"></i>
                      Giao hàng nhanh chóng
                    </li>
                  </ul>
                </div>
                <h3 class="container__category--h3">
                  DANH MỤC
                </h3>
                <div class="container__category">
                  <?php
                  if (isset($kq) && count($kq) > 0) {
                    foreach ($kq as $dm) {
                      echo '
                                <a href="index.php?act=product&id=' . $dm['id'] . '" class="container__category--a">
                                    <div class="container__category--a--item">
                                      <img class="container__category--a--item--img" src="' . $dm['img'] . '" alt="">
                                      <div class="container__category--a--item--name">
                                      ' . $dm['tendm'] . '
                                      </div>
                                    </div>
                                </a>   
                      ';
                    }
                  }

                  ?>
                </div>
                <div class="container__product">
                  <h3 class="container__product--h3">
                    SẢN PHẨM
                  </h3>
                  <div class="container__product--sale">
                    <?php
                    if (isset($sanp) && count($sanp) > 0) {
                      foreach ($sanp as $sp) {
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
                    }
                    ?>
                  </div>
                </div>
                <div class="container__product--banner">
                  <img class="container__product--banner--img" src="../assets/img/baner2.png" alt="">
                  <div class="container__product--banner--title">
                    <h2 class="container__product--banner--title--h2">
                      MacBook
                    </h2>
                    <P class="container__product--banner--title--P">
                      <del>$1895.00</del> $1395.00
                    </P>
                    <button class="container__product--banner--title--button">
                      Xem thêm
                    </button>
                  </div>
                </div>
                <div class="container__product">
                  <h3 class="container__product--h3">
                    SẢN PHẨM MỚI
                  </h3>
                  <div class="container__product--sale">
                    <?php
                    if (isset($limitsp) && count($limitsp) > 0) {
                      foreach ($limitsp as $splm) {
                        echo '
                        <a href="index.php?act=detail&id=' . $splm['id'] . '" class="container__product--sale--a">
                          <div class="container__product--sale--a--item">
                            <img class="container__product--sale--a--item--img" src="' . $splm['img'] . '" alt="">
                            <div class="container__product--sale--a--item--detail">
                            <div class="container__product--sale--a--item--name">
                            ' . $splm['tensp'] . '
                            </div>
                            <div class="container__product--sale--a--item--price">
                            ' . number_format($splm['dongia']) . '
                            </div>
                            </div>
                          </div>
                        </a> ';
                      }
                    }
                    ?>
                  </div>
                </div>
                <div class="container__header">
                  <ul class="container__header--ul">
                    <li class="container__header--ul--li">
                      <i class="container__header--ul--li--icon  bi bi-truck"></i>
                      Miễn phí vận chuyển và trả lại
                    </li>
                    <li class="container__header--ul--li">
                      <i class="container__header--ul--li--icon  bi bi-cash-coin "></i>
                      Hoàn Tiền 100%
                    </li>
                    <li class="container__header--ul--li">
                      <i class="container__header--ul--li--icon  bi bi-send-check"></i>
                      Giao hàng nhanh chóng
                    </li>
                  </ul>
                </div>
              </div>
            </article>