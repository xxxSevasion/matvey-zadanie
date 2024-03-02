<?php
    $setting = App\Models\Setting::find(1);
?>



<?php $__env->startSection('title'); ?> <?php echo e(__('Главная страница')); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <section data-aos="fade-down" data-aos-duration="800" class="hero">
        <div class="hero__container container">
            <div class="hero__inner">

                <div class="hero__item-text-section">
                    <div class="hero__item-text-section-inner">
                        <h1 data-aos="fade-right" data-aos-duration="800"  class="hero__title"><?php echo e($setting->welcome_text); ?>!</h1>
                    </div>
                </div>

                <div data-aos="fade-left" data-aos-duration="800"  class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="<?php echo e(asset('/assets/images/palais-des-papes-4164657_1280 2.png')); ?>" alt="" class="swiper-slide__img"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="part1"  class="painting">
        <div class="painting__container container">
            <div class="painting__inner">

                <?php $__empty_1 = true; $__currentLoopData = $blocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $block): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="painting__item">
                        <div class="painting__item-img-section">
                            <img src="<?php echo e(Storage::url( $block->img )); ?>" alt="" class="painting__item-img">
                        </div>
                        <p class="painting__item-text"><?php echo e($block->text); ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <?php endif; ?>

            </div>
        </div>
    </section>

    <section id="part2" class="provodnic">
        <div class="provodnic__container container">
            <div class="provodnic__inner">

                <div class="provodnic__item">

                    <div class="provodnic__img-section">
                        <img src="<?php echo e(asset('/assets/images/tima 1 1.png')); ?>" alt="" class="provodnic__img">
                    </div>
                </div>

                <div class="provodnic__item provodnic__item-text">
                    <div class="provodnic__text-sction">

                        <p class="provodnic__text-decr"><?php echo e($setting->conductor_text); ?></p>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="dog">
        <div class="dog__container container">
            <div class="dog__inner">

                <div class="dog__item-text">
                    <p class="dog__item-text-desc">
                        <?php echo e($setting->musem_text); ?>

                    </p>
                </div>

                <div class="dog__item-img-section">
                    <img src="<?php echo e(asset('/assets/images/pla-a-del-rei 1.png')); ?>" alt="" class="dog__item-img">
                </div>

            </div>
        </div>
    </section>

    <section id="part3" class="onis">
        <div class="onis__container container">
            <div class="onis__inner">
                <p class="onis__text">  <?php echo e($setting->pred_footer_text); ?></p>
            </div>
        </div>
    </section>

    <!-- scr -->
    <section id="button-uptogo" class="uptogo">
        <i class='bx bxs-chevron-up'></i>
    </section>


    <div class="aos">
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\matvey-zadanie\matvey-zadanie\resources\views/client/index.blade.php ENDPATH**/ ?>