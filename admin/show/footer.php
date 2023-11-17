</body>

</html>
<script>
    function toggleSubMenu(liElement) {
        const subMenu = liElement.querySelector('.box-left__menu-ul-li-menu2');
        const chevronIcon = liElement.querySelector('.fa-solid .fa-chevron-down');

        if (subMenu.style.display === 'block') {
            subMenu.style.display = 'none';
            chevronIcon.classList.remove('fa-chevron-up');
            chevronIcon.classList.add('fa-chevron-down');
        } else {
            subMenu.style.display = 'block';
            chevronIcon.classList.remove('fa-chevron-down');
            chevronIcon.classList.add('fa-chevron-up');
        }
    }

        //   ..............................    
    const containerBoxLeft = document.querySelector('.custom-sticky');

    window.addEventListener('scroll', () => {
        const containerBoxLeftRect = containerBoxLeft.getBoundingClientRect();
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        // Kiểm tra khi container__box-left tiếp xúc với đỉnh màn hình
        if (containerBoxLeftRect.top <= 0) {
            containerBoxLeft.style.position = 'fixed';
            containerBoxLeft.style.top = '0';
        } else {
            containerBoxLeft.style.position = 'static';
        }
    });
</script>