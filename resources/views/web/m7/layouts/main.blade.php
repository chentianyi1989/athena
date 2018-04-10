<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $_system_config->site_name or 'klk' }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="{{ $_system_config->keyword }}">
    <link rel="stylesheet" href="{{ asset('/web/m7/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/m7/css/index1.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/m7/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/m7/fonts/iconfont.css') }}">
    <script src="{{ asset('/web/m7/js/jquery-2.1.3.min.js') }}"></script>
</head>
<body>

@include('web.m7.layouts.header')

@yield('content')
@include('web.m7.layouts.aside')
@include('web.m7.layouts.footer')

<script src="{{ asset('/web/m7/js/jquery.flexslider.js') }}"></script>
<script src="{{ asset('/web/m7/js/index1.js') }}"></script>
<script src="{{ asset('/web/m7/js/jquery.SuperSlide.2.1.1.js') }}"></script>
<script src="{{ asset('/web/m7/layer/layer.js') }}"></script>
<script src="{{ asset('/web/m7/js/ajax-submit-form.js') }}"></script>
<script src="{{ asset('/web/m7/js/jquery.lazyload.min.js') }}"></script>
<script src="{{ asset('/web/m7/js/common.js') }}"></script>
@yield('after.js')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?0f6f5a3b75d5a0e6f0c0c7912e643d07";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</body>
</html>