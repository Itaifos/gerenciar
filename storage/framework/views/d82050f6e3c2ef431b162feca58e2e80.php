<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['href' => '#', 'color' => 'green', 'counter', 'title']));

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

foreach (array_filter((['href' => '#', 'color' => 'green', 'counter', 'title']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div>
    <a class="p-3 group hover:bg-<?php echo e($color); ?>-500 cursor-pointer hover:shadow-xl border bg-white hover:border-<?php echo e($color); ?>-500 duration-300 ease-in-out transition-all transform hover:-translate-y-1 hover:scale-110 flex items-center rounded-md overflow-hidden sm:rounded-md w-full"
        href="<?php echo e($href); ?>">
        <div
            class="image bg-<?php echo e($color); ?>-500 group-hover:bg-transparent sm:p-4 p-2 mr-3 rounded-lg transition-all duration-300 ease-in-out">
            <svg class="w-6 h-6 stroke-current group-hover:text-<?php echo e($color); ?>-500 text-white" fill="none"
                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <?php echo e($slot); ?>

            </svg>
        </div>
        <div class="title">
            <h3
                class="sm:text-2xl text-lg antialiased group-hover:text-gray-50 font-bold transition-colors duration-300 ease-in-out">
                <?php echo e($counter); ?></h3>
            <span
                class="sm:text-sm text-xs antialiased group-hover:text-gray-50 transition-colors duration-300 ease-in-out"><?php echo e($title); ?></span>
        </div>
    </a>
</div>
<?php /**PATH F:\gerenciar-app\Gerenciar\resources\views/components/counter-card.blade.php ENDPATH**/ ?>