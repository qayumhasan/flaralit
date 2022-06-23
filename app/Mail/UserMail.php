<?php

namespace App\Mail;

use App\Models\NotificationTemplate;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class UserMail extends Mailable
{
    use Queueable, SerializesModels;

    public $template;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($template)
    {
        $this->template = $template;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        try {
            return $this->subject($this->template['email_subject'])->markdown('backend.email.user_mail', $this->template);
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
        }
    }
}
