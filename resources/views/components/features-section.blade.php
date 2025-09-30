<section id="features" class="py-16 relative overflow-hidden bg-center bg-no-repeat" style="background-image: url('{{ asset('2ndG2.png') }}'); background-size: cover; background-position: center;">
    
    <!-- Mobile responsive background styles -->
    <style>
        @media (max-width: 768px) {
            #features {
                background-image: url('{{ asset('2ndMVBackground.png') }}') !important;
                background-size: 100% 100% !important;
                background-position: top center !important;
                background-repeat: no-repeat !important;
                min-height: auto !important;
                padding-bottom: 0 !important;
            }
        }

        /* CTA Button Styling */
        .cta-button {
            font-family: 'Nirmala UI', 'Segoe UI', sans-serif;
            background: linear-gradient(180deg, #059845 0%, #018038 100%);
            border-radius: 9999px; /* Capsule shape */
            box-shadow: 0 0 0 3px #DEE6E2, 0 4.52px 4.52px rgba(0, 0, 0, 0.25);
            transition: all 0.3s ease;
        }

        .cta-button:hover {
            transform: scale(1.05);
            box-shadow: 0 0 0 3px #DEE6E2, 0 6px 8px rgba(0, 0, 0, 0.3);
        }
    </style>

    <!-- Optional overlay for better text readability -->
    <div class="absolute inset-0 bg-white bg-opacity-10"></div>

    <!-- Mobile Layout - Improved Responsive Design -->
    <div class="lg:hidden relative z-10 flex flex-col items-center pt-32 pb-0">
        <div class="w-full px-4 sm:px-6">
            <!-- Text Content - Mobile Optimized -->
            <div class="text-center space-y-6 mb-12">
                <p class="text-center" style="font-family: 'Hind Siliguri', sans-serif; font-weight: 600; font-size: clamp(24px, 6vw, 30px); color: #614e21; line-height: 1.2;">
                    ঐতিহ্যের সেই স্বাদ পেতে সংগ্রহ করুন
                </p>
                <h2 class="text-center" style="font-family: 'Hind Siliguri', sans-serif; font-weight: 600; font-size: clamp(36px, 10vw, 48px); color: #614e21; line-height: 1.1;">
                    বনভূমি A2 সরের ঘি
                </h2>

                <!-- CTA Button -->
                <div class="pt-4">
                    <button onclick="document.getElementById('order-form').scrollIntoView({behavior: 'smooth'})" class="cta-button px-10 py-5 text-white font-bold"
                       style="font-size: clamp(18px, 5vw, 22px);">
                        এখনই অর্ডার করুন
                    </button>
                </div>
            </div>

            <!-- Product Image - Foreground -->
            <div class="flex justify-center pb-8">
                <img src="{{ asset('mVSecondSection.png') }}" alt="বনভূমি A2 সরের ঘি" class="w-full max-w-md" style="max-width: 452.96px;">
            </div>
        </div>

    </div>

    <div class="hidden lg:block relative w-full h-screen overflow-hidden z-10">
        
        <!-- Title and CTA - Left Side Vertically Centered -->
        <div class="absolute left-16 top-1/2 transform -translate-y-1/2 z-20">
            <div class="text-left" style="max-width: 600px;">
                <p class="text-left mb-6" style="font-family: 'Hind Siliguri', sans-serif; font-weight: 600; font-size: 35px; color: #614e21; line-height: 1.1;">
                    ঐতিহ্যের সেই স্বাদ পেতে সংগ্রহ করুন
                </p>
                <h2 class="text-left mb-10" style="font-family: 'Hind Siliguri', sans-serif; font-weight: 600; font-size: 50px; color: #614e21; line-height: 1.1;">
                    বনভূমি A2 সরের ঘি
                </h2>
                
                <button onclick="document.getElementById('order-form').scrollIntoView({behavior: 'smooth'})" class="cta-button px-12 py-6 text-white font-bold text-2xl">
                    এখনই অর্ডার করুন
                </button>
            </div>
        </div>
        
        
    </div>
</section>