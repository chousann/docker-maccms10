<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"/var/www/html/application/admin/view/extend/editor/kindeditor.html";i:1679889257;}*/ ?>
<script type="text/javascript" src="/static/editor/kindeditor/kindeditor-all-min.js"></script>
<script type="text/javascript">
    var EDITOR = KindEditor;
</script>
<script>
    var editor = "<?php echo $editor; ?>";
    function editor_getEditor(obj)
    {
        return KindEditor.create('#'+obj, { uploadJson:"<?php echo url('upload/upload'); ?>?from=kindeditor&flag=<?php echo strtolower($cl); ?>_editor&input=imgFile" , allowFileManager : false });
    }
    function editor_setContent(obj,html)
    {
        return obj.html(html);
    }
    function editor_getContent(obj)
    {
        return obj.html();
    }
</script>