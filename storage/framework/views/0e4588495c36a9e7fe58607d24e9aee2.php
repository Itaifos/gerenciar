<?php $__env->startSection('title', __('Dashboard')); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <div class="relative p-4 sm:p-6 ">
        <h1 class="text-2xl md:text-3xl text-gray-800 font-bold mb-1"><?php echo e(__('Hello')); ?>, <?php echo e(Auth::user()->name); ?> 👋
        </h1>
        <p><?php echo e(__('What are you look for today ?')); ?></p>
        <div class="py-5">
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('utils.livesearch', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-415991210-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<div class="px-2 mx-auto">
    
    <div class="block mb-4 px-4">

        <div class="w-full relative mb-6 px-4 flex justify-center gap-4 items-center">
            <label class="font-semibold"><?php echo e(__('from')); ?>:</label>
            <div class="flex-1">
                <input type="date" wire:model.live="startDate" class="w-full border rounded px-2 py-1">
            </div>
            <span class="mx-2 font-semibold"><?php echo e(__('to')); ?></span>
            <div class="flex-1">
                <input type="date" wire:model.live="endDate" class="w-full border rounded px-2 py-1">
            </div>
        </div>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('show total stats')): ?>
            <div class="w-full flex flex-wrap my-4 px-4 py-2 border-dashed border-gray-400">

                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = settings()->analytics_control; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $control): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!--[if BLOCK]><![endif]--><?php if($control['status']): ?>
                        <!--[if BLOCK]><![endif]--><?php switch($control['name']):
                            case ('total_categories'): ?>
                                <div class="sm:w-1/4 w-1/2 px-2 pb-2">
                                    <?php if (isset($component)) { $__componentOriginal6f9741a08544d5dcffb0451b603360fb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6f9741a08544d5dcffb0451b603360fb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.counter-card','data' => ['color' => ''.e($control['color']).'','counter' => ''.e($categoriesCount).'','title' => ''.e(__('Total Categories')).'','href' => ''.e(route('product-categories.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('counter-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => ''.e($control['color']).'','counter' => ''.e($categoriesCount).'','title' => ''.e(__('Total Categories')).'','href' => ''.e(route('product-categories.index')).'']); ?>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                                        </path>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6f9741a08544d5dcffb0451b603360fb)): ?>
<?php $attributes = $__attributesOriginal6f9741a08544d5dcffb0451b603360fb; ?>
<?php unset($__attributesOriginal6f9741a08544d5dcffb0451b603360fb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6f9741a08544d5dcffb0451b603360fb)): ?>
<?php $component = $__componentOriginal6f9741a08544d5dcffb0451b603360fb; ?>
<?php unset($__componentOriginal6f9741a08544d5dcffb0451b603360fb); ?>
<?php endif; ?>
                                </div>
                            <?php break; ?>

                            <?php case ('total_products'): ?>
                                <div class="sm:w-1/4 w-1/2 px-2 pb-2">
                                    <?php if (isset($component)) { $__componentOriginal6f9741a08544d5dcffb0451b603360fb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6f9741a08544d5dcffb0451b603360fb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.counter-card','data' => ['color' => ''.e($control['color']).'','counter' => ''.e($productCount).'','title' => ''.e(__('Total Products')).'','href' => ''.e(route('products.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('counter-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => ''.e($control['color']).'','counter' => ''.e($productCount).'','title' => ''.e(__('Total Products')).'','href' => ''.e(route('products.index')).'']); ?>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4">
                                        </path>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6f9741a08544d5dcffb0451b603360fb)): ?>
<?php $attributes = $__attributesOriginal6f9741a08544d5dcffb0451b603360fb; ?>
<?php unset($__attributesOriginal6f9741a08544d5dcffb0451b603360fb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6f9741a08544d5dcffb0451b603360fb)): ?>
<?php $component = $__componentOriginal6f9741a08544d5dcffb0451b603360fb; ?>
<?php unset($__componentOriginal6f9741a08544d5dcffb0451b603360fb); ?>
<?php endif; ?>
                                </div>
                            <?php break; ?>

                            <?php case ('total_supplier'): ?>
                                <div class="sm:w-1/4 w-1/2 px-2 pb-2">
                                    <?php if (isset($component)) { $__componentOriginal6f9741a08544d5dcffb0451b603360fb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6f9741a08544d5dcffb0451b603360fb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.counter-card','data' => ['color' => ''.e($control['color']).'','counter' => ''.e($supplierCount).'','title' => ''.e(__('Total Supplier')).'','href' => ''.e(route('suppliers.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('counter-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => ''.e($control['color']).'','counter' => ''.e($supplierCount).'','title' => ''.e(__('Total Supplier')).'','href' => ''.e(route('suppliers.index')).'']); ?>
                                        <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0">
                                        </path>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6f9741a08544d5dcffb0451b603360fb)): ?>
