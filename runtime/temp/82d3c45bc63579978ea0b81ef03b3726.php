<?php /*a:2:{s:75:"/Applications/phpstudy/coyotehttpen/application/cms/view/setting/index.html";i:1677057907;s:76:"/Applications/phpstudy/coyotehttpen/application/admin/view/index_layout.html";i:1677057907;}*/ ?>
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
    <div class="layui-card-header">CMSéçœź</div>
    <div class="layui-card-body">
        <form class="layui-form" method="post">
            <div class="layui-tab">
                <ul class="layui-tab-title">
                    <li class="layui-this">ćșæŹéçœź</li>
                    <li>ć¶ä»</li>
                </ul>
                <div class="layui-tab-content">
                    <div class="layui-tab-item layui-show">
                        <div class="layui-form-item">
                            <label class="">ç«çčćŒćł</label>
                            <div class="layui-form-field-label">
                                <input type="checkbox" name="setting[web_site_status]" lay-skin="switch" lay-text="ON|OFF" value="1" <?php if(1==$setting['web_site_status']): ?>checked='' <?php endif; ?>> </div> <div class="layui-form-mid layui-word-aux">ç«çčćłé­ććć°ć°äžèœèźżéź</div>
                        </div>
                        <div class="layui-form-item">
                            <label class="">ç«çčćç§°</label>
                            <div class="layui-form-field-label">
                                <input type="text" name="setting[site_name]" placeholder="èŻ·èŸć„ç«çčæ éą" class="layui-input" value="<?php echo htmlentities($setting['site_name']); ?>">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="">ç«çčæ éą</label>
                            <div class="layui-form-field-label">
                                <input type="text" name="setting[site_title]" placeholder="èŻ·èŸć„ç«çčæ éą" class="layui-input" value="<?php echo htmlentities($setting['site_title']); ?>">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="">ç«çčćłéźèŻ</label>
                            <div class="layui-form-field-label">
                                <input type="text" name="setting[site_keyword]" placeholder="èŻ·èŸć„ç«çčćłéźèŻ" class="layui-input" value="<?php echo htmlentities($setting['site_keyword']); ?>">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="">ç«çčæèż°</label>
                            <div class="layui-form-field-label">
                                <textarea name="setting[site_description]" placeholder="èŻ·èŸć„ç«çčæèż°" class="layui-textarea"><?php echo htmlentities($setting['site_description']); ?></textarea>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="">çŒć­æ¶éŽ</label>
                            <div class="layui-form-field-label">
                                <input type="text" name="setting[site_cache_time]" placeholder="èŻ·èŸć„çŒć­æ¶éŽ" class="layui-input" value="<?php echo htmlentities($setting['site_cache_time']); ?>">
                            </div>
                            <div class="layui-form-mid layui-word-aux">ćéĄ”ćèŻŠæéĄ”ææ</div>
                        </div>
                    </div>
                    <div class="layui-tab-item">
                        <div class="layui-form-item">
                            <label class="">ćæ¶ç«</label>
                            <div class="layui-form-field-label">
                                <input type="checkbox" name="setting[web_site_recycle]" lay-skin="switch" lay-text="ON|OFF" value="1" <?php if(1==$setting['web_site_recycle']): ?>checked='' <?php endif; ?>> </div> <div class="layui-form-mid layui-word-aux">ćŒćŻćïŒèŻŻć çæç« ćŻä»„æąć€,ćäčäžćŻèżć</div>
                        </div>
                        <div class="layui-form-item">
                            <label class="">çŸćșŠçæć·+çŸćșŠç«éżæšé</label>
                            <div class="layui-form-field-label">
                                <input type="checkbox" name="setting[web_site_baidupush]" lay-skin="switch" lay-text="ON|OFF" value="1" <?php if(1==$setting['web_site_baidupush']): ?>checked='' <?php endif; ?>> </div> <div class="layui-form-mid layui-word-aux">ćŠæćŒćŻçŸćșŠçæ+çŸćșŠç«éżæšéïŒć°ćšæç« ććžæ¶èȘćšèżèĄæšé(éèŠćźèŁæšéæä»¶)</div>
                        </div>
                        <div class="layui-form-item">
                            <label class="">ćłéźć­éŸæ„</label>
                            <div class="layui-form-field-label">
                                <textarea name="setting[autolinks]" placeholder="èŻ·èŸć„ćłéźć­éŸæ„" class="layui-textarea" style="width: 300px;"><?php echo htmlentities($setting['autolinks']); ?></textarea>
                            </div>
                            <div class="layui-form-mid layui-word-aux">æŻèĄ1ç»ä»„"ćłéźèŻ<strong style="color:red;">|</strong>(ćè§ç«çșż)éŸæ„"ćœąćŒćĄ«ć, ćŻçšçŹŹ2äžȘç«çșżèżœć ćæ°:<strong style="color:red;">n</strong>ä»ŁèĄšnofollowæ èź°, <strong style="color:red;">e</strong>ä»ŁèĄšexternal nofollowæ èź°, <strong style="color:red;">b</strong>ä»ŁèĄšæŹçȘćŁæćŒ.</br> äŸ: google<strong>|</strong>http://www.google.com<strong>|</strong>n ćłæ­€éŸæ„ćžŠnofollow(é»èź€æ°çȘćŁæćŒ)</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layui-form-item">
                <button class="layui-btn" lay-submit="" data-refresh="false" lay-filter="formSubmit">ç«ćłæäș€</button>
                <button type="reset" class="layui-btn layui-btn-primary">éçœź</button>
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