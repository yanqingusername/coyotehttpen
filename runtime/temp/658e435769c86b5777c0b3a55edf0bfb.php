<?php /*a:2:{s:74:"/Applications/phpstudy/coyotehttpen/application/cms/view/models/index.html";i:1677057907;s:76:"/Applications/phpstudy/coyotehttpen/application/admin/view/index_layout.html";i:1677057907;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo config('web_mp_title'); ?></title>
    <meta name="author" content="YZNCMS">
    <link rel="stylesheet" href="/static/libs/layui/css/layui.css">
    <link rel="stylesheet" href="/static/admin/css/admin.css?t=1590715655">
    <link rel="stylesheet" href="/static/common/font/iconfont.css">
    <script src="/static/libs/layui/layui.js"></script>
    <script src="/static/libs/jquery/jquery.min.js"></script>
    <script type="text/javascript">
    //ćšć±ćé
    var GV = {
        'image_upload_url': '<?php echo !empty($image_upload_url) ? htmlentities($image_upload_url) :  url("attachment/upload/upload", ["dir" => "images", "module" => request()->module()]); ?>',
        'file_upload_url': '<?php echo !empty($file_upload_url) ? htmlentities($file_upload_url) :  url("attachment/upload/upload", ["dir" => "files", "module" => request()->module()]); ?>',
        'jcrop_upload_url': '<?php echo !empty($jcrop_upload_url) ? htmlentities($jcrop_upload_url) :  url("attachment/Attachments/cropper"); ?>',
        'WebUploader_swf': '/static/libs/webuploader/Uploader.swf',
        'ueditor_upload_url': '<?php echo !empty($ueditor_upload_url) ? htmlentities($ueditor_upload_url) :  url("attachment/upload/upload", ["dir" => "images","from"=>"ueditor", "module" => request()->module()]); ?>',
        'ueditor_grabimg_url': '<?php echo !empty($ueditor_upload_url) ? htmlentities($ueditor_upload_url) :  url("attachment/Attachments/geturlfile"); ?>',
        'image_select_url': '<?php echo !empty($image_select_url) ? htmlentities($image_select_url) :  url("attachment/Attachments/select"); ?>',
        'filter_word_url': '<?php echo !empty($filter_word_url) ? htmlentities($filter_word_url) :  url("admin/ajax/filterWord"); ?>',
    };
    </script>
</head>

<body class="childrenBody">
    
<div class="layui-card">
    <div class="layui-card-header">æšĄććèĄš</div>
    <div class="layui-card-body">
        <table class="layui-hide" id="currentTable" lay-filter="currentTable"></table>
    </div>
</div>
<script type="text/html" id="barTool">
	<a href='<?php echo url("field/index"); ?>?id={{ d.id }}' class="layui-btn layui-btn-xs layui-btn-normal">ć­æź”çźĄç</a>
    <a data-open='<?php echo url("edit"); ?>?id={{ d.id }}' class="layui-btn layui-btn-xs">çŒèŸ</a>
    <a href='<?php echo url("del"); ?>?id={{ d.id }}' class="layui-btn layui-btn-danger layui-btn-xs layui-tr-del">ć é€</a>
</script>
<script type="text/html" id="statusTpl">
    <input type="checkbox" name="status" data-href="<?php echo url('multi'); ?>?id={{d.id}}&param=status" value="{{d.id}}" lay-skin="switch" lay-text="ćŒćŻ|ćłé­" lay-filter="switchStatus" {{ d.status==1 ? 'checked' : '' }}>
</script>
<script type="text/html" id="constTpl">
    <input type="checkbox" name="is_const" data-href="<?php echo url('multi'); ?>?id={{d.id}}&param=is_const" value="{{d.id}}" lay-skin="switch" lay-text="ćŒćŻ|ćłé­" lay-filter="switchStatus" {{ d.is_const==1 ? 'checked' : '' }}>
</script>

    
    <script type="text/javascript">
    layui.config({
        version: '155714399886',
        base: '/static/libs/layui_exts/'
    }).extend({
        yzn: 'yzn/yzn',
        yznForm: 'yznForm/yznForm',
        yznTable: 'yznTable/yznTable',
        treeGrid: 'treeGrid/treeGrid',
        clipboard: 'clipboard/clipboard',
        notice: 'notice/notice',
        iconPicker: 'iconPicker/iconPicker',
        tableSelect: 'tableSelect/tableSelect',
        ztree: 'ztree/ztree',
        dragsort: 'dragsort/dragsort',
        tagsinput: 'tagsinput/tagsinput'
    }).use('yznForm');
    </script>
    
    
<script>
layui.use('yznTable', function() {
    var table = layui.yznTable;

    var init = {
        table_elem: '#currentTable',
        add_url: "<?php echo url('add'); ?>",
    };

    table.render({
        init: init,
        id: 'currentTable',
        elem: '#currentTable',
        toolbar: ['refresh', 'add'],
        url: '<?php echo url("index"); ?>',
        search:false,
        cols: [
            [
                { field: 'id', width: 100, title: 'æšĄćID' },
                { field: 'name', width: 120, title: 'æšĄććç§°' },
                { field: 'tablename', width:120,title: 'æ°æźèĄš' },
                { field: 'description', align: "left", title: 'æèż°' },
                { field: 'type', width:120,title: 'ç±»ć',templet: '<div>{{#  if(d.type==1){ }} çŹç«èĄš {{#  } else { }} äž»éèĄš {{#  } }} </div>' },
                { field: 'create_time',width:180, title: 'ćć»șæ¶éŽ' },
                { field: 'status', width: 100, title: 'ç¶æ', templet: '#statusTpl', unresize: true },
                <?php if(app('config')->get('app_debug')): ?>
                { field: 'is_const', width: 100, title: 'ćžžçš', templet: '#constTpl', unresize: true },
    <?php endif; ?>

                { fixed: 'right', title: 'æäœ', width: 200, templet: '#barTool' }
            ]
        ]
    });
});
</script>

</body>

</html>