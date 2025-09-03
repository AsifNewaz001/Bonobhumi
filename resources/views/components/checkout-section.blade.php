<section id="checkout" class="py-16 bg-gradient-to-r from-amber-50 to-orange-50" x-data="checkoutCart()">
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

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
            
            <!-- Left Side - Package Selection -->
            <div>
                <h3 class="text-2xl font-bold text-gray-900 font-bengali mb-8 text-center">প্যাকেজ নির্বাচন করুন</h3>
                
                <!-- Pricing Cards -->
                <div class="space-y-6">
                    <!-- Single Pack -->
                    <div class="bg-white rounded-2xl shadow-xl p-6 relative border-2 transition-colors" :class="selectedPackage === 'single' ? 'border-ghee-gold' : 'border-gray-200'">
                        <div class="flex items-center space-x-4">
                            <input type="radio" name="package" value="single" id="single-pack" class="w-5 h-5 text-ghee-gold" x-model="selectedPackage" @change="updateCart()">
                            <div class="flex-1">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="text-xl font-bold text-gray-900 font-bengali">সিঙ্গেল প্যাক</h4>
                                        <p class="text-gray-600 font-bengali text-sm">একটি পরিবারের জন্য</p>
                                    </div>
                                    <div class="w-16 h-16">
                                        <img src="{{ asset('assets/singleProduct.png') }}" alt="বনভূমি A2 সরের ঘি" class="w-full h-full object-contain">
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <div class="text-2xl font-bold text-ghee-gold font-bengali">৳৮৭০</div>
                                    <div class="text-gray-500 font-bengali text-sm">৩০০গ্রাম × ১টি</div>
                                </div>
                                <ul class="mt-3 space-y-1 text-sm text-gray-600 font-bengali">
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                        ১০০% খাঁটি A2 সরের ঘি
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                        ঐতিহ্যবাহী বিলোনা পদ্ধতি
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                        ৬ মাসের শেলফ লাইফ
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Bundle Pack (Popular) -->
                    <div class="bg-white rounded-2xl shadow-xl p-6 relative border-2 transition-colors" :class="selectedPackage === 'bundle' ? 'border-ghee-gold' : 'border-gray-200'">
                        <!-- Popular Badge -->
                        <div class="absolute -top-3 left-1/2 transform -translate-x-1/2">
                            <div class="bg-ghee-gold text-white px-4 py-1 rounded-full font-bold font-bengali text-sm">
                                সবচেয়ে জনপ্রিয়
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-4 mt-2">
                            <input type="radio" name="package" value="bundle" id="bundle-pack" class="w-5 h-5 text-ghee-gold" x-model="selectedPackage" @change="updateCart()">
                            <div class="flex-1">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="text-xl font-bold text-gray-900 font-bengali">বান্ডেল প্যাক</h4>
                                        <p class="text-gray-600 font-bengali text-sm">বড় পরিবার ও বেশি সাশ্রয়ী</p>
                                    </div>
                                    <div class="w-16 h-16">
                                        <img src="{{ asset('gheeBig.png') }}" alt="বনভূমি A2 সরের ঘি বান্ডেল প্যাক" class="w-full h-full object-contain">
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <div class="flex items-center space-x-2 mb-1">
                                        <span class="text-lg text-gray-500 line-through font-bengali">৳১৭৪০</span>
                                        <span class="bg-red-500 text-white px-2 py-1 rounded-full text-xs font-bengali">৳২১০ সাশ্রয়</span>
                                    </div>
                                    <div class="text-2xl font-bold text-ghee-gold font-bengali">৳১৫৩০</div>
                                    <div class="text-gray-500 font-bengali text-sm">৩০০গ্রাম × ২টি</div>
                                </div>
                                <ul class="mt-3 space-y-1 text-sm text-gray-600 font-bengali">
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                        ১০০% খাঁটি A2 সরের ঘি (২টি)
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                        ২১০ টাকা সাশ্রয়
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                        দীর্ঘ সময় ব্যবহারের জন্য
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                        <strong>বিনামূল্যে ডেলিভারি (ঢাকায়)</strong>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side - Order Form -->
            <div class="bg-white rounded-2xl shadow-xl p-8">
                <h3 class="text-2xl font-bold text-gray-900 font-bengali mb-2 text-center">অর্ডার করতে নিচের ফর্মটি পূরণ করুন</h3>
                <p class="text-gray-600 font-bengali text-center mb-8">ক্যাশ অন ডেলিভারি সুবিধা</p>
                
                <!-- Order Summary -->
                <div class="bg-gray-50 rounded-lg p-6 mb-6">
                    <h4 class="text-lg font-bold text-gray-900 font-bengali mb-4">অর্ডার সামারি</h4>
                    
                    <div class="space-y-3">
                        <div class="flex justify-between items-center">
                            <span class="font-bengali text-gray-700" x-text="cart.name"></span>
                            <span class="font-bengali font-semibold" x-text="'৳' + cart.price"></span>
                        </div>
                        
                        <div class="flex justify-between items-center text-sm" x-show="cart.savings > 0">
                            <span class="font-bengali text-green-600">সাশ্রয়</span>
                            <span class="font-bengali text-green-600" x-text="'-৳' + cart.savings"></span>
                        </div>
                        
                        <div class="flex justify-between items-center text-sm">
                            <span class="font-bengali text-gray-600">ডেলিভারি চার্জ</span>
                            <span class="font-bengali text-gray-600" x-text="cart.delivery"></span>
                        </div>
                        
                        <div class="border-t pt-3 mt-3">
                            <div class="flex justify-between items-center text-lg font-bold">
                                <span class="font-bengali text-gray-900">মোট</span>
                                <span class="font-bengali text-ghee-gold" x-text="'৳' + cart.total"></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-4 p-3 bg-blue-50 rounded-lg">
                        <p class="text-sm font-bengali text-blue-800">
                            <strong>পেমেন্ট পদ্ধতি:</strong> ক্যাশ অন ডেলিভারি
                        </p>
                        <p class="text-xs font-bengali text-blue-600 mt-1">
                            পণ্য হাতে পাওয়ার পর টাকা দিবেন। কোনো অগ্রিম পেমেন্ট লাগবে না।
                        </p>
                    </div>
                </div>
                
                @livewire('contact-form')
            </div>
        </div>
    </div>
</section>

<script>
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

function checkoutCart() {
    return {
        selectedPackage: 'bundle', // Default to bundle pack
        cart: {
            name: 'বান্ডেল প্যাক (৩০০গ্রাম × ২টি)',
            price: 1530,
            savings: 210,
            delivery: 'ফ্রি',
            total: 1530
        },
        
        updateCart() {
            if (this.selectedPackage === 'single') {
                this.cart = {
                    name: 'সিঙ্গেল প্যাক (৩০০গ্রাম × ১টি)',
                    price: 870,
                    savings: 0,
                    delivery: '+৳১০০',
                    total: 970
                };
            } else {
                this.cart = {
                    name: 'বান্ডেল প্যাক (৩০০গ্রাম × ২টি)',
                    price: 1530,
                    savings: 210,
                    delivery: 'ফ্রি',
                    total: 1530
                };
            }
        }
    }
}
</script>