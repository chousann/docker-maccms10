<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:54:"/var/www/html/application/admin/view/collect/info.html";i:1679889257;s:53:"/var/www/html/application/admin/view/public/head.html";i:1679889258;s:53:"/var/www/html/application/admin/view/public/foot.html";i:1679889258;}*/ ?>
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
    <form class="layui-form layui-form-pane" method="post" action="">
        <input id="collect_id" name="collect_id" type="hidden" value="<?php echo $info['collect_id']; ?>">
        <input type="hidden" name="__token__" value="<?php echo \think\Request::instance()->token(); ?>" />
        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('admin/collect/name'); ?>：</label>
            <div class="layui-input-block  ">
                <input type="text" class="layui-input" value="<?php echo $info['collect_name']; ?>" placeholder="" id="collect_name" name="collect_name">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('admin/collect/api_url'); ?>：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['collect_url']; ?>" placeholder="" id="collect_url" name="collect_url">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('admin/collect/attach_param'); ?>：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['collect_param']; ?>" placeholder="" id="collect_param" name="collect_param">
            </div>
            <div class="layui-form-mid layui-word-aux" style="margin-left:110px; "><?php echo lang('admin/collect/attach_param_tip'); ?></div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('admin/collect/api_type'); ?>：</label>
            <div class="layui-input-block">
                <input name="collect_type" type="radio" value="1" title="xml" <?php if($info['collect_type'] == 1): ?>checked <?php endif; ?>>
                <input name="collect_type" type="radio" value="2" title="json" <?php if($info['collect_type'] != 1): ?>checked <?php endif; ?>>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('admin/collect/data_type'); ?>：</label>
            <div class="layui-input-block">
                <input name="collect_mid" lay-filter="collect_mid" type="radio" value="1" title="<?php echo lang('vod'); ?>" <?php if($info['collect_mid'] == 1): ?>checked <?php endif; ?>>
                <input name="collect_mid" lay-filter="collect_mid" type="radio" value="2" title="<?php echo lang('art'); ?>" <?php if($info['collect_mid'] == 2): ?>checked <?php endif; ?>>
                <input name="collect_mid" lay-filter="collect_mid" type="radio" value="8" title="<?php echo lang('actor'); ?>" <?php if($info['collect_mid'] == 8): ?>checked <?php endif; ?>>
                <input name="collect_mid" lay-filter="collect_mid" type="radio" value="9" title="<?php echo lang('role'); ?>" <?php if($info['collect_mid'] == 9): ?>checked <?php endif; ?>>
                <input name="collect_mid" lay-filter="collect_mid" type="radio" value="11" title="<?php echo lang('website'); ?>" <?php if($info['collect_mid'] == 11): ?>checked <?php endif; ?>>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label"><?php echo lang('admin/collect/data_opt'); ?>：</label>
            <div class="layui-input-block">
                <input name="collect_opt" type="radio" value="0" title="<?php echo lang('admin/collect/add_update'); ?>" <?php if($info['collect_opt'] == 0): ?>checked <?php endif; ?>>
                <input name="collect_opt" type="radio" value="1" title="<?php echo lang('admin/collect/add'); ?>" <?php if($info['collect_opt'] == 1): ?>checked <?php endif; ?>>
                <input name="collect_opt" type="radio" value="2" title="<?php echo lang('admin/collect/update'); ?>" <?php if($info['collect_opt'] == 2): ?>checked <?php endif; ?>>
            </div>
            <div class="layui-form-mid layui-word-aux" style=""><?php echo lang('admin/collect/data_opt_tip'); ?></div>
        </div>

        <div class="layui-form-item row_filer" <?php if($info['collect_mid'] != '1'): ?> style="display:none;" <?php endif; ?>>
            <label class="layui-form-label"><?php echo lang('admin/collect/url_filter'); ?>：</label>
            <div class="layui-input-block">
                <input name="collect_filter" type="radio" value="0" title="<?php echo lang('admin/collect/no_filter'); ?>" <?php if($info['collect_filter'] == 0): ?>checked <?php endif; ?>>
                <input name="collect_filter" type="radio" value="1" title="<?php echo lang('admin/collect/add_update'); ?>" <?php if($info['collect_filter'] == 1): ?>checked <?php endif; ?>>
                <input name="collect_filter" type="radio" value="2" title="<?php echo lang('admin/collect/add'); ?>" <?php if($info['collect_filter'] == 2): ?>checked <?php endif; ?>>
                <input name="collect_filter" type="radio" value="3" title="<?php echo lang('admin/collect/update'); ?>" <?php if($info['collect_filter'] == 3): ?>checked <?php endif; ?>>
            </div>
        </div>
        <div class="layui-form-item row_filer" <?php if($info['collect_mid'] != '1'): ?> style="display:none;" <?php endif; ?>>
            <label class="layui-form-label"><?php echo lang('admin/collect/filter_code'); ?>：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['collect_filter_from']; ?>" placeholder="" id="collect_filter_from" name="collect_filter_from">
            </div>
            <div class="layui-form-mid layui-word-aux" style="margin-left:110px; "><?php echo lang('admin/collect/filter_code_tip'); ?></div>
        </div>
        <div class="layui-form-item row_filer">
            <label class="layui-form-label"><?php echo lang('pic_sync'); ?>：</label>
            <div class="layui-input-block">
                <input name="collect_sync_pic_opt" type="radio" value="0" title="<?php echo lang('follow_global'); ?>" <?php if($info['collect_sync_pic_opt'] == 0): ?>checked <?php endif; ?>>
                <input name="collect_sync_pic_opt" type="radio" value="1" title="<?php echo lang('open'); ?>" <?php if($info['collect_sync_pic_opt'] == 1): ?>checked <?php endif; ?>>
                <input name="collect_sync_pic_opt" type="radio" value="2" title="<?php echo lang('close'); ?>" <?php if($info['collect_sync_pic_opt'] == 2): ?>checked <?php endif; ?>>
            </div>
        </div>

        <br>
        <div class="layui-form-item center">
            <div class="layui-input-block">
                <button class="layui-btn layui-btn-normal" type="button" id="btnTest" ><?php echo lang('test'); ?></button>
                <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit" data-child="true"><?php echo lang('btn_save'); ?></button>
                <button class="layui-btn layui-btn-warm" type="reset"><?php echo lang('btn_reset'); ?></button>
            </div>
        </div>
    </form>

