<?php if (!defined('THINK_PATH')) exit(); /*a:13:{s:36:"template/conch/html/public/jump.html";i:1592822080;s:50:"/var/www/html/template/conch/html/public/meta.html";i:1646145371;s:53:"/var/www/html/template/conch/html/public/include.html";i:1627651980;s:50:"/var/www/html/template/conch/html/public/head.html";i:1627644338;s:50:"/var/www/html/template/conch/html/ads/ads-top.html";i:1595406136;s:57:"/var/www/html/template/conch/html/widget/search-form.html";i:1593675890;s:51:"/var/www/html/template/conch/html/public/menus.html";i:1595573070;s:50:"/var/www/html/template/conch/html/widget/icon.html";i:1586076696;s:50:"/var/www/html/template/conch/html/public/foot.html";i:1627652006;s:54:"/var/www/html/template/conch/html/public/footnavs.html";i:1594799406;s:54:"/var/www/html/template/conch/html/widget/iconfill.html";i:1586596582;s:53:"/var/www/html/template/conch/html/ads/ads-double.html";i:1595406110;s:53:"/var/www/html/template/conch/html/ads/ads-bottom.html";i:1595406090;}*/ ?>
<!DOCTYPE html>
<html>
<head>


<?php $version = parse_ini_file(substr($maccms['path_tpl'], strlen($maccms['path'])).'info.ini'); $version = stristr('127.0.0|192.168', substr($_SERVER['HTTP_HOST'], 0, 7)) == true ? time() : $version['version']; $file = 'template/conch/asset/admin/Conch.php'; $newfile = 'application/admin/controller/Conch.php'; if (file_exists($newfile)) {} else { copy($file,$newfile); } $file = 'template/conch/asset/admin/conchvip.php'; $newfile = 'application/extra/conchvip.php'; if (file_exists($newfile)) {} else { copy($file,$newfile); } $file = 'template/conch/asset/admin/theme.html'; $dir = 'application/admin/view/conch'; $newfile = 'application/admin/view/conch/theme.html'; if (file_exists($dir)) {} else { mkdir($dir, 0777); copy($file,$newfile); } $conch = file_exists('application/extra/conchvip.php') ? require('application/extra/conchvip.php') : require(substr($maccms['path_tpl'], strlen($maccms['path'])).'asset/admin/conchvip.php'); ?>






