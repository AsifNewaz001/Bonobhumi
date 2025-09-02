<section id="pricing" class="py-16 bg-gradient-to-r from-amber-50 to-orange-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 font-bengali mb-4">
                সীমিত সময়ের অফার
            </h2>
            <div class="w-24 h-1 bg-ghee-gold mx-auto mb-6"></div>
            <p class="text-xl text-gray-600 font-bengali">
                ঐতিহ্যের সেই স্বাদ পেতে সংগ্রহ করুন
            </p>
        </div>
        
        <!-- Countdown Timer -->
        <div class="bg-gradient-to-r from-red-500 to-pink-600 text-white rounded-2xl p-6 mb-12 text-center relative overflow-hidden z-50" x-data="countdown()" x-init="init()">
            <div class="absolute inset-0 bg-black opacity-10"></div>
            <div class="relative z-10">
                <div class="flex justify-center items-center space-x-2 sm:space-x-4 text-3xl font-bold font-bengali">
                    <div class="text-center">
                        <div class="text-3xl sm:text-4xl font-black" x-text="days">০২</div>
                        <div class="text-xs sm:text-sm">দিন</div>
                    </div>
                    <div class="text-3xl sm:text-4xl font-black">:</div>
                    <div class="text-center">
                        <div class="text-3xl sm:text-4xl font-black" x-text="hours">১২</div>
                        <div class="text-xs sm:text-sm">ঘন্টা</div>
                    </div>
                    <div class="text-3xl sm:text-4xl font-black">:</div>
                    <div class="text-center">
                        <div class="text-3xl sm:text-4xl font-black" x-text="minutes">২৭</div>
                        <div class="text-xs sm:text-sm">মিনিট</div>
                    </div>
                    <div class="text-3xl sm:text-4xl font-black">:</div>
                    <div class="text-center">
                        <div class="text-3xl sm:text-4xl font-black" x-text="seconds">০০</div>
                        <div class="text-xs sm:text-sm">সেকেন্ড</div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Pricing Cards -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 max-w-5xl mx-auto">
            <!-- Single Pack -->
            <div class="bg-white rounded-2xl shadow-xl p-8 relative border-2 border-gray-200 hover:border-ghee-gold transition-colors">
                <div class="text-center mb-6">
                    <h3 class="text-2xl font-bold text-gray-900 font-bengali mb-2">সিঙ্গেল প্যাক</h3>
                    <div class="text-gray-600 font-bengali mb-4">একটি পরিবারের জন্য</div>
                    
                    <!-- Product Image -->
                    <div class="w-32 h-32 mx-auto mb-6">
                        <img src="<?php echo e(asset('assets/singleProduct.png')); ?>" alt="বনভূমি A2 সরের ঘি" class="w-full h-full object-contain">
                    </div>
                    
                    <!-- Pricing -->
                    <div class="mb-6">
                        <div class="text-4xl font-bold text-ghee-gold font-bengali">৳৮৭০</div>
                        <div class="text-gray-500 font-bengali">৩০০গ্রাম × ১টি</div>
                    </div>
                </div>
                
                <!-- Features -->
                <ul class="space-y-3 mb-8 font-bengali text-gray-600">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        ১০০% খাঁটি A2 সরের ঘি
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        ঐতিহ্যবাহী বিলোনা পদ্ধতি
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        ৬ মাসের শেলফ লাইফ
                    </li>
                </ul>
                
                <!-- CTA Button -->
                <button onclick="selectPackage('single')" class="w-full bg-gray-700 hover:bg-gray-800 text-white font-bold py-4 px-6 rounded-lg transition-colors duration-300 font-bengali">
                    এই প্যাকেজ নির্বাচন করুন
                </button>
            </div>
            
            <!-- Bundle Pack (Popular) -->
            <div class="bg-white rounded-2xl shadow-xl p-8 relative border-2 border-ghee-gold transform lg:scale-105">
                <!-- Popular Badge -->
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                    <div class="bg-ghee-gold text-white px-6 py-2 rounded-full font-bold font-bengali text-sm">
                        সবচেয়ে জনপ্রিয়
                    </div>
                </div>
                
                <div class="text-center mb-6 mt-4">
                    <h3 class="text-2xl font-bold text-gray-900 font-bengali mb-2">বান্ডেল প্যাক</h3>
                    <div class="text-gray-600 font-bengali mb-4">বড় পরিবার ও বেশি সাশ্রয়ী</div>
                    
                    <!-- Product Image -->
                    <div class="w-32 h-32 mx-auto mb-6">
                        <img src="<?php echo e(asset('gheeBig.png')); ?>" alt="বনভূমি A2 সরের ঘি বান্ডেল প্যাক" class="w-full h-full object-contain">
                    </div>
                    
                    <!-- Pricing -->
                    <div class="mb-6">
                        <div class="flex items-center justify-center space-x-3 mb-2">
                            <span class="text-2xl text-gray-500 line-through font-bengali">৳১৭৪০</span>
                            <span class="bg-red-500 text-white px-3 py-1 rounded-full text-sm font-bengali">৳২১০ সাশ্রয়</span>
                        </div>
                        <div class="text-4xl font-bold text-ghee-gold font-bengali">৳১৫৩০</div>
                        <div class="text-gray-500 font-bengali">৩০০গ্রাম × ২টি</div>
                    </div>
                </div>
                
                <!-- Features -->
                <ul class="space-y-3 mb-8 font-bengali text-gray-600">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        ১০০% খাঁটি A2 সরের ঘি (২টি)
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        ২১০ টাকা সাশ্রয়
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        দীর্ঘ সময় ব্যবহারের জন্য
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <strong>বিনামূল্যে ডেলিভারি (ঢাকায়)</strong>
                    </li>
                </ul>
                
                <!-- CTA Button -->
                <button onclick="selectPackage('bundle')" class="w-full btn-primary text-lg py-4 px-6 font-bengali">
                    এই প্যাকেজ নির্বাচন করুন
                </button>
            </div>
        </div>
    </div>
