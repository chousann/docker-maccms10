<?php if (!defined('THINK_PATH')) exit(); /*a:30:{s:33:"template/conch/html/vod/play.html";i:1595439500;s:50:"/var/www/html/template/conch/html/public/meta.html";i:1646145371;s:50:"/var/www/html/template/conch/html/public/seos.html";i:1595336848;s:53:"/var/www/html/template/conch/html/public/include.html";i:1627651980;s:50:"/var/www/html/template/conch/html/public/head.html";i:1627644338;s:50:"/var/www/html/template/conch/html/ads/ads-top.html";i:1595406136;s:57:"/var/www/html/template/conch/html/widget/search-form.html";i:1593675890;s:51:"/var/www/html/template/conch/html/public/menus.html";i:1595573070;s:50:"/var/www/html/template/conch/html/widget/icon.html";i:1586076696;s:50:"/var/www/html/template/conch/html/ads/ads-all.html";i:1595406022;s:55:"/var/www/html/template/conch/html/widget/vod-infos.html";i:1594372330;s:52:"/var/www/html/template/conch/html/widget/scores.html";i:1592649734;s:55:"/var/www/html/template/conch/html/widget/tool-icon.html";i:1596476744;s:54:"/var/www/html/template/conch/html/widget/vod-data.html";i:1654447091;s:52:"/var/www/html/template/conch/html/widget/crumbs.html";i:1594033894;s:54:"/var/www/html/template/conch/html/module/playlist.html";i:1594401602;s:49:"/var/www/html/template/conch/html/ads/ads-sw.html";i:1595406072;s:53:"/var/www/html/template/conch/html/module/relside.html";i:1595011252;s:54:"/var/www/html/template/conch/html/widget/vod-item.html";i:1594403530;s:53:"/var/www/html/template/conch/html/module/related.html";i:1595095538;s:59:"/var/www/html/template/conch/html/widget/actor-item-sm.html";i:1593101670;s:54:"/var/www/html/template/conch/html/widget/art-item.html";i:1594064312;s:53:"/var/www/html/template/conch/html/module/comment.html";i:1594045856;s:53:"/var/www/html/template/conch/html/module/vodside.html";i:1595396182;s:51:"/var/www/html/template/conch/html/ads/ads-side.html";i:1595406120;s:50:"/var/www/html/template/conch/html/public/foot.html";i:1627652006;s:54:"/var/www/html/template/conch/html/public/footnavs.html";i:1594799406;s:54:"/var/www/html/template/conch/html/widget/iconfill.html";i:1586596582;s:53:"/var/www/html/template/conch/html/ads/ads-double.html";i:1595406110;s:53:"/var/www/html/template/conch/html/ads/ads-bottom.html";i:1595406090;}*/ ?>
<!DOCTYPE html>
<html>
<head>


<?php $version = parse_ini_file(substr($maccms['path_tpl'], strlen($maccms['path'])).'info.ini'); $version = stristr('127.0.0|192.168', substr($_SERVER['HTTP_HOST'], 0, 7)) == true ? time() : $version['version']; $file = 'template/conch/asset/admin/Conch.php'; $newfile = 'application/admin/controller/Conch.php'; if (file_exists($newfile)) {} else { copy($file,$newfile); } $file = 'template/conch/asset/admin/conchvip.php'; $newfile = 'application/extra/conchvip.php'; if (file_exists($newfile)) {} else { copy($file,$newfile); } $file = 'template/conch/asset/admin/theme.html'; $dir = 'application/admin/view/conch'; $newfile = 'application/admin/view/conch/theme.html'; if (file_exists($dir)) {} else { mkdir($dir, 0777); copy($file,$newfile); } $conch = file_exists('application/extra/conchvip.php') ? require('application/extra/conchvip.php') : require(substr($maccms['path_tpl'], strlen($maccms['path'])).'asset/admin/conchvip.php'); ?>






