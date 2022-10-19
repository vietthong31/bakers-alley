<?php

namespace App\Http\Controllers;

use App\Mail\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail()
    {
        if (!session()->has('cart')) {
            return redirect('/');
        }
        $user = auth()->user();
        $products = session('cart')->items;
        Mail::to('fake@test.com')->send(new Checkout($user, $products));
    }
}
