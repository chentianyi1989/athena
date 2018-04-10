<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $_system_config->site_name or 'klk' }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="{{ $_system_config->keyword }}">
    <link rel="stylesheet" href="{{ asset('/web/m3/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/m3/css/index1.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/m3/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/m3/fonts/iconfont.css') }}">
    <script src="{{ asset('/web/m3/js/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('/web/m3/js/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('/web/m3/js/index1.js') }}"></script>
    <script src="{{ asset('/web/m3/js/jquery.SuperSlide.2.1.1.js') }}"></script>
    <script src="{{ asset('/web/m3/layer/layer.js') }}"></script>
    <script src="{{ asset('/web/m3/js/ajax-submit-form.js') }}"></script>
    <script src="{{ asset('/web/m3/js/jquery.lazyload.min.js') }}"></script>
    <script src="{{ asset('/web/m3/js/common.js') }}"></script>
</head>
<body class="lay-out">

@include('web.layouts.header')

@yield('content')
@include('web.layouts.aside')
@include('web.layouts.footer')

@yield('after.js')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
</body>
</html>