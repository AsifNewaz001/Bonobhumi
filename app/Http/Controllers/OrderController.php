<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|min:2|max:50',
            'mobile' => 'required|regex:/^01[3-9][0-9]{8}$/',
            'address' => 'required|string|min:10|max:200',
            'package' => 'required|in:regular,family',
            'quantity' => 'required|integer|min:1|max:99',
            'delivery_area' => 'required|in:inside,outside',
        ], [
            'name.required' => 'নাম অবশ্যই দিতে হবে',
            'name.min' => 'নাম কমপক্ষে ২ অক্ষরের হতে হবে',
            'name.max' => 'নাম সর্বোচ্চ ৫০ অক্ষরের হতে হবে',
            'mobile.required' => 'মোবাইল নম্বর অবশ্যই দিতে হবে',
            'mobile.regex' => 'সঠিক বাংলাদেশী মোবাইল নম্বর দিন (উদাহরণ: 01712345678)',
            'address.required' => 'ঠিকানা অবশ্যই দিতে হবে',
            'address.min' => 'ঠিকানা কমপক্ষে ১০ অক্ষরের হতে হবে',
            'address.max' => 'ঠিকানা সর্বোচ্চ ২০০ অক্ষরের হতে হবে',
            'delivery_area.required' => 'ডেলিভারি এলাকা নির্বাচন করুন',
            'quantity.required' => 'পরিমাণ নির্বাচন করুন',
        ]);

        // Calculate total
        $packagePrice = $validatedData['package'] === 'family' ? 1290 : 690;
        $subtotal = $packagePrice * $validatedData['quantity'];
        $deliveryCharge = $validatedData['delivery_area'] === 'inside' ? 100 : 150;
        $total = $subtotal + $deliveryCharge;

        // Create order
        Order::create([
            'name' => $validatedData['name'],
            'mobile' => $validatedData['mobile'],
            'address' => $validatedData['address'],
            'package' => $validatedData['package'],
            'quantity' => $validatedData['quantity'],
            'delivery_area' => $validatedData['delivery_area'],
            'total' => $total,
            'status' => 'pending'
        ]);

        // Return JSON for AJAX requests
        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'আপনার অর্ডার সফলভাবে সম্পন্ন হয়েছে! আমরা শীঘ্রই আপনার সাথে যোগাযোগ করব।'
            ]);
        }

        return redirect('/#checkout')->with('success', 'আপনার অর্ডার সফলভাবে সম্পন্ন হয়েছে! আমরা শীঘ্রই আপনার সাথে যোগাযোগ করব।');
    }
}