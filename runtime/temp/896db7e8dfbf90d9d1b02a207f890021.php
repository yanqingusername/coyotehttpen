<?php /*a:2:{s:78:"/Applications/phpstudy/coyotehttpen/application/admin/view/adminlog/index.html";i:1677057907;s:76:"/Applications/phpstudy/coyotehttpen/application/admin/view/index_layout.html";i:1677057907;}*/ ?>
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
    <div class="layui-card-header">管理日志</div>
    <div class="layui-card-body">
        <table class="layui-hide" id="currentTable" lay-filter="currentTable"></table>
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
        del_url: "<?php echo url('deletelog'); ?>",
    };

    table.render({
        id: 'currentTable',
        elem: '#currentTable',
        toolbar: ['refresh',
            [{
                text: '删除一个月前日志',
                url: init.del_url,
                method: 'request',
                auth: 'refresh',
                icon: 'iconfont icon-trash',
                class: 'layui-btn layui-btn-sm layui-btn-danger',
                extend: 'data-table="currentTable"',
            }]
        ],
        url: '<?php echo url("index"); ?>',
        cols: [
            [
                { field: 'id', width: 80, title: 'ID', sort: true },
                { field: 'uid', width: 80, title: '用户ID' },
                { field: 'info', title: '提示' },
                { field: 'get', title: '操作URL' },
                { field: 'create_time', width: 180, title: '时间', search: 'range' },
                { field: 'ip', width: 120, title: 'IP' },
                { field: 'status', width: 80, title: '状态', align: "center", templet: '<div>{{#  if(d.status){ }} <button class="layui-btn layui-btn layui-btn-xs">成功</button> {{#  } else { }} <button class="layui-btn layui-btn-danger layui-btn layui-btn-xs">失败</button> {{#  } }} </div>', selectList: { 0: '失败', 1: '成功' } },
            ]
        ],
        page: {}
    });
});
</script>

</body>

</html>