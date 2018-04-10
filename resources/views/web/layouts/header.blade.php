<!--登录模态框-->
@if (session('msg_ok')|| session('msg_no') || $errors->any())
    <script>
        var content = "{{ session('msg_no') }}";
        $(function () {
            layer.msg(content, {icon:6})
        })
    </script>
@endif

<!--半透明遮罩层-->
<div class="backdrop"></div>


<div class="tai_header">
    <div class="tai_header-top">
        <div class="container">
            <div class="language">
                <span class="pic01"></span>
            </div>
            <div class="div-tel">
                <span style="margin-left: 10px;">美东时间: <em id="mdtime"></em></span>
            </div>
        </div>
    </div>
    <div class="tai_nav">
        <span class="logo-bg">
            <img src="" alt="">
        </span>
        <ul class="pullRight">
            <li  @if($web_route == 'web.index') class="on" @endif >
                <a href="{{ route('web.index') }}" >首页
                    <span>HOME</span>
                </a>
            </li>
            <li @if($web_route == 'web.liveCasino') class="on" @endif>
                <a href="{{ route('web.liveCasino') }}"> 真人视讯
                    <span>LIVE CASINO</span>
                </a>
            </li>
            <li @if($web_route == 'web.lottory') class="on" @endif>
                <a href="{{ route('web.lottory') }}" >  彩票游戏
                    <span>LOTTORY</span>
                </a>
            </li>
            <li @if($web_route == 'web.egame') class="on" @endif>
                <a href="{{ route('web.egame') }}" >电子游艺
                    <span>EGAMES</span>
                </a>
            </li>
            <li @if($web_route == 'web.catchFish') class="on" @endif>
                <a href="{{ route('web.catchFish') }}" >  捕鱼游戏
                    <span>CATCHFISH</span>
                </a>
            </li>
            <li @if($web_route == 'web.esports') class="on" @endif>
                <a href="{{ route('web.esports') }}" >体育游戏
                    <span>ESPORTS</span>
                </a>
            </li>
           
           
<!--             <li> 
                <a href="javascript:;"  onclick="javascript:window.open('http://wpa.qq.com/msgrd?v=3&uin=2697173363&site=qq&menu=yes','','width=1024,height=768')">
<!--                     	在线客服 -->
<!--                     <span>SERVICE</span> -->
<!--                 </a> -->
<!--             </li> -->
        </ul>
    </div>
</div>
@include('web.m3.common.login') 
<script>
    (function ($) {
        $(function () {
//             $(window).on('scroll',function(){
//                 var windowScroll = $('body').scrollTop();
//                 console.log(windowScroll);
//                 if(windowScroll>=310){
//                     $('.tai_header-bot').addClass('scrollTop');
//                 }else{
//                     $('.tai_header-bot').removeClass('scrollTop');
//                 }
//             })

            $('.flexslider').flexslider({
                animation: 'fade',
                directionNav: false
            });

            $('.menuBox').on('click', 'li', function () {
                var index = $(this).index();
                var $contentBox_item=$(this).closest('.menuBox').next('.contentBox').find('.contentBox_item');
                $(this).addClass('on').siblings('li').removeClass('on');
                $contentBox_item.removeClass('on').eq(index).addClass('on');
            });

            //公告
            $('#mar0').on('click',function(){
                var notice_index=layer.open({
                    type: 1,
                    title: false,
                    closeBtn: 0,
                    area: ['680px'],
                    skin: 'layui-layer-nobg', //没有背景�
                    shadeClose: true,
                    content: $('.notice_layer')
                });

                $('.notice_layer').on('click','.close',function(){
                    layer.close(notice_index)
                })
            })


            //superslide
           /* jQuery(".txtScroll-top").slide({mainCell:".bd ul",autoPage:true,effect:"top",autoPlay:true,vis:9,pnLoop:true});*/

           //superslide
           var listMarqueIndex=0;
           var listMarqueShow=7;  //要显示的个数
           var listMarqueLength=$('.txtScroll-top .ntb-egzj li').length;  //总共显示的条�
           if(listMarqueLength>listMarqueShow){  //大于要显示的个数才执行动�
            var listMarque=setInterval(function(){

                console.log(listMarqueIndex);
                if(listMarqueLength-listMarqueIndex>listMarqueShow){
                    listMarqueIndex++;
                    $('.txtScroll-top .ntb-egzj li').removeClass('on')
                    $('.txtScroll-top .ntb-egzj li').eq(listMarqueIndex).addClass('on');
                    $('.txtScroll-top .ntb-egzj').animate({
                    "top":"-=45px"
                   },800);
                }else{
                    $('.txtScroll-top .ntb-egzj').animate({"top":'0'})
                    listMarqueIndex=0;
                    $('.txtScroll-top .ntb-egzj li').removeClass('on')
                    $('.txtScroll-top .ntb-egzj li').eq(listMarqueIndex).addClass('on')
                }
               },4000);
           }

            $('.disabled').on('click', function () {
                layer.msg('暂未�放，敬请期待', {icon: 6});
            });
        })
    })(jQuery)
</script>

