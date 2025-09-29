<section class="py-16 relative overflow-hidden" style="background: linear-gradient(135deg, #55B76B 0%, #FFD538 100%);">
    
    <!-- Heading -->
    <div class="text-center mb-12">
        <h2 class="font-bold text-white text-shadow-lg" style="font-family: 'Hind Siliguri', sans-serif; font-size: clamp(24px, 5vw, 48px); color: #FFFFFF; line-height: 1.2; text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">
            ১০০% খাঁটি ও বিএসটিআই অনুমোদিত (সার্টিফিকেশন)
        </h2>
    </div>

    <!-- Certificate Display -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative">
            <!-- Certificate Carousel Container -->
            <div class="relative transform rotate-1 hover:rotate-0 transition-transform duration-500 h-96 flex items-center justify-center">
                <!-- Certificate 1 -->
                <div id="cert-1" class="absolute inset-0 flex items-center justify-center transition-opacity duration-1000 opacity-100">
                    <img src="{{ asset('image 12.png') }}" 
                         alt="বিএসটিআই সার্টিফিকেট ১" 
                         class="max-w-full max-h-full object-contain drop-shadow-2xl">
                </div>
                <!-- Certificate 2 -->
                <div id="cert-2" class="absolute inset-0 flex items-center justify-center transition-opacity duration-1000 opacity-20">
                    <img src="{{ asset('image 13.png') }}" 
                         alt="বিএসটিআই সার্টিফিকেট ২" 
                         class="max-w-full max-h-full object-contain drop-shadow-2xl">
                </div>
                <!-- Certificate 3 -->
                <div id="cert-3" class="absolute inset-0 flex items-center justify-center transition-opacity duration-1000 opacity-20">
                    <img src="{{ asset('image 14.png') }}" 
                         alt="বিএসটিআই সার্টিফিকেট ৩" 
                         class="max-w-full max-h-full object-contain drop-shadow-2xl">
                </div>
            </div>
        </div>

        <!-- Carousel Dots -->
        <div class="flex justify-center mt-8 space-x-3">
            <button class="carousel-dot w-3 h-3 rounded-full transition-all duration-300 bg-white" data-cert="0"></button>
            <button class="carousel-dot w-3 h-3 rounded-full transition-all duration-300 bg-white bg-opacity-60" data-cert="1"></button>
            <button class="carousel-dot w-3 h-3 rounded-full transition-all duration-300 bg-white bg-opacity-60" data-cert="2"></button>
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
            const certificates = [
                document.getElementById('cert-1'),
                document.getElementById('cert-2'),
                document.getElementById('cert-3')
            ];
            const dots = document.querySelectorAll('.carousel-dot');
            let currentCert = 0;
            const totalCerts = 3;

            // Function to show specific certificate
            function showCertificate(certIndex) {
                currentCert = certIndex;
                
                // Update certificate opacity
                certificates.forEach((cert, index) => {
                    if (index === certIndex) {
                        cert.classList.remove('opacity-20');
                        cert.classList.add('opacity-100');
                    } else {
                        cert.classList.remove('opacity-100');
                        cert.classList.add('opacity-20');
                    }
                });
                
                // Update dots
                dots.forEach((dot, index) => {
                    if (index === certIndex) {
                        dot.classList.remove('bg-opacity-60');
                        dot.classList.add('bg-white');
                    } else {
                        dot.classList.remove('bg-white');
                        dot.classList.add('bg-white', 'bg-opacity-60');
                    }
                });
            }

            // Add click event listeners to dots
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    showCertificate(index);
                });
            });

            // Auto-play carousel - move to next certificate every 4 seconds
            setInterval(() => {
                currentCert = (currentCert + 1) % totalCerts;
                showCertificate(currentCert);
            }, 4000);
        });
    </script>
</section>