<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10" />
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> 
<?php if($maccms['aid']==1): ?>
<title><?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $maccms['site_keywords']; ?>" />
<meta name="description" content="<?php echo $maccms['site_description']; ?>" />
<?php elseif($maccms['aid']==2): ?>
<title>最近更新-<?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $maccms['site_keywords']; ?>" />
<meta name="description" content="<?php echo $maccms['site_description']; ?>" />
<?php elseif($maccms['aid']==4): ?>
<title>求片留言-<?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $maccms['site_keywords']; ?>" />
<meta name="description" content="<?php echo $maccms['site_description']; ?>" />
<?php elseif($maccms['aid']==10): ?>
<title><?php echo $maccms['seo']['vod']['name']; ?>-<?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $maccms['seo']['vod']['key']; ?>" />
<meta name="description" content="<?php echo $maccms['seo']['vod']['des']; ?>" />
<?php elseif($maccms['aid']==11): ?>
<title><?php echo $obj['type_title']; ?>-第<?php echo $param['page']; ?>页-<?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $obj['type_key']; ?>" />
<meta name="description" content="<?php echo $obj['type_des']; ?>" />
<?php elseif($maccms['aid']==12): ?>
<title>最新<?php echo $obj['type_name']; ?>-推荐<?php echo $obj['type_name']; ?>-第<?php echo $param['page']; ?>页-<?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $obj['type_key']; ?>" />
<meta name="description" content="<?php echo $obj['type_des']; ?>" />
<?php elseif($maccms['aid']==13): ?>
<title>搜索<?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?><?php echo $param['year']; ?><?php echo $param['class']; ?>-<?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?><?php echo $param['year']; ?><?php echo $param['class']; ?>在线观看,<?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?><?php echo $param['year']; ?><?php echo $param['class']; ?>迅雷下载" />
<meta name="description" content="<?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?><?php echo $param['year']; ?><?php echo $param['class']; ?>的搜索结果,<?php echo $maccms['site_name']; ?>" />
<?php elseif($maccms['aid']==14): if(($obj['type_id']==2) OR ($obj['type_id_1']==2) OR ($obj['type_id']==3) OR ($obj['type_id_1']==3) OR ($obj['type_id']==4) OR ($obj['type_id_1']==4)): ?>
<title>《<?php echo $obj['vod_name']; ?>》<?php if($obj['type_1']!=''): ?><?php echo $obj['type_1']['type_name']; else: ?><?php echo $obj['type']['type_name']; endif; ?>全集在线观看_<?php echo $obj['vod_name']; ?>全集下载-<?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $obj['vod_name']; if($obj['type_1']!=''): ?><?php echo $obj['type_1']['type_name']; else: ?><?php echo $obj['type']['type_name']; endif; ?>,<?php echo $obj['vod_name']; ?>全集,<?php echo $obj['vod_name']; ?>在线观看,<?php echo $obj['vod_name']; ?>迅雷下载,<?php echo $obj['vod_name']; ?>百度网盘,<?php echo $maccms['site_name']; ?>" />
<meta name="description" content="<?php echo $obj['vod_name']; ?>剧情介绍：<?php echo $obj['vod_blurb']; ?>..." />
<?php else: ?>
<title>《<?php echo $obj['vod_name']; ?>》<?php if($obj['type_1']!=''): ?><?php echo $obj['type_1']['type_name']; else: ?><?php echo $obj['type']['type_name']; endif; ?>高清完整版在线观看_<?php echo $obj['vod_name']; ?>高清完整版下载-<?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $obj['vod_name']; if($obj['type_1']!=''): ?><?php echo $obj['type_1']['type_name']; else: ?><?php echo $obj['type']['type_name']; endif; ?>,<?php echo $obj['vod_name']; ?>高清完整版,<?php echo $obj['vod_name']; ?>在线观看,<?php echo $obj['vod_name']; ?>迅雷下载,<?php echo $obj['vod_name']; ?>百度网盘,<?php echo $maccms['site_name']; ?>" />
<meta name="description" content="<?php echo $obj['vod_name']; ?>剧情介绍：<?php echo $obj['vod_blurb']; ?>..." />
<?php endif; elseif($maccms['aid']==15): ?>
<title><?php if($obj['type_1']!=''): ?><?php echo $obj['type_1']['type_name']; else: ?><?php echo $obj['type']['type_name']; endif; ?>《<?php echo $obj['vod_name']; ?>》<?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?>在线观看-<?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php if($obj['type_1']!=''): ?><?php echo $obj['type_1']['type_name']; else: ?><?php echo $obj['type']['type_name']; endif; ?><?php echo $obj['vod_name']; ?>,<?php echo $obj['vod_name']; ?><?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?>,<?php echo $obj['vod_name']; ?>在线观看,<?php echo $maccms['site_name']; ?>" />
<meta name="description" content="<?php echo $obj['vod_name']; ?>剧情介绍：<?php echo $obj['vod_blurb']; ?>" />
<?php elseif($maccms['aid']==16): if(($obj['type_id']==2) OR ($obj['type_id_1']==2) OR ($obj['type_id']==3) OR ($obj['type_id_1']==3) OR ($obj['type_id']==4) OR ($obj['type_id_1']==4)): ?>
<title><?php if($obj['type_1']!=''): ?><?php echo $obj['type_1']['type_name']; else: ?><?php echo $obj['type']['type_name']; endif; ?>《<?php echo $obj['vod_name']; ?>》全集下载_<?php echo $obj['vod_name']; ?>迅雷下载-<?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $obj['vod_name']; if($obj['type_1']!=''): ?><?php echo $obj['type_1']['type_name']; else: ?><?php echo $obj['type']['type_name']; endif; ?>,<?php echo $obj['vod_name']; ?>全集,<?php echo $obj['vod_name']; ?>迅雷下载,<?php echo $obj['vod_name']; ?>百度网盘,<?php echo $maccms['site_name']; ?>" />
<meta name="description" content="<?php echo $obj['vod_name']; ?>剧情介绍：<?php echo $obj['vod_blurb']; ?>" />
<?php else: ?>
<title><?php if($obj['type_1']!=''): ?><?php echo $obj['type_1']['type_name']; else: ?><?php echo $obj['type']['type_name']; endif; ?>《<?php echo $obj['vod_name']; ?>》高清完整版下载_<?php echo $obj['vod_name']; ?>迅雷下载-<?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $obj['vod_name']; if($obj['type_1']!=''): ?><?php echo $obj['type_1']['type_name']; else: ?><?php echo $obj['type']['type_name']; endif; ?>,<?php echo $obj['vod_name']; ?>高清完整版,<?php echo $obj['vod_name']; ?>迅雷下载,<?php echo $obj['vod_name']; ?>百度网盘,<?php echo $maccms['site_name']; ?>" />
<meta name="description" content="<?php echo $obj['vod_name']; ?>剧情介绍：<?php echo $obj['vod_blurb']; ?>" />
<?php endif; elseif($maccms['aid']==20): ?>
<title><?php echo $maccms['seo']['art']['name']; ?>-<?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $maccms['seo']['art']['key']; ?>" />
<meta name="description" content="<?php echo $maccms['seo']['art']['des']; ?>" />
<?php elseif($maccms['aid']==21): ?>
<title><?php echo $obj['type_title']; ?>-第<?php echo $param['page']; ?>页-<?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $obj['type_key']; ?>" />
<meta name="description" content="<?php echo $obj['type_des']; ?>" />
<?php elseif($maccms['aid']==24): ?>
<title><?php echo $obj['art_name']; ?>_<?php echo $obj['type']['type_name']; ?>-<?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo mac_default($obj['art_tag'],$obj['type']['type_name']); ?>" />
<meta name="description" content="<?php echo $obj['art_blurb']; ?>..." />
<?php elseif($maccms['aid']==30): ?>
<title>专题首页_精品专题_最新最热的影视专题在线观看-<?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="影视专题,影视策划,专题汇总,电影专题,电视剧专题,综艺专题,动漫专题,视频头条,搞笑视频,热门电影,热门电视剧,热门综艺,热门动漫,专题合辑" />
<meta name="description" content="精品专题汇聚了影视策划，专题汇总，电影专题，电视剧专题，综艺专题，动漫专题，视频头条，搞笑视频，热门电影，热门电视剧，热门综艺，热门动漫，专题合辑，丰富的资源尽在<?php echo $maccms['site_name']; ?>。" />
<?php elseif($maccms['aid']==34): ?>
<title><?php echo $obj['topic_name']; ?>_专题详情-<?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $obj['topic_name']; ?>精品专题,<?php echo $obj['topic_name']; ?>专题汇总,<?php echo $obj['topic_name']; ?>专题合辑" />
<meta name="description" content="<?php echo $obj['topic_blurb']; ?>..." />
<?php elseif($maccms['aid']==80): ?>
<title><?php echo $maccms['seo']['actor']['name']; ?> - <?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $maccms['seo']['actor']['key']; ?>" />
<meta name="description" content="<?php echo $maccms['seo']['actor']['des']; ?>" />
<?php elseif($maccms['aid']==81): ?>
<title><?php echo mac_default($obj['type_title'],$obj['type_name']); ?>-第<?php echo $param['page']; ?>页-<?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo mac_default($obj['type_key'],$maccms['seo']['actor']['key']); ?>" />
<meta name="description" content="<?php echo mac_default($obj['type_des'],$maccms['seo']['actor']['des']); ?>" />
<?php elseif($maccms['aid']==82): ?>
<title>明星库-明星档案-高级搜索-第<?php echo $param['page']; ?>页-<?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="明星,娱乐明星,电影明星,电视剧明星,明星大全" />
<meta name="description" content="<?php echo $maccms['site_name']; ?>为您提供各国男女明星的详细资料、近况以及最新电影，电视剧在线观看。" />
<?php elseif($maccms['aid']==84): ?>
<title><?php echo $obj['actor_name']; ?>个人资料_<?php echo $obj['actor_name']; ?>演过的电视剧_<?php echo $obj['actor_name']; ?>电影全集-<?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $obj['actor_name']; ?>个人资料,<?php echo $obj['actor_name']; ?>演过的电视剧,<?php echo $obj['actor_name']; ?>电影全集,<?php echo $obj['actor_name']; ?>最新电影,<?php echo $obj['actor_name']; ?>最新电视剧">
<meta name="description" content="<?php echo $maccms['site_name']; ?>为你收集了<?php echo $obj['actor_name']; ?>个人资料包括了<?php echo $obj['actor_name']; ?>最新演过的电视剧,<?php echo $obj['actor_name']; ?>电影全集,以及<?php echo $obj['actor_name']; ?>图片剧照最近动态等信息希望你能喜欢。"> 
<?php elseif($maccms['aid']==90): ?>
<title><?php echo $maccms['seo']['role']['name']; ?>-第<?php echo $param['page']; ?>页-<?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $maccms['seo']['role']['key']; ?>" />
<meta name="description" content="<?php echo $maccms['seo']['role']['des']; ?>" />
<?php elseif($maccms['aid']==94): ?>
<title><?php echo $obj['data']['vod_name']; ?>的角色<?php echo $obj['role_name']; ?>扮演者是<?php echo $obj['role_actor']; ?>-<?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $obj['data']['vod_name']; ?>,<?php echo $obj['role_actor']; ?>饰<?php echo $obj['role_name']; ?>" />
<meta name="description" content="<?php echo $maccms['site_name']; ?>为你收集了<?php echo $obj['data']['vod_name']; ?>的参演角色，及<?php echo $obj['data']['vod_name']; ?>的角色<?php echo $obj['role_name']; ?>扮演者<?php echo $obj['role_actor']; ?>近期的电影作品，电视剧作品，综艺作品等动态信息。" />
<?php elseif($maccms['aid']==100): ?>
<title><?php echo $maccms['seo']['plot']['name']; ?>-第<?php echo $param['page']; ?>页-<?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $maccms['seo']['plot']['key']; ?>" />
<meta name="description" content="<?php echo $maccms['seo']['plot']['des']; ?>" />
<?php elseif($maccms['aid']==104): ?>
<title><?php echo $obj['vod_name']; ?>分集剧情-<?php echo $obj['vod_plot_list'][$param['page']]['name']; ?>-<?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $obj['vod_name']; ?>,分集剧情" />
<meta name="description" content="<?php echo $obj['vod_name']; ?>分集剧情，<?php echo $obj['vod_plot_list'][$param['page']]['name']; ?>，<?php echo mac_filter_html(mac_substring($obj['vod_plot_list'][$param['page']]['detail'],55)); ?>" />
<?php else: ?>
<title><?php echo $maccms['site_name']; ?></title>
<meta name="keywords" content="<?php echo $maccms['site_keywords']; ?>" />
<meta name="description" content="<?php echo $maccms['site_description']; ?>" />
<?php endif; ?>  
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
<body class="conch-hasone">
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
                                <?php $_64218c685b9de=explode(',',$maccms['search_hot']); if(is_array($_64218c685b9de) || $_64218c685b9de instanceof \think\Collection || $_64218c685b9de instanceof \think\Paginator): if( count($_64218c685b9de)==0 ) : echo "" ;else: foreach($_64218c685b9de as $key=>$vo): ?>
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
<?php $id1=$conch['theme']['svideo']['id']; ?>
<div id="conch-content" class="conch-content">
    <div class="conch-ctwrap-auto">
        <div class="container hl-paly-players">
            <div class="hl-row-box hl-ma0 clearfix">
                <div class="hl-col-xs-12 hl-col-md-70w hl-col-lg-9">
                    <div class="hl-player-wrap embed-responsive embed-responsive-16by9 by-qq362695000 clearfix">
                        <?php if($obj['vod_copyright'] == 1 && $GLOBALS['config']['app']['copyright_status'] == 1): ?>
                        <div class="hl-player-tips">
                            <h3><?php echo mac_default($conch['theme']['vod']['copyright'],$GLOBALS['config']['app']['copyright_notice']); ?></h3>
                        </div>
                        <?php elseif($obj['vod_lock']): ?>
                        <div class="hl-player-tips">
                            <h3><?php echo mac_default($conch['theme']['vod']['lock'],'因特殊原因，该视频暂时无法观看'); ?></h3>
                        </div>
                        <?php else: if($conch['play']['player']['tips']==1): if($conch['play']['player']['n-style']==0): ?>
                            <div class="hl-player-notice hl-this-box hl-text-white">
                                <a class="hl-close-this" href="javascript:void(0)"><i class="iconfont hl-icon-cuo"></i></a>
                                <ul class="clearfix">
                                    <?php $_64218c685b58d=explode(',',$conch['play']['player']['notice']); if(is_array($_64218c685b58d) || $_64218c685b58d instanceof \think\Collection || $_64218c685b58d instanceof \think\Paginator): if( count($_64218c685b58d)==0 ) : echo "" ;else: foreach($_64218c685b58d as $key=>$vo): ?>
                                    <li><?php echo $vo; ?></li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </div>
                            <?php else: ?>
                            <div class="hl-player-notice hl-this-box hl-text-white fix">
                                <a class="hl-close-this" href="javascript:void(0)"><i class="iconfont hl-icon-cuo"></i></a>
                                <span><?php echo $conch['play']['player']['notice']; ?></span>
                            </div>
                            <?php endif; endif; ?>
                        <?php echo $player_data; ?><?php echo $player_js; ?>
                        <div class="hl-player-setups hl-text-white hl-tran5 hl-qq-3626-95000">
                            <div class="hl-setups-wrap">
                                <?php if($GLOBALS['config']['gbook']['status'] == 1): ?>
                                <a href="javascript:void(0)" onclick="MAC.Gbook.Report('ID:<?php echo $obj['vod_id']; ?> -【名称：<?php echo $obj['vod_name']; ?> - <?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?>】无法观看请检查修复')"><i class="iconfont hl-icon-jubao"></i><span>报错</span></a>
                                <?php endif; ?>
                                <a href="javascript:void(0)" onclick="location.reload()"><i class="iconfont hl-icon-shuaxin"></i><span>刷新</span></a>
                                <a href="<?php echo $obj['player_info']['link_pre']; ?>" class="<?php if($param['nid']==1): ?>hl-disad<?php endif; ?>"><i class="iconfont hl-icon-shangyiji"></i><span>上一集</span></a>
                                <a href="<?php echo $obj['player_info']['link_next']; ?>" class="<?php if($param['nid']==$obj['vod_play_list'][$param['sid']]['url_count']): ?>hl-disad<?php endif; ?>"><i class="iconfont hl-icon-xiayiji"></i><span>下一集</span></a>
                            </div>
                            <div class="hl-setups-op">
                                <a href="javascript:void(0);"><i class="iconfont hl-icon-jiantouzuo"></i></a>
                            </div>
                        </div>
                        <?php endif; ?>			
                    </div>
                </div>
                <?php if($conch['theme']['ads']['btn']==1): if($conch['theme']['ads']['vip']==1&&$user['group_id'] > 2): else: if($conch['theme']['ads']['all']!=''): ?>
<div id="ad1002" class="conch-ads-box hl-this-box hl-row-box clearfix">
    <a class="hl-close-this" href="javascript:void(0)"><i class="iconfont hl-icon-cuo"></i></a>
    <div class="ads ads-all"><?php echo $conch['theme']['ads']['all']; ?></div>
    <?php if($conch['theme']['ads']['tip']==1): ?><span class="hl-ad-tip">广告</span><?php endif; ?>
