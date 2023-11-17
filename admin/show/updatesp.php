<div class="box-right__main">
    <div class="box-right__main-table">
        <div class="box-right__main-table-form">
            <form class="form" action="index.php?act=sanpham_update" method="post" enctype="multipart/form-data">
                <h2 style="text-align: center;">Cập nhật sản phẩm</h2>
                <div class="form__total">
                    <div class="form__total-1">
                        <div class="form__total-1-div-name">
                            Danh mục
                        </div>
                        <select class="box-right__main-table-form-input box-right__main-table-form-select" name="iddm" id="">
                            <option value="0">Chọn danh mục</option>
                            <?php
                            $iddmht = $spct[0]['iddm'];
                            if (isset($dsdm)) {
                                foreach ($dsdm as $dm) {
                                    if ($dm['id'] == $iddmht) {
                                        echo '<option value="' . $dm['id'] . '" selected>' . $dm['tendm'] . '</option>';
                                    } else {
                                        echo '<option value="' . $dm['id'] . '">' . $dm['tendm'] . '</option>';
                                    }
                                }
                            }
                            ?>
                        </select>
                        <div class="form__total-1-div">
                            <div class="form__total-1-div-name">Tên sản phẩm</div>
                            <input class="box-right__main-table-form-input" type="text" name="tensp" id="" value="<?= $spct[0]['tensp'] ?>">
                        </div>
                        <div class="form__total-1-div">
                            <div class="form__total-1-div-name">Hình ảnh</div>
                            <img class="img" src="<?= $spct[0]['img'] ?>" width="100px" alt="">
                            <input type="file" id="file" name="img" />
                            <label for="file" class="btn-2">upload</label>
                        </div>
                        <div class="form__total-1-div">
                            <div class="form__total-1-div-name">
                                Đơn Giá
                            </div>
                            <input class="box-right__main-table-form-input gia" type="text" name="dongia" id="" placeholder="Nhập giá sản phẩm" value="<?= $spct[0]['dongia'] ?>">
                            <input type="hidden" name="id" value="<?= $spct[0]['id'] ?>">
                        </div>
                    </div>
                    <div class="form__total-2">
                        <div class="form__total-1-div">
                            <div class="form__total-1-div-name">
                                Giảm giá
                            </div>
                            <input class="box-right__main-table-form-input" type="number" name="giamgia" id="" placeholder="Nhập giảm giá" value="<?= $spct[0]['giamgia'] ?>" min="0" max="100">
                        </div>
                        <div class="form__total-1-div">
                            <div class="form__total-1-div-name">
                                Mô tả sản phẩm
                            </div>
                            <textarea class="box-right__main-table-form-input" name="mota" id="" cols="30" rows="10"><?= $spct[0]['mota'] ?></textarea>
                        </div>
                        <div class="form__total-1-div">
                            <div class="form__total-1-div-name">
                                Ngày đăng
                            </div>
                            <input class="box-right__main-table-form-input" type="date" name="ngay" id="" value="<?= $spct[0]['ngay'] ?>">
                        </div>
                    </div>
                </div>
                <input type="submit" name="capnhat" value="Cập nhật" class="box-right__main-table-form-submit">
            </form>
        </div>
        <div class="box-right__main-table-header">
            <div class="box-right__main-table-header-item">
                Tên sản phẩm
            </div>
            <div class="box-right__main-table-header-item">
                Hình ảnh
            </div>
            <div class="box-right__main-table-header-item">
                Gía bán
            </div>
            <div class="box-right__main-table-header-item">
                Mô tả
            </div>
            <div class="box-right__main-table-header-item">
                Danh mục
            </div>
            <div class="box-right__main-table-header-item">
                Ngày
            </div>

        </div>
        <?php
        if (count($kq) > 0) {
            foreach ($kq as $item) {
                echo '
            <div class="box-right__main-table-header table__body">
                <div class="box-right__main-table-header-item">
                ' . $item['tensp'] . '
                </div>
                <div class="box-right__main-table-header-item">
                    <img class="box-right__main-table-header-item-img" src="' . $item['img'] . '" alt="">
                </div>
                <div class="box-right__main-table-header-item">
                ' . number_format($item['dongia']) . '
                </div>
                <div class="box-right__main-table-header-item">
                ' . $item['mota'] . '
                </div>
                <div class="box-right__main-table-header-item">
                ' . $item['tendm'] . ' <!-- Hiển thị tên danh mục thay vì id danh mục -->
                </div>
                <div class="box-right__main-table-header-item">
                ' . $item['ngay'] . '
                </div>
                <div class="box-right__main-table-header-item item__icon">
                    <a href="index.php?act=updatesp&id=' . $item['id'] . '"><i class="item__icon-edit fa-solid fa-pen"></i></a> 
                    <a href="index.php?act=deletesp&id=' . $item['id'] . '"><i class="item__icon-edit fa-solid fa-trash"></i></a>
                    
                </div>
            </div> 
            ';
            }
        }
        ?>

    </div>
</div>
</div>
</div>
<style>
    .box-right__main-table-form-select {
        padding: 10px 20px;
        width: 97%;
        outline: none;
        color: black;
    }

    .form__total {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
        margin-bottom: 20px;
    }

    .box-right__main-table-form>form {
        max-width: 90%;
        margin: 0 auto;
        color: black;
    }

    .textarea {
        margin-top: 0;
        padding-bottom: 20px;
    }

    .img {
        width: 100px;
        height: 100px;
        margin-top: 10px;
    }

    .form__total-1-div-name {
        background-color: #F13D3E;
        width: 90%;
        padding: 10px;
        margin-top: 20px;
    }
    /* input.box-right__main-table-form-input.gia {
        transform: translateY(-65px);
    } */
</style>