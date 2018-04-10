@extends('web.m3.layouts.main')
@section('after.js')

@endsection 

@section('content')



<div class="tai_header-bot ">
    <div class="wrapper">
        <div class="account-box">
        	<form method="POST" action="{{ route('member.login.post') }}">
                <input type="text" id="login_account" placeholder="账号" class="username" required name="name">
                <input type="password" id="login_password" placeholder="密码" class="psw" required name="password">
                <div class="check-code-wrapper">
                    <input type="text" placeholder="请输入验证码" required name="captcha" onfocus="re_captcha_re();">
                    <img onclick="javascript:re_captcha_re();" src="kit/captcha/1" tppabs="http://mb3.uc697.com/kit/captcha/1"
                         id="c2c98f0de5a04167a9e427d883690ff11"
                    style="display: inline-block;width: 80px;">
                    <script>
                        function re_captcha_re() {
                            $url = "http://mb3.uc697.com/kit/captcha";
                            $url = $url + "/" + Math.random();
                            document.getElementById('c2c98f0de5a04167a9e427d883690ff11').src=$url;
                        }
                    </script>
                </div>
                <button class="login-box modal-login_submit ajax-submit-btn" type="button">立即登录</button>
            </form>
    	</div>
    </div>
</div>

<div class="tai_banner"></div>

<div class="tai_news">
	<div class="container">
		<marquee behavior="scroll" direction="left" onMouseOut="this.start()"
			onMouseOver="this.stop()">
			<span>~摩�Game唯一联系方式~</span> <span>QQ:2697173363�2697173363</span>
		</marquee>
	</div>
</div>
<div class="tai_content">
	<div>
		<ul class="tai_game-box">
			<li class="game notLast"><a href="eGame.htm"
				tppabs="http://mb3.uc697.com/eGame"></a></li>
			<li class="live notLast"><a href="liveCasino.htm"
				tppabs="http://mb3.uc697.com/liveCasino"></a></li>
			<li class="sport notLast"><a href="esports.htm"
				tppabs="http://mb3.uc697.com/esports"></a></li>
			<li class="lottery notLast"><a href="lottory.htm"
				tppabs="http://mb3.uc697.com/lottory"></a></li>
			<li class="middle"><a
				href="javascript:if(confirm('http://www.guanzhu.mobi/app/bWBa  \n\n���ļ��޷��� Teleport Ultra ����, ��Ϊ ����һ�����·���ⲿ������Ϊ������ʼ��ַ�ĵ�ַ��  \n\n�����ڷ������ϴ���?'))window.location='http://www.guanzhu.mobi/app/bWBa'"
				tppabs="http://www.guanzhu.mobi/app/bWBa" target="_blank"></a></li>
		</ul>

		<ul class="tai_home-contact">
			<li class="phone">代理qq：<span>2697173363</span>
			</li>
<!-- 			<li class="phone">澳门热线� <span>摩�演�,联系Q�2697173363</span></li> -->
			<li class="email">邮箱：<span>2697173363@qq.com</span>
			</li>
			<li class="kefu">客服中心：<a href="javascript:;"
				onclick="javascript:window.open('http://wpa.qq.com/msgrd?v=3&uin=2697173363&site=qq&menu=yes','','width=1024,height=768')">
					SERVICE CENTER </a>
			</li>
		</ul>

		<ul class="branding-area">
			<li>
				<h2>国际顶级品牌</h2>
				<h3>亚洲博彩龙头企业</h3>
			</li>
			<li>
				<h2>国际顶级品牌</h2>
				<h3>亚洲博彩龙头企业</h3>
			</li>
			<li>
				<h2>国际顶级品牌</h2>
				<h3>亚洲博彩龙头企业</h3>
			</li>
			<li>
				<h2>国际顶级品牌</h2>
				<h3>亚洲博彩龙头企业</h3>
			</li>
		</ul>
	</div>
</div>

<script>


    (function ($) {
        $(function () {
            $(window).on('scroll',function(){
                var windowScroll = $('body').scrollTop();
                console.log(windowScroll);
                if(windowScroll>=310){
                    $('.tai_header-bot').addClass('scrollTop');
                }else{
                    $('.tai_header-bot').removeClass('scrollTop');
                }
            })

            $('.flexslider').flexslider({
                animation: 'fade',
                directionNav: false
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
<script id="jsID" type="text/javascript">

</script>

@endsection
