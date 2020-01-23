<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CarDelete extends Mailable
{
    use Queueable, SerializesModels;

    private $name;
    private $color;
    private $engine;
    private $price;

    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $color, $engine, $price)
    {
        //
        $this -> name = $name;
        $this -> color = $color;
        $this -> engine = $engine;
        $this -> price = $price;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name = $this -> name;
        $color = $this -> color;
        $engine = $this -> engine;
        $price = $this -> price;

        return $this->view('mails.CarDelete', compact('name','color','engine','price'));
    }
}
