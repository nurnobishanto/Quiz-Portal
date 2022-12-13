@extends('layouts.front')
@section('content')

    <!--Start First Section-->
    @if(setting('site.about.1.title') || setting('site.about.1.content'))
        <section class="breadcrumb-area text-l banner-1">
            <div class="text-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 v-center">
                            <div class="bread-inner">
                                <div class="bread-menu">
                                    <ul>
                                        <li><a href="{{route('front')}}">Home</a></li>
                                        <li><a href="{{route('about')}}">About Us</a></li>
                                    </ul>
                                </div>
                                <div class="bread-title">
                                    <h2>{{setting('site.about.1.title')}}</h2>
                                    <p class="pt20">{{setting('site.about.1.content')}}</p>
                                    <a href="{{route('contact')}}" class="btn-main bg-btn lnk mt30">Contact Us <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 v-center">
                            <div class="img-design h-scl-">
                                @if(setting('site.about.1.image'))
                                <div class="imgac "> <img src="{{asset('storage')."/".setting('site.about.1.image')}}" alt="{{setting('site.about.1.title')}}" class="ag-dg1 img-fluid h-scl-base"></div>
                                @endif
                                @if(setting('site.about.1.image2'))
                                <div class="imgac h-scl-base"><img src="{{asset('storage')."/".setting('site.about.1.image2')}}" alt="{{setting('site.about.1.title')}}" class="ag-dg2 img-fluid "></div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!--End First Section-->
    <!--Start Second Section-->
    @if(setting('site.about.2.title') || setting('site.about.2.content'))
        <section class="about-agencys pad-tb block-1">
            <div class="container">
                <div class="row">
                    @if(setting('site.about.2.image'))
                    <div class="col-lg-5 v-center">
                        <div class="image-block upset bg-shape wow fadeIn">
                            <img src="{{asset('storage/')."/".setting('site.about.2.image')}}" alt="{{setting('site.about.2.title')}}" class="img-fluid"/>
                        </div>
                    </div>
                    @endif
                    <div class="col-lg-7">
                        <div class="common-heading text-l">
                            <h2 class="mb0">{{setting('site.about.2.title')}}</h2>
                            <p class="pt20">{{setting('site.about.2.content')}} </p>
                            @if(setting('site.about.3.url'))
                                <a href="{{setting('site.about.2.url')}}" class="btn-main bg-btn3 lnk mt30">
                                    @if(setting('site.about.2.button'))
                                        {{setting('site.about.2.button')}}
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
    @if(setting('site.about.3.title') || setting('site.about.3.content'))
        <section class="about-agency pad-tb hero-bg-bg1 bg-gradient1 dark-bg1 ">
            <div class="text-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 v-center">
                            <div class="header-heading">
                                <h1 class="wow fadeInUp" data-wow-delay=".2s">{{setting('site.about.3.title')}}</h1>
                                <p class="wow fadeInUp" data-wow-delay=".4s">{{setting('site.about.3.content')}}</p>
                                @if(setting('site.about.3.url'))
                                    <a href="{{setting('site.about.3.url')}}" class="btn-main bg-btn lnk wow fadeInUp" data-wow-delay=".6s">
                                        @if(setting('site.about.3.button'))
                                            {{setting('site.about.3.button')}}
                                        @else
                                            View More
                                        @endif
                                        <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span>
                                    </a>
                                @endif
                            </div>
                        </div>
                        @if(setting('site.about.3.image'))
                            <div class="col-lg-6 v-center">
                                <div class="single-image wow fadeIn" data-wow-delay=".5s">
                                    <img src="{{asset('storage/')."/".setting('site.about.3.image')}}" alt="{{setting('site.about.3.title')}}" class="img-fluid"/>
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
