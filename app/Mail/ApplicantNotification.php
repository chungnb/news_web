<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Str;

class ApplicantNotification extends Mailable
{
    use Queueable, SerializesModels;
    public $applicant;
    protected $pdfPath;

    /**
     * Create a new message instance.
     */
    public function __construct($applicant, $pdfPath)
    {
        //
        $this->applicant = $applicant;

        $this->pdfPath = $pdfPath;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'DUC TIN GROUP TUYEN DUNG',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.applicant_email',
            with: ['data' => $this->applicant]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        $slug = Str::slug($this->applicant['full_name'], '-');

        return [
            Attachment::fromPath($this->pdfPath)
            ->as('cv_' . $slug .'.pdf')
            ->withMime('application/pdf'),
        ];
        
    }
}
