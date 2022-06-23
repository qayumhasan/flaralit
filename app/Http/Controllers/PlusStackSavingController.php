<?php

namespace App\Http\Controllers;

use App\Models\PlusStackSaving;
use Illuminate\Http\Request;

class PlusStackSavingController extends Controller
{
    public function index()
    {
        $stack = PlusStackSaving::first();
        return view('backend.join_plus.stack_saving.edit', compact('stack'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'section_title' => 'required|string',
            'first_price' => 'required|numeric',
            'first_title' => 'required|string',
            'first_about' => 'required|string',

            'second_price' => 'required|numeric',
            'second_title' => 'required|string',
            'second_about' => 'required|string',

            'third_price' => 'required|numeric',
            'third_title' => 'required|string',
            'third_about' => 'required|string',
        ]);
        try {

            $stack = PlusStackSaving::first();
            if ($stack == null) {
                $stack = new PlusStackSaving();
            }
            $stack->section_title = $request->section_title;
            $stack->content = json_encode($request->except(['_token', 'section_title']));
            if ($stack->save()) {
                toastr()->success('Stack Update Successfully');
                return redirect()->back();
            } else {
                toastr()->error('Faild To update');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            //throw $th;
            alert()->error($th->getMessage());
            // alert()->error('Something Wrong Try Again!');
            return redirect()->back();
        }
    }
}
