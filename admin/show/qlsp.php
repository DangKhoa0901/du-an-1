    <div class="box-right__main">
        <div class="box-right__main-table">
            <div class="box-right__main-table-form">
                <form class="form" action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <h2 style="text-align: center;">THÔNG TIN SẢN PHẨM</h2>
                    <div class="form__total">
                        <div class="form__total-1">
                            <select class="box-right__main-table-form-select" name="iddm" id="">
                                <option value="0">Chọn danh mục</option>
                                <?php
                                if (isset($dsdm)) {
                                    foreach ($dsdm as $dm) {
                                        echo '<option value="' . $dm['id'] . '">' . $dm['tendm'] . '</option>';
                                    }
                                }
                                ?>
                            </select>
                            <input class="box-right__main-table-form-input" type="text" name="tensp" id="" placeholder="Nhập tên sản phẩm">

                            <br><br><span>Hình ảnh</span>
                            <input type="file" id="file" name="img" />
                            <label for="file" class="btn-2">upload</label>
                            <input class="box-right__main-table-form-input" type="text" name="dongia" id="" placeholder="Nhập giá sản phẩm">
                            <input class="box-right__main-table-form-input" type="number" name="giamgia" id="" placeholder="Nhập giảm giá" min="0" max="100">
                        </div>
                        <div class="form__total-2">
                            <textarea class="box-right__main-table-form-input textarea" placeholder="Nhập mô tả sản phẩm" name="mota" id="" cols="30" rows="10"></textarea>
                            <input class="box-right__main-table-form-input" type="date" name="ngay" id="">

                        </div>
                    </div>
                    <input class="box-right__main-table-form-submit" type="submit" name="themmoi" value="Thêm mới" class="them">
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
                    Giá bán
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
            width: 90%;
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
            max-width: 93%;
            margin: 0 auto;
            color: black;
        }

        .textarea {
            margin-top: 0;
            padding-bottom: 20px;
        }

        .box-right__main-table-form-select {
            padding: 10px 5px;
            width: 98%;
            outline: none;
        }
    </style>