<?php

namespace App\Jobs;

use App\Mail\ApplicantNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendApplicantEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    protected $pdfFile;
    protected $applicant;
    public function __construct($applicant, $pdfFile)
    {
        $this->applicant = $applicant;
        $this->pdfFile = $pdfFile;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->applicant['email'] ?? $this->applicant->email)->send(new ApplicantNotification($this->applicant, $this->pdfFile));
    }
}
