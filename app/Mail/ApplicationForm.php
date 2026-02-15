<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Attachment;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class ApplicationForm extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Application Form',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'frontend.emails.form-contact',
            with: ['data' => $this->data],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        $attachments = [];

    if (!empty($this->data['cv_path']) && Storage::disk('public')->exists($this->data['cv_path'])) {
        $attachments[] = Attachment::fromPath(
            storage_path(path: 'app/public/' . $this->data['cv_path'])
        )->as('CV.pdf');
    }

    if (!empty($this->data['cover_letter_path']) && Storage::disk('public')->exists($this->data['cover_letter_path'])) {
        $attachments[] = Attachment::fromPath(
            storage_path('app/public/' . $this->data['cover_letter_path'])
        )->as('Cover_Letter.pdf');
    }

    return $attachments;
    }
}
