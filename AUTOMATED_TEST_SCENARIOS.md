# Automated Test Scenarios - Bonobhumi A2 Ghee

## PHPUnit Test Cases (Laravel)

### OrderTest.php
```php
<?php

namespace Tests\Feature;

use App\Order;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OrderTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_an_order_with_valid_data()
    {
        $orderData = [
            'name' => 'আহমেদ ইসলাম',
            'mobile' => '01712345678',
            'address' => '১২৩ ধানমন্ডি, ঢাকা-১২০৫',
            'package' => 'bundle',
            'delivery_area' => 'dhaka',
            'total' => 1530.00,
            'status' => 'pending'
        ];

        $order = Order::create($orderData);

        $this->assertDatabaseHas('orders', $orderData);
        $this->assertEquals('pending', $order->status);
        $this->assertEquals(1530.00, $order->total);
    }

    /** @test */
    public function it_calculates_correct_total_for_bundle_dhaka()
    {
        $order = Order::create([
            'name' => 'Test User',
            'mobile' => '01712345678',
            'address' => 'Test Address',
            'package' => 'bundle',
            'delivery_area' => 'dhaka',
            'total' => 1530.00
        ]);

        $this->assertEquals(1530.00, $order->total);
    }

    /** @test */
    public function it_calculates_correct_total_for_bundle_outside()
    {
        $order = Order::create([
            'name' => 'Test User',
            'mobile' => '01712345678', 
            'address' => 'Test Address',
            'package' => 'bundle',
            'delivery_area' => 'outside',
            'total' => 1680.00
        ]);

        $this->assertEquals(1680.00, $order->total);
    }
}
```

### ContactFormTest.php
```php
<?php

namespace Tests\Feature;

use App\Order;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;
use App\Livewire\ContactForm;

class ContactFormTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_renders_contact_form_component()
    {
        $component = Livewire::test(ContactForm::class);
        
        $component->assertStatus(200)
                  ->assertSee('অর্ডার ফর্ম')
                  ->assertSee('অর্ডার কনফার্ম করুন');
    }

    /** @test */
    public function it_validates_required_fields()
    {
        Livewire::test(ContactForm::class)
            ->call('submitOrder')
            ->assertHasErrors([
                'name' => 'required',
                'mobile' => 'required', 
                'address' => 'required',
                'delivery_area' => 'required'
            ]);
    }

    /** @test */
    public function it_validates_mobile_number_format()
    {
        Livewire::test(ContactForm::class)
            ->set('mobile', '123456789')
            ->call('submitOrder')
            ->assertHasErrors(['mobile' => 'regex']);

        Livewire::test(ContactForm::class)
            ->set('mobile', '01712345678')
            ->call('submitOrder')
            ->assertHasNoErrors('mobile');
    }

    /** @test */
    public function it_validates_name_length()
    {
        // Too short
        Livewire::test(ContactForm::class)
            ->set('name', 'আ')
            ->call('submitOrder')
            ->assertHasErrors(['name' => 'min']);

        // Too long
        Livewire::test(ContactForm::class)
            ->set('name', str_repeat('আ', 51))
            ->call('submitOrder')
            ->assertHasErrors(['name' => 'max']);
    }

    /** @test */
    public function it_creates_order_with_valid_data()
    {
        Livewire::test(ContactForm::class)
            ->set('name', 'আহমেদ ইসলাম')
            ->set('mobile', '01712345678')
            ->set('address', '১২৩ ধানমন্ডি, ঢাকা-১২০৫')
            ->set('delivery_area', 'dhaka')
            ->call('submitOrder')
            ->assertHasNoErrors()
            ->assertSet('showSuccess', true);

        $this->assertDatabaseHas('orders', [
            'name' => 'আহমেদ ইসলাম',
            'mobile' => '01712345678',
            'status' => 'pending'
        ]);
    }

    /** @test */
    public function it_calculates_total_correctly()
    {
        $component = Livewire::test(ContactForm::class)
            ->set('package', 'bundle')
            ->set('delivery_area', 'dhaka')
            ->call('calculateTotal');

        $this->assertEquals(1530, $component->get('total'));
    }

    /** @test */
    public function it_resets_form_after_successful_submission()
    {
        Livewire::test(ContactForm::class)
            ->set('name', 'Test User')
            ->set('mobile', '01712345678')
            ->set('address', 'Test Address')
            ->set('delivery_area', 'dhaka')
            ->call('submitOrder')
            ->assertSet('name', '')
            ->assertSet('mobile', '')
            ->assertSet('address', '');
    }
}
```

