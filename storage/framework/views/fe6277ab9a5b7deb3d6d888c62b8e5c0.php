<div class="relative" x-data="{ autoplay: true }" x-init="
    if (autoplay) {
        setInterval(() => {
            $wire.nextSlide();
        }, 5000);
    }
">
    <!-- Carousel Container -->
    <div class="relative overflow-hidden rounded-2xl bg-gray-50">
        <div class="flex transition-transform duration-500 ease-in-out" style="transform: translateX(-<?php echo e($currentSlide * 100); ?>%)">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="w-full flex-shrink-0">
                    <div class="bg-white mx-4 my-6 p-8 rounded-xl shadow-lg">
                        <div class="flex flex-col lg:flex-row items-center lg:items-start space-y-6 lg:space-y-0 lg:space-x-8">
                            <!-- Customer Image -->
                            <div class="flex-shrink-0">
                                <img 
                                    src="<?php echo e(asset($testimonial['image'])); ?>" 
                                    alt="<?php echo e($testimonial['name']); ?>"
                                    class="w-20 h-20 rounded-full object-cover border-4 border-ghee-gold"
                                >
                            </div>
                            
                            <!-- Testimonial Content -->
                            <div class="flex-1 text-center lg:text-left">
                                <!-- Stars -->
                                <div class="flex justify-center lg:justify-start mb-4">
                                    <!--[if BLOCK]><![endif]--><?php for($i = 1; $i <= 5; $i++): ?>
                                        <svg class="w-5 h-5 <?php echo e($i <= $testimonial['rating'] ? 'text-yellow-400' : 'text-gray-300'); ?>" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                    <?php endfor; ?><!--[if ENDBLOCK]><![endif]-->
                                </div>
                                
                                <!-- Quote -->
                                <blockquote class="text-gray-700 font-bengali text-lg leading-relaxed mb-6 italic">
                                    "<?php echo e($testimonial['text']); ?>"
                                </blockquote>
                                
                                <!-- Customer Info -->
                                <div class="font-bengali">
                                    <h4 class="text-xl font-bold text-gray-900"><?php echo e($testimonial['name']); ?></h4>
                                    <p class="text-gray-500"><?php echo e($testimonial['location']); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    </div>
    
    <!-- Navigation Arrows -->
    <button 
        wire:click="prevSlide"
        class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white hover:bg-gray-50 rounded-full p-3 shadow-lg transition-all duration-200 hover:scale-110"
        @click="autoplay = false"
    >
        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
        </svg>
    </button>
    
    <button 
        wire:click="nextSlide"
        class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white hover:bg-gray-50 rounded-full p-3 shadow-lg transition-all duration-200 hover:scale-110"
        @click="autoplay = false"
    >
        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
        </svg>
    </button>
    
    <!-- Dots Indicator -->
    <div class="flex justify-center mt-6 space-x-2">
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <button 
                wire:click="goToSlide(<?php echo e($index); ?>)"
                class="w-3 h-3 rounded-full transition-all duration-200 <?php echo e($currentSlide === $index ? 'bg-ghee-gold scale-125' : 'bg-gray-300 hover:bg-gray-400'); ?>"
                @click="autoplay = false"
            ></button>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    </div>
    
</div><?php /**PATH /Users/asifnewaz/Bonobhumi/resources/views/livewire/testimonial-carousel.blade.php ENDPATH**/ ?>