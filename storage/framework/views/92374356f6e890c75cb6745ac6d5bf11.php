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
    <meta property="og:url" content="<?php echo e(url()->current()); ?>">
    <meta property="og:image" content="<?php echo e(asset('assets/hero.png')); ?>">
    
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="বনভূমি A2 সরের ঘি | খাঁটি দেশি গরুর ক্রিম">
    <meta name="twitter:description" content="ঐতিহ্যবাহী বিলোনা পদ্ধতিতে তৈরি ১০০% খাঁটি A2 সরের ঘি।">
    
    <!-- Additional Meta Tags -->
    <meta name="robots" content="index, follow">
    <meta name="author" content="Bonobhumi">
    <link rel="canonical" href="<?php echo e(url()->current()); ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('favicon.ico')); ?>">
    
    <!-- Fonts & Styles -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

</head>
<body class="font-english antialiased bg-gray-50">

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <?php echo $__env->make('components.hero-section', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        
        <!-- Features Section -->
        <?php echo $__env->make('components.features-section', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        
        <!-- Comparison Section -->
        <?php echo $__env->make('components.comparison-section', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        
        <!-- Combined Checkout Section -->
        <?php echo $__env->make('components.checkout-section', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        
        <!-- FAQ Section -->
        <section class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 font-bengali mb-4">প্রায়শই জিজ্ঞাসিত প্রশ্নাবলী</h2>
                    <div class="w-24 h-1 bg-ghee-gold mx-auto"></div>
                </div>
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('faq');

$__html = app('livewire')->mount($__name, $__params, 'lw-3736044010-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php echo $__env->make('components.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

</body>
</html><?php /**PATH /Users/asifnewaz/Bonobhumi/resources/views/welcome.blade.php ENDPATH**/ ?>