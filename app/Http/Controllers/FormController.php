<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\CustomNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class FormController extends Controller
{
    //
    public function submit(Request $request)
    {
        $data = $request->only('name', 'email','subject', 'message');

        try {
            Mail::to($data['email'])->send(new CustomNotification($data));
        } catch (\Exception $e) {
            Log::error('Failed to send email: ' . $e->getMessage());
          
        }

        return redirect()->back()->with('success', 'Thank you for your message!');
    }
}
