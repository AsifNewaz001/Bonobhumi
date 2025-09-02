<!DOCTYPE html>
<html lang="bn" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>ধন্যবাদ - বনভূমি A2 সরের ঘি</title>
    <meta name="description" content="আপনার অর্ডার সফলভাবে গ্রহণ করা হয়েছে। ধন্যবাদ বনভূমি A2 সরের ঘি কিনার জন্য।">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-english antialiased bg-gray-50">
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full text-center">
            <!-- Success Icon -->
            <div class="mx-auto flex items-center justify-center h-24 w-24 rounded-full bg-green-100 mb-8">
                <svg class="h-12 w-12 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
            </div>
            
            <!-- Thank You Message -->
            <h1 class="text-3xl font-bold text-gray-900 font-bengali mb-4">
                অর্ডার সফলভাবে সম্পন্ন হয়েছে!
            </h1>
            
            <p class="text-lg text-gray-600 font-bengali mb-8">
                আপনার অর্ডারটি আমরা পেয়েছি। শীঘ্রই আমাদের টিম আপনার সাথে যোগাযোগ করবে এবং 
                ২৪-৪৮ ঘন্টার মধ্যে পণ্য ডেলিভারি করা হবে।
            </p>
            
            <!-- Order Details -->
            <div class="bg-white rounded-lg shadow-md p-6 mb-8 text-left">
                <h2 class="text-xl font-bold text-gray-900 font-bengali mb-4">অর্ডার তথ্য</h2>
                <div class="space-y-2 text-gray-600 font-bengali">
                    <p><strong>অর্ডার নং:</strong> #BG{{ rand(1000, 9999) }}</p>
                    <p><strong>অর্ডারের সময়:</strong> {{ now()->format('d/m/Y h:i A') }}</p>
                    <p><strong>পেমেন্ট:</strong> ক্যাশ অন ডেলিভারি</p>
                    <p><strong>ডেলিভারি:</strong> ২৪-৪৮ ঘন্টা</p>
                </div>
            </div>
            
            <!-- Next Steps -->
            <div class="bg-blue-50 rounded-lg p-6 mb-8">
                <h3 class="text-lg font-bold text-blue-900 font-bengali mb-3">পরবর্তী ধাপসমূহ</h3>
                <ul class="text-sm text-blue-800 font-bengali space-y-2 text-left">
                    <li class="flex items-start">
                        <span class="font-bold mr-2">১.</span>
                        আমাদের টিম ১-২ ঘন্টার মধ্যে কল করে অর্ডার কনফার্ম করবে
                    </li>
                    <li class="flex items-start">
                        <span class="font-bold mr-2">২.</span>
                        পণ্য প্যাকেজিং করে কুরিয়ারে দেওয়া হবে
                    </li>
                    <li class="flex items-start">
                        <span class="font-bold mr-2">৩.</span>
                        ট্র্যাকিং নাম্বার SMS এ পাঠানো হবে
                    </li>
                    <li class="flex items-start">
                        <span class="font-bold mr-2">৪.</span>
                        পণ্য হাতে পেয়ে টাকা পরিশোধ করুন
                    </li>
                </ul>
            </div>
            
            <!-- Contact Info -->
            <div class="text-center">
                <p class="text-sm text-gray-600 font-bengali mb-4">
                    কোনো সমস্যায় আমাদের সাথে যোগাযোগ করুন:
                </p>
                <div class="flex justify-center space-x-4">
                    <a href="tel:+8801712345678" class="bg-ghee-gold hover:bg-yellow-600 text-white px-4 py-2 rounded-lg font-bengali transition-colors">
                        📞 ফোন করুন
                    </a>
                    <a href="https://wa.me/8801712345678" target="_blank" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg font-bengali transition-colors">
                        💬 WhatsApp
                    </a>
                </div>
            </div>
            
            <!-- Back to Home -->
            <div class="mt-8">
                <a href="{{ route('home') }}" class="text-ghee-gold hover:text-yellow-600 font-bengali transition-colors">
                    ← হোম পেজে ফিরে যান
                </a>
            </div>
        </div>
    </div>
</body>
</html>