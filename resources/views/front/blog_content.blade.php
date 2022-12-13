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
                                    <li><a href="{{route('post',['slug'=>$post->slug])}}">{{$post->title}}</a></li>
                                </ul>
                            </div>
                            <div class="bread-title">
                                <h2>{{$post->title}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb Area-->
    <!--Start Blog Details-->
    <section class="blog-page pad-tb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-header">
                        <p>{{$post->excerpt}}</p>
                        <h1>{{$post->title}}</h1>
                        <div class="row mt20 mb20">
                            <div class="col-md-8 col-9">
                                <div class="media">
                                    <div class="user-image bdr-radius">
                                    @if($post->author->photo)

                                            <img src="{{asset('storage/'.$post->author->photo)}}" alt="{{$post->author->name}}" class="img-fluid" />
                                    @endif
                                   </div>
                                    <div class="media-body user-info">
                                        <a href="{{route('blog.author',['id'=>$post->author->id])}}">
                                        <h5>{{$post->author->name}}</h5></a>
                                        <p>{{$post->created_at->diffForHumans()}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-3">
                                <div class="postwatch">
                                    <i class="far fa-eye"></i>
                                        @if($post->view<1000)
                                            ( {{$post->view}} )
                                        @elseif($post->view<1000000)
                                            ( {{round($post->view/1000, 2)}}K )
                                        @else
                                            {{round($post->view/1000000, 2)}}M
                                        @endif
                                    <i class="fas fa-comment-dots"></i>
                                    @if(count($post->comments)<1000)
                                       ( {{count($post->comments)}} )
                                    @elseif(count($post->comments)<1000000)
                                       ( {{round(count($post->comments)/1000, 2)}}K )
                                    @else
                                         {{ round(count($post->comments)/1000000, 2)}}M
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                    <div  class="image-set"><img  src="{{$post->banner_url}}" alt="{{$post->title}}" class="img-fluid" /></div>
                    <div class="blog-content mt30">
                       {!! $post->content !!}
                        <div class="row">
                            <div class="col-lg-8 col-md-8 mt30 mb30">
                                <div class="blog-post-tag">
                                    <span>Releted Tags</span>
                                    @foreach($post->tags as $tag)
                                        <a>{{$tag->name}}</a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 mt30 mb30">
                                <div class="blog-share-icon text-left text-md-right">
                                    <span>Share: </span>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{url($post->slug)}}"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://twitter.com/intent/tweet?text={{$post->title}}&url={{url($post->slug)}}"><i class="fab fa-twitter"></i></a>
                                    <a href="http://www.linkedin.com/shareArticle?mini=true&url={{url($post->slug)}}&title={{$post->title}}&summary={{$post->excerpt}}"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://wa.me/?text={{url($post->slug)}}"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="author-block">
                        <div class="media">
                            <div class="user-image">
                                @if($post->author->photo)
                                <img src="{{asset('storage/'.$post->author->photo)}}" alt="{{$post->author->name}}" class="img-fluid" />
                                @endif
                            </div>
                            <div class="media-body user-info">
                                <h5 class="mb10">{{$post->author->name}}</h5>
                                {!! $post->author->bio !!}
                            </div>
                        </div>
                    </div>
                    <div class="comments-block mt60">
                        <div class="form-block form-blog mt60">
                            <form action="{{route('blog.comment')}}" method="post" name="#">
                                @csrf
                                @if (Session::has('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                        @php
                                            Session::forget('success');
                                        @endphp
                                    </div>
                                @endif
                                <div class="fieldsets row">
                                    <input type="number" hidden value="{{$post->id}}" name="blog_post_id">
                                    <div class="col-md-6"><input type="text"  placeholder="Name" name="name" required /></div>
                                    <div class="col-md-6"><input type="email" placeholder="Email" name="email" required/></div>
                                </div>
                                <div class="fieldsets row">
                                    <div class="col-md-12"><input type="text" placeholder="Website" name="website" /></div>
                                </div>
                                <div class="fieldsets"><textarea placeholder="Write Your Comment" name="comment" required></textarea></div>
                                <div class="fieldsets mt10">
                                    <button type="submit" name="#" class="btn-main bg-btn lnk">Submit <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
                                </div>
                            </form>
                        </div>
                        <h2 class="mt-2 mb-1">Comments:</h2>
                        @foreach($post->comments as $comment)
                            <div class="mb-2">
                                <div class="media-body user-info">
                                    <h5 >
                                        {{$comment->name}} <small>says:</small>
                                        <span> {{$comment->created_at->diffForHumans()}}<i class="fas fa-reply"></i></span>
                                    </h5>
                                    <p>{{$comment->comment}}</p>
                                    <hr>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
                <!--End Blog Details-->
                <!--Start Sidebar-->
                <div class="col-lg-4">
                    <div class="sidebar">
                        <!--Start block for offer/ads-->
                        <div class="offer-image">
{{--                            <img src="images/blog/strategy-guide.jpg" alt="offer" class="img-fluid" />--}}
                        </div>
                        <!--End block for offer/ads-->
                        <!--Start Recent post-->
                        <div class="recent-post widgets mt60">
                            <h3 class="mb30">Recent post</h3>
                            @foreach($posts as $post)
                                <div class="media">
                                    <div class="post-image bdr-radius">
                                        @if($post->banner)
                                            <a href="{{route('post',['slug'=>$post->slug])}}"><img src="{{ $post->banner_url }}" alt="{{ $post->title }}" class="img-fluid"></a>
                                        @endif
                                    </div>
                                    <div class="media-body post-info">
                                        <h5><a href="#">{{ $post->title }}</a></h5>
                                        <p>{{$post->updated_at->diffForHumans()}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!--Start Recent post-->
                        <!--Start Blog Category-->
                        <div class="recent-post widgets mt60">
                            <h3 class="mb30">Blog Category</h3>
                            <div class="blog-categories">
                                <ul>
                                    @foreach($categories as $category)
                                        <li>
                                            <a href="{{route('blog.category',['slug'=>$category->slug])}}">{{$category->name}} <span class="categories-number">({{count($category->posts)}})</span></a>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <!--End Blog Category-->
                        <!--Start Tags-->
                        <div class="recent-post widgets mt60">
                            <h3 class="mb30">Most Used Tags</h3>
                            <div class="tabs">
                                @foreach($tags as $tag)
                                    <a>{{$tag->name}}</a>
                                @endforeach
                            </div>
                        </div>
                        <!--End Tags-->
                        <!--Start block for offer/ads-->
                        <div class="offer-image mt60">

                        </div>
                        <!--End block for offer/ads-->
                    </div>
                </div>
                <!--End Sidebar-->
            </div>
        </div>
    </section>
@endsection
