<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('storage')."/".setting('site.favicon') }}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Md. Nurnobi Hosen">
        {!! SEO::generate() !!}
        <!-- BEGIN: CSS Assets-->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <link rel="stylesheet" href="{{ asset('student_portal') }}/css/app.css" />
        <!-- END: CSS Assets-->

        {!! setting('code.header') !!}

    </head>
    <!-- END: Head -->
    <body class="py-5" style="background-color:
    @if(strlen(setting('portal.bg.color'))==7){{setting('portal.bg.color')}}
    @elseif((int)date("i")%2==0)
      #EC2C98
    @else
    #4765D3

    @endif;color: black;">
    <!-- BEGIN: Mobile Menu -->
    {!! setting('code.body') !!}
      @include('include.std_portal.mobile_menu')
    <!-- END: Mobile Menu -->
        <div class="flex mt-[4.7rem] md:mt-0">
            <!-- BEGIN: Side Menu -->
            @include('include.std_portal.side_menu')
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                @include('include.std_portal.top_menu')
                <!-- END: Top Bar -->
                @yield('content')
            </div>
            <!-- END: Content -->
        </div>



    <!-- BEGIN: JS Assets-->
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
    <script src="{{ asset('student_portal') }}/js/app.js"></script>
<!-- END: JS Assets-->
    {!! setting('code.footer') !!}
    </body>
</html>
