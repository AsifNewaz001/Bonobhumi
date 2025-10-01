<section class="certificate-section py-16 relative overflow-hidden" style="background: linear-gradient(180deg, #55B76B 0%, #FFD538 100%);">

    <!-- Heading -->
    <div class="text-center certificate-heading-container mb-12">
        <h2 class="font-bold text-white text-shadow-lg certificate-title" style="font-family: 'Hind Siliguri', sans-serif; font-size: clamp(24px, 5vw, 48px); color: #FFFFFF; line-height: 1.2; text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">
            ১০০% খাঁটি ও বিএসটিআই অনুমোদিত (সার্টিফিকেশন)
        </h2>
    </div>

    <!-- Certificate Display -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative">
            <!-- Certificate Carousel Container -->
            <div class="certificate-carousel relative flex items-center justify-center overflow-hidden" style="height: 900px;">
                <!-- Left Certificate (20% opacity) -->
                <div id="cert-left" class="certificate-item absolute transition-all duration-700" style="left: 5%; opacity: 0.2; transform: scale(0.85); z-index: 1;">
                    <img src="{{ asset('image 14.png') }}"
                         alt="বিএসটিআই সার্টিফিকেট"
                         class="certificate-img object-contain drop-shadow-2xl">
                </div>

                <!-- Center Certificate (100% opacity) -->
                <div id="cert-center" class="certificate-item absolute transition-all duration-700" style="left: 50%; transform: translateX(-50%); opacity: 1; z-index: 10;">
                    <img src="{{ asset('image 12.png') }}"
                         alt="বিএসটিআই সার্টিফিকেট"
                         class="certificate-img object-contain drop-shadow-2xl">
                </div>

                <!-- Right Certificate (20% opacity) -->
                <div id="cert-right" class="certificate-item absolute transition-all duration-700" style="right: 5%; opacity: 0.2; transform: scale(0.85); z-index: 1;">
                    <img src="{{ asset('image 13.png') }}"
                         alt="বিএসটিআই সার্টিফিকেট"
                         class="certificate-img object-contain drop-shadow-2xl">
                </div>
            </div>
        </div>

        <!-- Carousel Dots -->
        <div class="flex justify-center carousel-dots-container mt-8 space-x-3">
            <button class="carousel-dot w-3 h-3 rounded-full transition-all duration-300 bg-white" data-cert="0"></button>
            <button class="carousel-dot w-3 h-3 rounded-full transition-all duration-300 bg-white bg-opacity-60" data-cert="1"></button>
            <button class="carousel-dot w-3 h-3 rounded-full transition-all duration-300 bg-white bg-opacity-60" data-cert="2"></button>
        </div>

        <!-- Call-to-Action Button -->
        <div class="text-center certificate-cta-container mt-12">
            <button onclick="document.getElementById('order-form').scrollIntoView({behavior: 'smooth'})"
               class="cta-button px-12 py-5 text-white font-bold"
               style="font-size: clamp(18px, 4vw, 24px);">
                এখনই অর্ডার করুন
            </button>
        </div>
    </div>

    <!-- Styles for Certificate Carousel -->
    <style>
        /* Desktop dimensions */
        @media (min-width: 768px) {
            .certificate-img {
                width: 1438px;
                height: 1146px;
            }
        }

        /* Mobile dimensions */
        @media (max-width: 767px) {
            .certificate-section {
                padding-top: 2rem !important;
                padding-bottom: 2rem !important;
            }

            .certificate-heading-container {
                margin-bottom: 1.5rem !important;
            }

            .certificate-title {
                font-size: 30px !important;
                font-weight: bold !important;
            }

            .certificate-carousel {
                height: 450px !important;
                display: flex !important;
                align-items: center !important;
                justify-content: center !important;
            }

            #cert-center {
                transform: translateX(-50%) !important;
                top: 50% !important;
                margin-top: -174px !important;
            }

            .certificate-img {
                width: 280px !important;
                height: 348.13px !important;
                border-radius: 12px !important;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2) !important;
            }

            .carousel-dots-container {
                margin-top: 1.5rem !important;
            }

            .certificate-cta-container {
                margin-top: 2rem !important;
            }

            #cert-left, #cert-right {
                opacity: 0.2 !important;
                transform: scale(0.7) !important;
                z-index: 1 !important;
                top: 50% !important;
                margin-top: -174px !important;
            }

            #cert-left {
                left: -25% !important;
            }

            #cert-right {
                right: -25% !important;
            }
        }
    </style>

    <!-- JavaScript for Carousel -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const certificates = [
                { img: '{{ asset("image 12.png") }}' },
                { img: '{{ asset("image 13.png") }}' },
                { img: '{{ asset("image 14.png") }}' }
            ];
            const dots = document.querySelectorAll('.carousel-dot');
            let currentIndex = 0;

            const certLeft = document.getElementById('cert-left');
            const certCenter = document.getElementById('cert-center');
            const certRight = document.getElementById('cert-right');

            function updateCarousel() {
                const prevIndex = (currentIndex - 1 + 3) % 3;
                const nextIndex = (currentIndex + 1) % 3;

                // Update images
                certLeft.querySelector('img').src = certificates[prevIndex].img;
                certCenter.querySelector('img').src = certificates[currentIndex].img;
                certRight.querySelector('img').src = certificates[nextIndex].img;

                // Update dots
                dots.forEach((dot, index) => {
                    if (index === currentIndex) {
                        dot.classList.remove('bg-opacity-60');
                    } else {
                        dot.classList.add('bg-opacity-60');
                    }
                });
            }

            // Dot click handlers
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    currentIndex = index;
                    updateCarousel();
                });
            });

            // Auto-rotate every 4 seconds
            setInterval(() => {
                currentIndex = (currentIndex + 1) % 3;
                updateCarousel();
            }, 4000);

            // Initial setup
            updateCarousel();
        });
    </script>
</section>