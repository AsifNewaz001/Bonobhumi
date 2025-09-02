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
<body class="font-english antialiased bg-gray-50">

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        @include('components.hero-section')
        
        <!-- Features Section -->
        @include('components.features-section')
        
        <!-- Pricing Section -->
        @include('components.pricing-section')
        
        <!-- Order Form Section -->
        <section id="order" class="py-16 bg-gray-50">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 font-bengali mb-4">অর্ডার করতে নিচের ফর্মটি পূরণ করুন</h2>
                    <p class="text-lg text-gray-600 font-bengali">ক্যাশ অন ডেলিভারি সুবিধা</p>
                </div>
                @livewire('contact-form')
            </div>
        </section>
        
        <!-- FAQ Section -->
        <section class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 font-bengali mb-4">প্রায়শই জিজ্ঞাসিত প্রশ্নাবলী</h2>
                    <div class="w-24 h-1 bg-ghee-gold mx-auto"></div>
                </div>
                @livewire('faq')
            </div>
        </section>
    </main>

    <!-- Footer -->
    @include('components.footer')

    @livewireScripts
</body>
</html>