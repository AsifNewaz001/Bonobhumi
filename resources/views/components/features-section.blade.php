<section id="features" class="py-16 relative overflow-hidden" style="background: #ffffff; min-height: 100vh;">
    <!-- 165 Degree Slanted Background Fill -->
    <div class="absolute top-0 left-0 w-full h-full" 
         style="background: linear-gradient(165deg, #FCE085 0%, #FFEA9D 50%, #F6CF5F 100%);
                clip-path: polygon(0% 0%, 100% 15%, 85% 100%, 0% 85%);">
    </div>
    
    <!-- Mobile Layout -->
    <div class="lg:hidden relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Ghee Image at Top -->
            <div class="flex justify-center mb-8">
                <img src="{{ asset('Ghee3.png') }}" alt="বনভূমি A2 সরের ঘি" class="w-full max-w-xs object-contain">
            </div>
            
            <!-- Text Content -->
            <div class="text-left mb-6">
                <p class="text-left mb-4" style="font-family: 'Hind Siliguri', sans-serif; font-weight: 600; font-size: 28px; color: #614e21;">
                    ঐতিহ্যের সেই স্বাদ পেতে সংগ্রহ করুন
                </p>
                <h2 class="text-left mb-6" style="font-family: 'Hind Siliguri', sans-serif; font-weight: 600; font-size: 48px; color: #614e21; line-height: 1.1;">
                    বনভূমি A2 সরের ঘি
                </h2>
                
                <!-- CTA Button -->
                <a href="#order" class="inline-block px-6 py-3 rounded-lg text-white font-bold text-lg transition-all duration-300 hover:shadow-lg" 
                   style="font-family: 'Hind Siliguri', sans-serif; background: linear-gradient(0deg, #059845 0%, #018038 100%); border: 2px solid #DEE6E2;">
                    এখনই অর্ডার করুন
                </a>
            </div>
            
            <!-- Model Image - Full width to edges -->
            <div class="mt-8 -mx-4 sm:-mx-6">
                <img src="{{ asset('model.png') }}" alt="Model" class="w-full h-auto object-cover">
            </div>
        </div>
    </div>

    <!-- Desktop Layout -->
    <div class="hidden lg:block relative w-full h-screen overflow-hidden z-10">
        
        <!-- Text and CTA - Left Side with gap -->
        <div class="absolute left-16 top-1/2 transform -translate-y-1/2 z-20">
            <div class="text-left" style="max-width: 500px;">
                <p class="text-left mb-4" style="font-family: 'Hind Siliguri', sans-serif; font-weight: 600; font-size: 35px; color: #614e21;">
                    ঐতিহ্যের সেই স্বাদ পেতে সংগ্রহ করুন
                </p>
                <h2 class="text-left mb-8" style="font-family: 'Hind Siliguri', sans-serif; font-weight: 600; font-size: 70px; color: #614e21; line-height: 1.1;">
                    বনভূমি A2 সরের ঘি
                </h2>
                
                <!-- CTA Button -->
                <a href="#order" class="inline-block px-8 py-4 rounded-lg text-white font-bold text-xl transition-all duration-300 hover:shadow-lg" 
                   style="font-family: 'Hind Siliguri', sans-serif; background: linear-gradient(0deg, #059845 0%, #018038 100%); border: 2px solid #DEE6E2;">
                    এখনই অর্ডার করুন
                </a>
            </div>
        </div>
        
        <!-- Ghee Image - Middle Center -->
        <div class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 z-30">
            <img src="{{ asset('Ghee3.png') }}" alt="বনভূমি A2 সরের ঘি" class="w-80 h-auto object-contain">
        </div>
        
        <!-- Model Image - Exact Right Edge -->
        <div class="absolute right-0 top-0 h-full">
            <img src="{{ asset('model.png') }}" alt="Model" class="h-full w-auto object-cover object-left" style="min-height: 100vh;">
        </div>
    </div>
</section>