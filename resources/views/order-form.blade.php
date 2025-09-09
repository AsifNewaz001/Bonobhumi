<div class="max-w-2xl mx-auto">
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded-lg mb-6 font-bengali animate-pulse">
            <div class="flex items-center">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <div>
                    <h4 class="text-lg font-bold">{{ session('success') }}</h4>
                </div>
            </div>
        </div>
    @endif

    @if(session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-6 py-4 rounded-lg mb-6 font-bengali">
            <div class="flex items-center">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
                <div>
                    <p class="font-bold">{{ session('error') }}</p>
                </div>
            </div>
        </div>
    @endif

    <form method="POST" action="{{ route('order.store') }}" class="bg-white rounded-2xl shadow-xl p-8">
        @csrf
        
        <!-- Form Header -->
        <div class="text-center mb-8">
            <h3 class="text-2xl font-bold text-gray-900 font-bengali mb-2">অর্ডার ফর্ম</h3>
            <p class="text-gray-600 font-bengali">নিচের তথ্যগুলো সঠিকভাবে পূরণ করুন</p>
        </div>

        <!-- Hidden package field - will be set by JavaScript -->
        <input type="hidden" name="package" id="selected_package" value="bundle">

        <!-- Name Field -->
        <div class="mb-6">
            <label for="name" class="block text-sm font-bold text-gray-700 font-bengali mb-2">
                আপনার নাম *
            </label>
            <input 
                type="text" 
                id="name"
                name="name"
                value="{{ old('name') }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-ghee-gold focus:border-transparent font-bengali @error('name') border-red-500 @enderror"
                placeholder="আপনার পূর্ণ নাম লিখুন"
                required
            >
            @error('name') 
                <p class="mt-1 text-sm text-red-600 font-bengali">{{ $message }}</p> 
            @enderror
        </div>

        <!-- Mobile Field -->
        <div class="mb-6">
            <label for="mobile" class="block text-sm font-bold text-gray-700 font-bengali mb-2">
                মোবাইল নম্বর *
            </label>
            <input 
                type="tel" 
                id="mobile"
                name="mobile"
                value="{{ old('mobile') }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-ghee-gold focus:border-transparent @error('mobile') border-red-500 @enderror"
                placeholder="01712345678"
                maxlength="11"
                required
            >
            @error('mobile') 
                <p class="mt-1 text-sm text-red-600 font-bengali">{{ $message }}</p> 
            @enderror
            <p class="mt-1 text-xs text-gray-500 font-bengali">উদাহরণ: 01712345678</p>
        </div>

        <!-- Address Field -->
        <div class="mb-6">
            <label for="address" class="block text-sm font-bold text-gray-700 font-bengali mb-2">
                সম্পূর্ণ ঠিকানা *
            </label>
            <textarea 
                id="address"
                name="address"
                rows="3"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-ghee-gold focus:border-transparent font-bengali @error('address') border-red-500 @enderror"
                placeholder="বাড়ির নম্বর, রাস্তার নাম, এলাকা, থানা, জেলা"
                required
            >{{ old('address') }}</textarea>
            @error('address') 
                <p class="mt-1 text-sm text-red-600 font-bengali">{{ $message }}</p> 
            @enderror
        </div>

        <!-- Delivery Area -->
        <div class="mb-6">
            <label for="delivery_area" class="block text-sm font-bold text-gray-700 font-bengali mb-2">
                ডেলিভারি এলাকা *
            </label>
            <select 
                id="delivery_area"
                name="delivery_area"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-ghee-gold focus:border-transparent font-bengali @error('delivery_area') border-red-500 @enderror"
                required
            >
                <option value="">ডেলিভারি এলাকা নির্বাচন করুন</option>
                <option value="dhaka" {{ old('delivery_area') == 'dhaka' ? 'selected' : '' }}>ঢাকার ভিতরে</option>
                <option value="outside" {{ old('delivery_area') == 'outside' ? 'selected' : '' }}>ঢাকার বাইরে</option>
            </select>
            @error('delivery_area') 
                <p class="mt-1 text-sm text-red-600 font-bengali">{{ $message }}</p> 
            @enderror
        </div>

        <!-- Order Summary -->
        <div class="bg-gray-50 rounded-lg p-6 mb-6">
            <h4 class="text-lg font-bold text-gray-900 font-bengali mb-4">অর্ডার সামারি</h4>
            
            <div class="space-y-2 text-gray-700 font-bengali" id="order-summary">
                <div class="flex justify-between">
                    <span id="package-name">বান্ডেল প্যাক (৩০০গ্রাম × ২টি)</span>
                    <span id="package-price">৳১৫৩০</span>
                </div>
                
                <div class="flex justify-between text-green-600" id="savings-row">
                    <span>সাশ্রয়</span>
                    <span>-৳২১০</span>
                </div>
                
                <div class="flex justify-between">
                    <span>ডেলিভারি চার্জ</span>
                    <span id="delivery-charge">ডেলিভারি এলাকা অনুযায়ী</span>
                </div>
                
                <hr class="my-3">
                
                <div class="flex justify-between text-xl font-bold text-ghee-gold">
                    <span>মোট</span>
                    <span id="total-price">৳১৫৩০</span>
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
            class="w-full bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white font-bold text-xl py-4 px-6 rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 font-bengali"
        >
            <div class="flex items-center justify-center">
                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                অর্ডার কনফার্ম করুন
            </div>
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
</div>

<script>
// Scroll to success message on page load if it exists
document.addEventListener('DOMContentLoaded', function() {
    @if(session('success'))
        setTimeout(function() {
            document.getElementById('checkout').scrollIntoView({ 
                behavior: 'smooth',
                block: 'start'
            });
        }, 100);
    @endif
});

// Update order summary when delivery area changes
document.getElementById('delivery_area').addEventListener('change', function() {
    updateOrderSummary();
});

function updateOrderSummary() {
    const package = document.getElementById('selected_package').value;
    const deliveryArea = document.getElementById('delivery_area').value;
    
    let packagePrice = 0;
    let packageName = '';
    let showSavings = false;
    let deliveryCharge = 0;
    let deliveryText = '';
    
    if (package === 'bundle') {
        packagePrice = 1530;
        packageName = 'বান্ডেল প্যাক (৩০০গ্রাম × ২টি)';
        showSavings = true;
        
        if (deliveryArea === 'dhaka') {
            deliveryCharge = 0;
            deliveryText = 'ফ্রি';
        } else if (deliveryArea === 'outside') {
            deliveryCharge = 150;
            deliveryText = '৳১৫০';
        } else {
            deliveryText = 'ডেলিভারি এলাকা অনুযায়ী';
        }
    } else {
        packagePrice = 870;
        packageName = 'সিঙ্গেল প্যাক (৩০০গ্রাম × ১টি)';
        showSavings = false;
        
        if (deliveryArea === 'dhaka') {
            deliveryCharge = 100;
            deliveryText = '৳১০০';
        } else if (deliveryArea === 'outside') {
            deliveryCharge = 150;
            deliveryText = '৳১৫০';
        } else {
            deliveryText = 'ডেলিভারি এলাকা অনুযায়ী';
        }
    }
    
    const total = packagePrice + deliveryCharge;
    
    // Update display
    document.getElementById('package-name').textContent = packageName;
    document.getElementById('package-price').textContent = '৳' + packagePrice;
    document.getElementById('delivery-charge').textContent = deliveryText;
    document.getElementById('total-price').textContent = '৳' + (deliveryArea ? total.toLocaleString() : packagePrice.toLocaleString());
    
    // Show/hide savings row
    const savingsRow = document.getElementById('savings-row');
    if (showSavings) {
        savingsRow.style.display = 'flex';
    } else {
        savingsRow.style.display = 'none';
    }
}

// Listen for package selection changes from Alpine.js
window.addEventListener('packageChanged', function(event) {
    document.getElementById('selected_package').value = event.detail.package;
    updateOrderSummary();
});
</script>