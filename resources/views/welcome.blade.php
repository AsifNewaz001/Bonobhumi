<!DOCTYPE html>
<html lang="bn" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- SEO Meta Tags -->
    <title>বনভূমি A2 সরের ঘি | খাঁটি দেশি গরুর ক্রিম থেকে তৈরি | Bonobhumi Pure Desi Ghee</title>
    <meta name="description" content="বনভূমি A2 সরের ঘি - ১০০% খাঁটি দেশি গরুর ক্রিম থেকে ঐতিহ্যবাহী বিলোনা পদ্ধতিতে তৈরি। সহজ হজম, ভিটামিন সমৃদ্ধ, শিশুদের মস্তিষ্ক বিকাশে সহায়ক।">
    <meta name="keywords" content="A2 ghee, দেশি ঘি, সরের ঘি, খাঁটি ঘি, বনভূমি, bilona ghee, pure ghee Bangladesh">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="বনভূমি A2 সরের ঘি | খাঁটি দেশি গরুর ক্রিম">
    <meta property="og:description" content="ঐতিহ্যবাহী বিলোনা পদ্ধতিতে তৈরি ১০০% খাঁটি A2 সরের ঘি। সহজ হজম, পুষ্টি সমৃদ্ধ।">
    <meta property="og:type" content="product">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/hero.png') }}">
    
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="বনভূমি A2 সরের ঘি | খাঁটি দেশি গরুর ক্রিম">
    <meta name="twitter:description" content="ঐতিহ্যবাহী বিলোনা পদ্ধতিতে তৈরি ১০০% খাঁটি A2 সরের ঘি।">
    
    <!-- Additional Meta Tags -->
    <meta name="robots" content="index, follow">
    <meta name="author" content="Bonobhumi">
    <link rel="canonical" href="{{ url()->current() }}">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
    <!-- Fonts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="font-english antialiased bg-white">

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        @include('components.hero-section')
        
        <!-- Features Section -->
        @include('components.features-section')
        
        <!-- Comparison Section -->
        @include('components.comparison-section')
        
        <!-- Certificate Section -->
        @include('components.certificate-section')
        
        <!-- Ata Section -->
        @include('components.ata-section')
        
        <!-- FAQ Section -->
        <section class="py-16 bg-cover bg-center bg-no-repeat relative faq-section" style="background-image: url('{{ asset('faq2.png') }}');">
            <style>
                @media (min-width: 768px) {
                    .faq-section .faq-question {
                        font-size: 18px !important;
                    }
                }
                @media (max-width: 767px) {
                    .faq-section .faq-question {
                        font-size: 16px !important;
                    }
                }
            </style>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-center lg:justify-end">
                <div class="max-w-4xl lg:mr-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-white font-bengali mb-4">FAQs</h2>
                    <div class="w-24 h-1 bg-ghee-gold mx-auto"></div>
                </div>
                @livewire('faq')
                </div>
            </div>
        </section>
        
        <!-- Pricing Section -->
        @include('components.pricing-section')
        
        <!-- Combined Checkout Section -->
        @include('components.checkout-section')
    </main>

    <!-- Footer -->
    @include('components.footer')

    @livewireScripts
</body>
</html>