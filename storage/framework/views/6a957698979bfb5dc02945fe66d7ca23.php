<div>

    <div class="flex flex-wrap">
        <div class="lg:w-1/2 sm:w-full pb-2 mb-2 bg-white relative">
            <div class="flex w-full px-4 justify-between items-center">
                <h3><?php echo e(__('Sales/Purchases')); ?></h3>
            </div>
            <div id="chart"></div>
        </div>
        <div class="lg:w-1/2 sm:w-full pb-2 mb-2 bg-white relative">
            <div class="w-full px-4 justify-between items-center">
                <h3><?php echo e(__('Monthly Cash Flow (Payment Sent & Received)')); ?></h3>
            </div>
            <div id="monthly-chart"></div>
        </div>
        <div class="w-full pb-2 mb-2 bg-white relative">
            <div class="w-full px-4 justify-between items-center">
                <h3><?php echo e(__('Daily Sales and Purchases')); ?></h3>
            </div>
            <div id="daily-chart"></div>
        </div>
        <div class="w-full pb-2 mb-2 bg-white relative">
            <div class="w-full px-4 justify-between items-center">
                <h3><?php echo e(__('Payment Chart')); ?></h3>
            </div>
            <div id="payment-chart"></div>
        </div>
    </div>
    <div class="w-full px-2 pb-2 mt-2">
        <div class="bg-white rounded-lg border border-gray-200 pb-2">
            <div class="py-3 px-5 mb-3 w-full inline-flex itees-center justify-between">
                <span class="text-md font-semibold text-gray-700"><?php echo e(__('Recent Sale')); ?></span>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-left px-4"><?php echo e('Customer'); ?></th>
                        <th class="text-left px-4"><?php echo e('Total'); ?></th>
                        <th class="text-left px-4"><?php echo e('Date'); ?></th>
                        <th class="text-left px-4"><?php echo e('Status'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $lastSales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="text-sm antialiased">
                            <td class="px-4 py-2">
                                <p class="font-bold tracking-wide text-gray-800"><?php echo e($sale->customer?->name); ?>

                                </p>
                                <span class="text-indigo-600 text-xs font-semibold"><?php echo e($sale->reference); ?></span>
                            </td>
                            <td class="px-4 py-2"><?php echo e(format_currency($sale->total_amount)); ?></td>
                            <td class="px-4 py-2"><?php echo e($sale->date); ?></td>
                            <td class="px-4 py-2">
                                <?php
                                    $type = $sale->status->getBadgeType();
                                ?>
                                <?php if (isset($component)) { $__componentOriginal2ddbc40e602c342e508ac696e52f8719 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2ddbc40e602c342e508ac696e52f8719 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.badge','data' => ['type' => $type]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($type)]); ?><?php echo e($sale->status->label()); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2ddbc40e602c342e508ac696e52f8719)): ?>
<?php $attributes = $__attributesOriginal2ddbc40e602c342e508ac696e52f8719; ?>
<?php unset($__attributesOriginal2ddbc40e602c342e508ac696e52f8719); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2ddbc40e602c342e508ac696e52f8719)): ?>
<?php $component = $__componentOriginal2ddbc40e602c342e508ac696e52f8719; ?>
<?php unset($__componentOriginal2ddbc40e602c342e508ac696e52f8719); ?>
<?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </tbody>
            </table>
        </div>
    </div>
    <div class="px-2 w-full pb-2">
        <div class="bg-white rounded-lg border border-gray-200 pb-2">
            <div class="py-3 px-5 mb-3 w-full inline-flex items-center justify-between">
                <span class="text-md font-semibold text-gray-700"><?php echo e(__('Recent Purchase')); ?></span>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-left px-4"><?php echo e('Supplier'); ?></th>
                        <th class="text-left px-4"><?php echo e('Total'); ?></th>
                        <th class="text-left px-4"><?php echo e('Date'); ?></th>
                        <th class="text-left px-4"><?php echo e('Status'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $lastPurchases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $purchase): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="text-sm antialiased">
                            <td class="px-4 py-2">
                                <a href="<?php echo e(route('supplier.details', $purchase->supplier->id)); ?>"
                                    class="text-indigo-500 hover:text-indigo-600 
                                    font-bold tracking-wide">
                                    <?php echo e($purchase->supplier->name); ?>

                                </a>
                                <span class="text-indigo-600 text-xs font-semibold"><?php echo e($purchase->reference); ?></span>
                            </td>
                            <td class="px-4 py-2"><?php echo e(format_currency($purchase->total_amount)); ?></td>
                            <td class="px-4 py-2"><?php echo e($purchase->date); ?></td>
                            <td class="px-4 py-2">
                                <?php
                                    $badgeType = $purchase->status->getBadgeType();
                                ?>

                                <?php if (isset($component)) { $__componentOriginal2ddbc40e602c342e508ac696e52f8719 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2ddbc40e602c342e508ac696e52f8719 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.badge','data' => ['type' => $badgeType]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($badgeType)]); ?><?php echo e($purchase->status->label()); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2ddbc40e602c342e508ac696e52f8719)): ?>
<?php $attributes = $__attributesOriginal2ddbc40e602c342e508ac696e52f8719; ?>
<?php unset($__attributesOriginal2ddbc40e602c342e508ac696e52f8719); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2ddbc40e602c342e508ac696e52f8719)): ?>
<?php $component = $__componentOriginal2ddbc40e602c342e508ac696e52f8719; ?>
<?php unset($__componentOriginal2ddbc40e602c342e508ac696e52f8719); ?>
<?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </tbody>
            </table>
        </div>
    </div>

    <div class="flex flex-wrap gap-y-4">
        <div class="sm:w-1/2 w-full px-2">
            <div class="bg-white rounded-lg border border-gray-200 pb-2">
                <div class="py-3 px-5 w-full inline-flex items-center justify-between text-gray-700">
                    <span class="text-md font-semibold"><?php echo e(__('Top 5 Sellers in')); ?> <?php echo e(now()->format('F')); ?></span>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th><?php echo e(__('Seller')); ?></th>
                            <th><?php echo e(__('Profit')); ?></th>
                            <th><?php echo e(__('Customer')); ?></th>
                            <th><?php echo e(__('Sale Date')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $bestSales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="antialiased" wire:key="<?php echo e($sale->id); ?>">
                                <td class="py-1 px-2"><?php echo e($sale->user->name); ?></td>
                                <td class="py-1 px-2"><?php echo e(format_currency($sale->total_amount)); ?></td>
                                <td class="py-1 px-2"><?php echo e($sale->customer->name); ?></td>
                                <td class="py-1 px-2"><?php echo e($sale->created_at->format('Y-m-d')); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </tbody>
                </table>
            </div>
        </div>

        <div class="sm:w-1/2 w-full px-2">
            <div class="bg-white rounded-lg border border-gray-200 pb-2">
                <div class="py-3 px-5 w-full inline-flex items-center justify-between text-gray-700">
                    <span class="text-md font-semibold"><?php echo e(__('Top Products in')); ?> <?php echo e(now()->format('F')); ?></span>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th><?php echo e(__('Product Name')); ?></th>
                            <th><?php echo e(__('Code')); ?></th>
                            <th><?php echo e(__('Total Quantity')); ?></th>
                            <th><?php echo e(__('Total Sales')); ?></th>
                            <th><?php echo e(__('Warehouse')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $this->topProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="antialiased" wire:key="<?php echo e($product->id); ?>">
                                <td class="py-1 px-2"><?php echo e($product->name); ?></td>
                                <td class="py-1 px-2"><?php echo e($product->code); ?></td>
                                <td class="py-1 px-2"><?php echo e($product->qtyItem); ?></td>
                                <td class="py-1 px-2"><?php echo e(format_currency($product->totalSalesAmount)); ?></td>
                                <td class="py-1 px-2">
                                    <?php if (isset($component)) { $__componentOriginal2ddbc40e602c342e508ac696e52f8719 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2ddbc40e602c342e508ac696e52f8719 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.badge','data' => ['danger' => true,'class' => 'text-sm']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['danger' => true,'class' => 'text-sm']); ?><?php echo e(\App\Helpers::warehouseName($product->warehouse_id)); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2ddbc40e602c342e508ac696e52f8719)): ?>
<?php $attributes = $__attributesOriginal2ddbc40e602c342e508ac696e52f8719; ?>
<?php unset($__attributesOriginal2ddbc40e602c342e508ac696e52f8719); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2ddbc40e602c342e508ac696e52f8719)): ?>
<?php $component = $__componentOriginal2ddbc40e602c342e508ac696e52f8719; ?>
<?php unset($__componentOriginal2ddbc40e602c342e508ac696e52f8719); ?>
<?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </tbody>
                </table>

            </div>
        </div>
        <div class="sm:w-1/2 w-full px-2">
            <div class="bg-white rounded-lg border border-gray-200 pb-2">
                <div class="py-3 px-5 w-full inline-flex items-center justify-between text-gray-700">
                    <span class="text-md font-semibold"><?php echo e(__('Top Customers by Warehouse')); ?></span>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th><?php echo e(__('Warehouse')); ?></th>
                            <th><?php echo e(__('Top Customer')); ?></th>
                            <th><?php echo e(__('Total Sales')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $this->topCustomers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="antialiased" wire:key="<?php echo e($index); ?>">
                                <td><?php echo e($index); ?></td>
                                <td class="py-1 px-2">
                                    <?php if (isset($component)) { $__componentOriginal2ddbc40e602c342e508ac696e52f8719 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2ddbc40e602c342e508ac696e52f8719 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.badge','data' => ['danger' => true,'class' => 'text-sm']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['danger' => true,'class' => 'text-sm']); ?><?php echo e(\App\Helpers::warehouseName($customer->warehouse_id)); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2ddbc40e602c342e508ac696e52f8719)): ?>
<?php $attributes = $__attributesOriginal2ddbc40e602c342e508ac696e52f8719; ?>
<?php unset($__attributesOriginal2ddbc40e602c342e508ac696e52f8719); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2ddbc40e602c342e508ac696e52f8719)): ?>
<?php $component = $__componentOriginal2ddbc40e602c342e508ac696e52f8719; ?>
<?php unset($__componentOriginal2ddbc40e602c342e508ac696e52f8719); ?>
<?php endif; ?>
                                </td>

                                <td class="py-1 px-2"><?php echo e($customer->name); ?></td>

                                <td class="py-1 px-2"><?php echo e(format_currency($customer->totalSalesAmount)); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </tbody>
                </table>
            </div>
        </div>
    </div>


        <?php
        $__scriptKey = '3392366324-0';
        ob_start();
    ?>
        <script>
            document.addEventListener('livewire:init', () => {
                var dailyChart = new ApexCharts(document.querySelector("#daily-chart"), <?php echo json_encode($this->dailyChartOptions, 15, 512) ?>);
                console.log(dailyChart);
                dailyChart.render();

                // Render the monthly cash flow chart
                var monthlyChart = new ApexCharts(document.querySelector("#monthly-chart"),
                    <?php echo json_encode($this->monthlyChartOptions, 15, 512) ?>);

                monthlyChart.render();

                var paymentChart = new ApexCharts(document.querySelector("#payment-chart"),
                    <?php echo json_encode($this->paymentChart, 15, 512) ?>);
                paymentChart.render();

                function chart(data, selector) {
                    let tes = data;
                    let options = {
                        series: [{
                                name: "Sales Total Amount",
                                data: tes.total.sales
                            },
                            {
                                name: "Sales Due Amount",
                                data: tes.due_amount.sales
                            },
                            {
                                name: "Purchase Total Amount",
                                data: tes.total.purchase
                            },
                            {
                                name: "Purchase Due Amount",
                                data: tes.due_amount.purchase
                            }
                        ],
                        chart: {
                            height: 350,
                            width: '100%',
                            type: "bar",
                            zoom: {
                                enabled: false
                            }
                        },
                        responsive: [{
                            breakpoint: undefined,
                            options: {},
                        }],
                        plotOptions: {
                            bar: {
                                horizontal: false,
                                borderRadius: 4,
                                dataLabels: {
                                    position: "top"
                                }
                            }
                        },
                        dataLabels: {
                            enabled: true,
                            offsetY: -20,
                            style: {
                                fontSize: "12px",
                                colors: ["#fff"],
                            },
                            formatter: function(val, opt) {
                                return opt.w.globals.labels[opt.dataPointIndex] + ": " + val;
                            },
                        },
                        stroke: {
                            show: true,
                            width: 1,
                            colors: ["#fff"]
                        },
                        markers: {
                            size: 5,
                            colors: ["#1a56db"],
                            strokeColor: "#ffffff",
                            strokeWidth: 3
                        },
                        xaxis: {
                            categories: tes.labels,
                            labels: {
                                style: {
                                    colors: "#1a56db"
                                }
                            }
                        },
                        yaxis: {
                            title: {
                                text: "Amount",
                            },
                        },
                        tooltip: {
                            y: {
                                formatter: function(val) {
                                    return "$" + val;
                                },
                            },
                        },
                        legend: {
                            position: "top",
                            horizontalAlign: "center",
                            offsetX: 40,
                        },
                    };
                    const chart = new ApexCharts(document.querySelector(selector), options);
                    chart.render();
                }
                chart(<?php echo $charts; ?>, '#chart');
            })
        </script>
        <?php
        $__output = ob_get_clean();

        \Livewire\store($this)->push('scripts', $__output, $__scriptKey)
    ?>

</div>
<?php /**PATH F:\gerenciar-app\Gerenciar\resources\views/livewire/stats/transactions.blade.php ENDPATH**/ ?>