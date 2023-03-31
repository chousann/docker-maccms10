<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"/var/www/html/application/admin/view/extend/editor/ckeditor.html";i:1679889257;}*/ ?>
<script type="text/javascript" src="/static/editor/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    var EDITOR = CKEDITOR;
</script>
<script>
    var editor = "<?php echo $editor; ?>";
    function editor_getEditor(obj)
    {
        return CKEDITOR.replace(obj,{filebrowserImageUploadUrl:"<?php echo url('upload/upload'); ?>?from=ckeditor&flag=<?php echo strtolower($cl); ?>_editor&input=upload"});
    }
    function editor_setContent(obj,html)
    {
        return obj.setData(html);
    }
    function editor_getContent(obj)
    {
        return obj.getData();
    }
</script>