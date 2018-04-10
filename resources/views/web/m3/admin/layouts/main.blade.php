
@extends("web.$template.layouts.main")

@section('css')
	<link rel="stylesheet" href="{{ asset('/web/m3/css/rendezvous.css') }}">
@endsection 
@section('after.js')
@endsection 
@section('content')

	<div class="container user_con" style="margin-top: 50px;">
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
            </ul>
        </div>
        <div class="user_right ">
            @yield('admin.content')
        </div>
    </div>

@endsection










