<!--Start Header -->
<header class="nav-bg-w main-header navfix fixed-top menu-white">
    <div class="container-fluid m-pad">
        <div class="menu-header">
            <div class="dsk-logo"><a class="nav-brand" href="{{route('front')}}">
                    <img src="{{asset('/storage')."/".setting('site.logodark')}}" alt="{{setting('site.title')}}" class="mega-white-logo"/>
                    <img src="{{asset('/storage')."/".setting('site.logo')}}" alt="{{setting('site.title')}}" class="mega-darks-logo"/>
                </a>
            </div>
            <div class="custom-nav" role="navigation">

                <ul class="nav-list">
                    @foreach($head_menu->items as $menu)
                        <li class=" sbmenu  @if(isset($menu['children'])) rpdropdown  @endif">
                            <a class="menu-links" @if($menu['data']) target="{{$menu['data']['target']}}"@endif href="@if($menu['data']) {{$menu['data']['url']}} @endif"<?php if(count($menu['children'])>0){?> data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" <?php } ?>> {{$menu['label']}}</a>
                            @if(count($menu['children'])>0)
                                <div class="nx-dropdown menu-dorpdown">
                                    <div class="sub-menu-section">
                                        <div class="sub-menu-center-block">
                                            <div class="sub-menu-column smfull">
                                                <ul>
                                                    @foreach($menu['children'] as $child)

                                                        <li><a @if($menu['data']) target="{{$menu['data']['target']}}"@endif href="@if($child['data']) {{$child['data']['url']}} @endif">{{$child['label']}}</a> </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </li>
                    @endforeach
                </ul>

                <!-- mobile + desktop - sidebar menu- dark mode witch and button -->
                <ul class="nav-list right-end-btn">
                    <li class="hidemobile"><a data-bs-toggle="offcanvas" href="#offcanvasExample" class="btn-round- btn-br bg-btn2"><i class="fas fa-bars"></i></a></li>
                    <li class="hidemobile"><a href="{{route('portal')}}" class="btn-br bg-btn3 btshad-b2 lnk">Portal <span class="circle"></span></a> </li>
                    <li class="hidedesktop darkmodeswitch"><div class="switch-wrapper"> <label class="switch" for="niwax"> <input type="checkbox" id="niwax"/>  <span class="slider round"></span> </label> </div> </li>
                    <li class="hidedesktop"><a data-bs-toggle="offcanvas" href="#offcanvasExample" class="btn-round- btn-br bg-btn2"><i class="fas fa-bars"></i></a></li>
                    <li class="navm- hidedesktop"> <a class="toggle" href="#"><span></span></a></li>
                </ul>
            </div>
        </div>

        <!--Mobile Menu-->
        <nav id="main-nav">
            <ul class="first-nav">
                @foreach($head_menu->items as $menu)
                <li>
                    <a  @if($menu['data']) target="{{$menu['data']['target']}}"@endif href="@if($menu['data']) {{$menu['data']['url']}} @endif"> {{$menu['label']}}</a>
                    @if(count($menu['children'])>0)
                        <ul>
                            @foreach($menu['children'] as $child)

                                <li><a @if($menu['data']) target="{{$menu['data']['target']}}"@endif href="@if($child['data']) {{$child['data']['url']}} @endif">{{$child['label']}}</a> </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
                @endforeach
                <li><a class="btn btn-warning bg-warning text-dark m-2 text-bold" href="{{route('portal')}}">Portal</a></li>
            </ul>

            <ul class="bottom-nav">
                <li class="prb">
                    <a href="tel:{{setting('site.phone')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384">
                            <path d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594
								  c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448
								  c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813
								  C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z"
                            />
                        </svg>
                    </a>
                </li>
                <li class="prb">
                    <a href="mailto:{{setting('site.email')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                            <path d="M0 0h24v24H0z" fill="none"/>
                        </svg>
                    </a>
                </li>
                <li class="prb">
                    <a target="_blank" href="https://api.whatsapp.com/send?phone={{setting('site.whatsapp')}}&text=Hello%20Quiz%20Portal%20BD">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16"> <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/> </svg>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<!--End Header -->
