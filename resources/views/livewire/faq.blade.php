<div x-data="{ openFaq: null }" class="space-y-4">
    @foreach($faqs as $faq)
        <div class="bg-white rounded-2xl shadow-md overflow-hidden faq-card" style="border: 0.45px solid #EFC14B;">
            <!-- Question Header -->
            <div
                @click="openFaq = openFaq === {{ $faq['id'] }} ? null : {{ $faq['id'] }}"
                class="w-full px-6 py-4 text-left flex justify-between items-center hover:bg-gray-50 cursor-pointer transition-all duration-300 select-none"
                :class="{ 'bg-gradient-to-r from-ghee-gold to-yellow-500 text-white': openFaq === {{ $faq['id'] }}, 'bg-white': openFaq !== {{ $faq['id'] }} }"
                role="button"
                tabindex="0"
                @keydown.enter="openFaq = openFaq === {{ $faq['id'] }} ? null : {{ $faq['id'] }}"
                @keydown.space.prevent="openFaq = openFaq === {{ $faq['id'] }} ? null : {{ $faq['id'] }}"
            >
                <span class="faq-question font-semibold font-bengali pr-4 pointer-events-none transition-colors duration-300"
                      :class="{ 'text-white': openFaq === {{ $faq['id'] }} }"
                      style="color: #604D20; font-size: 18px;">
                    {{ $faq['question'] }}
                </span>
                <div class="flex-shrink-0 pointer-events-none">
                    <svg 
                        class="w-5 h-5 transform transition-all duration-300"
                        :class="{ 'rotate-180 text-white': openFaq === {{ $faq['id'] }}, 'text-ghee-gold': openFaq !== {{ $faq['id'] }} }"
                        fill="none" 
                        stroke="currentColor" 
                        viewBox="0 0 24 24"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </div>
            </div>
            
            <!-- Answer Content -->
            <div 
                x-show="openFaq === {{ $faq['id'] }}"
                x-collapse
                class="border-t border-gray-200"
            >
                <div class="px-6 py-4 text-gray-700 font-bengali leading-relaxed">
                    {{ $faq['answer'] }}
                </div>
            </div>
        </div>
    @endforeach
</div>