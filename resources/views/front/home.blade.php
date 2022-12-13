@extends('layouts.front')
@section('content')
    <!--Start First Section-->
    @if(setting('site.home.1.title') || setting('site.home.1.content'))
    <section class="hero-section hero-bg-bg1 bg-gradient1 dark-bg1">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 v-center">
                        <div class="header-heading">
                            <h1 class="wow fadeInUp" data-wow-delay=".2s">{{setting('site.home.1.title')}}</h1>
                            <p class="wow fadeInUp" data-wow-delay=".4s">{{setting('site.home.1.content')}}</p>
                            @if(setting('site.home.1.url'))
                            <a href="{{setting('site.home.1.url')}}" class="btn-main bg-btn lnk wow fadeInUp" data-wow-delay=".6s">
                               @if(setting('site.home.1.button'))
                                {{setting('site.home.1.button')}}
                                @else
                                   View More
                                @endif
                                <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span>
                            </a>
                            @endif
                        </div>
                    </div>
                    @if(setting('site.home.1.image'))
                    <div class="col-lg-6 v-center">
                        <div class="single-image wow fadeIn" data-wow-delay=".5s">
                            <img src="{{asset('storage/')."/".setting('site.home.1.image')}}" alt="{{setting('site.home.1.title')}}" class="img-fluid"/>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    @endif
    <!--End First Section-->
    <!--Start Second Section-->
    @if(setting('site.home.2.title') || setting('site.home.2.content'))
    <section class="about-agency pad-tb">
        <div class="container">
            <div class="row">
                @if(setting('site.home.2.image'))
                <div class="col-lg-6 v-center">
                    <div class="image-block">
                        <img src="{{asset('storage/')."/".setting('site.home.2.image')}}" alt="{{setting('site.home.2.title')}}" class="img-fluid no-shadow"/>
                    </div>
                </div>
                @endif
                <div class="col-lg-6">
                    <div class="common-heading text-l">
                        <h2>{{setting('site.home.2.title')}}</h2>
                        <p>{{setting('site.home.2.content')}}</p>
                        @if(setting('site.home.2.url'))
                        <a href="{{setting('site.home.2.url')}}" class="btn-main bg-btn lnk mt30">
                            @if(setting('site.home.2.button'))
                                {{setting('site.home.2.button')}}
                            @else
                                View More
                            @endif
                            <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!--End Second Section-->
    <!--Start Third Section-->
    @if(setting('site.home.3.title') || setting('site.home.3.content'))
    <section class="hero-section hero-bg-bg1 bg-gradient1 dark-bg1">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 v-center">
                        <div class="header-heading">
                            <h1 class="wow fadeInUp" data-wow-delay=".2s">{{setting('site.home.3.title')}}</h1>
                            <p class="wow fadeInUp" data-wow-delay=".4s">{{setting('site.home.3.content')}}</p>
                            @if(setting('site.home.3.url'))
                                <a href="{{setting('site.home.3.url')}}" class="btn-main bg-btn lnk wow fadeInUp" data-wow-delay=".6s">
                                    @if(setting('site.home.3.button'))
                                        {{setting('site.home.3.button')}}
                                    @else
                                        View More
                                    @endif
                                    <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span>
                                </a>
                            @endif
                        </div>
                    </div>
                    @if(setting('site.home.3.image'))
                        <div class="col-lg-6 v-center">
                            <div class="single-image wow fadeIn" data-wow-delay=".5s">
                                <img src="{{asset('storage/')."/".setting('site.home.2.image')}}" alt="{{setting('site.home.3.title')}}" class="img-fluid"/>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    @endif
    <!--End Third Section-->

@endsection
