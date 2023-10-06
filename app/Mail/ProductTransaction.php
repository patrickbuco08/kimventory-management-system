<?php

namespace App\Mail;

use App\Models\User;
use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProductTransaction extends Mailable
{
    use Queueable, SerializesModels;

    public $buyer;
    public $product;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $buyer, Product $product )
    {
        $this->buyer = $buyer;
        $this->product = $product;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.transaction.product_transaction')
            ->subject('Someone bought a product');
    }
}
