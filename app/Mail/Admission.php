<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Admission extends Mailable
{
    use Queueable, SerializesModels;

    public $registration;

    public $file;

    /**
     * Create a new message instance.
     */
    public function __construct($registration)
    {
        $this->registration = $registration;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Admission Registration',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'registration.print',
            with: [
                'title' => 'Admission 2024-25',
                'date' => date('m/d/Y'),
                'registration' => $this->registration,
                'photo' => public_path('storage/'.$this->registration->photo),
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
            Attachment::fromPath(public_path('storage/'.$this->registration->birth_certificate)),
            Attachment::fromPath(public_path('storage/'.$this->registration->aadhaar)),
            Attachment::fromPath(public_path('storage/'.$this->registration->address_proof)),
            // Attachment::fromPath(asset('public/storage/print/' . $this->file)),
        ];
    }
}
