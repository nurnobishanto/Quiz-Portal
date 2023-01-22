@extends('layouts.student_portal')
@section('content')
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Attempt this {{$quiz->name}} Quiz
                        </h2>
                        <a href="" class="ml-auto flex items-center text-primary"> <i data-lucide="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
                    </div>
                    <div>
                        @if(Session::has('success'))
                            <div class="alert-outline-success"> {{ Session::get('success') }}</div>
                            @php
                                Session::forget('success');
                            @endphp
                        @elseif(Session::has('error'))
                            <div class="alert-outline-danger"> {{ Session::get('error') }}</div>
                            @php
                                Session::forget('error');
                            @endphp
                        @elseif(Session::has('info'))
                            <div class="alert-outline-secondary"> {{ Session::get('info') }}</div>
                            @php
                                Session::forget('info');
                            @endphp
                        @elseif(Session::has('warning'))
                            <div class="alert-outline-warning"> {{ Session::get('warning') }}</div>
                            @php
                                Session::forget('warning');
                            @endphp


                        @endif
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">

                            <div class="col-span-12 sm:col-span-12 xl:col-span-6 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5 text-center">
                                        <div class="text-3xl font-medium leading-8 ">
                                        </div>
                                        <p class="p-2">
                                        <h4>Quiz Name: {{$quiz->name}}</h4>
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
                                            <span>Start Time : {{date('D d, M Y H:iA', strtotime($quiz->start))}}</span><br>
                                            <span>End Time : {{date('D d, M Y H:iA', strtotime($quiz->end))}}</span><br>
                                            <strong>Question Type :</strong>

                                            @foreach($quiz->types as $i)
                                                {{$i->name}},
                                            @endforeach
                                        <br>
                                        @if($quiz->start< date("Y-m-d h:i:s") && $quiz->end> date("Y-m-d h:i:s") )
                                            <p>Status: Running</p>
                                            <p class="p-1">
                                            @if(strlen($quiz->password)>0)
                                                <form action="{{route('pass_check')}}" method="post">
                                                    @csrf
                                                    <input required class="" type="password" placeholder="Password" name="pass">
                                                    <input  type="text" hidden name="id" value="{{$quiz->id}}">
                                                    <input type="submit" value="Attempt" class="btn btn-danger text-light">
                                                </form>

                                            @else
                                                <a href="{{route('portal.run',['id'=>$quiz->id])}}" class="btn btn-danger text-light ">Attempt</a>
                                                @endif
                                                </p>
                                        @elseif($quiz->start> date("Y-m-d h:i:s"))
                                            <p>Status: Upcoming</p>
                                        @else
                                            <p> Status: Previous</p>
                                            <p class="p-1">
                                            @if(strlen($quiz->password)>0)
                                                <form action="{{route('pass_check')}}" method="post">
                                                    @csrf
                                                    <input required class="" type="password" placeholder="Password" name="pass">
                                                    <input  type="text" hidden name="id" value="{{$quiz->id}}">
                                                    <input type="submit" value="Attempt" class="btn btn-danger text-light">
                                                </form>
                                            @else
                                                <a href="{{route('portal.run',['id'=>$quiz->id])}}" class="btn btn-danger text-light ">Attempt</a>
                                                @endif
                                                </p>
                                        @endif
                                    </div>
                                </div>
                            </div>


                    </div>

                </div>
                <!-- END: General Report -->
            </div>
        </div>
    </div>
@endsection
