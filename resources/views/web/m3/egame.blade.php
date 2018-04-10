@extends('web.m3.layouts.main')
@section('after.js')

@endsection 
@section('content')

	@include('web.m3.common.login') 
	

	<div class="body" style="background: url('{{ asset('/web/m3/images/egame-banner.jpg') }}') no-repeat;">
        <div class="container tbbg-margin">
            @include('web.m3.common.notice')
            
			<div class="egameslide">
				<div class="hd">
					<ul>
						<li  class="on" >
							<a href="eGame-api_name=PT.htm" tppabs="http://mb3.uc697.com/eGame?api_name=PT">
                                <p class="pic">
                                    <img src="{{ asset('/web/m3/images/app-bg-pt1.png') }}" tppabs="http://mb3.uc697.com/web/images/app-bg-pt1.png" class="default">
                                    <img src="{{ asset('/web/m3/images/app-bg-pt2.png') }}" tppabs="http://mb3.uc697.com/web/images/app-bg-pt2.png" class="activepic">
                                </p>
                                <p class="tit">PT厅</p>
                            </a> 
                        </li>
						<li >
                        	<a href="eGame-api_name=MG.htm" tppabs="http://mb3.uc697.com/eGame?api_name=MG">
                                <p class="pic">
                                    <img src="{{ asset('/web/m3/images/app-bg-mg1.png') }}" tppabs="http://mb3.uc697.com/web/images/app-bg-mg1.png" class="default">
                                    <img src="{{ asset('/web/m3/images/app-bg-mg2.png') }}" tppabs="http://mb3.uc697.com/web/images/app-bg-mg2.png" class="activepic">
                                </p>
                                <p class="tit">MG厅</p>
                            </a>
                        </li>
                        <li >
                            <a href="eGame-api_name=BBIN.htm" tppabs="http://mb3.uc697.com/eGame?api_name=BBIN">
                            <p class="pic">
                                <img src="{{ asset('/web/m3/images/app-bg-by1.png') }}" tppabs="http://mb3.uc697.com/web/images/app-bg-by1.png" class="default">
                                <img src="{{ asset('/web/m3/images/app-bg-bb2.png') }}" tppabs="http://mb3.uc697.com/web/images/app-bg-bb2.png" class="activepic">
                            </p>
                            <p class="tit">BB厅</p>
                            </a>
                        </li>
                                                                            <li >
                                <a href="eGame-api_name=SA.htm" tppabs="http://mb3.uc697.com/eGame?api_name=SA">
                                <p class="pic">
                                    <img src="{{ asset('/web/m3/images/app-bg-sa1.png') }}" tppabs="http://mb3.uc697.com/web/images/app-bg-sa1.png" class="default">
                                    <img src="{{ asset('/web/m3/images/app-bg-sa2.png') }}" tppabs="http://mb3.uc697.com/web/images/app-bg-sa2.png" class="activepic">
                                </p>
                                <p class="tit">SA厅</p>
                                </a>
                            </li>
                                                                            <li >
                                <a href="eGame-api_name=DT.htm" tppabs="http://mb3.uc697.com/eGame?api_name=DT">
                                <p class="pic">
                                    <img src="{{ asset('/web/m3/images/app-bg-dt1.png') }}" tppabs="http://mb3.uc697.com/web/images/app-bg-dt1.png" class="default">
                                    <img src="{{ asset('/web/m3/images/app-bg-dt2.png') }}" tppabs="http://mb3.uc697.com/web/images/app-bg-dt2.png" class="activepic">
                                </p>
                                <p class="tit">DT厅</p>
                                </a>
                            </li>
                            <li >
                                <a href="eGame-api_name=TTG.htm" tppabs="http://mb3.uc697.com/eGame?api_name=TTG">
                                <p class="pic">
                                    <img src="{{ asset('/web/m3/images/app-bg-ttg1.png') }}" tppabs="http://mb3.uc697.com/web/images/app-bg-ttg1.png" class="default">
                                    <img src="{{ asset('/web/m3/images/app-bg-ttg2.png') }}" tppabs="http://mb3.uc697.com/web/images/app-bg-ttg2.png" class="activepic">
                                </p>
                                <p class="tit">TTG厅</p>
                                </a>
                            </li>
                            <div class="last">
                                <a href="javascript:;"
                                    onclick="return layer.msg('请先登录!',{icon:6})" >
                                    <p class="pic">
                                        <img src="{{ asset('/web/m3/images/app-bg-ag1.png') }}" tppabs="http://mb3.uc697.com/web/images/app-bg-ag1.png" style="display: inline;">
                                    </p>
                                    <p class="tit">AG电子游戏</p>
                                </a>
                            </div>
                        
                    </ul>
                </div>
                <div class="bd">
                        <div class="module" style="display: block;">
                            <div class="top">
                                <div class="egameTit"></div>
                                <div class="egame_filter_top">
                                    <span class="title"><img src="web/images/pt-pic-bz.png" tppabs="http://mb3.uc697.com/web/images/pt-pic-bz.png">PT厅</span>
                                    <span class="list_wrap active"><a href="javascript:void(0)"
                                                                      class="list ">全部</a></span>

                                    <div class="search_inp">
                                        <form action="http://mb3.uc697.com/eGame" method="GET">
                                            <input type="hidden" name="api_name" value="PT">
                                            <input type="text" class="inp" placeholder="请输入游戏名称" name="name" value="" required>
                                            <button type="submit"></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="bodylist">
                                <div class="egame_list">
                                   	@include('web.m3.common.egame.pt') 
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection