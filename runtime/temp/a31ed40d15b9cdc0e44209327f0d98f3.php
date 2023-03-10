<?php /*a:2:{s:81:"/www/wwwroot/kyden.web.zhongwangyingtong.com/application/cms/view/field/edit.html";i:1633660114;s:85:"/www/wwwroot/kyden.web.zhongwangyingtong.com/application/admin/view/index_layout.html";i:1596779062;}*/ ?>
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
    <div class="layui-card-header">çŒèŸć­æź”</div>
    <div class="layui-card-body">
        <blockquote class="layui-elem-quote"><p>é»èź€ä»„äžć­æź”ćç§°ć·Čć­ćšïŒèŻ·äžèŠć»șç«ććçć­æź”ïŒ<br>idăcatidătitleăkeywordsădescriptionăflagălistsorderăuidăhitsăinputtimeăupdatetimeăstatusădidăcontent</p></blockquote>
        <form class="layui-form" method="post">
            <div class="layui-form-item">
                <label class="layui-form-label">ć­æź”ćç§°</label>
                <div class="layui-input-inline">
                    <input type="text" name="name" lay-verify="required" placeholder="ć­æź”ćç§°" class="layui-input" value="<?php echo htmlentities($data['name']); ?>">
                </div>
                <div class="layui-form-mid layui-word-aux">ć­æŻăæ°ć­ç»æïŒćč¶äžä»èœć­æŻćŒć€Ž</div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">ć­æź”æ éą</label>
                <div class="layui-input-inline">
                    <input type="text" name="title" lay-verify="required" placeholder="ć­æź”æ éą" class="layui-input" value="<?php echo htmlentities($data['title']); ?>">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">ć­æź”æèż°</label>
                <div class="layui-input-inline w300">
                    <textarea name="remark" placeholder="ć­æź”ççžćłæèż°" class="layui-textarea"><?php echo htmlentities($data['remark']); ?></textarea>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">ć­æź”ç±»ć</label>
                <div class="layui-input-inline">
                    <select name="type" lay-filter="fieldtype" lay-verify="required">
                        <option></option>
                        <?php if(is_array($fieldType) || $fieldType instanceof \think\Collection || $fieldType instanceof \think\Paginator): $i = 0; $__LIST__ = $fieldType;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo htmlentities($vo['name']); ?>" <?php if($data['type']==$vo['name']): ?>selected<?php endif; ?> data-define="<?php echo htmlentities($vo['default_define']); ?>" data-ifoption="<?php echo htmlentities($vo['ifoption']); ?>" data-ifstring="<?php echo htmlentities($vo['ifstring']); ?>"><?php echo htmlentities($vo['title']); ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">ć­æź”ćźäč</label>
                <div class="layui-input-inline w300">
                    <input type="text" name="setting[define]" lay-verify="required" autocomplete="off" placeholder="ć­æź”ćźäč" class="layui-input" id="define" value="<?php echo htmlentities($data['setting']['define']); ?>">
                </div>
                <div class="layui-input-inline">
                    <select lay-filter="fasttype">
                        <option data-define="">ćż«ééæ©</option>
                        <option data-define="varchar(255) NOT NULL DEFAULT ''">255äžȘć­çŹŠäžČä»„ć</option>
                        <option data-define="int(7) NOT NULL DEFAULT '0'">10äœä»„ćçșŻæ°ć­</option>
                        <option data-define="tinyint(2) NOT NULL DEFAULT '0'">2äœä»„ćçșŻæ°ć­</option>
                        <option data-define="text NOT NULL">ćžžçšææŹææĄŁ</option>
                        <option data-define="decimal(10,2) unsigned NOT NULL">ä»·æ Œ</option>
                        <option data-define="mediumtext NOT NULL">ć·šćææŹææĄŁ</option>
                    </select>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">æ°æźæ ĄéȘ</label>
                <div class="layui-input-inline w300">
                    <input type="text" name="pattern" autocomplete="off" placeholder="æ­Łćæ ĄéȘæ°æźćæłæ§ïŒçç©șäžæ ĄéȘ" class="layui-input" value="<?php echo htmlentities($data['pattern']); ?>" id="pattern">
                </div>
                <div class="layui-input-inline">
                    <select lay-filter="pattern">
                        <option data-define="">ćžžçšæ­Łć</option>
                        <option data-define="/^[0-9.-]+$/">æ°ć­</option>
                        <option data-define="/^[0-9-]+$/">æŽæ°</option>
                        <option data-define="/^[a-z]+$/i">ć­æŻ</option>
                        <option data-define="/^[0-9a-z]+$/i">æ°ć­+ć­æŻ</option>
                        <option data-define="/^[\x{4e00}-\x{9fa5}]+$/u">äž­æ</option>
                        <option data-define="/^[\w\-\.]+@[\w\-\.]+(\.\w+)+$/">E-mail</option>
                        <option data-define="/^[0-9]{5,20}$/">QQ</option>
                        <option data-define="/^http(s)?:\/\//">è¶çș§éŸæ„</option>
                        <option data-define="/^(1)[0-9]{10}$/">ææșć·ç </option>
                        <option data-define="/^[0-9-]{6,13}$/">ç”èŻć·ç </option>
                    </select>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">æç€șäżĄæŻ</label>
                <div class="layui-input-inline">
                    <input type="text" name="errortips" placeholder="æ°æźæ ĄéȘæȘéèżçæç€șäżĄæŻ" class="layui-input" value="<?php echo htmlentities($data['errortips']); ?>">
                </div>
            </div>
            <div id="options" <?php if(!$fieldType[$data['type']]['ifoption']): ?>style="display:none"<?php endif; ?>>
                <!--<div class="layui-form-item">
                    <label class="layui-form-label">ééĄč</label>
                    <div class="layui-input-inline w300">
                        <textarea name="setting[options]" placeholder="ćŒ:æèż°
