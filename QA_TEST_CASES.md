# QA Test Cases - Bonobhumi A2 Ghee Landing Page

## Order Placement Functionality Test Cases

### TC001 - Valid Order Placement
**Objective:** Verify successful order placement with valid data
**Priority:** High
**Prerequisites:** Website loaded, checkout form visible

**Test Steps:**
1. Navigate to checkout section
2. Fill in name: "আহমেদ ইসলাম"
3. Fill in mobile: "01712345678"
4. Fill in address: "১২৩ ধানমন্ডি, ঢাকা-১২০৫"
5. Select delivery area: "ঢাকার ভিতরে"
6. Click "অর্ডার কনফার্ম করুন"

**Expected Results:**
- Form submits successfully
- Success message displays: "অর্ডার সফলভাবে সম্পন্ন হয়েছে!"
- Order saved to database with status 'pending'
- Form fields reset after submission
- Total price calculated correctly

**Test Data:**
- Name: Valid Bengali/English names
- Mobile: Valid Bangladesh mobile numbers (01XXXXXXXXX)
- Address: Complete addresses with area/district
- Delivery Area: Both Dhaka/Outside options

---

### TC002 - Order Placement with Bundle Package
**Objective:** Verify bundle package order with free Dhaka delivery
**Priority:** High

**Test Steps:**
1. Navigate to checkout section
2. Fill valid customer information
3. Verify package is set to "bundle" (default)
4. Select delivery area: "ঢাকার ভিতরে"
5. Verify total shows ৳1530 (no delivery charge)
6. Submit order

**Expected Results:**
- Total: ৳1530
- Delivery charge shows "ফ্রি"
- Order saved with package: 'bundle', delivery_area: 'dhaka', total: 1530

---

### TC003 - Order Placement with Single Package
**Objective:** Verify single package pricing and delivery charges
**Priority:** High

**Test Steps:**
1. Navigate to checkout section
2. Fill valid customer information
3. Modify package to "single" (via code/database)
4. Test both delivery areas:
   - Dhaka: Total = ৳970 (870 + 100)
   - Outside Dhaka: Total = ৳1020 (870 + 150)

**Expected Results:**
- Dhaka delivery: ৳970 total
- Outside delivery: ৳1020 total
- Correct pricing displayed in order summary

---

## Form Validation Test Cases

### TC004 - Name Field Validation
**Objective:** Validate name field requirements
**Priority:** High

**Test Cases:**
| Input | Expected Result |
|-------|----------------|
| Empty | "নাম অবশ্যই দিতে হবে" |
| "আ" | "নাম কমপক্ষে ২ অক্ষরের হতে হবে" |
| 51+ characters | "নাম সর্বোচ্চ ৫০ অক্ষরের হতে হবে" |
| "আহমেদ" | Valid - no error |

---

### TC005 - Mobile Number Validation
**Objective:** Validate mobile number format
**Priority:** High

**Test Cases:**
| Input | Expected Result |
|-------|----------------|
| Empty | "মোবাইল নম্বর অবশ্যই দিতে হবে" |
| "123456789" | "সঠিক বাংলাদেশী মোবাইল নম্বর দিন" |
| "01612345678" | "সঠিক বাংলাদেশী মোবাইল নম্বর দিন" (invalid operator) |
| "017123456789" | "সঠিক বাংলাদেশী মোবাইল নম্বর দিন" (too long) |
| "01712345678" | Valid - no error |
| "01812345678" | Valid - no error |
| "01912345678" | Valid - no error |

---

### TC006 - Address Field Validation
**Objective:** Validate address field requirements
**Priority:** Medium

**Test Cases:**
| Input | Expected Result |
|-------|----------------|
| Empty | "ঠিকানা অবশ্যই দিতে হবে" |
| "ঢাকা" | "ঠিকানা কমপক্ষে ১০ অক্ষরের হতে হবে" |
| 201+ characters | "ঠিকানা সর্বোচ্চ ২০০ অক্ষরের হতে হবে" |
| "১২৩ ধানমন্ডি, ঢাকা" | Valid - no error |

---

### TC007 - Delivery Area Validation
**Objective:** Validate delivery area selection
**Priority:** High

**Test Steps:**
1. Leave delivery area unselected
2. Try to submit form

**Expected Results:**
- Error message: "ডেলিভারি এলাকা নির্বাচন করুন"
- Form does not submit

---

## UI/UX Functionality Test Cases

### TC008 - CTA Button Navigation
**Objective:** Verify CTA buttons redirect to checkout section
**Priority:** High

**Test Steps:**
1. Click "এখনই অর্ডার করুন" buttons in different sections
2. Verify smooth scroll to checkout section

**Expected Results:**
- Page scrolls smoothly to #checkout section
- Checkout form is visible and focused

---

### TC009 - Form Loading States
**Objective:** Verify form shows loading state during submission
**Priority:** Medium

**Test Steps:**
1. Fill valid form data
2. Click submit button
3. Observe button state during processing

**Expected Results:**
- Submit button shows loading spinner
- Button text changes to "অর্ডার প্রসেস হচ্ছে..."
- Button is disabled during processing
- Loading state ends after submission

---

### TC010 - Responsive Design
**Objective:** Verify form works on different screen sizes
**Priority:** Medium

**Test Steps:**
1. Test on mobile devices (320px-768px)
2. Test on tablets (768px-1024px)
3. Test on desktop (1024px+)
4. Verify form layout and functionality

**Expected Results:**
- Form remains usable on all screen sizes
- Text remains readable
- Buttons remain clickable
- Order summary displays correctly

---

### TC011 - FAQ Section Functionality
**Objective:** Verify FAQ expand/collapse functionality
**Priority:** Low

