<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['active' => false, 'title' => '']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['active' => false, 'title' => '']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="relative" x-data="{ open: <?php echo json_encode($active, 15, 512) ?> }">
    <?php if (isset($component)) { $__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.link','data' => ['collapsible' => true,'title' => ''.e($title).'','@click' => 'open = !open','isActive' => ''.e($active).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['collapsible' => true,'title' => ''.e($title).'','@click' => 'open = !open','isActive' => ''.e($active).'']); ?>
        <?php if($icon ?? false): ?>
         <?php $__env->slot('icon', null, []); ?> 
            <?php echo e($icon); ?>

         <?php $__env->endSlot(); ?>
        <?php endif; ?>
        <?php if($add ?? false): ?>
         <?php $__env->slot('add', null, []); ?> 
            <?php echo e($add); ?>

         <?php $__env->endSlot(); ?>
        <?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488)): ?>
<?php $attributes = $__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488; ?>
<?php unset($__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488)): ?>
<?php $component = $__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488; ?>
<?php unset($__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488); ?>
<?php endif; ?>
    
    <div class="px-4 py-2" x-show="open && (isSidebarOpen || isSidebarHovered)" x-collapse>
        <ul class="text-sm font-medium">
            <?php echo e($slot); ?>

        </ul>
    </div>
</div><?php /**PATH F:\gerenciar-app\Gerenciar\resources\views/components/sidebar/dropdown.blade.php ENDPATH**/ ?>