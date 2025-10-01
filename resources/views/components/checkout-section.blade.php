<!-- Import Share Tech Font -->
<link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono:wght@400&display=swap" rel="stylesheet">

<style>
/* Flipping animation styles */
.digit-flip {
    transform-style: preserve-3d;
    position: relative;
}

.digit-flip.flipping {
    animation: flipUp 0.6s ease-in-out;
}

@keyframes flipUp {
    0% {
        transform: rotateX(0deg);
    }
    50% {
        transform: rotateX(-90deg);
    }
    100% {
        transform: rotateX(0deg);
    }
}

.digit-container {
    perspective: 1000px;
}
</style>

<section id="checkout" class="py-16 bg-white" x-data="orderForm()">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="font-bold text-gray-900 mb-8" style="font-family: 'Hind Siliguri', sans-serif; font-size: clamp(24px, 5vw, 48px); color: #604D20;">
                সীমিত সময়ের অফার
            </h2>
        </div>
        
        <!-- Countdown Timer -->
    </div>
    <div class="w-full bg-cover bg-center bg-no-repeat py-16 mb-12" style="background-image: url('{{ asset('cloud.png') }}');" x-data="countdown()" x-init="init()">
        <div class="text-center">
            <!-- Timer Boxes -->
            <div class="flex justify-center items-center space-x-4 sm:space-x-6 mb-8">
                <!-- Days -->
                <div class="text-center">
                    <div class="rounded-lg p-4 sm:p-6 shadow-lg relative overflow-hidden" style="background-color: #1BAA76;">
                        <!-- Middle line with rounded circles -->
                        <div class="absolute inset-x-0 top-1/2 h-1 bg-black bg-opacity-20 flex items-center justify-between">
                            <div class="w-3 h-3 bg-black bg-opacity-20 rounded-full -ml-1.5"></div>
                            <div class="w-3 h-3 bg-black bg-opacity-20 rounded-full -mr-1.5"></div>
                        </div>
                        <!-- Digit container with flip animation -->
                        <div class="digit-container relative h-20 flex items-center justify-center">
                            <div class="digit-flip text-6xl font-bold transition-transform duration-300 ease-in-out" 
                                 style="font-family: 'Share Tech', monospace; color: #F2F2F2; font-size: 56px;" 
                                 x-text="days">০২</div>
                        </div>
                    </div>
                    <div class="text-sm font-medium text-gray-700 mt-2" style="font-family: 'Hind Siliguri', sans-serif;">দিন</div>
                </div>
                
                <!-- Hours -->
                <div class="text-center">
                    <div class="rounded-lg p-4 sm:p-6 shadow-lg relative overflow-hidden" style="background-color: #1BAA76;">
                        <!-- Middle line with rounded circles -->
                        <div class="absolute inset-x-0 top-1/2 h-1 bg-black bg-opacity-20 flex items-center justify-between">
                            <div class="w-3 h-3 bg-black bg-opacity-20 rounded-full -ml-1.5"></div>
                            <div class="w-3 h-3 bg-black bg-opacity-20 rounded-full -mr-1.5"></div>
                        </div>
                        <!-- Digit container with flip animation -->
                        <div class="digit-container relative h-20 flex items-center justify-center">
                            <div class="digit-flip text-6xl font-bold transition-transform duration-300 ease-in-out" 
                                 style="font-family: 'Share Tech', monospace; color: #F2F2F2; font-size: 56px;" 
                                 x-text="hours">১২</div>
                        </div>
                    </div>
                    <div class="text-sm font-medium text-gray-700 mt-2" style="font-family: 'Hind Siliguri', sans-serif;">ঘন্টা</div>
                </div>
                
                <!-- Minutes -->
                <div class="text-center">
                    <div class="rounded-lg p-4 sm:p-6 shadow-lg relative overflow-hidden" style="background-color: #1BAA76;">
                        <!-- Middle line with rounded circles -->
                        <div class="absolute inset-x-0 top-1/2 h-1 bg-black bg-opacity-20 flex items-center justify-between">
                            <div class="w-3 h-3 bg-black bg-opacity-20 rounded-full -ml-1.5"></div>
                            <div class="w-3 h-3 bg-black bg-opacity-20 rounded-full -mr-1.5"></div>
                        </div>
                        <!-- Digit container with flip animation -->
                        <div class="digit-container relative h-20 flex items-center justify-center">
                            <div class="digit-flip text-6xl font-bold transition-transform duration-300 ease-in-out" 
                                 style="font-family: 'Share Tech', monospace; color: #F2F2F2; font-size: 56px;" 
                                 x-text="minutes">২৭</div>
                        </div>
                    </div>
                    <div class="text-sm font-medium text-gray-700 mt-2" style="font-family: 'Hind Siliguri', sans-serif;">মিনিট</div>
                </div>
                
                <!-- Seconds -->
                <div class="text-center">
                    <div class="rounded-lg p-4 sm:p-6 shadow-lg relative overflow-hidden" style="background-color: #1BAA76;">
                        <!-- Middle line with rounded circles -->
                        <div class="absolute inset-x-0 top-1/2 h-1 bg-black bg-opacity-20 flex items-center justify-between">
                            <div class="w-3 h-3 bg-black bg-opacity-20 rounded-full -ml-1.5"></div>
                            <div class="w-3 h-3 bg-black bg-opacity-20 rounded-full -mr-1.5"></div>
                        </div>
                        <!-- Digit container with flip animation -->
                        <div class="digit-container relative h-20 flex items-center justify-center">
                            <div class="digit-flip text-6xl font-bold transition-transform duration-300 ease-in-out" 
                                 style="font-family: 'Share Tech', monospace; color: #F2F2F2; font-size: 56px;" 
                                 x-text="seconds">০০</div>
                        </div>
                    </div>
                    <div class="text-sm font-medium text-gray-700 mt-2" style="font-family: 'Hind Siliguri', sans-serif;">সেকেন্ড</div>
                </div>
            </div>
            
            <!-- CTA Button -->
            <div class="text-center">
                <button onclick="document.getElementById('order-form').scrollIntoView({behavior: 'smooth'})" class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold rounded-lg px-8 py-4 shadow-md transition duration-300 hover:scale-105 hover:shadow-lg text-lg" style="font-family: 'Hind Siliguri', sans-serif;">
                    এখনই অর্ডার করুন
                </button>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Testimonial Videos Section -->
        @include('components.testimonial-videos-section')

        <!-- Review Image Section -->
        <div class="py-12 relative overflow-hidden" style="background: #ffffff;">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Mobile Layout -->
                <div class="lg:hidden">
                    <div class="text-center">
                        <img src="{{ asset('review.png') }}" alt="রিভিউ" class="w-full max-w-lg mx-auto">
                    </div>
                </div>

                <!-- Desktop Layout -->
                <div class="hidden lg:block">
                    <div class="flex justify-center items-center">
                        <img src="{{ asset('review.png') }}" alt="রিভিউ" class="w-auto max-w-5xl mx-auto">
                    </div>
                </div>
            </div>
        </div>

        <!-- Order Form Header -->
        <div class="text-center mb-12" id="order-form">
            <h2 class="font-bold text-gray-900" style="font-family: 'Hind Siliguri', sans-serif; font-size: clamp(24px, 5vw, 48px); color: #604D20;">
                অর্ডার করতে নিচের ফর্মটি পূরণ করুন
            </h2>
        </div>

        <!-- Product Selection Section -->
        <div class="max-w-5xl mx-auto mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-6" style="font-family: 'Hind Siliguri', sans-serif;">Your Products</h3>
            <div class="grid md:grid-cols-2 gap-6 product-selection-grid">
                <!-- Regular Pack Card -->
                <div class="bg-white rounded-lg border-2 p-6 transition-all" :class="selectedProduct === 'regular' ? 'border-green-500' : 'border-gray-200'">
                    <div class="flex flex-col space-y-4">
                        <div class="flex items-start space-x-4">
                            <input type="radio" name="product" value="regular" class="w-5 h-5 text-green-600 mt-2" x-model="selectedProduct" @change="updateProduct()">
                            <div class="w-20 h-20 flex-shrink-0">
                                <img src="{{ asset('singleGhee.png') }}" alt="রেগুলার প্যাক" class="w-full h-full object-contain">
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-gray-800 text-lg" style="font-family: 'Hind Siliguri', sans-serif;">রেগুলার প্যাক ৩০০ গ্রাম</h4>
                                <div class="flex items-center space-x-2 mt-2">
                                    <span class="text-gray-500 line-through text-sm" style="font-family: 'Hind Siliguri', sans-serif;">৮৭০ টাকা</span>
                                    <span class="text-green-600 font-bold text-lg" style="font-family: 'Hind Siliguri', sans-serif;">৬৯০ টাকা</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between pt-2 border-t">
                            <span class="text-sm text-gray-600 font-medium" style="font-family: 'Hind Siliguri', sans-serif;">Quantity:</span>
                            <div class="flex items-center border-2 border-gray-300 rounded-lg">
                                <button type="button" class="px-3 py-2 hover:bg-gray-100 font-bold text-lg" @click="decreaseQuantity('regular')">-</button>
                                <span class="px-4 py-2 font-bold text-lg min-w-[40px] text-center" x-text="quantities.regular">0</span>
                                <button type="button" class="px-3 py-2 hover:bg-gray-100 font-bold text-lg" @click="increaseQuantity('regular')">+</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Family Pack Card -->
                <div class="bg-white rounded-lg border-2 p-6 transition-all relative family-pack-card" :class="selectedProduct === 'family' ? 'border-green-500' : 'border-gray-200'">
                    <!-- Discount Badge -->
                    <div class="absolute discount-badge bg-red-500 text-white px-3 py-1.5 rounded-full text-sm font-bold shadow-lg" style="font-family: 'Hind Siliguri', sans-serif; top: -12px; right: -12px;">
                        ৪৯০ টাকা ছাড়!!
                    </div>
                    <div class="flex flex-col space-y-4">
                        <div class="flex items-start space-x-4">
                            <input type="radio" name="product" value="family" class="w-5 h-5 text-green-600 mt-2" x-model="selectedProduct" @change="updateProduct()">
                            <div class="w-20 h-20 flex-shrink-0">
                                <img src="{{ asset('Gheepack.png') }}" alt="ফ্যামিলি প্যাক" class="w-full h-full object-contain">
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-gray-800 text-lg" style="font-family: 'Hind Siliguri', sans-serif;">ফ্যামিলি প্যাক ৩০০ গ্রাম × ২</h4>
                                <div class="flex items-center space-x-2 mt-2">
                                    <span class="text-gray-500 line-through text-sm" style="font-family: 'Hind Siliguri', sans-serif;">১৫৩০ টাকা</span>
                                    <span class="text-green-600 font-bold text-lg" style="font-family: 'Hind Siliguri', sans-serif;">১২৯০ টাকা</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between pt-2 border-t">
                            <span class="text-sm text-gray-600 font-medium" style="font-family: 'Hind Siliguri', sans-serif;">Quantity:</span>
                            <div class="flex items-center border-2 border-gray-300 rounded-lg">
                                <button type="button" class="px-3 py-2 hover:bg-gray-100 font-bold text-lg" @click="decreaseQuantity('family')">-</button>
                                <span class="px-4 py-2 font-bold text-lg min-w-[40px] text-center" x-text="quantities.family">0</span>
                                <button type="button" class="px-3 py-2 hover:bg-gray-100 font-bold text-lg" @click="increaseQuantity('family')">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form and Summary Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
            <!-- Left Column - Customer Information Form -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-6" style="font-family: 'Hind Siliguri', sans-serif;">Customer Information</h3>
                
                <form>
                    <div class="space-y-4">
                        <!-- Name Field -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2" style="font-family: 'Hind Siliguri', sans-serif;">
                                সম্পূর্ণ নাম <span class="text-red-500">*</span>
                            </label>
                            <input type="text" 
                                   placeholder="সম্পূর্ণ নাম লিখুন" 
                                   class="w-full px-3 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent" 
                                   style="font-family: 'Hind Siliguri', sans-serif;">
                        </div>
                        
                        <!-- Phone Field -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2" style="font-family: 'Hind Siliguri', sans-serif;">
                                মোবাইল নাম্বার <span class="text-red-500">*</span>
                            </label>
                            <input type="tel" 
                                   placeholder="সঠিক ১১ ডিজিটের মোবাইল নাম্বার" 
                                   class="w-full px-3 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent" 
                                   style="font-family: 'Hind Siliguri', sans-serif;">
                        </div>
                        
                        <!-- Address Field -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2" style="font-family: 'Hind Siliguri', sans-serif;">
                                ঠিকানা <span class="text-red-500">*</span>
                            </label>
                            <textarea rows="3" 
                                      placeholder="বাড়ি/এপার্টমেন্ট, রোড নং, উপজেলা, জেলা" 
                                      class="w-full px-3 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent resize-none" 
                                      style="font-family: 'Hind Siliguri', sans-serif;"></textarea>
                        </div>
                        
                        <!-- Delivery Area Selection -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-3" style="font-family: 'Hind Siliguri', sans-serif;">
                                ডেলিভারি এলাকা
                            </label>
                            <div class="space-y-3">
                                <div class="border rounded-lg p-3 cursor-pointer transition-all" 
                                     :class="deliveryArea === 'inside' ? 'border-green-500 bg-green-50' : 'border-gray-200'"
                                     @click="deliveryArea = 'inside'; updateDelivery()">
                                    <div class="flex items-center">
                                        <input type="radio" name="delivery" value="inside" class="w-4 h-4 text-green-600" x-model="deliveryArea" @change="updateDelivery()">
                                        <span class="ml-3 font-medium" style="font-family: 'Hind Siliguri', sans-serif;">ঢাকার মধ্যে (৳১০০)</span>
                                    </div>
                                </div>
                                <div class="border rounded-lg p-3 cursor-pointer transition-all" 
                                     :class="deliveryArea === 'outside' ? 'border-green-500 bg-green-50' : 'border-gray-200'"
                                     @click="deliveryArea = 'outside'; updateDelivery()">
                                    <div class="flex items-center">
                                        <input type="radio" name="delivery" value="outside" class="w-4 h-4 text-green-600" x-model="deliveryArea" @change="updateDelivery()">
                                        <span class="ml-3 font-medium" style="font-family: 'Hind Siliguri', sans-serif;">ঢাকার বাইরে (৳১৫০)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Payment Method -->
                        <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <p class="font-semibold text-green-800" style="font-family: 'Hind Siliguri', sans-serif;">ক্যাশ অন ডেলিভারি</p>
                                    <p class="text-sm text-green-600" style="font-family: 'Hind Siliguri', sans-serif;">পণ্য হাতে পেয়ে টাকা পরিশোধ করুন</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            
            <!-- Right Column - Order Summary -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-6" style="font-family: 'Hind Siliguri', sans-serif;">Order Summary</h3>
                
                <!-- Selected Product Display -->
                <div class="bg-gray-50 rounded-lg p-4 mb-6" x-show="selectedProduct">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12">
                            <img :src="productDetails.image" :alt="productDetails.name" class="w-full h-full object-contain">
                        </div>
                        <div class="flex-1">
                            <h4 class="font-medium text-gray-900" style="font-family: 'Hind Siliguri', sans-serif;" x-text="productDetails.name"></h4>
                            <p class="text-sm text-gray-600" style="font-family: 'Hind Siliguri', sans-serif;" x-text="'৳' + productDetails.price"></p>
                        </div>
                    </div>
                </div>
                
                <!-- Price Breakdown -->
                <div class="space-y-3 mb-6">
                    <div class="flex justify-between text-gray-600">
                        <span style="font-family: 'Hind Siliguri', sans-serif;">Subtotal:</span>
                        <span style="font-family: 'Hind Siliguri', sans-serif;" x-text="'৳' + subtotal"></span>
                    </div>
                    <div class="flex justify-between text-gray-600">
                        <span style="font-family: 'Hind Siliguri', sans-serif;">Shipping:</span>
                        <span style="font-family: 'Hind Siliguri', sans-serif;" x-text="'৳' + shippingCost"></span>
                    </div>
                    <div class="border-t pt-3">
                        <div class="flex justify-between text-lg font-bold text-green-600">
                            <span style="font-family: 'Hind Siliguri', sans-serif;">Total:</span>
                            <span style="font-family: 'Hind Siliguri', sans-serif;" x-text="'৳' + total"></span>
                        </div>
                    </div>
                </div>
                
                <!-- Place Order Button -->
                <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-4 px-6 rounded-lg transition-all duration-300 hover:scale-105 flex items-center justify-center" style="font-family: 'Hind Siliguri', sans-serif;">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path>
                    </svg>
                    PLACE ORDER
                </button>
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
        previousValues: {
            days: '০২',
            hours: '১২',
            minutes: '২৭',
            seconds: '০০'
        },
        init() {
            // Set end date (2 days, 12 hours, 27 minutes from now)
            const endDate = new Date();
            endDate.setDate(endDate.getDate() + 2);
            endDate.setHours(endDate.getHours() + 12);
            endDate.setMinutes(endDate.getMinutes() + 27);
            
            this.updateCountdown(endDate);
            
            // Update every second with animation
            setInterval(() => {
                this.updateCountdownWithAnimation(endDate);
            }, 1000);
        },
        
        updateCountdownWithAnimation(endDate) {
            const now = new Date().getTime();
            const distance = endDate.getTime() - now;
            
            let newValues = {
                days: '০০',
                hours: '০০',
                minutes: '০০',
                seconds: '০০'
            };
            
            if (distance > 0) {
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);
                
                // Convert to Bengali numbers
                newValues.days = this.toBengali(days.toString().padStart(2, '0'));
                newValues.hours = this.toBengali(hours.toString().padStart(2, '0'));
                newValues.minutes = this.toBengali(minutes.toString().padStart(2, '0'));
                newValues.seconds = this.toBengali(seconds.toString().padStart(2, '0'));
            }
            
            // Animate changes
            this.animateDigitChange('days', newValues.days);
            this.animateDigitChange('hours', newValues.hours);
            this.animateDigitChange('minutes', newValues.minutes);
            this.animateDigitChange('seconds', newValues.seconds);
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
        
        animateDigitChange(unit, newValue) {
            if (this.previousValues[unit] !== newValue) {
                // Find the digit element and add flip animation
                const digitElements = document.querySelectorAll(`[x-text="${unit}"]`);
                digitElements.forEach(element => {
                    element.classList.add('flipping');
                    
                    // Update the value after half animation
                    setTimeout(() => {
                        this[unit] = newValue;
                        this.previousValues[unit] = newValue;
                    }, 300);
                    
                    // Remove animation class after completion
                    setTimeout(() => {
                        element.classList.remove('flipping');
                    }, 600);
                });
            }
        },
        
        toBengali(number) {
            const bengaliNumbers = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
            return number.replace(/\d/g, (digit) => bengaliNumbers[digit]);
        }
    }
}

