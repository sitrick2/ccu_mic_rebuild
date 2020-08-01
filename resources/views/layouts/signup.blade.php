<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $page_title ?? 'Comedy Corner Underground Open Mic Signup!' }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--Stylesheets--}}
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/foundation.css"/>
    <script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>
<div class="row">
    <div class="small-11 large-4 columns">
        <p><img src="{{ asset('images/ccu-logo.png') }}"></p>
        @yield('content')
    </div>
</div>
</body>
</html>
