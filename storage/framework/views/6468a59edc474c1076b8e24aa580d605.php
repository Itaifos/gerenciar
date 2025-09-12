<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['for', 'value', 'required' => false, 'tooltip' => null]));

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

foreach (array_filter((['for', 'value', 'required' => false, 'tooltip' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
    $requiredClasses = 'text-red-500';
    $requiredLabel = '*';
?>

<label for="<?php echo e($for); ?>" <?php echo e($attributes->merge(['class' => 'block font-bold text-sm text-gray-700 mt-2'])); ?>>
    <?php echo e($value ?? $slot); ?>


    <?php if($required): ?>
        <span class="<?php echo e($requiredClasses); ?>"><?php echo e($requiredLabel); ?></span>
    <?php endif; ?>

    <?php if($tooltip): ?>
    <i class="fas fa-info-circle text-red-400 ml-1" data-toggle="tooltip" data-placement="top" title="<?php echo e($tooltip); ?>"></i>
    <?php endif; ?>
</label>
<?php /**PATH F:\gerenciar-app\Gerenciar\resources\views/components/label.blade.php ENDPATH**/ ?>