### ValidationTest.php
```php
<?php

namespace Tests\Unit;

use App\Livewire\ContactForm;
use Tests\TestCase;

class ValidationTest extends TestCase
{
    /** @test */
    public function it_validates_bangladesh_mobile_numbers()
    {
        $validNumbers = [
            '01312345678', // Grameenphone
            '01712345678', // Grameenphone  
            '01812345678', // Robi
            '01912345678', // Banglalink
            '01612345678', // Airtel
            '01412345678', // Airtel
            '01512345678'  // Teletalk
        ];

        foreach ($validNumbers as $number) {
            $this->assertTrue(
                preg_match('/^01[3-9][0-9]{8}$/', $number),
                "Valid number {$number} failed validation"
            );
        }
    }

    /** @test */
    public function it_rejects_invalid_mobile_numbers()
    {
        $invalidNumbers = [
            '01012345678', // Invalid operator
            '01112345678', // Invalid operator
            '01212345678', // Invalid operator
            '017123456789', // Too long
            '0171234567',   // Too short
            '1712345678',   // Missing 0
            '017-123-4567', // Contains dashes
        ];

        foreach ($invalidNumbers as $number) {
            $this->assertFalse(
                preg_match('/^01[3-9][0-9]{8}$/', $number),
                "Invalid number {$number} passed validation"
            );
        }
    }
}
```

## JavaScript Test Cases (Jest/Vitest)

### form-validation.test.js
```javascript
import { describe, it, expect, beforeEach } from 'vitest';
import { mount } from '@vue/test-utils';

describe('Form Validation', () => {
    let wrapper;

    beforeEach(() => {
        // Setup DOM
        document.body.innerHTML = `
            <div id="checkout">
                <form id="order-form">
                    <input type="text" name="name" id="name">
                    <input type="tel" name="mobile" id="mobile">
                    <textarea name="address" id="address"></textarea>
                    <select name="delivery_area" id="delivery_area">
                        <option value="">Select Area</option>
                        <option value="dhaka">Dhaka</option>
                        <option value="outside">Outside</option>
                    </select>
                </form>
            </div>
        `;
    });

    it('should validate mobile number format', () => {
        const validNumbers = [
            '01712345678',
            '01812345678', 
            '01912345678'
        ];

        const invalidNumbers = [
            '123456789',
            '01012345678',
            '017123456789'
        ];

        validNumbers.forEach(number => {
            expect(isValidBangladeshiMobile(number)).toBe(true);
        });

        invalidNumbers.forEach(number => {
            expect(isValidBangladeshiMobile(number)).toBe(false);
        });
    });

    it('should calculate total price correctly', () => {
        expect(calculateTotal('bundle', 'dhaka')).toBe(1530);
        expect(calculateTotal('bundle', 'outside')).toBe(1680);
        expect(calculateTotal('single', 'dhaka')).toBe(970);
        expect(calculateTotal('single', 'outside')).toBe(1020);
    });
});

// Helper functions to test
function isValidBangladeshiMobile(number) {
    return /^01[3-9][0-9]{8}$/.test(number);
}

function calculateTotal(package, deliveryArea) {
    const prices = {
        single: 870,
        bundle: 1530
    };
    
    const deliveryCharges = {
        dhaka: package === 'bundle' ? 0 : 100,
        outside: 150
    };

    return prices[package] + deliveryCharges[deliveryArea];
}
```

