<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"/var/www/html/application/admin/view/extend/editor/tinymce.html";i:1679889257;}*/ ?>
<script type="text/javascript" src="/static/editor/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    var EDITOR = tinymce;
</script>
<script>
    var editor = "<?php echo $editor; ?>";
    function editor_getEditor(obj)
    {
        tinyMCE.init({
            language: 'zh_CN',
            plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
            menubar: 'file edit view insert format tools table help',
            toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
            toolbar_sticky: true,
            images_upload_url: "<?php echo url('upload/upload'); ?>?from=tinymce&flag=<?php echo strtolower($cl); ?>_editor&input=file",
            selector: '#'+obj,
            init_instance_callback : function(editor) {
                res = editor;
            }
        });
        return tinyMCE.activeEditor;
    }
    function editor_setContent(obj,html)
    {
        return obj.setContent(html);
    }
    function editor_getContent(obj)
    {
        return obj.getContent();
    }
	$(document).on('click', '[lay-filter="formSubmit"]', function() {
		tinyMCE.triggerSave();
	});
</script>