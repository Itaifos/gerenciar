<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'size' => 'lg',
    'class' => '',
    'sizing' => [
        'sm' => 6,
        'md' => 10,
        'lg' => 14,
        'xl' => 24,
        'xxl' => 36
    ],
]));

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

foreach (array_filter(([
    'size' => 'lg',
    'class' => '',
    'sizing' => [
        'sm' => 6,
        'md' => 10,
        'lg' => 14,
        'xl' => 24,
        'xxl' => 36
    ],
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<svg class="animate-spin inline-block bw-spinner h-<?php echo e($sizing[$size]); ?> w-<?php echo e($sizing[$size]); ?> <?php echo e($class); ?>" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
</svg>
<span class="hidden w-6 w-10 w-14 w-24 w-36 h-6 h-10 h-14 h-24 h-36"></span><?php /**PATH F:\gerenciar-app\Gerenciar\resources\views/components/loading.blade.php ENDPATH**/ ?>