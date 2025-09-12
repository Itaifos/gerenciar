<?php if (isset($component)) { $__componentOriginal49f213dd03064ea9fc6a2ba054f2b8a2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal49f213dd03064ea9fc6a2ba054f2b8a2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.overlay','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.overlay'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal49f213dd03064ea9fc6a2ba054f2b8a2)): ?>
<?php $attributes = $__attributesOriginal49f213dd03064ea9fc6a2ba054f2b8a2; ?>
<?php unset($__attributesOriginal49f213dd03064ea9fc6a2ba054f2b8a2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal49f213dd03064ea9fc6a2ba054f2b8a2)): ?>
<?php $component = $__componentOriginal49f213dd03064ea9fc6a2ba054f2b8a2; ?>
<?php unset($__componentOriginal49f213dd03064ea9fc6a2ba054f2b8a2); ?>
<?php endif; ?>

<aside class="fixed inset-y-0 z-20 flex flex-col py-2 space-y-6 bg-white shadow-lg"
    :class="{
        'translate-x-0 w-64': isSidebarOpen || isSidebarHovered,
        'w-16 translate-x-0 hidden lg:block': !isSidebarOpen && !isSidebarHovered,
        '-translate-x-full w-64 md:w-16 md:translate-x-0 ': !isSidebarOpen && !isSidebarHovered,
    }"
    style="transition-property: width, transform; transition-duration: 150ms;" @mouseenter="handleSidebarHover(true)"
    @mouseleave="handleSidebarHover(false)">
    <?php if (isset($component)) { $__componentOriginal8c0faf3532633da579f7f088b4f64ac2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8c0faf3532633da579f7f088b4f64ac2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8c0faf3532633da579f7f088b4f64ac2)): ?>
<?php $attributes = $__attributesOriginal8c0faf3532633da579f7f088b4f64ac2; ?>
<?php unset($__attributesOriginal8c0faf3532633da579f7f088b4f64ac2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8c0faf3532633da579f7f088b4f64ac2)): ?>
<?php $component = $__componentOriginal8c0faf3532633da579f7f088b4f64ac2; ?>
<?php unset($__componentOriginal8c0faf3532633da579f7f088b4f64ac2); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginale743b875282f4494cf3ddd8b43cf9412 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale743b875282f4494cf3ddd8b43cf9412 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.content','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale743b875282f4494cf3ddd8b43cf9412)): ?>
<?php $attributes = $__attributesOriginale743b875282f4494cf3ddd8b43cf9412; ?>
<?php unset($__attributesOriginale743b875282f4494cf3ddd8b43cf9412); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale743b875282f4494cf3ddd8b43cf9412)): ?>
<?php $component = $__componentOriginale743b875282f4494cf3ddd8b43cf9412; ?>
<?php unset($__componentOriginale743b875282f4494cf3ddd8b43cf9412); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal890b81d1fccff888f155ef507bc9e6b7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal890b81d1fccff888f155ef507bc9e6b7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal890b81d1fccff888f155ef507bc9e6b7)): ?>
<?php $attributes = $__attributesOriginal890b81d1fccff888f155ef507bc9e6b7; ?>
<?php unset($__attributesOriginal890b81d1fccff888f155ef507bc9e6b7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal890b81d1fccff888f155ef507bc9e6b7)): ?>
<?php $component = $__componentOriginal890b81d1fccff888f155ef507bc9e6b7; ?>
<?php unset($__componentOriginal890b81d1fccff888f155ef507bc9e6b7); ?>
<?php endif; ?>
</aside><?php /**PATH F:\gerenciar-app\Gerenciar\resources\views/components/sidebar/sidebar.blade.php ENDPATH**/ ?>