</section>

<script>
function selectPackage(packageType) {
    // Scroll to order form
    document.getElementById('order').scrollIntoView({ behavior: 'smooth' });
    
    // Select the package in the form
    setTimeout(() => {
        const packageSelect = document.querySelector('select[name="package"]');
        if (packageSelect) {
            packageSelect.value = packageType;
            packageSelect.dispatchEvent(new Event('change'));
        }
    }, 500);
}

function countdown() {
    return {
        days: '০২',
        hours: '১২',
        minutes: '২৭',
        seconds: '০০',
        init() {
            // Set end date (2 days, 12 hours, 27 minutes from now)
            const endDate = new Date();
            endDate.setDate(endDate.getDate() + 2);
            endDate.setHours(endDate.getHours() + 12);
            endDate.setMinutes(endDate.getMinutes() + 27);
            
            this.updateCountdown(endDate);
            
            // Update every second
            setInterval(() => {
                this.updateCountdown(endDate);
            }, 1000);
        },
        
        updateCountdown(endDate) {
            const now = new Date().getTime();
            const distance = endDate.getTime() - now;
            
            if (distance > 0) {
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);
                
                // Convert to Bengali numbers
                this.days = this.toBengali(days.toString().padStart(2, '0'));
                this.hours = this.toBengali(hours.toString().padStart(2, '0'));
                this.minutes = this.toBengali(minutes.toString().padStart(2, '0'));
                this.seconds = this.toBengali(seconds.toString().padStart(2, '0'));
            } else {
                this.days = '০০';
                this.hours = '০০';
                this.minutes = '০০';
                this.seconds = '০০';
            }
        },
        
        toBengali(number) {
            const bengaliNumbers = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
            return number.replace(/\d/g, (digit) => bengaliNumbers[digit]);
        }
    }
}
</script><?php /**PATH /Users/asifnewaz/Bonobhumi/resources/views/components/pricing-section.blade.php ENDPATH**/ ?>