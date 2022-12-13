@extends('layouts.front')
@section('content')
    <section class="breadcrumb-area banner-1">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 v-center">
                        <div class="bread-inner">
                            <div class="bread-title wow fadeInUp" data-wow-delay=".5s">
                                <h2>{{$quiz->name}}</h2>
                                <p>{{$quiz->description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb Area-->

    <!--Start Portfolio-->
    <section class="portfolio-page pad-tb">
        <div class="container">
            <div class="row upset ovr-bg1 ho-gdnt justify-content-center">
                <div class="col-lg-6 col-sm-8 mt30 wow fadeInUp" data-wow-delay=".2s">
                        <a style="margin: 0px" href="{{route('portal.start',['id'=>$quiz->id])}}">
                            <div class="s-block up-hor ovr-base bg-light">
                                <div class="nn-card-set">
                                    <h4>{{$quiz->name}}</h4>
                                    <p>
                                        <span>Subject : {{$quiz->subject->name}}</span><br>
                                        <span>Duration : {{$quiz->duration}} Min ;
                                        Questions : {{count($quiz->mcqs)}}</span><br>
                                        <span>Positive Mark : {{$quiz->positive_mark}}  ;
                                        Negative Mark : {{$quiz->negative_mark}}</span><br>
                                        <span>Total attempt : {{count($quiz->results)}} Student's</span><br>
                                        <span>Start Time : {{date('D d, M Y H:iA', strtotime($quiz->start))}}</span><br>
                                        <span>End Time : {{date('D d, M Y H:iA', strtotime($quiz->end))}}</span><br>
                                        Type:
                                        @foreach($quiz->types as $i)
                                            {{$i->name}} ,
                                        @endforeach
                                    </p>
                                    <br>
                                    @if($quiz->start< date("Y-m-d h:i:s") && $quiz->end> date("Y-m-d h:i:s") )
                                        <p>Status: Running</p>
                                        <a class="btn btn-warning text-dark d-block" href="{{route('portal.start',['id'=>$quiz->id])}}">Start Quiz <i class="fas fa-chevron-right fa-icon"></i></a>
                                    @elseif($quiz->start > date("Y-m-d h:i:s"))
                                        <p>Status: Upcoming</p>
                                        <a class="btn btn-warning text-dark d-block" >Upcoming <i class="fas fa-chevron-right fa-icon"></i></a>
                                    @else
                                        <p> Status: Previous</p>
                                        <a class="btn btn-warning text-dark d-block" href="{{route('portal.start',['id'=>$quiz->id])}}">Start Quiz <i class="fas fa-chevron-right fa-icon"></i></a>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
            </div>
        </div>
    </section>
    <!--End Portfolio-->

@endsection
