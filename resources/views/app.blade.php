<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <meta name="csrall.jsf-token" content="{{ csrf_token() }}" />


        @yield('meta')
        {{--<meta name="publishable-key" content="{{ Config::get('stripe.publishable_key') }}">--}}
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        {{--<link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css' rel='stylesheet' type='text/css'>--}}
        <link href='/cssTemp/bootstrap.min.css' rel='stylesheet' type='text/css'>
        <link href='/cssTemp/jquery-ui.css' rel='stylesheet' type='text/css'>
    {{--https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.1/jquery.datetimepicker.css--}}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            body {
                padding-top: 80px;
            }
            .form-horizontal .form-group {
                margin-left:0;
            }
        </style>
    </head>
<body>

    @include('mainNav')
    <div class="container" id="page-container">
        @yield('content')
    </div>

    @yield('footerFirst')
   <script src="https://code.jquery.com/jquery-3.1.0.slim.min.js" integrity="sha256-cRpWjoSOw5KcyIOaZNo4i6fZ9tKPhYYb6i5T9RSVJG8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" ></script>
    <script src="/js/all.js"></script>
    {{--<script src="/jsTemp/libs/bootstrap.min.js"></script>
    --}}
    @yield('footer')


    </body>
</html>
