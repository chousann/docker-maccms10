

;(function($){var LM=function(ele,options){this.$element=ele
this.defaults={}
this.settings=$.extend({},this.defaults,options)}
LM.prototype={menu:function(){var _this=this.$element
var LI_HEIGHT=_this.find('.f2 li').height()+parseInt(_this.find('.f2 li').css('padding-top'))+parseInt(_this.find('.f2 li').css('padding-bottom'))
$('.menu-dark-backdrop').on('click',function(){if(_this.hasClass('menu-open')){_this.removeClass('menu-open')
$('.menu-dark-backdrop').removeClass('in').off()
$('body').css("overflow","auto")
_this.find('li.hasChild').removeClass('open').off().find('div').css({"height":0})
_this.scrollTop(0)}else{_this.addClass('menu-open')
$('.menu-dark-backdrop').addClass('in')
$('body').css("overflow","hidden")}})
_this.find('li.hasChild').on('click',function(e){if($(e.target)[0].nodeName=='LI'){var et=$(e.target)}else{var et=$(e.target).parent()
while(et[0].nodeName!='LI'){et=et.parent()}}
location.href=et.find('a').eq(0).attr("href")
if($(et).hasClass('open')){$(et).removeClass('open').find('li').removeClass('open')}else{$(et).addClass('open').siblings().removeClass('open').find('li').removeClass('open')}
var _index=$(et).children().eq(1).children().children().length
if(!$(et).hasClass('open')){$(et).children().eq(1).css({"height":0})
$(et).find('div').css({"height":0})
if($(et).parent().parent().hasClass("f2")){var _parentHeight=$(et).parent().children().length*LI_HEIGHT
$(et).parent().parent().css({"height":_parentHeight+"px"})}}else{var _divHeight=_index*LI_HEIGHT
$(et).children().eq(1).css({"height":_divHeight+"px"})
if($(et).parent().parent().hasClass("f2")){var _parentHeight=$(et).parent().children().length*LI_HEIGHT
_parentHeight=parseInt(_parentHeight)+_divHeight
$(et).parent().parent().css({"height":_parentHeight+"px"})}
$(et).siblings().find('div').css({"height":0})}
if(e&&e.stopPropagation){e.stopPropagation()}else{window.event.cancelBubble=true}
e.preventDefault()})},init:function(){var $btn=$(this.settings.triggerBtn)
var obj=this
$btn.click(function(){if(!$('body').find('div').hasClass('menu-dark-backdrop')){$('body').prepend('<div class="menu-dark-backdrop"></div>')}
if(obj.$element.hasClass('menu-open')){obj.$element.removeClass('menu-open')
$('.menu-dark-backdrop').removeClass('in').off()
$('body').css({"overflow":"auto"})
$('body').css("overflow","auto")
obj.$element.find('li').removeClass('open').off().find('div').css({"height":0})
obj.$element.scrollTop(0)}else{obj.$element.addClass('leftMenu').addClass('menu-open')
$('.menu-dark-backdrop').addClass('in')
$('body').css({"overflow":"hidden"})
obj.menu()}})}}
$.fn.leftMenu=function(options){var lm=new LM(this,options)
lm.$element.addClass('leftMenu')
return lm}}(jQuery))