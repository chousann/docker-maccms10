<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:53:"/var/www/html/application/admin/view/collect/vod.html";i:1679889257;s:53:"/var/www/html/application/admin/view/public/head.html";i:1679889258;s:53:"/var/www/html/application/admin/view/public/foot.html";i:1679889258;}*/ ?>
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
<div class="page-container p10">

    <div class="my-toolbar-box">

        <div class="mb10">
            <div class="layui-input-inline w150 m5"><a href="javascript:;" data-id="" class="select_type red"><?php echo lang('admin/collect/view_all_resource'); ?></a></div>
            <?php if(is_array($type) || $type instanceof \think\Collection || $type instanceof \think\Paginator): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <div class="layui-input-inline w150 m5">
                <a href="javascript:;" data-id="<?php echo $vo['type_id']; ?>" class="select_type"><?php echo htmlspecialchars($vo['type_name']); ?></a>
                <a id="<?php echo mac_filter_xss($param['cjflag']); ?>_<?php echo $vo['type_id']; ?>" data-href="<?php echo url('index/select'); ?>?tab=vod&col=<?php echo mac_filter_xss($param['cjflag']); ?>_<?php echo $vo['type_id']; ?>&ids=1&tpl=select_type&refresh=no&url=collect/bind" data-width="270" data-height="100" class="j-select" >
                    <?php if($vo['isbind'] == 1): ?>
                    <span class="red">[<?php echo $vo['local_type_name']; ?>]</span>
                    <?php else: ?>
                    [<?php echo lang('bind'); ?>]
                    <?php endif; ?>
                </a>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>

        </div>

        <div class="center mb10">
            <form class="layui-form " method="">
                <div class="layui-input-inline">
                    <input type="text" autocomplete="off" placeholder="<?php echo lang('wd'); ?>" class="layui-input" id="wd" name="wd" value="<?php echo mac_filter_xss($param['wd']); ?>">
                </div>
                <button type="button" class="layui-btn mgl-20 j-btn" ><?php echo lang('btn_search'); ?></button>
            </form>
        </div>

    </div>


    <form class="layui-form " method="post" id="pageListForm">
        <table class="layui-table" lay-size="sm">
            <thead>
            <tr>
                <th width="25"><input type="checkbox" lay-skin="primary" lay-filter="allChoose"></th>
                <th ><?php echo lang('name'); ?></th>
                <th width="60"><?php echo lang('type'); ?></th>
                <th width="60"><?php echo lang('from'); ?></th>
                <th width="140"><?php echo lang('time'); ?></th>
            </tr>
            </thead>

            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><input type="checkbox" name="ids[]" value="<?php echo $vo['vod_id']; ?>" class="layui-checkbox checkbox-ids" lay-skin="primary"></td>
                <td><?php echo htmlspecialchars($vo['vod_name']); ?></td>
                <td><?php echo htmlspecialchars($vo['type_name']); ?></td>
                <td><?php echo htmlspecialchars($vo['vod_play_from']); ?></td>
                <td><?php echo mac_day($vo['vod_time'],'color'); ?></td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
        <div class="layui-btn-group">
            <?php 
                $p1 = $param;
                unset($p1['ac']);
                $p1_str = http_build_query($p1);
             ?>
            <a data-href="<?php echo url('api'); ?>?<?php echo $p1_str; ?>&ac=cjsel" data-ajax="no" class="layui-btn layui-btn-primary j-page-btns"><i class="layui-icon">&#xe654;</i><?php echo lang('admin/collect/cj_select'); ?></a>
            <a data-href="<?php echo url('api'); ?>?<?php echo $p1_str; ?>&h=24&ac=cjday" data-checkbox="no" data-ajax="no" class="layui-btn layui-btn-primary j-page-btns"><i class="layui-icon">&#xe654;</i><?php echo lang('admin/collect/cj_today'); ?></a>
            <a data-href="<?php echo url('api'); ?>?<?php echo $p1_str; ?>&ac=cjall" data-checkbox="no" data-ajax="no" class="layui-btn layui-btn-primary j-page-btns"><i class="layui-icon">&#xe654;</i><?php echo lang('admin/collect/cj_all'); ?></a>
        </div>

        <div id="pages" class="center"></div>
    </form>

</div>


<script type="text/javascript" src="/static/js/admin_common.js?<?php echo $MAC_VERSION; ?>"></script>

<script type="text/javascript">
    var curUrl="<?php echo url('api'); ?>?<?php echo $param_str; ?>";
    layui.use(['laypage', 'layer','form'], function() {
        var laypage = layui.laypage
                , layer = layui.layer,
                form = layui.form;

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

        $('#wd').on('keydown', function (event) {
            if (event.keyCode == 13) {
                $('.j-btn').click();
                return false;
            }
        });

        $('.j-btn').click(function(){
           var wd = $('input[name="wd"]').val();
            var url = changeParam(curUrl,'wd',wd);
            location.href = url.replace('%7Bpage%7D',1).replace('%7Blimit%7D','');
        });

        $('.select_type').click(function(){
            var t = $(this).attr('data-id');
            var url = changeParam(curUrl,'t',t);
            location.href = url.replace('%7Bpage%7D',1).replace('%7Blimit%7D','');
        });

    });
    function onSubmitResult(res)
    {
        if(res.data.st==1){
            $('#'+res.data.id).html('<span class="red">['+ res.data.local_type_name +']</span>');
        }
        else{
            $('#'+res.data.id).html("[<?php echo lang('bind'); ?>]");
        }
    }
</script>
</body>
</html>