<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10" />
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>系统提示......</title>
<link rel="apple-touch-icon-precomposed" sizes="180x180" href="<?php echo mac_url_img(mac_default($conch['theme']['logo']['webapp'],substr($maccms['path_tpl'], strlen($maccms['path'])).'asset/img/ios_fav.png')); ?>">
<link rel="shortcut icon" href="<?php echo mac_url_img(mac_default($conch['theme']['logo']['icon'],substr($maccms['path_tpl'], strlen($maccms['path'])).'asset/img/favicon.png')); ?>" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" href="<?php echo $maccms['path_tpl']; ?>asset/css/style.css?v=<?php echo $version; ?>">
<?php if($conch['theme']['style']['color']==1): ?>
<link rel="stylesheet" type="text/css" href="<?php echo $maccms['path_tpl']; ?>asset/css/black.css?v=<?php echo $version; ?>" name="color">
<?php else: ?><link rel="stylesheet" type="text/css" href="<?php echo $maccms['path_tpl']; ?>asset/css/white.css?v=<?php echo $version; ?>" name="color"><?php endif; ?>
<link rel="stylesheet" type="text/css" href="<?php echo $maccms['path_tpl']; ?>asset/css/swiper.min.css">
<style type="text/css"><?php if($conch['theme']['lazy']): ?>.hl-br-thumb,.hl-item-thumb{background-image:url("<?php echo mac_url_img($conch['theme']['lazy']); ?>");background-repeat: no-repeat;}<?php endif; if($conch['theme']['img']['radius']): ?>.conch-banner .conch-br-box .hl-br-thumb,.conch-content .hl-row-box .hl-item-thumb,.conch-content .hl-vod-rank .hl-rank-box,.conch-content .hl-article-main .hl-article-box img,.conch-content .hl-detail-side,.conch-content .hl-row-box .hl-topic-list .hl-item-wrap:after,.hl-topic-list .hl-item-wrap:before,.conch-ads-box{border-radius:<?php echo $conch['theme']['img']['radius']; ?>px;}.conch-content .hl-vod-rank .hl-rank-list .hl-item-thumb,.conch-content .hl-new-items .hl-item-thumb{border-radius:<?php echo $conch['theme']['img']['radius']/2; ?>px;}<?php endif; ?><?php echo $conch['theme']['style']['custom']; ?></style>
<?php if($conch['theme']['color']['has']==1): ?>
<style type="text/css">
@keyframes rectangle{0%,100%,80%{height:6px;-webkit-box-shadow:0 0 <?php echo $conch['theme']['color']['site']; ?>;box-shadow:0 0 <?php echo $conch['theme']['color']['site']; ?>;}
40%{height:6px;-webkit-box-shadow:0 -4px <?php echo $conch['theme']['color']['site']; ?>;box-shadow:0 -4px <?php echo $conch['theme']['color']['site']; ?>;}}
.conch-content .hl-row-box .hl-site-tabs a.active,.conch-content .hl-tool-icon a.disabled,.conch-content .hl-type-name a.active,.conch-header .conch-menus ul>li>a.active,.conch-header .conch-menus ul>li>a.active>i,.conch-results li strong,.hl-btn-border,.hl-text-conch{color:<?php echo $conch['theme']['color']['site']; ?>;}
.conch-banner .swiper-pagination-bullet-active,.conch-content .hl-play-source .hl-plays-from a.active:after,.conch-content .hl-play-source .hl-plays-list li>a>em::after,.conch-content .hl-play-source .hl-plays-list li>a>em::before,.conch-content .hl-row-box .hl-actor-sm li.active .hl-item-link:after,.conch-content .hl-row-box .hl-pic-tag span,.conch-content .hl-row-box .hl-site-tabs a.active::after,.conch-footer .hl-foot-extra .hl-fe-list a span,.conch-header .conch-menus ul>li>a.active em,.hl-bg-conch,.hl-page-wrap li a.active{background:<?php echo $conch['theme']['color']['site']; ?>;}
.conch-input:checked{background-color:<?php echo $conch['theme']['color']['site']; ?>;}
.conch-content .hl-conch-items,.conch-content .hl-row-box .hl-actor-sm li.active .hl-item-link,.conch-content .hl-row-box .hl-rb-title i,.conch-content .hl-row-box .hl-week-item .hl-tabs-btn.active,.conch-content .hl-smnav-home .hl-smnav-item a>i,.conch-header .conch-hasconch,.hl-btn-gradient{background:<?php echo $conch['theme']['color']['site']; ?>;background:-webkit-gradient(linear,left top,right top,from(<?php echo $conch['theme']['color']['site']; ?>),to(<?php echo $conch['theme']['color']['subs']; ?>));background:-webkit-linear-gradient(left,<?php echo $conch['theme']['color']['site']; ?>,<?php echo $conch['theme']['color']['subs']; ?>);background:-o-linear-gradient(left,<?php echo $conch['theme']['color']['site']; ?> 0,<?php echo $conch['theme']['color']['subs']; ?> 100%);background:linear-gradient(90deg,<?php echo $conch['theme']['color']['site']; ?>,<?php echo $conch['theme']['color']['subs']; ?>);}
.conch-content .hl-row-box .hl-rb-title i,.conch-content .hl-smnav-home .hl-smnav-item a>i{color:transparent!important;-webkit-background-clip:text!important;}
.conch-input:checked,.hl-btn-border,.hl-comm-form .hl-comm-focus,.hl-msg-jump .btn a.cz,.hl-page-wrap li a.active,.hl-player-popeom a.cz{border-color:<?php echo $conch['theme']['color']['site']; ?>!important;}
@media (min-width: 768px) {
.conch-content .hl-new-items .hl-rank-list li a:hover .hl-item-title,.conch-content .hl-row-box .hl-actor-list.hl-actor-one a:hover .hl-item-title,.conch-content .hl-row-box .hl-list-item:hover .hl-item-title a,.conch-content .hl-search-form .hl-search-submit:hover,.conch-header .conch-menus ul>li>a:hover>i,.conch-header .conch-hasconch .conch-search .hl-search-submit:hover,.hl-alert-items:hover>a,.hl-filter-opted li:hover,.hl-public-box .hl-public-item a:hover .hl-item-title,.hl-text-hover:hover,a:active,a:focus,a:hover{color:<?php echo $conch['theme']['color']['site']; ?>;}
.conch-content .hl-row-box .hl-pic-icon i:hover,.conch-footer .hl-foot-extra .hl-fe-list a:hover,.conch-hasbg .conch-headwrap.conch-hasconch:not(.fixed) .conch-search .hl-search-submit:hover,.conch-header .conch-menus ul>li>a:hover>em,.conch-header .conch-headwrap:not(.conch-hasconch) .conch-search .hl-search-submit:hover,.hl-btn-border:hover,.hl-btn-gradient:hover{background:<?php echo $conch['theme']['color']['site']; ?>;}
.conch-content .hl-row-box .hl-actor-list.hl-actor-sm .hl-item-link:hover,.conch-content .hl-smnav-item a:hover,.conch-hasbg .conch-headwrap.conch-hasconch:not(.fixed) .conch-search .hl-search-submit,.conch-header .conch-headwrap:not(.conch-hasconch) .conch-search .hl-search-submit,.hl-bg-hover:hover{background:<?php echo $conch['theme']['color']['site']; ?>;background:-webkit-gradient(linear,left top,right top,from(<?php echo $conch['theme']['color']['site']; ?>),to(<?php echo $conch['theme']['color']['subs']; ?>));background:-webkit-linear-gradient(left,<?php echo $conch['theme']['color']['site']; ?>,<?php echo $conch['theme']['color']['subs']; ?>);background:-o-linear-gradient(left,<?php echo $conch['theme']['color']['site']; ?> 0,<?php echo $conch['theme']['color']['subs']; ?> 100%);background:linear-gradient(90deg,<?php echo $conch['theme']['color']['site']; ?>,<?php echo $conch['theme']['color']['subs']; ?>);}
.hl-comm-form .hl-comm-write:hover,.hl-filter-opted li:hover,.hl-page-small .hl-page-btns a:hover,.hl-page-wrap li a:hover{border-color:<?php echo $conch['theme']['color']['site']; ?>;}
}
</style>
<?php endif; ?>
<script type="text/javascript">
var maccms={"path":"","mid":"<?php echo $maccms['mid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};
var conchtpl={"surl":"<?php echo mac_url('vod/search'); ?>","tipt":"<?php echo $conch['theme']['tips']['title']; ?>","tipc":"<?php echo $conch['theme']['tips']['content']; ?>","slink":"<?php echo $conch['theme']['share']['link']; ?>","short":"<?php echo $conch['theme']['share']['short']; ?>","api":"<?php echo $conch['theme']['share']['api']; ?>",<?php if($conch['theme']['share']['api']==1): ?>"aurl":"<?php echo $conch['theme']['share']['apiurl']; ?>",<?php else: ?>"tok":"<?php echo $conch['theme']['share']['tok']; ?>","term":"<?php echo $conch['theme']['share']['term']; ?>",<?php endif; ?>"ver":"<?php echo $version; ?>"}
</script>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>asset/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>asset/js/conch.set.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>asset/js/conch.vip.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="<?php echo $maccms['path']; ?>static/js/home.js"></script>
<?php if($maccms['mid']==6): ?>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>asset/js/set/formValidator.js"></script>
<script type="text/javascript" src="<?php echo $maccms['path']; ?>static/js/jquery.imageupload.js"></script><?php endif; ?>
<?php echo $conch['theme']['script']['custom']; ?>

</head>
<body>
<?php if($conch['theme']['ads']['btn']==1): if($conch['theme']['ads']['vip']==1&&$user['group_id'] > 2): else: if($conch['theme']['ads']['top']!=''): ?>
<div id="ad1001" class="conch-ads-box hl-this-box clearfix">
    <a class="hl-close-this" href="javascript:void(0)"><i class="iconfont hl-icon-cuo"></i></a>
    <div class="ads ads-top"><?php echo $conch['theme']['ads']['top']; ?></div>
    <?php if($conch['theme']['ads']['tip']==1): ?><span class="hl-ad-tip">广告</span><?php endif; ?>
</div>
<?php endif; endif; endif; ?>
<div id="conch-header" class="conch-header">
    <div class="conch-headwrap<?php if($maccms['aid']==13||$maccms['aid']==23||$maccms['aid']==33||$maccms['aid']==83||$maccms['aid']==93||$maccms['aid']==103||$maccms['aid']==113||$conch['theme']['nav']['has']==1): ?> conch-hasconch<?php endif; if($maccms['aid']==14||$maccms['aid']==15||$maccms['aid']==16||$maccms['aid']==24||$maccms['aid']==34||$maccms['aid']==84): ?> hl-hidden-xs<?php endif; ?>">
        <div class="container">
            <div class="conch-logo">
                <a class="hl-logo hl-logo-black" style="background-image: url(<?php echo mac_url_img(mac_default($conch['theme']['logo']['black'],substr($maccms['path_tpl'], strlen($maccms['path'])).'asset/img/logo_black.png')); ?>);" href="<?php echo $maccms['path']; ?>"></a>
                <a class="hl-logo hl-logo-white" style="background-image: url(<?php echo mac_url_img(mac_default($conch['theme']['logo']['white'],substr($maccms['path_tpl'], strlen($maccms['path'])).'asset/img/logo_white.png')); ?>);" href="<?php echo $maccms['path']; ?>"></a>
            </div>
            <div class="conch-list conch-content">
                <ul class="hl-list hl-text-muted clearfix">
                    <?php if(in_array(a, explode(',',$conch['nav']['top']['PC']))||in_array(a, explode(',',$conch['nav']['top']['mobile']))): ?>
                    <li class="hl-list-font hl-list-history hl-alert-items hl-full-items<?php if(strpos($conch['nav']['top']['PC'],'a')===false): ?> hl-hide-sm<?php endif; if(strpos($conch['nav']['top']['mobile'],'a')===false): ?> hl-hidden-xs<?php endif; ?>">
                        <a href="javascript:void(0)" class="history hl-full-op" title="<?php echo $conch['nav']['top']['history']['title']; ?>"><i class="iconfont hl-icon-shijian"></i></a>
                        <div class="hl-history-box hl-alert-box hl-full-alert hl-full-x100 hl-bg-site hl-fadeIn-sm">
                            <div class="hl-hy-warp hl-row-box<?php if($GLOBALS['config']['user']['status'] == 1): ?> hl-user-log<?php endif; ?>">
                                <div class="hl-hy-title hl-full-head">
                                   <a class="hl-close-full hl-hide-sm hl-text-muted" href="javascript:void(0)"><i class="iconfont hl-icon-cuo"></i></a>
                                    <span><?php echo $conch['nav']['top']['history']['title']; ?></span>
                                </div>
                                <div class="hl-hy-list hl-public-box hl-sm-box">
                                    <ul class="hl-public-vod row clearfix" id="hl-history"></ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php endif; if(in_array(b, explode(',',$conch['nav']['top']['PC']))||in_array(b, explode(',',$conch['nav']['top']['mobile']))): ?>
                    <li class="hl-list-font hl-list-qrcode hl-alert-items hl-pops-items<?php if(strpos($conch['nav']['top']['PC'],'b')===false): ?> hl-hide-sm<?php endif; if(strpos($conch['nav']['top']['mobile'],'b')===false): ?> hl-hidden-xs<?php endif; ?>">
                        <a href="javascript:void(0)" title="<?php echo $conch['nav']['top']['qrcode']['title']; ?>"><i class="iconfont <?php echo $conch['nav']['top']['qrcode']['code']; ?>"></i></a>
                        <div class="hl-alert-box hl-bg-site hl-fadeIn-sm">
                            <div class="hl-qrcode-wrap">
                                <p class="hl-qrcode-pic"><img src="<?php echo mac_url_img($conch['nav']['top']['qrcode']['pic']); ?>"></p>
                                <p class="hl-text-muted"><?php echo $conch['nav']['top']['qrcode']['tips']; ?></p>
                            </div>
                        </div>
                    </li>
                    <?php endif; if(in_array(c, explode(',',$conch['nav']['top']['PC']))||in_array(c, explode(',',$conch['nav']['top']['mobile']))): ?>
                    <li class="hl-list-font<?php if(strpos($conch['nav']['top']['PC'],'c')===false): ?> hl-hide-sm<?php endif; if(strpos($conch['nav']['top']['mobile'],'c')===false): ?> hl-hidden-xs<?php endif; ?>">
                        <a href="<?php echo $conch['nav']['mid']['link-3']; ?>" title="{<?php echo $conch['nav']['mid']['title-3']; ?>|mac_default='专题'}"><i class="iconfont hl-icon-zhuanti"></i></a>
                    </li>
                    <?php endif; if(in_array(d, explode(',',$conch['nav']['top']['PC']))||in_array(d, explode(',',$conch['nav']['top']['mobile']))): ?>
                    <li class="hl-list-font<?php if(strpos($conch['nav']['top']['PC'],'d')===false): ?> hl-hide-sm<?php endif; if(strpos($conch['nav']['top']['mobile'],'d')===false): ?> hl-hidden-xs<?php endif; ?>">
                        <a href="<?php echo $conch['nav']['aid']['link-2']; ?>" title="<?php echo mac_default($conch['nav']['aid']['title-2'],'最新'); ?>"><i class="iconfont hl-icon-zuixin"></i></a>
                    </li>
                    <?php endif; if(in_array(e, explode(',',$conch['nav']['top']['PC']))||in_array(e, explode(',',$conch['nav']['top']['mobile']))): ?>
                    <li class="hl-list-font<?php if(strpos($conch['nav']['top']['PC'],'e')===false): ?> hl-hide-sm<?php endif; if(strpos($conch['nav']['top']['mobile'],'e')===false): ?> hl-hidden-xs<?php endif; ?>">
                        <a href="<?php echo $conch['nav']['aid']['link-7']; ?>" title="<?php echo mac_default($conch['nav']['aid']['title-7'],'排行'); ?>"><i class="iconfont hl-icon-paihang"></i></a>
                    </li>
                    <?php endif; if(in_array(f, explode(',',$conch['nav']['top']['PC']))||in_array(f, explode(',',$conch['nav']['top']['mobile']))): ?>
                    <li class="hl-list-font<?php if(strpos($conch['nav']['top']['PC'],'f')===false): ?> hl-hide-sm<?php endif; if(strpos($conch['nav']['top']['mobile'],'f')===false): ?> hl-hidden-xs<?php endif; ?>">
                        <a href="<?php echo $conch['nav']['top']['custom']['link']; ?>" title="<?php echo $conch['nav']['top']['custom']['title']; ?>" target="_blank"><i class="iconfont <?php echo $conch['nav']['top']['custom']['code']; ?>"></i></a>
                    </li>
                    <?php endif; if($GLOBALS['config']['user']['status']==1&&(in_array(h, explode(',',$conch['nav']['top']['PC']))||in_array(h, explode(',',$conch['nav']['top']['mobile'])))): ?>
                    <li class="hl-list-font hl-alert-items hl-user-items<?php if(strpos($conch['nav']['top']['PC'],'h')===false): ?> hl-hide-sm<?php endif; if(strpos($conch['nav']['top']['mobile'],'h')===false): ?> hl-hidden-xs<?php endif; ?>">
                        <a class="conch-user" href="javascript:void(0)" title="<?php echo mac_default($conch['nav']['top']['user']['title'],'登陆'); ?>"><i class="iconfont hl-icon-huiyuan"></i></a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div> <?php if($maccms['aid']!=13&&$maccms['aid']!=23&&$maccms['aid']!=33&&$maccms['aid']!=83&&$maccms['aid']!=93&&$maccms['aid']!=103&&$maccms['aid']!=113): ?>
            <div class="conch-search">
                <div class="hl-search-focus hl-full-op"></div>
                <form class="hl-search hl-text-site<?php if($conch['theme']['search']['select']==1): ?> hl-search-selop<?php endif; ?>" name="search" method="get" action="<?php if($maccms['mid']==2): ?><?php echo mac_url('art/search'); elseif($maccms['mid']==8): ?><?php echo mac_url('actor/search'); else: ?><?php echo mac_url('vod/search'); endif; ?>" onsubmit="return qrsearch();">
    <a href="javascript:;" class="hl-search-select hl-text-subs">
        <?php if($maccms['mid']==2): ?>
        <span class="hl-ss-text" data-mid="2">文章</span><?php elseif($maccms['mid']==8): ?>
        <span class="hl-ss-text" data-mid="8">明星</span><?php else: ?>
        <span class="hl-ss-text" data-mid="1">视频</span><?php endif; ?>
        <i class="iconfont hl-icon-jiantouxia"></i>
    </a>
    <input id="hl-search-text" class="hl-search-text hl-search-wd<?php if($maccms['aid']!=13&&$maccms['aid']!=23&&$maccms['aid']!=33&&$maccms['aid']!=83&&$maccms['aid']!=93&&$maccms['aid']!=103&&$maccms['aid']!=113): ?> hl-search-top<?php endif; ?>" type="text" name="wd" value="<?php echo $param['wd']; ?>" placeholder="<?php echo mac_default($conch['theme']['search']['tips'],'请输入关键字'); ?>">
    <button id="hl-search-submit" class="hl-search-submit" type="submit" name="submit"><i class="iconfont hl-icon-sousuo"></i><span class="hl-hidden-xs">&nbsp;搜索</span></button>
</form>
<?php if($conch['theme']['search']['select']==1): ?>
<div class="hl-alert-box hl-ss-box hl-bg-site hl-fadeIn">
   <div class="hl-ss-item">
        <?php if(in_array(a, explode(',',$conch['theme']['search']['filter']))): ?>
        <span class="hl-text-site hl-text-hover" data-mid="1" data-action="<?php echo mac_url('vod/search'); ?>">视频</span><?php endif; if(in_array(b, explode(',',$conch['theme']['search']['filter']))): ?>
        <span class="hl-text-site hl-text-hover" data-mid="2" data-action="<?php echo mac_url('art/search'); ?>">文章</span><?php endif; if(in_array(c, explode(',',$conch['theme']['search']['filter']))): ?>
        <span class="hl-text-site hl-text-hover" data-mid="8" data-action="<?php echo mac_url('actor/search'); ?>">明星</span><?php endif; ?>
   </div>
</div><?php endif; ?>
                <div class="hl-full-items">
                <div class="hl-alert-box hl-sh-box hl-full-alert hl-full-x100 hl-bg-site hl-fadeIn-sm">
                   <div class="hl-sh-search hl-hide-sm">
                    <form class="hl-search hl-text-site<?php if($conch['theme']['search']['select']==1): ?> hl-search-selop<?php endif; ?>" name="search" method="get" action="<?php if($maccms['mid']==2): ?><?php echo mac_url('art/search'); elseif($maccms['mid']==8): ?><?php echo mac_url('actor/search'); else: ?><?php echo mac_url('vod/search'); endif; ?>" onsubmit="return qrsearch();">
                        <input class="hl-search-text hl-search-wd" type="text" name="wd" value="<?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?><?php echo $param['year']; ?><?php echo $param['class']; ?>" placeholder="<?php echo mac_default($conch['theme']['search']['tips'],'请输入关键字'); ?>">
                        <button class="hl-search-submit" type="submit" name="submit"><i class="iconfont hl-icon-sousuo"></i></button>
                        <a href="javascript:;" class="hl-close-full">取消</a>
                    </form>
                   </div>
                   <div class="hl-sh-wrap">
                       <div class="hl-sh-item">
                            <div class="hl-sh-title">推荐搜索</div>
                            <ul class="hl-sh-list clearfix">
                                <?php $_6421934796a30=explode(',',$maccms['search_hot']); if(is_array($_6421934796a30) || $_6421934796a30 instanceof \think\Collection || $_6421934796a30 instanceof \think\Paginator): if( count($_6421934796a30)==0 ) : echo "" ;else: foreach($_6421934796a30 as $key=>$vo): ?>
                                <li><a class="hl-bg-subs" href="<?php echo mac_url('vod/search',['wd'=>$vo]); ?>"><?php echo $vo; if($key < 1): ?><i>热</i><?php endif; ?></a></li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                       </div>
                   </div>
                </div>
                </div>
            </div>
            <?php if($conch['nav']['all']['btn']==1): ?>
            <div class="conch-nav">
                <div class="hl-nav-wrap hl-navswiper">
                    <ul class="hl-nav hl-text-site swiper-wrapper clearfix">
                        <?php if($conch['nav']['home']['PC']==1): ?>
                        <li class="hl-nav-item hl-slide-swiper hl-author-qq-362695000">
                            <a href="<?php echo mac_default($conch['nav']['home']['link'],$maccms['path']); ?>"<?php if($maccms['aid'] == 1): ?> class="hl-text-conch active"<?php endif; ?>><?php echo mac_default($conch['nav']['home']['title'],'首页'); ?></a>
                        </li>
                        <?php endif; if($conch['nav']['level']['PC']==1): ?>
                        <li class="hl-nav-item hl-slide-swiper">
                            <?php if($conch['nav']['level']['pic']!=''): ?>
                            <a href="<?php echo $conch['nav']['level']['link']; ?>" title="<?php echo $conch['nav']['level']['title']; ?>"><img src="<?php echo mac_url_img($conch['nav']['level']['pic']); ?>" class="hl-nav-pic"></a>
                            <?php else: ?>
                            <a href="<?php echo $conch['nav']['level']['link']; ?>"><?php echo $conch['nav']['level']['title']; ?></a>
                            <?php endif; ?>
                        </li>
                        <?php endif; if($conch['nav']['custom']['PC-1']==1): ?>
                        <li class="hl-nav-item hl-slide-swiper">
                            <a href="<?php echo $conch['nav']['custom']['link-1']; ?>"><?php echo $conch['nav']['custom']['title-1']; ?></a>
                        </li>
                        <?php endif; if($conch['nav']['type']['PC']!==''): $__TAG__ = '{"ids":"'.$conch['nav']['type']['PC'].'","order":"asc","by":"sort","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                        <li class="hl-nav-item hl-slide-swiper">
                            <a href="<?php echo mac_default($conch['nav']['type']['link-'.$vo['type_id'].''],mac_url_type($vo)); ?>"<?php if(($vo['type_id'] == $GLOBALS['type_id']||$vo['type_id'] == $GLOBALS['type_pid']||$vo['type_mid'] == $maccms['mid']&&$vo['type_mid'] != 1)): ?> class="hl-text-conch active"<?php endif; ?>><?php echo $vo['type_name']; ?></a>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; endif; if($conch['nav']['custom']['PC-2']==1): ?>
                        <li class="hl-nav-item hl-slide-swiper">
                            <a href="<?php echo $conch['nav']['custom']['link-2']; ?>"><?php echo $conch['nav']['custom']['title-2']; ?></a>
                        </li>
                        <?php endif; if(in_array(9, explode(',',$conch['nav']['mid']['PC']))): ?>
                        <li class="hl-nav-item hl-slide-swiper">
                            <a href="<?php echo mac_default($conch['nav']['mid']['link-9'],mac_url('role/index')); ?>"<?php if($maccms['mid'] == 9): ?> class="hl-text-conch active"<?php endif; ?>><?php echo mac_default($conch['nav']['mid']['title-9'],'角色'); ?></a>
                        </li>
                        <?php endif; if(in_array(10, explode(',',$conch['nav']['mid']['PC']))): ?>
                        <li class="hl-nav-item hl-slide-swiper">
                            <a href="<?php echo mac_default($conch['nav']['mid']['link-10'],mac_url('plot/index')); ?>"<?php if($maccms['mid'] == 10): ?> class="hl-text-conch active"<?php endif; ?>><?php echo mac_default($conch['nav']['mid']['title-10'],'剧情'); ?></a>
                        </li>
                        <?php endif; if(in_array(3, explode(',',$conch['nav']['mid']['PC']))): ?>
                        <li class="hl-nav-item hl-slide-swiper">
                            <a href="<?php echo mac_default($conch['nav']['mid']['link-3'],mac_url('topic/index')); ?>"<?php if($maccms['mid'] == 3): ?> class="hl-text-conch active"<?php endif; ?>><?php echo mac_default($conch['nav']['mid']['title-3'],'专题'); ?></a>
                        </li>
                        <?php endif; if(in_array(5, explode(',',$conch['nav']['mid']['PC']))): ?>
                        <li class="hl-nav-item hl-slide-swiper">
                            <a href="<?php echo mac_default($conch['nav']['mid']['link-5'],mac_url('gbook/index')); ?>"<?php if($maccms['mid'] == 5): ?> class="hl-text-conch active"<?php endif; ?>><?php echo mac_default($conch['nav']['mid']['title-5'],'留言'); ?></a>
                        </li>
                        <?php endif; if(in_array(2, explode(',',$conch['nav']['aid']['PC']))): ?>
                        <li class="hl-nav-item hl-slide-swiper">
                            <a href="<?php echo mac_default($conch['nav']['aid']['link-2'],mac_url('map/index')); ?>"<?php if($maccms['aid'] == 2): ?> class="hl-text-conch active"<?php endif; ?>><?php echo mac_default($conch['nav']['aid']['title-2'],'最新'); ?></a>
                        </li>
                        <?php endif; if(in_array(7, explode(',',$conch['nav']['aid']['PC']))): ?>
                        <li class="hl-nav-item hl-slide-swiper">
                            <a href="<?php echo mac_default($conch['nav']['aid']['link-7'],mac_url('label/rank')); ?>"<?php if($maccms['aid'] == 7): ?> class="hl-text-conch active"<?php endif; ?>><?php echo mac_default($conch['nav']['aid']['title-7'],'排行'); ?></a>
                        </li>
                        <?php endif; if($conch['nav']['custom']['PC-3']==1): ?>
                        <li class="hl-nav-item hl-slide-swiper">
                            <a href="<?php echo $conch['nav']['custom']['link-3']; ?>"><?php echo $conch['nav']['custom']['title-3']; ?></a>
                        </li>
                        <?php endif; ?>
                    </ul>   
                </div>
                <div class="hl-nav-more">
                    <i class="hl-mbg hl-hide-sm"></i>
                    <a class="hl-text-site hl-open-menu" href="javascript:;"><span class="hl-hidden-xs">全部</span><i class="iconfont hl-icon-caidan"></i></a>
                </div>
            </div>
            <?php endif; else: ?>
            <div class="conch-search-nav hl-text-site">
                <div class="hl-nav-item hl-pull-left hl-author_qq-3626/95000">
                    <a href="<?php echo mac_default($conch['nav']['home']['link'],$maccms['path']); ?>"><?php echo mac_default($conch['nav']['home']['title'],'首页'); ?></a>
                </div>
                <div class="hl-nav-more hl-pull-left">
                    <a class="hl-open-menu" href="javascript:;"><span class="hl-hidden-xs">全部</span><i class="iconfont hl-icon-caidan"></i></a>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <?php if($maccms['aid']==14||$maccms['aid']==15||$maccms['aid']==16||$maccms['aid']==24||$maccms['aid']==34||$maccms['aid']==84): ?>
    <div class="conch-headwrap<?php if($conch['theme']['nav']['has']==1): ?> conch-hasconch<?php endif; ?> hl-hide-sm">
        <div class="hl-mob-nav">
            <a href="javascript:MAC.GoBack()" class="hl-pull-left left"><i class="iconfont hl-icon-jiantouzuo"></i></a>
            <a href="javascript:;" class="hl-open-menu hl-pull-right right"><i class="iconfont hl-icon-caidan"></i></a>
            <span class="hl-mob-title hl-mob-type hl-text-site hl-lc-1"><?php if($maccms['mid']==3): ?><?php echo mac_default($conch['nav']['mid']['title-3'],'专题'); else: if($obj['type_1']!=''): ?><?php echo $obj['type_1']['type_name']; else: ?><?php echo $obj['type']['type_name']; endif; endif; ?></span>
            <span class="hl-mob-name hl-text-site hl-lc-1"><?php echo $obj['vod_name']; ?><?php echo $obj['art_name']; ?><?php echo $obj['actor_name']; ?><?php echo $obj['topic_name']; ?></span>
        </div>
    </div>
    <?php endif; ?>
    <div class="conch-menus hl-bg-site hl-tran5">
    <div class="conch-ms-header">
        <div class="conch-logo">
            <a class="hl-logo hl-logo-black" style="background-image: url(<?php echo mac_url_img(mac_default($conch['theme']['logo']['black'],substr($maccms['path_tpl'], strlen($maccms['path'])).'asset/img/logo_black.png')); ?>);" href="<?php echo $maccms['path']; ?>"></a>
            <a class="hl-logo hl-logo-white" style="background-image: url(<?php echo mac_url_img(mac_default($conch['theme']['logo']['white'],substr($maccms['path_tpl'], strlen($maccms['path'])).'asset/img/logo_white.png')); ?>);" href="<?php echo $maccms['path']; ?>"></a>
        </div>
        <a class="conch-ms-close hl-text-muted" href="javascript:;"><i class="iconfont hl-icon-cuo"></i></a>
    </div>
    <div class="conch-scrollbar">
        <div class="swiper-wrapper">
            <div class="conch-mswrap swiper-slide">
                <ul class="hl-menus clearfix">
                    <?php if($conch['nav']['home']['PC']==1): ?>
                    <li class="hl-menus-item">
                        <a href="<?php echo mac_default($conch['nav']['home']['link'],$maccms['path']); ?>"<?php if($maccms['aid'] == 1): ?> class="active"<?php endif; ?>><i class="iconfont hl-icon-shouye"></i><span><?php echo mac_default($conch['nav']['home']['title'],'首页'); ?></span></a>
                    </li>
                    <?php endif; if($conch['nav']['level']['PC']==1): ?>
                    <li class="hl-menus-item">
                        <?php if($conch['nav']['level']['pic']!=''): ?>
                        <a href="<?php echo $conch['nav']['level']['link']; ?>" title="<?php echo $conch['nav']['level']['title']; ?>"><i class="iconfont hl-icon-huo"></i><span><img src="<?php echo mac_url_img($conch['nav']['level']['pic']); ?>" class="hl-nav-pic"></span></a>
                        <?php else: ?>
                        <a href="<?php echo $conch['nav']['level']['link']; ?>"><i class="iconfont hl-icon-huo"></i><span><?php echo $conch['nav']['level']['title']; ?></span></a>
                        <?php endif; ?>
                    </li>
                    <?php endif; if($conch['nav']['custom']['PC-1']==1): ?>
                    <li class="hl-menus-item">
                        <a href="<?php echo $conch['nav']['custom']['link-1']; ?>"><i class="iconfont <?php echo $conch['nav']['custom']['code-1']; ?>"></i><span><?php echo $conch['nav']['custom']['title-1']; ?></span></a>
                    </li>
                    <?php endif; if($conch['nav']['type']['PC']!==''): $__TAG__ = '{"ids":"'.$conch['nav']['type']['PC'].'","order":"asc","by":"sort","id":"vo1","key":"key1"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key1 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($key1 % 2 );++$key1;?>
                    <li class="hl-menus-item">
                        <a href="<?php echo mac_default($conch['nav']['type']['link-'.$vo1['type_id'].''],mac_url_type($vo1)); ?>"<?php if(($vo1['type_id'] == $GLOBALS['type_id'] || $vo1['type_id'] == $GLOBALS['type_pid'] || $vo1['type_mid'] == $maccms['mid']&&$vo1['type_mid'] != 1)): ?> class="active"<?php endif; ?>><?php if(stristr($vo1['type_name'],'纪录片')==true||stristr($vo1['parent']['type_name'],'纪录片')==true): ?><i class="iconfont hl-icon-shexiangji"></i><?php elseif(stristr($vo1['type_name'],'福利')==true||stristr($vo1['parent']['type_name'],'福利')==true): ?><i class="iconfont hl-icon-zuichun"></i><?php elseif(stristr($vo1['type_name'],'明星')==true||stristr($vo1['parent']['type_name'],'明星')==true): ?><i class="iconfont hl-icon-mingxing"></i><?php else: ?><i class="iconfont <?php switch($vo1['type_id']): case "1": ?>hl-icon-dianying<?php break; case "2": ?>hl-icon-dianshiju3<?php break; case "3": ?>hl-icon-zongyi<?php break; case "4": ?>hl-icon-dongman<?php break; case "5": ?>hl-icon-xinwen<?php break; default: ?>hl-icon-shipinku<?php endswitch; ?>"></i><?php endif; ?><span><?php echo $vo1['type_name']; ?></span><?php if($vo1['type_mid']==1): ?><em><?php echo mac_data_count($vo1['type_id'],all); ?></em><?php endif; ?>
                        </a>
                    </li>
                    <?php if($conch['nav']['child']['btn']==1): if($vo1['childids']||$vo1['parent']['childids']): ?>
                    <li class="hl-type-child">
                    <?php $__TAG__ = '{"parent":"'.$vo1['type_id'].'","order":"asc","by":"sort","id":"vo2","key":"key2"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;?>
                        <a class="hl-bg-subs" href="<?php echo mac_url_type($vo2); ?>"><?php echo $vo2['type_name']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    </li><?php endif; endif; endforeach; endif; else: echo "" ;endif; endif; if($conch['nav']['custom']['PC-2']==1): ?>
                    <li class="hl-menus-item">
                        <a href="<?php echo $conch['nav']['custom']['link-2']; ?>"><i class="iconfont <?php echo $conch['nav']['custom']['code-2']; ?>"></i><span><?php echo $conch['nav']['custom']['title-2']; ?></span></a>
                    </li>
                    <?php endif; if(in_array(9, explode(',',$conch['nav']['mid']['PC']))): ?>
                    <li class="hl-menus-item">
                        <a href="<?php echo mac_default($conch['nav']['mid']['link-9'],mac_url('role/index')); ?>"<?php if($maccms['mid'] == 9): ?> class="active"<?php endif; ?>><i class="iconfont hl-icon-jiaose"></i><span><?php echo mac_default($conch['nav']['mid']['title-9'],'角色'); ?></span></a>
                    </li>
                    <?php endif; if(in_array(10, explode(',',$conch['nav']['mid']['PC']))): ?>
                    <li class="hl-menus-item">
                        <a href="<?php echo mac_default($conch['nav']['mid']['link-10'],mac_url('plot/index')); ?>"<?php if($maccms['mid'] == 10): ?> class="active"<?php endif; ?>><i class="iconfont hl-icon-shu"></i><span><?php echo mac_default($conch['nav']['mid']['title-10'],'剧情'); ?></span></a>
                    </li>
                    <?php endif; if(in_array(3, explode(',',$conch['nav']['mid']['PC']))): ?>
                    <li class="hl-menus-item">
                        <a href="<?php echo mac_default($conch['nav']['mid']['link-3'],mac_url('topic/index')); ?>"<?php if($maccms['mid'] == 3): ?> class="active"<?php endif; ?>><i class="iconfont hl-icon-zhuanti"></i><span><?php echo mac_default($conch['nav']['mid']['title-3'],'专题'); ?></span></a>
                    </li>
                    <?php endif; if(in_array(5, explode(',',$conch['nav']['mid']['PC']))): ?>
                    <li class="hl-menus-item">
                        <a href="<?php echo mac_default($conch['nav']['mid']['link-5'],mac_url('gbook/index')); ?>"<?php if($maccms['mid'] == 5): ?> class="active"<?php endif; ?>><i class="iconfont hl-icon-liuyan"></i><span><?php echo mac_default($conch['nav']['mid']['title-5'],'留言'); ?></span></a>
                    </li>
                    <?php endif; if(in_array(2, explode(',',$conch['nav']['aid']['PC']))): ?>
                    <li class="hl-menus-item">
                        <a href="<?php echo mac_default($conch['nav']['aid']['link-2'],mac_url('map/index')); ?>"<?php if($maccms['aid'] == 2): ?> class="active"<?php endif; ?>><i class="iconfont hl-icon-zuixin"></i><span><?php echo mac_default($conch['nav']['aid']['title-2'],'最新'); ?></span></a>
                    </li>
                    <?php endif; if(in_array(7, explode(',',$conch['nav']['aid']['PC']))): ?>
                    <li class="hl-menus-item">
                        <a href="<?php echo mac_default($conch['nav']['aid']['link-7'],mac_url('label/rank')); ?>"<?php if($maccms['aid'] == 7): ?> class="active"<?php endif; ?>><i class="iconfont hl-icon-paihang"></i><span><?php echo mac_default($conch['nav']['aid']['title-7'],'排行'); ?></span></a>
                    </li>
                    <?php endif; if($conch['nav']['custom']['PC-3']==1): ?>
                    <li class="hl-menus-item">
                        <a href="<?php echo $conch['nav']['custom']['link-3']; ?>"><i class="iconfont <?php echo $conch['nav']['custom']['code-3']; ?>"></i><span><?php echo $conch['nav']['custom']['title-3']; ?></span></a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>       
        </div>
        <div class="swiper-scrollbar"></div>
    </div>
    <div class="conch-ms-overlay"></div>
</div>
</div>
<div id="conch-content" class="conch-content conch-msg">
    <div class="container">      
        <div class="hl-msg-jump">
            <h2 class="hl-msg-jump-tit">系统提示</h2>
            <div class="title">亲爱的用户：</div>
            <div class="text hl-text-site"><?php echo $msg; ?></div>
            <div class="jump">
                页面自动 <a id="href" class="hl-text-conch" href="<?php echo($url);?>">跳转</a> 等待时间： <b id="wait" class="hl-text-conch"><?php echo($wait);?></b>
            </div>
            <!-- 可自定义该页面的显示方式，可加入广告 -->
        </div>         
    </div>
</div>
<script type="text/javascript">
    (function(){
        var wait = document.getElementById('wait'),
            href = document.getElementById('href').href;
        var interval = setInterval(function(){
            var time = --wait.innerHTML;
            if(time <= 0) {
                location.href = href;
                clearInterval(interval);
            };
        }, 1000);
    })();
</script>
<div id="conch-footer" class="conch-footer">
    <div class="conch-footwrap <?php if($maccms['mid']!=6): ?> hl-bg-subs<?php endif; if($conch['nav']['bottom']['btn']==1): ?> hl-footnav-show<?php endif; ?>">
        <div class="container">
            <div class="hl-footwrap-item">
                 <div class="hl-foot-extra">
                    <ul class="hl-fe-list clearfix">
                       <?php if(in_array(a, explode(',',$conch['nav']['bottom']['PC']))): ?>
                        <li class="hl-mqr-item hl-hidden-xs">
                            <a href="javascript:void(0)"><i class="iconfont hl-icon-shouji"></i></a>
                            <div class="hl-alert-box hl-bg-site hl-fadeIn">
                                <div class="hl-mqr-wrap">
                                    <div class="hl-cans hl-hide"></div>
                                    <p class="hl-qrcode"></p>
                                    <p class="hl-text-muted"><?php echo $conch['theme']['qrcode']['tips']; ?></p>
                                </div>
                            </div>
                        </li>
                        <?php endif; if(in_array(b, explode(',',$conch['nav']['bottom']['PC']))||in_array(b, explode(',',$conch['nav']['bottom']['mobile']))): ?>
                        <li class="hl-color-item<?php if(strpos($conch['nav']['bottom']['PC'],'b')===false): ?> hl-hide-sm<?php endif; if(strpos($conch['nav']['bottom']['mobile'],'b')===false): ?> hl-hidden-xs<?php endif; ?>">
                            <?php if($conch['theme']['style']['color']==1): ?>
                            <a id="white" href="javascript:void(0)"><i class="iconfont hl-icon-taiyang"></i><span>浅色模式</span></a><?php else: ?><a id="black" href="javascript:void(0)"><i class="iconfont hl-icon-yueliang"></i><span>深色模式</span></a><?php endif; ?>
                        </li>
                        <?php endif; if(in_array(c, explode(',',$conch['nav']['bottom']['PC']))||in_array(c, explode(',',$conch['nav']['bottom']['mobile']))): ?>
                        <li class="hl-gbook-item<?php if(strpos($conch['nav']['bottom']['PC'],'c')===false): ?> hl-hide-sm<?php endif; if(strpos($conch['nav']['bottom']['mobile'],'c')===false): ?> hl-hidden-xs<?php endif; ?>">
                            <a href="<?php echo mac_default($conch['nav']['mid']['link-5'],mac_url('gbook/index')); ?>"><i class="iconfont hl-icon-liuyan"></i><span><?php echo $conch['nav']['bottom']['mid']['title-5']; ?></span></a>
                        </li>
                        <?php endif; if(in_array(d, explode(',',$conch['nav']['bottom']['PC']))||in_array(d, explode(',',$conch['nav']['bottom']['mobile']))): ?>
                        <li class="hl-gbook-item<?php if(strpos($conch['nav']['bottom']['PC'],'d')===false): ?> hl-hide-sm<?php endif; if(strpos($conch['nav']['bottom']['mobile'],'d')===false): ?> hl-hidden-xs<?php endif; ?>">
                            <a href="<?php echo $conch['nav']['bottom']['custom']['link']; ?>"><i class="iconfont <?php echo $conch['nav']['bottom']['custom']['code']; ?>"></i><span><?php echo $conch['nav']['bottom']['custom']['title']; ?></span></a>
                        </li>
                        <?php endif; if(in_array(e, explode(',',$conch['nav']['bottom']['PC']))||in_array(e, explode(',',$conch['nav']['bottom']['mobile']))): ?>
                        <li class="hl-back-item<?php if(strpos($conch['nav']['bottom']['PC'],'e')===false): ?> hl-hide-sm<?php endif; if(strpos($conch['nav']['bottom']['mobile'],'e')===false): ?> hl-hidden-xs<?php endif; ?>">
                            <a class="hl-back-top" href="javascript:scroll(0,0)"><i class="iconfont hl-icon-jiantoushang"></i><span><?php echo mac_default($conch['nav']['bottom']['back']['title'],'返回顶部'); ?></span></a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="row">
                    <?php if($maccms['mid']==6): ?>
                    <div class="hl-col-xs-12 hl-user-footer">
                        <div class="hl-foot-copy hl-text-muted">
                            <p>&copy;&nbsp;<?php echo date('Y'); ?>&nbsp;<?php echo $maccms['site_url']; ?>&nbsp;All rights reservd.</p>
                        </div>
                    </div>
                    <?php else: ?>
                    <div class="hl-col-sm-8 hl-col-xs-12">
                        <div class="hl-foot-text hl-text-muted">
                            <?php echo $conch['theme']['text']['tips']; ?>
                            <p>联系邮箱：<?php echo $maccms['site_email']; ?>&nbsp;&nbsp;<span<?php if($conch['theme']['tj']['btn'] == 0): ?> class="hl-hide"<?php endif; ?>><?php echo $maccms['site_tj']; ?></span></p>
                        </div>
                        <div class="hl-map-nav hl-text-site hl-hidden-xs">
                            <a href="<?php echo mac_url('rss/index'); ?>" target="_blank">RSS订阅</a>
                            <span>—</span>
                            <a href="<?php echo mac_url('rss/baidu'); ?>" target="_blank">百度蜘蛛</a>
                            <span>—</span>
                            <a href="<?php echo mac_url('rss/sm'); ?>" target="_blank">神马爬虫</a>
                            <span>—</span>
                            <a href="<?php echo mac_url('rss/sogou'); ?>" target="_blank">搜狗蜘蛛</a>
                            <span>—</span>
                            <a href="<?php echo mac_url('rss/so'); ?>" target="_blank">奇虎地图</a>
                            <span>—</span>
                            <a href="<?php echo mac_url('rss/google'); ?>" target="_blank">谷歌地图</a>
                            <span class="hl-hidden-sm">—</span>
                            <a href="<?php echo mac_url('rss/bing'); ?>" target="_blank" class="hl-hidden-sm">必应爬虫</a>
                        </div>
                    </div>
                    <div class="hl-col-sm-4 hl-col-xs-12">
                        <div class="hl-foot-logo">
                            <a class="hl-logo hl-bright-0" style="background-image: url(<?php echo mac_url_img(mac_default($conch['theme']['logo']['black'],substr($maccms['path_tpl'], strlen($maccms['path'])).'asset/img/logo_black.png')); ?>);" href="<?php echo $maccms['path']; ?>"></a>
                        </div>
                        <div class="hl-foot-copy hl-text-muted">
                            <p>&copy;&nbsp;<?php echo date('Y'); ?>&nbsp;<?php echo $maccms['site_url']; ?>&nbsp;All rights reservd.</p>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <?php if($conch['nav']['bottom']['btn']==1): ?>
<div class="hl-foot-nav hl-bg-site hl-hide-sm">
	<ul class="hl-fn-list">
	    <?php if($conch['nav']['home']['mobile']==1): ?>
		<li class="hl-fn-item">
			<a <?php if($maccms['aid'] == 1): ?>class="hl-text-conch active" <?php endif; ?>href="<?php echo mac_default($conch['nav']['home']['link'],$maccms['path']); ?>">
				<?php if($maccms['aid'] == 1): ?><i class="iconfont hl-icon-shouye-fill"></i><?php else: ?><i class="iconfont hl-icon-shouye"></i><?php endif; ?>
				<span class="hl-fn-font"><?php echo mac_default($conch['nav']['home']['title'],'首页'); ?></span>
			</a>
		</li>
		<?php endif; if($conch['nav']['custom']['mobile-1']==1): ?>
        <li class="hl-fn-item">
            <a href="<?php echo $conch['nav']['custom']['link-1']; ?>">
                <i class="iconfont <?php echo $conch['nav']['custom']['code-1']; ?>"></i>
                <span class="hl-fn-font"><?php echo $conch['nav']['custom']['title-1']; ?></span>
            </a>
        </li>
        <?php endif; if($conch['nav']['type']['mobile']!==''): $__TAG__ = '{"ids":"'.$conch['nav']['type']['mobile'].'","order":"asc","by":"sort","id":"vo1","key":"key1"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key1 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($key1 % 2 );++$key1;?>
		<li class="hl-fn-item">
			<a <?php if(($vo1['type_id'] == $GLOBALS['type_id'] || $vo1['type_id'] == $GLOBALS['type_pid'] || $vo1['type_mid'] == $maccms['mid']&&$vo1['type_mid'] != 1)): ?>class="hl-text-conch active"<?php endif; ?> href="<?php echo mac_default($conch['nav']['type']['link-'.$vo1['type_id'].''],mac_url_type($vo1)); ?>">	
				<?php if(($vo1['type_id'] == $GLOBALS['type_id'] || $vo1['type_id'] == $GLOBALS['type_pid'] || $vo1['type_mid'] == $maccms['mid']&&$vo1['type_mid'] != 1)): if(stristr($vo1['type_name'],'纪录片')==true||stristr($vo1['parent']['type_name'],'纪录片')==true): ?><i class="iconfont hl-icon-shexiangji-fill"></i><?php elseif(stristr($vo1['type_name'],'福利')==true||stristr($vo1['parent']['type_name'],'福利')==true): ?><i class="iconfont hl-icon-zuichun-fill"></i><?php elseif(stristr($vo1['type_name'],'明星')==true||stristr($vo1['parent']['type_name'],'明星')==true): ?><i class="iconfont hl-icon-mingxing-fill"></i><?php else: ?><i class="iconfont <?php switch($vo1['type_id']): case "1": ?>hl-icon-dianying-fill<?php break; case "2": ?>hl-icon-dianshiju3-fill<?php break; case "3": ?>hl-icon-zongyi-fill<?php break; case "4": ?>hl-icon-dongman-fill<?php break; case "5": ?>hl-icon-xinwen-fill<?php break; default: ?>hl-icon-shipinku-fill<?php endswitch; ?>"></i><?php endif; else: if(stristr($vo1['type_name'],'纪录片')==true||stristr($vo1['parent']['type_name'],'纪录片')==true): ?><i class="iconfont hl-icon-shexiangji"></i><?php elseif(stristr($vo1['type_name'],'福利')==true||stristr($vo1['parent']['type_name'],'福利')==true): ?><i class="iconfont hl-icon-zuichun"></i><?php elseif(stristr($vo1['type_name'],'明星')==true||stristr($vo1['parent']['type_name'],'明星')==true): ?><i class="iconfont hl-icon-mingxing"></i><?php else: ?><i class="iconfont <?php switch($vo1['type_id']): case "1": ?>hl-icon-dianying<?php break; case "2": ?>hl-icon-dianshiju3<?php break; case "3": ?>hl-icon-zongyi<?php break; case "4": ?>hl-icon-dongman<?php break; case "5": ?>hl-icon-xinwen<?php break; default: ?>hl-icon-shipinku<?php endswitch; ?>"></i><?php endif; endif; ?>
				<span class="hl-fn-font"><?php echo $vo1['type_name']; ?></span>
			</a>
		</li>
		<?php endforeach; endif; else: echo "" ;endif; endif; if($conch['nav']['custom']['mobile-2']==1): ?>
        <li class="hl-fn-item">
            <a href="<?php echo $conch['nav']['custom']['link-2']; ?>">
                <i class="iconfont <?php echo $conch['nav']['custom']['code-2']; ?>"></i>
                <span class="hl-fn-font"><?php echo $conch['nav']['custom']['title-2']; ?></span>
            </a>
        </li>
        <?php endif; if(in_array(9, explode(',',$conch['nav']['mid']['mobile']))): ?>
		<li class="hl-fn-item">
			<a <?php if($maccms['mid'] == 9): ?>class="hl-text-conch active" <?php endif; ?>href="<?php echo mac_default($conch['nav']['mid']['link-9'],mac_url('role/index')); ?>">		
				<?php if($maccms['mid'] == 9): ?><i class="iconfont hl-icon-jiaose-fill"></i><?php else: ?><i class="iconfont hl-icon-jiaose"></i><?php endif; ?>
				<span class="hl-fn-font"><?php echo mac_default($conch['nav']['mid']['title-9'],'角色'); ?></span>
			</a>
		</li>
		<?php endif; if(in_array(10, explode(',',$conch['nav']['mid']['mobile']))): ?>
		<li class="hl-fn-item">
			<a <?php if($maccms['mid'] == 10): ?>class="hl-text-conch active" <?php endif; ?>href="<?php echo mac_default($conch['nav']['mid']['link-10'],mac_url('plot/index')); ?>">		
				<?php if($maccms['mid'] == 10): ?><i class="iconfont hl-icon-shu-fill"></i><?php else: ?><i class="iconfont hl-icon-shu"></i><?php endif; ?>
				<span class="hl-fn-font"><?php echo mac_default($conch['nav']['mid']['title-10'],'剧情'); ?></span>
			</a>
		</li>
		<?php endif; if(in_array(3, explode(',',$conch['nav']['mid']['mobile']))): ?>
		<li class="hl-fn-item">
			<a <?php if($maccms['mid'] == 3): ?>class="hl-text-conch active" <?php endif; ?>href="<?php echo mac_default($conch['nav']['mid']['link-3'],mac_url('topic/index')); ?>">		
				<?php if($maccms['mid'] == 3): ?><i class="iconfont hl-icon-zhuanti-fill"></i><?php else: ?><i class="iconfont hl-icon-zhuanti"></i><?php endif; ?>
				<span class="hl-fn-font"><?php echo mac_default($conch['nav']['mid']['title-3'],'专题'); ?></span>
			</a>
		</li>
		<?php endif; if(in_array(5, explode(',',$conch['nav']['mid']['mobile']))&&$GLOBALS['config']['gbook']['status']==1): ?>
		<li class="hl-fn-item">
			<a <?php if($maccms['mid'] == 5): ?>class="hl-text-conch active" <?php endif; ?>href="<?php echo mac_default($conch['nav']['mid']['link-5'],mac_url('gbook/index')); ?>">		
				<?php if($maccms['mid'] == 5): ?><i class="iconfont hl-icon-liuyan-fill"></i><?php else: ?><i class="iconfont hl-icon-liuyan"></i><?php endif; ?>
				<span class="hl-fn-font"><?php echo mac_default($conch['nav']['mid']['title-5'],'留言'); ?></span>
			</a>
		</li>
		<?php endif; if(in_array(2, explode(',',$conch['nav']['aid']['mobile']))): ?>
		<li class="hl-fn-item">
			<a <?php if($maccms['aid'] == 2): ?>class="hl-text-conch active" <?php endif; ?>href="<?php echo mac_default($conch['nav']['aid']['link-2'],mac_url('map/index')); ?>">		
				<?php if($maccms['aid'] == 2): ?><i class="iconfont hl-icon-zuixin-fill"></i><?php else: ?><i class="iconfont hl-icon-zuixin"></i><?php endif; ?>
				<span class="hl-fn-font"><?php echo mac_default($conch['nav']['aid']['title-2'],'最新'); ?></span>
			</a>
		</li>
		<?php endif; if(in_array(7, explode(',',$conch['nav']['aid']['mobile']))): ?>
		<li class="hl-fn-item">
			<a <?php if($maccms['aid'] == 7): ?>class="hl-text-conch active" <?php endif; ?>href="<?php echo mac_default($conch['nav']['aid']['link-7'],mac_url('label/rank')); ?>">		
				<?php if($maccms['aid'] == 7): ?><i class="iconfont hl-icon-paihang-fill"></i><?php else: ?><i class="iconfont hl-icon-paihang"></i><?php endif; ?>
				<span class="hl-fn-font"><?php echo mac_default($conch['nav']['aid']['title-7'],'排行'); ?></span>
			</a>
		</li>
		<?php endif; if(in_array(6, explode(',',$conch['nav']['aid']['mobile']))&&$GLOBALS['config']['user']['status']==1): ?>
		<li class="hl-fn-item">
			<a <?php if($maccms['aid'] == 6): ?>class="hl-text-conch active"<?php endif; ?> href="<?php if($user['user_id']): ?><?php echo mac_default($conch['nav']['aid']['link-6'],mac_url('user/index')); else: ?><?php echo mac_url('user/login'); endif; ?>">	
				<?php if($maccms['aid'] == 6): ?><i class="iconfont hl-icon-huiyuan-fill"></i><?php else: ?><i class="iconfont hl-icon-huiyuan"></i><?php endif; ?>
				<span class="hl-fn-font"><?php echo mac_default($conch['nav']['aid']['title-6'],'会员'); ?></span>
			</a>
		</li>
		<?php endif; ?>
	</ul>
</div>
<?php endif; ?>
            </div>
            <div class="hl-footwrap-item">
                <div style="display: none;" class="mac_timming" data-file="" ></div>
                <?php if($conch['theme']['search']['suggest'] == 1): ?>
                <script>Conch.Search.Suggest(".hl-search-wd",1);</script><?php endif; if($conch['theme']['tips']['btn'] == 1): ?>
                <script>Conch.Alert.Notice();</script><?php endif; if($conch['theme']['url']['blank'] == 1): ?>
                <script>Conch.Other.Target();</script><?php endif; if($conch['theme']['style']['font'] == 1): ?>
                <script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>asset/js/set/strantext.js"></script><?php endif; if($conch['theme']['ads']['btn']==1): if($conch['theme']['ads']['vip']==1&&$user['group_id'] > 2): else: if($conch['theme']['ads']['double']['left']!=''): ?>
<div id="ad1005" class="conch-ads-box hl-double-left hl-this-box clearfix">
    <a class="hl-close-this" href="javascript:void(0)"><i class="iconfont hl-icon-cuo"></i></a>
    <div class="ads ads-double"><?php echo $conch['theme']['ads']['double']['left']; ?></div>
    <?php if($conch['theme']['ads']['tip']==1): ?><span class="hl-ad-tip">广告</span><?php endif; ?>
</div>
<?php endif; if($conch['theme']['ads']['double']['right']!=''): ?>
<div id="1006" class="conch-ads-box hl-double-right hl-this-box clearfix">
    <a class="hl-close-this" href="javascript:void(0)"><i class="iconfont hl-icon-cuo"></i></a>
    <div class="ads ads-double"><?php echo $conch['theme']['ads']['double']['right']; ?></div>
    <?php if($conch['theme']['ads']['tip']==1): ?><span class="hl-ad-tip">广告</span><?php endif; ?>
</div>
<?php endif; endif; endif; if($conch['theme']['ads']['btn']==1): if($conch['theme']['ads']['vip']==1&&$user['group_id'] > 2): else: if($conch['theme']['ads']['bottom']!=''): ?>
<div id="ad1003" class="conch-ads-box hl-ads-bottom hl-this-box clearfix">
    <a class="hl-close-this" href="javascript:void(0)"><i class="iconfont hl-icon-cuo"></i></a>
    <div class="ads ads-bottom"><?php echo $conch['theme']['ads']['bottom']; ?></div>
    <?php if($conch['theme']['ads']['tip']==1): ?><span class="hl-ad-tip">广告</span><?php endif; ?>
</div>
<script type="text/javascript">
    $(function() {
        var $b=$('#1003').parents().find('.conch-footwrap'),
            $a=$('#1003').find('.hl-close-this'),
            $e=$b.find('.hl-foot-extra'),
            $h=$('#1003').innerHeight(),
            $w=$(window).width();
        if($b.hasClass('hl-footnav-show') && $h>0 && $w<768){
            $b.css('padding-bottom',$h+80);
            $e.css('bottom',$h+70);
        }else{
            $b.css('padding-bottom',$h+40);
            $e.css('bottom',$h+20);
        }
        $a.click(function(){
            $b.css('padding-bottom','');
            $e.css('bottom','');
        })
    });
</script>
<?php endif; endif; endif; ?>
            </div>
        </div>  
    </div>
</div>

</body>
</html>