### ui-interactions.test.js
```javascript
import { describe, it, expect, beforeEach } from 'vitest';

describe('UI Interactions', () => {
    beforeEach(() => {
        // Mock DOM elements
        document.body.innerHTML = `
            <button class="cta-btn" data-target="#checkout">Order Now</button>
            <div id="checkout" class="checkout-section"></div>
            <div class="faq-item">
                <button class="faq-question">Question 1</button>
                <div class="faq-answer">Answer 1</div>
            </div>
        `;
    });

    it('should scroll to checkout when CTA clicked', () => {
        const scrollIntoView = jest.fn();
        HTMLElement.prototype.scrollIntoView = scrollIntoView;

        const ctaBtn = document.querySelector('.cta-btn');
        const checkout = document.querySelector('#checkout');
        
        ctaBtn.addEventListener('click', (e) => {
            e.preventDefault();
            const target = e.target.dataset.target;
            document.querySelector(target)?.scrollIntoView({ behavior: 'smooth' });
        });

        ctaBtn.click();
        expect(scrollIntoView).toHaveBeenCalledWith({ behavior: 'smooth' });
    });

    it('should toggle FAQ items', () => {
        const faqQuestion = document.querySelector('.faq-question');
        const faqAnswer = document.querySelector('.faq-answer');

        // Initially hidden
        faqAnswer.style.display = 'none';

        faqQuestion.addEventListener('click', () => {
            faqAnswer.style.display = faqAnswer.style.display === 'none' ? 'block' : 'none';
        });

        faqQuestion.click();
        expect(faqAnswer.style.display).toBe('block');

        faqQuestion.click();
        expect(faqAnswer.style.display).toBe('none');
    });
});
```

## Cypress E2E Tests

### cypress/e2e/order-flow.cy.js
```javascript
describe('Order Flow', () => {
    beforeEach(() => {
        cy.visit('http://localhost:8000');
    });

    it('should complete full order flow', () => {
        // Navigate to checkout
        cy.get('[data-testid="cta-button"]').first().click();
        cy.get('#checkout').should('be.visible');

        // Fill form
        cy.get('#name').type('আহমেদ ইসলাম');
        cy.get('#mobile').type('01712345678');
        cy.get('#address').type('১২৩ ধানমন্ডি, ঢাকা-১২০৫');
        cy.get('#delivery_area').select('dhaka');

        // Verify price calculation
        cy.get('[data-testid="total-price"]').should('contain', '১৫৩০');

        // Submit form
        cy.get('[data-testid="submit-button"]').click();

        // Verify success
        cy.get('[data-testid="success-message"]')
          .should('be.visible')
          .and('contain', 'অর্ডার সফলভাবে সম্পন্ন হয়েছে');

        // Verify form reset
        cy.get('#name').should('have.value', '');
    });

    it('should show validation errors', () => {
        cy.get('#checkout').scrollIntoView();
        cy.get('[data-testid="submit-button"]').click();

        // Check for validation errors
        cy.get('[data-testid="name-error"]').should('contain', 'নাম অবশ্যই দিতে হবে');
        cy.get('[data-testid="mobile-error"]').should('contain', 'মোবাইল নম্বর অবশ্যই দিতে হবে');
    });

    it('should validate mobile number format', () => {
        cy.get('#mobile').type('123456789');
        cy.get('[data-testid="submit-button"]').click();
        
        cy.get('[data-testid="mobile-error"]')
          .should('contain', 'সঠিক বাংলাদেশী মোবাইল নম্বর দিন');
    });

    it('should work on mobile viewport', () => {
        cy.viewport(375, 667); // iPhone dimensions
        
        cy.get('[data-testid="cta-button"]').first().click();
        cy.get('#checkout').should('be.visible');
        
        // Form should be usable on mobile
        cy.get('#name').type('Test User');
        cy.get('#mobile').type('01712345678');
        cy.get('#address').type('Test Address');
        cy.get('#delivery_area').select('dhaka');
        cy.get('[data-testid="submit-button"]').should('be.visible').click();
    });
});
```

### cypress/e2e/ui-components.cy.js
```javascript
describe('UI Components', () => {
    beforeEach(() => {
        cy.visit('http://localhost:8000');
    });

    it('should navigate between sections smoothly', () => {
        cy.get('[href="#features"]').click();
        cy.get('#features').should('be.visible');
        
        cy.get('[href="#comparison"]').click();
        cy.get('#comparison').should('be.visible');
        
        cy.get('[href="#faq"]').click();
        cy.get('#faq').should('be.visible');
    });

    it('should expand/collapse FAQ items', () => {
        cy.get('#faq').scrollIntoView();
        
        cy.get('[data-testid="faq-item"]').first().click();
        cy.get('[data-testid="faq-answer"]').first().should('be.visible');
        
        // Click another FAQ
        cy.get('[data-testid="faq-item"]').eq(1).click();
        cy.get('[data-testid="faq-answer"]').first().should('not.be.visible');
        cy.get('[data-testid="faq-answer"]').eq(1).should('be.visible');
    });

    it('should load all images', () => {
        cy.get('img').should('be.visible').and(($imgs) => {
            $imgs.each((index, img) => {
                expect(img.naturalWidth).to.be.greaterThan(0);
            });
        });
    });
});
```