ćŒ:æèż°
ćŒ:æèż°
....." class="layui-textarea"><?php echo htmlentities($data['setting']['options']); ?></textarea>
                    </div>
                </div>-->
            <div class="layui-form-item">
                <label class="layui-form-label">ééĄčæ°æź</label>
                <div class="layui-input-inline">
                    <input type="radio" lay-filter="datasource" name="setting[datastate]" value="0" title="èȘćźäč" <?php echo $data['setting']['datastate']=="0" ? 'checked' : ''; ?>>
                    <input type="radio" lay-filter="datasource" name="setting[datastate]" value="1" title="ćłèæ°æźćș" <?php echo $data['setting']['datastate']=="1" ? 'checked' : ''; ?>>
                    <input type="radio" lay-filter="datasource" name="setting[datastate]" value="2" title="èćšèć" <?php echo $data['setting']['datastate']=="2" ? 'checked' : ''; ?>>
                    <input type="radio" lay-filter="datasource" name="setting[datastate]" value="3" title="æ çź" <?php echo $data['setting']['datastate']=="3" ? 'checked' : ''; ?>>
                </div>
            </div>
            <div class="layui-form-item datasource" <?php echo $data['setting']['datastate']=="1" ? '' : 'style="display:none"'; ?> >
                <label class="layui-form-label">æ°æźćș</label>
                <div class="layui-input-inline w190">
                    <select lay-filter="datatable" name="setting[datasource][datatable]">
                        <option data-define="">éæ©æ°æźćș</option>
                        <?php if(is_array($TABLElist) || $TABLElist instanceof \think\Collection || $TABLElist instanceof \think\Paginator): $i = 0; $__LIST__ = $TABLElist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo htmlentities($vo['name']); ?>" <?php echo $data['setting']['datasource']['datatable']==$vo['name'] ? 'selected="selected"' : ''; ?>><?php echo htmlentities($vo['comment']); ?> [<?php echo htmlentities($vo['name']); ?>]</option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
                <div class="layui-input-inline w150">
                    <select id="datavalue" name="setting[datasource][datavalue]">
                        <?php if($FieldInfo != null): if(is_array($FieldInfo) || $FieldInfo instanceof \think\Collection || $FieldInfo instanceof \think\Paginator): $i = 0; $__LIST__ = $FieldInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo htmlentities($vo['Field']); ?>">[<?php echo htmlentities($vo['Field']); ?>] <?php echo htmlentities($vo['Comment']); ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; else: ?>
                        <option data-define="" value="<?php echo htmlentities($data['setting']['datasource']['datavalue']); ?>">IDć­æź”ă<?php echo htmlentities($data['setting']['datasource']['datavalue']); ?>ă</option>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="layui-input-inline w150">
                    <select id="datadesc" name="setting[datasource][datadesc]">
                        <?php if($FieldInfo != null): if(is_array($FieldInfo) || $FieldInfo instanceof \think\Collection || $FieldInfo instanceof \think\Paginator): $i = 0; $__LIST__ = $FieldInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo htmlentities($vo['Field']); ?>">[<?php echo htmlentities($vo['Field']); ?>] <?php echo htmlentities($vo['Comment']); ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; else: ?>
                        <option data-define="" value="<?php echo htmlentities($data['setting']['datasource']['datadesc']); ?>">æèż°ć­æź”ă<?php echo htmlentities($data['setting']['datasource']['datadesc']); ?>ă</option>
                        <?php endif; ?>
                    </select>
                </div>
            </div>
            <div class="layui-form-item linksource" <?php echo $data['setting']['datastate']=="2" ? '' : 'style="display:none"'; ?>>
                <label class="layui-form-label">èćšèć</label>
                <div class="layui-input-inline w190">
                    <select lay-filter="datalink" name="setting[linksource][dataid]">
                        <option data-define="">éæ©èć</option>
                        <?php if(is_array($LINKlist) || $LINKlist instanceof \think\Collection || $LINKlist instanceof \think\Paginator): $i = 0; $__LIST__ = $LINKlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo htmlentities($vo['id']); ?>" <?php echo $data['setting']['linksource']['dataid']==$vo['id'] ? 'selected="selected"' : ''; ?>><?php echo htmlentities($vo['catname']); ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
                <div class="layui-input-inline w150">
                    <select id="linkvalue" name="setting[linksource][datavalue]">
                        <option data-define="" value="1" <?php echo $data['setting']['linksource']['datavalue']==1 ? 'selected="selected"' : ''; ?>>ć±çș§ă1çș§ă</option>
                        <option value="2" <?php echo $data['setting']['linksource']['datavalue']==2 ? 'selected="selected"' : ''; ?>>ć±çș§ă2çș§ă</option>
                        <option value="3" <?php echo $data['setting']['linksource']['datavalue']==3 ? 'selected="selected"' : ''; ?>>ć±çș§ă3çș§ă</option>
                    </select>
                </div>
            </div>
            <div class="layui-form-item menusource" <?php echo $data['setting']['datastate']=="3" ? '' : 'style="display:none"'; ?>>
                <label class="layui-form-label">æ çź</label>
                <div class="layui-input-inline w190">
                    <select lay-filter="datalink" name="setting[menusource][menuid]">
                        <option value="0" data-define="">éæ©æ çź</option>
                        <?php if(is_array($MENUlist) || $MENUlist instanceof \think\Collection || $MENUlist instanceof \think\Paginator): $i = 0; $__LIST__ = $MENUlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo htmlentities($vo['id']); ?>" <?php echo $data['setting']['menusource']['menuid']==$vo['id'] ? 'selected="selected"' : ''; ?>><?php echo htmlentities($vo['catname']); ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>
            <div class="layui-form-item defaultsource" <?php echo $data['setting']['datastate']=="0" ? '' : 'style="display:none"'; ?>>
                <label class="layui-form-label">ééĄč</label>
                <div class="layui-input-inline w300">
                    <textarea name="setting[options]" placeholder="ćŒ:æèż°
