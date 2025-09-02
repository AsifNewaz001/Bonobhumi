<?php

namespace App\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $name = '';
    public $mobile = '';
    public $address = '';
    public $package = 'bundle';
    public $delivery_area = 'dhaka';
    public $total = 0;
    public $showSuccess = false;

    protected $rules = [
        'name' => 'required|min:2|max:50',
        'mobile' => 'required|regex:/^01[3-9][0-9]{8}$/',
        'address' => 'required|min:10|max:200',
        'package' => 'required|in:single,bundle',
        'delivery_area' => 'required|in:dhaka,outside',
    ];

    protected $messages = [
        'name.required' => 'নাম অবশ্যই দিতে হবে',
        'name.min' => 'নাম কমপক্ষে ২ অক্ষরের হতে হবে',
        'mobile.required' => 'মোবাইল নম্বর অবশ্যই দিতে হবে',
        'mobile.regex' => 'সঠিক বাংলাদেশী মোবাইল নম্বর দিন (যেমন: 01712345678)',
        'address.required' => 'ঠিকানা অবশ্যই দিতে হবে',
        'address.min' => 'ঠিকানা কমপক্ষে ১০ অক্ষরের হতে হবে',
        'package.required' => 'প্যাকেজ নির্বাচন করুন',
        'delivery_area.required' => 'ডেলিভারি এলাকা নির্বাচন করুন',
    ];

    public function mount()
    {
        $this->calculateTotal();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
        
        if (in_array($propertyName, ['package', 'delivery_area'])) {
            $this->calculateTotal();
        }
    }

    public function calculateTotal()
    {
        $packagePrice = 0;
        $deliveryCharge = 0;

        // Package prices
        switch ($this->package) {
            case 'single':
                $packagePrice = 870;
                break;
            case 'bundle':
                $packagePrice = 1530;
                break;
        }

        // Delivery charges
        if ($this->package === 'bundle' && $this->delivery_area === 'dhaka') {
            $deliveryCharge = 0; // Free delivery for bundle in Dhaka
        } else {
            switch ($this->delivery_area) {
                case 'dhaka':
                    $deliveryCharge = 100;
                    break;
                case 'outside':
                    $deliveryCharge = 150;
                    break;
            }
        }

        $this->total = $packagePrice + $deliveryCharge;
    }

    public function submitOrder()
    {
        $this->validate();

        // Here you would typically:
        // 1. Save order to database
        // 2. Send notification email
        // 3. Send SMS confirmation
        // 4. Integrate with delivery service

        // For demo purposes, just show success message
        $this->showSuccess = true;
        $this->reset(['name', 'mobile', 'address']);
        $this->package = 'bundle';
        $this->delivery_area = 'dhaka';
        $this->calculateTotal();

        // Optionally redirect to thank you page
        // return redirect()->route('thank-you');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}