</div>
<?php endif; endif; endif; ?>
                <div class="hl-col-xs-12 hl-playinfo-wrap">
                    <div class="hl-vod-infos clearfix">
    <div class="hl-infos-head clearfix">
        <a class="hl-infos-more hl-full-op hl-text-muted" href="javascript:void(0);"><em class="hl-hidden-xs">简介</em><i class="iconfont hl-icon-jiantouyou"></i></a>
        <h2><span class="hl-infos-title"><?php echo $obj['vod_name']; if(!in_array($obj['type_id'], explode(',',$id1))&&$maccms['aid']==15): ?><em class="hl-text-muted">&nbsp;<?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?></em><?php endif; ?></span><?php if(!in_array($obj['type_id'], explode(',',$id1))): ?><span class="<?php if($obj['vod_score'] > 0): ?>hl-score-nums hl-text-conch<?php else: ?> hl-score-no hl-text-muted<?php endif; ?> hl-alert-items hl-half-items"><?php if($obj['vod_score'] > 0): ?><?php echo $obj['vod_score']; else: ?><i class="iconfont hl-icon-xingxing"></i><?php endif; ?><div class="hl-score-box hl-alert-box hl-bg-site hl-fadeIn-sm hl-half-alert hl-half-y100 clearfix"><div class="hl-score-wrap hl-half-items clearfix">
    <?php if($maccms['aid']==14): ?>
    <div class="hl-score-info hl-hide-sm clearfix">
        <div class="hl-score-nums hl-text-subs">
            <?php if($obj['vod_score']!=0): ?><span><?php echo $obj['vod_score']; ?></span><?php else: ?><span class="wu"><i class="iconfont hl-icon-nanguo"></i></span><?php endif; ?>
        </div>
        <div class="hl-score-title">
            <span class="hl-text-site">网友评分</span>
            <div class="rating-sm" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?>" data-score="<?php echo ceil($obj['vod_score']/2); ?>">
                <?php if($obj['vod_score']!=0): ?>
                <ul class="rating-s">
                    <li class="one  <?php if($obj['vod_score'] > 0): ?>current active-m<?php endif; if($obj['vod_score'] > 1): ?> active<?php endif; ?>" title="很差" val="1">很差</li>
                    <li class="two  <?php if($obj['vod_score'] > 2): ?>current active-m<?php endif; if($obj['vod_score'] > 3): ?> active<?php endif; ?>" title="较差" val="2">较差</li>
                    <li class="three <?php if($obj['vod_score'] > 4): ?>current active-m<?php endif; if($obj['vod_score'] > 5): ?> active<?php endif; ?>" title="还行" val="3">还行</li>
                    <li class="four <?php if($obj['vod_score'] > 6): ?>active-m<?php endif; if($obj['vod_score'] > 7): ?> active<?php endif; ?>" title="推荐" val="4">推荐</li>
                    <li class="five <?php if($obj['vod_score'] > 8): ?>active-m<?php endif; if($obj['vod_score'] > 9): ?> active<?php endif; ?>" title="力荐" val="5">力荐</li>
                </ul>
                <?php else: ?>
                <div class="list-tips hl-text-muted"><?php if($obj['vod_score'] == 0): ?>暂无评分<?php endif; ?></div>
                <?php endif; ?>
            </div>
        </div>
        <?php if($obj['vod_douban_score']!=0): ?>
        <span class="hl-douban-score hl-pull-right"><em class="db">豆</em><em class="score"><?php echo $obj['vod_douban_score']; ?></em></span>
        <?php endif; ?>
        <span class="hl-score-data hl-text-muted hl-pull-right"><?php echo $obj['vod_score_num']; ?>次评分</span>
    </div>
    <?php endif; ?>
    <div class="hl-bg-site hl-half-alert hl-half-y100">
        <div class="hl-score-info clearfix">
            <div class="hl-score-nums hl-text-subs">
                <?php if($obj['vod_score']!=0): ?><span><?php echo $obj['vod_score']; ?></span><?php else: ?><span class="wu"><i class="iconfont hl-icon-nanguo"></i></span><?php endif; ?>
            </div>
            <div class="hl-score-title">
                <span class="hl-text-site">网友评分</span>
                <div class="rating-sm" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?>" data-score="<?php echo ceil($obj['vod_score']/2); ?>">
                    <?php if($obj['vod_score']!=0): ?>
                    <ul class="rating-s">
                        <li class="one  <?php if($obj['vod_score'] > 0): ?>current active-m<?php endif; if($obj['vod_score'] > 1): ?> active<?php endif; ?>" title="很差" val="1">很差</li>
                        <li class="two  <?php if($obj['vod_score'] > 2): ?>current active-m<?php endif; if($obj['vod_score'] > 3): ?> active<?php endif; ?>" title="较差" val="2">较差</li>
                        <li class="three <?php if($obj['vod_score'] > 4): ?>current active-m<?php endif; if($obj['vod_score'] > 5): ?> active<?php endif; ?>" title="还行" val="3">还行</li>
                        <li class="four <?php if($obj['vod_score'] > 6): ?>active-m<?php endif; if($obj['vod_score'] > 7): ?> active<?php endif; ?>" title="推荐" val="4">推荐</li>
                        <li class="five <?php if($obj['vod_score'] > 8): ?>active-m<?php endif; if($obj['vod_score'] > 9): ?> active<?php endif; ?>" title="力荐" val="5">力荐</li>
                    </ul>
                    <?php else: ?>
                    <div class="list-tips hl-text-muted"><?php if($obj['vod_score'] == 0): ?>暂无评分<?php endif; ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <?php if($obj['vod_douban_score']!=0): ?>
            <span class="hl-douban-score hl-pull-right"><em class="db">豆</em><em class="score"><?php echo $obj['vod_douban_score']; ?></em></span>
            <?php endif; ?>
            <span class="hl-score-data hl-text-muted hl-pull-right"><?php echo $obj['vod_score_num']; ?>次评分</span>
        </div>
        <div class="hl-score-rating">
            <div id="rating" class="rating-list" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?>" data-score="<?php echo ceil($obj['vod_score']/2); ?>">
                <span class="label-top hl-hide-sm hl-text-muted">给影片打分</span>
                <span class="label-top hl-hide-sm">《<?php echo $obj['vod_name']; ?>》</span>
                <ul class="rating rating-star">
                    <li class="big-star one" title="很差" val="1">很差</li>
                    <li class="big-star two" title="较差" val="2">较差</li>
                    <li class="big-star three" title="还行" val="3">还行</li>
                    <li class="big-star four" title="推荐" val="4">推荐</li>
                    <li class="big-star five" title="力荐" val="5">力荐</li>
                </ul>
                <span id="ratewords" class="label-list hl-text-muted hl-hidden-xs">我也要给影片打分</span>
            </div>
        </div>
    </div>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>asset/js/parts/qireobj.js"></script>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>asset/js/parts/gold.js"></script>
</div></div></span><?php endif; ?></h2>
    </div>
    <div class="hl-infos-content clearfix">
        <div class="hl-tag-item clearfix">
            <?php if(in_array($obj['type_id'], explode(',',$id1))): ?>
                <a href="javascript:void(0);"><?php echo date('Y-m-d',$obj['vod_time']); ?>发布</a>
            <?php else: if($obj['vod_douban_score']!=0): ?><span class="hl-douban-score"><em class="db">豆</em><em class="score"><?php echo $obj['vod_douban_score']; ?></em></span><?php endif; ?>
                <a class="hl-text-conch" href="javascript:void(0);"><?php if($obj['vod_serial'] > 0): if($obj['vod_serial'] == $obj['vod_total']): ?>全<?php echo $obj['vod_total']; ?>集<?php else: ?>更新至<?php echo $obj['vod_serial']; ?>集<?php endif; elseif($obj['vod_remarks'] != ''): ?><?php echo $obj['vod_remarks']; else: ?>已完结<?php endif; ?></a><i>/</i><?php if(($obj['vod_year'] != '') and ($obj['vod_year'] != 0)): ?><?php echo mac_url_create($obj['vod_year'],'year','vod','search','<i>/</i>'); endif; if($obj['vod_area'] != ''): ?><?php echo mac_url_create($obj['vod_area'],'area','vod','search','<i>/</i>'); endif; if($obj['vod_class'] != ''): ?><?php echo mac_url_create($obj['vod_class'],'class','vod','search','<i>/</i>'); endif; endif; ?>
        </div>
        <div class="hl-tool-icon hl-text-muted">
    <ul class="clearfix">
        <li class="hl-list-like"><a class="hl-like-btn digg_link" title="顶" data-id="<?php if($maccms['mid']==3): ?><?php echo $obj['topic_id']; elseif($maccms['mid']==2): ?><?php echo $obj['art_id']; else: ?><?php echo $obj['vod_id']; endif; ?>" data-mid="<?php echo $maccms['mid']; ?>" data-type="up" href="javascript:void(0);"><i class="iconfont hl-icon-zanshang"></i><i class="iconfont hl-icon-zanshang-fill"></i><em class="digg_num"><?php if($maccms['mid']==3): ?><?php echo $obj['topic_up']; elseif($maccms['mid']==2): ?><?php echo $obj['art_up']; else: ?><?php echo $obj['vod_up']; endif; ?></em></a></li>
        <?php if($maccms['mid']!=3): ?>
        <li class="hl-list-comm">
        <a class="hl-comm-btn" title="评论" href="#pinglun"><i class="iconfont hl-icon-pinglun"></i><em class="hl-total"></em></a>
        </li>
        <?php endif; ?>
        <li class="hl-list-share hl-alert-items hl-half-items">
        <a class="hl-share-btn" title="分享" href="javascript:void(0);"><i class="iconfont hl-icon-fenxiang"></i></a>
        <div class="hl-share-box hl-alert-box hl-bg-site hl-fadeIn-sm hl-half-alert hl-half-y100">
            <div class="hl-qrcode-wrap hl-hidden-xs">
                <p class="hl-text-site">微信扫一扫</p>
                <div class="hl-cans hl-hide"></div>
                <p class="hl-qrcode-pic hl-qrcode"></p>
            </div>
            <div class="hl-links-wrap">
                <span class="hl-share-tips hl-text-muted">复制下方链接，去粘贴给好友吧</span>
                <span class="hl-share-link hl-short-url hl-bg-subs" id="hl-short" >-<?php echo $obj['vod_name']; ?><?php echo $obj['art_name']; if($maccms['aid']==15): ?>-<?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; endif; if($maccms['mid'] == 3): ?>专题-<?php echo $obj['topic_name']; endif; ?></span>
                <span class="hl-copy-btn hl-btn-gradient conch-copy" id="hl-copy"  data-clipboard-action="copy" data-clipboard-target="#hl-short">复制链接</span>
            </div>
        </div>
        </li>
        <?php if($maccms['mid']!=3 && $maccms['mid']!=2): if($GLOBALS['config']['user']['status'] == 1): ?>
        <li><a class="hl-collect-btn mac_ulog" title="收藏" href="javascript:void(0);" data-type="2" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?>"><i class="iconfont hl-icon-shoucang"></i></a></li>
        <?php endif; if(is_array($obj['vod_down_list']) || $obj['vod_down_list'] instanceof \think\Collection || $obj['vod_down_list'] instanceof \think\Paginator): if( count($obj['vod_down_list'])==0 ) : echo "" ;else: foreach($obj['vod_down_list'] as $key=>$vo): if($key==1&&$maccms['aid']!=16): ?>						    
        <li><a class="hl-down-btn" title="下载" href="<?php echo mac_url_vod_down($obj,['sid'=>$vo['sid'],'nid'=>1]); ?>"><i class="iconfont hl-icon-xiazai"></i></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
        <li class="hl-list-qrcode hl-alert-items hl-pops-items">
        <a class="hl-weixin-btn" title="微信" href="javascript:void(0);"><i class="iconfont hl-icon-weixin"></i></a>
        <div class="hl-alert-box hl-bg-site hl-fadeIn-sm">
            <div class="hl-qrcode-wrap">
                <p class="hl-qrcode-pic"><img src="<?php echo mac_url_img($conch['theme']['wxqc']['pic']); ?>"></p>
                <p class="hl-text-muted"><?php echo $conch['theme']['wxqc']['tips']; ?></p>
            </div>
        </div>
        </li>
        <li class="hl-list-qrcode hl-alert-items hl-pops-items hl-hidden-xs">
        <a class="hl-mqrcode-btn" title="手机" href="javascript:void(0);"><i class="iconfont hl-icon-shouji"></i></a>
        <div class="hl-alert-box hl-bg-site hl-fadeIn">
            <div class="hl-qrcode-wrap">
                <div class="hl-cans hl-hide"></div>
                <p class="hl-qrcode-pic hl-qrcode"></p>
                <p class="hl-text-muted"><?php echo $conch['theme']['qrcode']['tips']; ?></p>
            </div>
        </div>
        </li>
        <?php endif; ?>
    </ul>
