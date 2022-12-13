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
                                    <li><a href="{{route('blog')}}">Blog</a></li>
                                </ul>
                            </div>
                            <div class="bread-title">
                                <h2>{{$title}} Posts</h2>
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

            <div class="row">

                @foreach($posts as $post)
                <div class="col-lg-4 mt60">
                    <div class="single-blog-post- shdo">
                        <div class="single-blog-img-">
                            @if($post->banner)
                                <a href="{{route('post',['slug'=>$post->slug])}}"><img src="{{ $post->banner_url }}" alt="{{ $post->title }}" class="img-fluid"></a>
                            @endif

                            <div class="entry-blog-post dg-bg2">
                                <span class="bypost-"><a href="{{route('blog.category',['slug'=>$post->category->slug])}}"><i class="fas fa-tag"></i> {{$post->category->name}}</a></span>
                                <span class="bypost"><a href="{{route('blog.author',['id'=>$post->author->id])}}"><i class="fas fa-user"></i> {{$post->author->name}}</a></span>
                            </div>
                        </div>
                        <div class="blog-content-tt">
                            <div class="single-blog-info-">
                                <div class="entry-blog">
                                    <span>
                                        <a href="#"><i class="fas fa-comment-dots"></i>
                                           @if(count($post->comments)<1000)
                                                ( {{count($post->comments)}} )
                                            @elseif(count($post->comments)<1000000)
                                                ( {{round(count($post->comments)/1000, 2)}}K )
                                            @else
                                                 {{round(count($post->comments)/1000000, 2)}}M
                                            @endif
                                        </a>
                                    </span>
                                    <span class="posted-on">
                                        <a href="#"><i class="fas fa-eye"></i>
                                            @if($post->view<1000)
                                            {{$post->view}}
                                            @elseif($post->view<1000000)
                                                {{round($post->view/1000, 2)}}K
                                            @else
                                                {{round($post->view/1000000, 2)}}M
                                            @endif
                                        </a>
                                    </span>
                                    <span class="posted-on"><a href="#"><i class="fas fa-clock"></i> {{$post->updated_at->diffForHumans()}}</a></span>

                                </div>
                                <h4><a href="{{route('post',['slug'=>$post->slug])}}">{{$post->title}}</a></h4>
                                <p>{{$post->excerpt}}</p>
                            </div>
                            <div class="post-social">
                                <div class="ss-inline-share-wrapper ss-hover-animation-fade ss-inline-total-counter-left ss-left-inline-content ss-small-icons ss-with-spacing ss-circle-icons ss-without-labels">
                                    <div class="ss-inline-share-content">
                                        <div class="ss-social-icons-container">
                                            <a href="javascript:void(0)">Shares</a>
                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{url($post->slug)}}"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://twitter.com/intent/tweet?text={{$post->title}}&url={{url($post->slug)}}"><i class="fab fa-twitter"></i></a>
                                            <a href="http://www.linkedin.com/shareArticle?mini=true&url={{url($post->slug)}}&title={{$post->title}}&summary={{$post->excerpt}}"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="https://wa.me/?text={{url($post->slug)}}"><i class="fab fa-whatsapp"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach



            </div>

        </div>
    </section>
    <!--End Blog Grid-->
@endsection
