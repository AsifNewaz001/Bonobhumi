<section class="relative overflow-hidden" style="background-image: url('<?php echo e(asset('assets/header 1.png')); ?>'); background-size: 100% auto; background-position: top center; background-repeat: no-repeat;">
    <!-- Mobile-specific background styling -->
    <style>
        @media (max-width: 768px) {
            section {
                background-size: 320% auto !important;
                background-position: top center !important;
            }
        }
    </style>
    <!-- White overlay to ensure text readability -->
    <div class="absolute inset-0" style="background-color: #ffffff; opacity: 0.3;"></div>
    
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="%23f59e0b" fill-opacity="0.1"%3E%3Ccircle cx="3" cy="3" r="3"/%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <!-- Logo on Top -->
    <div class="absolute top-6 left-1/2 transform -translate-x-1/2 z-50 p-4">
        <img src="<?php echo e(asset('assets/Bonobhumi-Logo Bangla 1.png')); ?>" alt="বনভূমি লোগো" class="h-16 sm:h-20 lg:h-24 w-auto">
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-20 pt-28 sm:pt-32 lg:pt-36">
        <div class="text-center">
            <!-- Main Headline -->
            <h1 class="mb-12" style="font-family: 'Hind Siliguri', sans-serif; font-weight: bold; color: #614e21; line-height: 1.2;">
                <!-- Desktop: 2 sentences -->
                <span class="hidden md:block" style="font-size: 60px;">
                    <span>এমন স্বাদের সরের ঘি শেষ কবে খেয়েছেন</span><br>
                    <span>মনে পড়ে কি?</span>
                </span>
                <!-- Mobile: 3 sentences with responsive font size -->
                <span class="block md:hidden text-3xl sm:text-4xl">
                    <span>এমন স্বাদের সরের ঘি</span><br>
                    শেষ কবে খেয়েছেন<br>
                    <span>মনে পড়ে কি?</span>
                </span>
            </h1>
            
            <!-- Hero Image -->
            <div class="relative mb-12">
                <div class="relative z-10 flex justify-center">
                    <img 
                        src="<?php echo e(asset('assets/hero.png')); ?>" 
                        alt="বনভূমি A2 সরের ঘি - ঐতিহ্যবাহী স্বাদ"
                        class="w-full max-w-lg lg:max-w-3xl mx-auto drop-shadow-2xl rounded-2xl"
                        loading="eager"
                    >
                </div>
            </div>
            
            <!-- Four Sentences -->
            <div class="space-y-3" style="font-family: 'Hind Siliguri', sans-serif; font-weight: 600;">
                <!-- Desktop font size: 47px -->
                <p class="hidden md:block" style="color: #614e21; font-size: 47px; line-height: 1.1;">বর্তমান ঘি'য়ের বেশিরভাগই তৈরি হয়</p>
                <!-- Mobile: responsive font size -->
                <p class="block md:hidden text-xl sm:text-2xl" style="color: #614e21; line-height: 1.1;">বর্তমান ঘি'য়ের বেশিরভাগই তৈরি হয়</p>
                
                <p class="px-6 py-3 rounded-lg inline-block hidden md:inline-block" style="color: #ffffff; background-color: #36B853; font-size: 45px; line-height: 1.1;">কাঁচা দুধ থেকে ক্রিম সেপারেশন করে</p>
                <p class="px-4 py-2 rounded-lg inline-block block md:hidden text-lg sm:text-xl" style="color: #ffffff; background-color: #36B853; line-height: 1.1;">কাঁচা দুধ থেকে ক্রিম সেপারেশন করে</p>
                
                <p class="hidden md:block" style="color: #614e21; font-size: 47px; line-height: 1.1;">তাইতো এখন পাওয়া যায়না সেই</p>
                <p class="block md:hidden text-xl sm:text-2xl" style="color: #614e21; line-height: 1.1;">তাইতো এখন পাওয়া যায়না সেই</p>
                
                <p class="hidden md:block" style="color: #614e21; font-size: 47px; line-height: 1.1;">আগেকার ঘি'এর স্বাদ!</p>
                <p class="block md:hidden text-xl sm:text-2xl" style="color: #614e21; line-height: 1.1;">আগেকার ঘি'এর স্বাদ!</p>
            </div>
        </div>
    </div>
</section><?php /**PATH /Users/asifnewaz/Bonobhumi/resources/views/components/hero-section.blade.php ENDPATH**/ ?>