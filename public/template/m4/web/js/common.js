(function($){
	$().ready(function(){
		/*$('.level').animate({
			'width':$(this).attr('levelNum')
		},800)*/
		//设置美东时间
		function fixNum(num) {
			return (parseInt(num) < 10) ? ('0' + num) : num;
		}
		function time(vtime) {
			var s = '';
			var d = vtime != null ? new Date(vtime) : new Date();
			with (d) {
				s = fixNum(getHours()) + ':' + fixNum(getMinutes()) + ':' + fixNum(getSeconds())
			}
			return (s);
		}
		var dd2 = new Date();
		dd2.setTime(dd2.getTime()-11*60*60*1000);
		setInterval(RefTime, 1000);
		function RefTime() {
			dd2.setSeconds(dd2.getSeconds() + 1);
			var myYears = (dd2.getYear() < 1900) ? (1900 + dd2.getYear()) : dd2.getYear();

			document.getElementById("mdtime").innerHTML = "&nbsp;" + myYears + "/" + fixNum(dd2.getMonth() + 1) + "/" + fixNum(dd2.getDate()) + " " + time(dd2);

		}



		$('.level').each(function(){
			var levelNum=$(this).attr('levelNum');
			$(this).animate({
				'width':levelNum
			},800)
		})

		// $('.user_right').load('http://mb3.uc697.com/web/js/account_load.html')

		//header load
		$('.user_con').on('click','.userbasic_head a',function(){
			var loadUrl=$(this).attr('_href');
			$('.loading_shadow').show();
			$('.user_right').load(loadUrl,function(responseTxt,statusTxt,xhr){
				if(statusTxt=="success"){
					$('.loading_shadow').hide();
					$('.level').each(function(){
						var levelNum=$(this).attr('levelNum');
						$(this).animate({
							'width':levelNum
						},800)
					});
					//会员存款
					$('.bankchoose_list li:gt(5)').hide();
				}
			    if(statusTxt=="error"){
			    	alert("Error: "+xhr.status+": "+xhr.statusText);
			    	$('.loading_shadow').hide();
			    }
			      
			})
		})

		$('.user_con').on('click','.lock_list li .bot button',function(){
			var _this=$(this)
			$(this).hide();;
			$(this).next('.lock_line').show();
			$(this).next('.lock_line').children('.level').animate({
				'width':'100%'
			},800,function(){
				_this.addClass('success').show();
				_this.next('.lock_line').hide()
				_this.attr('disabled',true)
			})
		});

		$('.user_left').on('click','li',function(){
			$('.user_left li').removeClass('active');
			$(this).addClass('active');
		});

		$('.user_con').on('click','.toggle_more a',function(){
			$('.bankchoose_list li:gt(5)').toggle();
		})

		/*$('.user_con').on('click','.ways .show_bank',function(){
			$('.choosebank').show();
		})
		$('.user_con').on('click','.account_index .show_bank',function(){
			$('.choosebank').show();
			$('.green_pass').hide();
		})
		$('.user_con').on('click','.account_index .ways_box',function(){
			$('.account_index .ways_box').removeClass('active');
			$(this).addClass('active');
		})
		$('.user_con').on('click','.account_index .green_way',function(){
			$('.choosebank').show();
			$('.green_pass').show();
			$('.account_form .green_tips').show();

		})
		$('.user_con').on('click','.account_index .wechar_pay',function(){
			$('.choosebank').hide();
			$('.green_pass').hide();

		})*/
		$('.user_con').on('click','.account_index .wechar_pay',function(){
			$('.pay_toggle_tips').hide();

		})
		$('.user_con').on('click','.account_index .card_pay',function(){
			$('.pay_toggle_tips').show();

		})

		//nav 
		$(window).scroll(function(){
			navToggle();
			console.log('a');
		})
		navToggle();
		function navToggle(){
			if($('body').scrollTop()>=10){
				$('.header_hd').slideUp('fast');
				$('.header_bd').slideUp('fast');
				$('.nav').addClass('minnav');
			}else{
				$('.header_hd').slideDown('fast');
				$('.header_bd').slideDown('fast');
				$('.nav').removeClass('minnav');
			}
		}

		//egameslide
		$('.hot_recommond li').hover(function(){
			$('.hot_recommond li').removeClass('on');
			$(this).addClass('on');
		})

		//收藏 egame
		var offset = $(".love").offset(); 
		console.log(offset);
	    $(".addcar").click(function(event){ 
	        var addcar = $(this); 
	        var img = addcar.parents('.scrollLoading').find('img').attr('src'); 
	        var flyer = $('<img class="u-flyer" src="'+img+'">'); 
	        flyer.fly({ 
	            start: { 
	                left: event.pageX, //开始位置（必填）#fly元素会被设置成position: absolute 
	                top: event.pageY //开始位置（必填） 
	            }, 
	            end: { 
	                left: offset.left+50, //结束位置（必填） 
	                top: offset.top, //结束位置（必填） 
	                width: 0, //结束时宽度 
	                height: 0 //结束时高度 
	                

	            }, 
	            speed: 1.1, 
	            onEnd: function(){ //结束回调 
	                /*addcar.css("cursor","default").removeClass('orange').unbind('click'); 
	                this.destory(); //移除dom */
	               
	            } 
	        }); 
	    }); 
		

	})
})(jQuery);
































