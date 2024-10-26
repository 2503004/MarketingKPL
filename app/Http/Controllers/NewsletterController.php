<?php
namespace App\Http\NewsletterController;
namespace App\Http\Controllers;
use App\Mail\NewsletterEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function sendNewsletter(Request $request)
    {
        // Get the email addresses from the form input
        $emails = $request->input('emails'); 
        // Split multiple emails by commas or spaces (if needed)
        $emailArray = explode(',', $emails);

        // Loop through each email and send the newsletter
        foreach ($emailArray as $email) {
            $subject = 'Our monthly newsletter is here!';
            $message_body = 'We have introduced new features...';
            $cta_link = 'https://karsaz.com.pk/';
            $unsubscribe_link = 'https://karsaz.com.pk/';

            Mail::to(trim($email))->send(new NewsletterEmail($email, $subject, $message_body, $cta_link, $unsubscribe_link));
        }
        return view('emails.successmessage');
    }
}