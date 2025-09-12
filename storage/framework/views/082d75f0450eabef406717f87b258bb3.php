<!DOCTYPE html>
<html x-data="mainState" :class="{ rtl: isRtl, dark: isDarkMode }" class="scroll-smooth"
    lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta name="csrf_token" value="<?php echo e(csrf_token()); ?>" />
    <meta name="csrf_token" value="<?php echo e(csrf_token()); ?>" />
    <meta name="robots" content="nofollow">

    <title><?php echo $__env->yieldContent('title'); ?> ||  <?php echo e(settings()->company_name ?? config('app.name')); ?></title>
    <!-- Styles -->

    <!-- Favicon -->
    <link rel="icon" href="<?php echo e(asset('images/favicon.png')); ?>">
    <meta name="theme-color" content="#000000">
    <link rel="manifest" href="manifest.json" />
    <link rel="apple-touch-icon" href="/images/icon-192x192.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content=" <?php echo e(settings()->company_name ?? config('app.name')); ?>">

    <?php echo $__env->make('includes.main-css', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>

    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css" />

    <?php echo $__env->yieldPushContent('styles'); ?>
    <style>
        [x-cloak] {
            display: none;
        }
    </style>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>

    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scriptConfig(); ?>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>



    <?php echo $__env->yieldPushContent('scripts'); ?>
</head>

<body class="antialiased bg-gray-50 text-body font-body" dir="ltr">
    <?php if (isset($component)) { $__componentOriginal862ffe6205b30eacf13a31556afe1a85 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal862ffe6205b30eacf13a31556afe1a85 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.loading-mask','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('loading-mask'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal862ffe6205b30eacf13a31556afe1a85)): ?>
<?php $attributes = $__attributesOriginal862ffe6205b30eacf13a31556afe1a85; ?>
<?php unset($__attributesOriginal862ffe6205b30eacf13a31556afe1a85); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal862ffe6205b30eacf13a31556afe1a85)): ?>
<?php $component = $__componentOriginal862ffe6205b30eacf13a31556afe1a85; ?>
<?php unset($__componentOriginal862ffe6205b30eacf13a31556afe1a85); ?>
<?php endif; ?>
    <div @resize.window="handleWindowResize">
        <div class="min-h-screen">
            <!-- Sidebar -->
            <?php if (isset($component)) { $__componentOriginal28b950111ad8165a6f1f6f901592ae2f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal28b950111ad8165a6f1f6f901592ae2f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.sidebar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal28b950111ad8165a6f1f6f901592ae2f)): ?>
<?php $attributes = $__attributesOriginal28b950111ad8165a6f1f6f901592ae2f; ?>
<?php unset($__attributesOriginal28b950111ad8165a6f1f6f901592ae2f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal28b950111ad8165a6f1f6f901592ae2f)): ?>
<?php $component = $__componentOriginal28b950111ad8165a6f1f6f901592ae2f; ?>
<?php unset($__componentOriginal28b950111ad8165a6f1f6f901592ae2f); ?>
<?php endif; ?>
            <!-- Page Wrapper -->
            <div class="flex flex-col min-h-screen"
                :class="{
                    'lg:ml-64': isSidebarOpen,
                    'lg:ml-16': !isSidebarOpen,
                }"
                style="transition-property: margin; transition-duration: 150ms;">

                <!-- Navigation Bar-->
                <?php if (isset($component)) { $__componentOriginala591787d01fe92c5706972626cdf7231 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala591787d01fe92c5706972626cdf7231 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala591787d01fe92c5706972626cdf7231)): ?>
<?php $attributes = $__attributesOriginala591787d01fe92c5706972626cdf7231; ?>
<?php unset($__attributesOriginala591787d01fe92c5706972626cdf7231); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala591787d01fe92c5706972626cdf7231)): ?>
<?php $component = $__componentOriginala591787d01fe92c5706972626cdf7231; ?>
<?php unset($__componentOriginala591787d01fe92c5706972626cdf7231); ?>
<?php endif; ?>

                <main class="flex-1">

                    <?php echo $__env->yieldContent('breadcrumb'); ?>

                    <?php echo $__env->yieldContent('content'); ?>

                    <?php if (isset($component)) { $__componentOriginal740c66ff9bbfcb19a96a45ba2fa42d64 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal740c66ff9bbfcb19a96a45ba2fa42d64 = $attributes; } ?>
<?php $component = App\View\Components\Card::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Card::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <?php if(isset($slot)): ?>
                            <?php echo e($slot); ?>

                        <?php endif; ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal740c66ff9bbfcb19a96a45ba2fa42d64)): ?>
<?php $attributes = $__attributesOriginal740c66ff9bbfcb19a96a45ba2fa42d64; ?>
<?php unset($__attributesOriginal740c66ff9bbfcb19a96a45ba2fa42d64); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal740c66ff9bbfcb19a96a45ba2fa42d64)): ?>
<?php $component = $__componentOriginal740c66ff9bbfcb19a96a45ba2fa42d64; ?>
<?php unset($__componentOriginal740c66ff9bbfcb19a96a45ba2fa42d64); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalf83c0a7d9445119940d22129282d57e0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf83c0a7d9445119940d22129282d57e0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.settings-bar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('settings-bar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf83c0a7d9445119940d22129282d57e0)): ?>
<?php $attributes = $__attributesOriginalf83c0a7d9445119940d22129282d57e0; ?>
<?php unset($__attributesOriginalf83c0a7d9445119940d22129282d57e0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf83c0a7d9445119940d22129282d57e0)): ?>
<?php $component = $__componentOriginalf83c0a7d9445119940d22129282d57e0; ?>
<?php unset($__componentOriginalf83c0a7d9445119940d22129282d57e0); ?>
<?php endif; ?>

                </main>

                <!-- Footer -->
                <?php if (isset($component)) { $__componentOriginal8a8716efb3c62a45938aca52e78e0322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a8716efb3c62a45938aca52e78e0322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $attributes = $__attributesOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $component = $__componentOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__componentOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>

            </div>
        </div>
    </div>
</body>

</html>
<?php /**PATH F:\gerenciar-app\Gerenciar\resources\views/layouts/app.blade.php ENDPATH**/ ?>