</div>
    </div>
    <div class="hl-vod-data<?php if(in_array($obj['type_id'], explode(',',$id1))): ?> hl-wide-items<?php endif; ?> hl-full-items">
    <div class="hl-data-sm hl-full-alert hl-full-x100">
        <div class="hl-full-head hl-hide-sm"><a class="hl-close-full hl-text-muted" href="javascript:void(0)"><i class="iconfont hl-icon-cuo"></i></a></div>
        <h2 class="hl-full-title hl-hide-sm">影片信息</h2>
        <div class="hl-full-box clearfix">
            <div class="hl-item-pic<?php if($maccms['aid']==14): ?> hl-hide-sm<?php endif; ?>">
                <span class="hl-item-thumb hl-lazy" title="<?php echo $obj['vod_name']; ?>" data-original="<?php echo mac_url_img($obj['vod_pic']); ?>">
                    <?php if($conch['theme']['cover']['tag']==1): ?>
                    <div class="hl-pic-tag">
                        <?php if($obj['vod_douban_score'] > 7.6): ?><span class="douban">豆瓣高分</span><?php elseif($obj['vod_state'] != ''): ?><span class="state"><?php echo $obj['vod_state']; ?></span><?php elseif($obj['vod_version'] != ''): ?><span class="version"><?php echo $obj['vod_version']; ?></span><?php endif; ?>
                    </div>
                    <?php endif; ?>
                </span>
            </div>
            <ul class="clearfix">
                <?php if($maccms['aid']!=14): ?><li class="hl-col-xs-12 hl-hidden-xs hl-vod-name"><h2><?php echo $obj['vod_name']; ?></h2></li><?php endif; ?>
                <li class="hl-col-xs-12 hl-hide-sm"><em class="hl-text-muted">片名：</em><span><?php echo $obj['vod_name']; ?></span></li>
                <?php if(!in_array($obj['type_id'], explode(',',$id1))): ?>
                <li class="hl-col-xs-12"><em class="hl-text-muted">状态：</em><span class="hl-text-conch"><?php if($obj['vod_serial'] > 0): if($obj['vod_serial'] == $obj['vod_total']): ?>全<?php echo $obj['vod_total']; ?>集<?php else: ?>更新至<?php echo $obj['vod_serial']; ?>集<?php endif; elseif($obj['vod_remarks'] != ''): ?><?php echo $obj['vod_remarks']; else: ?>已完结<?php endif; ?></span></li>
                <li class="hl-col-xs-12"><em class="hl-text-muted">主演：</em><?php echo mac_default(mac_url_create($obj['vod_actor'],'actor','vod','search','<i>/</i>'),'未知'); ?></li>
                <li class="hl-col-xs-12"><em class="hl-text-muted">导演：</em><?php echo mac_default(mac_url_create($obj['vod_director'],'director','vod','search','<i>/</i>'),'未知'); ?></li>
                <li class="hl-col-xs-12 hl-col-sm-4"><em class="hl-text-muted">年份：</em><?php echo mac_default($obj['vod_year'],'未知'); ?></li>
                <li class="hl-col-xs-12 hl-col-sm-4"><em class="hl-text-muted">地区：</em><?php echo mac_default($obj['vod_area'],'未知'); ?></li>
                <li class="hl-col-xs-12 hl-col-sm-4"><em class="hl-text-muted">类型：</em><?php echo mac_default(mac_url_create($obj['vod_class'],'class','vod','search','<i>/</i>'),'内详'); ?></li>
                <li class="hl-col-xs-12 hl-col-sm-4"><?php if($obj['vod_tv']!=''): ?><em class="hl-text-muted">频道：</em><?php echo mac_default($obj['vod_tv'],'内详'); else: ?><em class="hl-text-muted">时长：</em><?php echo mac_default($obj['vod_duration'],'内详'); endif; ?></li>
                <li class="hl-col-xs-12 hl-col-sm-4"><em class="hl-text-muted">上映：</em><?php echo mac_default($obj['vod_pubdate'],'未知'); ?></li>
                <li class="hl-col-xs-12 hl-col-sm-4"><em class="hl-text-muted">语言：</em><?php echo mac_default($obj['vod_lang'],'内详'); ?></li>
                <?php endif; ?>
                <li class="hl-col-xs-12"><em class="hl-text-muted">更新：</em><?php echo date('Y-m-d H:i',$obj['vod_time']); ?></li>
                <li class="hl-col-xs-12 blurb"><em class="hl-text-muted">简介：</em><?php echo mac_default(mac_filter_html($obj['vod_content']),'暂无简介'); ?></li>
            </ul>
        </div>
    </div>
    <?php if($maccms['aid']==14): if(!in_array($obj['type_id'], explode(',',$id1))): ?>
    <div class="hl-data-xs hl-text-muted">
        <a class="hl-data-menu hl-full-op" href="javascript:void(0)"><?php if($obj['vod_year']!=''&&$obj['vod_year']!=0): ?><span><?php echo $obj['vod_year']; ?></span><em>/</em><?php endif; if($obj['vod_area']!=''): ?><span><?php echo $obj['vod_area']; ?></span><em>/</em><?php endif; if($obj['vod_class']!=''): ?><span class="hl-ma0"><?php echo mac_filter_html(mac_url_create($obj['vod_class'],'class')); ?></span><em>/</em><?php endif; if($obj['vod_pubdate']!=''): ?><span><?php echo $obj['vod_pubdate']; ?>上映</span><em>/</em><?php endif; if($obj['vod_lang']!=''): ?><span><?php echo $obj['vod_lang']; ?></span><em>/</em><?php endif; ?><i class="iconfont hl-icon-jiantouyou"></i></a>

    </div>
    <?php endif; endif; ?>
</div>
</div>
                    <?php if($maccms['mid']==1): ?>
<div class="hl-crumbs-all hl-hidden-xs">
    <div class="hl-crumbs-list hl-lc-1 clearfix">
        <a class="hl-crumb-item hl-text-muted" href="<?php echo $maccms['path']; ?>">首页</a>
        <?php if($obj['type_1']!=''): ?>
        <a class="hl-crumb-item hl-text-muted" href="<?php echo mac_url_type($obj['type_1']); ?>"><?php echo $obj['type_1']['type_name']; ?></a><?php endif; ?>
        <a class="hl-crumb-item hl-text-muted" href="<?php echo mac_url_type($obj['type']); ?>"><?php echo $obj['type']['type_name']; ?></a>
        <?php if($obj['vod_name']!=''): ?>
        <span class="hl-crumb-item"><?php echo $obj['vod_name']; ?></span><?php endif; ?>
    </div>
</div>
<?php elseif($maccms['mid']==2): ?>
<div class="hl-crumbs-all hl-hidden-xs">
    <div class="hl-crumbs-list hl-lc-1 clearfix">
        <a class="hl-crumb-item hl-text-muted" href="<?php echo $maccms['path']; ?>">首页</a>
        <?php if($obj['type_1']!=''): ?>
        <a class="hl-crumb-item hl-text-muted" href="<?php echo mac_url_type($obj['type_1']); ?>"><?php echo $obj['type_1']['type_name']; ?></a><?php endif; if($maccms['aid']==24): ?>
        <a class="hl-crumb-item hl-text-muted" href="<?php echo mac_url_type($obj['type']); ?>"><?php echo $obj['type']['type_name']; ?></a><?php else: ?>
        <a class="hl-crumb-item hl-text-muted" href="<?php echo mac_url_type($obj); ?>"><?php echo $obj['type_name']; ?></a><?php endif; if($obj['art_name']!=''): ?>
        <span class="hl-crumb-item"><?php echo $obj['art_name']; ?></span><?php endif; ?>
    </div>
</div>
<?php endif; ?>
                </div>
                <div class="hl-col-xs-12 hl-col-md-30w hl-col-lg-3 hl-playside-wrap">
                <div class="hl-play-scrollbar hl-play-side">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide clearfix" style="height: auto;">
                            <?php if($obj['vod_copyright'] == 1 && $GLOBALS['config']['app']['copyright_status'] == 1): else: if(!(empty($obj['vod_play_list']) || (($obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator ) && $obj['vod_play_list']->isEmpty()))): ?>
<div class="hl-row-box hl-rb-playlist<?php if($maccms['aid']==15): ?> hl-playpage-playlist<?php endif; ?> hl-tabs-item clearfix" id="playlist">
    <div class="hl-rb-head clearfix">
        <h3 class="hl-rb-title">播放列表</h3>
        <div class="hl-rb-tips hl-notice-box hl-text-muted">
            <marquee scrollamount="4" behavior="scroll" onmouseover=this.stop() onmouseout=this.start()>
            <?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): ?>
            <span class="hl-tabs-box2" style="display: <?php if($maccms['aid']==15&&$vo['player_info']['from']==$obj['vod_play_list'][$param['sid']]['player_info']['from']): ?>block<?php elseif($maccms['aid']!=15&&$key==1): ?>block<?php else: ?>none<?php endif; ?>;">
                <i class="iconfont hl-icon-tongzhi"></i>&nbsp;当前资源来源<span class="hl-text-site"><?php echo $vo['player_info']['show']; ?></span>&nbsp;-&nbsp;<?php echo mac_default(mac_substring($vo['player_info']['tip'],20),'在线播放,无需安装播放器'); ?>
            </span>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </marquee>
            <div class="hl-nb-right-s"><i class="hl-mbg"></i></div>
            <div class="hl-nb-left-s"><i class="hl-mbg"></i></div>
        </div>
        <a class="hl-sort-btn hl-rb-more hl-text-muted hl-pull-right" href="javascript:void(0)"><i class="iconfont hl-icon-daoxu"></i>&nbsp;<span>倒序</span></a>
    </div>
    <div class="hl-play-source hl-hidden">
        <div class="hl-plays-wrap hl-tabs-swiper">
            <div class="hl-plays-from hl-tabs swiper-wrapper clearfix">
                <?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): ?>
                <a class="hl-tabs-btn hl-slide-swiper<?php if($maccms['aid']==15&&$vo['player_info']['from']==$obj['vod_play_list'][$param['sid']]['player_info']['from']): ?> active<?php elseif($maccms['aid']!=15&&$key==1): ?> active<?php endif; ?>" href="javascript:void(0);" alt="<?php echo $vo['player_info']['show']; ?>"><i class="iconfont hl-icon-shipin"></i>&nbsp;<?php echo $vo['player_info']['show']; ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
        <?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): ?>
        <div class="hl-tabs-box hl-fadeIn" style="display: <?php if($maccms['aid']==15&&$vo['player_info']['from']==$obj['vod_play_list'][$param['sid']]['player_info']['from']): ?>block<?php elseif($maccms['aid']!=15&&$key==1): ?>block<?php else: ?>none<?php endif; ?>;">
            <div class="row">
                <div class="hl-list-wrap">
                    <?php if(is_array($vo['urls']) || $vo['urls'] instanceof \think\Collection || $vo['urls'] instanceof \think\Paginator): if( count($vo['urls'])==0 ) : echo "" ;else: foreach($vo['urls'] as $key2=>$vo2): endforeach; endif; else: echo "" ;endif; ?>
                    <ul class="hl-plays-list hl-sort-list<?php if($key2>6): ?> hl-list-hide-xs<?php endif; if($key2>24): ?> hl-list-sm<?php endif; if($maccms['aid']==15&&$key2>8): ?> hl-list-md<?php endif; ?> clearfix" id="hl-plays-list">
                        <?php if(is_array($vo['urls']) || $vo['urls'] instanceof \think\Collection || $vo['urls'] instanceof \think\Paginator): if( count($vo['urls'])==0 ) : echo "" ;else: foreach($vo['urls'] as $key2=>$vo2): ?>
                        <li class="hl-col-xs-4<?php if($maccms['aid']==15): ?> hl-col-sm-2  hl-col-md-6<?php else: ?> hl-col-sm-2<?php endif; ?>"><a href="<?php echo mac_url_vod_play($obj,['sid'=>$vo['sid'],'nid'=>$vo2['nid']]); ?>"<?php if($param['sid']==$vo['sid']&&$param['nid']==$vo2['nid']): ?> class="hl-text-conch active"<?php endif; ?>><?php if($param['sid']==$vo['sid']&&$param['nid']==$vo2['nid']): ?><em class="hl-play-active hl-bg-conch"></em><?php endif; ?><?php echo $vo2['name']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; if($key2>6||$key2>24||$key2>8&&$maccms['aid']==15): ?>
                        <div class="hl-show-div hl-col-xs-4<?php if($maccms['aid']==15): ?> hl-col-sm-2  hl-col-md-6<?php else: ?> hl-col-sm-2<?php endif; ?>"><a class="hl-show-list" href="javascript:void(0)"><i class="iconfont hl-icon-jiantoushang"></i><em>展开全部</em></a></div><?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>
<?php endif; endif; if($conch['theme']['ads']['btn']==1): if($conch['theme']['ads']['vip']==1&&$user['group_id'] > 2): else: if($conch['theme']['ads']['sw']!=''): ?>
<div id="ad1007" class="conch-ads-box hl-this-box hl-row-box clearfix">
    <a class="hl-close-this" href="javascript:void(0)"><i class="iconfont hl-icon-cuo"></i></a>
    <div class="ads ads-sw"><?php echo $conch['theme']['ads']['sw']; ?></div>
    <?php if($conch['theme']['ads']['tip']==1): ?><span class="hl-ad-tip">广告</span><?php endif; ?>
</div>
<?php endif; endif; endif; if($obj['vod_rel_vod']!=''&&$conch['theme']['relvod']['btn']==1): ?>
<div class="hl-row-box hl-rb-relvod hl-one-relvod clearfix">
    <div class="hl-rb-head clearfix">
        <h3 class="hl-rb-title"><?php echo mac_default($conch['theme']['relvod']['title'],'相关视频'); ?></h3>
    </div>
    <div class="row">
       <?php $__TAG__ = '{"num":"10","rel":"'.$obj['vod_rel_vod'].'","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;endforeach; endif; else: echo "" ;endif; ?>
        <div class="hl-list-wrap<?php if($key > 4): ?> hl-list-hide<?php endif; ?>">
            <ul class="hl-vod-list hl-wide-list clearfix">
            <?php $__TAG__ = '{"num":"10","rel":"'.$obj['vod_rel_vod'].'","order":"'.($conch['theme']['relvod']['order']).'","by":"'.($conch['theme']['relvod']['by']).'","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                <li class="hl-list-item hl-col-xs-6 hl-col-sm-25w hl-col-md-12">
                <?php $id1=$conch['theme']['svideo']['id'];$id2=$conch['theme']['cover']['wide'];$id=$id1.','.$id2;$score=$conch['theme']['cover']['score']; ?>
