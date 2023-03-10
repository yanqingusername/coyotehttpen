<?php /*a:2:{s:76:"/Applications/phpstudy/coyotehttpen/application/admin/view/config/index.html";i:1677057907;s:76:"/Applications/phpstudy/coyotehttpen/application/admin/view/index_layout.html";i:1677057907;}*/ ?>
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
    <div class="layui-card-body">
        <div class="layui-tab layui-tab-card">
            <ul class="layui-tab-title">
                <?php if(is_array($groupArray) || $groupArray instanceof \think\Collection || $groupArray instanceof \think\Paginator): $i = 0; $__LIST__ = $groupArray;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li class="<?php if($key==$group): ?>layui-this<?php endif; ?>"><a href="<?php echo url('index',['group'=>$key]); ?>"><?php echo htmlentities($vo); ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <div class="layui-tab-content">
                <table class="layui-hide" id="currentTable" lay-filter="currentTable"></table>
            </div>
        </div>
    </div>
</div>
<script type="text/html" id="barTool">
    {{# if(d.type=='radio' || d.type=='select'){ }}
    <a href='javascript:;' class="layui-btn layui-btn-xs copy" data-clipboard-text="éźïŒ{:config('{{d.name}}')} ćŒïŒ{:config('{{d.name}}_text')}">ä»Łç è°çš</a>
    {{# } else if(d.type=='checkbox' || d.type=='array' || d.type=='images' || d.type=='files'){ }}
    <a href='javascript:;' class="layui-btn layui-btn-xs copy" data-clipboard-text="{volist name=&quot;:config('{{d.name}}')&quot; id='vo'}  éźïŒ{$key}  ćŒïŒ{$vo} <br> {/volist}">ä»Łç è°çš</a>
    {{# } else { }}
    <a href='javascript:;' class="layui-btn layui-btn-xs copy" data-clipboard-text="{:config('{{d.name}}')}">ä»Łç è°çš</a>
    {{# } }}
    <a data-open='<?php echo url("edit"); ?>?id={{ d.id }}' data-title="çŒèŸ" class="layui-btn layui-btn-xs">çŒèŸ</a>
    <a href='<?php echo url("del"); ?>?ids={{ d.id }}' class="layui-btn layui-btn-danger layui-btn-xs layui-tr-del">ć é€</a>
</script>
<script type="text/html" id="switchTpl">
    <input type="checkbox" name="status" data-href="<?php echo url('multi'); ?>?id={{d.id}}&param=status" value="{{d.id}}" lay-skin="switch" lay-text="ćŒćŻ|ćłé­" lay-filter="switchStatus" {{ d.status==1 ? 'checked' : '' }}>
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
layui.use(['yznTable','clipboard'], function() {
    var table = layui.yznTable,
        $ = layui.$,
        form = layui.form,
        clipboard =  layui.clipboard;

    var init = {
        table_elem: '#currentTable',
        add_url: "<?php echo url('add'); ?>",
        modify_url:'<?php echo url("multi"); ?>',
    };

    table.render({
        init: init,
        id:'currentTable',
        elem: '#currentTable',
        toolbar: ['refresh','add'],
        url: '<?php echo url("index",["group"=>$group]); ?>',
        search:false,
        cols: [
            [
                { field: 'listorder', width: 70, title: 'æćș', edit: 'text' },
                { field: 'name', title: 'ćç§°' },
                { field: 'title', title: 'æ éą' },
                { field: 'ftitle', width: 150, title: 'ç±»ć' },
                { field: 'update_time', width: 200, title: 'æŽæ°æ¶éŽ'},
                { field: 'status', title: 'ç¶æ', width: 100, templet: '#switchTpl', unresize: true },
                { fixed: 'right', width: 200, title: 'æäœ', toolbar: '#barTool' }
            ]
        ],
    });

    var clipboard = new clipboard('.copy');
    clipboard.on('success', function(e) {
        layer.msg("ć€ć¶æć");
    });
    clipboard.on('error', function(e) {
        layer.msg("ć€ć¶ć€±èŽ„ïŒèŻ·æćšè°çš");
    });
});
</script>

</body>

</html>