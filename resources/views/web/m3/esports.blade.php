@extends('web.m3.layouts.main')
@section('after.js')

@endsection 
@section('content')

	@include('web.m3.common.login') 
	 <div class="body"
         style="background: url('{{ asset('/web/m3/images/egame-banner-esports.jpg') }}') no-repeat;padding: 350px 0 100px">
        <div class="pages">
            <div class="sports w1000">
                <div class="sports_content">
                	<a href="javascript:;"  onclick="return layer.msg('请先登录！',{icon:6})"  >
                    	<img src="{{ asset('/web/m3/images/sport3.png') }}" ></a>
                    <a href="javascript:;" onclick="return layer.msg('请先登录！',{icon:6})" >
                    	<img src="{{ asset('/web/m3/images/sport2.png') }}" ></a>
                    <a href="javascript:;" onclick="return layer.msg('请先登录！',{icon:6})" >
                    	<img src="{{ asset('/web/m3/images/hgty.png') }}"></a>
                </div>
            </div>
        </div>
    </div>
@endsection