<a class="hl-item-thumb hl-lazy" <?php if(in_array($vo['type_id'], explode(',',$id1))||$conch['theme']['vod']['url']==1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>">
    <div class="hl-pic-icon hl-hidden-xs"><i class="iconfont hl-icon-bofang-fill"></i></div>
    <?php if($conch['theme']['cover']['tag']==1): ?>
    <div class="hl-pic-tag">
        <?php if($vo['vod_douban_score'] > 7.6): ?><span class="douban">豆瓣高分</span><?php elseif($vo['vod_state'] != ''): ?><span class="state"><?php echo $vo['vod_state']; ?></span><?php elseif($vo['vod_version'] != ''): ?><span class="version"><?php echo $vo['vod_version']; ?></span><?php endif; ?>
    </div>
    <?php endif; if(in_array($vo['type_id'], explode(',',$id1))): if($vo['vod_duration'] != ''||$vo['vod_remarks'] != ''): ?>
    <div class="hl-pic-text">
        <span class="hl-lc-1 remarks"><?php echo mac_default($vo['vod_duration'],$vo['vod_remarks']); ?></span>
    </div>
    <?php endif; else: ?>
    <div class="hl-pic-text">
        <span class="hl-lc-1 remarks"><?php if($vo['vod_serial'] > 0): if($vo['vod_serial'] == $vo['vod_total']): ?>全<?php echo $vo['vod_total']; ?>集<?php else: ?>更新至<?php echo $vo['vod_serial']; ?>集<?php endif; elseif($vo['vod_remarks'] != ''): ?><?php echo $vo['vod_remarks']; else: ?>已完结<?php endif; ?></span>
    </div>
    <?php endif; ?>
</a>
<div class="hl-item-text">
    <?php if(in_array($vo['type_id'], explode(',',$id1)) && $conch['theme']['svideo']['title']==2): ?>
    <div class="hl-item-title hl-title-two hl-text-site hl-lc-2"><a <?php if(in_array($vo['type_id'], explode(',',$id1))||$conch['theme']['vod']['url']==1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></div>
    <?php else: ?>
    <div class="hl-item-title hl-text-site hl-lc-1"><a <?php if(in_array($vo['type_id'], explode(',',$id1))||$conch['theme']['vod']['url']==1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></div>
    <div class="hl-item-sub hl-text-muted hl-lc-1">
        <?php if(in_array($vo['type_id'], explode(',',$score))||in_array($vo['type_id_1'], explode(',',$score))): if($vo['vod_score'] > 0): ?><span class="hl-text-conch score"><?php echo $vo['vod_score']; ?></span><?php endif; endif; ?>
        <?php echo mac_default(mac_filter_html(mac_url_create(mac_default($vo['vod_sub'],$vo['vod_actor']),'actor','vod','search','/')),'未知'); ?>
    </div>
    <?php endif; ?>
</div>

                </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <div class="hl-goto-box hl-hide-sm">
                <a class="hl-bg-subs hl-text-muted hl-more-list" href="javascript:;">查看更多</a>
            </div> 
        </div>
    </div> 
</div>
<?php else: ?>
<div class="hl-row-box hl-rb-relvod hl-one-relvod hl-hidden-xs hl-hidden-sm clearfix">
    <div class="hl-rb-head clearfix">
        <h3 class="hl-rb-title">猜你喜欢</h3>
    </div>
    <div class="row">
        <div class="hl-list-wrap">
            <ul class="hl-vod-list hl-wide-list clearfix">
            <?php $__TAG__ = '{"num":"12","type":"current","paging":"false","order":"desc","by":"rnd","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                <li class="hl-list-item hl-col-xs-6 hl-col-sm-25w hl-col-md-12">
                <?php $id1=$conch['theme']['svideo']['id'];$id2=$conch['theme']['cover']['wide'];$id=$id1.','.$id2;$score=$conch['theme']['cover']['score']; ?>
<a class="hl-item-thumb hl-lazy" <?php if(in_array($vo['type_id'], explode(',',$id1))||$conch['theme']['vod']['url']==1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>">
    <div class="hl-pic-icon hl-hidden-xs"><i class="iconfont hl-icon-bofang-fill"></i></div>
    <?php if($conch['theme']['cover']['tag']==1): ?>
    <div class="hl-pic-tag">
        <?php if($vo['vod_douban_score'] > 7.6): ?><span class="douban">豆瓣高分</span><?php elseif($vo['vod_state'] != ''): ?><span class="state"><?php echo $vo['vod_state']; ?></span><?php elseif($vo['vod_version'] != ''): ?><span class="version"><?php echo $vo['vod_version']; ?></span><?php endif; ?>
    </div>
    <?php endif; if(in_array($vo['type_id'], explode(',',$id1))): if($vo['vod_duration'] != ''||$vo['vod_remarks'] != ''): ?>
    <div class="hl-pic-text">
        <span class="hl-lc-1 remarks"><?php echo mac_default($vo['vod_duration'],$vo['vod_remarks']); ?></span>
    </div>
    <?php endif; else: ?>
    <div class="hl-pic-text">
        <span class="hl-lc-1 remarks"><?php if($vo['vod_serial'] > 0): if($vo['vod_serial'] == $vo['vod_total']): ?>全<?php echo $vo['vod_total']; ?>集<?php else: ?>更新至<?php echo $vo['vod_serial']; ?>集<?php endif; elseif($vo['vod_remarks'] != ''): ?><?php echo $vo['vod_remarks']; else: ?>已完结<?php endif; ?></span>
    </div>
    <?php endif; ?>
</a>
<div class="hl-item-text">
    <?php if(in_array($vo['type_id'], explode(',',$id1)) && $conch['theme']['svideo']['title']==2): ?>
    <div class="hl-item-title hl-title-two hl-text-site hl-lc-2"><a <?php if(in_array($vo['type_id'], explode(',',$id1))||$conch['theme']['vod']['url']==1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></div>
    <?php else: ?>
    <div class="hl-item-title hl-text-site hl-lc-1"><a <?php if(in_array($vo['type_id'], explode(',',$id1))||$conch['theme']['vod']['url']==1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></div>
    <div class="hl-item-sub hl-text-muted hl-lc-1">
        <?php if(in_array($vo['type_id'], explode(',',$score))||in_array($vo['type_id_1'], explode(',',$score))): if($vo['vod_score'] > 0): ?><span class="hl-text-conch score"><?php echo $vo['vod_score']; ?></span><?php endif; endif; ?>
        <?php echo mac_default(mac_filter_html(mac_url_create(mac_default($vo['vod_sub'],$vo['vod_actor']),'actor','vod','search','/')),'未知'); ?>
    </div>
    <?php endif; ?>
</div>

                </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div> 
</div>
<?php endif; ?>
                        </div>
                    </div>
                    <div class="swiper-scrollbar"></div>
                </div> 
                </div>
            </div>
        </div>
    </div>
    <div class="conch-ctwrap hl-pa0">
        <div class="container">
            <div class="hl-row-box clearfix">
                <div class="hl-col-xs-12 hl-col-md-70w hl-col-lg-9">
                    <div class="hl-rb-left hl-marg-right50 clearfix">
                        <?php if($maccms['mid']==1): $id1=$conch['theme']['svideo']['id'];$id2=$conch['theme']['cover']['wide'];$id=$id1.','.$id2; if($maccms['aid']!=15&&$obj['vod_rel_vod']!=''&&$conch['theme']['relvod']['btn']==1): ?>
<div class="hl-row-box hl-rb-relvod clearfix">
    <div class="hl-rb-head clearfix">
        <h3 class="hl-rb-title"><?php echo mac_default($conch['theme']['relvod']['title'],'相关视频'); ?></h3>
    </div>
    <div class="row">
        <?php $__TAG__ = '{"num":"10","rel":"'.$obj['vod_rel_vod'].'","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;endforeach; endif; else: echo "" ;endif; ?>
        <div class="hl-list-wrap<?php if($key > 4): ?> hl-list-hide<?php endif; ?>">
            <ul class="hl-vod-list hl-wide-list clearfix">
            <?php $__TAG__ = '{"num":"10","rel":"'.$obj['vod_rel_vod'].'","order":"'.($conch['theme']['relvod']['order']).'","by":"'.($conch['theme']['relvod']['by']).'","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                <li class="hl-list-item hl-col-xs-6 hl-col-sm-3 hl-col-lg-20w">
                <?php $id1=$conch['theme']['svideo']['id'];$id2=$conch['theme']['cover']['wide'];$id=$id1.','.$id2;$score=$conch['theme']['cover']['score']; ?>
<a class="hl-item-thumb hl-lazy" <?php if(in_array($vo['type_id'], explode(',',$id1))||$conch['theme']['vod']['url']==1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>">
    <div class="hl-pic-icon hl-hidden-xs"><i class="iconfont hl-icon-bofang-fill"></i></div>
    <?php if($conch['theme']['cover']['tag']==1): ?>
    <div class="hl-pic-tag">
        <?php if($vo['vod_douban_score'] > 7.6): ?><span class="douban">豆瓣高分</span><?php elseif($vo['vod_state'] != ''): ?><span class="state"><?php echo $vo['vod_state']; ?></span><?php elseif($vo['vod_version'] != ''): ?><span class="version"><?php echo $vo['vod_version']; ?></span><?php endif; ?>
    </div>
    <?php endif; if(in_array($vo['type_id'], explode(',',$id1))): if($vo['vod_duration'] != ''||$vo['vod_remarks'] != ''): ?>
    <div class="hl-pic-text">
        <span class="hl-lc-1 remarks"><?php echo mac_default($vo['vod_duration'],$vo['vod_remarks']); ?></span>
    </div>
    <?php endif; else: ?>
    <div class="hl-pic-text">
        <span class="hl-lc-1 remarks"><?php if($vo['vod_serial'] > 0): if($vo['vod_serial'] == $vo['vod_total']): ?>全<?php echo $vo['vod_total']; ?>集<?php else: ?>更新至<?php echo $vo['vod_serial']; ?>集<?php endif; elseif($vo['vod_remarks'] != ''): ?><?php echo $vo['vod_remarks']; else: ?>已完结<?php endif; ?></span>
    </div>
    <?php endif; ?>
</a>
<div class="hl-item-text">
    <?php if(in_array($vo['type_id'], explode(',',$id1)) && $conch['theme']['svideo']['title']==2): ?>
    <div class="hl-item-title hl-title-two hl-text-site hl-lc-2"><a <?php if(in_array($vo['type_id'], explode(',',$id1))||$conch['theme']['vod']['url']==1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></div>
    <?php else: ?>
    <div class="hl-item-title hl-text-site hl-lc-1"><a <?php if(in_array($vo['type_id'], explode(',',$id1))||$conch['theme']['vod']['url']==1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></div>
    <div class="hl-item-sub hl-text-muted hl-lc-1">
        <?php if(in_array($vo['type_id'], explode(',',$score))||in_array($vo['type_id_1'], explode(',',$score))): if($vo['vod_score'] > 0): ?><span class="hl-text-conch score"><?php echo $vo['vod_score']; ?></span><?php endif; endif; ?>
        <?php echo mac_default(mac_filter_html(mac_url_create(mac_default($vo['vod_sub'],$vo['vod_actor']),'actor','vod','search','/')),'未知'); ?>
    </div>
    <?php endif; ?>
</div>

                </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <div class="hl-goto-box hl-hide-sm">
                <a class="hl-bg-subs hl-text-muted hl-more-list" href="javascript:;">查看更多</a>
            </div> 
        </div>
    </div>
</div>
<?php endif; if($obj['vod_actor']!=''&&$conch['theme']['relactor']['btn']==1): $__TAG__ = '{"num":"1","order":"desc","name":"'.$obj[vod_actor].'","id":"vo1","key":"key"}';$__LIST__ = model("Actor")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($key % 2 );++$key;if($vo1['actor_name'] != ''): if($maccms['aid']==14): ?>
<div class="hl-row-box hl-rb-relactor hl-swiper-item clearfix">
    <div class="hl-rb-head clearfix">
        <h3 class="hl-rb-title">演职人员</h3>
    </div>
    <div class="row">
        <div class="hl-list-wrap hl-tabs-swiper">
            <ul class="hl-actor-list swiper-wrapper clearfix">
                <?php $__TAG__ = '{"num":"6","order":"'.($conch['theme']['relactor']['order1']).'","by":"'.($conch['theme']['relactor']['by1']).'","name":"'.$obj[vod_actor].'","id":"vo","key":"key"}';$__LIST__ = model("Actor")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                <li class="hl-list-item hl-col-xs-3 hl-col-sm-2 hl-slide-swiper">
                <a class="hl-item-link hl-text-site" href="<?php if($maccms['aid']==1||$maccms['aid']==15||$maccms['aid']==16): ?>javascript:;<?php else: ?><?php echo mac_url_actor_detail($vo); endif; ?>">
    <span class="hl-item-thumb hl-lazy" data-original="<?php echo mac_url_img($vo['actor_pic']); ?>"><span class="hl-pic-icon hl-hidden-xs"><i class="iconfont hl-icon-lianjie"></i></span></span>
    <div class="hl-item-text">
        <span class="hl-item-title hl-lc-1"><?php echo $vo['actor_name']; ?></span>
        <span class="hl-item-sub hl-text-muted hl-lc-1"><?php echo mac_default($vo['actor_remarks'],'演艺人员'); ?></span>
    </div>
</a>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
</div>
<?php else: ?>
<div class="hl-row-box">
    <div class="hl-rb-actor hl-rb-relactor hl-tabs-item hl-swiper-item clearfix">
        <div class="hl-rb-head clearfix">
            <h3 class="hl-rb-title"><?php echo mac_default($conch['theme']['relactor']['title'],'相关明星'); ?></h3>
        </div>
        <div class="row">
            <div class="hl-list-wrap hl-tabs-swiper">
            <ul class="hl-actor-list hl-actor-sm hl-tabs swiper-wrapper clearfix">
                <?php $__TAG__ = '{"num":"6","order":"'.($conch['theme']['relactor']['order1']).'","by":"'.($conch['theme']['relactor']['by1']).'","name":"'.$obj[vod_actor].'","id":"vo","key":"key"}';$__LIST__ = model("Actor")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                <li class="hl-col-xs-5 hl-col-sm-3 hl-col-lg-20w hl-tabs-btn<?php if($key==1): ?> active<?php endif; ?> hl-slide-swiper">
                    <a class="hl-item-link hl-text-site" href="<?php if($maccms['aid']==1||$maccms['aid']==15||$maccms['aid']==16): ?>javascript:;<?php else: ?><?php echo mac_url_actor_detail($vo); endif; ?>">
    <span class="hl-item-thumb hl-lazy" data-original="<?php echo mac_url_img($vo['actor_pic']); ?>"><span class="hl-pic-icon hl-hidden-xs"><i class="iconfont hl-icon-lianjie"></i></span></span>
    <div class="hl-item-text">
        <span class="hl-item-title hl-lc-1"><?php echo $vo['actor_name']; ?></span>
        <span class="hl-item-sub hl-text-muted hl-lc-1"><?php echo mac_default($vo['actor_remarks'],'演艺人员'); ?></span>
    </div>
</a>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            </div>
        </div>
        <div class="row">
            <?php $__TAG__ = '{"num":"6","order":"'.($conch['theme']['relactor']['order1']).'","by":"'.($conch['theme']['relactor']['by1']).'","name":"'.$obj[vod_actor].'","id":"vo1","key":"key1"}';$__LIST__ = model("Actor")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key1 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($key1 % 2 );++$key1;?>
            <div class="hl-list-wrap hl-list-swiper2 hl-tabs-box" style="display: <?php if($key1 == 1): ?>block<?php else: ?>none<?php endif; ?>;">
                <ul class="hl-vod-list hl-fadeIn swiper-wrapper clearfix">
                <?php $__TAG__ = '{"num":"10","type":"all","actor":"'.$vo1['actor_name'].'","order":"'.($conch['theme']['relactor']['order2']).'","by":"'.($conch['theme']['relactor']['by2']).'","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                    <li class="hl-list-item hl-col-xs-4 hl-col-sm-3 hl-col-lg-20w hl-slide-swiper">
                    <?php $id1=$conch['theme']['svideo']['id'];$id2=$conch['theme']['cover']['wide'];$id=$id1.','.$id2;$score=$conch['theme']['cover']['score']; ?>
<a class="hl-item-thumb hl-lazy" <?php if(in_array($vo['type_id'], explode(',',$id1))||$conch['theme']['vod']['url']==1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>">
    <div class="hl-pic-icon hl-hidden-xs"><i class="iconfont hl-icon-bofang-fill"></i></div>
    <?php if($conch['theme']['cover']['tag']==1): ?>
    <div class="hl-pic-tag">
        <?php if($vo['vod_douban_score'] > 7.6): ?><span class="douban">豆瓣高分</span><?php elseif($vo['vod_state'] != ''): ?><span class="state"><?php echo $vo['vod_state']; ?></span><?php elseif($vo['vod_version'] != ''): ?><span class="version"><?php echo $vo['vod_version']; ?></span><?php endif; ?>
    </div>
    <?php endif; if(in_array($vo['type_id'], explode(',',$id1))): if($vo['vod_duration'] != ''||$vo['vod_remarks'] != ''): ?>
    <div class="hl-pic-text">
        <span class="hl-lc-1 remarks"><?php echo mac_default($vo['vod_duration'],$vo['vod_remarks']); ?></span>
    </div>
    <?php endif; else: ?>
    <div class="hl-pic-text">
        <span class="hl-lc-1 remarks"><?php if($vo['vod_serial'] > 0): if($vo['vod_serial'] == $vo['vod_total']): ?>全<?php echo $vo['vod_total']; ?>集<?php else: ?>更新至<?php echo $vo['vod_serial']; ?>集<?php endif; elseif($vo['vod_remarks'] != ''): ?><?php echo $vo['vod_remarks']; else: ?>已完结<?php endif; ?></span>
    </div>
    <?php endif; ?>
</a>
<div class="hl-item-text">
    <?php if(in_array($vo['type_id'], explode(',',$id1)) && $conch['theme']['svideo']['title']==2): ?>
    <div class="hl-item-title hl-title-two hl-text-site hl-lc-2"><a <?php if(in_array($vo['type_id'], explode(',',$id1))||$conch['theme']['vod']['url']==1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></div>
    <?php else: ?>
    <div class="hl-item-title hl-text-site hl-lc-1"><a <?php if(in_array($vo['type_id'], explode(',',$id1))||$conch['theme']['vod']['url']==1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></div>
    <div class="hl-item-sub hl-text-muted hl-lc-1">
        <?php if(in_array($vo['type_id'], explode(',',$score))||in_array($vo['type_id_1'], explode(',',$score))): if($vo['vod_score'] > 0): ?><span class="hl-text-conch score"><?php echo $vo['vod_score']; ?></span><?php endif; endif; ?>
        <?php echo mac_default(mac_filter_html(mac_url_create(mac_default($vo['vod_sub'],$vo['vod_actor']),'actor','vod','search','/')),'未知'); ?>
    </div>
    <?php endif; ?>
</div>

                    </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                <div class="hl-ls-arrow hl-hidden-xs">
                    <a class="swiper-button-prev" href="javascript:;"><i class="iconfont hl-icon-jiantouzuo"></i></a>
                    <div class="swiper-pagination"></div>
                    <a class="swiper-button-next" href="javascript:;"><i class="iconfont hl-icon-jiantouyou"></i></a>
                </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
</div>
<?php endif; endif; endforeach; endif; else: echo "" ;endif; endif; if($conch['theme']['rel']['btn']==1): ?>
<div class="hl-row-box hl-rb-relvod clearfix">
    <div class="hl-rb-head clearfix">
        <h3 class="hl-rb-title"><?php echo mac_default($conch['theme']['rel']['title'],'为你推荐'); ?></h3>
        <a class="hl-rb-more hl-text-muted hl-pull-right hl-more-change" href="javascript:;"><i class="iconfont hl-icon-qiehuan"></i>&nbsp;换一换</a>
    </div>
    <div class="row">
        <div class="hl-list-wrap hl-change-list">
            <div class="hl-change-box1">
                <ul class="hl-vod-list<?php if(in_array($obj['type_id'], explode(',',$id))): ?> hl-wide-list<?php endif; ?> clearfix">
                <?php $__TAG__ = '{"num":"10","type":"current","order":"'.($conch['theme']['rel']['order']).'","by":"'.($conch['theme']['rel']['by']).'","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                    <li class="hl-list-item<?php if(in_array($obj['type_id'], explode(',',$id))): ?> hl-col-xs-6<?php else: ?> hl-col-xs-4<?php endif; ?> hl-col-sm-3 hl-col-lg-20w">
                    <?php $id1=$conch['theme']['svideo']['id'];$id2=$conch['theme']['cover']['wide'];$id=$id1.','.$id2;$score=$conch['theme']['cover']['score']; ?>
<a class="hl-item-thumb hl-lazy" <?php if(in_array($vo['type_id'], explode(',',$id1))||$conch['theme']['vod']['url']==1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>">
    <div class="hl-pic-icon hl-hidden-xs"><i class="iconfont hl-icon-bofang-fill"></i></div>
    <?php if($conch['theme']['cover']['tag']==1): ?>
    <div class="hl-pic-tag">
        <?php if($vo['vod_douban_score'] > 7.6): ?><span class="douban">豆瓣高分</span><?php elseif($vo['vod_state'] != ''): ?><span class="state"><?php echo $vo['vod_state']; ?></span><?php elseif($vo['vod_version'] != ''): ?><span class="version"><?php echo $vo['vod_version']; ?></span><?php endif; ?>
    </div>
    <?php endif; if(in_array($vo['type_id'], explode(',',$id1))): if($vo['vod_duration'] != ''||$vo['vod_remarks'] != ''): ?>
    <div class="hl-pic-text">
        <span class="hl-lc-1 remarks"><?php echo mac_default($vo['vod_duration'],$vo['vod_remarks']); ?></span>
    </div>
    <?php endif; else: ?>
    <div class="hl-pic-text">
        <span class="hl-lc-1 remarks"><?php if($vo['vod_serial'] > 0): if($vo['vod_serial'] == $vo['vod_total']): ?>全<?php echo $vo['vod_total']; ?>集<?php else: ?>更新至<?php echo $vo['vod_serial']; ?>集<?php endif; elseif($vo['vod_remarks'] != ''): ?><?php echo $vo['vod_remarks']; else: ?>已完结<?php endif; ?></span>
    </div>
    <?php endif; ?>
</a>
<div class="hl-item-text">
    <?php if(in_array($vo['type_id'], explode(',',$id1)) && $conch['theme']['svideo']['title']==2): ?>
    <div class="hl-item-title hl-title-two hl-text-site hl-lc-2"><a <?php if(in_array($vo['type_id'], explode(',',$id1))||$conch['theme']['vod']['url']==1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></div>
    <?php else: ?>
    <div class="hl-item-title hl-text-site hl-lc-1"><a <?php if(in_array($vo['type_id'], explode(',',$id1))||$conch['theme']['vod']['url']==1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></div>
    <div class="hl-item-sub hl-text-muted hl-lc-1">
        <?php if(in_array($vo['type_id'], explode(',',$score))||in_array($vo['type_id_1'], explode(',',$score))): if($vo['vod_score'] > 0): ?><span class="hl-text-conch score"><?php echo $vo['vod_score']; ?></span><?php endif; endif; ?>
        <?php echo mac_default(mac_filter_html(mac_url_create(mac_default($vo['vod_sub'],$vo['vod_actor']),'actor','vod','search','/')),'未知'); ?>
    </div>
    <?php endif; ?>
</div>

                    </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <div class="hl-change-box2 hl-hide">
                <ul class="hl-vod-list<?php if(in_array($obj['type_id'], explode(',',$id))): ?> hl-wide-list<?php endif; ?> clearfix">
                <?php $__TAG__ = '{"num":"10","type":"current","order":"'.($conch['theme']['rel']['order']).'","by":"'.($conch['theme']['rel']['by']).'","start":"11","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                    <li class="hl-list-item<?php if(in_array($obj['type_id'], explode(',',$id))): ?> hl-col-xs-6<?php else: ?> hl-col-xs-4<?php endif; ?> hl-col-sm-3 hl-col-lg-20w">
                    <?php $id1=$conch['theme']['svideo']['id'];$id2=$conch['theme']['cover']['wide'];$id=$id1.','.$id2;$score=$conch['theme']['cover']['score']; ?>
<a class="hl-item-thumb hl-lazy" <?php if(in_array($vo['type_id'], explode(',',$id1))||$conch['theme']['vod']['url']==1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>">
    <div class="hl-pic-icon hl-hidden-xs"><i class="iconfont hl-icon-bofang-fill"></i></div>
    <?php if($conch['theme']['cover']['tag']==1): ?>
    <div class="hl-pic-tag">
        <?php if($vo['vod_douban_score'] > 7.6): ?><span class="douban">豆瓣高分</span><?php elseif($vo['vod_state'] != ''): ?><span class="state"><?php echo $vo['vod_state']; ?></span><?php elseif($vo['vod_version'] != ''): ?><span class="version"><?php echo $vo['vod_version']; ?></span><?php endif; ?>
    </div>
    <?php endif; if(in_array($vo['type_id'], explode(',',$id1))): if($vo['vod_duration'] != ''||$vo['vod_remarks'] != ''): ?>
    <div class="hl-pic-text">
        <span class="hl-lc-1 remarks"><?php echo mac_default($vo['vod_duration'],$vo['vod_remarks']); ?></span>
    </div>
    <?php endif; else: ?>
    <div class="hl-pic-text">
        <span class="hl-lc-1 remarks"><?php if($vo['vod_serial'] > 0): if($vo['vod_serial'] == $vo['vod_total']): ?>全<?php echo $vo['vod_total']; ?>集<?php else: ?>更新至<?php echo $vo['vod_serial']; ?>集<?php endif; elseif($vo['vod_remarks'] != ''): ?><?php echo $vo['vod_remarks']; else: ?>已完结<?php endif; ?></span>
    </div>
    <?php endif; ?>
</a>
<div class="hl-item-text">
    <?php if(in_array($vo['type_id'], explode(',',$id1)) && $conch['theme']['svideo']['title']==2): ?>
    <div class="hl-item-title hl-title-two hl-text-site hl-lc-2"><a <?php if(in_array($vo['type_id'], explode(',',$id1))||$conch['theme']['vod']['url']==1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></div>
    <?php else: ?>
    <div class="hl-item-title hl-text-site hl-lc-1"><a <?php if(in_array($vo['type_id'], explode(',',$id1))||$conch['theme']['vod']['url']==1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></div>
    <div class="hl-item-sub hl-text-muted hl-lc-1">
        <?php if(in_array($vo['type_id'], explode(',',$score))||in_array($vo['type_id_1'], explode(',',$score))): if($vo['vod_score'] > 0): ?><span class="hl-text-conch score"><?php echo $vo['vod_score']; ?></span><?php endif; endif; ?>
        <?php echo mac_default(mac_filter_html(mac_url_create(mac_default($vo['vod_sub'],$vo['vod_actor']),'actor','vod','search','/')),'未知'); ?>
    </div>
    <?php endif; ?>
</div>

                    </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <div class="hl-change-box3 hl-hide">
                <ul class="hl-vod-list<?php if(in_array($obj['type_id'], explode(',',$id))): ?> hl-wide-list<?php endif; ?> clearfix">
                <?php $__TAG__ = '{"num":"10","type":"current","order":"'.($conch['theme']['rel']['order']).'","by":"'.($conch['theme']['rel']['by']).'","start":"21","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                    <li class="hl-list-item<?php if(in_array($obj['type_id'], explode(',',$id))): ?> hl-col-xs-6<?php else: ?> hl-col-xs-4<?php endif; ?> hl-col-sm-3 hl-col-lg-20w">
                    <?php $id1=$conch['theme']['svideo']['id'];$id2=$conch['theme']['cover']['wide'];$id=$id1.','.$id2;$score=$conch['theme']['cover']['score']; ?>
<a class="hl-item-thumb hl-lazy" <?php if(in_array($vo['type_id'], explode(',',$id1))||$conch['theme']['vod']['url']==1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>">
    <div class="hl-pic-icon hl-hidden-xs"><i class="iconfont hl-icon-bofang-fill"></i></div>
    <?php if($conch['theme']['cover']['tag']==1): ?>
    <div class="hl-pic-tag">
        <?php if($vo['vod_douban_score'] > 7.6): ?><span class="douban">豆瓣高分</span><?php elseif($vo['vod_state'] != ''): ?><span class="state"><?php echo $vo['vod_state']; ?></span><?php elseif($vo['vod_version'] != ''): ?><span class="version"><?php echo $vo['vod_version']; ?></span><?php endif; ?>
    </div>
    <?php endif; if(in_array($vo['type_id'], explode(',',$id1))): if($vo['vod_duration'] != ''||$vo['vod_remarks'] != ''): ?>
    <div class="hl-pic-text">
        <span class="hl-lc-1 remarks"><?php echo mac_default($vo['vod_duration'],$vo['vod_remarks']); ?></span>
    </div>
    <?php endif; else: ?>
    <div class="hl-pic-text">
        <span class="hl-lc-1 remarks"><?php if($vo['vod_serial'] > 0): if($vo['vod_serial'] == $vo['vod_total']): ?>全<?php echo $vo['vod_total']; ?>集<?php else: ?>更新至<?php echo $vo['vod_serial']; ?>集<?php endif; elseif($vo['vod_remarks'] != ''): ?><?php echo $vo['vod_remarks']; else: ?>已完结<?php endif; ?></span>
    </div>
    <?php endif; ?>
</a>
<div class="hl-item-text">
    <?php if(in_array($vo['type_id'], explode(',',$id1)) && $conch['theme']['svideo']['title']==2): ?>
    <div class="hl-item-title hl-title-two hl-text-site hl-lc-2"><a <?php if(in_array($vo['type_id'], explode(',',$id1))||$conch['theme']['vod']['url']==1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></div>
    <?php else: ?>
    <div class="hl-item-title hl-text-site hl-lc-1"><a <?php if(in_array($vo['type_id'], explode(',',$id1))||$conch['theme']['vod']['url']==1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?> title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></div>
    <div class="hl-item-sub hl-text-muted hl-lc-1">
        <?php if(in_array($vo['type_id'], explode(',',$score))||in_array($vo['type_id_1'], explode(',',$score))): if($vo['vod_score'] > 0): ?><span class="hl-text-conch score"><?php echo $vo['vod_score']; ?></span><?php endif; endif; ?>
        <?php echo mac_default(mac_filter_html(mac_url_create(mac_default($vo['vod_sub'],$vo['vod_actor']),'actor','vod','search','/')),'未知'); ?>
    </div>
    <?php endif; ?>
</div>

                    </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <div class="hl-goto-box hl-hide-sm">
                <a class="hl-bg-subs hl-text-muted hl-more-change" href="javascript:;"><i class="iconfont hl-icon-qiehuan"></i>&nbsp;换一换</a>
            </div> 
        </div>
    </div>
</div>
<?php endif; if($obj['vod_rel_art']!=''&&$conch['theme']['relart']['btn']==1): ?>
<div class="hl-row-box hl-rb-relart clearfix">
    <div class="hl-rb-head clearfix">
        <h3 class="hl-rb-title"><?php echo mac_default($conch['theme']['relart']['title1'],'相关资讯'); ?></h3>
    </div>
    <div class="row">
        <div class="hl-list-wrap hl-list-grid">
            <ul class="hl-art-list clearfix">
            <?php $__TAG__ = '{"num":"5","rel":"'.$obj['vod_rel_art'].'","order":"'.($conch['theme']['relart']['order']).'","by":"'.($conch['theme']['relart']['by']).'","id":"vo","key":"key"}';$__LIST__ = model("Art")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                <li class="hl-list-item hl-col-xs-12 hl-col-sm-3 hl-col-lg-20w">
                <div class="hl-item-wrap">
    <div class="row">
        <div class="hl-item-div">
            <div class="hl-item-pic hl-col-xs-4<?php if($maccms['mid']==1||$maccms['mid']==3||$maccms['aid']==1||$maccms['aid']==24): ?> hl-col-sm-12<?php else: ?> hl-col-lg-30w<?php endif; ?>">
                <a href="<?php echo mac_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>" class="hl-item-thumb hl-lazy" data-original="<?php echo mac_url_img($vo['art_pic']); ?>">
                    <span class="hl-pic-icon hl-hidden-xs"><i class="iconfont hl-icon-lianjie"></i></span>
                </a>
            </div>
            <div class="hl-item-content hl-col-xs-8<?php if($maccms['mid']==1||$maccms['mid']==3||$maccms['aid']==1||$maccms['aid']==24): ?> hl-col-sm-12<?php else: ?> hl-col-lg-70w<?php endif; ?>">
                <a class="hl-text-site" href="<?php echo mac_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>">
                    <div class="hl-item-title"><?php echo $vo['art_name']; ?></div>
                    <?php if($maccms['mid']==1||$maccms['mid']==3||$maccms['aid']==1||$maccms['aid']==24): else: ?>
                    <p class="hl-lc-2 hl-hidden-xs hl-text-subs"><?php echo $vo['art_blurb']; ?></p>
                    <?php endif; ?>
                </a>
                <div class="hl-item-blurb hl-lc-1 hl-text-muted">
                    <span><?php if(!$obj['parent']): ?><i class="hl-item-class"><?php echo $vo['type']['type_name']; ?></i><?php endif; if($vo['art_from']!=''): ?><i class="hl-item-watch"><?php echo $vo['art_from']; ?></i><?php endif; ?><i><?php echo mac_friend_date($vo['art_time']); ?></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
                </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
</div>
<?php else: ?>
<div class="hl-row-box hl-rb-relart clearfix">
    <div class="hl-rb-head clearfix">
        <h3 class="hl-rb-title"><?php echo mac_default($conch['theme']['relart']['title2'],'最新资讯'); ?></h3>
        <a class="hl-rb-more hl-text-muted hl-pull-right" href="<?php echo mac_url('art/index'); ?>">更多<i class="iconfont hl-icon-jiantouyou"></i></a>
    </div>
    <div class="row">
        <div class="hl-list-wrap hl-list-grid">
            <ul class="hl-art-list clearfix">
            <?php $__TAG__ = '{"num":"5","order":"'.($conch['theme']['relart']['order']).'","by":"'.($conch['theme']['relart']['by']).'","id":"vo","key":"key"}';$__LIST__ = model("Art")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                <li class="hl-list-item hl-col-xs-12 hl-col-sm-3 hl-col-lg-20w">
                <div class="hl-item-wrap">
    <div class="row">
        <div class="hl-item-div">
            <div class="hl-item-pic hl-col-xs-4<?php if($maccms['mid']==1||$maccms['mid']==3||$maccms['aid']==1||$maccms['aid']==24): ?> hl-col-sm-12<?php else: ?> hl-col-lg-30w<?php endif; ?>">
                <a href="<?php echo mac_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>" class="hl-item-thumb hl-lazy" data-original="<?php echo mac_url_img($vo['art_pic']); ?>">
                    <span class="hl-pic-icon hl-hidden-xs"><i class="iconfont hl-icon-lianjie"></i></span>
                </a>
            </div>
            <div class="hl-item-content hl-col-xs-8<?php if($maccms['mid']==1||$maccms['mid']==3||$maccms['aid']==1||$maccms['aid']==24): ?> hl-col-sm-12<?php else: ?> hl-col-lg-70w<?php endif; ?>">
                <a class="hl-text-site" href="<?php echo mac_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>">
                    <div class="hl-item-title"><?php echo $vo['art_name']; ?></div>
                    <?php if($maccms['mid']==1||$maccms['mid']==3||$maccms['aid']==1||$maccms['aid']==24): else: ?>
                    <p class="hl-lc-2 hl-hidden-xs hl-text-subs"><?php echo $vo['art_blurb']; ?></p>
                    <?php endif; ?>
                </a>
                <div class="hl-item-blurb hl-lc-1 hl-text-muted">
                    <span><?php if(!$obj['parent']): ?><i class="hl-item-class"><?php echo $vo['type']['type_name']; ?></i><?php endif; if($vo['art_from']!=''): ?><i class="hl-item-watch"><?php echo $vo['art_from']; ?></i><?php endif; ?><i><?php echo mac_friend_date($vo['art_time']); ?></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
                </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <div class="hl-goto-box hl-hide-sm">
                <a class="hl-bg-subs hl-text-muted" href="<?php echo mac_url('art/index'); ?>">更多<i class="iconfont hl-icon-jiantouyou"></i></a>
            </div> 
        </div>
    </div>
</div>
<?php endif; endif; if($maccms['mid']==2): if($obj['art_rel_art']!=''&&$conch['art']['rel']['btn']==1): ?>
<div class="hl-row-box hl-rb-relart clearfix">
    <div class="hl-rb-head clearfix">
        <h3 class="hl-rb-title"><?php echo mac_default($conch['art']['rel']['title1'],'相关资讯'); ?></h3>
    </div>
    <div class="row">
        <div class="hl-list-wrap hl-list-grid">
            <ul class="hl-art-list clearfix">
            <?php $__TAG__ = '{"num":"5","rel":"'.$obj['art_rel_art'].'","order":"'.$conch['art']['rel']['order'].'","by":"'.$conch['art']['rel']['by'].'","id":"vo","key":"key"}';$__LIST__ = model("Art")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                <li class="hl-list-item hl-col-xs-12 hl-col-sm-3 hl-col-lg-20w">
                <div class="hl-item-wrap">
    <div class="row">
        <div class="hl-item-div">
            <div class="hl-item-pic hl-col-xs-4<?php if($maccms['mid']==1||$maccms['mid']==3||$maccms['aid']==1||$maccms['aid']==24): ?> hl-col-sm-12<?php else: ?> hl-col-lg-30w<?php endif; ?>">
                <a href="<?php echo mac_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>" class="hl-item-thumb hl-lazy" data-original="<?php echo mac_url_img($vo['art_pic']); ?>">
                    <span class="hl-pic-icon hl-hidden-xs"><i class="iconfont hl-icon-lianjie"></i></span>
                </a>
            </div>
            <div class="hl-item-content hl-col-xs-8<?php if($maccms['mid']==1||$maccms['mid']==3||$maccms['aid']==1||$maccms['aid']==24): ?> hl-col-sm-12<?php else: ?> hl-col-lg-70w<?php endif; ?>">
                <a class="hl-text-site" href="<?php echo mac_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>">
                    <div class="hl-item-title"><?php echo $vo['art_name']; ?></div>
                    <?php if($maccms['mid']==1||$maccms['mid']==3||$maccms['aid']==1||$maccms['aid']==24): else: ?>
                    <p class="hl-lc-2 hl-hidden-xs hl-text-subs"><?php echo $vo['art_blurb']; ?></p>
                    <?php endif; ?>
                </a>
                <div class="hl-item-blurb hl-lc-1 hl-text-muted">
                    <span><?php if(!$obj['parent']): ?><i class="hl-item-class"><?php echo $vo['type']['type_name']; ?></i><?php endif; if($vo['art_from']!=''): ?><i class="hl-item-watch"><?php echo $vo['art_from']; ?></i><?php endif; ?><i><?php echo mac_friend_date($vo['art_time']); ?></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
                </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
</div>
<?php else: ?>
<div class="hl-row-box hl-rb-relart clearfix">
    <div class="hl-rb-head clearfix">
        <h3 class="hl-rb-title"><?php echo mac_default($conch['art']['rel']['title2'],'最新资讯'); ?></h3>
        <a class="hl-rb-more hl-text-muted hl-pull-right" href="<?php echo mac_url('art/index'); ?>">更多<i class="iconfont hl-icon-jiantouyou"></i></a>
    </div>
    <div class="row">
        <div class="hl-list-wrap hl-list-grid">
            <ul class="hl-art-list clearfix">
            <?php $__TAG__ = '{"num":"5","order":"'.$conch['art']['rel']['order'].'","by":"'.$conch['art']['rel']['by'].'","id":"vo","key":"key"}';$__LIST__ = model("Art")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                <li class="hl-list-item hl-col-xs-12 hl-col-sm-3 hl-col-lg-20w">
                <div class="hl-item-wrap">
    <div class="row">
        <div class="hl-item-div">
            <div class="hl-item-pic hl-col-xs-4<?php if($maccms['mid']==1||$maccms['mid']==3||$maccms['aid']==1||$maccms['aid']==24): ?> hl-col-sm-12<?php else: ?> hl-col-lg-30w<?php endif; ?>">
                <a href="<?php echo mac_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>" class="hl-item-thumb hl-lazy" data-original="<?php echo mac_url_img($vo['art_pic']); ?>">
                    <span class="hl-pic-icon hl-hidden-xs"><i class="iconfont hl-icon-lianjie"></i></span>
                </a>
            </div>
            <div class="hl-item-content hl-col-xs-8<?php if($maccms['mid']==1||$maccms['mid']==3||$maccms['aid']==1||$maccms['aid']==24): ?> hl-col-sm-12<?php else: ?> hl-col-lg-70w<?php endif; ?>">
                <a class="hl-text-site" href="<?php echo mac_url_art_detail($vo); ?>" title="<?php echo $vo['art_name']; ?>">
                    <div class="hl-item-title"><?php echo $vo['art_name']; ?></div>
                    <?php if($maccms['mid']==1||$maccms['mid']==3||$maccms['aid']==1||$maccms['aid']==24): else: ?>
                    <p class="hl-lc-2 hl-hidden-xs hl-text-subs"><?php echo $vo['art_blurb']; ?></p>
                    <?php endif; ?>
                </a>
                <div class="hl-item-blurb hl-lc-1 hl-text-muted">
                    <span><?php if(!$obj['parent']): ?><i class="hl-item-class"><?php echo $vo['type']['type_name']; ?></i><?php endif; if($vo['art_from']!=''): ?><i class="hl-item-watch"><?php echo $vo['art_from']; ?></i><?php endif; ?><i><?php echo mac_friend_date($vo['art_time']); ?></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
                </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <div class="hl-goto-box hl-hide-sm">
                <a class="hl-bg-subs hl-text-muted" href="<?php echo mac_url('art/index'); ?>">更多<i class="iconfont hl-icon-jiantouyou"></i></a>
            </div> 
        </div>
    </div>
</div>
<?php endif; endif; ?>
                        <div class="hl-row-box hl-rb-comm clearfix" id="pinglun">
    <div class="hl-rb-head clearfix">
        <h3 class="hl-rb-title">评论</h3>
        <span class="hl-rb-more hl-text-muted"><?php if($GLOBALS['config']['comment']['status'] == 1): ?>共&nbsp;<em class="hl-text-conch hl-total">0</em>&nbsp;条评论<?php else: ?>评论已关闭<?php endif; ?></span>
    </div>
    <div class="hl-comm-wrap mac_comment" data-id="<?php echo $obj['vod_id']; ?><?php echo $obj['art_id']; ?>" data-mid="<?php echo $maccms['mid']; ?>">
    <?php if($GLOBALS['config']['comment']['status'] == 1): ?>
    <script>
        $(function(){
            MAC.Comment.Login = <?php echo $comment['login']; ?>;
            MAC.Comment.Verify = <?php echo $comment['verify']; ?>;
            MAC.Comment.Init();
            MAC.Comment.Show(1);
        });
    </script>
    <?php endif; ?>
    </div>
</div>
                    </div>
                </div>
                <div class="hl-col-xs-12 hl-col-md-30w hl-col-lg-3 hl-hidden-xs">
                    <div class="hl-rb-side clearfix">
                        <?php if($conch['theme']['ads']['btn']==1): if($conch['theme']['ads']['vip']==1&&$user['group_id'] > 2): else: if($conch['theme']['ads']['side']!=''): ?>
<div id="ad1004" class="conch-ads-box hl-this-box clearfix">
    <a class="hl-close-this" href="javascript:void(0)"><i class="iconfont hl-icon-cuo"></i></a>
    <div class="ads ads-side"><?php echo $conch['theme']['ads']['side']; ?></div>
    <?php if($conch['theme']['ads']['tip']==1): ?><span class="hl-ad-tip">广告</span><?php endif; ?>
</div>
<?php endif; endif; endif; ?>
<div class="hl-row-box hl-rb-rank clearfix">
    <div class="hl-rb-head clearfix">
        <h3 class="hl-rb-title"><?php echo $obj['type']['type_name']; ?><?php echo mac_default($conch['theme']['vodside']['title'],'排行榜'); ?></h3>
        <a class="hl-rb-more hl-text-muted hl-pull-right" href="<?php if($conch['theme']['vodside']['by']==hits_month): ?><?php echo mac_url('label/rankmonth'); elseif($conch['theme']['vodside']['by']==hits_week): ?><?php echo mac_url('label/rankweek'); else: ?><?php echo mac_url('label/rank'); endif; ?>">更多<i class="iconfont hl-icon-jiantouyou"></i></a>
    </div>
    <div class="hl-rank-box hl-text-site">
        <ul class="hl-rank-list clearfix">
            <?php $__TAG__ = '{"num":"'.$conch['theme']['vodside']['num'].'","type":"current","order":"desc","by":"'.($conch['theme']['vodside']['by']).'","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
            <li>
                <a class="hl-lc-1" title="<?php echo $vo['vod_name']; ?>" <?php if($conch['theme']['vod']['url'] == 1): ?>href="<?php echo mac_url_vod_play($vo,['sid'=>$vo['sid'],'nid'=>1]); ?>"<?php else: ?>href="<?php echo mac_url_vod_detail($vo); ?>"<?php endif; ?>>
                <span class="hl-part-nums hl-num-<?php echo $key; ?>"><?php echo $key; ?></span><?php echo $vo['vod_name']; ?></a>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div> 
</div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if($GLOBALS['config']['app']['copyright_status'] == 3): ?>
    <script>
    <?php if($obj['vod_jumpurl'] != ''): ?>
        location.href='<?php echo $obj['vod_jumpurl']; ?>';
    <?php endif; ?>
    </script><?php endif; if($conch['play']['player']['tips']==1&&$conch['play']['player']['n-style']==0): ?>
    <script type="text/javascript">
        var $high= $(".hl-player-notice").innerHeight();
        function autoScroll(obj){
            $(obj).find("ul").animate({
                marginTop : "-"+$high+"px"
            },500,function(){
                $(this).css({marginTop : "0px"}).find("li:first").appendTo(this);
            })
        }
        $(function(){
            setInterval('autoScroll(".hl-player-notice")',3500);
        })   
	</script><?php endif; ?>
    <script type="text/javascript">var Sw=$(window).width();if(Sw<768){$(".hl-player-wrap").addClass("embed-responsive").css("padding-bottom","<?php echo mac_default($conch['play']['player']['mob-high'],'56.25'); ?>%");}else{$(".hl-player-wrap").addClass("embed-responsive").css("padding-bottom","<?php echo mac_default($conch['play']['player']['pc-high'],'56.25'); ?>%");if(Sw>992){var Ph=$('.hl-player-wrap').innerHeight();$(".hl-play-side").css("height",Ph);}}</script>
    <!--统计数据-->
    <span style="display: none" class="mac_hits hits" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?>" data-type="hits"></span>
    <span style="display: none" class="hl-vod-history" data-name="<?php echo $obj['vod_name']; ?>" data-link="<?php echo mac_url_vod_play($obj,['sid'=>$param['sid'],'nid'=>$param['nid']]); ?>" data-pic="<?php echo mac_url_img($obj['vod_pic']); ?>" data-part="<?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?>"></span>
    <span style="display: none" class="mac_hits hits" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?><?php echo $obj['art_id']; ?><?php echo $obj['topic_id']; ?>" "="" data-type="hits"></span>
	<span style="display: none" class="mac_hits hits_day" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?><?php echo $obj['art_id']; ?><?php echo $obj['topic_id']; ?>" "="" data-type="hits_day"></span>
	<span style="display: none" class="mac_hits hits_week" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?><?php echo $obj['art_id']; ?><?php echo $obj['topic_id']; ?>" "="" data-type="hits_week"></span>
	<span style="display: none" class="mac_hits hits_month" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?><?php echo $obj['art_id']; ?><?php echo $obj['topic_id']; ?>" "="" data-type="hits_month"></span>
    <span style="display:none" class="mac_ulog_set" data-type="4" data-mid="<?php echo $maccms['mid']; ?>" data-id="<?php echo $obj['vod_id']; ?>" data-sid="<?php echo $param['sid']; ?>" data-nid="<?php echo $param['nid']; ?>"></span>
</div>
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