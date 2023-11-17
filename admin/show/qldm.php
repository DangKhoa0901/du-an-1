<div class="box-right__main">
    <div class="box-right__main-table">
        <div class="box-right__main-table-form">
            <form action="index.php?act=adddm" method="post" enctype="multipart/form-data">
                <span>Tên danh mục:</span>
                <input class="box-right__main-table-form-input" type="text" name="tendm" id=""> <br><br>
                <span>Hình ảnh</span>
                <input type="file" id="file" name="img" />
                <label for="file" class="btn-2">upload</label> <br> <br>
                <input class="box-right__main-table-form-submit" type="submit" name="themmoi" value="Thêm mới">
            </form>
        </div>
        <div class="box-right__main-table-header tabel__header-library">
            <div class="box-right__main-table-header-item tabel__header-library-item">
                Tên danh mục
            </div>
            <div class="box-right__main-table-header-item tabel__header-library-item">
                Hình ảnh
            </div>
            <div class="box-right__main-table-header-item tabel__header-library-item">
                Trạng thái
            </div>
        </div>

        <!-- table body -->
        <?php
        // var_dump($kq);
        if (isset($kq) && count($kq) > 0) {
            $i = 1;
            foreach ($kq as $dm) {
                echo '

        <div class="box-right__main-table-header tabel__header-library table__body">
            <div class="box-right__main-table-header-item tabel__header-library-item">
            ' . $dm['tendm'] . '
            </div>
            <div class="box-right__main-table-header-item">
                <img class="box-right__main-table-header-item-img" src="' . $dm['img'] . '" alt="">
            </div>
            <div class="box-right__main-table-header-item">
                Đang bán
            </div>
            <div class="box-right__main-table-header-item item__icon">
                <a href="index.php?act=delete&id=' . $dm['id'] . '">
                    <i class="item__icon-edit fa-solid fa-trash"></i>
                </a>
                <a href="index.php?act=updatedm&id='.$dm['id'].'">
                    <i class="item__icon-edit fa-solid fa-pen"></i>               
                </a> 
            </div>
        </div>
                        ';
            }
        }

        ?>
        <!-- <div class="box-right__main-table-header tabel__header-library table__body">
            <div class="box-right__main-table-header-item tabel__header-library-item">
                Điện tử
            </div>
            <div class="box-right__main-table-header-item">
                <img class="box-right__main-table-header-item-img" src="https://lzd-img-global.slatic.net/g/p/b9f1db73ada9178785a401f4a49edc00.jpg_200x200q80.jpg_.webp" alt="">
            </div>
            <div class="box-right__main-table-header-item">
                Đang bán
            </div>
            <div class="box-right__main-table-header-item item__icon">
                <i class="item__icon-edit fa-solid fa-pen"></i>
                <i class="item__icon-edit fa-solid fa-trash"></i>
                <i class="item__icon-edit fa-solid fa-plus"></i>
            </div>
        </div> -->
    </div>
</div>