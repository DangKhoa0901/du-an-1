</div>
</header>
<article>
    <div class="contentcart">
        <div class="contentcart__table">
            <div class="contentcart__table-head contentcart__table-row">
                <div class="contentcart__table-head-item item__check"><input type="checkbox" name="click" id="">
                </div>
                <div class="contentcart__table-head-item item__name">Tên sản phẩm</div>
                <div class="contentcart__table-head-item item__img">Hình ảnh</div>
                <div class="contentcart__table-head-item item__price">Đơn giá</div>
                <div class="contentcart__table-head-item item__quanlity">Số lượng</div>
                <div class="contentcart__table-head-item item__toltal">Thành tiền</div>
                <div class="contentcart__table-head-item item__action">Thao tác</div>
            </div>
            <?php
            if (isset($kq) && count($kq) > 0) {
                foreach ($kq as $sp) {
                    echo '                
                <div class="contentcart__table-body contentcart__table-row">
                    <div class="contentcart__table-head-item body-item item__check">
                        <input type="checkbox" name="click" id="">
                    </div>
                    <div class="contentcart__table-head-item body-item item__name">
                    ' . $sp['tensp'] . '
                    </div>
                    <div class="contentcart__table-head-item body-item item__img">
                        <img src="' . $sp['img'] . '" alt="">
                    </div>
                    <div class="contentcart__table-head-item body-item item__price">' . $sp['dongia'] . '</div>
                    <div class="contentcart__table-head-item body-item item__quanlity">
                        <input type="number" name="soluong" id="" value="' . $sp['soluong'] . '" min="1" max="100">
                    </div>
                    <div class="contentcart__table-head-item body-item item__toltal">' . number_format($sp['dongia'] * $sp['soluong']) . '</div>
                    <div class="contentcart__table-head-item body-item item__action">
                    <a href="index.php?act=deletecart&id='.$sp['id'].'">
                    <i class="bi bi-trash3"></i></a>
                    </div>
                </div>';
                }
            }
            ?>
        </div>
        <div class="contentcart__pay">
            <div class="contentcart__pay-item">
                <div class="contentcart__pay-continue">
                    <a href=""><button>Tiếp tục mua hàng</button></a>
                </div>
                <div class="contentcart__pay-img">
                    <img style="width: 50px; " src="" alt="">
                </div>
                <div class="contentcart__pay-name">

                </div>
                <div class="contentcart__pay-total">
                </div>
                <input type="submit" value="Mua hàng">
            </div>
        </div>
    </div>
</article>
<script>
    // Function to update the selected product in contentcart__pay
    function updateSelectedProduct() {
        var selectedProducts = [];

        // Loop through all the checkboxes
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        checkboxes.forEach(function(checkbox, index) {
            if (checkbox.checked) {
                // Get product details from the corresponding row
                var row = checkbox.closest('.contentcart__table-row');
                var productName = row.querySelector('.item__name').textContent.trim();
                var productImage = row.querySelector('.item__img img').getAttribute('src');
                var productTotal = parseInt(row.querySelector('.item__toltal').textContent.replace(/\D/g, ''));

                // Store selected product details
                selectedProducts.push({
                    name: productName,
                    image: productImage,
                    total: productTotal,
                });
            }
        });

        // Update the selected product details in contentcart__pay
        var payImgElement = document.querySelector('.contentcart__pay-img img');
        var payNameElement = document.querySelector('.contentcart__pay-name');
        var payTotalElement = document.querySelector('.contentcart__pay-total');

        if (selectedProducts.length > 0) {
            // Display the details of the first selected product
            var firstSelectedProduct = selectedProducts[0];
            payImgElement.setAttribute('src', firstSelectedProduct.image);
            payNameElement.textContent = firstSelectedProduct.name;
            payTotalElement.textContent = firstSelectedProduct.total.toLocaleString() + ' đ';
        } else {
            // No product selected, clear the content
            payImgElement.setAttribute('src', 'style= "display: none;"','');
            payNameElement.textContent = '';
            payTotalElement.textContent = '';
        }
    }

    // Attach an event listener to all checkboxes to call the updateSelectedProduct function when checked
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach(function(checkbox, index) {
        checkbox.addEventListener('change', function() {
            updateSelectedProduct();
        });
    });
</script>