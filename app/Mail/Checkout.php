<?php

namespace App\Mail;

use App\Models\Product;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Checkout extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $carts;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, $carts)
    {
        $this->user = $user;
        $this->carts = $carts;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Thông tin đơn hàng tại Baker's Alley")->view('email.checkout');
    }
}
