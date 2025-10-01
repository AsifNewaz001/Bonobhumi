<section class="py-16 bg-white relative overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Heading -->
        <div class="text-center mb-12">
            <h2 class="pricing-title font-bold mb-4" style="font-family: 'Hind Siliguri', sans-serif; font-size: clamp(28px, 5vw, 48px); color: #604D20;">
                পছন্দের প্যাকেজটি সিলেক্ট করুন
            </h2>
            <div class="inline-block bg-orange-500 px-4 py-1 rounded-full">
                <p class="font-semibold text-white" style="font-family: 'Hind Siliguri', sans-serif; font-size: clamp(16px, 4vw, 24px);">
                    আর উপভোগ করুন হারানো ঐতিহ্যের স্বাদ
                </p>
            </div>
        </div>

        <!-- Pricing Cards Container -->
        <div class="mx-auto max-w-[404px] md:max-w-5xl">
            <div class="pricing-grid grid gap-8 md:grid-cols-2">
            
            <!-- Regular Pack Card -->
                <div class="bg-white rounded-[24px] border border-gray-200 shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300" style="width: 424px; height: 540px;">
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
                    <p class="text-2xl font-semibold text-[#9D9D9D] line-through" style="font-family: 'Hind Siliguri', sans-serif; text-decoration-color: #FF0000;">
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
            <div class="bg-white rounded-[24px] shadow-lg transform hover:scale-105 transition-transform duration-300 relative" style="border: 3px solid #FACC15; overflow: visible; width: 424px; height: 540px;">

                <!-- Best Value Badge -->
                <div class="absolute" style="top: -25px; right: -10px; z-index: 20;">
                    <span style="
                        display: inline-flex;
                        align-items: center;
                        background: #FACC15;
                        color: #1F2937;
                        font-family: 'Hind Siliguri', sans-serif;
                        font-size: 11px;
                        font-weight: 700;
                        line-height: 1.428em;
                        padding: 8px 12px;
                        border-radius: 9999px;
                        border: 1px solid #E5E7EB;
                        box-shadow: 0px 1.86px 14.91px 0px rgba(0, 0, 0, 0.07);
                    ">Best Value!</span>
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
                    <p class="text-gray-600 text-lg mb-2" style="font-family: 'Hind Siliguri', sans-serif;">
                        প্যাকেজ মূল্য
                    </p>
                    <p class="text-2xl font-semibold text-[#9D9D9D] line-through" style="font-family: 'Hind Siliguri', sans-serif; text-decoration-color: #FF0000;">
                        ১৭৮০ টাকা
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
    </div>

    <!-- Styles -->
    <style>
        @media (max-width: 767px) {
            .pricing-title {
                font-size: 30px !important;
                font-weight: bold !important;
            }

            .pricing-grid {
                grid-template-columns: 1fr !important;
                gap: 1.5rem !important;
            }

            .pricing-grid > div {
                width: 330px !important;
                height: auto !important;
                min-height: 420.28px !important;
                margin: 0 auto !important;
                display: flex !important;
                flex-direction: column !important;
            }

            /* Card header - BOTH CARDS */
            .pricing-grid > div > div:first-of-type {
                padding: 1.25rem 1rem !important;
            }

            .pricing-grid > div > div:first-of-type .flex {
                gap: 0.75rem !important;
            }

            /* Regular Pack (first card) - larger image */
            .pricing-grid > div:first-child > div:first-of-type .w-24 {
                width: 72px !important;
                height: 72px !important;
            }

            .pricing-grid > div:first-child > div:first-of-type img {
                width: 52px !important;
                height: 52px !important;
            }

            /* Family Pack (second card) */
            .pricing-grid > div:last-child > div:first-of-type .w-24 {
                width: 64px !important;
                height: 64px !important;
            }

            .pricing-grid > div:last-child > div:first-of-type img {
                width: 42px !important;
                height: 42px !important;
            }

            .pricing-grid > div h3 {
                font-size: 22px !important;
                line-height: 1.3 !important;
            }

            /* Package price section - BOTH CARDS (2nd div) */
            .pricing-grid > div > div:nth-of-type(2) {
                padding: 1rem 1rem !important;
            }

            .pricing-grid > div > div:nth-of-type(2) p {
                margin-bottom: 0.5rem !important;
            }

            .grid > div > div:nth-of-type(2) p:first-child {
                font-size: 15px !important;
            }

            .grid > div > div:nth-of-type(2) p:last-child {
                font-size: 20px !important;
            }

            /* Offer price section - BOTH CARDS (3rd div) */
            .grid > div > div:nth-of-type(3) {
                padding: 1.25rem 1rem !important;
                flex-grow: 1 !important;
            }

            .grid > div > div:nth-of-type(3) p:first-child {
                font-size: 15px !important;
                margin-bottom: 0.5rem !important;
            }

            .grid > div > div:nth-of-type(3) p:nth-child(2) {
                font-size: 30px !important;
                margin-bottom: 0.5rem !important;
            }

            .grid > div > div:nth-of-type(3) p:last-child {
                font-size: 12px !important;
            }

            /* CTA button - BOTH CARDS */
            .grid > div > div:last-of-type {
                padding: 1rem !important;
            }

            .grid > div > div:last-of-type button {
                padding: 0.875rem !important;
                font-size: 18px !important;
            }

            /* Best value badge stays outside box on mobile too */
        }
    </style>
</section>
