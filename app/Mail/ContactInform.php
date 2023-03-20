<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactInform extends Mailable
{

    public $contactInfo;

    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct($validated)
    {
        $this->contactInfo = $validated;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('huy.th878@aptechlearning.edu.vn', 'Scratchy Nib'),
            subject: 'Contact Inform',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.contactInform',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }

    public function build()
    {
        return $this->from( ENV('MAIL_FROM_ADDRESS'))
            ->markdown('emails.contactInform');
    }
}
