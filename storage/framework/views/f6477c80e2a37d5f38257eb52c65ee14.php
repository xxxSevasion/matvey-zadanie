<?php
    $setting = App\Models\Setting::find(1);
    ?>
<footer class="footer">
    <div class="footer__container container">
        <div class="footer__inner">
            <div class="footer__img-section">
                <img  src="<?php echo e(Storage::url($setting->logo_img)); ?>" alt="" class="footer__img">
            </div>
            <div class="footer__number-section">
                <h2>Номер телефона:</h2>
                <p><?php echo e($setting->number); ?></p>
            </div>
            <div class="footer__adres-section">
                <h3>Адрес:</h3>
                <p><?php echo e($setting->address); ?></p>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH C:\OSPanel\domains\matvey-zadanie\matvey-zadanie\resources\views/client/include/footer.blade.php ENDPATH**/ ?>