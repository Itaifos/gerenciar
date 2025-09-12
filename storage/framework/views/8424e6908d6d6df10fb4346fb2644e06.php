<div>
    <div class="relative mb-4">
        <div class="w-full rounded-lg">
            <?php if (isset($component)) { $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['wire:model.live' => 'searchQuery','autofocus' => true,'xOn:keydown.escape' => 'searchQuery','placeholder' => ''.e(__('Search with names and codes, or reference')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.live' => 'searchQuery','autofocus' => true,'x-on:keydown.escape' => 'searchQuery','placeholder' => ''.e(__('Search with names and codes, or reference')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $attributes = $__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__attributesOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1)): ?>
<?php $component = $__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1; ?>
<?php unset($__componentOriginalc2fcfa88dc54fee60e0757a7e0572df1); ?>
<?php endif; ?>
        </div>
        <!--[if BLOCK]><![endif]--><?php if(!empty($searchQuery)): ?>
            <div class="absolute top-0 left-0 w-full mt-12 bg-white rounded-md shadow-xl overflow-y-auto max-h-52 z-50">
                <ul>
                    <!--[if BLOCK]><![endif]--><?php if($products && $products->isNotEmpty()): ?>
                        <li class="flex items-center text-left px-4 py-3 border-b border-gray-100">
                            <?php if (isset($component)) { $__componentOriginal7faa69b9c6e2e3443481b55eae8beb18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.chips','data' => ['label' => ''.e(__('Products')).'','shade' => 'dark','color' => 'red']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('chips'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => ''.e(__('Products')).'','shade' => 'dark','color' => 'red']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18)): ?>
<?php $attributes = $__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18; ?>
<?php unset($__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7faa69b9c6e2e3443481b55eae8beb18)): ?>
<?php $component = $__componentOriginal7faa69b9c6e2e3443481b55eae8beb18; ?>
<?php unset($__componentOriginal7faa69b9c6e2e3443481b55eae8beb18); ?>
<?php endif; ?>
                            <div class="flex space-x-4">
                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <p class="font-semibold text-gray-700">
                                        <?php echo e(__('Name')); ?> <br>
                                        <?php echo e($item->name); ?>

                                    </p>
                                    <p class="font-semibold text-gray-700">
                                        <?php echo e(__('Price')); ?> <br>
                                        <?php echo e(format_currency($item->price)); ?>

                                    </p>
                                    <p class="font-semibold text-gray-700">
                                        <?php echo e(__('Cost')); ?> <br>
                                        <?php echo e(format_currency($item->cost)); ?>

                                    </p>
                                    <p class="font-semibold text-gray-700">
                                        <?php echo e(__('Quantity')); ?> <br>
                                        <?php echo e($item->quantity); ?>

                                    </p>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                            </div>
                        </li>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    <!--[if BLOCK]><![endif]--><?php if($customers && $customers->isNotEmpty()): ?>
                        <li class="flex items-center text-left px-4 py-3 border-b border-gray-100">
                            <?php if (isset($component)) { $__componentOriginal7faa69b9c6e2e3443481b55eae8beb18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.chips','data' => ['label' => ''.e(__('Customers')).'','shade' => 'dark','color' => 'yellow']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('chips'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => ''.e(__('Customers')).'','shade' => 'dark','color' => 'yellow']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18)): ?>
<?php $attributes = $__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18; ?>
<?php unset($__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7faa69b9c6e2e3443481b55eae8beb18)): ?>
<?php $component = $__componentOriginal7faa69b9c6e2e3443481b55eae8beb18; ?>
<?php unset($__componentOriginal7faa69b9c6e2e3443481b55eae8beb18); ?>
<?php endif; ?>
                            <div class="mx-4 space-y-2">
                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <p class="font-semibold text-gray-700">
                                        <?php echo e(__('Name')); ?> <br>
                                        <?php echo e($item->name); ?>

                                    </p>
                                    <p class="font-semibold text-gray-700">
                                        <?php echo e(__('Phone')); ?> <br>
                                        <?php echo e($item->phone); ?>

                                    </p>
                                    <p class="font-semibold text-gray-700">
                                        <?php echo e(__('Address')); ?> <br>
                                        <?php echo e($item->address); ?>

                                    </p>
                                    <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['info' => true,'href' => ''.e(route('customer.details', $item->id)).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['info' => true,'href' => ''.e(route('customer.details', $item->id)).'']); ?>
                                        <i class="fas fa-book"></i>
                                        <?php echo e(__('Details')); ?>

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
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                            </div>
                        </li>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                    <!--[if BLOCK]><![endif]--><?php if($suppliers && $suppliers->isNotEmpty()): ?>
                        <li class="flex items-center text-left px-4 py-3 border-b border-gray-100">
                            <?php if (isset($component)) { $__componentOriginal7faa69b9c6e2e3443481b55eae8beb18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.chips','data' => ['label' => ''.e(__('Suppliers')).'','shade' => 'dark','color' => 'green']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('chips'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => ''.e(__('Suppliers')).'','shade' => 'dark','color' => 'green']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18)): ?>
<?php $attributes = $__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18; ?>
<?php unset($__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7faa69b9c6e2e3443481b55eae8beb18)): ?>
<?php $component = $__componentOriginal7faa69b9c6e2e3443481b55eae8beb18; ?>
<?php unset($__componentOriginal7faa69b9c6e2e3443481b55eae8beb18); ?>
<?php endif; ?>
                            <div class="mx-4 space-y-2">
                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <p class="font-semibold text-gray-700">
                                        <?php echo e(__('Name')); ?> <br>
                                        <?php echo e($item->name); ?>

                                    </p>
                                    <p class="font-semibold text-gray-700">
                                        <?php echo e(__('Phone')); ?> <br>
                                        <?php echo e($item->phone); ?>

                                    </p>
                                    <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['info' => true,'href' => ''.e(route('supplier.details', $item->id)).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['info' => true,'href' => ''.e(route('supplier.details', $item->id)).'']); ?>
                                        <i class="fas fa-book"></i>
                                        <?php echo e(__('Details')); ?>

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
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                            </div>
                        </li>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    <!--[if BLOCK]><![endif]--><?php if($sales && $sales->isNotEmpty()): ?>
                        <li class="flex items-center text-left px-4 py-3 border-b border-gray-100">
                            <?php if (isset($component)) { $__componentOriginal7faa69b9c6e2e3443481b55eae8beb18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.chips','data' => ['label' => ''.e(__('Sales')).'','shade' => 'dark','color' => 'blue']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('chips'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => ''.e(__('Sales')).'','shade' => 'dark','color' => 'blue']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18)): ?>
<?php $attributes = $__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18; ?>
<?php unset($__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7faa69b9c6e2e3443481b55eae8beb18)): ?>
<?php $component = $__componentOriginal7faa69b9c6e2e3443481b55eae8beb18; ?>
<?php unset($__componentOriginal7faa69b9c6e2e3443481b55eae8beb18); ?>
<?php endif; ?>
                            <div class="mx-4">
                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <p class="font-semibold text-gray-700"><?php echo e(__('Date')); ?> :<?php echo e($item->date); ?>

                                    </p>
                                    <p class="font-semibold text-gray-700"><?php echo e(__('Customer name')); ?>

                                        : <?php echo e($item->customer->name); ?>

                                    </p>
                                    <p class="font-semibold text-gray-700"><?php echo e(__('Reference')); ?>

                                        : <?php echo e($item->reference); ?></p>
                                    <p class="font-semibold text-gray-700"><?php echo e(__('Total amount')); ?>

                                        : <?php echo e(format_currency($item->total_amount)); ?></p>
                                    <p class="font-semibold text-gray-700"><?php echo e(__('Due amount')); ?>

                                        : <?php echo e(format_currency($item->due_amount)); ?></p>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                            </div>
                        </li>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    <!--[if BLOCK]><![endif]--><?php if($purchase && $purchase->isNotEmpty()): ?>
                        <li class="flex items-center text-left px-4 py-3 border-b border-gray-100">
                            <?php if (isset($component)) { $__componentOriginal7faa69b9c6e2e3443481b55eae8beb18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.chips','data' => ['label' => ''.e(__('Purchases')).'','shade' => 'dark','color' => 'cyan']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('chips'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => ''.e(__('Purchases')).'','shade' => 'dark','color' => 'cyan']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18)): ?>
<?php $attributes = $__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18; ?>
<?php unset($__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7faa69b9c6e2e3443481b55eae8beb18)): ?>
<?php $component = $__componentOriginal7faa69b9c6e2e3443481b55eae8beb18; ?>
<?php unset($__componentOriginal7faa69b9c6e2e3443481b55eae8beb18); ?>
<?php endif; ?>
                            <div class="mx-4">
                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $purchase; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <p class="font-semibold text-gray-700"><?php echo e(__('Date')); ?> <br>
                                        <?php echo e($item->date); ?>

                                    </p>
                                    <p class="font-semibold text-gray-700"><?php echo e(__('Supplier name')); ?>

                                        <br>
                                        <?php echo e($item->supplier->name); ?>

                                    </p>
                                    <p class="font-semibold text-gray-700"><?php echo e(__('Reference')); ?>

                                        <br>
                                        <?php echo e($item->reference); ?>

                                    </p>
                                    <p class="font-semibold text-gray-700"><?php echo e(__('Total amount')); ?>

                                        <br>
                                        <?php echo e(format_currency($item->total_amount)); ?>

                                    </p>
                                    <p class="font-semibold text-gray-700"><?php echo e(__('Due amount')); ?>

                                        <br>
                                        <?php echo e(format_currency($item->due_amount)); ?>

                                    </p>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                            </div>
                        </li>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    </li>
                </ul>
            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>
    <div class="flex flex-wrap my-2 gap-2">
        <?php if (isset($component)) { $__componentOriginal7faa69b9c6e2e3443481b55eae8beb18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.chips','data' => ['label' => ''.e(__('Products')).'','shade' => 'dark','color' => 'red']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('chips'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => ''.e(__('Products')).'','shade' => 'dark','color' => 'red']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18)): ?>
<?php $attributes = $__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18; ?>
<?php unset($__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7faa69b9c6e2e3443481b55eae8beb18)): ?>
<?php $component = $__componentOriginal7faa69b9c6e2e3443481b55eae8beb18; ?>
<?php unset($__componentOriginal7faa69b9c6e2e3443481b55eae8beb18); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal7faa69b9c6e2e3443481b55eae8beb18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.chips','data' => ['label' => ''.e(__('Customers')).'','shade' => 'dark','color' => 'yellow']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('chips'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => ''.e(__('Customers')).'','shade' => 'dark','color' => 'yellow']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18)): ?>
<?php $attributes = $__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18; ?>
<?php unset($__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7faa69b9c6e2e3443481b55eae8beb18)): ?>
<?php $component = $__componentOriginal7faa69b9c6e2e3443481b55eae8beb18; ?>
<?php unset($__componentOriginal7faa69b9c6e2e3443481b55eae8beb18); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal7faa69b9c6e2e3443481b55eae8beb18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.chips','data' => ['label' => ''.e(__('Suppliers')).'','shade' => 'dark','color' => 'green']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('chips'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => ''.e(__('Suppliers')).'','shade' => 'dark','color' => 'green']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18)): ?>
<?php $attributes = $__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18; ?>
<?php unset($__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7faa69b9c6e2e3443481b55eae8beb18)): ?>
<?php $component = $__componentOriginal7faa69b9c6e2e3443481b55eae8beb18; ?>
<?php unset($__componentOriginal7faa69b9c6e2e3443481b55eae8beb18); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal7faa69b9c6e2e3443481b55eae8beb18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.chips','data' => ['label' => ''.e(__('Sales')).'','shade' => 'dark','color' => 'blue']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('chips'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => ''.e(__('Sales')).'','shade' => 'dark','color' => 'blue']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18)): ?>
<?php $attributes = $__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18; ?>
<?php unset($__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7faa69b9c6e2e3443481b55eae8beb18)): ?>
<?php $component = $__componentOriginal7faa69b9c6e2e3443481b55eae8beb18; ?>
<?php unset($__componentOriginal7faa69b9c6e2e3443481b55eae8beb18); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal7faa69b9c6e2e3443481b55eae8beb18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.chips','data' => ['label' => ''.e(__('Purchases')).'','shade' => 'dark','color' => 'cyan']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('chips'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => ''.e(__('Purchases')).'','shade' => 'dark','color' => 'cyan']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18)): ?>
<?php $attributes = $__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18; ?>
<?php unset($__attributesOriginal7faa69b9c6e2e3443481b55eae8beb18); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7faa69b9c6e2e3443481b55eae8beb18)): ?>
<?php $component = $__componentOriginal7faa69b9c6e2e3443481b55eae8beb18; ?>
<?php unset($__componentOriginal7faa69b9c6e2e3443481b55eae8beb18); ?>
<?php endif; ?>
    </div>
</div>
<?php /**PATH F:\gerenciar-app\Gerenciar\resources\views/livewire/utils/livesearch.blade.php ENDPATH**/ ?>