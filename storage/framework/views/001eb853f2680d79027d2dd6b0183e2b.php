<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title' => '', 'active' => false, 'collapsible' => false, 'icon' => null]));

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

foreach (array_filter((['title' => '', 'active' => false, 'collapsible' => false, 'icon' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
$isActiveClasses = $active
    ? 'bg-indigo-500 text-white active:bg-indigo-500'
    : 'text-gray-500 font-bold hover:text-gray-700 hover:bg-gray-100';
$classes = 'flex items-center hover:text-white hover:bg-indigo-500 py-3 pr-4 rounded ' . $isActiveClasses;
if ($collapsible) {
    $classes .= ' w-full';
}
?>

<?php if($collapsible): ?>
    <button type="button" <?php echo e($attributes->merge(['class' => $classes])); ?>>
        <?php if($icon): ?>
            <?php echo e($icon); ?>

        <?php else: ?>
            <span class="inline-block mx-4">
                <?php if (isset($component)) { $__componentOriginal46edf475024f0befb3cd44ca68eeb4fd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal46edf475024f0befb3cd44ca68eeb4fd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.empty-circle','data' => ['class' => 'text-gray-200 w-5 h-5','ariaHidden' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icons.empty-circle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-gray-200 w-5 h-5','aria-hidden' => 'true']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal46edf475024f0befb3cd44ca68eeb4fd)): ?>
<?php $attributes = $__attributesOriginal46edf475024f0befb3cd44ca68eeb4fd; ?>
<?php unset($__attributesOriginal46edf475024f0befb3cd44ca68eeb4fd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal46edf475024f0befb3cd44ca68eeb4fd)): ?>
<?php $component = $__componentOriginal46edf475024f0befb3cd44ca68eeb4fd; ?>
<?php unset($__componentOriginal46edf475024f0befb3cd44ca68eeb4fd); ?>
<?php endif; ?>
            </span>
        <?php endif; ?>

        <span x-show="isSidebarOpen || isSidebarHovered">
            <?php echo e($title); ?>

        </span>

        <span x-show="isSidebarOpen || isSidebarHovered" aria-hidden="true" class="relative block w-6 h-6 ml-auto">
            <span :class="open ? '-rotate-45' : 'rotate-45'"
                class="absolute right-[9px] bg-gray-400 mt-[-5px] h-2 w-[2px] top-1/2 transition-all duration-200"></span>
            <span :class="open ? 'rotate-45' : '-rotate-45'"
                class="absolute left-[9px] bg-gray-400 mt-[-5px] h-2 w-[2px] top-1/2 transition-all duration-200"></span>
        </span>
    </button>
<?php else: ?>
    <a <?php echo e($attributes->merge(['class' => $classes])); ?>>
        <?php if($icon): ?>
            <?php echo e($icon); ?>

        <?php else: ?>
            <span class="inline-block mx-4">
                <?php if (isset($component)) { $__componentOriginal46edf475024f0befb3cd44ca68eeb4fd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal46edf475024f0befb3cd44ca68eeb4fd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.empty-circle','data' => ['class' => 'text-gray-200 w-5 h-5','ariaHidden' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icons.empty-circle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-gray-200 w-5 h-5','aria-hidden' => 'true']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal46edf475024f0befb3cd44ca68eeb4fd)): ?>
<?php $attributes = $__attributesOriginal46edf475024f0befb3cd44ca68eeb4fd; ?>
<?php unset($__attributesOriginal46edf475024f0befb3cd44ca68eeb4fd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal46edf475024f0befb3cd44ca68eeb4fd)): ?>
<?php $component = $__componentOriginal46edf475024f0befb3cd44ca68eeb4fd; ?>
<?php unset($__componentOriginal46edf475024f0befb3cd44ca68eeb4fd); ?>
<?php endif; ?>
            </span>
        <?php endif; ?>

        <span x-show="isSidebarOpen || isSidebarHovered">
            <?php echo e($title); ?>

        </span>
    </a>
<?php endif; ?>
<?php /**PATH F:\gerenciar-app\Gerenciar\resources\views/components/sidebar/sublink.blade.php ENDPATH**/ ?>