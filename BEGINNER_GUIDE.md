# 🎨 Beginner's Guide to Modifying Bonobhumi Landing Page

*A comprehensive guide for non-technical users to make UI changes, update images, and customize the landing page*

---

## 📋 Table of Contents
1. [Getting Started](#getting-started)
2. [Understanding the File Structure](#understanding-the-file-structure)
3. [How to Start the Development Server](#how-to-start-the-development-server)
4. [Finding and Editing Different UI Sections](#finding-and-editing-different-ui-sections)
5. [Changing Colors](#changing-colors)
6. [Updating Images](#updating-images)
7. [Modifying Text Content](#modifying-text-content)
8. [Common Tasks](#common-tasks)
9. [Troubleshooting](#troubleshooting)

---

## 🚀 Getting Started

### What You Need
- A code editor (VS Code recommended - free download from [code.visualstudio.com](https://code.visualstudio.com))
- Terminal/Command Line access
- Basic understanding of file navigation

### Key Concepts
- **Frontend**: What users see (HTML, CSS, images)
- **Backend**: Server logic (PHP, Laravel)
- **Assets**: Images, fonts, stylesheets
- **Components**: Reusable UI pieces

---

## 📁 Understanding the File Structure

Your project is located at: `/Users/asifnewaz/Bonobhumi/`

### 🗂️ Most Important Folders for UI Changes:

```
Bonobhumi/
├── 📁 resources/views/          ← Main HTML templates
│   ├── welcome.blade.php        ← Main landing page layout
│   ├── thank-you.blade.php      ← Thank you page
│   ├── 📁 components/           ← Individual page sections
│   │   ├── hero-section.blade.php       ← Top banner area
│   │   ├── features-section.blade.php   ← Product benefits
│   │   ├── pricing-section.blade.php    ← Price packages
│   │   └── footer.blade.php             ← Bottom footer
│   └── 📁 livewire/             ← Interactive components
│       ├── contact-form.blade.php       ← Order form
│       ├── faq.blade.php               ← FAQ questions
│       └── testimonial-carousel.blade.php ← Customer reviews
├── 📁 public/assets/            ← All images and media files
├── 📁 resources/css/            ← Stylesheets
│   └── app.css                  ← Main CSS file
└── tailwind.config.js           ← Color and design settings
```

### 🎯 Quick Reference - Where to Find What:

| Want to Change | Go to File |
|---------------|------------|
| Main headline | `resources/views/components/hero-section.blade.php` |
| Product benefits | `resources/views/components/features-section.blade.php` |
| Prices | `resources/views/components/pricing-section.blade.php` |
| Customer reviews | `resources/views/livewire/testimonial-carousel.blade.php` |
| FAQ questions | `resources/views/livewire/faq.blade.php` |
| Order form | `resources/views/livewire/contact-form.blade.php` |
| Footer info | `resources/views/components/footer.blade.php` |
| Colors | `tailwind.config.js` |
| Images | `public/assets/` folder |

---

## 🖥️ How to Start the Development Server

### Step 1: Open Terminal
- **Mac**: Press `Cmd + Space`, type "Terminal", press Enter
- **Windows**: Press `Win + R`, type "cmd", press Enter

### Step 2: Navigate to Your Project
```bash
cd /Users/asifnewaz/Bonobhumi
```

### Step 3: Start Both Servers (Open 2 Terminal Windows)

**Terminal 1 - Laravel Server:**
```bash
php artisan serve --host=0.0.0.0 --port=8000
```

**Terminal 2 - Asset Compiler:**
```bash
npm run dev
```

### Step 4: View Your Website
Open your browser and go to: **http://localhost:8000**

### 🛑 To Stop Servers
Press `Ctrl + C` in both terminal windows.

---

## 🎨 Finding and Editing Different UI Sections

### 🏠 1. Hero Section (Top Banner)
**File**: `resources/views/components/hero-section.blade.php`

**What it contains:**
- Main headline: "এমন স্বাদের সরের ঘি শেষ কবে খেয়েছেন মনে পড়ে কি?"
- Trust badges (১০০% খাঁটি, BSTI অনুমোদিত)
- Main call-to-action buttons
- Hero image

**Common changes:**
```html
<!-- Find this line to change the main headline -->
<h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 font-bengali leading-tight mb-6">
    <span class="text-gradient">এমন স্বাদের সরের ঘি</span><br>
    শেষ কবে খেয়েছেন<br>
    <span class="text-ghee-gold">মনে পড়ে কি?</span>
</h1>

<!-- To change the hero image, find this line -->
<img 
    src="{{ asset('assets/image 15.png') }}" 
    alt="বনভূমি A2 সরের ঘি"
>
```

### 🌟 2. Features Section (Product Benefits)
**File**: `resources/views/components/features-section.blade.php`

**What it contains:**
- A2 protein benefits
- Health benefits cards
- Comparison table (Regular ghee vs Bonobhumi ghee)
- Certification badges

**To edit a benefit card:**
```html
<!-- Find cards like this and edit the text -->
<div class="card group hover:scale-105 transition-all duration-300">
    <h3 class="text-xl font-bold text-gray-900 font-bengali mb-4 text-center">A2 বিটা-ক্যাসেইন প্রোটিন</h3>
    <p class="text-gray-600 font-bengali text-center leading-relaxed">
        সহজ হজম ও পেটের সমস্যা কমায়। IBS ও ল্যাকটোজ ইনটলারেন্সে উপকারী।
    </p>
</div>
```

### 💰 3. Pricing Section
**File**: `resources/views/components/pricing-section.blade.php`

**What it contains:**
- Single pack pricing (৳870)
- Bundle pack pricing (৳1530)
- Delivery costs
- Package selection buttons

**To change prices:**
```html
<!-- Find these lines to update pricing -->
<div class="text-4xl font-bold text-ghee-gold font-bengali">৳৮৭০</div>
<div class="text-gray-500 font-bengali">৩০০গ্রাম × ১টি</div>

<!-- For bundle pricing -->
<div class="text-4xl font-bold text-ghee-gold font-bengali">৳১৫৩০</div>
<div class="text-gray-500 font-bengali">৩০০গ্রাম × ২টি</div>
```

### 📝 4. FAQ Section
**File**: `resources/views/livewire/faq.blade.php`
**Backend Data**: `app/Livewire/FAQ.php`

**To add/edit FAQ questions:**
1. Open `app/Livewire/FAQ.php`
2. Find the `$faqs` array
3. Add or modify questions:

```php
public $faqs = [
    [
        'id' => 1,
        'question' => 'A2 ঘি এবং সাধারণ ঘিয়ের মধ্যে পার্থক্য কী?',
        'answer' => 'A2 ঘি দেশি গরুর A2 বিটা-ক্যাসেইন প্রোটিন সমৃদ্ধ...',
        'open' => false
    ],
    // Add new FAQ here
    [
        'id' => 9,
        'question' => 'আপনার নতুন প্রশ্ন?',
        'answer' => 'আপনার উত্তর এখানে লিখুন।',
        'open' => false
    ]
];
```

### 🗣️ 5. Customer Testimonials
**File**: `resources/views/livewire/testimonial-carousel.blade.php`
**Backend Data**: `app/Livewire/TestimonialCarousel.php`

**To add/edit testimonials:**
1. Open `app/Livewire/TestimonialCarousel.php`
2. Find the `$testimonials` array
3. Add or modify reviews:

```php
public $testimonials = [
    [
        'id' => 1,
        'name' => 'সালমা আক্তার',
        'location' => 'ঢাকা',
        'rating' => 5,
        'text' => 'অনেক দিন পর পেলাম আসল ঘিয়ের স্বাদ!',
        'image' => 'assets/image 28.png'
    ],
    // Add new testimonial here
];
```

### 📞 6. Contact Form
**File**: `resources/views/livewire/contact-form.blade.php`
**Backend Logic**: `app/Livewire/ContactForm.php`

**To change form fields or validation messages:**
1. Form display: `resources/views/livewire/contact-form.blade.php`
2. Form logic: `app/Livewire/ContactForm.php`

### 🦶 7. Footer
**File**: `resources/views/components/footer.blade.php`

**To update contact information:**
```html
<!-- Find and update phone number -->
<a href="tel:+8801712345678" class="text-gray-300 hover:text-white transition-colors">
    +৮৮ ০১৭১২৩৪৫৬৭৮
</a>

<!-- Update email -->
<a href="mailto:orders@bonobhumi.com" class="text-gray-300 hover:text-white transition-colors">
    orders@bonobhumi.com
</a>
```

---

## 🎨 Changing Colors

### Option 1: Using Predefined Colors
**File**: `tailwind.config.js`

```javascript
theme: {
    extend: {
        colors: {
            'ghee-gold': '#F59E0B',      ← Main gold color
            'ghee-cream': '#FCD34D',     ← Lighter cream
            'heritage-green': '#10B981',  ← Green accent
            'earth-brown': '#92400E',     ← Brown accent
        },
    },
}
```

**To change colors:**
1. Replace the hex codes (e.g., `#F59E0B`) with your desired colors
2. Save the file
3. The website will automatically update

### Option 2: Using Color Classes in HTML
In any `.blade.php` file, you can change individual elements:

```html
<!-- Background colors -->
<div class="bg-ghee-gold">     ← Gold background
<div class="bg-blue-500">      ← Blue background
<div class="bg-red-500">       ← Red background

<!-- Text colors -->
<span class="text-ghee-gold">  ← Gold text
<span class="text-green-500">  ← Green text
<span class="text-purple-500"> ← Purple text

<!-- Border colors -->
<div class="border-ghee-gold"> ← Gold border
```

### 🌈 Common Color Classes:
- **Red**: `red-500`, `red-600`, `red-700`
- **Blue**: `blue-500`, `blue-600`, `blue-700`
- **Green**: `green-500`, `green-600`, `green-700`
- **Purple**: `purple-500`, `purple-600`, `purple-700`
- **Yellow**: `yellow-500`, `yellow-600`, `yellow-700`
- **Gray**: `gray-100`, `gray-500`, `gray-900`

---

## 🖼️ Updating Images

### Step 1: Prepare Your Images
- **Format**: PNG or JPG
- **Size**: Recommended max 1MB for web performance
- **Names**: Use descriptive names (e.g., `new-hero-image.png`)

### Step 2: Add Images to Assets Folder
1. Copy your new images to: `public/assets/`
2. Remember the exact filename

### Step 3: Update Image References in Code

**For Hero Section Image:**
```html
<!-- In resources/views/components/hero-section.blade.php -->
<!-- Find this line and change the filename -->
<img 
    src="{{ asset('assets/your-new-image.png') }}" 
    alt="বনভূমি A2 সরের ঘি"
    class="w-full max-w-lg mx-auto drop-shadow-2xl rounded-2xl"
    loading="lazy"
>
```

**For Product Images in Pricing:**
```html
<!-- In resources/views/components/pricing-section.blade.php -->
<img src="{{ asset('assets/your-product-image.png') }}" alt="বনভূমি A2 সরের ঘি" class="w-full h-full object-contain">
```

**For Testimonial Images:**
```php
// In app/Livewire/TestimonialCarousel.php
[
    'id' => 1,
    'name' => 'সালমা আক্তার',
    'image' => 'assets/new-customer-photo.png'  // ← Change this
],
```

**For Logo:**
```html
<!-- In resources/views/welcome.blade.php and footer -->
<img src="{{ asset('assets/your-new-logo.png') }}" alt="বনভূমি লোগো" class="h-10 w-auto">
```

### 📸 Image Size Classes:
- `w-full h-auto` - Full width, auto height
- `w-32 h-32` - 128px × 128px
- `w-64 h-64` - 256px × 256px
- `max-w-lg` - Maximum large width
- `object-cover` - Crop to fit
- `object-contain` - Fit entire image
- `rounded-lg` - Rounded corners
- `rounded-full` - Circular image

---

## ✏️ Modifying Text Content

### Bengali Text
Most Bengali text is marked with `font-bengali` class:

```html
<h1 class="font-bengali">আপনার বাংলা টেক্সট এখানে</h1>
<p class="font-bengali">আরো বাংলা টেক্সট</p>
```

### Common Text Changes:

**1. Page Title (in browser tab):**
```html
<!-- In resources/views/welcome.blade.php -->
<title>বনভূমি A2 সরের ঘি | খাঁটি দেশি গরুর ক্রিম থেকে তৈরি | Bonobhumi Pure Desi Ghee</title>
```

**2. Navigation Menu:**
```html
<!-- In resources/views/welcome.blade.php -->
<a href="#features" class="text-gray-700 hover:text-ghee-gold transition-colors font-bengali">বৈশিষ্ট্য</a>
<a href="#pricing" class="text-gray-700 hover:text-ghee-gold transition-colors font-bengali">মূল্য</a>
```

**3. Button Text:**
```html
<button class="btn-primary font-bengali">এখনই অর্ডার করুন</button>
```

**4. Section Headings:**
```html
<h2 class="text-3xl font-bold text-gray-900 font-bengali mb-4">
    আপনার নতুন হেডিং
</h2>
```

---

## 🔧 Common Tasks

### Task 1: Change Main Headline
1. Open: `resources/views/components/hero-section.blade.php`
2. Find line ~31: `<span class="text-gradient">এমন স্বাদের সরের ঘি</span>`
3. Replace with your text
4. Save file

### Task 2: Update Phone Number Everywhere
**Files to update:**
- `resources/views/components/footer.blade.php` (line ~85)
- `resources/views/livewire/faq.blade.php` (line ~67)
- `resources/views/thank-you.blade.php` (line ~73)

**Find and replace:**
```
+8801712345678  →  +8801XXXXXXXXX
০১৭১২৩৪৫৬৭৮     →  ০১XXXXXXXXX
```

### Task 3: Change Pricing
1. **Display Prices**: `resources/views/components/pricing-section.blade.php`
   - Line ~75: `৳৮৭০` (single pack)
   - Line ~150: `৳১৫৩০` (bundle pack)

2. **Form Calculation**: `app/Livewire/ContactForm.php`
   - Line ~45: `$packagePrice = 870;` (single)
   - Line ~48: `$packagePrice = 1530;` (bundle)

### Task 4: Add New FAQ Question
1. Open: `app/Livewire/FAQ.php`
2. Add to `$faqs` array:
```php
[
    'id' => 9,
    'question' => 'আপনার প্রশ্ন?',
    'answer' => 'আপনার উত্তর।',
    'open' => false
],
```

### Task 5: Change Color Scheme
1. Open: `tailwind.config.js`
2. Update color values:
```javascript
'ghee-gold': '#YOUR_NEW_COLOR',
'heritage-green': '#YOUR_GREEN_COLOR',
```

### Task 6: Replace Hero Image
1. Copy new image to: `public/assets/new-hero.png`
2. Open: `resources/views/components/hero-section.blade.php`
3. Find line ~145: Change `image 15.png` to `new-hero.png`

---

## 🆘 Troubleshooting

### Problem: Changes Not Showing
**Solution:**
1. Clear browser cache (Ctrl+F5 or Cmd+Shift+R)
2. Check if both servers are running
3. Run in terminal:
```bash
php artisan view:clear
npm run dev
```

### Problem: Page Shows Error
**Solution:**
1. Check terminal for error messages
2. Common fix:
```bash
php artisan config:clear
php artisan view:clear
```

### Problem: Images Not Loading
**Solution:**
1. Check image is in `public/assets/` folder
2. Check filename spelling in code matches exactly
3. Check image file isn't corrupted

### Problem: Bengali Text Not Showing
**Solution:**
1. Ensure text has `font-bengali` class
2. Check browser supports Bengali fonts
3. Clear browser cache

### Problem: Colors Not Updating
**Solution:**
1. Save `tailwind.config.js` file
2. Restart npm dev server:
```bash
# Stop with Ctrl+C, then:
npm run dev
```

### Problem: Server Won't Start
**Solution:**
1. Check port isn't already in use
2. Try different port:
```bash
php artisan serve --port=8001
```

### Problem: Form Not Working
**Solution:**
1. Check database connection
2. Run migrations:
```bash
php artisan migrate
```

---

## 📚 Useful Resources

### Learning Resources:
- **Tailwind CSS Classes**: https://tailwindcss.com/docs
- **Laravel Blade Templates**: https://laravel.com/docs/blade
- **VS Code Basic Usage**: https://code.visualstudio.com/docs/getstarted/userinterface

### Color Picker Tools:
- **Coolors.co**: https://coolors.co
- **Adobe Color**: https://color.adobe.com

### Image Tools:
- **TinyPNG**: https://tinypng.com (compress images)
- **Canva**: https://canva.com (create graphics)

### Bengali Fonts:
- **Google Fonts Bengali**: https://fonts.google.com/?subset=bengali

---

## 🎯 Quick Reference Card

### File Shortcuts:
- **Main page**: `resources/views/welcome.blade.php`
- **Hero section**: `resources/views/components/hero-section.blade.php`
- **Pricing**: `resources/views/components/pricing-section.blade.php`
- **Colors**: `tailwind.config.js`
- **Images**: `public/assets/`

### Common Classes:
- **Text size**: `text-sm`, `text-lg`, `text-xl`, `text-2xl`
- **Colors**: `text-red-500`, `bg-blue-500`, `border-green-500`
- **Spacing**: `p-4` (padding), `m-4` (margin), `mb-6` (margin-bottom)
- **Font**: `font-bengali`, `font-bold`, `font-semibold`

### Terminal Commands:
```bash
# Start servers
php artisan serve --host=0.0.0.0 --port=8000
npm run dev

# Clear cache
php artisan view:clear
php artisan config:clear

# Build for production
npm run build
```

---

**🎉 Congratulations!** You now have a comprehensive guide to customize your Bonobhumi landing page. Start with small changes and gradually work up to bigger modifications. Remember to always backup your files before making major changes!

**Need help?** Keep this guide handy and refer to the specific sections for each type of change you want to make.