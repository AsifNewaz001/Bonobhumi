<!-- Import Share Tech Font -->
<link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono:wght@400&display=swap" rel="stylesheet">

<style>
.product-selection {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 24px;
}

@media (max-width: 767px) {
    .product-selection {
        grid-template-columns: 1fr;
        gap: 16px;
    }
}

/* Split-flap clock animation */
.digit-container {
    position: relative;
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: visible;
}

.digit-flip {
    position: relative;
}

.digit-flip.flipping {
    animation: flipNumber 0.4s ease-in-out;
}

.product-card {
    position: relative;
    display: flex;
    flex-direction: column;
    gap: 16px;
    background: #FFFFFF;
    border: 1px solid #E0E0E0;
    border-radius: 12px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
    padding: 16px;
    transition: border-color 0.2s ease, box-shadow 0.2s ease;
}

.product-card--selected {
    border: 2px solid #1ABC54;
    box-shadow: 0 4px 10px rgba(26, 188, 84, 0.15);
}

.product-header {
    display: flex;
    align-items: center;
    gap: 12px;
}

.product-radio {
    appearance: none;
    width: 20px;
    height: 20px;
    border-radius: 9999px;
    border: 2px solid #BDBDBD;
    background: #FFFFFF;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: border-color 0.2s ease, background-color 0.2s ease;
}

.product-radio:checked {
    background-color: #1ABC54;
    border-color: #1ABC54;
}

.product-radio:focus-visible {
    outline: 2px solid rgba(26, 188, 84, 0.35);
    outline-offset: 2px;
}

.product-image {
    width: 56px;
    height: 56px;
    border-radius: 12px;
    background: #F5F6F8;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.product-image img {
    width: 44px;
    height: 44px;
    object-fit: contain;
}

.product-info {
    display: flex;
    flex-direction: column;
    gap: 8px;
    min-width: 0;
}

.product-name {
    font-family: 'Hind Siliguri', sans-serif;
    font-size: 16px;
    font-weight: 700;
    color: #111111;
    margin: 0;
}

.product-weight {
    font-family: 'Hind Siliguri', sans-serif;
    font-size: 14px;
    font-weight: 400;
    color: #666666;
    margin: 0;
}

.discount-badge {
    position: absolute;
    top: 16px;
    right: 16px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 6px 10px;
    background: #FF4D4F;
    color: #FFFFFF;
    font-family: 'Hind Siliguri', sans-serif;
    font-size: 12px;
    font-weight: 700;
    border-radius: 12px;
}

.product-footer {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 16px;
}

.price-stack {
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 8px;
    font-family: 'Hind Siliguri', sans-serif;
}

.old-price {
    font-size: 14px;
    color: #888888;
    text-decoration: line-through;
    text-decoration-color: #888888;
    text-decoration-thickness: 1.5px;
    line-height: 1.3;
}

.new-price {
    font-size: 16px;
    font-weight: 700;
    color: #000000;
    line-height: 1.3;
}

.quantity-control {
    display: flex;
    align-items: center;
    gap: 12px;
    font-family: 'Hind Siliguri', sans-serif;
}

.quantity-button {
    width: 36px;
    height: 36px;
    border-radius: 9999px;
    border: none;
    background: #F1F1F1;
    color: #333333;
    font-size: 16px;
    font-weight: 700;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: background-color 0.2s ease, transform 0.2s ease;
}

.quantity-button:hover {
    background: #E4E4E4;
    transform: translateY(-1px);
}

.quantity-button:focus-visible {
    outline: 2px solid rgba(26, 188, 84, 0.3);
    outline-offset: 2px;
}

.quantity-value {
    min-width: 36px;
    text-align: center;
    font-size: 16px;
    font-weight: 700;
    color: #111111;
}

