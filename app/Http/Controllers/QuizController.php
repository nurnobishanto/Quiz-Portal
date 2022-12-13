<?php

namespace App\Http\Controllers;

use App\Models\Attempt;
use App\Models\Deposite;
use App\Models\ExamCategory;
use App\Models\Quiz;
use App\Models\Result;
use App\Models\Subject;
use App\Models\Type;
use Artesaos\SEOTools\Facades\SEOTools;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class QuizController extends Controller
{
    public function FrontQuiz(){
        SEOTools::setTitle('Quiz - '.setting('site.title'));
        SEOTools::setDescription(setting('site.description'));
        $subjects = Subject::all();
        return view('front.exam',compact('subjects'));
    }
    public function FrontSubject($slug){
        $subject = Subject::where('slug',$slug)->first();
        if ($subject){
            SEOTools::setTitle($subject->name.' - '.setting('site.title'));
            SEOTools::setDescription(setting('site.description'));
            $exam_categories = $subject->exam_categories;
            return view('front.exam_categories',compact(['exam_categories','subject']));
        }else{
            abort(404);
        }
    }
    public function FrontExamCategory($slug){
        $exam_category = ExamCategory::where('slug',$slug)->first();
        $types =  Type::all();
        if ($exam_category){
            SEOTools::setTitle($exam_category->name.' - '.setting('site.title'));
            SEOTools::setDescription(setting('site.description'));
            $quizzes = $exam_category->quizzes;
            return view('front.quiz',compact(['exam_category','quizzes','types']));
        }else{
            abort(404);
        }
    }
    public function FrontQuizStart($id){
        $quiz = Quiz::where('id',$id)->first();
        if ($quiz){
            SEOTools::setTitle($quiz->name.' - '.setting('site.title'));
            SEOTools::setDescription(setting('site.description'));
            return view('front.start',compact('quiz'));
        }else{
            abort(404);
        }
    }
    public function subject(){
        $subjects = Subject::all();
        SEOTools::setTitle('Quiz - '.setting('site.title'));
        SEOTools::setDescription(setting('site.description'));
        return view('std_portal.subject',compact('subjects'));
    }
    public function category($slug){
        $subject = Subject::where('slug',$slug)->first();
        if ($subject){
            $categories = $subject->exam_categories;
            SEOTools::setTitle($subject->name.' - '.setting('site.title'));
            SEOTools::setDescription(setting('site.description'));
            return view('std_portal.category',compact(['subject','categories']));
        }else{
            abort(404);
        }

    }
    public function quiz($slug){
        $category = ExamCategory::where('slug',$slug)->first();
        if ($category){
            SEOTools::setTitle($category->name.' - '.setting('site.title'));
            SEOTools::setDescription(setting('site.description'));
            $quizzes = $category->quizzes;
            return view('std_portal.quiz',compact(['quizzes','category']));
        }else{
            abort(404);
        }
    }
    public function start($id){
        $quiz = Quiz::where('id',$id)->first();
        if ($quiz){
            SEOTools::setTitle($quiz->name.' - '.setting('site.title'));
            SEOTools::setDescription(setting('site.description'));
            return view('std_portal.start',compact('quiz',));
        }else{
            abort(404);
        }
    }
    public function check_pass(Request $request){
        $url = "portal/quiz/".$request->id."/run/".$request->pass;
        return redirect($url);

    }
    public function run($id){
        $paper = Quiz::where('id', $id)->first();
        if ($paper) {
            if($paper->start > date("Y-m-d h:i:s"))
            {
                return redirect()->back();
            }
            SEOTools::setTitle($paper->name.' - '.setting('site.title'));
            SEOTools::setDescription(setting('site.description'));
            $date = Carbon::now();
            $date = date('Y-m-d', time());
            $time = date('H:i:s', time());
            $currentTime = $date . " " . $time;
            $paperid = "paperid" . $paper->id;

            $result = Result::where('user_id', Auth::user()->id)->where('quiz_id', $paper->id)->get();
            $today_result = Result::where('user_id', Auth::user()->id)->where('quiz_id', $paper->id)->whereDate('created_at', Carbon::today())->get();
            $todayatmpCount = $today_result->count();
            $atmpCount = $result->count();
            $attmDuration = 0;
            $limit = 9999;
            if(date('Y-m-d H:i:s') >= $paper->start && date('Y-m-d H:i:s') <= $paper->end ){
                $limit = $paper->attempt_limit;
            }
            if ($atmpCount < $limit || $todayatmpCount < 3) {
                if (Session::has($paperid)) {
                    $attempt = Session::get($paperid);
                    $start_date = new DateTime($attempt);
                    $since_start = $start_date->diff(new DateTime($currentTime));
                    $seconds = $since_start->days * 24 * 60;
                    $seconds += $since_start->h * 60;
                    $seconds += $since_start->i * 60;
                    $seconds += $since_start->s;
                    $attmDuration = $seconds;

                } else {
                    Session::put($paperid, $currentTime);
                }

                if(date('Y-m-d H:i:s') >= $paper->startdate . ' ' . $paper->starttime){
                    Session::put('success', 'Quiz Started');
                    return view('std_portal.run', compact(['paper', 'attmDuration']));
                }else{
                    Session::put('warning', 'Its Upcoming Quiz');
                    return view('std_portal.start', compact(['paper']));
                }

            } else {
                return view('error.nolimit');
            }

        }else{
            abort(404);
        }
    }
    public function run_with_pass($id,$pass){
        $paper = Quiz::where('id',$id)->where('password',$pass)->first();
        if($paper){
            if($paper->start > date("Y-m-d h:i:s"))
            {
                return redirect()->back();
            }
            SEOTools::setTitle($paper->name.' - '.setting('site.title'));
            SEOTools::setDescription(setting('site.description'));
             $date = Carbon::now();
            $date = date('Y-m-d', time());
            $time = date('H:i:s', time());
            $currentTime = $date . " " . $time;
            $paperid = "paperid" . $paper->id;

            $result = Result::where('user_id', Auth::user()->id)->where('quiz_id', $paper->id)->get();
            $today_result = Result::where('user_id', Auth::user()->id)->where('quiz_id', $paper->id)->whereDate('created_at', Carbon::today())->get();
            $todayatmpCount = $today_result->count();
            $atmpCount = $result->count();
            $attmDuration = 0;
            $limit = 0;
            if(date('Y-m-d H:i:s') >= $paper->start && date('Y-m-d H:i:s') <= $paper->end ){
                $limit = $paper->attempt_limit;
            }
            if ($atmpCount < $limit || $todayatmpCount < 3) {
                if (Session::has($paperid)) {
                    $attempt = Session::get($paperid);
                    $start_date = new DateTime($attempt);
                    $since_start = $start_date->diff(new DateTime($currentTime));
                    $seconds = $since_start->days * 24 * 60;
                    $seconds += $since_start->h * 60;
                    $seconds += $since_start->i * 60;
                    $seconds += $since_start->s;
                    $attmDuration = $seconds;

                } else {
                    Session::put($paperid, $currentTime);
                }

                if(date('Y-m-d H:i:s') >= $paper->startdate . ' ' . $paper->starttime){
                    Session::put('success', 'Quiz Started');
                    return view('std_portal.run', compact(['paper', 'attmDuration']));
                }else{
                    Session::put('warning', 'Its Upcoming Quiz');
                    return view('std_portal.start', compact(['paper']));
                }

            } else {
                return view('error.nolimit');
            }

        }
        else{
            abort(404);
        }
    }
    public function checking(Request $request)
    {

        $paperid = "paperid" . $request->paperid;
        $id = $request->paperid;
        $paper = Quiz::where('id', $id)->first();
        if ($paper){
            SEOTools::setTitle($paper->name.' - '.setting('site.title'));
            SEOTools::setDescription(setting('site.description'));
            if (Session::has($paperid)) {
                $attempt = Session::get($paperid);
                Session::forget($paperid);
            } else {
                $result = Result::where('user_id', Auth::user()->id)->where('quiz_id', $request->paperid)->orderBy('mark', 'DESC')->orderBy('time', 'ASC')->orderBy('created_at', 'ASC')->first();
                return view('std_portal.result', compact('result'));
            }

            $date = Carbon::now();
            $date = date('Y-m-d', time());
            $time = date('H:i:s', time());
            $currentTime = $date . " " . $time;

            $start_date = new DateTime($attempt);
            $since_start = $start_date->diff(new DateTime($currentTime));

            $seconds = $since_start->days * 24 * 60;
            $seconds += $since_start->h * 60;
            $seconds += $since_start->i * 60;
            $seconds += $since_start->s;



            $mark = 0.0;
            $pm = $request->pmark;
            $nm = $request->nmark;
            $notans = 0;
            $wrongans = 0;
            $correctans = 0;

            for ($c = 1; $c <= $request->total; $c++) {
                $ca = "ca" . $c;
                $sop = "op" . $c;
                if ($request->$sop == $request->$ca) {
                    $mark = $mark + $pm;
                    $correctans = $correctans + 1;
                } elseif ($request->$sop == "none") {
                    $notans = $notans + 1;
                } else {
                    $mark = $mark - $nm;
                    $wrongans = $wrongans + 1;
                }

            }

            $result = new Result;
            $result->quiz_id = $request->paperid;
            $result->user_id = Auth::user()->id;
            $result->mark = $mark;
            $result->ca = $correctans;
            $result->na = $notans;
            $result->wa = $wrongans;
            $result->time = $seconds;
            $result->save();


            $deposit =  new Deposite();
            $deposit->user_id =Auth::user()->id;
            $deposit->amount =$mark/100;
            $deposit->method_id = 1;
            $deposit->trid = "Automatic";
            $deposit->note = "Take Exam - ".$paper->name;
            $deposit->status = 'approved';
            $deposit->save();

            for ($c = 1; $c <= $request->total; $c++) {
                $ca = "ca" . $c;
                $sop = "op" . $c;
                $mcq_id = "q" . $c;

                $my_attempt = new Attempt();
                $my_attempt->result_id = $result->id;
                $my_attempt->user_id = Auth::user()->id;
                $my_attempt->quiz_id = $request->paperid;
                $my_attempt->mcq_id = $request->$mcq_id;
                $my_attempt->attempt = $request->$sop;
                $my_attempt->save();

            }
            $result = Result::where('id',$result->id)->first();
            Session::put('success', 'Quiz Submitted, Check your Result');
            return view('std_portal.result', compact('result'));
        }else{
            abort(404);
        }

    }
}
