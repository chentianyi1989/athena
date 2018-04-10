@extends('web.m3.layouts.main') @section('after.js')
<link rel="stylesheet" href="{{ asset('/web/m3/css/lottory.css') }}" >

@endsection 
@section('content') 

@include('web.m3.common.login')
<div class="body" style="">
	<!--banner-->
	<div class="banner" style="height: 355px;">
		<div class="bd">
			<ul>
				<li style=""><img src="{{ asset('/web/m3/images/lottoryBanner.jpg') }}"  alt=""></li>
			</ul>
		</div>
	</div>
	@include('web.m3.common.notice')


	<div class="lotteryPage">
		<div class="lottery">
			<ul>
				<li><a onclick="return layer.msg('请先登录!',{icon:6})" target="_blank"><img
						src="{{ asset('/web/m3/images/yc_icon.png') }}" >
						<div class="liright">
							<h2>YC彩票</h2>
							<span>YING LOTTERY</span>
						</div> </a> <a onclick="return layer.msg('请先登录!',{icon:6})"
					target="_blank" class="rulebtn">&nbsp;立即游戏&gt;&gt;</a> <br>
					<p>快乐彩、时时彩、六合彩游戏多样化，尽情体验精彩游戏。</p></li>

				<li><a onclick="return layer.msg('请先登录!',{icon:6})" target="_blank"><img
						src="{{ asset('/web/m3/images/yc_icon.png') }}" >
						<div class="liright">
							<h2>YC国彩</h2>
							<span>YING LOTTERY</span>
						</div> </a> <a onclick="return layer.msg('请先登录!',{icon:6})"
					target="_blank" class="rulebtn">&nbsp;立即游戏&gt;&gt;</a> <br>
					<p>应有尽有。官方同步开奖，更高中奖率，感受彩票无限乐趣。</p></li>

				<li><a onclick="return layer.msg('请先登录!',{icon:6})" target="_blank">
						<img src="{{ asset('/web/m3/images/EG_LOGO.png') }}" />
    						<div class="liright">
    							<h2>EG彩票</h2>
    							<span>YING LOTTERY</span>
    						</div> </a> 
    					<a onclick="return layer.msg('请先登录!',{icon:6})" target="_blank" class="rulebtn">&nbsp;立即游戏&gt;&gt;</a> <br>
					<p>应有尽有。官方同步开奖，更高中奖率，感受彩票无限乐趣。</p></li>

				<li><a onclick="return layer.msg('请先登录!',{icon:6})" target="_blank">
						<img src="{{ asset('/web/m3/images/bbin-lottory.png') }}" />
						<div class="liright">
							<h2>BB彩票</h2>
							<span>YING LOTTERY</span>
						</div> </a> <a onclick="return layer.msg('请先登录!',{icon:6})"
					target="_blank" class="rulebtn">&nbsp;立即游戏&gt;&gt;</a> <br>
					<p>应有尽有。官方同步开奖，更高中奖率，感受彩票无限乐趣。</p></li>
				<li><a onclick="return layer.msg('请先登录!',{icon:6})" target="_blank"><img
						src="{{ asset('/web/m3/images/vr-lottory.png') }}"/>
						<div class="liright">
							<h2>VR彩票</h2>
							<span>VR LOTTERY</span>
						</div> </a> <a onclick="return layer.msg('请先登录!',{icon:6})"
					target="_blank" class="rulebtn">&nbsp;立即游戏&gt;&gt;</a> <br>
					<p>应有尽有。官方同步开奖，更高中奖率，感受彩票无限乐趣。</p></li>


				<!-- <li class="upcoming"></li> -->
			</ul>
			<div class="clear"></div>
		</div>
	</div>
</div>
@endsection
