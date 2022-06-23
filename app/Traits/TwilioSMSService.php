<?php

namespace App\Traits;

use Illuminate\Support\Facades\Log;
use Twilio\Rest\Client;

trait TwilioSMSService
{
    public function sendSMS($receiver, $message)
    {
        try {
            $account_sid   = getenv("TWILIO_SID");
            $auth_token    = getenv("TWILIO_AUTH_TOKEN");
            $twilio_number = getenv("TWILIO_NUMBER");
            $client        = new Client($account_sid, $auth_token);
            $response      = $client->messages->create($receiver, ['from' => $twilio_number, 'body' => $message]);

            return $response;
        } catch (\Exception $exception) {
            Log::error('SMS_Sender' . $exception->getMessage());

            return false;
        }
    }
}