function orderForm() {
    return {
        selectedProduct: 'family', // Default to family pack
        quantities: {
            regular: 0,
            family: 1
        },
        deliveryArea: 'inside',
        subtotal: 1290,
        shippingCost: 100,
        total: 1390,
        
        productDetails: {
            name: 'ফ্যামিলি প্যাক ৩০০ গ্রাম × ২',
            price: 1290,
            image: '{{ asset("Gheepack.png") }}'
        },
        
        init() {
            this.updateProduct();
        },
        
        updateProduct() {
            if (this.selectedProduct === 'regular') {
                this.productDetails = {
                    name: 'রেগুলার প্যাক ৩০০ গ্রাম',
                    price: 690,
                    image: '{{ asset("singleGhee.png") }}'
                };
                this.quantities.regular = Math.max(1, this.quantities.regular);
                this.quantities.family = 0;
            } else {
                this.productDetails = {
                    name: 'ফ্যামিলি প্যাক ৩০০ গ্রাম × ২',
                    price: 1290,
                    image: '{{ asset("Gheepack.png") }}'
                };
                this.quantities.family = Math.max(1, this.quantities.family);
                this.quantities.regular = 0;
            }
            this.updateTotals();
        },
        
        increaseQuantity(product) {
            this.quantities[product]++;
            if (product !== this.selectedProduct) {
                this.selectedProduct = product;
                this.updateProduct();
            } else {
                this.updateTotals();
            }
        },
        
        decreaseQuantity(product) {
            if (this.quantities[product] > 0) {
                this.quantities[product]--;
                this.updateTotals();
            }
        },
        
        updateDelivery() {
            this.shippingCost = this.deliveryArea === 'inside' ? 100 : 150;
            this.updateTotals();
        },
        
        updateTotals() {
            const regularTotal = this.quantities.regular * 690;
            const familyTotal = this.quantities.family * 1290;
            this.subtotal = regularTotal + familyTotal;
            this.total = this.subtotal + this.shippingCost;
        }
    }
}
</script>

<style>
    @media (max-width: 767px) {
        .product-selection-grid {
            max-width: 400px;
            margin: 0 auto;
        }

        .product-selection-grid > div {
            padding: 1.25rem !important;
        }

        .product-selection-grid .w-20 {
            width: 100px !important;
            height: 100px !important;
        }

        .discount-badge {
            font-size: 13px !important;
            padding: 0.5rem 0.75rem !important;
            top: -10px !important;
            right: -10px !important;
        }
    }
</style>