@keyframes flipNumber {
    0% {
        transform: perspective(200px) rotateX(0deg);
    }
    50% {
        transform: perspective(200px) rotateX(90deg);
        opacity: 0.3;
    }
    100% {
        transform: perspective(200px) rotateX(0deg);
    }
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
                <button onclick="document.getElementById('order-form').scrollIntoView({behavior: 'smooth'})" class="cta-button px-12 py-5 text-white font-bold rounded-lg transition duration-300 hover:scale-105 hover:shadow-lg" style="font-family: 'Hind Siliguri', sans-serif; font-size: clamp(18px, 4vw, 24px);">
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
            <div class="mx-auto max-w-[404px] md:max-w-4xl rounded-[24px] border border-gray-200 bg-white px-4 py-8 shadow-lg sm:px-8" style="background-image: linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(255,255,255,0.96) 100%);">
                <h3 class="mb-6 text-center text-lg font-semibold text-gray-800" style="font-family: 'Hind Siliguri', sans-serif;">Your Products</h3>
                <div class="product-selection">
                    <!-- Regular Pack Card -->
                    <div class="product-card" :class="{'product-card--selected': selectedProduct === 'regular'}">
                        <div class="product-header">
                            <input type="radio" name="product" value="regular" class="product-radio" x-model="selectedProduct" @change="updateProduct()">
                            <div class="product-image">
                                <img src="{{ asset('singleGhee.png') }}" alt="রেগুলার প্যাক">
                            </div>
                            <div class="product-info">
                                <h4 class="product-name">রেগুলার প্যাক</h4>
                                <p class="product-weight">৩০০ গ্রাম</p>
                            </div>
                        </div>
                        <div class="product-footer">
                            <div class="price-stack">
                                <span class="old-price">৳৮৯০</span>
                                <span class="new-price">৳৬৯০</span>
                            </div>
                            <div class="quantity-control">
                                <button type="button" class="quantity-button" @click="decreaseQuantity('regular')">-</button>
                                <span class="quantity-value" x-text="toBengaliDigits(quantities.regular)">০</span>
                                <button type="button" class="quantity-button" @click="increaseQuantity('regular')">+</button>
                            </div>
                        </div>
                    </div>

                    <!-- Family Pack Card -->
                    <div class="product-card" :class="{'product-card--selected': selectedProduct === 'family'}">
                        <div class="discount-badge">৪৯০ টাকা ছাড়!!</div>
                        <div class="product-header">
                            <input type="radio" name="product" value="family" class="product-radio" x-model="selectedProduct" @change="updateProduct()">
                            <div class="product-image">
                                <img src="{{ asset('Gheepack.png') }}" alt="ফ্যামিলি প্যাক">
                            </div>
                            <div class="product-info">
                                <h4 class="product-name">ফ্যামিলি প্যাক</h4>
                                <p class="product-weight">৩০০ গ্রাম × ২</p>
                            </div>
                        </div>
                        <div class="product-footer">
                            <div class="price-stack">
                                <span class="old-price">৳১৭৮০</span>
                                <span class="new-price">৳১২৯০</span>
                            </div>
                            <div class="quantity-control">
                                <button type="button" class="quantity-button" @click="decreaseQuantity('family')">-</button>
                                <span class="quantity-value" x-text="toBengaliDigits(quantities.family)">১</span>
                                <button type="button" class="quantity-button" @click="increaseQuantity('family')">+</button>
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

                <div class="space-y-4">
                    <!-- Name Field -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2" style="font-family: 'Hind Siliguri', sans-serif;">
                            সম্পূর্ণ নাম <span class="text-red-500">*</span>
                        </label>
                        <input type="text"
                               x-model="formData.name"
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
                               x-model="formData.mobile"
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
                                  x-model="formData.address"
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
                            <p class="text-sm text-gray-600" style="font-family: 'Hind Siliguri', sans-serif;" x-text="formatPrice(productDetails.price)"></p>
                        </div>
                    </div>
                </div>

                <!-- Price Breakdown -->
                <div class="space-y-3 mb-6">
                    <div class="flex justify-between text-gray-600">
                        <span style="font-family: 'Hind Siliguri', sans-serif;">Subtotal:</span>
                        <span style="font-family: 'Hind Siliguri', sans-serif;" x-text="formatPrice(subtotal)"></span>
                    </div>
                    <div class="flex justify-between text-gray-600">
                        <span style="font-family: 'Hind Siliguri', sans-serif;">Shipping:</span>
                        <span style="font-family: 'Hind Siliguri', sans-serif;" x-text="formatPrice(shippingCost)"></span>
                    </div>
                    <div class="border-t pt-3">
                        <div class="flex justify-between text-lg font-bold text-green-600">
                            <span style="font-family: 'Hind Siliguri', sans-serif;">Total:</span>
                            <span style="font-family: 'Hind Siliguri', sans-serif;" x-text="formatPrice(total)"></span>
                        </div>
                    </div>
                </div>

                <!-- Place Order Button -->
                <button @click="submitOrder()" :disabled="isSubmitting" class="w-full bg-green-600 hover:bg-green-700 disabled:bg-gray-400 disabled:cursor-not-allowed text-white font-bold py-4 px-6 rounded-lg transition-all duration-300 hover:scale-105 flex items-center justify-center" style="font-family: 'Hind Siliguri', sans-serif;">
                    <svg x-show="!isSubmitting" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path>
                    </svg>
                    <svg x-show="isSubmitting" class="animate-spin h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    <span x-text="isSubmitting ? 'প্রসেসিং...' : 'PLACE ORDER'"></span>
                </button>

                <!-- Success/Error Messages -->
                <div x-show="successMessage" x-transition class="mt-4 p-4 bg-green-50 border border-green-200 rounded-lg">
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-green-600 mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <p class="text-green-700 text-sm font-medium" style="font-family: 'Hind Siliguri', sans-serif;" x-text="successMessage"></p>
                    </div>
                </div>

                <div x-show="errorMessage" x-transition class="mt-4 p-4 bg-red-50 border border-red-200 rounded-lg">
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-red-600 mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                        </svg>
                        <p class="text-red-700 text-sm font-medium" style="font-family: 'Hind Siliguri', sans-serif;" x-text="errorMessage"></p>
                    </div>
                </div>
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

        formData: {
            name: '',
            mobile: '',
            address: ''
        },

        isSubmitting: false,
        successMessage: '',
        errorMessage: '',

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
        },

        toBengaliDigits(value) {
            const map = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
            return value.toString().replace(/\d/g, (digit) => map[digit]);
        },

        formatPrice(value) {
            return `৳${this.toBengaliDigits(value)}`;
        },

        async submitOrder() {
            // Clear previous messages
            this.successMessage = '';
            this.errorMessage = '';

            // Validation
            if (!this.formData.name.trim()) {
                this.errorMessage = 'নাম অবশ্যই দিতে হবে';
                return;
            }

            if (!this.formData.mobile.trim()) {
                this.errorMessage = 'মোবাইল নম্বর অবশ্যই দিতে হবে';
                return;
            }

            if (!this.formData.address.trim()) {
                this.errorMessage = 'ঠিকানা অবশ্যই দিতে হবে';
                return;
            }

            const quantity = this.selectedProduct === 'regular' ? this.quantities.regular : this.quantities.family;
            if (quantity < 1) {
                this.errorMessage = 'অন্তত ১টি পণ্য নির্বাচন করুন';
                return;
            }

            // Submit order
            this.isSubmitting = true;

            try {
                const response = await fetch('/order', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({
                        name: this.formData.name,
                        mobile: this.formData.mobile,
                        address: this.formData.address,
                        package: this.selectedProduct,
                        quantity: quantity,
                        delivery_area: this.deliveryArea
                    })
                });

                const data = await response.json();

                if (response.ok && data.success) {
                    this.successMessage = data.message;
                    this.resetForm();
                } else {
                    // Handle validation errors
                    if (data.errors) {
                        const firstError = Object.values(data.errors)[0];
                        this.errorMessage = Array.isArray(firstError) ? firstError[0] : firstError;
                    } else {
                        this.errorMessage = data.message || 'অর্ডার প্রক্রিয়া করতে সমস্যা হয়েছে। আবার চেষ্টা করুন।';
                    }
                }
            } catch (error) {
                console.error('Order submission error:', error);
                this.errorMessage = 'অর্ডার প্রক্রিয়া করতে সমস্যা হয়েছে। আবার চেষ্টা করুন।';
            } finally {
                this.isSubmitting = false;
            }
        },

        resetForm() {
            // Reset form data
            this.formData = {
                name: '',
                mobile: '',
                address: ''
            };

            // Reset to default product (family pack)
            this.selectedProduct = 'family';
            this.quantities = {
                regular: 0,
                family: 1
            };
            this.deliveryArea = 'inside';

            // Update product details
            this.updateProduct();

            // Hide success message after 5 seconds
            setTimeout(() => {
                this.successMessage = '';
            }, 5000);
        }
    }
}
</script>
