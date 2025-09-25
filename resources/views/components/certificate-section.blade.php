<section class="py-16 relative overflow-hidden" style="background: linear-gradient(135deg, #10b981 0%, #34d399 50%, #fbbf24 100%);">
    
    <!-- Heading -->
    <div class="text-center mb-12">
        <h2 class="font-bold text-white text-shadow-lg" style="font-family: 'Hind Siliguri', sans-serif; font-size: clamp(24px, 5vw, 48px); line-height: 1.2; text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">
            ১০০% খাঁটি ও বিএসটিআই অনুমোদিত (সার্টিফিকেশন)
        </h2>
    </div>

    <!-- Certificate Display -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative">
            <!-- Certificate Carousel Container -->
            <div class="relative overflow-hidden transform rotate-1 hover:rotate-0 transition-transform duration-500">
                <div id="certificate-carousel" class="flex transition-transform duration-500 ease-in-out">
                    <!-- Certificate 1 -->
                    <div class="w-full flex-shrink-0">
                        <img src="{{ asset('image 12.png') }}" 
                             alt="বিএসটিআই সার্টিফিকেট ১" 
                             class="w-full h-auto object-contain max-h-96 mx-auto drop-shadow-2xl">
                    </div>
                    <!-- Certificate 2 -->
                    <div class="w-full flex-shrink-0">
                        <img src="{{ asset('image 13.png') }}" 
                             alt="বিএসটিআই সার্টিফিকেট ২" 
                             class="w-full h-auto object-contain max-h-96 mx-auto drop-shadow-2xl">
                    </div>
                    <!-- Certificate 3 -->
                    <div class="w-full flex-shrink-0">
                        <img src="{{ asset('image 14.png') }}" 
                             alt="বিএসটিআই সার্টিফিকেট ৩" 
                             class="w-full h-auto object-contain max-h-96 mx-auto drop-shadow-2xl">
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel Dots -->
        <div class="flex justify-center mt-8 space-x-3">
            <button class="carousel-dot w-3 h-3 rounded-full transition-all duration-300 bg-yellow-400" data-slide="0"></button>
            <button class="carousel-dot w-3 h-3 rounded-full transition-all duration-300 bg-white bg-opacity-60" data-slide="1"></button>
            <button class="carousel-dot w-3 h-3 rounded-full transition-all duration-300 bg-white bg-opacity-60" data-slide="2"></button>
        </div>

        <!-- Call-to-Action Button -->
        <div class="text-center mt-12">
            <button onclick="document.getElementById('order-form').scrollIntoView({behavior: 'smooth'})" 
               class="px-12 py-5 rounded-lg text-white font-bold transition-all duration-300 hover:scale-105 hover:shadow-xl bg-emerald-600 hover:bg-emerald-700"
               style="font-family: 'Hind Siliguri', sans-serif; font-size: clamp(18px, 4vw, 24px);">
                এখনই অর্ডার করুন
            </button>
        </div>
    </div>

    <!-- JavaScript for Carousel -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.getElementById('certificate-carousel');
            const dots = document.querySelectorAll('.carousel-dot');
            let currentSlide = 0;
            const totalSlides = 3;

            // Function to go to specific slide
            function goToSlide(slideIndex) {
                currentSlide = slideIndex;
                const translateX = -slideIndex * 100;
                carousel.style.transform = `translateX(${translateX}%)`;
                
                // Update dots
                dots.forEach((dot, index) => {
                    if (index === slideIndex) {
                        dot.classList.remove('bg-white', 'bg-opacity-60');
                        dot.classList.add('bg-yellow-400');
                    } else {
                        dot.classList.remove('bg-yellow-400');
                        dot.classList.add('bg-white', 'bg-opacity-60');
                    }
                });
            }

            // Add click event listeners to dots
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    goToSlide(index);
                });
            });

            // Auto-play carousel (optional)
            setInterval(() => {
                currentSlide = (currentSlide + 1) % totalSlides;
                goToSlide(currentSlide);
            }, 5000);
        });
    </script>
</section>