# Manual Testing Checklist - Bonobhumi A2 Ghee

## Pre-Testing Setup
- [ ] Clear browser cache and cookies
- [ ] Ensure stable internet connection
- [ ] Open browser developer tools (F12)
- [ ] Navigate to: http://localhost:8000

## 🏠 Homepage Testing

### Hero Section
- [ ] Page loads within 3 seconds
- [ ] Hero image displays correctly
- [ ] Bengali text renders properly (Hind Siliguri font)
- [ ] CTA button "এখনই অর্ডার করুন" is visible
- [ ] CTA button redirects to #checkout section
- [ ] Mobile responsive layout works (test at 375px width)

### Navigation
- [ ] All navigation links work
- [ ] Smooth scrolling between sections
- [ ] Logo displays correctly
- [ ] Mobile menu functions properly (if applicable)

## 🌟 Features Section Testing

### Visual Elements  
- [ ] Gradient backgrounds display correctly
- [ ] Product images load properly
- [ ] Text hierarchy is clear
- [ ] CTA buttons are prominent
- [ ] Model image positioning correct on mobile

### Functionality
- [ ] All CTA buttons redirect to checkout
- [ ] Section content is readable on all screen sizes
- [ ] Hover effects work on desktop

## ⚖️ Comparison Section Testing

### Color Scheme Verification
- [ ] Section title is #604D20 color, 48px size
- [ ] Icon backgrounds are #FFFBEB
- [ ] Icons have #D97706 gradient colors
- [ ] Feature titles are #92400E
- [ ] Descriptions are #4B5563

### Content
- [ ] All comparison points are visible
- [ ] Icons display correctly
- [ ] Text is readable and properly aligned

## ❓ FAQ Section Testing

### Background & Layout
- [ ] FAQ background image (bgFAQ.png) displays
- [ ] Background covers full section
- [ ] FAQ title "FAQs" appears in white text
- [ ] Content positioned center-right correctly

### Functionality
- [ ] FAQ items expand/collapse on click
- [ ] Only one FAQ opens at a time
- [ ] Smooth animation transitions
- [ ] Keyboard navigation works (Tab, Enter, Space)
- [ ] Touch interactions work on mobile

## 🛒 Order Form Testing

### Form Display
- [ ] Order form loads in checkout section
- [ ] All form fields are visible
- [ ] Labels are in Bengali and clear
- [ ] Form styling matches design
- [ ] Order summary displays correctly

### Field Testing
**Name Field:**
- [ ] Accepts Bengali characters: "মোহাম্মদ রহিম"
- [ ] Accepts English characters: "Ahmed Khan" 
- [ ] Shows error for empty field
- [ ] Shows error for single character
- [ ] Shows error for 51+ characters
- [ ] No error for valid 2-50 character names

**Mobile Field:**
- [ ] Accepts valid format: "01712345678"
- [ ] Accepts all operators: 013, 014, 015, 016, 017, 018, 019
- [ ] Rejects invalid operators: 012, 011
- [ ] Rejects short numbers: "0171234567"
- [ ] Rejects long numbers: "017123456789"
- [ ] Shows proper error messages in Bengali

**Address Field:**
- [ ] Accepts multi-line addresses
- [ ] Accepts Bengali text: "১২৩ ধানমন্ডি, ঢাকা"
- [ ] Shows error for empty field
- [ ] Shows error for <10 characters
- [ ] Shows error for 201+ characters
- [ ] Proper textarea resizing

**Delivery Area:**
- [ ] Dropdown shows both options
- [ ] "ঢাকার ভিতরে" selectable
- [ ] "ঢাকার বাইরে" selectable  
- [ ] Shows error if not selected
- [ ] Price updates correctly on selection

### Price Calculation Testing
**Bundle Package (Default):**
- [ ] Dhaka delivery: Shows ৳1530 total, "ফ্রি" delivery
- [ ] Outside delivery: Shows ৳1680 total, ৳150 delivery charge

**Single Package:** (Test by modifying code temporarily)
- [ ] Dhaka delivery: Shows ৳970 total, ৳100 delivery charge
- [ ] Outside delivery: Shows ৳1020 total, ৳150 delivery charge

### Form Submission Testing
**Valid Submission:**
- [ ] Fill all fields with valid data
- [ ] Click "অর্ডার কনফার্ম করুন"
- [ ] Loading state shows: "অর্ডার প্রসেস হচ্ছে..."
- [ ] Button is disabled during submission
- [ ] Success message appears: "অর্ডার সফলভাবে সম্পন্ন হয়েছে!"
- [ ] Form fields reset after success
- [ ] No JavaScript errors in console

**Invalid Submission:**
- [ ] Submit with empty name → Shows name error
- [ ] Submit with invalid mobile → Shows mobile error
- [ ] Submit with short address → Shows address error
- [ ] Submit without delivery area → Shows area error
- [ ] Multiple validation errors display simultaneously
- [ ] Form doesn't submit with validation errors