**Test Steps:**
1. Navigate to FAQ section
2. Click on different FAQ questions
3. Verify expand/collapse behavior

**Expected Results:**
- FAQ items expand on click
- Other items collapse when new one opens
- Smooth animation transitions
- Content remains readable

---

## Price Calculation Test Cases

### TC012 - Dynamic Price Updates
**Objective:** Verify price calculations update correctly
**Priority:** High

**Scenarios:**
| Package | Delivery Area | Expected Total |
|---------|---------------|----------------|
| Bundle | Dhaka | ৳1530 (Free delivery) |
| Bundle | Outside | ৳1680 (1530 + 150) |
| Single | Dhaka | ৳970 (870 + 100) |
| Single | Outside | ৳1020 (870 + 150) |

---

## Database Integration Test Cases

### TC013 - Order Data Persistence
**Objective:** Verify orders are saved correctly to database
**Priority:** High

**Test Steps:**
1. Place a valid order
2. Check database for order record
3. Verify all fields are saved correctly

**Expected Database Record:**
```
- name: Submitted name
- mobile: Submitted mobile
- address: Submitted address
- package: 'bundle' (default)
- delivery_area: Selected area
- total: Calculated total
- status: 'pending'
- created_at: Current timestamp
```

---

### TC014 - Order Status Management
**Objective:** Verify order status workflow
**Priority:** Medium

**Test Cases:**
1. New order creates with status 'pending'
2. Status can be updated to 'confirmed', 'processing', 'delivered', 'cancelled'
3. Status transitions are logged with timestamps

---

## Error Handling Test Cases

### TC015 - Database Connection Error
**Objective:** Verify graceful handling of database errors
**Priority:** High

**Test Steps:**
1. Simulate database connection failure
2. Try to submit order
3. Verify error handling

**Expected Results:**
- User sees friendly error message
- Form doesn't break
- Error is logged for debugging

---

### TC016 - Server Error Handling
**Objective:** Verify handling of server-side errors
**Priority:** Medium

**Test Steps:**
1. Submit order with server in maintenance mode
2. Submit with invalid session
3. Test network connectivity issues

**Expected Results:**
- Appropriate error messages shown
- Form remains functional after error
- User can retry submission

---

## Performance Test Cases

### TC017 - Form Submission Performance
**Objective:** Verify form submission completes in reasonable time
**Priority:** Medium

**Acceptance Criteria:**
- Form submission completes within 3 seconds
- Page loads within 2 seconds
- Images load progressively
- No memory leaks in form interactions

---

### TC018 - Concurrent Order Handling
**Objective:** Verify system handles multiple simultaneous orders
**Priority:** Low

**Test Steps:**
1. Simulate multiple users placing orders simultaneously
2. Verify all orders are processed correctly
3. Check for database conflicts or data corruption

---

## Security Test Cases

### TC019 - Input Sanitization
**Objective:** Verify form inputs are properly sanitized
**Priority:** High

**Test Cases:**
- SQL injection attempts in form fields
- XSS script injection attempts
- Special characters handling
- Unicode character support (Bengali text)

---

### TC020 - CSRF Protection
**Objective:** Verify CSRF token validation
**Priority:** High

**Test Steps:**
1. Submit form without valid CSRF token
2. Submit with expired token
3. Verify proper error handling

**Expected Results:**
- Invalid submissions are rejected
- User sees appropriate error message
- Security event is logged

---

## Browser Compatibility Test Cases

### TC021 - Cross-Browser Testing
**Objective:** Verify functionality across different browsers
**Priority:** Medium

**Browsers to Test:**
- Chrome (latest)
- Safari (latest)
- Firefox (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Android Chrome)

**Test Areas:**
- Form submission
- Livewire functionality
- CSS styling
- JavaScript interactions

---

## Regression Test Cases

### TC022 - Full E2E Regression
**Objective:** Comprehensive end-to-end testing
**Priority:** High

**Test Flow:**
1. Load homepage
2. Navigate through all sections
3. Click CTA buttons
4. Fill and submit order form
5. Verify success message
6. Check database entry

**Pass Criteria:**
- All functionality works as expected
- No console errors
- Performance within acceptable limits
- Visual elements display correctly

---

## Test Data Sets

### Valid Test Data
```
Names: আহমেদ ইসলাম, Rafiq Ahmed, মোহাম্মদ হাসান, Sarah Khan
Mobiles: 01712345678, 01812345678, 01912345678, 01612345678
Addresses: 
  - ১২৩ ধানমন্ডি, ঢাকা-১২০৫
  - House 45, Road 12, Gulshan-2, Dhaka
  - গ্রাম: কামারগাঁও, উপজেলা: সাভার, জেলা: ঢাকা
```

### Invalid Test Data
```
Names: "", "আ", [51+ character string]
Mobiles: "", "123", "01512345678", "017123456789"
Addresses: "", "ঢাকা", [201+ character string]
```

---

## Test Environment Requirements

### Development Environment
- PHP 8.1+
- Laravel 10+
- MySQL/SQLite database
- Node.js for Vite
- Browser dev tools for debugging

### Test Tools
- Manual testing via browser
- Database inspection tools
- Network monitoring tools
- Performance profiling tools

---

## Bug Reporting Template

**Bug ID:** BUG-001
**Title:** Brief description of the issue
**Priority:** High/Medium/Low
**Reproducible:** Yes/No
**Steps to Reproduce:**
1. Step one
2. Step two
3. Step three

**Expected Result:** What should happen
**Actual Result:** What actually happens
**Environment:** Browser, OS, device details
**Screenshots/Videos:** Attach if applicable
**Additional Notes:** Any other relevant information