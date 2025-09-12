<?php if (isset($component)) { $__componentOriginalb5c14c9e70c23a9b21ec570c5f0bc460 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb5c14c9e70c23a9b21ec570c5f0bc460 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.perfect-scrollbar','data' => ['as' => 'nav','ariaLabel' => 'main','class' => 'flex flex-col flex-1 gap-3 px-3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('perfect-scrollbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['as' => 'nav','aria-label' => 'main','class' => 'flex flex-col flex-1 gap-3 px-3']); ?>

    <?php if (isset($component)) { $__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.link','data' => ['title' => ''.e(__('Dashboard')).'','href' => ''.e(route('dashboard')).'','isActive' => request()->routeIs('dashboard')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Dashboard')).'','href' => ''.e(route('dashboard')).'','isActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('dashboard'))]); ?>
         <?php $__env->slot('icon', null, []); ?> 
            <span class="inline-block mx-4">
                <?php if (isset($component)) { $__componentOriginaldd7efffb9c9f6e09cb77b3f1b8d38adf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldd7efffb9c9f6e09cb77b3f1b8d38adf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.dashboard','data' => ['class' => 'w-5 h-5','ariaHidden' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icons.dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5','aria-hidden' => 'true']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldd7efffb9c9f6e09cb77b3f1b8d38adf)): ?>
