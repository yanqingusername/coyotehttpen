<?php /*a:2:{s:84:"/www/wwwroot/kyden.web.zhongwangyingtong.com/application/cms/view/cms/classlist.html";i:1665308816;s:85:"/www/wwwroot/kyden.web.zhongwangyingtong.com/application/admin/view/index_layout.html";i:1596779062;}*/ ?>
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
    
<style type="text/css">
.childrenBody {
    background: #fff;
}
</style>
<table class="layui-hide" id="currentTable" lay-filter="currentTable"></table>
<script type="text/html" id="barTool">
    <a class="layui-btn layui-btn-xs" data-open='<?php echo url("edit",["catid"=>$catid]); ?>?id={{ d.id }}' data-title="çŒèŸććźč" data-full="true">çŒèŸ</a>
    <a href='<?php echo url("del",["catid"=>$catid]); ?>?ids={{ d.id }}' class="layui-btn layui-btn-danger layui-btn-xs layui-tr-del">ć é€</a>
</script>
<script type="text/html" id="title">
    {{# if(d.flag && d.flag.indexOf("1")!==-1){ }}
  <span class="text-danger">[çœźéĄ¶]</span>
  {{#  } }}
  {{# if(d.flag && d.flag.indexOf("2")!==-1){ }}
  <span class="text-danger">[ć€ŽæĄ]</span>
  {{#  } }}
  {{# if(d.flag && d.flag.indexOf("3")!==-1){ }}
  <span class="text-danger">[çčè]</span>
  {{#  } }}
  {{# if(d.flag && d.flag.indexOf("4")!==-1){ }}
  <span class="text-danger">[æšè]</span>
  {{#  } }}
  {{# if(d.flag && d.flag.indexOf("5")!==-1){ }}
  <span class="text-danger">[ç­çč]</span>
  {{#  } }}
  {{# if(d.flag && d.flag.indexOf("6")!==-1){ }}
  <span class="text-danger">[ćč»çŻ]</span>
  {{#  } }}
  {{# if(d.thumb && d.thumb!==''){ }}
  <span class="text-success">[æćŸ]</span>
  {{#  } }}
  {{ d.title }}
</script>
<script type="text/html" id="username">
  {{# if(d.sysadd==1){ }}
    {{ d.username }}
  {{#  } else { }}
    <span class="text-danger">{{ d.username }}</span>
  {{#  } }}
</script>
<script type="text/html" id="statusTpl">
    <input type="checkbox" name="status" data-href='<?php echo url("setstate",["catid"=>$catid]); ?>?id={{d.id}}' value="{{d.id}}" lay-skin="switch" lay-text="éèż|ćŸćźĄæ ž" lay-filter="switchStatus" {{ d.status==1 ? 'checked' : '' }}>
</script>
<div id="remove" style="display: none;">
    <div class="box-body" style="padding: 20px;">
        <blockquote class="layui-elem-quote">ćȘèœć°æ°æźç§»ćšć°çžćæšĄćçæ çźäžïŒäžćæšĄćçæ°æźç§»ćšć°èą«ćżœç„</blockquote>
        <div class="layui-form">
            <div class="layui-form-item">
                <select name="remove" lay-verify="required">
                    <option></option>
                    <?php echo $string; ?>
                </select>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
.layui-layer-page .layui-layer-content {
    overflow: inherit;
}
</style>

    
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
layui.use(['table', 'yznTable'], function() {
    var table = layui.table,
        $ = layui.$,
        form = layui.form,
        table = layui.table,
        yznTable = layui.yznTable;

    var init = {
        table_elem: '#currentTable',
        add_url: "<?php echo url('add',['catid'=>$catid]); ?>",
        delete_url: "<?php echo url('del',['catid'=>$catid]); ?>",
        modify_url: '<?php echo url("listorder",["catid"=>$catid]); ?>',
    };

    yznTable.render({
        init: init,
        id: 'currentTable',
        elem: '#currentTable',
        toolbar: ['refresh',
            [{
                text: 'æ·»ć ',
                url: init.add_url,
                method: 'open',
                icon: 'iconfont icon-add',
                class: 'layui-btn layui-btn-normal layui-btn-sm',
                extend: 'data-full="true"',
            }], 'delete',
            [{
                html: '<a class="layui-btn layui-btn-sm layui-btn-normal move">æčéç§»ćš</a> '
            }],
            [{
                html: '<a class="layui-btn layui-btn-sm layui-btn-danger" href="<?php echo url("recycle",["catid"=>$catid]); ?>">ćæ¶ç«</a>'
            }],
        ],
        url: '<?php echo url("classlist",["catid"=>$catid]); ?>',
        cols: [
            [
                { type: 'checkbox', fixed: 'left' },
                { field: 'listorder', width: 70, title: 'æćș', edit: 'text' },
                { field: 'id', width: 60, title: 'ID' },
                { field: 'title', align: "left", title: 'æ éą', templet: '#title' },
                <?php if(is_array($fielddata) || $fielddata instanceof \think\Collection || $fielddata instanceof \think\Paginator): $i = 0; $__LIST__ = $fielddata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                    { field: '<?php echo htmlentities($v['name']); ?>', width: 150, title: '<?php echo htmlentities($v['title']); ?>' },
                <?php endforeach; endif; else: echo "" ;endif; if($has_thumb): ?>
                { field: 'thumb', width: 100, title: 'ćŸç', search: false, templet: yznTable.image },
                <?php endif; ?>
                { field: 'inputtime', width: 160, title: 'çèšæ¶éŽ', search: 'range' },
                // { field: 'hits', width: 80, title: 'çčć»é' },
                // { field: 'updatetime', width: 160, title: 'æŽæ°æ¶éŽ', search: 'range' },
                // { field: 'username', width: 80, title: 'ććžäșș', templet: '#username' },
                // { field: 'url', width: 60, align: "center", title: 'URL', templet: yznTable.url, search: false },
                { field: 'status', width: 100, align: "center", title: 'ç¶æ', templet: '#statusTpl', unresize: true, selectList: { 0: 'ćŸćźĄæ ž', 1: 'éèż' } },
                { fixed: 'right', width: 120, title: 'æäœ', toolbar: '#barTool' }
            ]
        ],
        page: {}
    });


    $('body').on('click', '.move', function() {
        var checkStatus = table.checkStatus('currentTable'),

            ids = [],
            id = tag = '';
        var data = checkStatus.data;
        if (data.length > 0) {
            for (let i in data) {
                id += tag + data[i].id;
                tag = '|';
                //ids.push(data[i].id);
            }
            layer.open({
                title: 'æčéç§»ćš',
                type: 1,
                content: $('#remove'),
                area: ['300px', '250px'],
                btn: ['ç§»ćš'],
                yes: function(index, layero) {
                    var tocatid = $("select[name='remove']").val();
                    if (tocatid == 0) {
                        layer.msg("èŻ·éæ©ç§»ćšçæ çź",{icon: 2});
                        return;
                    }
                    $.post('<?php echo url("cms/cms/remove",["catid"=>$catid]); ?>', { 'ids': id, 'tocatid': tocatid }, function(data) {
                        if (data.code == 1) {
                            layer.msg(data.msg,{icon: 1});
                            layer.close(index);
                        } else {
                            layer.msg(data.msg,{icon: 2});
                        }
                    })
                }

            });
        } else {
            layer.msg("èŻ·éæ©éèŠç§»ćšçæ°æź",{icon: 2});
        }
    });

});
</script>

</body>

</html>