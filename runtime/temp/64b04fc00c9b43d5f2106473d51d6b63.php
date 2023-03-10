<?php /*a:2:{s:82:"/www/wwwroot/kyden.web.zhongwangyingtong.com/application/cms/view/field/index.html";i:1628735052;s:85:"/www/wwwroot/kyden.web.zhongwangyingtong.com/application/admin/view/index_layout.html";i:1596779062;}*/ ?>
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
    <div class="layui-card-header">ć­æź”ćèĄš</div>
    <div class="layui-card-body">
        <table class="layui-hide" id="currentTable" lay-filter="currentTable"></table>
    </div>
</div>
<script type="text/html" id="switchTpl">
    {{#  if(d.iffixed==1){ }}
    {{#  if(d.status==1){ }}
    ćŻçš
    {{#  } else { }}
    çŠçš
    {{#  } }}
    {{#  } else { }}
    <input type="checkbox" name="status" data-href="<?php echo url('setstate'); ?>?id={{d.id}}" value="{{d.id}}" lay-skin="switch" lay-text="ćŻçš|çŠçš" lay-filter="switchStatus" {{ d.status==1 ? 'checked' : '' }}>
    {{#  } }}
</script>
<script type="text/html" id="listTpl">
    {{#  if(d.iffixed==1||(d.type!="text"&&d.type!="number")){ }}
    {{#  if(d.liststatus==1){ }}
    ćŻçš
    {{#  } else { }}
    çŠçš
    {{#  } }}
    {{#  } else { }}
    <input type="checkbox" name="liststatus" data-href="<?php echo url('setstatestatus'); ?>?id={{d.id}}" value="{{d.id}}" lay-skin="switch" lay-text="ćŻçš|çŠçš" lay-filter="switchStatus" {{ d.liststatus==1 ? 'checked' : '' }}>
    {{#  } }}
</script>
<script type="text/html" id="ifsearchTpl">
    <input type="checkbox" name="ifsearch" data-href="<?php echo url('setSearch'); ?>?id={{d.id}}" value="{{d.id}}" lay-skin="switch" lay-text="æŻ|ćŠ" lay-filter="switchStatus" {{ d.ifsearch==1 ? 'checked' : '' }}>
</script>
<script type="text/html" id="ifrequireTpl">
    <input type="checkbox" name="ifrequire" data-href="<?php echo url('setRequire'); ?>?id={{d.id}}" value="{{d.id}}" lay-skin="switch" lay-text="æŻ|ćŠ" lay-filter="switchStatus" {{ d.ifrequire==1 ? 'checked' : '' }}>
</script>
<script type="text/html" id="isaddTpl">
    <input type="checkbox" name="isadd" data-href="<?php echo url('setVisible'); ?>?id={{d.id}}" value="{{d.id}}" lay-skin="switch" lay-text="æŸç€ș|éè" lay-filter="switchStatus" {{ d.isadd==1 ? 'checked' : '' }}>
</script>
<script type="text/html" id="barTool">
    {{#  if(!d.iffixed){ }}
    <a data-open='<?php echo url("edit"); ?>?fieldid={{ d.id }}' class="layui-btn layui-btn-xs">çŒèŸ</a>
    <a href='<?php echo url("del"); ?>?id={{ d.id }}' class="layui-btn layui-btn-danger layui-btn-xs layui-tr-del">ć é€</a>
    {{#  } }}
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
        add_url: "<?php echo url('add',['modelid'=>$modelid]); ?>",
        modify_url: '<?php echo url("listorder"); ?>',
    };

    table.render({
            init: init,
            id: 'currentTable',
            elem: '#currentTable',
            toolbar: ['refresh',
                [{
                    html: '<a class="layui-btn layui-btn-sm" type="button" href="<?php echo url("models/index"); ?>"><i class="iconfont icon-undo"></i>&nbsp;èżćæšĄć</a>'
                }],'add'
        ],
        url: '<?php echo url("index",["id"=>$modelid]); ?>',
        cols: [
            [
                { field: 'listorder', width: 60, title: 'æćș', edit: 'text' },
                { field: 'id', width: 60, title: 'ID' },
                { field: 'name',align: "left", title: 'ć­æź”ćç§°' },
                { field: 'title',align: "left", title: 'æ éą' },
                { field: 'type', width: 120, title: 'ć­æź”ç±»ć' },
                { field: 'ifsystem', width: 60, align: "center", title: 'äž»èĄš', templet: '<div>{{#  if(d.ifsystem){ }} æŻ {{#  } }} </div>' },
                { field: 'create_time', width: 180, title: 'ćć»șæ¶éŽ' , search: 'range'},
                // { field: 'ifsearch', width: 90, align: "center", title: 'æçŽą', templet: '#ifsearchTpl', unresize: true, selectList: { 0: 'ćŠ', 1: 'æŻ' } },
                { field: 'ifrequire', width: 90, align: "center", title: 'ćżćĄ«', templet: '#ifrequireTpl', unresize: true, selectList: { 0: 'ćŠ', 1: 'æŻ' } },
                // { field: 'isadd', width: 100, align: "center", title: 'æçšżæŸç€ș', templet: '#isaddTpl', unresize: true , selectList: { 0: 'éè', 1: 'æŸç€ș' }},
                { field: 'status', width: 100, align: "center", title: 'ç¶æ', templet: '#switchTpl', unresize: true, selectList: { 0: 'çŠçš', 1: 'ćŻçš' }},
                { field: 'liststatus', width: 100, align: "center", title: 'ćèĄšæŸç€ș', templet: '#listTpl', unresize: true, selectList: { 0: 'çŠçš', 1: 'ćŻçš' }},
                { fixed: 'right', width: 120, title: 'æäœ', templet: '#barTool' }
            ]
        ],
        page: {}
    });
});
</script>

</body>

</html>