### Error Handling
- [ ] Network error shows appropriate message
- [ ] Server error shows user-friendly message
- [ ] Form remains functional after errors
- [ ] User can correct and resubmit

## 📱 Mobile Responsiveness

### Screen Sizes to Test
- [ ] 320px (iPhone 5)
- [ ] 375px (iPhone X)
- [ ] 414px (iPhone Plus)
- [ ] 768px (iPad Portrait)
- [ ] 1024px (iPad Landscape)

### Mobile-Specific Issues
- [ ] Text remains readable at all sizes
- [ ] Buttons are tap-friendly (44px minimum)
- [ ] Form inputs are properly sized
- [ ] No horizontal scrolling
- [ ] Images scale appropriately

## 🎨 Visual Testing

### Typography
- [ ] Bengali fonts load correctly (Hind Siliguri)
- [ ] Font sizes match specifications:
  - Hero: 42px desktop, 25px mobile
  - Section titles: 48px
  - Form labels: appropriate sizes
- [ ] Text contrast meets accessibility standards

### Colors & Styling
- [ ] Brand colors consistent throughout
- [ ] Gradients render smoothly
- [ ] Hover states work on interactive elements
- [ ] Focus states visible for keyboard navigation

## 🔄 Livewire Functionality

### Real-time Updates
- [ ] Form validation shows/hides without page refresh
- [ ] Price calculation updates instantly
- [ ] Success/error messages appear without reload
- [ ] Loading states work properly

### Network Testing
- [ ] Form works with slow internet connection
- [ ] Handles network interruptions gracefully
- [ ] CSRF token validation works

## 🗄️ Database Testing

### Order Storage (Check via database tools)
- [ ] New order creates record in `orders` table
- [ ] All form fields saved correctly:
  - `name`: Submitted name
  - `mobile`: Submitted mobile number
  - `address`: Full address
  - `package`: 'bundle' (default)
  - `delivery_area`: Selected option
  - `total`: Calculated price
  - `status`: 'pending'
  - `created_at`: Current timestamp

### Data Integrity
- [ ] No duplicate orders on multiple clicks
- [ ] Special characters save properly
- [ ] Bengali text saves without corruption

## 🌐 Browser Testing

### Desktop Browsers
- [ ] Chrome (latest)
- [ ] Firefox (latest) 
- [ ] Safari (latest)
- [ ] Edge (latest)

### Mobile Browsers
- [ ] iOS Safari
- [ ] Android Chrome
- [ ] Samsung Internet

### Cross-Browser Issues to Check
- [ ] CSS styling consistency
- [ ] JavaScript functionality
- [ ] Form submission works
- [ ] Livewire components function

## 🚀 Performance Testing

### Load Times
- [ ] Initial page load < 3 seconds
- [ ] Form submission < 2 seconds
- [ ] Image loading doesn't block content
- [ ] No layout shift during loading

### Resource Usage
- [ ] No JavaScript errors in console
- [ ] No CSS loading issues
- [ ] Reasonable memory usage
- [ ] No memory leaks during form interactions

## ♿ Accessibility Testing

### Keyboard Navigation
- [ ] Can navigate entire form using Tab
- [ ] Enter key submits form
- [ ] Escape closes modals/dropdowns
- [ ] Focus indicators are visible

### Screen Reader Testing
- [ ] Form labels properly associated
- [ ] Error messages announced
- [ ] Success messages announced
- [ ] Proper heading hierarchy

## 🔐 Security Testing

### Input Security
- [ ] SQL injection attempts fail safely
- [ ] XSS attempts are blocked
- [ ] CSRF tokens validate properly
- [ ] Form sanitizes dangerous input

## 📋 Final Checklist

### Before Going Live
- [ ] All test cases pass
- [ ] No critical bugs found
- [ ] Performance meets requirements
- [ ] Mobile experience is smooth
- [ ] Database integration works
- [ ] Error handling is graceful
- [ ] Analytics tracking works (if applicable)

### Documentation
- [ ] Bug reports filed for any issues
- [ ] Test results documented
- [ ] Performance metrics recorded
- [ ] Accessibility audit completed

---

## Quick Test Scenarios

### Happy Path (5 minutes)
1. Load page → Navigate to checkout → Fill valid form → Submit → Verify success

### Error Path (3 minutes)  
1. Submit empty form → Fix errors one by one → Submit successfully

### Mobile Test (5 minutes)
1. Test on mobile device → Check all sections → Submit order → Verify responsive design

### Performance Test (2 minutes)
1. Hard refresh → Time page load → Check for errors → Test form submission speed

---

## Test Data for Quick Testing

```
Valid Test Data:
Name: আহমেদ ইসলাম
Mobile: 01712345678
Address: ১২ৃ ধানমন্ডি, রোড ২৭, ঢাকা-১২০৫
Delivery: ঢাকার ভিতরে

Expected Result: 
Total: ৳1530, Status: Success, Order saved to DB
```