<div x-data="{ openFaq: null }" class="space-y-4">
    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden">
            <!-- Question Header -->
            <button 
                type="button"
                @click="openFaq = openFaq === <?php echo e($faq['id']); ?> ? null : <?php echo e($faq['id']); ?>"
                class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition-colors"
                :class="{ 'bg-gray-50': openFaq === <?php echo e($faq['id']); ?> }"
            >
                <span class="text-lg font-semibold text-gray-900 font-bengali pr-4">
                    <?php echo e($faq['question']); ?>

                </span>
                <div class="flex-shrink-0">
                    <svg 
                        class="w-5 h-5 text-ghee-gold transform transition-transform duration-200"
                        :class="{ 'rotate-180': openFaq === <?php echo e($faq['id']); ?> }"
                        fill="none" 
                        stroke="currentColor" 
                        viewBox="0 0 24 24"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </div>
            </button>
            
            <!-- Answer Content -->
            <div 
                x-show="openFaq === <?php echo e($faq['id']); ?>"
                x-collapse
                class="border-t border-gray-200"
            >
                <div class="px-6 py-4 text-gray-700 font-bengali leading-relaxed">
                    <?php echo e($faq['answer']); ?>

                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    
    <!-- Contact Section -->
    <div class="bg-gradient-to-r from-ghee-gold to-yellow-500 rounded-xl p-6 text-white text-center mt-8">
        <h3 class="text-xl font-bold font-bengali mb-2">আরো কোনো প্রশ্ন আছে?</h3>
        <p class="font-bengali mb-4">আমাদের সাথে যোগাযোগ করুন, আমরা সাহায্য করতে প্রস্তুত</p>
        <div class="flex flex-col sm:flex-row justify-center items-center space-y-2 sm:space-y-0 sm:space-x-4">
            <a href="tel:+8801712345678" class="flex items-center bg-white text-ghee-gold px-4 py-2 rounded-lg font-bengali hover:bg-gray-100 transition-colors">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
                ফোন করুন
            </a>
            <a href="https://wa.me/8801712345678" target="_blank" class="flex items-center bg-green-600 text-white px-4 py-2 rounded-lg font-bengali hover:bg-green-700 transition-colors">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                </svg>
                WhatsApp
            </a>
        </div>
    </div>
</div><?php /**PATH /Users/asifnewaz/Bonobhumi/resources/views/livewire/faq.blade.php ENDPATH**/ ?>