@extends('web.m7.layouts.main')
@section('content')
    <div class="body" style="background: url(https://static.tb6678.com/tb2d1/image/pic/bg/live/online_live_bg.jpg) no-repeat;">
        <div class="container tbbg-margin">
            <div class="notice clear">
                <div class="notice-bg"></div>
                <div class="notice-title pullLeft">
                    <div class="notice-title_bg"></div>
                    <span class="bg-icon pullLeft"></span>
                    系统公告
                </div>
                <marquee id="mar0" scrollAmount="4" direction="left" onmouseout="this.start()" onmouseover="this.stop()">
                    @foreach($system_notices as $v)
                        <span>~{{ $v->title }}~</span>
                        <span>{{ $v->content }}</span>
                    @endforeach
                </marquee>
            </div>
            <ul class="live-ul clear">
                <li class="pullLeft live-li-margin on">
                    <div class="live-mnv mnv-3">
                        <h2 class="pullRight">
                            AG国际厅<br><em>asia gaming</em>
                        </h2>
                    </div>
                    <div class="live-mshu">
                        <h2 class="liveCasino_title">AG国际厅</h2>
                        <p>体验投注激情，让您乐在其中!</p>
                        <div class="live-link">
                            <a href="javascript:;" class="pullRight live-link-1 pointer" @if($_member) onclick="javascript:window.open('{{ route('ag.playGame') }}?id=12','','width=1024,height=768')" @else onclick="return alert('请先登录！')"  @endif></a>
                        </div>
                    </div>
                </li>
                <li class="pullLeft live-li-margin">
                    <div class="live-mnv mnv-1">
                        <h2 class="pullRight">
                            AG旗舰厅
                            <br>
                            <em>asia gaming</em>
                        </h2>
                    </div>
                    <div class="live-mshu">
                        <h2 class="liveCasino_title">AG旗舰厅</h2>
                        <p>现场360度视角，实时显示输赢排行榜，推荐最好牌路，多款游戏同台下注，百家乐，龙虎，骰宝等</p>

                        <div class="live-link">
                            <a href="javascript:;" class="pullRight live-link-1 pointer" @if($_member) onclick="javascript:window.open('{{ route('ag.playGame') }}?id=13','','width=1024,height=768')" @else onclick="return alert('请先登录！')"  @endif></a>
                        </div>
                    </div>
                </li>
                <li class="pullLeft live-li-margin">
                    <img class="isComing" src="{{ asset('/web/images/isComing.png') }}" alt="">
                    <div class="live-mnv mnv-2">
                        <h2 class="pullRight">
                            波音厅
                            <br>
                            <em>asia gaming</em>
                        </h2>
                    </div>
                    <div class="live-mshu">
                        <h2 class="liveCasino_title">波音厅</h2>
                        <p>现场360度视角，实时显示输赢排行榜，推荐最好牌路，多款游戏同台下注，百家乐，龙虎，骰宝等</p>

                        <div class="live-link">
                            <a href="javascript:;" class="pullRight live-link-1 pointer isComingSoon"></a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="notice_layer">
        <h3>公告详情 <span class="close"></span></h3>
        <div class="notice_con">
            @foreach($system_notices as $v)
                <div class="module">
                    <h4>{{ $v->title }}</h4>
                    <p>✿{{ $v->content }}</p>
                </div>
            @endforeach
        </div>
    </div>
    <script>


        (function ($) {
            $(function () {
                $('.live-ul li').on('mouseenter',function(){
                    console.log($(this));
                    $(this).addClass('on').siblings('li').removeClass('on');
                });

                $('.menuBox').on('click', 'li', function () {
                    var index = $(this).index();
                    var $contentBox_item=$(this).closest('.menuBox').next('.contentBox').find('.contentBox_item');
                    $(this).addClass('active').siblings('li').removeClass('active');
                    $contentBox_item.removeClass('active').eq(index).addClass('active');
                });

                //公告
                $('#mar0').on('click',function(){
                    var notice_index=layer.open({
                        type: 1,
                        title: false,
                        closeBtn: 0,
                        area: ['680px'],
                        skin: 'layui-layer-nobg', //没有背景色
                        shadeClose: true,
                        content: $('.notice_layer')
                    });

                    $('.notice_layer').on('click','.close',function(){
                        layer.close(notice_index)
                    })
                });

                $('.isComingSoon').on('click',function(){
                    layer.msg('暂未开放，敬请期待',{icon:6});
                });


                //superslide
                jQuery(".txtScroll-top").slide({mainCell:".bd ul",autoPage:true,effect:"top",autoPlay:true,vis:9,pnLoop:true});
            })
        })(jQuery)
    </script>
@endsection