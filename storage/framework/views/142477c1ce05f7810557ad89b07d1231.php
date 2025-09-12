<label class="block mt-4 text-sm">
    <div
        class="w-full p-2 bg-zinc-100 border border-zinc-300 border-dashed rounded"
        x-data="{ isUploading: false, progress: 0 }"
                x-on:livewire-upload-start="isUploading = true"
                x-on:livewire-upload-finish="isUploading = false"
                x-on:livewire-upload-error="isUploading = false"
                x-on:livewire-upload-progress="progress = $event.detail.progress">

        <div x-show="!isUploading">

            
            <input type="file" class="hidden" accept="<?php echo e($rules ?? ''); ?>" <?php echo e(($multiple ?? false) ? 'multiple':''); ?>

                <?php if( $defer ?? true ): ?>
                    wire:model='<?php echo e($name ?? ''); ?>'
                <?php else: ?>
                    wire:model.live='<?php echo e($name ?? ''); ?>'
                <?php endif; ?>
            />

            <!--[if BLOCK]><![endif]--><?php if( !empty($image) ): ?>

                <div class="flex items-center space-x-4">
                    <!--[if BLOCK]><![endif]--><?php if( $image ?? true ): ?>
                        <img src="<?php echo e($image->temporaryUrl() ?? ''); ?>" class="w-20 h-20">
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    <div class="font-light text-zinc-500">
                        <p>Type: <?php echo e(Str::upper($photoInfo["extension"])); ?></p>
                        <p>Size: <?php echo e($photoInfo["size"]); ?> MB</p>
                        <button wire:click="$set('<?php echo e($name); ?>')" class="px-2 mt-2 text-xs text-red-400 border border-red-400 rounded">
                            <?php echo e(__('Remove')); ?>

                        </button>
                    </div>
                </div>

            <?php elseif( !empty($preview) ): ?>

                <div class="flex items-center space-x-4">
                    <img src="<?php echo e($preview); ?>" class="w-20 h-20">
                    <div class="font-light text-zinc-500">
                        <div class="px-2 mt-2 text-xs border rounded text-primary-400 border-primary-400">
                            <?php echo e(__('Change')); ?>

                        </div>
                    </div>
                </div>

            <?php else: ?>

                
                <p class="flex items-center text-sm font-light text-zinc-400">
                    <i class="bi bi-cloud-upload mr-2"></i>
                    <?php echo e(__('Upload a file or drag and drop')); ?> | <?php echo e($types ?? 'Any File'); ?>

                </p>

            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>

        
        <!-- Progress Bar -->
        <div x-show="isUploading">
            <progress max="100" x-bind:value="progress" class="w-full h-1 overflow-hidden bg-red-500 rounded"></progress>
        </div>
    </div>
    <!--[if BLOCK]><![endif]--><?php $__errorArgs = [$name ?? ''];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="mt-1 text-xs text-red-700"><?php echo e($message); ?></span>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
  </label><?php /**PATH F:\gerenciar-app\Gerenciar\resources\views/components/media-upload.blade.php ENDPATH**/ ?>