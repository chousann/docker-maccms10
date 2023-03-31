<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:58:"/var/www/html/application/admin/view/vodplayer/import.html";i:1679889260;s:53:"/var/www/html/application/admin/view/public/head.html";i:1679889258;s:53:"/var/www/html/application/admin/view/public/foot.html";i:1679889258;}*/ ?>
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

    <div class="layui-tab layui-tab-brief" lay-filter="tabs">
        <ul class="layui-tab-title">
            <li class="btn-local" ><a href="<?php echo url('index'); ?>"><?php echo lang('return'); ?></a></li>
            <li class="layui-this"><a href="<?php echo url('add'); ?>"><?php echo lang('import'); ?></a></li>
        </ul>

        <div class="layui-tab-content">
            <blockquote class="layui-elem-quote layui-quote-nm">
                <?php echo lang('admin/vodplayer/import_tip'); ?>
            </blockquote>
            <input type="hidden" id="token" name="__token__" value="<?php echo \think\Request::instance()->token(); ?>" />
            <button type="button" class="layui-btn layui-upload" id="upload1"><?php echo lang('upload'); ?></button>
        </div>
    </div>
</div>

<script type="text/javascript" src="/static/js/admin_common.js?<?php echo $MAC_VERSION; ?>"></script>


<script type="text/javascript">
    var url='';
    layui.use(['form','laypage', 'layer','upload','element'], function() {
        // 操作对象
        var form = layui.form
            , layer = layui.layer
            , upload = layui.upload
            ,element = layui.element;

        upload.render({
            elem: '.layui-upload'
            ,url: "<?php echo url('vodplayer/import'); ?>?__token__=" + $('#token').val()
            ,method: 'post'
            ,exts:'txt'
            ,before: function(input) {
                layer.msg("<?php echo lang('upload_ing'); ?>", {time:3000000});
            },done: function(res, index, upload) {
                var obj = this.item;
                layer.msg(res.msg);
                setTimeout(function () {
                    layer.closeAll();
                    location.reload();
                },2000);
            }
        });

    });


</script>
</body>
</html>