</div>
<script type="text/javascript" src="/static/js/admin_common.js?<?php echo $MAC_VERSION; ?>"></script>

<script type="text/javascript">
    layui.use(['form', 'layer'], function () {
        // 操作对象
        var form = layui.form
                , layer = layui.layer
                , $ = layui.jquery;

        // 验证
        form.verify({
            collect_name: function (value) {
                if (value == "") {
                    return "<?php echo lang('name_empty'); ?>";
                }
            },
            collect_url: function (value) {
                if (value == "") {
                    return "<?php echo lang('url_empty'); ?>";
                }
            }
        });


        $('#btnTest').click(function() {
            var that = $(this);
            var data = 'cjurl='+ $('#collect_url').val() + '&cjflag='+ '&ac=list';

            $.post("<?php echo url('test'); ?>",data,function(r){
                if(r.code==1){
                    layer.msg( "<?php echo lang('admin/collect/test_ok'); ?>" + '：'+ r.msg ,{time:1800});
                    if(r.msg=='json'){
                        $("input[name='collect_type'][value=2]").attr("checked",true);
                    }
                    else{
                        $("input[name='collect_type'][value=1]").attr("checked",true);
                    }
                    form.render('radio');
                }
                else{
                    layer.msg(r.msg,{time:1800});
                }
            });

        });

        form.on('radio(collect_mid)',function(data){
            $('.row_filer').hide();
            if(data.value=='1'){
                $('.row_filer').show();
            }
        });

    });




</script>

</body>
</html>