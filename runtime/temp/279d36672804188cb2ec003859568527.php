<?php /*a:2:{s:82:"/Applications/phpstudy/coyotehttpen/application/admin/view/auth_manager/index.html";i:1677057907;s:76:"/Applications/phpstudy/coyotehttpen/application/admin/view/index_layout.html";i:1677057907;}*/ ?>
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
    //全局变量
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
    <div class="layui-card-header">角色管理</div>
    <div class="layui-card-body">
        <div class="layui-form">
            <table class="layui-hide" id="currentTable" lay-filter="currentTable"></table>
            <script type="text/html" id="barTool">
                {{#  if(d.id == 1){ }}
                <a class="layui-btn layui-btn-xs layui-btn-danger layui-btn-disabled">不可操作</a>
                {{#  } else { }}
                <a data-open='<?php echo url("editgroup"); ?>?id={{ d.id }}' class="layui-btn layui-btn-xs">编辑</a>
                <a href='<?php echo url("deletegroup"); ?>?id={{ d.id }}' class="layui-btn layui-btn-danger layui-btn-xs layui-tr-del">删除</a>
                {{#  } }}
            </script>
        </div>
    </div>
</div>

    
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
        add_url: "<?php echo url('createGroup'); ?>",
    };

    table.render({
        init: init,
        id:'currentTable',
        elem: '#currentTable',
        toolbar: ['refresh','add'],
        url: '<?php echo url("index"); ?>',
        search:false,
        cols: [
            [
                { field: 'title',width: 200, title: '授权',templet: "<div><a class='layui-btn layui-btn-xs' href='<?php echo url('access?group_name='); ?>?title={{d.title}}&group_id={{d.id}}'>访问授权</a></div>" },
                { field: 'title', width: 200, title: '权限组'},
                { field: 'description', title: '描述' },
                { field: 'status', width: 100,title: '状态', templet: '<div>{{#  if(d.status){ }} <button class="layui-btn layui-btn layui-btn-xs">正常</button> {{#  } else { }} <button class="layui-btn layui-btn-danger layui-btn layui-btn-xs">禁用</button> {{#  } }} </div>' },
                { fixed: 'right', width: 160, title: '操作', toolbar: '#barTool' }
            ]
        ],
    });
});
</script>

</body>

</html>