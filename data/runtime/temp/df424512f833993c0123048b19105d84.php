<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:37:"template/conch/html/comment/ajax.html";i:1594406774;}*/ ?>
<div class="hl-comm-input">
    <div class="hl-comm-avat"><img src="<?php echo mac_url_img(mac_default($user['user_portrait'],'static/images/touxiang.png')); ?>"/></div>
    <form class="hl-comm-form comment_form clearfix"  >
       <input type="hidden" name="comment_pid" value="0">
       <div class="hl-comm-write clearfix">
            <textarea class="hl-comm-content comment_content" name="comment_content" placeholder="文明发言，共建和谐社会"></textarea>
            <div class="hl-comm-handle clearfix">
                <a class="hl-comm-face hl-text-muted comment_face_panel" href="javascript:void(0)"><i class="iconfont hl-icon-biaoqing"></i></a>
                <div class="hl-comm-face-box hl-alert-box hl-bg-site hl-fadeIn comment_face_box">
                    <?php $__FOR_START_1006070464__=1;$__FOR_END_1006070464__=16;for($i=$__FOR_START_1006070464__;$i <= $__FOR_END_1006070464__;$i+=1){ ?>
                    <img data-id="<?php echo $i; ?>" src="/static/images/face/<?php echo $i; ?>.gif">
                    <?php } ?>
                </div>
                <div class="hl-comm-remaining hl-text-muted">还可以输入<span class="comment_remaining" >200</span></div>
                <input class="hl-comm-submit hl-bg-conch comment_submit" type="button" value="发布">
                <?php if($comment['verify'] == 1): ?>
                <img class="hl-comm-code" src="<?php echo mac_url('verify/index'); ?>" data-role="<?php echo mac_url('verify/index'); ?>" title="看不清楚? 换一张！" onClick="this.src=this.src+'?v=<?php echo time(); ?>'"/>
                <input class="hl-comm-verify hl-bg-subs" type="text" name="verify" placeholder="验证码"><?php endif; ?>
            </div>
        </div>
    </form>
</div>
<div class="hl-comm-list">
    <ul class="clearfix">
        <?php $__TAG__ = '{"num":"'.$comment['pagesize'].'","paging":"yes","half":"3","order":"desc","by":"id","id":"vo","key":"key"}';$__LIST__ = model("Comment")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <li class="hl-comm-each">
            <div class="hl-comm-avat"><img src="<?php echo mac_get_user_portrait($vo['user_id']); ?>"/></div>
            <div class="hl-comm-head">
                <span class="hl-comm-name hl-text-site"><?php echo $vo['comment_name']; ?></span>
                <span class="hl-comm-time hl-text-muted"><?php echo mac_friend_date($vo['comment_time']); ?></span>
            </div>
            <div class="hl-comm-cont">
                <div class="hl-comm-content hl-text-site"><?php echo mac_em_replace($vo['comment_content']); ?></div>
                <div class="hl-comm-action hl-text-muted clearfix">
                    <a class="digg_link" data-id="<?php echo $vo['comment_id']; ?>" data-mid="4" data-type="up" href="javascript:;"><i class="iconfont hl-icon-zanshang"></i><em class="digg_num"><?php echo $vo['comment_up']; ?></em></a>
                    <a data-id="<?php echo $vo['comment_id']; ?>" data-mid="4" data-type="down" href="javascript:;" class="digg_link" ><i class="iconfont hl-icon-zanxia"></i><em class="digg_num"><?php echo $vo['comment_down']; ?></em></a>
                    <a class="comment_reply" data-id="<?php echo $vo['comment_id']; ?>" href="javascript:;" >回复</a>
                    <a class="comment_report" data-id="<?php echo $vo['comment_id']; ?>" href="javascript:;">举报</a>	
                </div>
                <?php if(is_array($vo['sub']) || $vo['sub'] instanceof \think\Collection || $vo['sub'] instanceof \think\Paginator): if( count($vo['sub'])==0 ) : echo "" ;else: foreach($vo['sub'] as $key=>$child): ?>
                <div class="hl-comm-reply hl-comm-ry-child">
                    <div class="hl-comm-avat"><img src="<?php echo mac_get_user_portrait($child['user_id']); ?>"/></div>
                    <div class="hl-comm-cont">
                        <div class="hl-comm-content hl-text-site"><span class="hl-comm-name"><?php echo $child['comment_name']; ?></span>：<?php echo mac_em_replace($child['comment_content']); ?>&nbsp;&nbsp;<span class="hl-comm-time hl-text-muted"><?php echo mac_friend_date($child['comment_time']); ?></span></div>
                        <div class="hl-comm-action hl-text-muted clearfix">
                            <a data-id="<?php echo $child['comment_id']; ?>" data-mid="4" data-type="up" href="javascript:;" class="digg_link" ><i class="iconfont hl-icon-zanshang"></i><em class="digg_num"><?php echo $child['comment_up']; ?></em></a>
                            <a class="digg_link" data-id="<?php echo $child['comment_id']; ?>" data-mid="4" data-type="down" href="javascript:;"><i class="iconfont hl-icon-zanxia"></i><em class="digg_num"><?php echo $child['comment_down']; ?></em></a>
                            <a data-id="<?php echo $child['comment_id']; ?>" href="javascript:;" class="comment_report_child">举报</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    <?php if(empty($__PAGING__['record_total']) || (($__PAGING__['record_total'] instanceof \think\Collection || $__PAGING__['record_total'] instanceof \think\Paginator ) && $__PAGING__['record_total']->isEmpty())): ?>
    <div class="hl-empty-wrap hl-text-center hl-col-xs-12">
        <i class="iconfont hl-icon-wupinglun"></i><p>当前暂无评论，赶紧抢个沙发</p>
    </div>
    <?php endif; ?>
