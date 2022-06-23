<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $data['products'] = Product::whereHas('questions')->with([
            'questions' => function ($query) {
                $query->latest()->first();
            }
        ])->withCount([
            'questions' => function ($query) {
                $query->where('parent_id', null);
            }
        ])->get();

        return view('backend.question.index', $data);
    }

    //get questions related to the product
    public function product_question($slug)
    {
        $data['product']   = Product::where('slug', $slug)->first();
        $data['questions'] = Question::with('user')->where([
            ['product_id', $data['product']->product_id],
            ['parent_id', null]
        ])->latest()->get();

        return view('backend.question.product_question', $data);
    }

    //get all the answers related to this product
    public function answer($question_id)
    {
        $data['question'] = Question::with('product', 'user')->findOrFail($question_id);
        $data['answers']  = Question::with('user')->where('parent_id', $question_id)->get();

        return view('backend.question.answer', $data);
    }

    //answer a question
    public function send_answer(Request $request)
    {
        $request->validate([
            'answer' => 'required | string'
        ]);

        try {
            $question             = new Question();
            $question->user_id    = auth()->id();
            $question->product_id = $request->product_id;
            $question->parent_id  = $request->question_id;
            $question->question   = $request->answer;
            $question->save();

            toastr()->success(__('Answered Successfully stored'));

            return redirect()->back();
        } catch (\Exception $exception) {
            dd($exception->getMessage());
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        try {
            $question = Question::findOrFail($id);
            Question::where('parent_id', $question->id)->delete();
            $question->delete();

            toastr()->success(__('Question deleted successfully'));

            return redirect()->back();
        } catch (\Exception $exception) {
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }
}
