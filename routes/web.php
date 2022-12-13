<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\PortalController;
use App\Http\Controllers\QBankController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\SitemapController;
use App\Models\Method;
use http\Client\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
require __DIR__.'/auth.php';

Route::get('/method/{id}',[FrontController::class,'pmethod']);
Route::get('/district/{id}',[FrontController::class,'upazilas']);
Route::get('/upazila/{id}',[FrontController::class,'post_offices']);
Route::get('/go-back',[FrontController::class,'go_back'])->name('go_back');
Route::get('/add-post-office',[FrontController::class,'add_post_office'])->name('add_post_office');
Route::post('/store-post-office',[FrontController::class,'store_post_office'])->name('store_post_office');
Route::get('sitemap.xml',[SitemapController::class,'index']);
Route::prefix('portal')->middleware(['auth'])->group( function (){
    //Dashboard
    Route::get('/',[PortalController::class,'index'])->name('portal');

    //Profile
    Route::get('/profile',[PortalController::class,'profile'])->name('profile');
    Route::post('/profile/update-info',[PortalController::class,'info_update'])->name('profile.info_update');
    Route::post('/profile/update-password',[PortalController::class,'password_update'])->name('profile.password_update');
    Route::post('/profile/update-photo',[PortalController::class,'photo_update'])->name('profile.photo_update');


    //Quiz
    Route::get('/quiz',[QuizController::class,'subject'])->name('portal.subject');
    Route::get('/quiz/{slug}',[QuizController::class,'category'])->name('portal.category');
    Route::get('/quiz/category/{slug}',[QuizController::class,'quiz'])->name('portal.quiz');
    Route::get('/quiz/{id}/start',[QuizController::class,'start'])->name('portal.start');
    Route::get('/quiz/{id}/run',[QuizController::class,'run'])->name('portal.run');
    Route::get('/quiz/{id}/run/{pass}',[QuizController::class,'run_with_pass'])->name('portal.run_with_pass');
    Route::post('/check-pass', [QuizController::class, 'check_pass'])->name('pass_check');
    Route::post('/check-test', [QuizController::class, 'checking'])->name('checking');

    //Attempt
    Route::get('/attempt',[PortalController::class,'attempt'])->name('portal.attempt');

    //Result
    Route::get('/result',[PortalController::class,'result'])->name('portal.result');
    Route::get('/result/{id}',[PortalController::class,'single_result'])->name('portal.single_result');

    //Questions Bank
    Route::get('/q-bank',[QBankController::class,'subject'])->name('portal.q_bank.subject');
    Route::get('/q-bank/{slug}',[QBankController::class,'category'])->name('portal.q_bank.category');
    Route::get('/q-bank/category/{slug}',[QBankController::class,'quiz'])->name('portal.q_bank.quiz');
    Route::get('/q-bank/{id}/answer',[QBankController::class,'answer'])->name('portal.q_bank.ans');

    //Transaction
    Route::get('/transaction',[PortalController::class,'transaction'])->name('portal.transaction');
    Route::get('/withdraw',[PortalController::class,'withdraw'])->name('portal.withdraw');
    Route::post('/withdraw-req',[PortalController::class,'withdraw_req'])->name('portal.withdraw_req');
    Route::get('/deposit',[PortalController::class,'deposit'])->name('portal.deposit');
    Route::post('/deposit-req',[PortalController::class,'deposit_req'])->name('portal.deposit_req');
    Route::get('/rank/{id}',[PortalController::class,'rank'])->name('portal.rank');


});
Route::prefix('pdf')->middleware(['auth'])->group( function (){
    Route::get('/attempt/{id}',[PDFController::class,'attempt'])->name('download.attempt');
    Route::get('/quiz/{id}',[PDFController::class,'quiz'])->name('download.quiz');
    Route::get('/answer/{id}',[PDFController::class,'answer'])->name('download.answer');
    Route::get('/card/{id}',[PDFController::class,'card'])->name('download.card');
    Route::get('/rank/{id}',[PDFController::class,'rank'])->name('download.rank');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/' ,[FrontController::class,'index'])->name('front');
Route::get('/about' ,[FrontController::class,'about'])->name('about');
Route::get('/privacy' ,[FrontController::class,'privacy'])->name('privacy');
Route::get('/terms' ,[FrontController::class,'terms'])->name('terms');
Route::get('/quiz' ,[QuizController::class,'FrontQuiz'])->name('front.quiz');
Route::get('/subject/{slug}' ,[QuizController::class,'FrontSubject'])->name('front.subject');
Route::get('/quiz-category/{slug}' ,[QuizController::class,'FrontExamCategory'])->name('front.quiz.category');
Route::get('/quiz/{id}/start' ,[QuizController::class,'FrontQuizStart'])->name('front.quiz.start');
Route::get('/contact' ,[ContactController::class,'index'])->name('contact');
Route::post('/contact-store', [ContactController::class, 'storeContactForm'])->name('contact.store');
Route::get('/blog' ,[BlogController::class,'index'])->name('blog');
Route::get('/category/{slug}' ,[BlogController::class,'category'])->name('blog.category');
Route::get('/author/{id}' ,[BlogController::class,'author'])->name('blog.author');
Route::post('/comment' ,[CommentController::class,'index'])->name('blog.comment');


Route::get('/{slug}' ,[BlogController::class,'post'])->name('post');

