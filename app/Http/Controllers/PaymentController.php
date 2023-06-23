<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class PaymentController extends Controller
{
    public function submit_payment_receipt(Payment $payment, Request $request)
    {
        $file = $request->file('payment_receipt');
        $path = time() . '_struk_' . $request->payment->user->name . '_.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/' . $path, file_get_contents($file));
        $payment->update([
            'payment_receipt' => $path
        ]);

        return Redirect::back();
    }
    public function confirmPayment(Payment $payment)
    {
        $payment->update([
            'is_paid' => true
        ]);

        return Redirect::back();
    }
}