<?php $attributes = $__attributesOriginal6f9741a08544d5dcffb0451b603360fb; ?>
<?php unset($__attributesOriginal6f9741a08544d5dcffb0451b603360fb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6f9741a08544d5dcffb0451b603360fb)): ?>
<?php $component = $__componentOriginal6f9741a08544d5dcffb0451b603360fb; ?>
<?php unset($__componentOriginal6f9741a08544d5dcffb0451b603360fb); ?>
<?php endif; ?>
                                </div>
                            <?php break; ?>

                            <?php case ('total_customer'): ?>
                                <div class="sm:w-1/4 w-1/2 px-2 pb-2">
                                    <?php if (isset($component)) { $__componentOriginal6f9741a08544d5dcffb0451b603360fb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6f9741a08544d5dcffb0451b603360fb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.counter-card','data' => ['color' => ''.e($control['color']).'','counter' => ''.e($customerCount).'','title' => ''.e(__('Total Customer')).'','href' => ''.e(route('customers.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('counter-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => ''.e($control['color']).'','counter' => ''.e($customerCount).'','title' => ''.e(__('Total Customer')).'','href' => ''.e(route('customers.index')).'']); ?>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                        </path>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6f9741a08544d5dcffb0451b603360fb)): ?>
<?php $attributes = $__attributesOriginal6f9741a08544d5dcffb0451b603360fb; ?>
<?php unset($__attributesOriginal6f9741a08544d5dcffb0451b603360fb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6f9741a08544d5dcffb0451b603360fb)): ?>
<?php $component = $__componentOriginal6f9741a08544d5dcffb0451b603360fb; ?>
<?php unset($__componentOriginal6f9741a08544d5dcffb0451b603360fb); ?>
<?php endif; ?>
                                </div>
                            <?php break; ?>

                            <?php case ('sales'): ?>
                                <div class="sm:w-1/4 w-1/2 px-2 pb-2">
                                    <?php if (isset($component)) { $__componentOriginal6f9741a08544d5dcffb0451b603360fb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6f9741a08544d5dcffb0451b603360fb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.counter-card','data' => ['color' => ''.e($control['color']).'','counter' => ''.e($salesCount).'','title' => __('Sales'),'href' => ''.e(route('sales.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('counter-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => ''.e($control['color']).'','counter' => ''.e($salesCount).'','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Sales')),'href' => ''.e(route('sales.index')).'']); ?>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                        </path>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6f9741a08544d5dcffb0451b603360fb)): ?>
<?php $attributes = $__attributesOriginal6f9741a08544d5dcffb0451b603360fb; ?>
<?php unset($__attributesOriginal6f9741a08544d5dcffb0451b603360fb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6f9741a08544d5dcffb0451b603360fb)): ?>
<?php $component = $__componentOriginal6f9741a08544d5dcffb0451b603360fb; ?>
<?php unset($__componentOriginal6f9741a08544d5dcffb0451b603360fb); ?>
<?php endif; ?>
                                </div>
                            <?php break; ?>

                            <?php case ('purchases'): ?>
                                <div class="sm:w-1/4 w-1/2 px-2 pb-2">
                                    <?php if (isset($component)) { $__componentOriginal6f9741a08544d5dcffb0451b603360fb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6f9741a08544d5dcffb0451b603360fb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.counter-card','data' => ['color' => ''.e($control['color']).'','counter' => ''.e($purchasesCount).'','title' => __('Purchases'),'href' => ''.e(route('purchases.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('counter-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => ''.e($control['color']).'','counter' => ''.e($purchasesCount).'','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Purchases')),'href' => ''.e(route('purchases.index')).'']); ?>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                        </path>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6f9741a08544d5dcffb0451b603360fb)): ?>
<?php $attributes = $__attributesOriginal6f9741a08544d5dcffb0451b603360fb; ?>
<?php unset($__attributesOriginal6f9741a08544d5dcffb0451b603360fb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6f9741a08544d5dcffb0451b603360fb)): ?>
<?php $component = $__componentOriginal6f9741a08544d5dcffb0451b603360fb; ?>
<?php unset($__componentOriginal6f9741a08544d5dcffb0451b603360fb); ?>
<?php endif; ?>
                                </div>
                            <?php break; ?>

                            <?php case ('best_selling_product'): ?>
                                <div class="sm:w-1/4 w-1/2 px-2 pb-2">
                                    <?php if (isset($component)) { $__componentOriginal6f9741a08544d5dcffb0451b603360fb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6f9741a08544d5dcffb0451b603360fb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.counter-card','data' => ['color' => 'yellow','counter' => ''.e($best_selling_product).'','title' => ''.e(__('Best Selling Product')).'','href' => ''.e(route('best-selling-product.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('counter-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'yellow','counter' => ''.e($best_selling_product).'','title' => ''.e(__('Best Selling Product')).'','href' => ''.e(route('best-selling-product.index')).'']); ?>
                                        <i class="bi bi-star"></i>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6f9741a08544d5dcffb0451b603360fb)): ?>
<?php $attributes = $__attributesOriginal6f9741a08544d5dcffb0451b603360fb; ?>
<?php unset($__attributesOriginal6f9741a08544d5dcffb0451b603360fb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6f9741a08544d5dcffb0451b603360fb)): ?>
<?php $component = $__componentOriginal6f9741a08544d5dcffb0451b603360fb; ?>
<?php unset($__componentOriginal6f9741a08544d5dcffb0451b603360fb); ?>
<?php endif; ?>
                                </div>
                            <?php break; ?>

                            <?php case ('number_of_products_sold'): ?>
                                <div class="sm:w-1/4 w-1/2 px-2 pb-2">
                                    <?php if (isset($component)) { $__componentOriginal6f9741a08544d5dcffb0451b603360fb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6f9741a08544d5dcffb0451b603360fb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.counter-card','data' => ['color' => 'purple','counter' => ''.e($number_of_products_sold).'','title' => ''.e(__('Number of Products Sold')).'','href' => ''.e(route('products-sold.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('counter-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'purple','counter' => ''.e($number_of_products_sold).'','title' => ''.e(__('Number of Products Sold')).'','href' => ''.e(route('products-sold.index')).'']); ?>
                                        <i class="bi bi-box"></i>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6f9741a08544d5dcffb0451b603360fb)): ?>
<?php $attributes = $__attributesOriginal6f9741a08544d5dcffb0451b603360fb; ?>
<?php unset($__attributesOriginal6f9741a08544d5dcffb0451b603360fb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6f9741a08544d5dcffb0451b603360fb)): ?>
<?php $component = $__componentOriginal6f9741a08544d5dcffb0451b603360fb; ?>
<?php unset($__componentOriginal6f9741a08544d5dcffb0451b603360fb); ?>
<?php endif; ?>
                                </div>
                            <?php break; ?>

                            <?php case ('average_purchase_return_amount'): ?>
                                <div class="sm:w-1/4 w-1/2 px-2 pb-2">
                                    <?php if (isset($component)) { $__componentOriginal6f9741a08544d5dcffb0451b603360fb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6f9741a08544d5dcffb0451b603360fb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.counter-card','data' => ['color' => 'red','counter' => ''.e(format_currency($average_purchase_return_amount)).'','title' => ''.e(__('Average Purchase Return Amount')).'','href' => ''.e(route('purchase-return.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('counter-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'red','counter' => ''.e(format_currency($average_purchase_return_amount)).'','title' => ''.e(__('Average Purchase Return Amount')).'','href' => ''.e(route('purchase-return.index')).'']); ?>
                                        <i class="fa fa-arrow-left"></i>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6f9741a08544d5dcffb0451b603360fb)): ?>
<?php $attributes = $__attributesOriginal6f9741a08544d5dcffb0451b603360fb; ?>
<?php unset($__attributesOriginal6f9741a08544d5dcffb0451b603360fb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6f9741a08544d5dcffb0451b603360fb)): ?>
<?php $component = $__componentOriginal6f9741a08544d5dcffb0451b603360fb; ?>
<?php unset($__componentOriginal6f9741a08544d5dcffb0451b603360fb); ?>
<?php endif; ?>
                                </div>
                            <?php break; ?>

                            <?php case ('common_return_reason'): ?>
                                <div class="sm:w-1/4 w-1/2 px-2 pb-2">
                                    <?php if (isset($component)) { $__componentOriginal6f9741a08544d5dcffb0451b603360fb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6f9741a08544d5dcffb0451b603360fb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.counter-card','data' => ['color' => 'orange','counter' => ''.e($common_return_reason).'','title' => ''.e(__('Common Return Reason')).'','href' => ''.e(route('return-reason.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('counter-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'orange','counter' => ''.e($common_return_reason).'','title' => ''.e(__('Common Return Reason')).'','href' => ''.e(route('return-reason.index')).'']); ?>
                                        <i class="fa fa-exclamation-triangle"></i>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6f9741a08544d5dcffb0451b603360fb)): ?>
