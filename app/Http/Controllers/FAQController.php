<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function index()
    {
        $faqs = FAQ::first();
        return view('backend.join_plus.faqs.edit', compact('faqs'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'section_title' => 'required|string',
            'question.*' => 'required|string',
            'answer.*'  => 'required|string'
        ]);

        try {
            $faq = FAQ::first();

            if ($faq == null) {
                $faq = new FAQ();
            }
            $faq->section_title = $request->section_title;
            $data = [];
            foreach ($request->question as $key => $value) {
                $content['question'] = $value;
                $content['answer']             = $request->answer[$key];
                array_push($data, $content);
            }

            $faq->content = json_encode($data);
            if ($faq->save()) {
                toastr()->success('Successfully Updated.');
                return redirect()->back();
            } else {
                toastr()->error('Failed to Updated.');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            alert()->error('Failed to Update Faqs. Try Again!');
            return redirect()->back();
        }
    }
}
