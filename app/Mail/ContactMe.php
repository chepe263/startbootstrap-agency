<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMe extends Mailable
{
    use Queueable, SerializesModels;
	
	public $name = '';
	public $email = '';
	public $phone = '';
	public $message = '';

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($input)
    {
        $this->name = $input['name'];
        $this->email = $input['email'];
        $this->phone = $input['phone'];
        $this->message = $input['message'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
			->from('contactme@zairee.ga')
			->replyTo($this->email)
			->markdown('emails.contactme');
    }
}