<?php $attributes = $__attributesOriginal6f9741a08544d5dcffb0451b603360fb; ?>
<?php unset($__attributesOriginal6f9741a08544d5dcffb0451b603360fb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6f9741a08544d5dcffb0451b603360fb)): ?>
<?php $component = $__componentOriginal6f9741a08544d5dcffb0451b603360fb; ?>
<?php unset($__componentOriginal6f9741a08544d5dcffb0451b603360fb); ?>
<?php endif; ?>
                                </div>
                            <?php break; ?>

                            <?php case ('average_payment_received_per_sale'): ?>
                                <div class="sm:w-1/4 w-1/2 px-2 pb-2"> <?php if (isset($component)) { $__componentOriginal6f9741a08544d5dcffb0451b603360fb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6f9741a08544d5dcffb0451b603360fb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.counter-card','data' => ['color' => 'green','counter' => ''.e(format_currency($average_payment_received_per_sale)).'','title' => ''.e(__('Average Payment Received per Sale')).'','href' => ''.e(route('payment-received.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('counter-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'green','counter' => ''.e(format_currency($average_payment_received_per_sale)).'','title' => ''.e(__('Average Payment Received per Sale')).'','href' => ''.e(route('payment-received.index')).'']); ?>
                                        <i class="fa fa-dollar-sign"></i>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6f9741a08544d5dcffb0451b603360fb)): ?>