<?php $attributes = $__attributesOriginaldd7efffb9c9f6e09cb77b3f1b8d38adf; ?>
<?php unset($__attributesOriginaldd7efffb9c9f6e09cb77b3f1b8d38adf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldd7efffb9c9f6e09cb77b3f1b8d38adf)): ?>
<?php $component = $__componentOriginaldd7efffb9c9f6e09cb77b3f1b8d38adf; ?>
<?php unset($__componentOriginaldd7efffb9c9f6e09cb77b3f1b8d38adf); ?>
<?php endif; ?>
            </span>
         <?php $__env->endSlot(); ?>
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
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product_access')): ?>

        <?php if (isset($component)) { $__componentOriginal75798e99d14d1b7520450041da5068d5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal75798e99d14d1b7520450041da5068d5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.dropdown','data' => ['title' => ''.e(__('Products')).'','active' => request()->routeIs([
            'products.*',
            'product-categories.index',
            'products.barcode-print',
            'brands.index',
            'warehouses.index',
            'adjustments.index',
        ])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Products')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs([
            'products.*',
            'product-categories.index',
            'products.barcode-print',
            'brands.index',
            'warehouses.index',
            'adjustments.index',
        ]))]); ?>

             <?php $__env->slot('icon', null, []); ?> 
                <span class="inline-block mx-4">
                    <i class="fas fa-boxes w-5 h-5"></i>
                </span>
             <?php $__env->endSlot(); ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('category_access')): ?>
                <?php if (isset($component)) { $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.sublink','data' => ['title' => ''.e(__('Categories')).'','href' => ''.e(route('product-categories.index')).'','active' => request()->routeIs('product-categories.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.sublink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Categories')).'','href' => ''.e(route('product-categories.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('product-categories.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $attributes = $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $component = $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product_access')): ?>
                <?php if (isset($component)) { $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.sublink','data' => ['title' => ''.e(__('All Products')).'','href' => ''.e(route('products.index')).'','active' => request()->routeIs('products.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.sublink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('All Products')).'','href' => ''.e(route('products.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('products.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $attributes = $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $component = $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('print_barcodes')): ?>
                <?php if (isset($component)) { $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.sublink','data' => ['title' => ''.e(__('Print Barcode')).'','href' => ''.e(route('products.barcode-print')).'','active' => request()->routeIs('products.barcode-print')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.sublink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Print Barcode')).'','href' => ''.e(route('products.barcode-print')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('products.barcode-print'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $attributes = $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $component = $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('brand_access')): ?>
                <?php if (isset($component)) { $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.sublink','data' => ['title' => ''.e(__('Brands')).'','href' => ''.e(route('brands.index')).'','active' => request()->routeIs('brands.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.sublink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Brands')).'','href' => ''.e(route('brands.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('brands.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $attributes = $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $component = $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('warehouse_access')): ?>
                <?php if (isset($component)) { $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.sublink','data' => ['title' => ''.e(__('Warehouses')).'','href' => ''.e(route('warehouses.index')).'','active' => request()->routeIs('warehouses.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.sublink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Warehouses')).'','href' => ''.e(route('warehouses.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('warehouses.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $attributes = $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $component = $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('adjustment_access')): ?>
                <?php if (isset($component)) { $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.sublink','data' => ['title' => ''.e(__('Stock adjustments')).'','href' => ''.e(route('adjustments.index')).'','active' => request()->routeIs('adjustments.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.sublink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Stock adjustments')).'','href' => ''.e(route('adjustments.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('adjustments.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $attributes = $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $component = $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
            <?php endif; ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal75798e99d14d1b7520450041da5068d5)): ?>
<?php $attributes = $__attributesOriginal75798e99d14d1b7520450041da5068d5; ?>
<?php unset($__attributesOriginal75798e99d14d1b7520450041da5068d5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal75798e99d14d1b7520450041da5068d5)): ?>
<?php $component = $__componentOriginal75798e99d14d1b7520450041da5068d5; ?>
<?php unset($__componentOriginal75798e99d14d1b7520450041da5068d5); ?>
<?php endif; ?>
    <?php endif; ?>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('quotation_access')): ?>
        <?php if (isset($component)) { $__componentOriginal75798e99d14d1b7520450041da5068d5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal75798e99d14d1b7520450041da5068d5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.dropdown','data' => ['title' => ''.e(__('Quotations')).'','active' => request()->routeIs('quotations.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Quotations')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('quotations.index'))]); ?>

             <?php $__env->slot('icon', null, []); ?> 
                <span class="inline-block mx-4">
                    <i class="fas fa-file-invoice-dollar w-5 h-5"></i>
                </span>
             <?php $__env->endSlot(); ?>
            <?php if (isset($component)) { $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.sublink','data' => ['title' => ''.e(__('All Quotations')).'','href' => ''.e(route('quotations.index')).'','active' => request()->routeIs('quotations.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.sublink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('All Quotations')).'','href' => ''.e(route('quotations.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('quotations.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $attributes = $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $component = $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal75798e99d14d1b7520450041da5068d5)): ?>
<?php $attributes = $__attributesOriginal75798e99d14d1b7520450041da5068d5; ?>
<?php unset($__attributesOriginal75798e99d14d1b7520450041da5068d5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal75798e99d14d1b7520450041da5068d5)): ?>
<?php $component = $__componentOriginal75798e99d14d1b7520450041da5068d5; ?>
<?php unset($__componentOriginal75798e99d14d1b7520450041da5068d5); ?>
<?php endif; ?>
    <?php endif; ?>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('purchase_access')): ?>
        <?php if (isset($component)) { $__componentOriginal75798e99d14d1b7520450041da5068d5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal75798e99d14d1b7520450041da5068d5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.dropdown','data' => ['title' => ''.e(__('Purchases')).'','active' => request()->routeIs('purchases.index') || request()->routeIs('purchase-returns.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Purchases')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('purchases.index') || request()->routeIs('purchase-returns.index'))]); ?>
             <?php $__env->slot('icon', null, []); ?> 
                <span class="inline-block mx-4">
                    <i class="fas fa-shopping-cart w-5 h-5"></i>
                </span>
             <?php $__env->endSlot(); ?>
            <?php if (isset($component)) { $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.sublink','data' => ['title' => ''.e(__('All Purchases')).'','href' => ''.e(route('purchases.index')).'','active' => request()->routeIs('purchases.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.sublink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('All Purchases')).'','href' => ''.e(route('purchases.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('purchases.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $attributes = $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $component = $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('purchase_return_access')): ?>
                <?php if (isset($component)) { $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.sublink','data' => ['title' => ''.e(__('All Purchase Returns')).'','href' => ''.e(route('purchase-returns.index')).'','active' => request()->routeIs('purchase-returns.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.sublink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('All Purchase Returns')).'','href' => ''.e(route('purchase-returns.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('purchase-returns.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $attributes = $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $component = $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
            <?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal75798e99d14d1b7520450041da5068d5)): ?>
<?php $attributes = $__attributesOriginal75798e99d14d1b7520450041da5068d5; ?>
<?php unset($__attributesOriginal75798e99d14d1b7520450041da5068d5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal75798e99d14d1b7520450041da5068d5)): ?>
<?php $component = $__componentOriginal75798e99d14d1b7520450041da5068d5; ?>
<?php unset($__componentOriginal75798e99d14d1b7520450041da5068d5); ?>
<?php endif; ?>
    <?php endif; ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sale_access')): ?>
        <?php if (isset($component)) { $__componentOriginal75798e99d14d1b7520450041da5068d5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal75798e99d14d1b7520450041da5068d5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.dropdown','data' => ['title' => ''.e(__('Sales')).'','active' => request()->routeIs(['sales.index', 'sale-returns.index'])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Sales')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs(['sales.index', 'sale-returns.index']))]); ?>
             <?php $__env->slot('icon', null, []); ?> 
                <span class="inline-block mx-4">
                    <i class="fas fa-shopping-bag w-5 h-5"></i>
                </span>
             <?php $__env->endSlot(); ?>

            <?php if (isset($component)) { $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.sublink','data' => ['title' => ''.e(__('All Sales')).'','href' => ''.e(route('sales.index')).'','active' => request()->routeIs('sales.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.sublink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('All Sales')).'','href' => ''.e(route('sales.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('sales.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $attributes = $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $component = $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sale_return_access')): ?>
                <?php if (isset($component)) { $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.sublink','data' => ['title' => ''.e(__('All Sale Returns')).'','href' => ''.e(route('sale-returns.index')).'','active' => request()->routeIs('sale-returns.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.sublink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('All Sale Returns')).'','href' => ''.e(route('sale-returns.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('sale-returns.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $attributes = $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $component = $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
            <?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal75798e99d14d1b7520450041da5068d5)): ?>
<?php $attributes = $__attributesOriginal75798e99d14d1b7520450041da5068d5; ?>
<?php unset($__attributesOriginal75798e99d14d1b7520450041da5068d5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal75798e99d14d1b7520450041da5068d5)): ?>
<?php $component = $__componentOriginal75798e99d14d1b7520450041da5068d5; ?>
<?php unset($__componentOriginal75798e99d14d1b7520450041da5068d5); ?>
<?php endif; ?>
    <?php endif; ?>


    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('expense_access')): ?>
        <?php if (isset($component)) { $__componentOriginal75798e99d14d1b7520450041da5068d5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal75798e99d14d1b7520450041da5068d5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.dropdown','data' => ['title' => ''.e(__('Expenses')).'','active' => request()->routeIs(['expenses.index', 'expense-categories.index'])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Expenses')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs(['expenses.index', 'expense-categories.index']))]); ?>
             <?php $__env->slot('icon', null, []); ?> 
                <span class="inline-block mx-4">
                    <i class="fas fa-money-bill-alt w-5 h-5"></i>
                </span>
             <?php $__env->endSlot(); ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('expense_categories_access')): ?>
                <?php if (isset($component)) { $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.sublink','data' => ['title' => ''.e(__('Categories')).'','href' => ''.e(route('expense-categories.index')).'','active' => request()->routeIs('expense-categories.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.sublink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Categories')).'','href' => ''.e(route('expense-categories.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('expense-categories.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $attributes = $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $component = $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
            <?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.sublink','data' => ['title' => ''.e(__('All Expenses')).'','href' => ''.e(route('expenses.index')).'','active' => request()->routeIs('expenses.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.sublink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('All Expenses')).'','href' => ''.e(route('expenses.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('expenses.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $attributes = $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $component = $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal75798e99d14d1b7520450041da5068d5)): ?>
<?php $attributes = $__attributesOriginal75798e99d14d1b7520450041da5068d5; ?>
<?php unset($__attributesOriginal75798e99d14d1b7520450041da5068d5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal75798e99d14d1b7520450041da5068d5)): ?>
<?php $component = $__componentOriginal75798e99d14d1b7520450041da5068d5; ?>
<?php unset($__componentOriginal75798e99d14d1b7520450041da5068d5); ?>
<?php endif; ?>
    <?php endif; ?>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('report_access')): ?>
        <?php if (isset($component)) { $__componentOriginal75798e99d14d1b7520450041da5068d5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal75798e99d14d1b7520450041da5068d5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.dropdown','data' => ['title' => ''.e(__('Reports')).'','active' => request()->routeIs([
            'purchases-report.index',
            'sales-report.index',
            'sales-return-report.index',
            'payments-report.index',
            'purchases-return-report.index',
            'profit-loss-report.index',
            'stock-alert-report.index',
        ])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Reports')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs([
            'purchases-report.index',
            'sales-report.index',
            'sales-return-report.index',
            'payments-report.index',
            'purchases-return-report.index',
            'profit-loss-report.index',
            'stock-alert-report.index',
        ]))]); ?>
             <?php $__env->slot('icon', null, []); ?> 
                <span class="inline-block mx-4">
                    <i class="fas fa-chart-line w-5 h-5"></i>
                </span>
             <?php $__env->endSlot(); ?>

            <?php if (isset($component)) { $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.sublink','data' => ['title' => ''.e(__('Purchases Report')).'','href' => ''.e(route('purchases-report.index')).'','active' => request()->routeIs('purchases-report.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.sublink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Purchases Report')).'','href' => ''.e(route('purchases-report.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('purchases-report.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $attributes = $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $component = $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.sublink','data' => ['title' => ''.e(__('Sale Report')).'','href' => ''.e(route('sales-report.index')).'','active' => request()->routeIs('sales-report.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.sublink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Sale Report')).'','href' => ''.e(route('sales-report.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('sales-report.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $attributes = $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $component = $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.sublink','data' => ['title' => ''.e(__('Sale Return Report')).'','href' => ''.e(route('sales-return-report.index')).'','active' => request()->routeIs('sales-return-report.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.sublink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Sale Return Report')).'','href' => ''.e(route('sales-return-report.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('sales-return-report.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $attributes = $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $component = $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.sublink','data' => ['title' => ''.e(__('Payment Report')).'','href' => ''.e(route('payments-report.index')).'','active' => request()->routeIs('payments-report.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.sublink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Payment Report')).'','href' => ''.e(route('payments-report.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('payments-report.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $attributes = $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $component = $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.sublink','data' => ['title' => ''.e(__('Purchases Return Report')).'','href' => ''.e(route('purchases-return-report.index')).'','active' => request()->routeIs('purchases-return-report.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.sublink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Purchases Return Report')).'','href' => ''.e(route('purchases-return-report.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('purchases-return-report.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $attributes = $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $component = $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.sublink','data' => ['title' => ''.e(__('Profit Report')).'','href' => ''.e(route('profit-loss-report.index')).'','active' => request()->routeIs('profit-loss-report.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.sublink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Profit Report')).'','href' => ''.e(route('profit-loss-report.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('profit-loss-report.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $attributes = $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $component = $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.sublink','data' => ['title' => ''.e(__('Stock Alert Report')).'','href' => ''.e(route('stock-alert-report.index')).'','active' => request()->routeIs('stock-alert-report.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.sublink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Stock Alert Report')).'','href' => ''.e(route('stock-alert-report.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('stock-alert-report.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $attributes = $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $component = $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal75798e99d14d1b7520450041da5068d5)): ?>
<?php $attributes = $__attributesOriginal75798e99d14d1b7520450041da5068d5; ?>
<?php unset($__attributesOriginal75798e99d14d1b7520450041da5068d5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal75798e99d14d1b7520450041da5068d5)): ?>
<?php $component = $__componentOriginal75798e99d14d1b7520450041da5068d5; ?>
<?php unset($__componentOriginal75798e99d14d1b7520450041da5068d5); ?>
<?php endif; ?>
    <?php endif; ?>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_access')): ?>
        <?php if (isset($component)) { $__componentOriginal75798e99d14d1b7520450041da5068d5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal75798e99d14d1b7520450041da5068d5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.dropdown','data' => ['title' => ''.e(__('People')).'','active' => request()->routeIs('customers.*') ||
            request()->routeIs('customer-group.*') ||
            request()->routeIs('suppliers.*') ||
            request()->routeIs('users.*') ||
            request()->routeIs('roles.*') ||
            request()->routeIs('permissions.*')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('People')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('customers.*') ||
            request()->routeIs('customer-group.*') ||
            request()->routeIs('suppliers.*') ||
            request()->routeIs('users.*') ||
            request()->routeIs('roles.*') ||
            request()->routeIs('permissions.*'))]); ?>
             <?php $__env->slot('icon', null, []); ?> 
                <span class="inline-block mx-4">
                    <i class="fas fa-users w-5 h-5"></i>
                </span>
             <?php $__env->endSlot(); ?>
            <?php if (isset($component)) { $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.sublink','data' => ['title' => ''.e(__('Users')).'','href' => ''.e(route('users.index')).'','active' => request()->routeIs('users.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.sublink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Users')).'','href' => ''.e(route('users.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('users.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $attributes = $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $component = $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('customer_access')): ?>
                <?php if (isset($component)) { $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.sublink','data' => ['title' => ''.e(__('Customers')).'','href' => ''.e(route('customers.index')).'','active' => request()->routeIs('customers.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.sublink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Customers')).'','href' => ''.e(route('customers.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('customers.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $attributes = $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $component = $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('customer_group_access')): ?>
                <?php if (isset($component)) { $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.sublink','data' => ['title' => ''.e(__('Customer Groups')).'','href' => ''.e(route('customer-group.index')).'','active' => request()->routeIs('customer-group.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.sublink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Customer Groups')).'','href' => ''.e(route('customer-group.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('customer-group.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $attributes = $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $component = $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('suppliers_access')): ?>
                <?php if (isset($component)) { $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.sublink','data' => ['title' => ''.e(__('Suppliers')).'','href' => ''.e(route('suppliers.index')).'','active' => request()->routeIs('suppliers.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.sublink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Suppliers')).'','href' => ''.e(route('suppliers.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('suppliers.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $attributes = $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $component = $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('access_roles')): ?>
                <?php if (isset($component)) { $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.sublink','data' => ['title' => ''.e(__('Roles')).'','href' => ''.e(route('roles.index')).'','active' => request()->routeIs('roles.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.sublink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Roles')).'','href' => ''.e(route('roles.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('roles.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $attributes = $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $component = $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('access_permissions')): ?>
                <?php if (isset($component)) { $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.sublink','data' => ['title' => ''.e(__('Permissions')).'','href' => ''.e(route('permissions.index')).'','active' => request()->routeIs('permissions.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.sublink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Permissions')).'','href' => ''.e(route('permissions.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('permissions.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $attributes = $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $component = $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
            <?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal75798e99d14d1b7520450041da5068d5)): ?>
<?php $attributes = $__attributesOriginal75798e99d14d1b7520450041da5068d5; ?>
<?php unset($__attributesOriginal75798e99d14d1b7520450041da5068d5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal75798e99d14d1b7520450041da5068d5)): ?>
<?php $component = $__componentOriginal75798e99d14d1b7520450041da5068d5; ?>
<?php unset($__componentOriginal75798e99d14d1b7520450041da5068d5); ?>
<?php endif; ?>
    <?php endif; ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('access_settings')): ?>
        <?php if (isset($component)) { $__componentOriginal75798e99d14d1b7520450041da5068d5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal75798e99d14d1b7520450041da5068d5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.dropdown','data' => ['title' => ''.e(__('Settings')).'','active' => request()->routeIs([
            'settings.index',
            'logs.index',
            'currencies.index',
            'languages.index',
            'backup.index',
        ])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Settings')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs([
            'settings.index',
            'logs.index',
            'currencies.index',
            'languages.index',
            'backup.index',
        ]))]); ?>
             <?php $__env->slot('icon', null, []); ?> 
                <span class="inline-block mx-4">
                    <i class="fas fa-cog w-5 h-5"></i>
                </span>
             <?php $__env->endSlot(); ?>
            <?php if (isset($component)) { $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.sublink','data' => ['title' => ''.e(__('Settings')).'','href' => ''.e(route('settings.index')).'','active' => request()->routeIs('settings.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.sublink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Settings')).'','href' => ''.e(route('settings.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('settings.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $attributes = $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $component = $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('log_access')): ?>
                <?php if (isset($component)) { $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.sublink','data' => ['title' => ''.e(__('Logs')).'','href' => ''.e(route('logs.index')).'','active' => request()->routeIs('logs.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.sublink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Logs')).'','href' => ''.e(route('logs.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('logs.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $attributes = $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $component = $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('currency_access')): ?>
                <?php if (isset($component)) { $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.sublink','data' => ['title' => ''.e(__('Currencies')).'','href' => ''.e(route('currencies.index')).'','active' => request()->routeIs('currencies.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.sublink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Currencies')).'','href' => ''.e(route('currencies.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('currencies.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $attributes = $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $component = $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('language_access')): ?>
                <?php if (isset($component)) { $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.sublink','data' => ['title' => ''.e(__('Languages')).'','href' => ''.e(route('languages.index')).'','active' => request()->routeIs('languages.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.sublink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Languages')).'','href' => ''.e(route('languages.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('languages.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $attributes = $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $component = $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('backup_access')): ?>
                <?php if (isset($component)) { $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.sublink','data' => ['title' => ''.e(__('Backup')).'','href' => ''.e(route('backup.index')).'','active' => request()->routeIs('backup.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.sublink'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Backup')).'','href' => ''.e(route('backup.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('backup.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $attributes = $__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__attributesOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89)): ?>
<?php $component = $__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89; ?>
<?php unset($__componentOriginal064f6c9edbcdd6f4e7eb9faa53722c89); ?>
<?php endif; ?>
            <?php endif; ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal75798e99d14d1b7520450041da5068d5)): ?>
<?php $attributes = $__attributesOriginal75798e99d14d1b7520450041da5068d5; ?>
<?php unset($__attributesOriginal75798e99d14d1b7520450041da5068d5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal75798e99d14d1b7520450041da5068d5)): ?>
<?php $component = $__componentOriginal75798e99d14d1b7520450041da5068d5; ?>
<?php unset($__componentOriginal75798e99d14d1b7520450041da5068d5); ?>
<?php endif; ?>
    <?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.link','data' => ['title' => ''.e(__('Logout')).'','onclick' => 'event.preventDefault();
                        document.getElementById(\'logoutform\').submit();','href' => '#']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Logout')).'','onclick' => 'event.preventDefault();
                        document.getElementById(\'logoutform\').submit();','href' => '#']); ?>
         <?php $__env->slot('icon', null, []); ?> 
            <span class="inline-block mx-4">
                <i class="fas fa-sign-out-alt w-5 h-5" aria-hidden="true"></i>
            </span>
         <?php $__env->endSlot(); ?>
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

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb5c14c9e70c23a9b21ec570c5f0bc460)): ?>
<?php $attributes = $__attributesOriginalb5c14c9e70c23a9b21ec570c5f0bc460; ?>
<?php unset($__attributesOriginalb5c14c9e70c23a9b21ec570c5f0bc460); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb5c14c9e70c23a9b21ec570c5f0bc460)): ?>
<?php $component = $__componentOriginalb5c14c9e70c23a9b21ec570c5f0bc460; ?>
<?php unset($__componentOriginalb5c14c9e70c23a9b21ec570c5f0bc460); ?>
<?php endif; ?>
<?php /**PATH F:\gerenciar-app\Gerenciar\resources\views/components/sidebar/content.blade.php ENDPATH**/ ?>