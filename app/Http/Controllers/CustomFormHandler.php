<?php

namespace App\Http\Controllers;

use App\Mail\CustomNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Statamic\Forms\Submission;
use Illuminate\Support\Facades\Log;
class CustomFormHandler 
{
    public function handle(Submission $submission)
    {
        $data = $submission->data();

        Log::info("From data " .  $data);
        try {
            Mail::to($data['email'])->send(new CustomNotification($data));
        } catch (\Exception $e) {
            Log::error('Failed to send email: ' . $e->getMessage());
            $submission->set('email_error', 'Failed to send confirmation email. Please try again later.');
        }

        return $submission;
    }

    protected function sendToCRM($data)
    {
        // Custom integration logic with a third-party CRM
    }
}
