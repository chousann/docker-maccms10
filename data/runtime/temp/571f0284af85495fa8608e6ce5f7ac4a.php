<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:51:"/var/www/html/application/admin/view/vod/index.html";i:1679889260;s:53:"/var/www/html/application/admin/view/public/head.html";i:1679889258;s:53:"/var/www/html/application/admin/view/public/foot.html";i:1679889258;}*/ ?>
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
<style>
    table {
        table-layout: fixed;
    }


    td {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }
</style>
<div class="page-container p10">

    <div class="my-toolbar-box">

        <div class="center mb10">
            <form class="layui-form " method="post" action="<?php echo url('data'); ?>">
                <input type="hidden" value="<?php echo mac_filter_xss($param['select']); ?>" name="select">
                <input type="hidden" value="<?php echo mac_filter_xss($param['input']); ?>" name="input">
                <div class="layui-input-inline w150">
                    <select name="type">
                        <option value=""><?php echo lang('select_type'); ?></option>
                        <?php if(is_array($type_tree) || $type_tree instanceof \think\Collection || $type_tree instanceof \think\Paginator): $i = 0; $__LIST__ = $type_tree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['type_mid'] == 1): ?>
                        <option value="<?php echo $vo['type_id']; ?>" <?php if($param['type'] == $vo['type_id']): ?>selected <?php endif; ?>><?php echo $vo['type_name']; ?></option>
                        <?php if(is_array($vo['child']) || $vo['child'] instanceof \think\Collection || $vo['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ch): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $ch['type_id']; ?>" <?php if($param['type'] == $ch['type_id']): ?>selected <?php endif; ?>>&nbsp;&nbsp;&nbsp;&nbsp;├&nbsp;<?php echo $ch['type_name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
                <div class="layui-input-inline w150">
                    <select name="status">
                        <option value=""><?php echo lang('select_status'); ?></option>
                        <option value="0" <?php if($param['status'] == '0'): ?>selected <?php endif; ?>><?php echo lang('reviewed_not'); ?></option>
                        <option value="1" <?php if($param['status'] == '1'): ?>selected <?php endif; ?>><?php echo lang('reviewed'); ?></option>
                    </select>
                </div>
                <div class="layui-input-inline w150">
                    <select name="level">
                        <option value=""><?php echo lang('select_level'); ?></option>
                        <option value="9" <?php if($param['level'] == '9'): ?>selected <?php endif; ?>><?php echo lang('level'); ?>9-<?php echo lang('slide'); ?></option>
                        <option value="1" <?php if($param['level'] == '1'): ?>selected <?php endif; ?>><?php echo lang('level'); ?>1</option>
                        <option value="2" <?php if($param['level'] == '2'): ?>selected <?php endif; ?>><?php echo lang('level'); ?>2</option>
                        <option value="3" <?php if($param['level'] == '3'): ?>selected <?php endif; ?>><?php echo lang('level'); ?>3</option>
                        <option value="4" <?php if($param['level'] == '4'): ?>selected <?php endif; ?>><?php echo lang('level'); ?>4</option>
                        <option value="5" <?php if($param['level'] == '5'): ?>selected <?php endif; ?>><?php echo lang('level'); ?>5</option>
                        <option value="6" <?php if($param['level'] == '6'): ?>selected <?php endif; ?>><?php echo lang('level'); ?>6</option>
                        <option value="7" <?php if($param['level'] == '7'): ?>selected <?php endif; ?>><?php echo lang('level'); ?>7</option>
                        <option value="8" <?php if($param['level'] == '8'): ?>selected <?php endif; ?>><?php echo lang('level'); ?>8</option>
                    </select>
                </div>
                <div class="layui-input-inline w150">
                    <select name="lock">
                        <option value=""><?php echo lang('select_lock'); ?></option>
                        <option value="0" <?php if($param['lock'] == '0'): ?>selected <?php endif; ?>><?php echo lang('unlock'); ?></option>
                        <option value="1" <?php if($param['lock'] == '1'): ?>selected <?php endif; ?>><?php echo lang('lock'); ?></option>
                    </select>
                </div>

                <div class="layui-input-inline w150">
                    <select name="weekday">
                        <option value=""><?php echo lang('admin/vod/select_weekday'); ?></option>
                        <?php $_result=explode(',',$GLOBALS['config']['app']['vod_extend_weekday']);if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $key2 = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;?>
                        <option value="<?php echo $vo2; ?>" <?php if($param['weekday'] == $vo2): ?>selected <?php endif; ?>><?php echo $vo2; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>

                <div class="layui-input-inline w150">
                    <select name="area">
                        <option value=""><?php echo lang('admin/vod/select_area'); ?></option>
                        <?php $_result=explode(',',$GLOBALS['config']['app']['vod_extend_area']);if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $key2 = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;?>
                        <option value="<?php echo $vo2; ?>" <?php if($param['area'] == $vo2): ?>selected <?php endif; ?>><?php echo $vo2; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>

                <div class="layui-input-inline w150">
                    <select name="lang">
                        <option value=""><?php echo lang('admin/vod/select_lang'); ?></option>
                        <?php $_result=explode(',',$GLOBALS['config']['app']['vod_extend_lang']);if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $key2 = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;?>
                        <option value="<?php echo $vo2; ?>" <?php if($param['lang'] == $vo2): ?>selected <?php endif; ?>><?php echo $vo2; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>


                <div class="layui-input-inline w150">
                    <select name="server">
                        <option value=""><?php echo lang('admin/vod/select_server'); ?></option>
                        <?php if(is_array($server_list) || $server_list instanceof \think\Collection || $server_list instanceof \think\Paginator): $i = 0; $__LIST__ = $server_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo['from']; ?>" <?php if($param['server'] == $vo['from']): ?>selected<?php endif; ?>><?php echo $vo['show']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>

                <div class="layui-input-inline w150">
                    <select name="player">
                        <option value=""><?php echo lang('admin/vod/select_player'); ?></option>
                        <option value="no" <?php if($param['player'] == 'no'): ?>selected<?php endif; ?>><?php echo lang('admin/vod/player_empty'); ?></option>
                        <?php if(is_array($player_list) || $player_list instanceof \think\Collection || $player_list instanceof \think\Paginator): $i = 0; $__LIST__ = $player_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo['from']; ?>" <?php if($param['player'] == $vo['from']): ?>selected<?php endif; ?>><?php echo $vo['show']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>

                <div class="layui-input-inline w150">
                    <select name="downer">
                        <option value=""><?php echo lang('admin/vod/select_downer'); ?></option>
                        <option value="no" <?php if($param['downer'] == 'no'): ?>selected<?php endif; ?>><?php echo lang('admin/vod/downer_empty'); ?></option>
                        <?php if(is_array($downer_list) || $downer_list instanceof \think\Collection || $downer_list instanceof \think\Paginator): $i = 0; $__LIST__ = $downer_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo['from']; ?>" <?php if($param['downer'] == $vo['from']): ?>selected<?php endif; ?>><?php echo $vo['show']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>

                <div class="layui-input-inline w150">
                    <select name="pic">
                        <option value=""><?php echo lang('select_pic'); ?></option>
                        <option value="1" <?php if($param['pic'] == '1'): ?>selected<?php endif; ?>><?php echo lang('pic_empty'); ?></option>
                        <option value="2" <?php if($param['pic'] == '2'): ?>selected<?php endif; ?>><?php echo lang('pic_remote'); ?></option>
                        <option value="3" <?php if($param['pic'] == '3'): ?>selected<?php endif; ?>><?php echo lang('pic_sync_err'); ?></option>
                    </select>
                </div>

                <div class="layui-input-inline w150">
                    <select name="isend">
                        <option value=""><?php echo lang('admin/vod/select_isend'); ?></option>
                        <option value="0" <?php if($param['isend'] == '0'): ?>selected <?php endif; ?>><?php echo lang('admin/vod/no_end'); ?></option>
                        <option value="1" <?php if($param['isend'] == '1'): ?>selected <?php endif; ?>><?php echo lang('admin/vod/is_end'); ?></option>
                    </select>
                </div>
                <div class="layui-input-inline w150">
                    <select name="copyright">
                        <option value=""><?php echo lang('admin/vod/select_copyright'); ?></option>
                        <option value="0" <?php if($param['copyright'] == '0'): ?>selected <?php endif; ?>><?php echo lang('close'); ?></option>
                        <option value="1" <?php if($param['copyright'] == '1'): ?>selected <?php endif; ?>><?php echo lang('open'); ?></option>
                    </select>
                </div>
                <div class="layui-input-inline w150">
                    <select name="plot">
                        <option value=""><?php echo lang('admin/vod/select_plot'); ?></option>
                        <option value="0" <?php if($param['plot'] == '0'): ?>selected <?php endif; ?>><?php echo lang('admin/vod/no'); ?></option>
                        <option value="1" <?php if($param['plot'] == '1'): ?>selected <?php endif; ?>><?php echo lang('admin/vod/have'); ?></option>
                    </select>
                </div>
                <div class="layui-input-inline w150">
                    <select name="order">
                        <option value=""><?php echo lang('select_sort'); ?></option>
                        <option value="vod_time" <?php if($param['order'] == 'vod_time'): ?>selected<?php endif; ?>><?php echo lang('update_time'); ?></option>
                        <option value="vod_id" <?php if($param['order'] == 'vod_id'): ?>selected<?php endif; ?>><?php echo lang('id'); ?></option>
                        <option value="vod_hits" <?php if($param['order'] == 'vod_hits'): ?>selected<?php endif; ?>><?php echo lang('hits'); ?></option>
                        <option value="vod_hits_month" <?php if($param['order'] == 'vod_hits_month'): ?>selected<?php endif; ?>><?php echo lang('hits_month'); ?></option>
                        <option value="vod_hits_week" <?php if($param['order'] == 'vod_hits_week'): ?>selected<?php endif; ?>><?php echo lang('hits_week'); ?></option>
                        <option value="vod_hits_day" <?php if($param['order'] == 'vod_hits_day'): ?>selected<?php endif; ?>><?php echo lang('hits_day'); ?></option>
                    </select>
                </div>


                <div class="layui-input-inline">
                    <input type="text" autocomplete="off" placeholder="<?php echo lang('wd'); ?>" class="layui-input" name="wd" value="<?php echo mac_restore_htmlfilter($param['wd']); ?>">
                </div>
                <input type="hidden" name="repeat" value="<?php echo mac_filter_xss($param['repeat']); ?>" />
                <button class="layui-btn mgl-20 j-search" ><?php echo lang('btn_search'); ?></button>
            </form>
        </div>

        <div class="layui-btn-group">
            <a data-href="<?php echo url('info'); ?>" data-full="1" class="layui-btn layui-btn-primary j-iframe"><i class="layui-icon">&#xe654;</i><?php echo lang('add'); ?></a>
            <a data-href="<?php echo url('del'); ?>" class="layui-btn layui-btn-primary j-page-btns confirm"><i class="layui-icon">&#xe640;</i><?php echo lang('del'); ?></a>
            <a data-href="<?php echo url('index/select'); ?>?tab=vod&col=type_id&tpl=select_type&url=vod/field" data-width="270" data-height="100" data-checkbox="1" class="layui-btn layui-btn-primary j-select"><i class="layui-icon">&#xe620;</i><?php echo lang('type'); ?></a>
            <a data-href="<?php echo url('index/select'); ?>?tab=vod&col=vod_level&tpl=select_level&url=vod/field" data-width="270" data-height="100" data-checkbox="1" class="layui-btn layui-btn-primary j-select"><i class="layui-icon">&#xe620;</i><?php echo lang('level'); ?></a>
            <a data-href="<?php echo url('index/select'); ?>?tab=vod&col=vod_hits&tpl=select_hits&url=vod/field" data-width="470" data-height="100" data-checkbox="1" class="layui-btn layui-btn-primary j-select"><i class="layui-icon">&#xe620;</i><?php echo lang('hits'); ?></a>            
            <a data-href="<?php echo url('index/select'); ?>?tab=vod&col=vod_status&tpl=select_status&url=vod/field" data-width="270" data-height="100" data-checkbox="1" class="layui-btn layui-btn-primary j-select"><i class="layui-icon">&#xe620;</i><?php echo lang('status'); ?></a>
            <a data-href="<?php echo url('index/select'); ?>?tab=vod&col=vod_lock&tpl=select_lock&url=vod/field" data-width="270" data-height="100" data-checkbox="1" class="layui-btn layui-btn-primary j-select"><i class="layui-icon">&#xe620;</i><?php echo lang('lock'); ?></a>
            <a data-href="<?php echo url('index/select'); ?>?tab=vod&col=vod_copyright&tpl=select_copyright&url=vod/field" data-width="270" data-height="100" data-checkbox="1" class="layui-btn layui-btn-primary j-select"><i class="layui-icon">&#xe620;</i><?php echo lang('admin/vod/copyright'); ?></a>
            <a class="layui-btn layui-btn-primary j-iframe" data-href="<?php echo url('images/opt?tab=vod'); ?>" href="javascript:;" title="<?php echo lang('pic_sync'); ?>"><i class="layui-icon">&#xe620;</i><?php echo lang('pic_sync'); ?></a>
            <a class="layui-btn layui-btn-primary j-iframe" data-checkbox="true" data-href="<?php echo url('make/make?ac=info&tab=vod'); ?>" href="javascript:;" title="<?php echo lang('make_page'); ?>"><i class="layui-icon">&#xe620;</i><?php echo lang('make_page'); ?></a>
            <?php if($param['select'] == 1): ?>
            <a data-href="" onclick="parent.onSelectResult('<?php echo $param['input']; ?>',$('.checkbox-ids:checked'))" class="layui-btn layui-btn-normal"><?php echo lang('select_return'); ?></a>
            <?php endif; if($param['repeat'] != ''): ?>
            <a data-href="<?php echo url('del'); ?>?repeat=1&retain=min" data-checkbox="no" class="layui-btn layui-btn-primary j-page-btns confirm"><i class="layui-icon">&#xe640;</i><?php echo lang('del_auto_keep_min'); ?></a>
            <a data-href="<?php echo url('del'); ?>?repeat=1&retain=max" data-checkbox="no" class="layui-btn layui-btn-primary j-page-btns confirm"><i class="layui-icon">&#xe640;</i><?php echo lang('del_auto_keep_max'); ?></a>
            <?php endif; ?>
        </div>

    </div>


    <form class="layui-form " method="post" id="pageListForm">
        <table class="layui-table" lay-size="sm">
            <thead>
            <tr>
                <th width="25"><input type="checkbox" lay-skin="primary" lay-filter="allChoose"></th>
                <th width="40"><?php echo lang('id'); ?></th>
                <th id="table_th_vod_name"><?php echo lang('name'); ?></th>
                <th width="50"><?php echo lang('hits'); ?></th>
                <th width="50"><?php echo lang('hits_week'); ?></th>
                <th width="40"><?php echo lang('score'); ?></th>
                <th width="30"><?php echo lang('level'); ?></th>
                <th width="30"><?php echo lang('browse'); ?></th>
                <th width="80"><?php echo lang('player'); ?></th>
                <th width="120"><?php echo lang('update_time'); ?></th>
                <th width="190"><?php echo lang('opt'); ?></th>
            </tr>
            </thead>

            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><input type="checkbox" name="ids[]" value="<?php echo $vo['vod_id']; ?>" class="layui-checkbox checkbox-ids" lay-skin="primary"></td>
                <td><?php echo $vo['vod_id']; ?></td>
                <td>
                    [<?php echo $vo['type']['type_name']; ?>] <a target="_blank" class="layui-badge-rim" href="<?php echo mac_url_vod_detail($vo); ?>"><?php echo mac_restore_htmlfilter(mac_filter_xss($vo['vod_name'])); ?></a>
                    <?php if($vo['vod_status'] == 0): ?> <span class="layui-badge"><?php echo lang('reviewed_not'); ?></span><?php endif; if($vo['vod_lock'] == 1): ?> <span class="layui-badge"><?php echo lang('lock'); ?></span><?php endif; if($vo['vod_isend'] == 0 && $vo['vod_serial'] != ''): ?> <span class="layui-badge layui-bg-blue"><?php echo lang('admin/vod/serialize'); ?><?php echo $vo['vod_serial']; ?></span><?php endif; if($vo['vod_remarks'] != ''): ?> <span class="layui-badge layui-bg-orange"><?php echo $vo['vod_remarks']; ?></span><?php endif; if($vo['vod_plot'] == 1): ?> <span class="layui-badge layui-bg-cyan"><?php echo lang('plot'); ?></span><?php endif; if($vo['vod_copyright'] == 1): ?> <span class="layui-badge layui-bg-black"><?php echo lang('admin/vod/copyright'); ?></span><?php endif; ?>
                </td>
                <td><?php echo $vo['vod_hits']; ?></td>
                <td><?php echo $vo['vod_hits_week']; ?></td>
                <td><?php echo $vo['vod_score']; ?></td>
                <td><a data-href="<?php echo url('index/select'); ?>?tab=vod&col=vod_level&tpl=select_level&url=vod/field&ids=<?php echo $vo['vod_id']; ?>" data-width="270" data-height="100" class=" j-select"><span class="layui-badge layui-bg-orange"><?php echo $vo['vod_level']; ?></span></a></td>
                <td><?php if($vo['ismake'] == 1): ?><a target="_blank" class="layui-badge layui-bg-green " href="<?php echo mac_url_vod_detail($vo); ?>">Y</a><?php else: ?><a class="layui-badge" href="<?php echo url('make/make?ac=info&tab=vod'); ?>?ids=<?php echo $vo['vod_id']; ?>&ref=1">N</a><?php endif; ?></td>
                <td><span title="<?php echo str_replace('$$$',',',$vo['vod_play_from']); ?>-<?php echo str_replace('$$$',',',$vo['vod_down_from']); ?>"><?php echo str_replace('$$$',',',$vo['vod_play_from']); ?>-<?php echo str_replace('$$$',',',$vo['vod_down_from']); ?></span></td>
                <td><?php echo mac_day($vo['vod_time'],'color'); ?></td>
                <td>
                    <a class="layui-badge-rim j-iframe" data-full="1" data-href="<?php echo url('info?id='.$vo['vod_id']); ?>" href="javascript:;" title="<?php echo lang('edit'); ?>"><?php echo lang('edit'); ?></a>
                    <a class="layui-badge-rim j-tr-del" data-href="<?php echo url('del?ids='.$vo['vod_id']); ?>" href="javascript:;" title="<?php echo lang('del'); ?>"><?php echo lang('del'); ?></a>
                    <a class="layui-badge-rim j-iframe" data-full="1"  data-href="<?php echo url('role/data?select=1&tab=vod&rid='.$vo['vod_id']); ?>" href="javascript:;" title="<?php echo lang('role'); ?>"><?php echo lang('role'); ?></a>
                    <a class="layui-badge-rim j-iframe" data-full="1"  data-href="<?php echo url('iplot?id='.$vo['vod_id']); ?>" href="javascript:;" title="<?php echo lang('plot'); ?>"><?php echo lang('plot'); ?></a>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
        <div id="pages" class="center"></div>
    </form>
</div>




<script type="text/javascript" src="/static/js/admin_common.js?<?php echo $MAC_VERSION; ?>"></script>

<script type="text/javascript">
    var curUrl="<?php echo url('vod/data',$param); ?>";
    layui.use(['laypage', 'layer','form'], function() {
        var laypage = layui.laypage
                , layer = layui.layer,
                form = layui.form;
                $ = layui.jquery;

        laypage.render({
            elem: 'pages'
            ,count: <?php echo $total; ?>
            ,limit: <?php echo $limit; ?>
            ,curr: <?php echo $page; ?>
            ,layout: ['count', 'prev', 'page', 'next', 'limit', 'skip']
            ,jump: function(obj,first){
                if(!first){
                    location.href = curUrl.replace('%7Bpage%7D',obj.curr).replace('%7Blimit%7D',obj.limit);
                }
            }
        });

        // 小屏幕下名称问题
        if ($('body').width() <= 600) {
            $('#table_th_vod_name').attr('width', '300');
        }

    });
</script>
</body>
</html>