@extends('layouts.front')
@section('content')
    <section class="breadcrumb-area banner-1">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 v-center">
                        <div class="bread-inner">
                            <div class="bread-title wow fadeInUp" data-wow-delay=".5s">
                                <h2>{{$exam_category->name}}</h2>
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
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="common-heading">
                        <h3 class="mb30">Select a Quiz  for {{$exam_category->name}}</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-left">
                <div class="col v-center">
                    <div class="filters">
                        <ul class="filter-menu">
                            <li data-filter="*" class="is-checked">All</li>
                            <li data-filter=".running" >Running</li>
                            <li data-filter=".upcoming" >Upcoming</li>
                            <li data-filter=".previous" >Previous</li>
                            @foreach($types as $item)
                            <li data-filter=".{{$item->slug}}">{{$item->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row card-list upset ovr-bg1 ho-gdnt">
                <div class="col-lg-4 col-md-6 grid-sizer "></div>
                @foreach($quizzes as $item)
                    <div class="col-lg-4 col-sm-6 single-card-item mt30 wow fadeInUp
                    @foreach($item->types as $i){{$i->slug}} @endforeach
                      @if($item->start< date("Y-m-d h:i:s") && $item->end> date("Y-m-d h:i:s") ) running @elseif($item->start> date("Y-m-d h:i:s")) upcoming @else previous @endif">
                        <a style="margin: 0px" href="{{route('front.quiz.start',['id'=>$item->id])}}">
                            <div class="s-block up-hor ovr-base bg-light">
                                <div class="nn-card-set">
                                    <h5>{{$item->name}}</h5>
                                    <p>
                                        <span>Subject : {{$item->subject->name}}</span><br>
                                        <span>Duration : {{$item->duration}} Min ;
                                        Questions : {{count($item->mcqs)}}</span><br>
                                        <span>Start Time : {{date('D d, M Y H:iA', strtotime($item->start))}}</span><br>
                                        <span>End Time : {{date('D d, M Y H:iA', strtotime($item->end))}}</span><br>
                                        Type:
                                        @foreach($item->types as $i)
                                            {{$i->name}},
                                        @endforeach
                                    </p>
                                    <br>
                                    @if($item->start< date("Y-m-d h:i:s") && $item->end> date("Y-m-d h:i:s") )
                                        <p>Status: Running</p>
                                    @elseif($item->start> date("Y-m-d h:i:s"))
                                        <p>Status: Upcoming</p>
                                    @else
                                        <p> Status: Previous</p>
                                    @endif
                                    <a class="btn btn-warning text-dark" href="{{route('front.quiz.start',['id'=>$item->id])}}">Start Quiz <i class="fas fa-chevron-right fa-icon"></i></a>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--End Portfolio-->

@endsection
