<?php

namespace App\Http\Controllers;

use App\Events\NewNotification;
use App\Models\NotificationTemplate;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class NotificationController extends Controller
{
    public function index()
    {
        $data['users']     = User::whereNotIn('role', [Role::ADMIN, '0'])->latest()->get();
        $data['templates'] = NotificationTemplate::latest()->get();

        return view('backend.notification.notify.user_list', $data);
    }

    public function send(Request $request)
    {
        try {
            if ($request->user_ids == null) {
                alert()->warning('Please choose a user first');

                return redirect()->back();
            }

            $check_template = $this->check_template($request->template_id, $request->notification_type);
            if ($check_template['error']) {
                alert()->warning($check_template['msg']);

                return redirect()->back();
            }

            $check_configuration = $this->check_configuration($request->notification_type);
            if ($check_configuration['error']) {
                alert()->warning($check_configuration['msg']);

                return redirect()->back();
            }


            $user_ids = json_decode($request->user_ids, true);
            dd($user_ids);

            event(new NewNotification(['user_ids'    => $user_ids, 'notification_type' => $request->notification_type,
                                       'template_id' => $request->template_id
            ]));

            toastr()->success(__('Notification Sent'));

            return redirect()->back();
        } catch (\Exception $exception) {
            Log::error('NotificationController: ' . $exception->getMessage());
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }

    public function check_template($template_id, $notification_type)
    {
        $template = NotificationTemplate::findOrFail($template_id);

        if (empty($template)) {
            $data['msg']   = 'Notification template is empty';
            $data['error'] = true;

            return $data;
        }

        if ($notification_type == NotificationTemplate::NOTIFICATION_TYPE_EMAIL || $notification_type == NotificationTemplate::NOTIFICATION_TYPE_BOTH) {
            if ($template->email_body == null) {
                $data['msg']   = 'There is no Email body for this template';
                $data['error'] = true;

                return $data;
            }
        }

        if ($notification_type == NotificationTemplate::NOTIFICATION_TYPE_SMS || $notification_type == NotificationTemplate::NOTIFICATION_TYPE_BOTH) {
            if ($template->sms_body == null) {
                $data['msg']   = 'There is no SMS body for this template';
                $data['error'] = true;

                return $data;
            }
        }

        $data['error'] = false;

        return $data;
    }

    public function check_configuration($notification_type)
    {
        if ($notification_type == NotificationTemplate::NOTIFICATION_TYPE_EMAIL || $notification_type == NotificationTemplate::NOTIFICATION_TYPE_BOTH) {
            if (env('MAIL_MAILER') == "" || env('MAIL_HOST') == "" || env('MAIL_PORT') == "" || env('MAIL_USERNAME') == "" || env('MAIL_PASSWORD') == "") {
                $data['msg']   = 'Invalid email configuration. Please configure your email first';
                $data['error'] = true;

                return $data;
            }
        }

        if ($notification_type == NotificationTemplate::NOTIFICATION_TYPE_SMS || $notification_type == NotificationTemplate::NOTIFICATION_TYPE_BOTH) {
            if (env('TWILIO_SID') == "" || env('TWILIO_AUTH_TOKEN') == "" || env('TWILIO_NUMBER') == "") {
                $data['msg']   = 'Invalid SMS configuration. Please configure your SMS first';
                $data['error'] = true;

                dd($data);
                return $data;
            }
        }

        $data['error'] = false;

        return $data;
    }

}
