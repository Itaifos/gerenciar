<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['type' => 'secondary']));

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

foreach (array_filter((['type' => 'secondary']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
    $badgeClasses = [
        'primary' => 'text-white bg-indigo-500 hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring ring-indigo-300',
        'secondary' => 'text-gray-100 bg-gray-500 hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300',
        'info' => 'text-blue-100 bg-blue-500 hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300',
        'success' => 'text-green-100 bg-green-500 hover:bg-green-700 active:bg-green-900 focus:outline-none focus:border-green-900 focus:ring ring-green-300',
        'alert' => 'text-yellow-100 bg-yellow-500 hover:bg-yellow-700 active:bg-yellow-900 focus:outline-none focus:border-yellow-900 focus:ring ring-yellow-300',
        'danger' => 'text-red-100 bg-red-500 hover:bg-red-700 active:bg-red-900 focus:outline-none focus:border-red-900 focus:ring ring-red-300',
        'warning' => 'text-orange-100 bg-orange-500 hover:bg-orange-700 active:bg-orange-900 focus:outline-none focus:border-orange-900 focus:ring ring-orange-300'
    ];

    $classes = $badgeClasses[$type] ?? $badgeClasses['secondary'];
?>

<span <?php echo e($attributes->merge(['class' => 'inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none rounded-full ' . $classes])); ?>>
    <?php echo e($slot); ?>

</span>
<?php /**PATH F:\gerenciar-app\Gerenciar\resources\views/components/badge.blade.php ENDPATH**/ ?>