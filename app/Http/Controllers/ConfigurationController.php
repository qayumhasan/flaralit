<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Configuration;

class ConfigurationController extends Controller
{
    public function edit()
    {
        $data['twilio']   = Configuration::where('type_id', Configuration::TYPE_TWILIO_CONFIGURATION)->first();
        $data['paypal']   = Configuration::where('type_id', Configuration::TYPE_PAYPAL_CONFIGURATION)->first();
        $data['google']   = Configuration::where('type_id', Configuration::TYPE_GOOGLE_CONFIGURATION)->first();
        $data['facebook'] = Configuration::where('type_id', Configuration::TYPE_FACEBOOK_CONFIGURATION)->first();

        return view('backend.configuration.create', $data);
    }

    public function update(Request $request)
    {
        $request->validate([
            'type_id' => 'required',
        ]);
        try {
            $configuration = Configuration::where('type_id', $request->type_id)->first();

            if (empty($configuration)) {
                $configuration = new Configuration();
            }

            $configuration->type_id     = $request->type_id;
            $configuration->credentials = json_encode($request->except(['_token', 'type_id', 'status']));

            if ($request->status == 'on') {
                $configuration->status = true;
            } else {
                $configuration->status = false;
            }
            $configuration->save();

            toastr()->success(__('Seetings successfully updated'));

            return redirect()->back();
        } catch (\Exception $exception) {
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }
}
