@extends('layouts.front')
@section('content')
    <!--Breadcrumb Area-->
    <section class="breadcrumb-area banner-1">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 v-center">
                        <div class="bread-inner">
                            <div class="bread-menu">
                                <ul>
                                    <li><a href="{{route('front')}}">Home</a></li>
                                    <li><a href="{{route('privacy')}}">Privacy Policy</a></li>
                                </ul>
                            </div>
                            <div class="bread-title">
                                <h2>Privacy Policy</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb Area-->
    <!--Start Blog Grid-->
    <section class="blog-page pad-tb pt40">
        <div class="container">
            <div class="blog-content">
                {!! setting('site.privacy') !!}
            </div>

        </div>
    </section>
    <!--End Blog Grid-->
@endsection
