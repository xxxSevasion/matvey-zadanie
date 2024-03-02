<?php \ProtoneMedia\Splade\Facades\SEO::title(__('Новая заявка')); ?>

<?php if (isset($component)) { $__componentOriginal4619374cef299e94fd7263111d0abc69 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4619374cef299e94fd7263111d0abc69 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app-layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <?php echo e(__('Новый отзыв')); ?>

            </h2>
            <a href="<?php echo e(route('block.index')); ?>" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center"><?php echo e(__('Посмотреть все заявки')); ?></a>
        </div>
    <?php $__env->endSlot(); ?>
        <div class="my-4 p-4 bg-white max-w-4xl mx-auto rounded-md">
            <?php if (isset($component)) { $__componentOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Form::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => ''.e(route('block.store')).'']); ?>

                <?php if (isset($component)) { $__componentOriginal8a09b4fbcafa220e62e8b6be607afce2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a09b4fbcafa220e62e8b6be607afce2 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Textarea::resolve(['name' => 'text','label' => ''.e(__('Отзыв')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Form\Textarea::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => ''.e(__('Картинка')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a09b4fbcafa220e62e8b6be607afce2)): ?>
<?php $attributes = $__attributesOriginal8a09b4fbcafa220e62e8b6be607afce2; ?>
<?php unset($__attributesOriginal8a09b4fbcafa220e62e8b6be607afce2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a09b4fbcafa220e62e8b6be607afce2)): ?>
<?php $component = $__componentOriginal8a09b4fbcafa220e62e8b6be607afce2; ?>
<?php unset($__componentOriginal8a09b4fbcafa220e62e8b6be607afce2); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal4cd41e82379e83253fe439725f650e27 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4cd41e82379e83253fe439725f650e27 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\File::resolve(['name' => 'img','label' => ''.e(__('Картинка ')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Form\File::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4cd41e82379e83253fe439725f650e27)): ?>
<?php $attributes = $__attributesOriginal4cd41e82379e83253fe439725f650e27; ?>
<?php unset($__attributesOriginal4cd41e82379e83253fe439725f650e27); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4cd41e82379e83253fe439725f650e27)): ?>
<?php $component = $__componentOriginal4cd41e82379e83253fe439725f650e27; ?>
<?php unset($__componentOriginal4cd41e82379e83253fe439725f650e27); ?>
<?php endif; ?>









                <?php if (isset($component)) { $__componentOriginal10476663a3271f48a2be05c903a73050 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal10476663a3271f48a2be05c903a73050 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Select::resolve(['name' => 'isActive','label' => ''.e(__('Статус услуги')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Form\Select::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <option value="0"><?php echo e(__('Не активен')); ?></option>
                    <option value="1"><?php echo e(__('Активен')); ?></option>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal10476663a3271f48a2be05c903a73050)): ?>
<?php $attributes = $__attributesOriginal10476663a3271f48a2be05c903a73050; ?>
<?php unset($__attributesOriginal10476663a3271f48a2be05c903a73050); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal10476663a3271f48a2be05c903a73050)): ?>
<?php $component = $__componentOriginal10476663a3271f48a2be05c903a73050; ?>
<?php unset($__componentOriginal10476663a3271f48a2be05c903a73050); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginal2d975ce603f483bebe2dbee59a477e99 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2d975ce603f483bebe2dbee59a477e99 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Submit::resolve(['label' => 'Сохранить'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-submit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Form\Submit::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2d975ce603f483bebe2dbee59a477e99)): ?>
<?php $attributes = $__attributesOriginal2d975ce603f483bebe2dbee59a477e99; ?>
<?php unset($__attributesOriginal2d975ce603f483bebe2dbee59a477e99); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2d975ce603f483bebe2dbee59a477e99)): ?>
<?php $component = $__componentOriginal2d975ce603f483bebe2dbee59a477e99; ?>
<?php unset($__componentOriginal2d975ce603f483bebe2dbee59a477e99); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a)): ?>
<?php $attributes = $__attributesOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a; ?>
<?php unset($__attributesOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a)): ?>
<?php $component = $__componentOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a; ?>
<?php unset($__componentOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a); ?>
<?php endif; ?>
        </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4619374cef299e94fd7263111d0abc69)): ?>
<?php $attributes = $__attributesOriginal4619374cef299e94fd7263111d0abc69; ?>
<?php unset($__attributesOriginal4619374cef299e94fd7263111d0abc69); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4619374cef299e94fd7263111d0abc69)): ?>
<?php $component = $__componentOriginal4619374cef299e94fd7263111d0abc69; ?>
<?php unset($__componentOriginal4619374cef299e94fd7263111d0abc69); ?>
<?php endif; ?>
<?php /**PATH C:\OSPanel\domains\matvey-zadanie\matvey-zadanie\resources\views/admin/block/create.blade.php ENDPATH**/ ?>