# Bonobhumi A2 Pure Desi Ghee Landing Page - Implementation Specification

## 🎯 Project Overview

This project creates a production-ready, conversion-optimized landing page for **Bonobhumi খাঁটি দেশি সরের ঘি** (A2 Pure Desi Cream Ghee) using Laravel TALL stack. The page promotes premium, traditional ghee made from desi cow milk cream, emphasizing purity, nutritional benefits, and heritage authenticity.

### Key Project Details
- **Product**: Bonobhumi A2 Pure Desi Cream Ghee
- **Target Audience**: Health-conscious Bangladeshi families, parents focused on child development, individuals with digestion issues
- **Primary Goal**: Drive online orders via integrated order form (cash on delivery)
- **Language**: Primarily Bengali with English support
- **Brand Personality**: Traditional, pure, trustworthy, heritage-driven

## 📋 Technical Stack Requirements

### Core Framework
- **Laravel 11** - Latest stable version
- **Livewire 3** - For dynamic components and forms
- **Tailwind CSS** - Utility-first CSS framework
- **Alpine.js** - Lightweight JavaScript framework
- **DaisyUI** (optional) - Tailwind component library

### Additional Dependencies
```bash
composer require livewire/livewire
npm install @tailwindcss/forms @tailwindcss/typography alpinejs
```

### Performance Requirements
- Core Web Vitals optimized
- Mobile-first responsive design
- Lazy-loaded images
- Purged CSS for production
- Load time target: <2 seconds

## 🏗️ Project Structure

```
bonobhumi-landing/
├── app/
│   └── Livewire/
│       ├── ContactForm.php
│       ├── FAQ.php
│       └── TestimonialCarousel.php
├── resources/
│   └── views/
│       ├── welcome.blade.php
│       ├── livewire/
│       │   ├── contact-form.blade.php
│       │   ├── faq.blade.php
│       │   └── testimonial-carousel.blade.php
│       └── components/
│           ├── hero-section.blade.php
│           ├── features-section.blade.php
│           ├── pricing-section.blade.php
│           └── footer.blade.php
├── public/
│   └── images/
│       ├── hero-ghee.jpg
│       ├── certifications/
│       └── icons/
└── routes/web.php
```

## 📄 Content Requirements (From Client PDFs)

### Primary Sources
1. **Web.pdf** - Landing page structure, copy, FAQs, testimonials, pricing
2. **USP Of 5 Product.pdf** - Product benefits and differentiators (Ghee section only)
3. **assets** - folder contains assets required for this project

### Key Content Elements

#### Hero Section
- **Headline**: "এমন স্বাদের সরের ঘি শেষ কবে খেয়েছেন মনে পড়ে কি?" (or similar from Web.pdf)
- **Subheadline**: Traditional heritage messaging about pure desi ghee
- **CTA Button**: "এখনই অর্ডার করুন"
- **Trust Indicators**: BSTI approval, 100% pure, traditional bilona method

#### Product Benefits (From USP PDF)
- A2 beta-casein protein for easy digestion
- Rich in vitamins A, D, E, K
- Omega-3 fatty acids for heart health
- Supports child brain development
- Traditional bilona churning method
- No preservatives or artificial additives
- Helps with IBS and lactose intolerance

#### Pricing Structure
- **Single Pack**: 300g × 1 = ৳870
- **Bundle Pack**: 300g × 2 = ৳1530 (saves ৳210)
- **Delivery**: ৳100 (Dhaka), ৳150 (Outside Dhaka)
- **Payment**: Cash on Delivery

#### FAQ Content (From Web.pdf)
- Differences between A2 and regular ghee
- Storage and shelf life
- Delivery timeline
- Return/refund policy
- Health benefits explanation

## 🎨 Design Specifications

