<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:55:"/var/www/html/application/admin/view/system/config.html";i:1679889259;s:53:"/var/www/html/application/admin/view/public/head.html";i:1679889258;s:53:"/var/www/html/application/admin/view/public/foot.html";i:1679889258;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo $title; ?> - <?php echo lang('admin/public/head/title'); ?></title>
    <link rel="stylesheet" href="/static/layui/css/layui.css">
    <link rel="stylesheet" href="/static/css/admin_style.css?<?php echo $MAC_VERSION; ?>">
    <script type="text/javascript" src="/static/js/jquery.js"></script>
    <script type="text/javascript" src="/static/layui/layui.js"></script>
    <script>
        var ROOT_PATH="",ADMIN_PATH="<?php echo $_SERVER['SCRIPT_NAME']; ?>", MAC_VERSION="v10";
    </script>
</head>
<body>

<div class="page-container">

    <div class="showpic" style="display:none;"><img class="showpic_img" width="120" height="160" referrerPolicy="no-referrer"></div>

    <form class="layui-form layui-form-pane" action="">
        <input type="hidden" name="__token__" value="<?php echo \think\Request::instance()->token(); ?>" />

        <div class="layui-tab" lay-filter="tb1">
            <ul class="layui-tab-title">
                <li class="layui-this" lay-id="config_1"><?php echo lang('admin/system/config/base'); ?></li>
                <li lay-id="config_2"><?php echo lang('admin/system/config/performance'); ?></li>
                <li lay-id="config_3"><?php echo lang('admin/system/config/parameters'); ?></li>
                <li lay-id="config_4"><?php echo lang('admin/system/config/backstage'); ?></li>
            </ul>
            <div class="layui-tab-content">

                <div class="layui-tab-item layui-show">
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/site_name'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="text" name="site[site_name]" placeholder="" value="<?php echo $config['site']['site_name']; ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/site_url'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="text" name="site[site_url]" placeholder="<?php echo lang('admin/system/config/site_url_tip'); ?>" value="<?php echo $config['site']['site_url']; ?>" class="layui-input">
                    </div>
                </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/config/site_wapurl'); ?>：</label>
                        <div class="layui-input-block">
                            <input type="text" name="site[site_wapurl]" placeholder="<?php echo lang('admin/system/config/site_wapurl_tip'); ?>" value="<?php echo $config['site']['site_wapurl']; ?>" class="layui-input">
                        </div>
                    </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/site_keywords'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="text" name="site[site_keywords]" placeholder="" value="<?php echo $config['site']['site_keywords']; ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/site_description'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="text" name="site[site_description]" placeholder="" value="<?php echo $config['site']['site_description']; ?>" class="layui-input">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/site_icp'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="text" name="site[site_icp]" placeholder="" value="<?php echo $config['site']['site_icp']; ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/site_qq'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="text" name="site[site_qq]" placeholder="" value="<?php echo $config['site']['site_qq']; ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/site_email'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="text" name="site[site_email]" placeholder="" value="<?php echo $config['site']['site_email']; ?>" class="layui-input">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/install_dir'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="text" name="site[install_dir]" placeholder="<?php echo lang('admin/system/config/install_dir_tip'); ?>" value="<?php echo $config['site']['install_dir']; ?>" class="layui-input">
                    </div>
                </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/config/site_logo'); ?>：</label>
                        <div class="layui-input-inline w600">
                            <input type="text" name="site[site_logo]" placeholder="<?php echo lang('admin/system/config/site_logo_tip'); ?>" value="<?php echo $config['site']['site_logo']; ?>" class="layui-input upload-input">
                        </div>
                        <div class="layui-input-inline ">
                            <button type="button" class="layui-btn layui-upload" lay-data="{data:{thumb:0,thumb_class:'site[site_logo]'}}" id="upload1"><?php echo lang('upload_pic'); ?></button>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/config/site_waplogo'); ?>：</label>
                        <div class="layui-input-inline w600">
                            <input type="text" name="site[site_waplogo]" placeholder="<?php echo lang('admin/system/config/site_logo_tip'); ?>" value="<?php echo $config['site']['site_waplogo']; ?>" class="layui-input upload-input">
                        </div>
                        <div class="layui-input-inline ">
                            <button type="button" class="layui-btn layui-upload" lay-data="{data:{thumb:0,thumb_class:'upload-thumb'}}" id="upload2"><?php echo lang('upload_pic'); ?></button>
                        </div>
                    </div>


                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/template_dir'); ?>：</label>
                    <div class="layui-input-inline" >
                            <select class="w150" name="site[template_dir]">
                                <?php if(is_array($templates) || $templates instanceof \think\Collection || $templates instanceof \think\Paginator): $i = 0; $__LIST__ = $templates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $vo; ?>" <?php if($config['site']['template_dir'] == $vo): ?>selected <?php endif; ?>><?php echo $vo; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                    </div>
                    <label class="layui-form-label"><?php echo lang('admin/system/config/html_dir'); ?>：</label>
                    <div class="layui-input-inline">
                        <input type="text" name="site[html_dir]" placeholder="" value="<?php echo $config['site']['html_dir']; ?>" class="layui-input w150" >
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/mob_status'); ?>：</label>
                    <div class="layui-input-inline w300">
                        <input type="radio" name="site[mob_status]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['site']['mob_status'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="site[mob_status]" value="1" title="<?php echo lang('admin/system/config/mob_multiple'); ?>" <?php if($config['site']['mob_status'] == 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="site[mob_status]" value="2" title="<?php echo lang('admin/system/config/mob_one'); ?>" <?php if($config['site']['mob_status'] == 2): ?>checked <?php endif; ?>>
                    </div>
                    <div class="layui-form-mid layui-word-aux"><?php echo lang('admin/system/config/mob_status_tip'); ?></div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/mob_template_dir'); ?>：</label>
                    <div class="layui-input-inline">
                            <select class="w150" name="site[mob_template_dir]">
                                <?php if(is_array($templates) || $templates instanceof \think\Collection || $templates instanceof \think\Paginator): $i = 0; $__LIST__ = $templates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $vo; ?>" <?php if($config['site']['mob_template_dir'] == $vo): ?>selected <?php endif; ?>><?php echo $vo; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                    </div>
                    <label class="layui-form-label"><?php echo lang('admin/system/config/html_dir'); ?>：</label>
                    <div class="layui-input-inline">
                        <input type="text" name="site[mob_html_dir]" placeholder="" value="<?php echo $config['site']['mob_html_dir']; ?>" class="layui-input w150" >
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/site_tj'); ?>：</label>
                    <div class="layui-input-block">
                        <textarea name="site[site_tj]" class="layui-textarea"  placeholder=""><?php echo $config['site']['site_tj']; ?></textarea>
                    </div>
                </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/config/site_status'); ?>：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="site[site_status]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['site']['site_status'] == 0): ?>checked <?php endif; ?>>
                            <input type="radio" name="site[site_status]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['site']['site_status'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/config/site_close_tip'); ?>：</label>
                        <div class="layui-input-block">
                            <textarea name="site[site_close_tip]" class="layui-textarea"  placeholder=""><?php echo $config['site']['site_close_tip']; ?></textarea>
                        </div>
                    </div>
            </div>

                <div class="layui-tab-item">
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/config/pathinfo_depr'); ?>：</label>
                        <div class="layui-input-inline w150">
                            <select class="w150" name="app[pathinfo_depr]">
                                <option value="/" <?php if($config['app']['pathinfo_depr'] == '/'): ?>selected <?php endif; ?>><?php echo lang('admin/system/config/xg'); ?></option>
                                <option value="-" <?php if($config['app']['pathinfo_depr'] == '-'): ?>selected <?php endif; ?>><?php echo lang('admin/system/config/zhx'); ?></option>
                                <option value="_" <?php if($config['app']['pathinfo_depr'] == '_'): ?>selected <?php endif; ?>><?php echo lang('admin/system/config/xhx'); ?></option>
                            </select>
                        </div>
                        <div class="layui-form-mid layui-word-aux"><?php echo lang('admin/system/config/pathinfo_depr_tip'); ?></div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/config/suffix'); ?>：</label>
                        <div class="layui-input-inline">
                            <select style="width:150px;" name="app[suffix]">
                                <option value="html" <?php if($config['app']['suffix'] == 'html'): ?>selected <?php endif; ?>>html</option>
                                <option value="htm" <?php if($config['app']['suffix'] == 'htm'): ?>selected <?php endif; ?>>htm</option>
                            </select>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/config/popedom_filter'); ?>：</label>
                        <div class="layui-input-inline">
                            <input type="radio" name="app[popedom_filter]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['app']['popedom_filter'] != 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="app[popedom_filter]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['app']['popedom_filter'] == 1): ?>checked <?php endif; ?>>
                        </div>
                        <div class="layui-form-mid layui-word-aux"><?php echo lang('admin/system/config/popedom_filter_tip'); ?></div>
                    </div>


                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/config/cache_type'); ?>：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="app[cache_type]" lay-filter="cache_type" value="file" title="file" <?php if($config['app']['cache_type'] == '0' || $config['app']['cache_type'] == 'file'): ?>checked <?php endif; ?>>
                            <input type="radio" name="app[cache_type]" lay-filter="cache_type" value="memcache" title="memcache" <?php if($config['app']['cache_type'] == '1' || $config['app']['cache_type'] == 'memcache'): ?>checked <?php endif; ?>>
                            <input type="radio" name="app[cache_type]" lay-filter="cache_type" value="redis" title="redis" <?php if($config['app']['cache_type'] == '2' || $config['app']['cache_type'] == 'redis'): ?>checked <?php endif; ?>>
                            <input type="radio" name="app[cache_type]" lay-filter="cache_type" value="memcached" title="memcached" <?php if($config['app']['cache_type'] == '3' || $config['app']['cache_type'] == 'memcached'): ?>checked <?php endif; ?>>
                        </div>
                    </div>

                    <div class="layui-form-item row_cache_server " <?php if($config['app']['cache_type'] == '0' || $config['app']['cache_type'] == 'file'): ?> style="display:none;" <?php endif; ?>>
                        <label class="layui-form-label"><?php echo lang('admin/system/config/cache_host'); ?>：</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="app[cache_host]" placeholder="<?php echo lang('admin/system/config/cache_host_tip'); ?>" value="<?php echo $config['app']['cache_host']; ?>" class="layui-input" >
                        </div>
                        <label class="layui-form-label"><?php echo lang('admin/system/config/cache_port'); ?>：</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="app[cache_port]" placeholder="<?php echo lang('admin/system/config/cache_port_tip'); ?>" value="<?php echo $config['app']['cache_port']; ?>" class="layui-input" >
                        </div>
                        <label class="layui-form-label"><?php echo lang('admin/system/config/cache_username'); ?>：</label>
                        <div class="layui-input-inline">
                            <input type="text" name="app[cache_username]" placeholder="<?php echo lang('admin/system/config/cache_username_tip'); ?>" value="<?php echo $config['app']['cache_username']; ?>" class="layui-input" >
                        </div>
                        <label class="layui-form-label"><?php echo lang('admin/system/config/cache_password'); ?>：</label>
                        <div class="layui-input-inline">
                            <input type="text" name="app[cache_password]" placeholder="<?php echo lang('admin/system/config/cache_password_tip'); ?>" value="<?php echo $config['app']['cache_password']; ?>" class="layui-input" >
                        </div>
                        <button type="button" class="layui-btn layui-btn-normal" onclick="test_cache()"><?php echo lang('admin/system/config/cache_test'); ?></button>
                    </div>

                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/cache_flag'); ?>：</label>
                    <div class="layui-input-inline">
                        <input type="text" name="app[cache_flag]" placeholder="<?php echo lang('admin/system/config/cache_flag_auto'); ?>" value="<?php echo $config['app']['cache_flag']; ?>" class="layui-input w150" >
                    </div>
                    <div class="layui-form-mid layui-word-aux"><?php echo lang('admin/system/config/cache_flag_tip'); ?></div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/cache_core'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="app[cache_core]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['app']['cache_core'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="app[cache_core]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['app']['cache_core'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/cache_time'); ?>：</label>
                    <div class="layui-input-inline">
                        <input type="text" name="app[cache_time]" placeholder="" value="<?php echo $config['app']['cache_time']; ?>" class="layui-input w150" >
                    </div>
                    <div class="layui-form-mid layui-word-aux"><?php echo lang('admin/system/config/cache_time_tip'); ?></div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/cache_page'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="app[cache_page]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['app']['cache_page'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="app[cache_page]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['app']['cache_page'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/cache_time_page'); ?>：</label>
                    <div class="layui-input-inline">
                        <input type="text" name="app[cache_time_page]" placeholder="" value="<?php echo $config['app']['cache_time_page']; ?>" class="layui-input w150" >
                    </div>
                    <div class="layui-form-mid layui-word-aux"><?php echo lang('admin/system/config/cache_time_tip'); ?></div>
                </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/config/compress'); ?>：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="app[compress]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['app']['compress'] != 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="app[compress]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['app']['compress'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                <div class="layui-form-item layui-hide">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/input_type'); ?>：</label>
                    <div class="layui-input-inline w600">
                        <input type="radio" name="app[input_type]" value="1" title="<?php echo lang('get+post'); ?>" <?php if($config['app']['input_type'] != 0): ?>checked <?php endif; ?>>
                        <input type="radio" name="app[input_type]" value="0" title="<?php echo lang('get'); ?>" <?php if($config['app']['input_type'] == 0): ?>checked <?php endif; ?>>
                    </div>
                    <div class="layui-form-mid layui-word-aux"><?php echo lang('admin/system/config/input_type_tip'); ?></div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/ajax_page'); ?>：</label>
                    <div class="layui-input-inline w600">
                        <input type="radio" name="app[ajax_page]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['app']['ajax_page'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="app[ajax_page]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['app']['ajax_page'] == 1): ?>checked <?php endif; ?>>
                    </div>
                    <div class="layui-form-mid layui-word-aux"><?php echo lang('admin/system/config/ajax_page_tip'); ?></div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/wall_filter'); ?>：</label>
                    <div class="layui-input-inline w600">
                        <input type="radio" name="app[wall_filter]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['app']['wall_filter'] != 1 && $config['app']['wall_filter'] != 2): ?>checked <?php endif; ?>>
                        <input type="radio" name="app[wall_filter]" value="1" title="<?php echo lang('admin/system/config/wall_unicode'); ?>" <?php if($config['app']['wall_filter'] == 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="app[wall_filter]" value="2" title="<?php echo lang('admin/system/config/wall_blank'); ?>" <?php if($config['app']['wall_filter'] == 2): ?>checked <?php endif; ?>>
                    </div>
                    <div class="layui-form-mid layui-word-aux"><?php echo lang('admin/system/config/wall_filter_tip'); ?></div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/show'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="app[show]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['app']['show'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="app[show]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['app']['show'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/show_verify'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="app[show_verify]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['app']['show_verify'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="app[show_verify]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['app']['show_verify'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/search'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="app[search]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['app']['search'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="app[search]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['app']['search'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/search_verify'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="app[search_verify]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['app']['search_verify'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="app[search_verify]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['app']['search_verify'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/search_len'); ?>：</label>
                    <div class="layui-input-inline">
                        <input type="text" name="app[search_len]" placeholder="" value="<?php echo $config['app']['search_len']; ?>" class="layui-input w150">
                    </div>
                    <div class="layui-form-mid layui-word-aux"><?php echo lang('admin/system/config/search_len_tip'); ?></div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/search_timespan'); ?>：</label>
                    <div class="layui-input-inline">
                        <input type="text" name="app[search_timespan]" placeholder="" value="<?php echo $config['app']['search_timespan']; ?>" class="layui-input w150">
                    </div>
                    <div class="layui-form-mid layui-word-aux"><?php echo lang('admin/system/config/search_timespan_tip'); ?></div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/search_vod_rule'); ?>：</label>
                    <div class="layui-input-inline w600">
                        <input type="checkbox" lay-skin="primary" name="app[search_vod_rule][]" value="vod_name" title="<?php echo lang('name'); ?>" checked disabled>
                        <input type="checkbox" lay-skin="primary" name="app[search_vod_rule][]" value="vod_en" title="<?php echo lang('en'); ?>" <?php if(strpos($config['app']['search_vod_rule'],'vod_en') !==false): ?>checked <?php endif; ?>>
                        <input type="checkbox" lay-skin="primary" name="app[search_vod_rule][]" value="vod_sub" title="<?php echo lang('sub'); ?>" <?php if(strpos($config['app']['search_vod_rule'],'vod_sub') !==false): ?>checked <?php endif; ?>>
                        <input type="checkbox" lay-skin="primary" name="app[search_vod_rule][]" value="vod_tag" title="tag" <?php if(strpos($config['app']['search_vod_rule'],'vod_tag') !==false): ?>checked <?php endif; ?>>
                        <input type="checkbox" lay-skin="primary" name="app[search_vod_rule][]" value="vod_actor" title="<?php echo lang('actor'); ?>" <?php if(strpos($config['app']['search_vod_rule'],'vod_actor') !==false): ?>checked <?php endif; ?>>
                        <input type="checkbox" lay-skin="primary" name="app[search_vod_rule][]" value="vod_director" title="<?php echo lang('director'); ?>" <?php if(strpos($config['app']['search_vod_rule'],'vod_director') !==false): ?>checked <?php endif; ?>>
                    </div>
                    <div class="layui-form-mid layui-word-aux"><?php echo lang('admin/system/config/search_rule_tip'); ?></div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/search_art_rule'); ?>：</label>
                    <div class="layui-input-inline w600">
                        <input type="checkbox" lay-skin="primary" name="app[search_art_rule][]" value="art_name" title="<?php echo lang('name'); ?>" checked disabled>
                        <input type="checkbox" lay-skin="primary" name="app[search_art_rule][]" value="art_en" title="<?php echo lang('en'); ?>" <?php if(strpos($config['app']['search_art_rule'],'art_en') !==false): ?>checked <?php endif; ?>>
                        <input type="checkbox" lay-skin="primary" name="app[search_art_rule][]" value="art_sub" title="<?php echo lang('sub'); ?>" <?php if(strpos($config['app']['search_art_rule'],'art_sub') !==false): ?>checked <?php endif; ?>>
                        <input type="checkbox" lay-skin="primary" name="app[search_art_rule][]" value="art_tag" title="tag" <?php if(strpos($config['app']['search_art_rule'],'art_tag') !==false): ?>checked <?php endif; ?>>
                    </div>
                    <div class="layui-form-mid layui-word-aux"><?php echo lang('admin/system/config/search_rule_tip'); ?></div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/vod_search_optimise'); ?>：</label>
                    <div class="layui-input-inline">
                        <input type="checkbox" lay-skin="primary" name="app[vod_search_optimise][]" value="frontend" title="<?php echo lang('admin/system/config/vod_search_optimise/frontend'); ?>" <?php if(strpos($config['app']['vod_search_optimise'],'frontend') !==false): ?>checked <?php endif; ?>>
                        <input type="checkbox" lay-skin="primary" name="app[vod_search_optimise][]" value="collect" title="<?php echo lang('admin/system/config/vod_search_optimise/collect'); ?>" <?php if(strpos($config['app']['vod_search_optimise'],'collect') !==false): ?>checked <?php endif; ?>>
                    </div>
                    <div class="layui-form-mid layui-word-aux"><?php echo lang('admin/system/config/vod_search_optimise_tip'); ?></div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/vod_search_optimise_cache_minutes'); ?>：</label>
                    <div class="layui-input-inline">
                        <input type="text" name="app[vod_search_optimise_cache_minutes]" placeholder="" value="<?php echo $config['app']['vod_search_optimise_cache_minutes']; ?>" class="layui-input w150">
                    </div>
                    <div class="layui-form-mid layui-word-aux"><?php echo lang('admin/system/config/vod_search_optimise_cache_minutes_tip'); ?></div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/copyright_status'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="app[copyright_status]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['app']['copyright_status'] == 0): ?>checked <?php endif; ?>>
                        <input type="radio" name="app[copyright_status]" value="1" title="<?php echo lang('admin/system/config/copyright_msg'); ?>" <?php if($config['app']['copyright_status'] == 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="app[copyright_status]" value="2" title="<?php echo lang('admin/system/config/copyright_jump_detail'); ?>" <?php if($config['app']['copyright_status'] == 2): ?>checked <?php endif; ?>>
                        <input type="radio" name="app[copyright_status]" value="3" title="<?php echo lang('admin/system/config/copyright_jump_play'); ?>" <?php if($config['app']['copyright_status'] == 3): ?>checked <?php endif; ?>>
                        <input type="radio" name="app[copyright_status]" value="4" title="<?php echo lang('admin/system/config/copyright_jump_iframe'); ?>" <?php if($config['app']['copyright_status'] == 4): ?>checked <?php endif; ?>>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/copyright_notice'); ?>：</label>
                    <div class="layui-input-inline w500">
                        <input type="text" name="app[copyright_notice]" placeholder="" value="<?php echo $config['app']['copyright_notice']; ?>" class="layui-input">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/browser_junmp'); ?>：</label>
                    <div class="layui-input-inline">
                        <input type="radio" name="app[browser_junmp]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['app']['browser_junmp'] == 0): ?>checked <?php endif; ?>>
                        <input type="radio" name="app[browser_junmp]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['app']['browser_junmp'] == 1): ?>checked <?php endif; ?>>
                    </div>
                    <div class="layui-form-mid layui-word-aux"><?php echo lang('admin/system/config/browser_junmp_tip'); ?></div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/404'); ?>：</label>
                    <div class="layui-input-inline">
                        <input type="text" name="app[page_404]" placeholder="" value="<?php echo $config['app']['page_404']; ?>" class="layui-input w150">
                    </div>
                    <div class="layui-form-mid layui-word-aux"><?php echo lang('admin/system/config/404_tip'); ?></div>
                </div>
            </div>

            <div class="layui-tab-item">
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/config/player_sort'); ?>：</label>
                        <div class="layui-input-inline">
                            <input type="radio" name="app[player_sort]" value="0" title="<?php echo lang('add'); ?>" <?php if($config['app']['player_sort'] == 0): ?>checked <?php endif; ?>>
                            <input type="radio" name="app[player_sort]" value="1" title="<?php echo lang('admin/system/config/global'); ?>" <?php if($config['app']['player_sort'] == 1): ?>checked <?php endif; ?>>
                        </div>
                        <div class="layui-form-mid layui-word-aux"><?php echo lang('admin/system/config/player_sort_tip'); ?></div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/config/encrypt'); ?>：</label>
                        <div class="layui-input-inline">
                            <select style="width:150px;" name="app[encrypt]">
                                <option value="0"><?php echo lang('admin/system/config/encrypt_not'); ?></option>
                                <option value="1" <?php if($config['app']['encrypt'] == 1): ?>selected <?php endif; ?>>escape</option>
                                <option value="2" <?php if($config['app']['encrypt'] == 2): ?>selected <?php endif; ?>>base64</option>
                            </select>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/config/search_hot'); ?>：</label>
                        <div class="layui-input-block">
                            <input type="text" name="app[search_hot]" placeholder="<?php echo lang('multi_separate_tip'); ?>" value="<?php echo $config['app']['search_hot']; ?>" class="layui-input">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/config/art_extend_class'); ?>：</label>
                        <div class="layui-input-block">
                            <input type="text" name="app[art_extend_class]" placeholder="" value="<?php echo $config['app']['art_extend_class']; ?>" class="layui-input">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/config/vod_extend_class'); ?>：</label>
                        <div class="layui-input-block">
                            <input type="text" name="app[vod_extend_class]" placeholder="" value="<?php echo $config['app']['vod_extend_class']; ?>" class="layui-input">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/config/vod_extend_state'); ?>：</label>
                        <div class="layui-input-block">
                            <input type="text" name="app[vod_extend_state]" placeholder="" value="<?php echo $config['app']['vod_extend_state']; ?>" class="layui-input">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/config/vod_extend_version'); ?>：</label>
                        <div class="layui-input-block">
                            <input type="text" name="app[vod_extend_version]" placeholder="" value="<?php echo $config['app']['vod_extend_version']; ?>" class="layui-input">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/config/vod_extend_area'); ?>：</label>
                        <div class="layui-input-block">
                            <input type="text" name="app[vod_extend_area]" placeholder="" value="<?php echo $config['app']['vod_extend_area']; ?>" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/config/vod_extend_lang'); ?>：</label>
                        <div class="layui-input-block">
                            <input type="text" name="app[vod_extend_lang]" placeholder="" value="<?php echo $config['app']['vod_extend_lang']; ?>" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/config/vod_extend_year'); ?>：</label>
                        <div class="layui-input-block">
                            <input type="text" name="app[vod_extend_year]" placeholder="" value="<?php echo $config['app']['vod_extend_year']; ?>" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/config/vod_extend_weekday'); ?>：</label>
                        <div class="layui-input-block">
                            <input type="text" name="app[vod_extend_weekday]" placeholder="" value="<?php echo $config['app']['vod_extend_weekday']; ?>" class="layui-input">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/config/actor_extend_area'); ?>：</label>
                        <div class="layui-input-block">
                            <input type="text" name="app[actor_extend_area]" placeholder="" value="<?php echo $config['app']['actor_extend_area']; ?>" class="layui-input">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/config/filter_words'); ?>：</label>
                        <div class="layui-input-block">
                            <textarea name="app[filter_words]" class="layui-textarea" placeholder="<?php echo lang('admin/system/config/filter_words_tip'); ?>"><?php echo $config['app']['filter_words']; ?></textarea>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label"><?php echo lang('admin/system/config/extra_var'); ?>：</label>
                        <div class="layui-input-block">
                            <textarea name="app[extra_var]" class="layui-textarea" placeholder="<?php echo lang('admin/system/config/extra_var_tip'); ?>"><?php echo $config['app']['extra_var']; ?></textarea>
                        </div>
                    </div>
                </div>


            <div class="layui-tab-item">
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/collect_timespan'); ?>：</label>
                    <div class="layui-input-inline">
                        <input type="text" name="app[collect_timespan]" placeholder="" value="<?php echo $config['app']['collect_timespan']; ?>" class="layui-input w150">
                    </div>
                    <div class="layui-form-mid layui-word-aux"><?php echo lang('admin/system/config/collect_timespan_tip'); ?></div>
                </div>


                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/pagesize'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="text" name="app[pagesize]" placeholder="<?php echo lang('admin/system/config/pagesize_tip'); ?>" value="<?php echo $config['app']['pagesize']; ?>" class="layui-input w150">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/makesize'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="text" name="app[makesize]" placeholder="<?php echo lang('admin/system/config/makesize_tip'); ?>" value="<?php echo $config['app']['makesize']; ?>" class="layui-input w150">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/admin_login_verify'); ?>：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="app[admin_login_verify]" value="0" title="<?php echo lang('close'); ?>" <?php if($config['app']['admin_login_verify'] == '0'): ?>checked <?php endif; ?>>
                        <input type="radio" name="app[admin_login_verify]" value="1" title="<?php echo lang('open'); ?>" <?php if($config['app']['admin_login_verify'] != '0'): ?>checked <?php endif; ?>>
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/editor'); ?>：</label>
                    <div class="layui-input-inline">
                        <select style="width:150px;" name="app[editor]">
                            <?php if(is_array($editors['ext_list']) || $editors['ext_list'] instanceof \think\Collection || $editors['ext_list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $editors['ext_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo $key; ?>" <?php if($config['app']['editor'] == $key): ?>selected <?php endif; ?>><?php echo $vo; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>
                    <div class="layui-form-mid layui-word-aux"><?php echo lang('admin/system/config/editor_tip'); ?></div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php echo lang('admin/system/config/lang'); ?>：</label>
                    <div class="layui-input-inline" >
                        <select class="w150" name="app[lang]">
                            <?php if(is_array($langs) || $langs instanceof \think\Collection || $langs instanceof \think\Paginator): $i = 0; $__LIST__ = $langs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo $vo; ?>" <?php if($config['app']['lang'] == $vo): ?>selected <?php endif; ?>><?php echo $vo; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>
                </div>
            </div>

                <div class="layui-form-item center">
                    <div class="layui-input-block">
                        <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit"><?php echo lang('btn_save'); ?></button>
                        <button class="layui-btn layui-btn-warm" type="reset"><?php echo lang('btn_reset'); ?></button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript" src="/static/js/admin_common.js?<?php echo $MAC_VERSION; ?>"></script>
<script type="text/javascript" src="/static/js/jquery.cookie.js"></script>
<script type="text/javascript">
    layui.use(['form','upload', 'layer'], function(){
        // 操作对象
        var element = layui.element
            ,form = layui.form
            , layer = layui.layer
            , upload = layui.upload;

        form.on('radio(cache_type)',function(data){
            $('.row_cache_server').hide();
           if(data.value=='memcache' || data.value=='redis' || data.value=='memcached'){
               $('.row_cache_server').show();
           }
        });

        element.on('tab(tb1)', function(){
            $.cookie('config_tab', this.getAttribute('lay-id'));
        });

        if( $.cookie('config_tab') !=null ) {
            element.tabChange('tb1', $.cookie('config_tab'));
        }

        upload.render({
            elem: '.layui-upload'
            ,url: "<?php echo url('upload/upload'); ?>?flag=site"
            ,method: 'post'
            ,before: function(input) {
                layer.msg("<?php echo lang('upload_ing'); ?>", {time:3000000});
            },done: function(res, index, upload) {
                var obj = this.item;
                if (res.code == 0) {
                    layer.msg(res.msg);
                    return false;
                }
                layer.closeAll();
                var input = $(obj).parent().parent().find('.upload-input');
                if ($(obj).attr('lay-type') == 'image') {
                    input.siblings('img').attr('src', res.data.file).show();
                }
                input.val(res.data.file);

                if(res.data.thumb_class !=''){
                    $('.'+ res.data.thumb_class).val(res.data.thumb[0].file);
                }
            }
        });

        $('.upload-input').hover(function (e){
            var e = window.event || e;
            var imgsrc = $(this).val();
            if(imgsrc.trim()==""){ return; }
            var left = e.clientX+document.body.scrollLeft+20;
            var top = e.clientY+document.body.scrollTop+20;
            $(".showpic").css({left:left,top:top,display:""});
            if(imgsrc.indexOf('://')<0){ imgsrc = ROOT_PATH + '/' + imgsrc; } else{ imgsrc = imgsrc.replace('mac:','http:'); }
            $(".showpic_img").attr("src", imgsrc);
        },function (e){
            $(".showpic").css("display","none");
        });


    });

    function test_cache(){
        var type = $("input[name='app[cache_type]']:checked").val();
        var host = $("input[name='app[cache_host]']").val();
        var port = $("input[name='app[cache_port]']").val();
        var user_name =  $("input[name='app[cache_username]']").val();
        var password = $("input[name='app[cache_password]']").val();
        layer.msg("<?php echo lang('wait_submit'); ?>",{time:500000});
        $.ajax({
            url: "<?php echo url('system/test_cache'); ?>",
            type: "post",
            dataType: "json",
            data: {type:type,host:host,port:port,username:user_name,password:password},
            beforeSend: function () {
            },
            error:function(r){
                layer.msg("<?php echo lang('admin/system/config/test_err'); ?>",{time:1800});
            },
            success: function (r) {
                layer.msg(r.msg,{time:1800});
            },
            complete: function () {
            }
        });
    }


</script>

</body>
</html>