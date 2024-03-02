<?php
    $setting = App\Models\Setting::find(1);
?>
<header data-aos="fade-down" data-aos-duration="800" class="header">
    <div class="header__container container">
        <div class="header__inner">

            <img src="<?php echo e(Storage::url($setting->logo_img)); ?>" alt="" class="navbar__logo-img">

            <div class="navbar__btn-block-section">
                <div class="navbar__menu-btn">
                    <span class="navbar__menu-btn-line"></span>
                    <span class="navbar__menu-btn-line"></span>
                    <span class="navbar__menu-btn-line"></span>
                </div>
            </div>

            <menu class="header__navbar-list navbar">
                <li class="navbar__item"><a href="#part1 " class="navbar__link">Главная</a></li>
                <li class="navbar__item"><a href="#part2 " class="navbar__link">Разделы</a></li>
                <li class="navbar__item"><a href="#part3 " class="navbar__link">О нас</a></li>
            </menu>

        </div>
    </div>
</header>
<?php /**PATH C:\OSPanel\domains\matvey-zadanie\matvey-zadanie\resources\views/client/include/header.blade.php ENDPATH**/ ?>