<?php

use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NotificationTemplateController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ConfigurationController;
use App\Http\Controllers\JoinPlusController;
use App\Http\Controllers\CopyGuidelineController;
use App\Http\Controllers\ImageGuidelineController;
use App\Http\Controllers\PricingGuidelineController;
use App\Http\Controllers\RedemptionGuidelineController;

//user
Route::group(['namespace' => \App\Models\Permission::USER_MODULE], function () {
    Route::get('user', [UserController::class, 'index'])->name('user.index');
    Route::get('user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('user/store', [UserController::class, 'store'])->name('user.store');
    Route::get('user/edit/{user}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('user/update/{user}', [UserController::class, 'update'])->name('user.update');
    Route::delete('user/delete/{user}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::get('user/status/{id}', [UserController::class, 'updateStatus'])->name('user.update_status');
    Route::post('user/password/change', [UserController::class, 'changePassword'])->name('user.password.change');
});

//product
Route::group(['namespace' => \App\Models\Permission::PRODUCT_MODULE], function () {
    Route::get('product_category', [ProductCategoryController::class, 'index'])->name('product_category.index');
    Route::get('product_category/create', [
        ProductCategoryController::class, 'create'
    ])->name('product_category.create');
    Route::post('product_category/store', [ProductCategoryController::class, 'store'])->name('product_category.store');
    Route::get('product_category/edit/{id}', [ProductCategoryController::class, 'edit'])->name('product_category.edit');
    Route::put('product_category/update/{id}', [
        ProductCategoryController::class, 'update'
    ])->name('product_category.update');
    Route::delete('product_category/delete/{id}', [
        ProductCategoryController::class, 'destroy'
    ])->name('product_category.destroy');

    Route::get('product_type', [ProductTypeController::class, 'index'])->name('product_type.index');
    Route::get('product_type/create', [ProductTypeController::class, 'create'])->name('product_type.create');
    Route::post('product_type/store', [ProductTypeController::class, 'store'])->name('product_type.store');
    Route::get('product_type/edit/{product_type}', [ProductTypeController::class, 'edit'])->name('product_type.edit');
    Route::put('product_type/update/{product_type}', [
        ProductTypeController::class, 'update'
    ])->name('product_type.update');
    Route::delete('product_type/delete/{product_type}', [
        ProductTypeController::class, 'destroy'
    ])->name('product_type.destroy');

    Route::get('product', [ProductController::class, 'index'])->name('product.index');
    Route::get('product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('product/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('product/update/{product}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('product/delete/{product}', [ProductController::class, 'destroy'])->name('product.destroy');

    Route::get('product/image/edit/{product}', [
        ProductController::class, 'edit_product_image'
    ])->name('product.edit_product_image');
    Route::post('/product/update/gfl_choice', [
        ProductController::class, 'update_gfl_choice'
    ])->name('product.update_gfl_choice');
    Route::post('/product/image/update', [
        ProductController::class, 'update_product_image'
    ])->name('product.update_product_image');
    Route::post('/product/image/delete', [
        ProductController::class, 'delete_product_image'
    ])->name('product.delete_product_image');

    //redemption
    Route::get('/product/redemption/edit/{product}', [
        ProductController::class, 'edit_product_redemption'
    ])->name('product.edit_product_redemption');
    Route::post('/product/redemption/update/{product}', [
        ProductController::class, 'update_product_redemption'
    ])->name('product.update_product_redemption');
    Route::post('/product/redemption/store/{product}', [
        ProductController::class, 'store_product_redemption'
    ])->name('product.store_product_redemption');
});

//review
Route::group(["prefix" => "product/", "namespace" => \App\Models\Permission::PRODUCT_MODULE], function () {
    Route::get('review', [ReviewController::class, 'index'])->name('review.index');
    Route::get('review/list/{slug}', [ReviewController::class, 'product_review'])->name('product.review');
    Route::get('review/reply/{id}', [ReviewController::class, 'reply'])->name('product.review.reply');
    Route::post('review/send-reply', [ReviewController::class, 'send_reply'])->name('product.review.send_reply');
    Route::delete('review/delete/{id}', [ReviewController::class, 'destroy'])->name('product.review.destroy');
});

//question
Route::group(["prefix" => "product/", "namespace" => \App\Models\Permission::QUESTIONS_MODULE], function () {
    Route::get('question', [QuestionController::class, 'index'])->name('question.index');
    Route::get('question/list/{slug}', [QuestionController::class, 'product_question'])->name('product.question');
    Route::get('question/reply/{id}', [QuestionController::class, 'answer'])->name('product.question.answer');
    Route::post('question/send-reply', [
        QuestionController::class, 'send_answer'
    ])->name('product.question.send_answer');
    Route::delete('question/delete/{id}', [QuestionController::class, 'destroy'])->name('product.question.destroy');
});

//role
Route::group(["prefix" => "role", "as" => "role.", "namespace" => \App\Models\Permission::ROLE_MODULE], function () {
    Route::get('/', [RoleController::class, 'index'])->name('index');
    Route::get('/permission/{id}', [RoleController::class, 'permission'])->name('permission');
    Route::put('/permission/update/{id}', [RoleController::class, 'update_permission'])->name('update_permission');
    Route::delete('/delete/{id}', [RoleController::class, 'destroy'])->name('destroy');
});

//notification
Route::group([
    "prefix" => "notification/", "as" => "notification.", "namespace" => \App\Models\Permission::NOTIFICATION_MODULE
], function () {
    Route::get('template', [NotificationTemplateController::class, 'index'])->name('template.index');
    Route::get('template/create', [NotificationTemplateController::class, 'create'])->name('template.create');
    Route::post('template/store', [NotificationTemplateController::class, 'store'])->name('template.store');
    Route::get('template/edit/{id}', [NotificationTemplateController::class, 'edit'])->name('template.edit');
    Route::put('template/update/{id}', [NotificationTemplateController::class, 'update'])->name('template.update');
    Route::delete('template/delete/{id}', [NotificationTemplateController::class, 'destroy'])->name('template.destroy');
    Route::get('user/list', [NotificationController::class, 'index'])->name('user.list.index');
    Route::post('send', [NotificationController::class, 'send'])->name('send');
});

//blog
Route::group(['namespace' => \App\Models\Permission::BLOG_MODULE], function () {
    Route::get('blog_category', [BlogCategoryController::class, 'index'])->name('blog_category.index');
    Route::get('blog_category/create', [BlogCategoryController::class, 'create'])->name('blog_category.create');
    Route::post('blog_category/store', [BlogCategoryController::class, 'store'])->name('blog_category.store');
    Route::get('blog_category/edit/{slug}', [BlogCategoryController::class, 'edit'])->name('blog_category.edit');
    Route::put('blog_category/update/{slug}', [BlogCategoryController::class, 'update'])->name('blog_category.update');
    Route::delete('blog_category/delete/{slug}', [
        BlogCategoryController::class, 'destroy'
    ])->name('blog_category.destroy');

    Route::get('blog', [BlogController::class, 'index'])->name('blog.index');
    Route::get('blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('blog/store', [BlogController::class, 'store'])->name('blog.store');
    Route::get('blog/edit/{slug}', [BlogController::class, 'edit'])->name('blog.edit');
    Route::put('blog/update/{slug}', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('blog/delete/{slug}', [BlogController::class, 'destroy'])->name('blog.destroy');
    Route::get('blog/manage_content/{slug}', [BlogController::class, 'manage_content'])->name('blog.manage_content');
    Route::post('blog/content/store/{slug}', [BlogController::class, 'store_content'])->name('blog.content.store');
    Route::get('blog/content/edit/{contentId}', [BlogController::class, 'edit_content'])->name('blog.content.edit');
    Route::post('blog/content/update', [BlogController::class, 'update_content'])->name('blog.content.update');
    Route::delete('blog/content/delete/{contentId}', [
        BlogController::class, 'delete_content'
    ])->name('blog.content.delete');
    Route::put('blog/content/update_content/{contentId}', [
        BlogController::class, 'update_main_content'
    ])->name('blog.content.update_content');
});

//set & configuration
Route::group(['namespace' => \App\Models\Permission::SETUP_MODULE], function () {
    Route::get('configurations', [ConfigurationController::class, 'edit'])->name('configuration.edit');
    Route::post('configurations/update', [ConfigurationController::class, 'update'])->name('configuration.update');
});

//join plus
Route::group(['namespace' => \App\Models\Permission::PLUS_MODULE], function () {
    Route::get('plus/membership/plan_section/edit', [
        JoinPlusController::class, 'plan_section_edit'
    ])->name('membership.plan_section.edit');

    Route::post('plus/membership/plan_section/update', [
        JoinPlusController::class, 'plan_section_update'
    ])->name('membership.plan_section.update');

    Route::get('plus/join/banner_section/edit', [
        JoinPlusController::class, 'banner_section_edit'
    ])->name('plus.banner_section.edit');

    Route::get('plus/join/join_community_section/edit', [
        JoinPlusController::class, 'community_section_edit'
    ])->name('plus.community_section.edit');
    Route::get('plus/join/favourites_section/edit', [
        JoinPlusController::class, 'favourites_section_edit'
    ])->name('plus.favourites_section.edit');
    Route::post('plus/join/section/update', [JoinPlusController::class, 'section_update'])->name('plus.section.update');
    Route::get('plus/join/get-content', [
        JoinPlusController::class, 'get_content'
    ])->name('plus.banner_section.get_content');
    Route::get('plus/join/content_section/index', [
        JoinPlusController::class, 'content_section_index'
    ])->name('plus.content_section.index');
    Route::get('plus/join/content_section/layout', [
        JoinPlusController::class, 'content_section_create_choose_layout'
    ])->name('plus.content_section.layout');
    Route::post('plus/join/content_section/create', [
        JoinPlusController::class, 'content_section_create'
    ])->name('plus.content_section.create');
    Route::post('plus/join/content_section/store', [
        JoinPlusController::class, 'content_section_store'
    ])->name('plus.content_section.store');
    Route::get('plus/join/content_section/edit/{id}', [
        JoinPlusController::class, 'content_section_edit'
    ])->name('plus.content_section.edit');
    Route::put('plus/join/content_section/update/{id}', [
        JoinPlusController::class, 'content_section_update'
    ])->name('plus.content_section.update');
    Route::delete('plus/join/content_section/destroy/{id}', [
        JoinPlusController::class, 'content_section_destroy'
    ])->name('plus.content_section.destroy');
});

//seller_product
Route::group([
    "prefix" => "seller_product/", "namespace" => \App\Models\Permission::SELLER_PRODUCT_MODULE
], function () {
    Route::get('pending', [ProductController::class, 'pending_seller_products'])->name('seller_product.pending');
    Route::get('accepted', [ProductController::class, 'accepted_seller_products'])->name('seller_product.accepted');
    Route::get('rejected', [ProductController::class, 'rejected_seller_products'])->name('seller_product.rejected');
    Route::get('accept/{unique_id}', [
        ProductController::class, 'accept_seller_product'
    ])->name('seller_product.accept');
    Route::get('reject/{unique_id}', [
        ProductController::class, 'reject_seller_product'
    ])->name('seller_product.reject');
});

//guideline
Route::group([
    "prefix" => "guideline/", "as" => "guideline.", "namespace" => \App\Models\Permission::GUIDELINE_MODULE
], function () {
    Route::group(["prefix" => "copy", "as" => "copy."], function () {
        Route::get('/', [CopyGuidelineController::class, 'index'])->name('index');
        Route::get('/create', [CopyGuidelineController::class, 'create'])->name('create');
        Route::post('/update_banner_section', [
            CopyGuidelineController::class, 'update_banner_section'
        ])->name('update_banner_section');
        Route::post('/update_get_started_section', [
            CopyGuidelineController::class, 'update_get_started_section'
        ])->name('update_get_started_section');
        Route::post('/update_basic_section', [
            CopyGuidelineController::class, 'update_basic_section'
        ])->name('update_basic_section');
        Route::post('/update_content_section', [
            CopyGuidelineController::class, 'update_content_section'
        ])->name('update_content_section');
        Route::post('/update_example_section', [
            CopyGuidelineController::class, 'update_example_section'
        ])->name('update_example_section');
    });

    Route::group(["prefix" => "image", "as" => "image."], function () {
        Route::get('/', [ImageGuidelineController::class, 'index'])->name('index');
        Route::get('/create', [ImageGuidelineController::class, 'create'])->name('create');
        Route::post('/update_banner_section', [
            ImageGuidelineController::class, 'update_banner_section'
        ])->name('update_banner_section');
        Route::post('/update_requirement_section', [
            ImageGuidelineController::class, 'update_requirement_section'
        ])->name('update_requirement_section');
        Route::post('/update_advertisement_section', [
            ImageGuidelineController::class, 'update_advertisement_section'
        ])->name('update_advertisement_section');
        Route::get('/instruction/create', [
            ImageGuidelineController::class, 'create_instruction'
        ])->name('create_instruction');
        Route::post('/instruction/store', [
            ImageGuidelineController::class, 'store_instruction'
        ])->name('store_instruction');
        Route::get('/instruction/edit/{id}', [
            ImageGuidelineController::class, 'edit_instruction'
        ])->name('edit_instruction');
        Route::put('/instruction/update/{id}', [
            ImageGuidelineController::class, 'update_instruction'
        ])->name('update_instruction');
        Route::delete('/instruction/delete/{id}', [
            ImageGuidelineController::class, 'delete_instruction'
        ])->name('delete_instruction');
    });
});
