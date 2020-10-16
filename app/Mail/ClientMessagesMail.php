<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ClientMessagesMail extends Mailable
{
    use Queueable, SerializesModels;


    // PROPERTIES
    protected $name;
    protected $email;
    public $subject;
    protected $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $subject, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Client: '.$this->subject)->from($this->email)->markdown('emails.clientmessags')->with(['name' => $this->name, 'message' => $this->message]);
    }
}
