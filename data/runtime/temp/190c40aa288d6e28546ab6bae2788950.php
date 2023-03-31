<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:57:"/var/www/html/application/admin/view/vodplayer/index.html";i:1679889260;s:53:"/var/www/html/application/admin/view/public/head.html";i:1679889258;s:53:"/var/www/html/application/admin/view/public/foot.html";i:1679889258;}*/ ?>
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

        <div class="layui-btn-group">
            <a data-href="<?php echo url('info'); ?>" class="layui-btn layui-btn-primary j-iframe"><i class="layui-icon">&#xe654;</i><?php echo lang('add'); ?></a>
            <a href="<?php echo url('import'); ?>" class="layui-btn layui-btn-primary" ><i class="layui-icon">&#xe654;</i><?php echo lang('import'); ?></a>
            <a data-href="<?php echo url('index/select'); ?>?tab=vod&col=status&tpl=select_state&url=vodplayer/field" data-width="470" data-height="100" data-checkbox="1" class="layui-btn layui-btn-primary j-select"><i class="layui-icon">&#xe620;</i><?php echo lang('status'); ?></a>
            <a data-href="<?php echo url('index/select'); ?>?tab=vod&col=ps&tpl=select_state&url=vodplayer/field" data-width="470" data-height="100" data-checkbox="1" class="layui-btn layui-btn-primary j-select"><i class="layui-icon">&#xe620;</i><?php echo lang('status_parse'); ?></a>
        </div>

    </div>

    <form class="layui-form " method="post" id="pageListForm">
        <table class="layui-table" lay-size="sm">
            <thead>
            <tr>
                <th width="25"><input type="checkbox" lay-skin="primary" lay-filter="allChoose"></th>
                <th width="40"><?php echo lang('sort'); ?></th>
                <th width="40"><?php echo lang('code'); ?></th>
                <th width="130"><?php echo lang('name'); ?></th>
                <th width="50"><?php echo lang('status'); ?></th>
                <th width="50"><?php echo lang('status_parse'); ?></th>
                <th width="50"><?php echo lang('target'); ?></th>
                <th width="130"><?php echo lang('admin/vodplayer/alone_api_url'); ?></th>
                <th width="130"><?php echo lang('remarks'); ?></th>
                <th ><?php echo lang('tip'); ?></th>
                <th width="130"><?php echo lang('opt'); ?></th>
            </tr>
            </thead>

            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><input type="checkbox" name="ids[]" value="<?php echo $vo['from']; ?>" class="layui-checkbox checkbox-ids" lay-skin="primary"></td>
                <td><?php echo $vo['sort']; ?></td>
                <td><?php echo $vo['from']; ?></td>
                <td><?php echo $vo['show']; ?></td>
                <td><?php if($vo['status'] == 1): ?><span class="layui-badge layui-bg-green"><?php echo lang('enable'); ?></span><?php else: ?><span class="layui-badge"><?php echo lang('disable'); ?></span><?php endif; ?> </td>
                <td><?php if($vo['ps'] == 1): ?><span class="layui-badge layui-bg-green"><?php echo lang('enable'); ?></span><?php else: ?><span class="layui-badge"><?php echo lang('disable'); ?></span><?php endif; ?> </td>
                <td><?php if($vo['target'] != '_blank'): ?><span class="layui-badge layui-bg-green"><?php echo lang('current'); ?></span><?php else: ?><span class="layui-badge"><?php echo lang('blank'); ?></span><?php endif; ?> </td>
                <td><?php echo $vo['parse']; ?></td>
                <td><?php echo $vo['des']; ?></td>
                <td><?php echo $vo['tip']; ?></td>
                <td>
                    <a class="layui-badge-rim" href="<?php echo url('export?id='.$vo['from']); ?>" title="<?php echo lang('export'); ?>"><?php echo lang('export'); ?></a>
                    <a class="layui-badge-rim j-iframe" data-href="<?php echo url('info?id='.$vo['from']); ?>" href="javascript:;" title="<?php echo lang('edit'); ?>"><?php echo lang('edit'); ?></a>
                    <a class="layui-badge-rim j-tr-del" data-href="<?php echo url('del?ids='.$vo['from']); ?>" href="javascript:;" title="<?php echo lang('del'); ?>"><?php echo lang('del'); ?></a>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>

    </form>
</div>
<script type="text/javascript" src="/static/js/admin_common.js?<?php echo $MAC_VERSION; ?>"></script>

<script type="text/javascript">
    layui.use(['form','laypage', 'layer'], function() {
        // 操作对象
        var form = layui.form
                , layer = layui.layer
                , $ = layui.jquery;


    });
</script>
</body>
</html>