<?php $attributes = $__attributesOriginal6f9741a08544d5dcffb0451b603360fb; ?>
<?php unset($__attributesOriginal6f9741a08544d5dcffb0451b603360fb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6f9741a08544d5dcffb0451b603360fb)): ?>
<?php $component = $__componentOriginal6f9741a08544d5dcffb0451b603360fb; ?>
<?php unset($__componentOriginal6f9741a08544d5dcffb0451b603360fb); ?>
<?php endif; ?>
                                </div>
                            <?php break; ?>

                            <?php case ('significant_payment_changes'): ?>
                                <div class="sm:w-1/4 w-1/2 px-2 pb-2">
                                    <?php if (isset($component)) { $__componentOriginal6f9741a08544d5dcffb0451b603360fb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6f9741a08544d5dcffb0451b603360fb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.counter-card','data' => ['color' => 'blue','counter' => ''.e($significant_payment_changes).'','title' => ''.e(__('Significant Payment Changes')).'','href' => ''.e(route('payment-changes.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('counter-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['color' => 'blue','counter' => ''.e($significant_payment_changes).'','title' => ''.e(__('Significant Payment Changes')).'','href' => ''.e(route('payment-changes.index')).'']); ?>
                                        <i class="fa fa-chart-line"></i>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6f9741a08544d5dcffb0451b603360fb)): ?>
<?php $attributes = $__attributesOriginal6f9741a08544d5dcffb0451b603360fb; ?>
<?php unset($__attributesOriginal6f9741a08544d5dcffb0451b603360fb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6f9741a08544d5dcffb0451b603360fb)): ?>
<?php $component = $__componentOriginal6f9741a08544d5dcffb0451b603360fb; ?>
<?php unset($__componentOriginal6f9741a08544d5dcffb0451b603360fb); ?>
<?php endif; ?>
                                </div>
                            <?php break; ?>
                        <?php endswitch; ?><!--[if ENDBLOCK]><![endif]-->
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->

            </div>
        <?php endif; ?>

    </div>
    
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('dashboard_access')): ?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('stats.transactions', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-415991210-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <?php endif; ?>

</div>
<?php /**PATH F:\gerenciar-app\Gerenciar\resources\views/livewire/dashboard.blade.php ENDPATH**/ ?>