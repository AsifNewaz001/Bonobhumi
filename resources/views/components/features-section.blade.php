<section id="features" class="py-16 relative overflow-hidden bg-center bg-no-repeat" style="background-image: url('{{ asset('2ndG2.png') }}'); background-size: cover; background-position: center;">
    
    <!-- Mobile responsive background styles -->
    <style>
        @media (max-width: 768px) {
            #features {
                background-image: url('{{ asset('M2ndSection.png') }}') !important;
                background-size: cover !important;
                background-position: center center !important;
                min-height: 100vh;
            }
        }
    </style>
    
    <!-- Optional overlay for better text readability -->
    <div class="absolute inset-0 bg-white bg-opacity-10"></div>
    
    <!-- Mobile Layout - Improved Responsive Design -->
    <div class="lg:hidden relative z-10 min-h-screen flex items-start pt-32">
        <div class="w-full px-4 sm:px-6">
            <!-- Text Content - Mobile Optimized -->
            <div class="text-center space-y-6">
                <p class="text-center" style="font-family: 'Hind Siliguri', sans-serif; font-weight: 600; font-size: clamp(24px, 6vw, 30px); color: #614e21; line-height: 1.2;">
                    ঐতিহ্যের সেই স্বাদ পেতে সংগ্রহ করুন
                </p>
                <h2 class="text-center" style="font-family: 'Hind Siliguri', sans-serif; font-weight: 600; font-size: clamp(36px, 10vw, 48px); color: #614e21; line-height: 1.1;">
                    বনভূমি A2 সরের ঘি
                </h2>
                
                <!-- CTA Button -->
                <div class="pt-4">
                    <a href="#checkout" class="inline-block px-10 py-5 rounded-lg text-white font-bold transition-all duration-300 hover:shadow-lg transform hover:scale-105" 
                       style="font-family: 'Hind Siliguri', sans-serif; font-size: clamp(18px, 5vw, 22px); background: linear-gradient(0deg, #059845 0%, #018038 100%); border: 2px solid #DEE6E2;">
                        এখনই অর্ডার করুন
                    </a>
                </div>
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
                
                <a href="#checkout" class="inline-block px-12 py-6 rounded-lg text-white font-bold text-2xl transition-all duration-300 hover:shadow-lg transform hover:scale-105" 
                   style="font-family: 'Hind Siliguri', sans-serif; background: linear-gradient(0deg, #059845 0%, #018038 100%); border: 2px solid #DEE6E2;">
                    এখনই অর্ডার করুন
                </a>
            </div>
        </div>
        
        
    </div>
</section>