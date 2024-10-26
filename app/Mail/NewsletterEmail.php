<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewsletterEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $subject;
    public $message_body;
    public $cta_link;
    public $unsubscribe_link;

    /**
     * Create a new message instance.
     */
    public function __construct($user, $subject, $message_body, $cta_link, $unsubscribe_link)
    {
        $this->user = $user;
        $this->subject = $subject;
        $this->message_body = $message_body;
        $this->cta_link = $cta_link;
        $this->unsubscribe_link = $unsubscribe_link;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->view('emails.newsletter')
                    ->subject($this->subject)
                    ->with([
                        'user' => $this->user,
                        'subject' => $this->subject,
                        'message_body' => $this->message_body,
                        'cta_link' => $this->cta_link,
                        'unsubscribe_link' => $this->unsubscribe_link,
                    ]);
    }
}
