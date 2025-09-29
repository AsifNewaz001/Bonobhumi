<section class="py-16 bg-white relative overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Heading -->
        <div class="text-center mb-12">
            <h2 class="font-bold mb-4" style="font-family: 'Hind Siliguri', sans-serif; font-size: clamp(28px, 5vw, 48px); color: #604D20;">
                পছন্দের প্যাকেজটি সিলেক্ট করুন
            </h2>
            <div class="inline-block bg-orange-500 px-4 py-1 rounded-full">
                <p class="font-semibold text-white" style="font-family: 'Hind Siliguri', sans-serif; font-size: clamp(16px, 4vw, 24px);">
                    আর উপভোগ করুন হারানো ঐতিহ্যের স্বাদ
                </p>
            </div>
        </div>

        <!-- Pricing Cards Container -->
        <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            
            <!-- Regular Pack Card -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                <!-- Card Header -->
                <div class="bg-gradient-to-r from-orange-500 to-orange-600 px-6 py-8">
                    <div class="flex items-center space-x-4">
                        <!-- Product Image in Circle -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center" style="border: 3px solid #FFC080;">
                                <img src="{{ asset('singleGhee.png') }}" alt="রেগুলার প্যাক" class="w-16 h-16 object-contain">
                            </div>
                        </div>
                        <!-- Package Title -->
                        <div class="flex-1 text-center">
                            <h3 class="text-white font-bold" style="font-family: 'Hind Siliguri', sans-serif; font-size: 30px; line-height: 1.2;">
                                রেগুলার প্যাক<br>(৩০০ গ্রাম * ১)
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Package Price -->
                <div class="px-6 py-4 text-center">
                    <p class="text-gray-600 text-lg mb-2" style="font-family: 'Hind Siliguri', sans-serif;">
                        প্যাকেজ মূল্য
                    </p>
                    <p class="text-2xl font-bold text-gray-500 line-through" style="font-family: 'Hind Siliguri', sans-serif; text-decoration-color: #FF0000;">
                        ৮৯০ টাকা
                    </p>
                </div>

                <!-- Offer Price Section -->
                <div class="bg-slate-800 px-6 py-6 text-center">
                    <p class="text-white text-lg mb-2" style="font-family: 'Hind Siliguri', sans-serif;">
                        অফার মূল্য
                    </p>
                    <p class="text-4xl font-bold text-white mb-2" style="font-family: 'Hind Siliguri', sans-serif;">
                        মাত্র ৬৯০ টাকা
                    </p>
                    <p class="text-gray-400 text-sm" style="font-family: 'Hind Siliguri', sans-serif;">
                        *খুবই সীমিত সময়ের অফার
                    </p>
                </div>

                <!-- CTA Button -->
                <div class="p-6">
                    <button onclick="document.getElementById('order-form').scrollIntoView({behavior: 'smooth'})" class="w-full py-4 rounded-lg text-white font-bold text-lg transition-all duration-300 hover:scale-105 hover:shadow-lg" 
                            style="font-family: 'Hind Siliguri', sans-serif; background: linear-gradient(135deg, #f97316 0%, #dc2626 100%);">
                        অর্ডার করুন
                    </button>
                </div>
            </div>

            <!-- Family Pack Card -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300 relative" style="border: 4px solid #FACC15;">
                
                <!-- Best Value Ribbon -->
                <div class="absolute top-4 -right-2 z-10">
                    <div class="bg-yellow-400 text-black px-4 py-2 rounded-l-lg font-bold transform rotate-3 shadow-lg" style="font-family: 'Hind Siliguri', sans-serif; font-size: 16px;">
                        Best Value!
                    </div>
                </div>

                <!-- Card Header -->
                <div class="bg-gradient-to-r from-orange-500 to-orange-600 px-6 py-8">
                    <div class="flex items-center space-x-4">
                        <!-- Product Image in Circle -->
                        <div class="flex-shrink-0">
                            <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center" style="border: 3px solid #FFC080;">
                                <img src="{{ asset('Gheepack.png') }}" alt="ফ্যামিলি প্যাক" class="w-16 h-16 object-contain">
                            </div>
                        </div>
                        <!-- Package Title -->
                        <div class="flex-1 text-center">
                            <h3 class="text-white font-bold" style="font-family: 'Hind Siliguri', sans-serif; font-size: 30px; line-height: 1.2;">
                                ফ্যামিলি প্যাক<br>(৩০০ গ্রাম * ২)
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Package Price -->
                <div class="px-6 py-4 text-center">
                    <p class="text-2xl font-bold text-gray-500 line-through" style="font-family: 'Hind Siliguri', sans-serif; text-decoration-color: #FF0000;">
                        ১৭৮০ টাকা
                    </p>
                    <p class="text-gray-600 text-lg mt-2" style="font-family: 'Hind Siliguri', sans-serif;">
                        প্যাকেজ মূল্য
                    </p>
                </div>

                <!-- Offer Price Section -->
                <div class="bg-slate-800 px-6 py-6 text-center">
                    <p class="text-white text-lg mb-2" style="font-family: 'Hind Siliguri', sans-serif;">
                        অফার মূল্য
                    </p>
                    <p class="text-4xl font-bold text-white mb-2" style="font-family: 'Hind Siliguri', sans-serif;">
                        মাত্র ১২৯০ টাকা
                    </p>
                    <p class="text-gray-400 text-sm" style="font-family: 'Hind Siliguri', sans-serif;">
                        *খুবই সীমিত সময়ের অফার
                    </p>
                </div>

                <!-- CTA Button -->
                <div class="p-6">
                    <button onclick="document.getElementById('order-form').scrollIntoView({behavior: 'smooth'})" class="w-full py-4 rounded-lg text-white font-bold text-lg transition-all duration-300 hover:scale-105 hover:shadow-lg" 
                            style="font-family: 'Hind Siliguri', sans-serif; background: linear-gradient(135deg, #fbbf24 0%, #f97316 100%);">
                        অর্ডার করুন
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>