<!--Start Footer-->
<footer>

    <div class="footer-row2">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5 col-sm-6  ftr-brand-pp">
                    <a class="navbar-brand mt30 mb25" href="{{route('front')}}"> <img src="{{ asset('storage')."/".setting('site.logo') }}" alt="{{setting('site.title') }}" width="250" /></a>
                    <p>{{setting('site.description') }}</p>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <h5>Contact Us</h5>
                    <ul class="footer-address-list ftr-details">
                        <li>
                            <span><i class="fas fa-envelope"></i></span>
                            <p>Email <span> <a href="mailto:{{setting('site.email') }}">{{setting('site.email') }}</a></span></p>
                        </li>
                        <li>
                            <span><i class="fas fa-phone-alt"></i></span>
                            <p>Phone <span> <a href="tel:{{setting('site.phone') }}">{{setting('site.phone') }}</a></span></p>
                        </li>
                        <li>
                            <span><i class="fas fa-map-marker-alt"></i></span>
                            <p>Address <span> {{setting('site.address') }}</span></p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h5>Company</h5>
                    <ul class="footer-address-list link-hover">
                        <li><a href="{{route('contact')}}">Contact</a></li>
                        <li><a href="{{route('about')}}">About Us</a></li>
                        <li><a href="{{route('privacy')}}">Privacy Policy</a></li>
                        <li><a href="{{route('terms')}}">Terms and Conditions</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="footer-row3">
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="footer-social-media-icons">
                            @if(setting('facebook'))
                            <a href="{{setting('facebook')}}" target="blank"><i class="fab fa-facebook"></i></a>
                            @endif

                            @if(setting('twitter'))
                            <a href="{{setting('twitter')}}" target="blank"><i class="fab fa-twitter"></i></a>
                            @endif

                            @if(setting('instagram'))
                            <a href="{{setting('instagram')}}" target="blank"><i class="fab fa-instagram"></i></a>
                            @endif

                            @if(setting('linkedin'))
                            <a href="{{setting('linkedin')}}" target="blank"><i class="fab fa-linkedin"></i></a>
                            @endif

                            @if(setting('youtube'))
                            <a href="{{setting('youtube')}}" target="blank"><i class="fab fa-youtube"></i></a>
                            @endif

                            @if(setting('pinterest'))
                            <a href="{{setting('pinterest')}}" target="blank"><i class="fab fa-pinterest-p"></i></a>
                            @endif

                            @if(setting('vimeo'))
                            <a href="{{setting('vimeo')}}" target="blank"><i class="fab fa-vimeo-v"></i></a>
                            @endif

                            @if(setting('dribbble'))
                            <a href="{{setting('dribbble')}}" target="blank"><i class="fab fa-dribbble"></i></a>
                            @endif

                            @if(setting('behance'))
                            <a href="{{setting('behance')}}" target="blank"><i class="fab fa-behance"></i></a>
                            @endif
                        </div>

                        @if(setting('site.copyright'))
                        <div class="footer-">
                            <p>{{setting('site.copyright') }}</p>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--End Footer-->