### Color Scheme
- **Primary**: Warm golden yellows (#F59E0B, #FCD34D)
- **Secondary**: Earthy greens (#10B981, #34D399)
- **Accent**: Rich browns (#92400E, #B45309)
- **Text**: Dark grays (#1F2937, #374151)
- **Background**: Clean whites and light creams

### Typography
- **Bengali Font**: 'Noto Sans Bengali', 'SolaimanLipi', sans-serif
- **English Font**: 'Inter', 'Roboto', sans-serif
- **Headlines**: Bold, prominent sizing (text-3xl to text-6xl)
- **Body**: Clean, readable (text-base to text-lg)

### Visual Elements
- Subtle gradients for hero section
- Rounded corners (rounded-lg, rounded-xl)
- Soft shadows for cards and components
- Micro-animations for interactions
- Heritage-inspired iconography

## 📱 Responsive Breakpoints

- **Mobile**: 0px - 768px (sm and below)
- **Tablet**: 768px - 1024px (md to lg)
- **Desktop**: 1024px+ (xl and 2xl)

### Mobile-First Approach
- Single column layout for mobile
- Collapsible navigation
- Touch-friendly buttons (min 44px)
- Optimized image sizes
- Simplified forms

## 🧩 Required Components

### 1. Hero Section Component
```php
// resources/views/components/hero-section.blade.php
```
**Features:**
- Compelling headline and subheadline
- Primary CTA button
- Hero image with lazy loading
- Trust badges (BSTI, Pure, Traditional)
- Background gradient
- Mobile responsive

### 2. Features/Benefits Section
**Features:**
- Grid layout (1 col mobile, 2-3 cols desktop)
- Icon + benefit cards
- Content from USP PDF
- Hover animations
- Accessible markup

### 3. Social Proof Section
**Features:**
- Customer testimonials carousel
- Certification logos
- Star ratings
- Cultural nostalgia messaging
- Trust metrics

### 4. Pricing Section
**Features:**
- Clear package comparison
- Savings highlight for bundle
- Add to cart interaction
- Delivery cost calculation
- Mobile-optimized layout

### 5. Livewire ContactForm Component
```php
// app/Livewire/ContactForm.php
```

**Required Fields:**
- Name (required, min 2 chars)
- Mobile (required, 11 digits, BD format)
- Address (required, min 10 chars)
- Package selection (dropdown)
- Delivery area (Dhaka/Outside Dhaka)
- Total calculation with delivery

**Validation Rules:**
```php
protected $rules = [
    'name' => 'required|min:2|max:50',
    'mobile' => 'required|regex:/^01[3-9][0-9]{8}$/',
    'address' => 'required|min:10|max:200',
    'package' => 'required|in:single,bundle',
    'delivery_area' => 'required|in:dhaka,outside',
];
```

### 6. FAQ Component (Livewire)
**Features:**
- Accordion-style collapsible sections
- Content from Web.pdf
- Alpine.js interactions
- ARIA accessibility
- Search functionality (optional)

### 7. TestimonialCarousel Component
**Features:**
- Auto-rotating testimonials
- Manual navigation
- Responsive design
- Smooth transitions
- Touch/swipe support

## 🔧 Implementation Guidelines

### Laravel Setup
```bash
# Create new Laravel project
laravel new bonobhumi-landing
cd bonobhumi-landing

# Install Livewire
composer require livewire/livewire

# Install and configure Tailwind
npm install -D tailwindcss postcss autoprefixer @tailwindcss/forms @tailwindcss/typography
npx tailwindcss init -p

# Install Alpine.js
npm install alpinejs

# Build assets
npm run dev
```

### Tailwind Configuration
```javascript
// tailwind.config.js
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./app/**/*.php",
  ],
  theme: {
    extend: {
      colors: {
        'ghee-gold': '#F59E0B',
        'ghee-cream': '#FCD34D',
        'heritage-green': '#10B981',
        'earth-brown': '#92400E',
      },
      fontFamily: {
        'bengali': ['Noto Sans Bengali', 'SolaimanLipi', 'sans-serif'],
        'english': ['Inter', 'Roboto', 'sans-serif'],
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
  ],
}
```

### Routes Configuration
```php
// routes/web.php
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Optional: Thank you page after order
Route::get('/thank-you', function () {
    return view('thank-you');
})->name('thank-you');
```

### Environment Variables
```env
APP_NAME="Bonobhumi A2 Ghee"
APP_URL=http://localhost
APP_TIMEZONE=Asia/Dhaka

# Email configuration for order notifications
MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="orders@bonobhumi.com"
MAIL_FROM_NAME="Bonobhumi Orders"
```

## 🧪 Testing Requirements

### Test Cases Per Component

#### Hero Section Tests
- [ ] Hero headline displays correctly in Bengali
- [ ] CTA button is present and clickable
- [ ] Hero image loads with lazy loading
- [ ] Trust badges render with proper alt text
- [ ] Responsive layout works on all breakpoints
- [ ] Background gradient applies correctly

#### ContactForm Tests
- [ ] Form renders with all required fields
- [ ] Validation works for each field
- [ ] Mobile number validation (BD format)
- [ ] Package selection updates total price
- [ ] Delivery cost calculation is accurate
- [ ] CSRF protection is active
- [ ] Success message displays after submission
- [ ] Error states display appropriately

#### FAQ Tests
- [ ] All questions from Web.pdf are included
- [ ] Accordion expand/collapse works
- [ ] Alpine.js interactions function properly
- [ ] ARIA attributes for accessibility
- [ ] Mobile responsive design

#### Performance Tests
- [ ] Page load time under 2 seconds
- [ ] Images are lazy-loaded
- [ ] CSS is purged for production
- [ ] No console errors
- [ ] Lighthouse score > 90

### Accessibility Requirements
- [ ] Semantic HTML structure
- [ ] ARIA labels for interactive elements
- [ ] Keyboard navigation support
- [ ] Screen reader compatibility
- [ ] Color contrast meets WCAG AA standards
- [ ] Bengali text renders correctly

## 🚀 Deployment Checklist

### Pre-Deployment
- [ ] All tests passing
- [ ] Performance optimized
- [ ] SEO meta tags configured
- [ ] Error handling implemented
- [ ] Security measures in place
- [ ] Bengali fonts loading correctly

### Production Optimization
```bash
# Optimize for production
php artisan config:cache
php artisan route:cache
php artisan view:cache
npm run build
```

### SEO Meta Tags
```html
<!-- resources/views/welcome.blade.php head section -->
<title>বনভূমি A2 সরের ঘি | খাঁটি দেশি গরুর ক্রিম থেকে তৈরি | Bonobhumi Pure Desi Ghee</title>
<meta name="description" content="বনভূমি A2 সরের ঘি - ১০০% খাঁটি দেশি গরুর ক্রিম থেকে ঐতিহ্যবাহী বিলোনা পদ্ধতিতে তৈরি। সহজ হজম, ভিটামিন সমৃদ্ধ, শিশুদের মস্তিষ্ক বিকাশে সহায়ক।">
<meta name="keywords" content="A2 ghee, দেশি ঘি, সরের ঘি, খাঁটি ঘি, বনভূমি, bilona ghee, pure ghee Bangladesh">
<meta property="og:title" content="বনভূমি A2 সরের ঘি | খাঁটি দেশি গরুর ক্রিম">
<meta property="og:description" content="ঐতিহ্যবাহী বিলোনা পদ্ধতিতে তৈরি ১০০% খাঁটি A2 সরের ঘি। সহজ হজম, পুষ্টি সমৃদ্ধ।">
<meta property="og:type" content="product">
<meta name="robots" content="index, follow">
<meta name="author" content="Bonobhumi">
<link rel="canonical" href="{{ url()->current() }}">
```

## 📊 Success Metrics

### Conversion Targets
- **Primary Goal**: Order form completion rate > 5%
- **Secondary Goal**: Average time on page > 3 minutes
- **User Experience**: Bounce rate < 60%
- **Performance**: Core Web Vitals all green
- **Accessibility**: WCAG AA compliance

### Analytics Tracking
- Google Analytics 4 integration
- Conversion tracking for orders
- Form abandonment tracking
- Scroll depth measurement
- Mobile vs desktop performance

## 🔒 Security Considerations

### Form Security
- CSRF token validation
- Input sanitization and validation
- Rate limiting on form submissions
- XSS protection
- SQL injection prevention

### General Security
- HTTPS enforcement in production
- Secure headers configuration
- Environment variable protection
- File upload restrictions (if any)

## 📞 Support and Maintenance

### Post-Launch Tasks
- [ ] Monitor form submissions
- [ ] Track performance metrics
- [ ] Gather user feedback
- [ ] A/B test different CTA variations
- [ ] Optimize based on analytics data

### Content Updates
- [ ] Seasonal promotions
- [ ] New testimonials
- [ ] Updated pricing
- [ ] Additional FAQs
- [ ] Product images refresh

## 📝 Notes for Claude Code

### Implementation Priority
1. Start with basic Laravel project setup
2. Implement hero section and main layout
3. Add Livewire ContactForm with full validation
4. Create features and pricing sections
5. Implement FAQ component with Alpine.js
6. Add testimonial carousel
7. Optimize for performance and mobile
8. Test thoroughly before considering complete

### Special Attention Required
- **Bengali Text Rendering**: Ensure proper font loading and UTF-8 encoding
- **Mobile Optimization**: Most users will be on mobile devices
- **Form Validation**: Critical for order processing accuracy
- **Performance**: Fast loading is essential for conversion
- **Cultural Sensitivity**: Maintain authentic Bengali tone and heritage messaging

### Content Sources Reference
- All product benefits must come from the USP PDF (Ghee section)
- All FAQ content must match Web.pdf exactly
- Testimonials and reviews from Web.pdf only
- Pricing structure as specified in documents
- No invented content outside of provided PDFs

This specification provides comprehensive guidance for implementing a production-ready Bonobhumi A2 Ghee landing page that meets all technical, design, and business requirements while ensuring optimal user experience and conversion rates.