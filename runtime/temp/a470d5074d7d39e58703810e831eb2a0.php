<?php /*a:2:{s:73:"/Applications/phpstudy/coyotehttpen/application/admin/view/menu/edit.html";i:1677057907;s:76:"/Applications/phpstudy/coyotehttpen/application/admin/view/index_layout.html";i:1677057907;}*/ ?>
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
    <div class="layui-card-header">çŒèŸćć°èć</div>
    <div class="layui-card-body">
        <form class="layui-form" method="post">
            <div class="layui-form-item">
                <label class="layui-form-label">äžçș§èć</label>
                <div class="layui-input-inline w300">
                    <select name="parentid" lay-verify="required">
                        <option value="0">äœäžșäžçș§èć</option>
                        <?php echo $select_categorys; ?>
                    </select>
                </div>
                <div class="layui-form-mid layui-word-aux">ćŠæéæ©äžçș§ćç±»ïŒéŁäčæ°ćąçćç±»ćäžșèą«éæ©äžçș§ćç±»çć­ćç±»</div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">ćç§° </label>
                <div class="layui-input-inline w300">
                    <input type="text" name="title" lay-verify="required" autocomplete="off" placeholder="ćç§°" class="layui-input" value="<?php echo htmlentities($data['title']); ?>">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">ćŸæ </label>
                <div class="layui-input-block">
                    <input type="text" id="iconPicker" lay-filter="iconPicker" class="hide" value="<?php echo htmlentities($data['icon']); ?>" name="icon">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">æšĄć</label>
                <div class="layui-input-inline w300">
                    <input type="text" name="app" lay-verify="required" autocomplete="off" placeholder="æšĄć" class="layui-input" value="<?php echo htmlentities($data['app']); ?>">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">æ§ć¶ćš</label>
                <div class="layui-input-inline w300">
                    <input type="text" name="controller" lay-verify="required" autocomplete="off" placeholder="æ§ć¶ćš" class="layui-input" value="<?php echo htmlentities($data['controller']); ?>">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">æčæł</label>
                <div class="layui-input-inline w300">
                    <input type="text" name="action" lay-verify="required" autocomplete="off" placeholder="æčæł" class="layui-input" value="<?php echo htmlentities($data['action']); ?>">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">éć ćæ°</label>
                <div class="layui-input-inline w300">
                    <input type="text" name="parameter" autocomplete="off" placeholder="éć ćæ°" class="layui-input" value="<?php echo htmlentities($data['parameter']); ?>">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">æŻćŠæŸç€ș</label>
                <div class="layui-input-inline w300">
                    <input type="checkbox" name="status" lay-skin="switch" lay-text="æŻ|ćŠ" value="<?php echo htmlentities($data['status']); ?>" <?php if($data['status'] == '1'): ?>checked<?php endif; ?>>
                </div>
            </div>
            <input type="hidden" name="id" value="<?php echo htmlentities($data['id']); ?>" />
            <div class="layui-form-item">
                <div class="layui-input-block">
                    <button class="layui-btn" lay-submit="" lay-filter="formSubmit">ç«ćłæäș€</button>
                    <button class="layui-btn layui-btn-normal" type="button" onclick="javascript:history.back(-1);">èżć</button>
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
    
    
<script type="text/javascript">
layui.use(['iconPicker', 'form', 'layer'], function() {
    var iconPicker = layui.iconPicker,
        form = layui.form,
        layer = layui.layer,
        $ = layui.$;
        iconPicker.render({
            elem: '#iconPicker4',
            type: 'fontClass'
        });

            iconPicker.render({
                // éæ©ćšïŒæšèäœżçšinput
                elem: '#iconPicker',
                // æ°æźç±»ćïŒfontClass/unicodeïŒæšèäœżçšfontClass
                type: 'fontClass',
                // æŻćŠćŒćŻæçŽąïŒtrue/falseïŒé»èź€true
                search: true,
                // æŻćŠćŒćŻćéĄ”ïŒtrue/falseïŒé»èź€true
                page: true,
                // æŻéĄ”æŸç€șæ°éïŒé»èź€12
                limit: 12,
                // çčć»ćè°
                click: function (data) {
                    console.log(data);
                },
                // æžČææććçćè°
                success: function(d) {
                    console.log(d);
                }
            });
});
</script>

</body>

</html>