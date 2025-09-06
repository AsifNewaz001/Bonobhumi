<section id="features" class="py-16 relative overflow-hidden" style="background: #ffffff;">
    <!-- Background gradient with extended coverage and lower opacity -->
    <div class="hidden lg:block absolute -top-4 -left-4 w-full h-full" 
         style="background: linear-gradient(165deg, rgba(252, 224, 133, 0.6) 0%, rgba(255, 234, 157, 0.5) 50%, rgba(246, 207, 95, 0.4) 100%);
                clip-path: polygon(0% 0%, 100% 10%, 100% 100%, 0% 95%);
                width: calc(100% + 40px);
                height: calc(100% + 40px);">
    </div>
    
    <div class="hidden lg:block absolute top-0 left-0 w-full h-full" 
         style="background: linear-gradient(165deg, #FCE085 0%, #FFEA9D 50%, #F6CF5F 100%);
                clip-path: polygon(0% 0%, 100% 15%, 75% 90%, 0% 85%);">
    </div>
    
    <div class="hidden lg:block absolute top-0 left-0 w-full h-full" 
         style="background: linear-gradient(165deg, rgba(246, 207, 95, 0.6) 0%, rgba(255, 234, 157, 0.4) 50%, rgba(252, 224, 133, 0.2) 100%);
                clip-path: polygon(75% 90%, 100% 15%, 100% 91.7%);">
    </div>
    
    <!-- Mobile gradient - clean diagonal slant -->
    <div class="lg:hidden absolute top-0 left-0 w-full h-full" 
         style="background: linear-gradient(165deg, #FCE085 0%, #FFEA9D 50%, #F6CF5F 100%);
                clip-path: polygon(0% 0%, 100% 0%, 100% 70%, 0% 100%);">
    </div>
    
    <!-- Mobile Layout - Compact Design -->
    <div class="lg:hidden relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <!-- Ghee Jars - Top Centered -->
            <div class="flex justify-center mb-4">
                <img src="{{ asset('Ghee3.png') }}" alt="বনভূমি A2 সরের ঘি" class="w-full max-w-sm object-contain drop-shadow-lg">
            </div>
            
            <!-- Text Content - Consistent Typography -->
            <div class="text-center mb-2">
                <p class="text-center mb-4" style="font-family: 'Hind Siliguri', sans-serif; font-weight: 600; font-size: 28px; color: #614e21; line-height: 1.1;">
                    ঐতিহ্যের সেই স্বাদ পেতে সংগ্রহ করুন
                </p>
                <h2 class="text-center mb-6" style="font-family: 'Hind Siliguri', sans-serif; font-weight: 600; font-size: 48px; color: #614e21; line-height: 1.1;">
                    বনভূমি A2 সরের ঘি
                </h2>
                
                <!-- CTA Button -->
                <a href="#order" class="inline-block px-6 py-3 rounded-lg text-white font-bold text-lg transition-all duration-300 hover:shadow-lg" 
                   style="font-family: 'Hind Siliguri', sans-serif; background: linear-gradient(0deg, #059845 0%, #018038 100%); border: 2px solid #DEE6E2;">
                    এখনই অর্ডার করুন
                </a>
            </div>
            
        </div>
        
        <!-- Model Image - Bottom Positioned without container padding -->
        <div class="mt-0">
            <img src="{{ asset('model.png') }}" alt="Model" class="w-full h-auto object-contain object-right">
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
                
                <a href="#order" class="inline-block px-12 py-6 rounded-lg text-white font-bold text-2xl transition-all duration-300 hover:shadow-lg" 
                   style="font-family: 'Hind Siliguri', sans-serif; background: linear-gradient(0deg, #059845 0%, #018038 100%); border: 2px solid #DEE6E2;">
                    এখনই অর্ডার করুন
                </a>
            </div>
        </div>
        
        <!-- Product Jars - Exactly Middle, Much Bigger and Overlapping -->
        <div class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 z-30">
            <img src="{{ asset('Ghee3.png') }}" alt="বনভূমি A2 সরের ঘি" class="w-[480px] h-auto object-contain">
        </div>
        
        <!-- Model Image - Bottom-Right -->
        <div class="absolute right-0 bottom-0 h-full">
            <img src="{{ asset('model.png') }}" alt="Model" class="h-full w-auto object-cover object-left">
        </div>
    </div>
</section>