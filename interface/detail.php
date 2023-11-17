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
                <li class="main__top--ul--li">
                    <?php
                    if (isset($tendm) && count($tendm) > 0) {
                        foreach ($tendm as $tdm) {
                            echo '      
                            <a href="index.php?act=product&id=' . $tdm['iddm'] . '">' . $tdm['tendm'] . '</a>
                        </li>
                <i class="bi bi-chevron-right"></i>
                <li class="main__top--ul--li">
                ' . $tdm['tensp'] . '
                </li>
                ';
                        }
                    }
                    ?>
            </ul>
        </div>
        <div class="main__body">
            <div class="main__body--head">
                <?php
                if (isset($kq) && count($kq) > 0) {
                    foreach ($kq as $sp) {
                        echo '   
                <div class="main__body--head--img">
                    <img src="' . $sp['img'] . '" alt="">
                </div>
                <div class="main__body--head--detail">
                    <div class="main__body--head--detail--name">
                    ' . $sp['tensp'] . '
                    </div>
                    <div class="main__body--head--detail--quality">
                        <ul class="main__body--head--detail--quality--ul">
                            <li class="main__body--head--detail--quality--ul--li">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </li>
                            <li class="main__body--head--detail--quality--ul--li">
                                15.7 <span>Đã bán</span>
                            </li>
                            <li class="main__body--head--detail--quality--ul--li">
                                ' . $sp['view'] . ' <span>Lượt xem</span>
                            </li>
                            <li class="main__body--head--detail--quality--ul--li">
                                4.5k <span>Đánh giá</span>
                            </li>
                        </ul>
                    </div>
                    <div class="main__body--head--detail--price">
                        <ul class="main__body--head--detail--price--ul">
                            <li class="main__body--head--detail--price--ul--li">
                                <del>' . number_format($sp['dongia']) . '</del>
                            </li>
                            <li class="main__body--head--detail--price--ul--li">
                            ' . number_format(
                            ($sp['dongia'] - ($sp['dongia'] * ($sp['giamgia'] / 100)))
                        ) . '
                            </li>
                            <li class="main__body--head--detail--price--ul--li">
                                <button>' . $sp['giamgia'] . '%</button>
                            </li>
                        </ul>
                    </div>
                    <div class="main__body--head--detail--delivery">
                        <div class="main__body--head--detail--delivery--left">
                            Vận Chuyển
                        </div>
                        <div class="main__body--head--detail--delivery--right--ul--li--icon">
                            <i class="bi bi-truck"></i>
                        </div>
                        <div class="main__body--head--detail--delivery--right">
                            <ul class="main__body--head--detail--delivery--right--ul">

                                <li class="main__body--head--detail--delivery--right--ul--li">
                                    <div class="main__body--head--detail--delivery--right--ul--li--delivery">
                                        Vận chuyển tới
                                    </div>
                                    <button class="main__body--head--detail--delivery--right--ul--li--location">
                                        Quang Trung, Quận Gò Vấp <i class="bi bi-chevron-down"></i>
                                    </button>
                                </li>
                                <li class="main__body--head--detail--delivery--right--ul--li">
                                    <div class="main__body--head--detail--delivery--right--ul--li--delivery">
                                        Phí Vận Chuyển
                                    </div>
                                    <button class="main__body--head--detail--delivery--right--ul--li--location">
                                        31.000đ <i class="bi bi-chevron-down"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <form action="index.php?act=themgio&id=' . $sp['id'] . '" method="post">
                    <div class="main__body--head--detail--quantity">
                        <div class="main__body--head--detail--quantity--title">
                            Số lượng
                        </div>
                        <div class="main__body--head--detail--quantity--number">
                            <input class="main__body--head--detail--quantity--number--input" type="number" name="" id="" value="1" min="1" max="100">
                        </div>
                    </div>
                    <div class="main__body--head--detail--button">
                            <input class="main__body--head--detail--button--buy" name="addsp" type="submit" value="Mua ngay">
                            <input class="main__body--head--detail--button--add" name="addsp" type="submit" value="Thêm vào giỏ hàng">
                            </form>
                    </div>
                    </div>
            </div>
            
            <div class="main__body--body">
                <p>MÔ TẢ VỀ SẢN PHẨM</p>
                <div class="main__body--body--form">
                ' . $sp['mota'] . '
                </div>
            </div>


            <form action="index.php?act=comment&id=' . $sp['id'] . '" method="post">
                <div class="main__body--body">';
                    }
                }
                ?>
                <p>BÌNH LUẬN VỀ SẢN PHẨM</p>
                <div class="main__body--body--form">
                    <textarea id="comment" name="comment" rows="4" required placeholder="Bình luận của bạn"></textarea>
                    <br>
                    <input class="main__body--body--form--input" name="gui" type="submit" value="Gửi">
                </div>
                <?php
                if (isset($blkh) && count($blkh) > 0) {
                    foreach ($blkh as $bl) {
                        echo '
                <div class="main__body--body--conment">
                    <div class="main__body--body--conment--info">
                        <div class="main__body--body--conment--info--avt">
                            <img class="main__body--body--conment--info--avt--img" src="' . $bl['img'] . '" alt="">
                        </div>
                        <div class="main__body--body--conment--info--name">
                            <div class="main__body--body--conment--info--name--name">
                            ' . $bl['ten'] . '
                            </div>
                            <div class="main__body--body--conment--info--name--day">
                            ' . $bl['ngaybl'] . '
                            </div>
                        </div>
                    </div>
                    <div class="main__body--body--conment--content">
                    ' . $bl['noidung'] . '
                    </div>
                </div>';
                    }
                }
                ?>
            </div>
            </form>
            <div class="main__body--body">
                <p>SẢN PHẨM TƯƠNG TỰ</p>
                <div class="main__body--body--form">
                    <div class="main__product--show">
                        <?php
                        $id = $_GET['id'];
                        $dmsp = getone_sp($id);
                        $iddmsp = $dmsp[0]['iddm'];
                        $kqdm = getall_sp($iddmsp);
                        if (isset($kqdm) && count($kqdm) > 0) {
                            foreach ($kqdm as $sp) {
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
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div> ';
    </div>
</article>
<style>
    .main__body--head--detail--button {
        display: flex;
        margin-top: 20px;
        gap: 30px;
    }
</style>