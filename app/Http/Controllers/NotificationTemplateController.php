<?php

namespace App\Http\Controllers;

use App\Models\NotificationTemplate;
use Illuminate\Http\Request;

class NotificationTemplateController extends Controller
{
    public function index()
    {
        $data['templates'] = NotificationTemplate::latest()->get();

        return view('backend.notification.template.index', $data);
    }

    public function create()
    {
        return view('backend.notification.template.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'         => 'required | string',
            'sms_body'      => 'sometimes | nullable | string',
            'email_subject' => 'sometimes | nullable | string',
            'email_body'    => 'sometimes | nullable | string',
        ]);

        try {
            $template                = new NotificationTemplate();
            $template->title         = $request->title;
            $template->sms_body      = $request->sms_body;
            $template->email_subject = $request->email_subject;
            $template->email_body    = $request->email_body;
            $template->save();

            toastr()->success(__('Notification template created successfully'));

            return redirect()->route('admin.notification.template.index');
        } catch (\Exception $exception) {
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $data['template'] = NotificationTemplate::findOrFail($id);

        return view('backend.notification.template.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'         => 'required | string',
            'sms_body'      => 'sometimes | nullable | string',
            'email_subject' => 'sometimes | nullable | string',
            'email_body'    => 'sometimes | nullable | string',
        ]);

        try {
            $template                = NotificationTemplate::findOrFail($id);
            $template->title         = $request->title;
            $template->sms_body      = $request->sms_body;
            $template->email_subject = $request->email_subject;
            $template->email_body    = $request->email_body;
            $template->save();

            toastr()->success(__('Notification template updated successfully'));

            return redirect()->back();
        } catch (\Exception $exception) {
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        try {
            $template = NotificationTemplate::findOrFail($id);
            $template->delete();

            toastr()->success(__('Template deleted successfully'));

            return redirect()->back();
        } catch (\Exception $exception) {
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }

}
