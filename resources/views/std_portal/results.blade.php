@extends('layouts.student_portal')
@section('content')
    <div class="col-span-12 mt-8">
        <div class="intro-y flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                My Results
            </h2>
            <a href="" class="ml-auto flex items-center text-primary"> <i data-lucide="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
        </div>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        @foreach ($result as $r)
            <div class="col-span-12 sm:col-span-12 xl:col-span-6">

                <div class="report-box">
                    <div class="box p-2">
                        <h3>Name : {{ $r->user->name }}</h3>
                        <p>Subject Name: {{ $r->quiz->subject->name }}</p>
                        <p>Exam Name: {{ $r->quiz->name }}</p>
                        <p>
                            <strong> Mark : {{ $r->mark }} / {{ $r->quiz->mcqs->count() * $r->quiz->positive_mark }}</strong>
                        </p>
                        <p>Attempt : {{ $r->ca + $r->wa }} | Correct : {{ $r->ca }} | Avoid : {{ $r->na }} | Wrong :{{ $r->wa }}</p>
                        <div style="font-size: 14px;">Submitted : {{  date('h:i A d M Y', strtotime($r->created_at))}}</div>
                        <div style="font-size: 14px;">Duration : {{ floor($r->time / 60) }} Minutes
                            {{ $r->time % 60 }} Seconds</div>



                        <p class="font-weight-300 text-success" style="font-size: 14px;"><i> (
                                        {{ $r->quiz->postive_mark }}
                                        Mark for Per Correct Answer )</i></p>
                        <p class="font-weight-300 text-danger" style="font-size: 14px;"><i> (
                                        {{ $r->quiz->negative_mark }}
                                        Mark for Per Negative Answer )</i></p>
                        <a class="btn btn-info m-1" href="{{route('portal.single_result',['id'=>$r->id])}}" target="_blank" rel="noopener noreferrer"><i class="ri-download-2-line"></i>Check Your Answer</a>
                    </div>
                </div>


            </div>
        @endforeach
    </div>
@endsection
