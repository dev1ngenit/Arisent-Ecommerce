<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
                                       // Access the data passed to the mailable
        $order = $this->data;          // The order data passed from the controller
        $carts = $this->data['carts']; // Access the cart items from the data

        return $this->subject('Arisent Ecommerce')
            ->view('mail.order_mail', compact('order', 'carts')); // Pass both order data and carts to the view
    }
}
