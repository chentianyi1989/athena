

<div class="tai_header-bot scrollTop ">
    <div class="wrapper">
    	
    	
            <div class="account-box">
            
            @if (Auth::guard('member')->guest())
    			<form method="POST" action="{{ route('member.login.post') }}">
                    <input type="text" id="login_account" placeholder="账号" class="username" required name="name">
                    <input type="password" id="login_password" placeholder="密码" class="psw" required name="password">
                    <button class="login-box modal-login_submit ajax-submit-btn" type="button">立即登录</button>
                    <a href="{{  route('web.register_one')  }}?i_code=10000" class="join-btn">免费开户</a>
                </form>
            @else   
                <div class="">
                    <ul class="account-info">
                        <li> 帐号 :
                            <span class="account">{{ $_member->name }}</span>
                        </li>
                        <li>  账户余额 :
                            <span class="account">${{ $_member->money }}</span>
                        </li>
                        <li>  邀请码 :
                            <span class="account">{{ $_member->invite_code }}</span>
                        </li>
                    </ul>
                    <ul class="account-nav">
                        <li>
                            <a href="{{ route('member.userCenter') }}">个人中心</a>
                        </li>
    					<li>
    						<a href="{{ route('member.member_drawing') }}"> 线上取款 </a>
    					</li>
    					<li>
    						<a href="{{ route('member.finance_center') }}"> 线上存款 </a>
    					</li>
    					<li>
    						<a href="{{ route('member.indoor_transfer') }}"> 额度转换 </a>
    					</li>
    					
<!--     					<li> -->
<!--     						<a href="http://mb3.uc697.com/member/safe_psw"> 修改取款密码 </a> -->
<!--     					</li> -->
<!--     					<li> -->
<!--     						<a href="http://mb3.uc697.com/member/login_psw"> 修改密碼 </a> -->
<!--     					</li> -->
				</ul>
                    <div class="action-box">
                        <a class="logout-btn quit_btn" href="http://mb3.uc697.com/member/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        	登出</a>
                    </div>
                    <form id="logout-form" action="{{ route('member.logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
                @endif
        	</div>
    </div>
</div>

