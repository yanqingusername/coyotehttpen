<?php /*a:2:{s:72:"/Applications/phpstudy/coyotehttpen/application/cms/view/models/add.html";i:1677057907;s:76:"/Applications/phpstudy/coyotehttpen/application/admin/view/index_layout.html";i:1677057907;}*/ ?>
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
    <div class="layui-card-header">æ·»ć æšĄć</div>
    <div class="layui-card-body">
        <form class="layui-form" method="post">
            <div class="layui-form-item">
                <label class="layui-form-label">æšĄććç§°</label>
                <div class="layui-input-inline">
                    <input type="text" name="name" lay-verify="required" autocomplete="off" placeholder="æšĄććç§°" class="layui-input">
                </div>
                <div class="layui-form-mid layui-word-aux">æšĄćäž­æćç§°ïŒçšäșæ·»ć æ çźæ¶éæ©äœżçšă</div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">æšĄćèĄšéźć</label>
                <div class="layui-input-inline">
                    <input type="text" name="tablename" lay-verify="required" autocomplete="off" placeholder="æšĄćèĄšéźć" class="layui-input">
                </div>
                <div class="layui-form-mid layui-word-aux">ç±ć°ćć­æŻç»æ</div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">æšĄćç±»ć</label>
                <div class="layui-input-inline">
                    <input type="radio" name="type" value="1" title="çŹç«èĄš" checked>
                    <input type="radio" name="type" value="2" title="äž»éèĄš">
                </div>
                <div class="layui-form-mid layui-word-aux">äž»éèĄšéèżćèĄšæé«æ°æźćșæäœæç</div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">æèż°</label>
                <div class="layui-input-inline w300">
                    <textarea name="description" placeholder="æšĄćççžćłæèż°" class="layui-textarea"></textarea>
                </div>
            </div>
            <div class="layui-form-item web_list">
                <label class="layui-form-label">æ çźæšĄæż</label>
                <div class="layui-input-inline w300">
                    <select name="setting[category_template]">
                        <option value="category.html" selected>é»èź€æ çźéŠéĄ”:category.html</option>
                        <?php if(is_array($tp_category) || $tp_category instanceof \think\Collection || $tp_category instanceof \think\Paginator): $i = 0; $__LIST__ = $tp_category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo htmlentities($vo); ?>"><?php echo htmlentities($vo); ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
                <div class="layui-form-mid layui-word-aux">æ°ćąæšĄæżä»„category_xx.htmlćœąćŒ</div>
            </div>
            <div class="layui-form-item web_list">
                <label class="layui-form-label">ćèĄšæšĄæż</label>
                <div class="layui-input-inline w300">
                    <select name="setting[list_template]">
                        <option value="list.html" selected>é»èź€æ çźćèĄšéĄ”:list.html</option>
                        <?php if(is_array($tp_list) || $tp_list instanceof \think\Collection || $tp_list instanceof \think\Paginator): $i = 0; $__LIST__ = $tp_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo htmlentities($vo); ?>"><?php echo htmlentities($vo); ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
                <div class="layui-form-mid layui-word-aux">æ°ćąæšĄæżä»„list_xx.htmlćœąćŒ</div>
            </div>
            <div class="layui-form-item web_list">
                <label class="layui-form-label">ććźčæšĄæż</label>
                <div class="layui-input-inline w300">
                    <select name="setting[show_template]">
                        <option value="show.html" selected>é»èź€ććźčéĄ”:show.html</option>
                        <?php if(is_array($tp_show) || $tp_show instanceof \think\Collection || $tp_show instanceof \think\Paginator): $i = 0; $__LIST__ = $tp_show;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo htmlentities($vo); ?>"><?php echo htmlentities($vo); ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
                <div class="layui-form-mid layui-word-aux">æ°ćąæšĄæżä»„show_xx.htmlćœąćŒ</div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">ç¶æ</label>
                <div class="layui-input-inline">
                    <input type="radio" name="status" value="1" title="æ­Łćžž" checked>
                    <input type="radio" name="status" value="0" title="çŠæ­ą">
                </div>
            </div>
            <?php if(app('config')->get('app_debug')): ?>
            <div class="layui-form-item">
                <label class="layui-form-label">æŻćŠćžžçš</label>
                <div class="layui-input-inline">
                    <input type="radio" name="is_const" value="0" title="éćžž" checked>
                    <input type="radio" name="is_const" value="1" title="ćžžçš" >
                </div>
            </div>
            <?php endif; ?>

            <div class="layui-form-item">
                <div class="layui-input-block">
                    <button class="layui-btn" lay-submit="" lay-filter="formSubmit">ç«ćłæäș€</button>
                    <button type="reset" class="layui-btn layui-btn-primary">éçœź</button>
                </div>
            </div>
        </form>
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
    
    
</body>

</html>