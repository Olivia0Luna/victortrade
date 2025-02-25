<?php

namespace App\Mail\Admin;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Personalized extends Mailable
{
    use Queueable, SerializesModels;
    public $intro;
    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($intro, $message)
    {
        $this->intro = $intro;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New message alert from victortrade Admin')
                    ->markdown('email.admin.personalized');
    }
}
