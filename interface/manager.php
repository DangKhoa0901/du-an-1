</div>
</header>
<div class="content">
    <div class="content__container">
        <div class="content__container-left">
            <div class="content__container-left-top">
                <img src="<?= $kq[0]['img'] ?>" alt="" class="content__container-left-top-img">
                <div class="content__container-left-top-name">
                    <span class="content__container-left-top-name-span"><?= $kq[0]['ten'] ?></span>
                    <div class="content__container-left-top-name-icon">
                        <i class="bi bi-pen"></i> Sửa tài khoản
                    </div>

                </div>
            </div>
            <div class="content__container-left-content">
                <ul class="content__container-left-content-ul">
                    <li class="content__container-left-content-ul-li">
                        <a href="" class="content__container-left-content-ul-li-a">
                            <i class="content__container-left-content-ul-li-a-icon  
                                bi bi-person"></i> Tài khoản của tôi
                        </a>
                    </li>
                    <li class="content__container-left-content-ul-li">
                        <a href="" class="content__container-left-content-ul-li-a">
                            <i class="content__container-left-content-ul-li-a-icon  
                                bi bi-bag"></i> Đơn hàng
                        </a>
                    </li>
                    <li class="content__container-left-content-ul-li">
                        <a href="" class="content__container-left-content-ul-li-a">
                            <i class="content__container-left-content-ul-li-a-icon  
                                bi bi-bell"></i> Thông báo
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content__container-right">
            <div class="content__container-right-top">
                <div class="content__container-right-top-p">
                    Hồ Sơ Của Tôi
                </div>
                <div class="content__container-right-top-span">
                    Quản lý thông tin hồ sơ để bảo mật tài khoản
                </div>
            </div>
            <form action="index.php?act=updatetk" method="post" enctype="multipart/form-data">
                <div class="content__container-right-main">
                    <div class="content__container-right-main-table">
                        <table>
                            <tr>
                                <td>
                                    Tên đăng nhập
                                </td>
                                <td class="content__container-right-main-table-tr-td2">
                                    <input type="text" name="name" value="<?= $kq[0]['ten'] ?>">
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    Email
                                </td>
                                <td class="content__container-right-main-table-tr-td2">
                                    <input type="email" name="email" id="" value="<?= $kq[0]['email'] ?>">

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Địa chỉ
                                </td>
                                <td class="content__container-right-main-table-tr-td2">
                                    <input type="text" name="diachi" value="<?= $kq[0]['diachi'] ?>">
                                </td>
                            </tr>
                        </table>
                        <input class="submit" type="submit" name="luu" value="Lưu" onclick="showNotification()">
                    </div>
                    <div class="content__container-right-main-updateimg">
                        <img class="content__container-right-main-updateimg-img" src="<?= $kq[0]['img'] ?>" alt="">
                        <input type="file" id="file" name="img" />
                        <label for="file" class="btn-2">Chọn ảnh</label>
                    </div>

                </div>
            </form>
            <div class="notification" id="notification"><i class="bi bi-check2-all"></i> Thay đổi đã được lưu!</div>
        </div>
    </div>
</div>
<script>
    function showNotification() {
        const notification = document.getElementById('notification');
        notification.style.display = 'block';

        setTimeout(() => {
            notification.style.display = 'none';
        }, 3000); // 3 giây sau đó thông báo sẽ tự động ẩn đi
    }
</script>
<style>
    .content__container-right-main-table-tr-td2>input {
        width: 90%;
        padding: 10px 20px;
        border: none;
        background: rgb(255 255 255);
        outline: none;
    }
</style>