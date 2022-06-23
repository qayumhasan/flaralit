<?php

namespace App\Listeners;

use App\Events\NewNotification;
use App\Mail\UserMail;
use App\Models\NotificationTemplate;
use App\Models\User;
use App\Traits\TwilioSMSService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendNotification implements ShouldQueue
{
    use TwilioSMSService;

    /**
     * Create the event listener.
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\NewNotification $event
     *
     * @return void
     */
    public function handle(NewNotification $event)
    {
        try {
            $user_emails = User::whereIn('id', $event->user_ids)->pluck('email')->toArray();
            $template    = NotificationTemplate::where('id', $event->template_id)->first()->toArray();

            if ($event->notification_type == NotificationTemplate::NOTIFICATION_TYPE_EMAIL)
            {
                $this->sendUserMail($user_emails, $template);
            }
            elseif ($event->notification_type == NotificationTemplate::NOTIFICATION_TYPE_SMS)
            {
                foreach ($event->user_ids as $user_id) {
                    $this->sendUserSMS($user_id, $template);
                }
            }
            elseif ($event->notification_type == NotificationTemplate::NOTIFICATION_TYPE_BOTH)
            {
                $this->sendUserMail($user_emails, $template);
                foreach ($event->user_ids as $user_id) {
                    $this->sendUserSMS($user_id, $template);
                }
            }

            return true;
        } catch (\Exception $exception) {
            Log::error('SendNotificationListener: ' . $exception->getMessage());

            return false;
        }
    }

    public function sendUserMail($user_emails, $template)
    {
        Mail::to($user_emails)->send(new UserMail($template));
    }

    public function sendUserSMS($user_id, $template)
    {
        $user = User::findOrFail($user_id);
        $response = $this->sendSMS($user->phone, $template['sms_body']);
    }
}
