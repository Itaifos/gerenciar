<div>

    <div x-data="{ showNotifications: false, openAlert: false }">

        <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['type' => 'button','iconOnly' => true,'secondary' => true,'srText' => 'Open notifications','xOn:click' => 'showNotifications = true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','iconOnly' => true,'secondary' => true,'srText' => 'Open notifications','x-on:click' => 'showNotifications = true']); ?>
            <div class="text-xs font-semibold text-white justify-center">
                <i class="fas fa-bell" aria-hidden="true"></i>
                <span class="pl-2">
                    <?php echo e($this->lowQuantity->count()); ?>

                </span>
            </div>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $attributes = $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $component = $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>

        <div>
            <div x-show="showNotifications" x-cloak x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform translate-y-4"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform translate-y-0"
                x-transition:leave-end="opacity-0 transform translate-y-4" class="fixed inset-0 overflow-hidden z-50"
                x-on:click.away="showNotifications = false" x-close-on-escape="true">

                <div class="absolute inset-0 overflow-hidden">
                    <div class="absolute inset-0" aria-hidden="true" x-on:click="showNotifications = false"></div>
                    <div class="absolute inset-y-0 right-0 pl-10 max-w-full flex">
                        <div class="w-screen max-w-sm">
                            <div class="h-full flex flex-col bg-white shadow-xl overflow-y-scroll">
                                <div class="flex justify-between items-center py-4 px-2">
                                    <div class="float-left leading-5 cursor-pointer" aria-hidden="true"
                                        x-on:click="showNotifications = false">
                                        X
                                    </div>
                                    <h3 class="text-2xl text-center"><?php echo e(__('Notifications')); ?></h3>
                                    <div class="w-0"></div>
                                </div>
                                <hr>
                                <div>
                                    
                                </div>
                                <hr>

                                <div>
                                    <div class="flex justify-between items-center py-4 px-2">
                                        <div class="float-left leading-5 cursor-pointer">
                                            <button @click="openAlert = !openAlert">
                                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <h3 class="text-2xl text-center"><?php echo e(__('Stock Alert')); ?></h3>
                                        <div class="w-0"></div>
                                    </div>

                                    <ol x-show="openAlert">
                                        
                                        <hr>
                                        <div class="flex justify-center my-4">
                                            <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['type' => 'button','primary' => true,'wire:click' => 'loadMore']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','primary' => true,'wire:click' => 'loadMore']); ?>
                                                +
                                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $attributes = $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $component = $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
                                        </div>
                                    </ol>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH F:\gerenciar-app\Gerenciar\resources\views/livewire/utils/notifications.blade.php ENDPATH**/ ?>