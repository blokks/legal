<!doctype html>

<html lang='en'>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>

        <title>@yield('title')</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>

        <link href='{{ url('/brochure/dist/styles/screen.css') }}' rel='stylesheet'>
        <link href='{{ static_url('images/favicon.png') }}' rel='shortcut icon' type='image/x-icon'>

        <!-- Standard -->
        <meta name='description' content='@lang('brochure.social.description')'>
        <meta name='keywords' content='@lang('brochure.social.keywords')'>
        <meta name='author' content='BlokksHQ'>
        <link rel="canonical" href="https://blokks.co">

        <!-- Schema.org -->
        <meta itemprop='name' content='Blokks'>
        <meta itemprop='description' content='@lang('brochure.social.description')'>
        <meta itemprop='url' content='https://blokks.co'>
        <meta itemprop='keywords' content='@lang('brochure.social.keywords')'>
        <meta itemprop='image' content='{{ url("/brochure/dist/images/og.png") }}'>
        <meta itemprop='sourceOrganization' content='Blokks'>
        <meta itemprop='inLanguage' content='en-US'>

        <!-- OpenGraph -->
        <meta property='og:title' content='Blokks'>
        <meta property='og:description' content='@lang('brochure.social.description')'>
        <meta property='og:image' content='{{ url("/brochure/dist/images/og.png") }}'/>
        <meta property='og:type' content='website'>
        <meta property='og:url' content='{{ url() }}'>
        <meta property='og:site_name' content='Blokks' />
        <meta property='og:locale' content='en_US' />

        <!-- Twitter Card -->
        <meta name='twitter:title' content='Blokks' />
        <meta name='twitter:description' content='@lang('brochure.social.description')' />
        <meta name='twitter:card' content='summary_large_image'>
        <meta name='twitter:site' content='@BlokksHQ'>
        <meta name='twitter:image:src' content='{{ url("/brochure/dist/images/og.png") }}' />

        @stack('styles')
    </head>

    <body>
        <main class='loading @yield('className')'>

            @yield('content')

        </main>

        <script src='{{ url('/brochure/dist/scripts/vendor/SnapSVGAnimator.js') }}'></script>
        <script src='{{ url('/brochure/dist/scripts/index.js') }}'></script>

        <script>
            (function(h,o,t,j,a,r){
                h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                h._hjSettings={hjid:334270,hjsv:5};
                a=o.getElementsByTagName('head')[0];
                r=o.createElement('script');r.async=1;
                r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                a.appendChild(r);
            })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
        </script>

        <script>
            (function(i,s,o,g,r,a,m){
                i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })
            (window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-64372736-5', 'auto');
            ga('send', 'pageview');
        </script>        
    </body>
</html>
