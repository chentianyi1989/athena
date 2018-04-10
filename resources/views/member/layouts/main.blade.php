<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $web_title or $_system_config->site_name }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="{{ $_system_config->keyword }}">
    <link rel="stylesheet" href="{{ asset('/web/m3/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/m3/css/index1.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/m3/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/m3/fonts/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/css/rendezvous.css') }}">
    
    <script src="{{ asset('/web/m3/js/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('/web/m3/js/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('/web/m3/js/index1.js') }}"></script>
    <script src="{{ asset('/web/m3/js/jquery.SuperSlide.2.1.1.js') }}"></script>
    <script src="{{ asset('/web/m3/layer/layer.js') }}"></script>
    <script src="{{ asset('/web/m3/js/ajax-submit-form.js') }}"></script>
    <script src="{{ asset('/web/m3/js/jquery.lazyload.min.js') }}"></script>
    <script src="{{ asset('/web/m3/js/common.js') }}"></script>
    <script src="{{ asset('/web/js/rendezvous.js') }}"></script>
</head>
<body>

@include('web.layouts.header')

<div class="container user_con" style="margin-top: 150px;">
    <div class="user_left fl">
        <ul>
            <li @if(in_array($web_route, ['member.userCenter', 'member.account_load', 'member.bank_load', 'member.update_bank_info','member.message_list'])) class="active" @endif>
                <a href="{{ route('member.userCenter') }}"><i class="iconfont">&#xe639;</i>个人资料</a>
            </li>
            <li @if(in_array($web_route, ['member.safe_psw', 'member.login_psw'])) class="active" @endif>
                <a href="{{ route('member.safe_psw') }}"><i class="iconfont">&#xe673;</i>安全管理</a>
            </li>
            <li @if(in_array($web_route, ['member.finance_center', 'member.member_drawing', 'member.indoor_transfer', 'member.weixin_pay', 'member.ali_pay', 'member.bank_pay'])) class="active" @endif>
                <a href="{{ route('member.finance_center') }}"><i class="iconfont">&#xe646;</i>财务中心</a>
            </li>
            <li @if(in_array($web_route, ['member.customer_report'])) class="active" @endif>
                <a href="{{ route('member.customer_report') }}"><i class="iconfont">&#xe638;</i>客户报表</a>
            </li>
            <li @if(in_array($web_route, ['member.service_center', 'member.complaint_proposal'])) class="active" @endif>
                <a href="{{ route('member.service_center') }}"><i class="iconfont">&#xe613;</i>服务中心</a>
            </li>
            {{--<li>--}}
                {{--<a href="{{ route('member.safe_psw') }}"><i class="iconfont">&#xe60b;</i>自助优惠</a>--}}
            {{--</li>--}}
        </ul>
    </div>
    <div class="user_right ">
        @yield('content')
    </div>
</div>
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