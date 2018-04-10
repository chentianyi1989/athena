@extends('web.layouts.main')
@section('content')
@include('web.m3.common.login') 
<div class="banner" style="height: 355px;">
    <div class="bd">
      <ul>
        <li>
          <img src="{{ asset('/web/m3/images/zhenren/banner.jpg') }}" >
        </li>
      </ul>
    </div>
</div>
  @include('web.m3.common.notice')
<link rel="stylesheet" href="{{ asset('/web/m3/css/9388/live.css') }}">
<div class="zhenrenPage">
    <div class="zhenren w">
      <ul>
          <li>
            <div class="xx1"><img src="{{ asset('/web/m3/images/zhenren/logo2.png') }}" alt=""></div>
            <div class="xx2">日本AV荷官女郎<br>为您发牌</div>
            <div class="xx4">
              <span>AG 女优厅</span>
              <a href="javascript:void(0);" title="AG"
                @if($_member) 
                	onclick="javascript:window.open('{{ route('ag.playGame') }}?id=13','','width=1024,height=768')" 
              	@else onclick="return alert('请先登录！')"  
              	@endif>进入游戏</a>
            </div>
            <div class="xx5"><img src="{{ asset('/web/m3/images/zhenren/2.png') }}" ></div>
          </li>
                          <li>
            <div class="xx1"><img src="{{ asset('/web/m3/images/zhenren/logo3.png') }}" ></div>
            <div class="xx2">亚洲最流行的<br>真人娱乐</div>
            <div class="xx4">
              <span>BBIN 旗舰厅</span>
              <a href="javascript:void(0);" title="BBIN"
                @if($_member) 
                	onclick="javascript:window.open('{{ route('bbin.playGame') }}?pageSite=live','','width=1024,height=768')" 
              	@else onclick="return alert('请先登录！')"  
              	@endif>进入游戏</a>
            </div>
            <div class="xx5"><img src="{{ asset('/web/m3/images/zhenren/3.png') }}"></div>
          </li>
          <li>
            <div class="xx1"><img src="{{ asset('/web/m3/images/zhenren/logo6.png') }}"></div>
            <div class="xx2">最专业的完善<br>的娱乐平台</div>
            <div class="xx4">
              <span>MG 视讯厅</span>
              <a href="javascript:void(0);" title="MG" 
                @if($_member) 
                	onclick="javascript:window.open('{{ route('mg.playGame') }}','','width=1024,height=768')" 
              	@else onclick="return alert('请先登录！')"  
              	@endif>进入游戏</a>
            </div>
            <div class="xx5"><img src="{{ asset('/web/m3/images/zhenren/6.png') }}"></div>
          </li>
          
          <li>
            <div class="xx1"><img src="{{ asset('/web/m3/images/zhenren/logo4.png') }}" ></div>
            <div class="xx2">最专业的完善<br>的娱乐平台</div>
            <div class="xx4">
              <span>AB 视讯厅</span>
              <a href="javascript:void(0);" title="AB"
                  onclick="return layer.msg('未开放!',{icon:6})" >进入游戏</a>
            </div>
            <div class="xx5"><img src="{{ asset('/web/m3/images/zhenren/4.png') }}"></div>
          </li>
                         
                          <li>
            <div class="xx1"><img src="{{ asset('/web/m3/images/zhenren/logo10.png') }}"></div>
            <div class="xx2">体验英式赌场的<br>视觉冲击</div>
            <div class="xx4">
              <span>BG 旗舰厅</span>
              <a href="javascript:void(0);" title="BG"
                  onclick="return layer.msg('未开放!',{icon:6})" >进入游戏</a>
            </div>
            <div class="xx5"><img src="{{ asset('/web/m3/images/zhenren/7.png') }}"></div>
          </li>
          <li>
            <div class="xx1"><img src="{{ asset('/web/m3/images/zhenren/logo11.png') }}"></div>
            <div class="xx2">最专业的完善的<br>娱乐平台</div>
            <div class="xx4">
              <span>PT 视讯厅</span>
              <a href="javascript:void(0);" title="PT"
                  onclick="return layer.msg('未开放!',{icon:6})" >进入游戏</a>
            </div>
            <div class="xx5"><img src="{{ asset('/web/m3/images/zhenren/8.png') }}"></div>
          </li>
                          <li>
            <div class="xx1"><img src="{{ asset('/web/m3/images/zhenren/logo12.png') }}"></div>
            <div class="xx2">最专业的完善的<br>娱乐平台</div>
            <div class="xx4">
              <span>CG 视讯厅</span>
              <a href="javascript:void(0);" title="CG"
                  onclick="return layer.msg('未开放!',{icon:6})" >进入游戏</a>
            </div>
            <div class="xx5"><img src="{{ asset('/web/m3/images/zhenren/9.png') }}"></div>
          </li>
          <li>
            <div class="xx1"><img src="{{ asset('/web/m3/images/zhenren/logosa.png') }}"></div>
            <div class="xx2">最专业的完善的<br>娱乐平台</div>
            <div class="xx4">
              <span>SA 视讯厅</span>
              <a href="javascript:void(0);" title="SA"
                  onclick="return layer.msg('未开放!',{icon:6})" >进入游戏</a>
            </div>
            <div class="xx5"><img src="{{ asset('/web/m3/images/zhenren/5.png') }}"></div>
          </li>
                                  <li>
            <div class="xx1"><img src="{{ asset('/web/m3/images/zhenren/logo7.png') }}"></div>
            <div class="xx2">最专业的完善的<br>娱乐平台</div>
            <div class="xx4">
              <span>OG 视讯厅</span>
              <a href="javascript:void(0);" title="OG"
                  onclick="return layer.msg('未开放!',{icon:6})" >进入游戏</a>
            </div>
            <div class="xx5"><img src="{{ asset('/web/m3/images/zhenren/12.png') }}"></div>
          </li>
          <li>
            <div class="xx1"><img src="{{ asset('/web/m3/images/zhenren/logosb.png') }}"></div>
            <div class="xx2">最专业的完善的<br>娱乐平台</div>
            <div class="xx4">
              <span>申博视讯厅</span>
              <a href="javascript:void(0);" title="SUNBET"
                  onclick="return layer.msg('未开放!',{icon:6})" >进入游戏</a>
            </div>
            <div class="xx5"><img src="{{ asset('/web/m3/images/zhenren/1.png') }}"></div>
          </li>
          <li class="more"></li>
      </ul>
      <div class="clear"></div>
    </div>
  </div>
@endsection