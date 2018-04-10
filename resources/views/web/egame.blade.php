@extends('web.layouts.main')
@section('content')
	@include('web.m3.common.login') 
    <div class="body" style="background: url('{{ asset('/web/images/egame-banner.jpg') }}') no-repeat;">
        <div class="container tbbg-margin" style="margin-top:-220px">
            @include('web.m3.common.notice')
            <div class="egameslide">
                <div class="hd">
                    <ul >
                        <li @if($api_name == 'ag') class="on" @endif>
                        <a href="{{ route('web.egame') }}?api_name=ag">
                            <p class="pic">
                                <img src="{{ asset('/web/m7/images/app-bg-ag1.png') }}" class="default">
                                <img src="{{ asset('/web/m7/images/app-bg-ag2.png') }}" class="activepic">
                            </p>
                            <p class="tit">AG厅</p>
                        </a>
                        </li>
                        
                        <li @if($api_name == 'mg') class="on" @endif>
                        	<a href="{{ route('web.egame') }}?api_name=mg">
                            <img class="isComing" src="{{ asset('/web/images/isComing2.png') }}" alt="">
                            <p class="pic">
                                <img src="{{ asset('/web/images/app-bg-mg1.png') }}" class="default">
                                <img src="{{ asset('/web/images/app-bg-mg2.png') }}" class="activepic">
                            </p>
                            <p class="tit">MG厅</p>
                            </a>
                        </li>
                        
                        <div class="last">
                            <a href="javascript:;"
                               @if($_member) onclick="javascript:window.open('{{ route('bbin.playGame') }}?pageSite=game','','width=1024,height=768')"
                               @else onclick="return layer.msg('请先登录!',{icon:6})" @endif>
                                <p class="pic">
                                    <img src="{{ asset('/web/images/app-bg-by1.png') }}" style="display: inline-block">
                                </p>
                                <p class="tit">波音厅</p>
                            </a>
                        </div>
                    </ul>
                </div>
                <div class="bd">
                    <div class="module" style="display: block">
                        <div class="bodylist">
                            <div class="egame_list">
                                @include("web.egame.$api_name") 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    	</div>
    </div>

    @include('web.layouts.aside')
    <script>
        (function ($) {
            $(function () {

                $('.egameslide').on('click', '.disabled', function () {
                    layer.msg('暂未开通，敬请期待！', {icon: 6});
                    return false;
                });
                jQuery(".egameslide").slide({trigger: "click", mainCell: ".bd"});


                $("img.lazy").lazyload({
                    placeholder: "{{ asset('/web/images/egame-loading.gif') }}",
                    effect: "fadeIn",
                    skip_invisible: false  //解决滚动才显示的问题
                });

                $('.hot_recommond li').on('mouseenter', function () {
                    $(this).addClass('on').siblings('li').removeClass('on');
                })


            });


        })(jQuery)
    </script>
@endsection