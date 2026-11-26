

<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="@yield('description')">
        <meta name="keywords" content="@yield('keywords')">
        <meta name="author" content="{{ config('app.name') }}">
        <meta property="og:title" content="@yield('ogtitle')" />
        <meta property="og:description" content="@yield('ogdescription')" />
        <meta property="og:image" content="@yield('ogimage')" />
        <meta property="og:url" content="@yield('ogurl')" />
        <meta property="og:type" content="E-commerce Website" />
        <link rel="shortcut icon" href="{{ asset('asset/images/favicon.webp') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('asset/images/favicon.webp') }} ">
        @include('frontend.layouts.style')
    </head>
    <body class="preload-wrapper">
        <button id="scroll-top">
            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_15741_24194)">
                <path d="M3 11.9175L12 2.91748L21 11.9175H16.5V20.1675C16.5 20.3664 16.421 20.5572 16.2803 20.6978C16.1397 20.8385 15.9489 20.9175 15.75 20.9175H8.25C8.05109 20.9175 7.86032 20.8385 7.71967 20.6978C7.57902 20.5572 7.5 20.3664 7.5 20.1675V11.9175H3Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
                <defs>
                <clipPath id="clip0_15741_24194">
                <rect width="24" height="24" fill="white" transform="translate(0 0.66748)"/>
                </clipPath>
                </defs>
            </svg> 
        </button>
        <div class="preload preload-container">
            <div class="preload-logo">
                <div class="spinner"></div>
            </div>
        </div>
        <div id="wrapper">
            @yield('body_menu')
            @yield('body_content')
            @yield('body_footer')
        </div>
        @include('frontend.layouts.bottom')
        @include('frontend.layouts.script')
    </body>
</html>