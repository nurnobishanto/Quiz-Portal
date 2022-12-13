@extends('layouts.student_portal')
@section('content')
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Select a Quiz  for this {{$category->name}} Subject
                        </h2>
                        <a href="" class="ml-auto flex items-center text-primary"> <i data-lucide="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">

                        @foreach($quizzes as $quiz)
                            @if($date > $quiz->end)
                            <div class="col-span-12 sm:col-span-12 xl:col-span-6 intro-y">
                                <div class="zoom-in">
                                    <div class="box p-5 text-center">
                                        <div class="text-3xl font-medium leading-8 ">
                                            <a href="{{route('portal.q_bank.ans',['id'=>$quiz->id])}}">{{$quiz->name}}</a>
                                        </div>
                                        <p class="p-2">
                                            <p class="p-1">
                                                <strong class="btn btn-info text-dark">Subject : {{$quiz->subject->name}}</strong>
                                            </p>
                                            <p class="p-1">
                                                <span class="btn btn-warning text-dark m-2">Duration : {{$quiz->duration}} Min</span>
                                                <span class="btn btn-warning text-dark m-2">Questions : {{count($quiz->mcqs)}}</span>
                                            </p>

                                            <p class="p-1">
                                                <span class="text-light btn-success btn m-2">Positive Mark : {{$quiz->positive_mark }}</span>
                                                <span class="text-light btn-danger btn m-2">Negative Mark : {{$quiz->negative_mark}}</span>
                                            </p>
                                            <span class="text-success">Start Time : {{$quiz->start}}</span><br>
                                            <span class="text-danger">End Time : {{$quiz->end }}</span><br>
                                            <strong>Question Type :</strong>

                                            @foreach($quiz->types as $i)
                                                {{$i->name}},
                                            @endforeach
                                        <p class="p-1">
                                            <a href="{{route('portal.q_bank.ans',['id'=>$quiz->id])}}" class="btn btn-danger text-light ">Answer Sheet</a>
                                        </p>


                                    </div>
                                </div>
                            </div>
                            @endif

                        @endforeach
                    </div>

                </div>
                <!-- END: General Report -->
            </div>
        </div>
    </div>
@endsection