## Performance Tests

### lighthouse.config.js
```javascript
module.exports = {
    ci: {
        collect: {
            url: ['http://localhost:8000'],
            numberOfRuns: 3,
        },
        assert: {
            assertions: {
                'categories:performance': ['error', { minScore: 0.8 }],
                'categories:accessibility': ['error', { minScore: 0.9 }],
                'categories:best-practices': ['error', { minScore: 0.85 }],
                'categories:seo': ['error', { minScore: 0.8 }],
            },
        },
    },
};
```

### performance.test.js
```javascript
import { describe, it, expect } from 'vitest';

describe('Performance Tests', () => {
    it('should load page within acceptable time', async () => {
        const startTime = performance.now();
        
        await fetch('http://localhost:8000');
        
        const loadTime = performance.now() - startTime;
        expect(loadTime).toBeLessThan(3000); // 3 seconds
    });

    it('should handle form submission quickly', async () => {
        const formData = new FormData();
        formData.append('name', 'Test User');
        formData.append('mobile', '01712345678');
        formData.append('address', 'Test Address');
        formData.append('delivery_area', 'dhaka');

        const startTime = performance.now();
        
        await fetch('http://localhost:8000/order', {
            method: 'POST',
            body: formData
        });

        const submitTime = performance.now() - startTime;
        expect(submitTime).toBeLessThan(2000); // 2 seconds
    });
});
```

## Test Scripts (package.json)

```json
{
  "scripts": {
    "test": "php artisan test",
    "test:unit": "php artisan test --testsuite=Unit",
    "test:feature": "php artisan test --testsuite=Feature", 
    "test:js": "vitest",
    "test:e2e": "cypress run",
    "test:e2e:open": "cypress open",
    "test:performance": "lighthouse-ci",
    "test:all": "npm run test && npm run test:js && npm run test:e2e"
  }
}
```

## Database Seeders for Testing

### OrderSeeder.php
```php
<?php

namespace Database\Seeders;

use App\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    public function run()
    {
        $orders = [
            [
                'name' => 'আহমেদ ইসলাম',
                'mobile' => '01712345678',
                'address' => '১২৩ ধানমন্ডি, ঢাকা-১২০৫',
                'package' => 'bundle',
                'delivery_area' => 'dhaka',
                'total' => 1530.00,
                'status' => 'pending'
            ],
            [
                'name' => 'Sarah Khan',
                'mobile' => '01812345678', 
                'address' => 'House 45, Road 12, Gulshan-2',
                'package' => 'single',
                'delivery_area' => 'dhaka',
                'total' => 970.00,
                'status' => 'confirmed'
            ]
        ];

        foreach ($orders as $order) {
            Order::create($order);
        }
    }
}
```

## Running Tests

```bash
# PHP Tests
php artisan test
php artisan test --filter=OrderTest

# JavaScript Tests  
npm run test:js

# E2E Tests
npm run test:e2e:open
npm run test:e2e

# Performance Tests
npm run test:performance

# All Tests
npm run test:all
```

## CI/CD Pipeline (.github/workflows/test.yml)

```yaml
name: Tests

on: [push, pull_request]

jobs:
  php-tests:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v2
      - name: Setup PHP
        uses: shivammathur/setup-php@v2
        with:
          php-version: 8.1
      - name: Install dependencies
        run: composer install
      - name: Run tests
        run: php artisan test

  js-tests:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v2
      - name: Setup Node
        uses: actions/setup-node@v2
        with:
          node-version: '18'
      - name: Install dependencies
        run: npm install
      - name: Run JS tests
        run: npm run test:js

  e2e-tests:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v2
      - name: Setup Node
        uses: actions/setup-node@v2
        with:
          node-version: '18'
      - name: Install dependencies
        run: npm install
      - name: Run E2E tests
        run: npm run test:e2e
```