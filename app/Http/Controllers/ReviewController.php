<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $data['products'] = Product::whereHas('reviews')->with([
            'reviews' => function ($query) {
                $query->latest()->first();
            }
        ])->withCount([
            'reviews' => function ($query) {
                $query->where('parent_id', null);
            }
        ])->get();

        return view('backend.review.index', $data);
    }

    //List of all reviews for the product
    public function product_review($slug)
    {
        $data['product'] = Product::where('slug', $slug)->first();
        $data['reviews'] = Review::with('user')->where([
            ['product_id', $data['product']->id],
            ['parent_id', null]
        ])->latest()->get();

        return view('backend.review.product_review', $data);
    }

    //reply box for the review
    public function reply($review_id)
    {
        $data['review']  = Review::with('product', 'user')->findOrFail($review_id);
        $data['replies'] = Review::with('user')->where('parent_id', $review_id)->get();

        return view('backend.review.reply', $data);
    }

    public function send_reply(Request $request)
    {
        $request->validate([
            'reply' => 'required | string'
        ]);

        try {
            $review             = new Review();
            $review->user_id    = auth()->user()->id;
            $review->product_id = $request->product_id;
            $review->parent_id  = $request->review_id;
            $review->review     = $request->reply;
            $review->save();

            toastr()->success(__('Reply Successfully Sent'));

            return redirect()->back();
        } catch (\Exception $exception) {
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        try {
            $review = Review::findOrFail($id);
            Review::where('parent_id', $review->id)->delete();
            $review->delete();

            toastr()->success(__('Review deleted successfully'));

            return redirect()->back();
        } catch (\Exception $exception) {
            toastr()->error(__('Something went wrong!'));

            return redirect()->back();
        }
    }
}
