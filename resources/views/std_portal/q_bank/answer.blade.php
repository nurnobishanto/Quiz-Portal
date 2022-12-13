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
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <div class="col-span-12  intro-y">
                            <div class=" zoom-in">
                                <div class="box p-5 text-center">
                                    <div class="text-3xl font-medium leading-8 ">
                                            {{$quiz->name}}
                                    </div>
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
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12  intro-y">

                            <?php
                            $count = 1;
                            $total = $quiz->mcqs->count();
                            $timeMin = $quiz->duration;
                            ?>
                            @foreach($quiz->mcqs as $question)
                                <div style="border-style: solid;border-width: 1px;margin:5px;padding:10px">
                                        <?php $co = $question->ca; ?>
                                    <span style="font-size:20px;">{{ $count }}) {{ $question->name }}</span> <br>
                                    {!! $question->description !!}
                                    @if ($question->image)
                                            <?php
                                            $file = str_replace('\\', '/', $question->image);
                                            //  $imgurl = ENV('APP_URL') . '/' . 'storage/' . $file;
                                            $imgurl = 'storage/' . $file;
                                            $path = $imgurl;
                                            $type = pathinfo($path, PATHINFO_EXTENSION);
                                            $data = file_get_contents($path);
                                            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

                                            ?>
                                        <div>
                                            <img style="max-height: 200px;" src="{{ $base64 }}">
                                        </div>
                                    @endif

                                    <ol style="list-style-type: upper-alpha;" class="m-5">
                                        <li style="font-size:17px;">{{ $question->op1 }}</li>
                                        <li style="font-size:17px;">{{ $question->op2 }}</li>
                                        <li style="font-size:17px;"> {{ $question->op3 }}</li>
                                        <li style="font-size:17px;"> {{ $question->op4 }}</li>
                                    </ol>
                                    <span style="font-size:18px;">Correct Answer : {{ $question->$co }}</span>
                                    <br>
                                    {!! $question->explain !!}

                                    @if ($question->explain_img)
                                            <?php
                                            $file = str_replace('\\', '/', $question->explain_img);
                                            //  $imgurl = ENV('APP_URL') . '/' . 'storage/' . $file;
                                            $imgurl = 'storage/' . $file;
                                            $path = $imgurl;
                                            $type = pathinfo($path, PATHINFO_EXTENSION);
                                            $data = file_get_contents($path);
                                            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

                                            ?>
                                        <div>
                                            <img style="max-height: 200px;" src="{{ $base64 }}">
                                        </div>
                                    @endif



                                </div>
                                    <?php
                                    $count = $count + 1;
                                    ?>
                                @endforeach
                            <p>
                                <a class="btn btn-primary m-2" href="{{route('download.quiz',['id'=>$quiz->id])}}" target="_blank" rel="noopener noreferrer">Download Quiz Paper</a>
                                <a class="btn btn-warning m-2" href="{{route('download.answer',['id'=>$quiz->id])}}" target="_blank" rel="noopener noreferrer">Download Quiz Answer</a>
                            </p>
                        </div>

                    </div>
                </div>
                <!-- END: General Report -->
            </div>
        </div>
    </div>
@endsection
