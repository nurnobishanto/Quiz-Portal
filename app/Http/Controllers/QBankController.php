<?php

namespace App\Http\Controllers;

use App\Models\ExamCategory;
use App\Models\Quiz;
use App\Models\Subject;
use Artesaos\SEOTools\Facades\SEOTools;
use Carbon\Carbon;
use Illuminate\Http\Request;

class QBankController extends Controller
{
    public function subject(){
        $subjects = Subject::all();
        SEOTools::setTitle('Questions Bank - '.setting('site.title'));
        SEOTools::setDescription(setting('site.description'));
        return view('std_portal.q_bank.subject',compact('subjects'));
    }
    public function category($slug){
        $subject = Subject::where('slug',$slug)->first();
        if ($subject){
            SEOTools::setTitle($subject->name.' - '.setting('site.title'));
            SEOTools::setDescription(setting('site.description'));
            $categories = $subject->exam_categories;
            return view('std_portal.q_bank.category',compact(['subject','categories']));
        }else{
            abort(404);
        }

    }
    public function quiz($slug){
        $category = ExamCategory::where('slug',$slug)->first();
        $date = Carbon::now();
        if ($category){
            SEOTools::setTitle($category->name.' - '.setting('site.title'));
            SEOTools::setDescription(setting('site.description'));
            $quizzes = $category->quizzes;
            return view('std_portal.q_bank.quiz',compact(['quizzes','category','date']));
        }else{
            abort(404);
        }
    }
    public function answer($id){
        $quiz = Quiz::where('id',$id)->first();

        if ($quiz){
            SEOTools::setTitle($quiz->name.' - '.setting('site.title'));
            SEOTools::setDescription(setting('site.description'));
            return view('std_portal.q_bank.answer',compact('quiz',));
        }
        else{
            abort(404);
        }
    }
}
