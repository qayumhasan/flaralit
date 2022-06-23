<?php

//payment form

use App\Http\Controllers\FAQController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\HowItWorkController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PlusStackSavingController;
use App\Http\Controllers\TestimonialController;
use App\Models\Guide;

Route::group(["prefix" => "dashboard", "as" => "admin.", "middleware" => ['auth', 'isAuthorized']], function () {

    Route::group(['namespace' => \App\Models\Permission::PLUS_MODULE], function () {
        Route::get('plus/stack/index', [PlusStackSavingController::class, 'index'])->name('plus.stack.index');
        Route::post('plus/stack/update', [PlusStackSavingController::class, 'update'])->name('plus.stack.update');

        Route::get('plus/faq/index', [FAQController::class, 'index'])->name('plus.faq.index');
        Route::post('plus/faq/update', [FAQController::class, 'update'])->name('plus.faq.update');


        Route::get('testimonial/index', [TestimonialController::class, 'index'])->name('testimonial.index');
        Route::get('testimonial/create', [TestimonialController::class, 'create'])->name('testimonial.create');
        Route::post('testimonial/store', [TestimonialController::class, 'store'])->name('testimonial.store');
        Route::get('testimonial/edit/{id}', [TestimonialController::class, 'edit'])->name('testimonial.edit');
        Route::put('testimonial/update/{id}', [TestimonialController::class, 'update'])->name('testimonial.update');
        Route::delete('testimonial/delete/{id}', [TestimonialController::class, 'destroy'])->name('testimonial.destroy');
    });
    //guideline
    Route::group(["prefix" => "guideline/", "as" => "guideline.", "namespace" => \App\Models\Permission::GUIDELINE_MODULE], function () {
        Route::get('how-it-works/index', [HowItWorkController::class, 'index'])->name('how_it_work.index');
        Route::get('how-it-works/create/{id}', [HowItWorkController::class, 'create'])->name('how_it_work.create');
        Route::post('how-it-works/update', [HowItWorkController::class, 'store'])->name('how_it_work.store');


        Route::get('guide/index', [GuideController::class, 'index'])->name('guide.index');
        Route::get('guide/create/{id}', [GuideController::class, 'create'])->name('guide.create');
        Route::post('guide/update', [GuideController::class, 'store'])->name('guide.store');
    });
});
