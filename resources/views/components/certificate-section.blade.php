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
            <div class="certificate-carousel">
                <!-- Left Certificate -->
                <div id="cert-left" class="certificate-item state-left">
                    <img src="{{ asset('image 14.png') }}"
                         alt="বিএসটিআই সার্টিফিকেট"
                         class="certificate-img object-contain drop-shadow-2xl">
                </div>

                <!-- Center Certificate -->
                <div id="cert-center" class="certificate-item state-center">
                    <img src="{{ asset('image 12.png') }}"
                         alt="বিএসটিআই সার্টিফিকেট"
                         class="certificate-img object-contain drop-shadow-2xl">
                </div>

                <!-- Right Certificate -->
                <div id="cert-right" class="certificate-item state-right">
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
        .certificate-carousel {
            position: relative;
            height: 900px;
            display: flex;
            align-items: center;
            justify-content: center;
            perspective: 2000px;
        }

        .certificate-item {
            position: absolute;
            top: 50%;
            left: 50%;
            transition: transform 0.6s ease;
            transform-style: preserve-3d;
        }

        .certificate-item.state-left,
        .certificate-item.state-right {
            transition: transform 0.6s ease, opacity 0.3s ease;
        }

        .certificate-item img {
            width: 1438px;
            height: 1146px;
            transform-origin: center;
        }

        .certificate-item.state-left {
            transform: translate3d(-135%, -50%, -200px) scale(0.82) rotate(-6deg);
            opacity: 0.2;
            z-index: 1;
        }

        .certificate-item.state-center {
            transition: transform 0.6s ease, opacity 0s linear;
            transform: translate3d(-50%, -50%, 0) scale(1) rotate(0deg);
            opacity: 1;
            z-index: 3;
        }

        .certificate-item.state-right {
            transform: translate3d(35%, -50%, -200px) scale(0.82) rotate(6deg);
            opacity: 0.2;
            z-index: 1;
        }

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
                height: 420px !important;
            }

            .certificate-item img {
                width: 280px !important;
                height: 348px !important;
            }


            .certificate-item.state-left {
                transition: transform 0.6s ease, opacity 0.3s ease;
                transform: translate3d(-105%, -50%, -120px) scale(0.78) rotate(-5deg);
            }

            .certificate-item.state-right {
                transition: transform 0.6s ease, opacity 0.3s ease;
                transform: translate3d(5%, -50%, -120px) scale(0.78) rotate(5deg);
            }

            .certificate-cta-container {
                margin-top: 2rem !important;
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
            let isAnimating = false;

            let certificateItems = [
                document.getElementById('cert-left'),
                document.getElementById('cert-center'),
                document.getElementById('cert-right')
            ];

            const total = certificates.length;

            function setImages() {
                const prevIndex = (currentIndex - 1 + total) % total;
                const nextIndex = (currentIndex + 1) % total;

                certificateItems[0].querySelector('img').src = certificates[prevIndex].img;
                certificateItems[1].querySelector('img').src = certificates[currentIndex].img;
                certificateItems[2].querySelector('img').src = certificates[nextIndex].img;
            }

            function updateDots() {
                dots.forEach((dot, index) => {
                    if (index === currentIndex) {
                        dot.classList.remove('bg-opacity-60');
                    } else {
                        dot.classList.add('bg-opacity-60');
                    }
                });
            }

            function rotate(direction = 1) {
                if (isAnimating) {
                    return;
                }
                isAnimating = true;

                if (direction === 1) {
                    const [left, center, right] = certificateItems;
                    left.classList.replace('state-left', 'state-right');
                    center.classList.replace('state-center', 'state-left');
                    right.classList.replace('state-right', 'state-center');
                    certificateItems.push(certificateItems.shift());
                } else {
                    const [left, center, right] = certificateItems;
                    right.classList.replace('state-right', 'state-left');
                    left.classList.replace('state-left', 'state-center');
                    center.classList.replace('state-center', 'state-right');
                    certificateItems.unshift(certificateItems.pop());
                }

                setTimeout(() => {
                    currentIndex = (currentIndex + direction + total) % total;
                    setImages();
                    updateDots();
                    isAnimating = false;
                }, 600);
            }

            // Dot click handlers
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    if (index === currentIndex || isAnimating) {
                        return;
                    }
                    const forwardSteps = (index - currentIndex + total) % total;
                    if (forwardSteps === 1) {
                        rotate(1);
                    } else if (forwardSteps === 2) {
                        rotate(-1);
                    }
                });
            });

            // Auto-rotate every 4 seconds
            setInterval(() => {
                rotate(1);
            }, 4000);

            // Initial setup
            setImages();
            updateDots();
        });
    </script>
</section>
