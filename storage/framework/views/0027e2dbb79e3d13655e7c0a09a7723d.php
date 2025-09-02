<div class="max-w-2xl mx-auto">
    <!--[if BLOCK]><![endif]--><?php if($showSuccess): ?>
        <!-- Success Message -->
        <div class="bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded-lg mb-6 font-bengali">
            <div class="flex items-center">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <div>
                    <h4 class="text-lg font-bold">অর্ডার সফলভাবে সম্পন্ন হয়েছে!</h4>
                    <p class="text-sm mt-1">আমরা শীঘ্রই আপনার সাথে যোগাযোগ করব। ধন্যবাদ!</p>
                </div>
            </div>
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <form wire:submit.prevent="submitOrder" class="bg-white rounded-2xl shadow-xl p-8">
        <!-- Form Header -->
        <div class="text-center mb-8">
            <h3 class="text-2xl font-bold text-gray-900 font-bengali mb-2">অর্ডার ফর্ম</h3>
            <p class="text-gray-600 font-bengali">নিচের তথ্যগুলো সঠিকভাবে পূরণ করুন</p>
        </div>

        <!-- Name Field -->
        <div class="mb-6">
            <label for="name" class="block text-sm font-bold text-gray-700 font-bengali mb-2">
                আপনার নাম *
            </label>
            <input 
                type="text" 
                id="name"
                wire:model.live="name"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-ghee-gold focus:border-transparent font-bengali <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                placeholder="আপনার পূর্ণ নাম লিখুন"
            >
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                <p class="mt-1 text-sm text-red-600 font-bengali"><?php echo e($message); ?></p> 
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
        </div>

        <!-- Mobile Field -->
        <div class="mb-6">
            <label for="mobile" class="block text-sm font-bold text-gray-700 font-bengali mb-2">
                মোবাইল নম্বর *
            </label>
            <input 
                type="tel" 
                id="mobile"
                wire:model.live="mobile"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-ghee-gold focus:border-transparent <?php $__errorArgs = ['mobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                placeholder="01712345678"
                maxlength="11"
            >
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['mobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                <p class="mt-1 text-sm text-red-600 font-bengali"><?php echo e($message); ?></p> 
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
            <p class="mt-1 text-xs text-gray-500 font-bengali">উদাহরণ: 01712345678</p>
        </div>

        <!-- Address Field -->
        <div class="mb-6">
            <label for="address" class="block text-sm font-bold text-gray-700 font-bengali mb-2">
                সম্পূর্ণ ঠিকানা *
            </label>
            <textarea 
                id="address"
                wire:model.live="address"
                rows="3"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-ghee-gold focus:border-transparent font-bengali <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                placeholder="বাড়ির নম্বর, রাস্তার নাম, এলাকা, থানা, জেলা"
            ></textarea>
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                <p class="mt-1 text-sm text-red-600 font-bengali"><?php echo e($message); ?></p> 
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
        </div>

        <!-- Package Selection -->
        <div class="mb-6">
            <label for="package" class="block text-sm font-bold text-gray-700 font-bengali mb-2">
                প্যাকেজ নির্বাচন করুন *
            </label>
            <select 
                id="package"
                wire:model.live="package"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-ghee-gold focus:border-transparent font-bengali <?php $__errorArgs = ['package'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
            >
                <option value="single">সিঙ্গেল প্যাক (৩০০গ্রাম × ১টি) - ৳৮৭০</option>
                <option value="bundle">বান্ডেল প্যাক (৩০০গ্রাম × ২টি) - ৳১৫৩০ (৳২১০ সাশ্রয়)</option>
            </select>
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['package'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                <p class="mt-1 text-sm text-red-600 font-bengali"><?php echo e($message); ?></p> 
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
        </div>

        <!-- Delivery Area -->
        <div class="mb-6">
            <label for="delivery_area" class="block text-sm font-bold text-gray-700 font-bengali mb-2">
                ডেলিভারি এলাকা *
            </label>
            <select 
                id="delivery_area"
                wire:model.live="delivery_area"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-ghee-gold focus:border-transparent font-bengali <?php $__errorArgs = ['delivery_area'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
            >
                <option value="dhaka">ঢাকার ভিতরে (+৳১০০ ডেলিভারি চার্জ)</option>
                <option value="outside">ঢাকার বাইরে (+৳১৫০ ডেলিভারি চার্জ)</option>
            </select>
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['delivery_area'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                <p class="mt-1 text-sm text-red-600 font-bengali"><?php echo e($message); ?></p> 
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
        </div>

        <!-- Order Summary -->
        <div class="bg-gray-50 rounded-lg p-6 mb-6">
            <h4 class="text-lg font-bold text-gray-900 font-bengali mb-4">অর্ডার সামারি</h4>
            
            <div class="space-y-2 text-gray-700 font-bengali">
                <!--[if BLOCK]><![endif]--><?php if($package === 'single'): ?>
                    <div class="flex justify-between">
                        <span>সিঙ্গেল প্যাক (৩০০গ্রাম × ১টি)</span>
                        <span>৳৮৭০</span>
                    </div>
                <?php else: ?>
                    <div class="flex justify-between">
                        <span>বান্ডেল প্যাক (৩০০গ্রাম × ২টি)</span>
                        <span>৳১৫৩০</span>
                    </div>
                    <div class="flex justify-between text-green-600">
                        <span>সাশ্রয়</span>
                        <span>-৳২১০</span>
                    </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                
                <div class="flex justify-between">
                    <span>ডেলিভারি চার্জ</span>
                    <span>
                        <!--[if BLOCK]><![endif]--><?php if($package === 'bundle' && $delivery_area === 'dhaka'): ?>
                            <span class="text-green-600">ফ্রি</span>
                        <?php else: ?>
                            ৳<?php echo e($delivery_area === 'dhaka' ? '100' : '150'); ?>

                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    </span>
                </div>
                
                <hr class="my-3">
                
                <div class="flex justify-between text-xl font-bold text-ghee-gold">
                    <span>মোট</span>
                    <span>৳<?php echo e(number_format($total)); ?></span>
                </div>
            </div>
        </div>

        <!-- Payment Method Info -->
        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-6">
            <div class="flex items-start">
                <svg class="w-5 h-5 text-blue-500 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <div class="text-sm text-blue-700 font-bengali">
                    <p class="font-bold mb-1">পেমেন্ট পদ্ধতি: ক্যাশ অন ডেলিভারি</p>
                    <p>পণ্য হাতে পাওয়ার পর টাকা দিবেন। কোনো অগ্রিম পেমেন্ট লাগবে না।</p>
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <button 
            type="submit"
            wire:loading.attr="disabled"
            class="w-full btn-primary text-xl py-4 px-6 font-bengali disabled:opacity-50 disabled:cursor-not-allowed"
        >
            <span wire:loading.remove>অর্ডার কনফার্ম করুন</span>
            <span wire:loading class="flex items-center justify-center">
                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                অর্ডার প্রসেস হচ্ছে...
            </span>
        </button>

        <!-- Trust Indicators -->
        <div class="mt-6 text-center text-sm text-gray-500 font-bengali">
            <div class="flex items-center justify-center space-x-4">
                <div class="flex items-center">
                    <svg class="w-4 h-4 text-green-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                    নিরাপদ অর্ডার
                </div>
                <div class="flex items-center">
                    <svg class="w-4 h-4 text-blue-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    ১০০% গ্যারান্টিযুক্ত
                </div>
            </div>
        </div>
    </form>
</div><?php /**PATH /Users/asifnewaz/Bonobhumi/resources/views/livewire/contact-form.blade.php ENDPATH**/ ?>