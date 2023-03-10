<?php /*a:2:{s:74:"/Applications/phpstudy/coyotehttpen/application/admin/view/menu/index.html";i:1677057907;s:76:"/Applications/phpstudy/coyotehttpen/application/admin/view/index_layout.html";i:1677057907;}*/ ?>
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
    <div class="layui-card-header">èćçźĄç</div>
    <div class="layui-card-body">
        <div class="layui-form">
            <table class="layui-hide" id="currentTable" lay-filter="currentTable"></table>
        </div>
    </div>
</div>
<script type="text/html" id="toolbarDemo">
    <div class="layui-btn-container">
    <button class="layui-btn layui-btn-sm yzn-btn-primary" data-treetable-refresh="currentTable"><i class="iconfont icon-shuaxin1"></i> </button>
    <button class="layui-btn layui-btn-sm" data-open="<?php echo url('add'); ?>" >æ°ćąćć°èć</button>
    <button class="layui-btn layui-btn-sm layui-btn-normal" id="openAll">ć±ćŒææć ćšéš</button>
</div>
</script>
<script type="text/html" id="barTool">
    <a data-open='<?php echo url("edit"); ?>?id={{ d.id }}' class="layui-btn layui-btn-xs">çŒèŸ</a>
    <a data-open='<?php echo url("add"); ?>?parentid={{ d.id }}' class="layui-btn layui-btn-xs layui-btn-normal">æ·»ć </a>
    <a href='<?php echo url("del"); ?>?id={{ d.id }}' class="layui-btn layui-btn-danger layui-btn-xs layui-tr-del">ć é€</a>
</script>
<script type="text/html" id="switchTpl">
    <input type="checkbox" name="status" data-href="<?php echo url('multi'); ?>?id={{d.id}}&param=status" value="{{d.id}}" lay-skin="switch" lay-text="æŸç€ș|éè" lay-filter="switchStatus" {{ d.status==1 ? 'checked' : '' }}>
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
var treeGrid = null;
layui.use(['table', 'treeGrid', 'yznTable'], function() {
    var $ = layui.$,
        treeGrid = layui.treeGrid,
        tableId = 'currentTable',
        yznTable = layui.yznTable,
        ptable = null;

    var init = {
        table_elem: '#currentTable',
    };

    var renderTable = function() {
        treeGrid.render({
            id: tableId,
            elem: init.table_elem,
            toolbar: '#toolbarDemo',
            idField: 'id',
            url: "<?php echo url('index'); ?>",
            cellMinWidth: 100,
            treeId: 'id', //æ ćœąidć­æź”ćç§°
            treeUpId: 'parentid', //æ ćœąç¶idć­æź”ćç§°
            treeShowName: 'title', //ä»„æ ćœąćŒæŸç€șçć­æź”
            height: 'full-140',
            isFilter: false,
            iconOpen: false, //æŻćŠæŸç€șćŸæ ăé»èź€æŸç€șă
            isOpenDefault: false, //èçčé»èź€æŻć±ćŒèżæŻæć ăé»èź€ć±ćŒă
            onDblClickRow: false, //ć»é€ćć»äșä»¶

            // @todo äžçŽæ„äœżçšyznTable.render(); èżèĄèĄšæ Œćć§ć, éèŠäœżçš yznTable.formatCols(); æčæłæ ŒćŒć`cols`ćæ°æź
            cols: yznTable.formatCols([
                [
                    { field: 'listorder', width: 60, title: 'æćș', edit: 'text' },
                    { field: 'id', width: 60, title: 'ID' },
                    { field: 'title', align: 'left', title: 'èććç§°', },
                    { width: 80, title: 'ćŸæ ', align: 'center', templet: "<div><i class='iconfont {{d.icon}}'></i></div>" },
                    { width: 200, title: 'æšĄć/æ§ć¶ćš/æčæł', templet: "<div>{{d.app}}/{{d.controller}}/{{d.action}}</div>" },
                    { field: 'status', align: 'center', width: 120, title: 'ç¶æ', templet: '#switchTpl', unresize: true },
                    { fixed: 'right', align: 'center', width: 200, title: 'æäœ', toolbar: '#barTool' }
                ]
            ], init),
        });
    }
    renderTable();

    $('#openAll').click(function(e) {
        var treedata = treeGrid.getDataTreeList(tableId);
        treeGrid.treeOpenAll(tableId, !treedata[0][treeGrid.config.cols.isOpen]);
    })

    $('body').on('click', '[data-treetable-refresh]', function() {
        renderTable();
    });

     //çćŹććæ ŒçŒèŸ
     treeGrid.on('edit(currentTable)', function(obj) {
         var value = obj.value,
             data = obj.data;
         $.post('<?php echo url("multi"); ?>', {'id': data.id,'value': value,'param':'listorder'}, function(data) {
             if (data.code == 1) {
                 layer.msg(data.msg);
             } else {
                 layer.msg(data.msg);
             }

         })
     });
});
</script>

</body>

</html>