</div>

<?php if($__PAGING__['page_total']>1): ?>
<ul class="hl-page-wrap hl-text-center cleafix">
	<li class="hl-hide-sm"><a href="javascript:void(0);" onclick="MAC.Comment.Show(1)" title="首页"<?php if($__PAGING__['page_current']==1): ?> class="hl-disad"<?php endif; ?>><i class="iconfont hl-icon-jiantoushou"></i></a></li>
	<li><a href="javascript:void(0);" onclick="MAC.Comment.Show('<?php echo $__PAGING__['page_prev']; ?>')" title="上一页"<?php if($__PAGING__['page_current']==1): ?> class="hl-disad"<?php endif; ?>><span class="hl-hide-sm"><i class="iconfont hl-icon-jiantouzuo"></i></span><span class="hl-hidden-xs">上一页</span></a></li>
    <?php if($__PAGING__['page_current']>3): ?>
	<li class="hl-hidden-xs"><a href="javascript:void(0)" onclick="MAC.Comment.Show('1')"<?php if($__PAGING__['page_current']==1): ?> class="hl-disad"<?php endif; ?>>1</a></li>
	<li class="hl-hidden-xs hl-disad"><a class="hl-page-dot" href="javascript:;"><span>...</span></a></li>
	<?php endif; if(is_array($__PAGING__['page_num']) || $__PAGING__['page_num'] instanceof \think\Collection || $__PAGING__['page_num'] instanceof \think\Paginator): if( count($__PAGING__['page_num'])==0 ) : echo "" ;else: foreach($__PAGING__['page_num'] as $key=>$num): ?>
	<li class="hl-hidden-xs <?php if($__PAGING__['page_current'] == $num): ?>active<?php endif; ?>">
	    <?php if($__PAGING__['page_current'] == $num): ?>
        <a class="page_link page_current" href="javascript:;" title="第<?php echo $num; ?>页"><?php echo $num; ?></a>
        <?php else: ?>
        <a class="page_link" href="javascript:void(0)" onclick="MAC.Comment.Show('<?php echo $num; ?>')" title="第<?php echo $num; ?>页"><?php echo $num; ?></a>
        <?php endif; ?>
    </li>
	<?php endforeach; endif; else: echo "" ;endif; if($__PAGING__['page_current']<($__PAGING__['page_total']-2)): ?>
	<li class="hl-hidden-xs hl-disad"><a class="hl-page-dot" href="javascript:;"><span>...</span></a></li>
	<li class="hl-hidden-xs"><a href="javascript:void(0)" onclick="MAC.Comment.Show('<?php echo $__PAGING__['page_total']; ?>')"<?php if($__PAGING__['page_current']==$__PAGING__['page_total']): ?> class="hl-disad"<?php endif; ?>><?php echo $__PAGING__['page_total']; ?></a></li>
	<?php endif; ?>
	<li class="hl-page-tips hl-hide-sm active"><a href="javascript:;"><?php echo $__PAGING__['page_current']; ?>&nbsp;/&nbsp;<?php echo $__PAGING__['page_total']; ?></a></li>
	<li><a href="javascript:void(0)" onclick="MAC.Comment.Show('<?php echo $__PAGING__['page_next']; ?>')" title="下一页"<?php if($__PAGING__['page_current']==$__PAGING__['page_total']): ?> class="hl-disad"<?php endif; ?>><span class="hl-hide-sm"><i class="iconfont hl-icon-jiantouyou"></i></span><span class="hl-hidden-xs">下一页</span></a></li>
	<li class="hl-hide-sm"><a href="javascript:void(0)" onclick="MAC.Comment.Show('<?php echo $__PAGING__['page_total']; ?>')" title="尾页"<?php if($__PAGING__['page_current']==$__PAGING__['page_total']): ?> class="hl-disad"<?php endif; ?>><i class="iconfont hl-icon-jiantouwei"></i></a></li>
</ul><?php endif; ?>
<script type="text/javascript">
    var $input = $(".hl-comm-input .hl-comm-content"),
        $wrap = $(".hl-comm-input .hl-comm-write");
	$input.focus(function(){
		$wrap.addClass("hl-comm-start").addClass("hl-comm-focus");	
	});
    $input.blur(function(){
		$wrap.removeClass("hl-comm-focus");	
	});
</script>
<script type="text/javascript">
    $('.hl-total').html('<?php echo $__PAGING__['record_total']; ?>');
</script>