ćŒ:æèż°
ćŒ:æèż°
....." class="layui-textarea"><?php echo htmlentities($data['setting']['options']); ?></textarea>
                </div>
            </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">ç­éć­æź”</label>
                    <div class="layui-input-inline">
                        <input type="radio" name="setting[filtertype]" value="1" title="æŻ" <?php if($data['setting']['filtertype']==1): ?>checked<?php endif; ?>>
                        <input type="radio" name="setting[filtertype]" value="0" title="ćŠ" <?php if($data['setting']['filtertype']==0): ?>checked<?php endif; ?>>
                    </div>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">ć­æź”é»èź€ćŒ</label>
                <div class="layui-input-inline">
                    <input type="text" name="setting[value]" lay-verify="value" autocomplete="off" placeholder="é»èź€æć„ć­æź”çćŒ" class="layui-input" value="<?php echo htmlentities($data['setting']['value']); ?>">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">æŻćŠćżćĄ«</label>
                <div class="layui-input-inline">
                    <input type="radio" name="ifrequire" value="1" title="æŻ" <?php if($data['ifrequire']==1): ?>checked<?php endif; ?>>
                    <input type="radio" name="ifrequire" value="0" title="ćŠ" <?php if($data['ifrequire']==0): ?>checked<?php endif; ?>>
                </div>
            </div>
            <?php if($data['ifsystem']): ?>
            <div class="layui-form-item" id="ifsearch" <?php if(!in_array($data['type'],['text', 'textarea', 'tags', 'Ueditor'])): ?>style="display:none"<?php endif; ?>>
                <label class="layui-form-label">æŻćŠćŻæçŽą</label>
                <div class="layui-input-inline">
                    <input type="radio" name="ifsearch" value="1" title="æŻ" <?php if($data['ifsearch']==1): ?>checked<?php endif; ?>>
                    <input type="radio" name="ifsearch" value="0" title="ćŠ" <?php if($data['ifsearch']==0): ?>checked<?php endif; ?>>
                </div>
            </div>
            <?php endif; ?>
            <div class="layui-form-item">
                <label class="layui-form-label">æçšżæŸç€ș</label>
                <div class="layui-input-inline">
                    <input type="radio" name="isadd" value="1" title="æŻ" <?php if($data['isadd']==1): ?>checked<?php endif; ?>>
                    <input type="radio" name="isadd" value="0" title="ćŠ" <?php if($data['isadd']==0): ?>checked<?php endif; ?>>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">ç¶æ</label>
                <div class="layui-input-inline">
                    <input type="radio" name="status" value="1" title="ćŻçš" <?php if($data['status']==1): ?>checked<?php endif; ?>>
                    <input type="radio" name="status" value="0" title="çŠçš" <?php if($data['status']==0): ?>checked<?php endif; ?>>
                </div>
            </div>
            <input type="hidden" name="ifsystem"  value="<?php echo htmlentities($data['ifsystem']); ?>">
            <input name="fieldid" type="hidden" value="<?php echo htmlentities($fieldid); ?>" />
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
    
    
<script>
layui.use(['layer', 'form'], function() {
    var layer = layui.layer,
        form = layui.form;
    form.on('select(fieldtype)', function(data) {
        $('#define').val($(data.elem).find("option:selected").attr("data-define"));
        var ifoption = $(data.elem).find("option:selected").attr("data-ifoption");
        var ifstring = $(data.elem).find("option:selected").attr("data-ifstring");
        //æçŽąéæŸ
        if (ifstring == '1') {
            $('#ifsearch').show();
        } else {
            $('#ifsearch').hide();
        }
        if (ifoption == '1') {
            $('#options').show();
        } else {
            $('#options').hide();
        }
    });
    form.on('select(fasttype)', function(data) {
        $('#define').val($(data.elem).find("option:selected").attr("data-define"));
    });
    form.on('select(pattern)', function(data) {
        $('#pattern').val($(data.elem).find("option:selected").attr("data-define"));
    });
    form.on('radio(datasource)', function(data) {
        if (data.value == 1) {
            $('.datasource').show();
            $('.linksource').hide();
            $('.menusource').hide();
            $('.defaultsource').hide();
        } else if(data.value == 2){
            $('.datasource').hide();
            $('.linksource').show();
            $('.menusource').hide();
            $('.defaultsource').hide();
        } else if(data.value == 3){
            $('.datasource').hide();
            $('.linksource').hide();
            $('.menusource').show();
            $('.defaultsource').hide();
        }else {
            $('.datasource').hide();
            $('.linksource').hide();
            $('.menusource').hide();
            $('.defaultsource').show();
        }
    });
    form.on('select(datatable)', function(data) {
        var field = data.value;
        $.get('<?php echo url("getfieldinfo"); ?>', {field:field}, function(res) {
            if(res.code==1){
                var data = res.data;
                $('#datavalue').html('<option data-define="">éæ©ć­æź”ăćŒă</option>');
                $('#datadesc').html('<option data-define="">éæ©ć­æź”ăæèż°ă</option>');
                data.map(function(i, e) {
                    var desc = i.Comment||i.Field;
                    var html = '<option value="'+i.Field+'">['+i.Field+'] '+desc+' </option>';
                    $('#datavalue,#datadesc').append(html);
                }); form.render();
            }
        });
    });
});
</script>

</body>

</html>