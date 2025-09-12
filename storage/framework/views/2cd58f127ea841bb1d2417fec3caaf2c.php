<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'id' => null,
    'type' => 'text',
    'name' => null,
    'value' => null,
    'disabled' => false,
    'required' => false,
    'placeholder' => null,
    'autofocus' => false,
    'autocomplete' => null,
    'readonly' => false,
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
    'id' => null,
    'type' => 'text',
    'name' => null,
    'value' => null,
    'disabled' => false,
    'required' => false,
    'placeholder' => null,
    'autofocus' => false,
    'autocomplete' => null,
    'readonly' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
    $attributes = $attributes->class([
        'shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md',
        'disabled:opacity-50' => $disabled,
        'border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red-500' => $errors->has($name),
    ])->merge([
        'id' => $id,
        'type' => $type,
        'name' => $name,
        'value' => $value,
        'disabled' => $disabled,
        'required' => $required,
        'placeholder' => $placeholder,
        'autofocus' => $autofocus,
        'autocomplete' => $autocomplete,
        'readonly' => $readonly,
    ]);
?>

<input <?php echo e($attributes); ?> dir="ltr" />
<?php /**PATH F:\gerenciar-app\Gerenciar\resources\views/components/input.blade.php ENDPATH**/ ?>