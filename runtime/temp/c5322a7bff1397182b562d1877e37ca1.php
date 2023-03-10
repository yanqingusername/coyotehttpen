<?php /*a:2:{s:84:"/www/wwwroot/kyden.web.zhongwangyingtong.com/application/cms/view/category/edit.html";i:1632884516;s:85:"/www/wwwroot/kyden.web.zhongwangyingtong.com/application/admin/view/index_layout.html";i:1596779062;}*/ ?>
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
    <div class="layui-card-header">çŒèŸæ çź</div>
    <div class="layui-card-body">
        <form class="layui-form" method="post">
            <div class="layui-tab">
                <ul class="layui-tab-title">
                    <li class="layui-this">ćșæŹèźŸçœź</li>
                    <li>ééĄčèźŸçœź</li>
                    <li id="modeTab">æšĄæżèźŸçœź</li>
                    <!-- <li>æéèźŸçœź</li> -->
                </ul>
                <div class="layui-tab-content">
                    <div class="layui-tab-item layui-show">
                        <div class="layui-form-item">
                            <label>äžçș§èć</label>
                            <div class="w300">
                                <select name="parentid">
                                    <option value="0">äœäžșéĄ¶çș§æ çź</option>
                                    <?php echo $category; ?>
                                </select>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label>æ çźæ éą </label>
                            <div class="w300">
                                <input type="text" name="catname" autocomplete="off" lay-verify="required" placeholder="æ çźćç§°" class="layui-input" value="<?php echo htmlentities($data['catname']); ?>">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label>ćŻäžæ èŻ</label>
                            <div class="w300">
                                <input type="text" name="catdir" autocomplete="off" placeholder="ćŻäžæ èŻ" class="layui-input" value="<?php echo htmlentities($data['catdir']); ?>">
                            </div>
                            <div class="layui-form-mid layui-word-aux">çç©șèȘćšçææŒéłïŒè±ææ°ć­ç»æ</div>
                        </div>
                        <div class="layui-form-item web_link">
                            <label>éŸæ„ć°ć</label>
                            <div>
                                <div class="layui-input-inline w300">
                                    <input type="text" name="url" autocomplete="off" placeholder="èȘćźäčéŸæ„ć°ć" class="layui-input" id="url" value="<?php echo htmlentities($data['url']); ?>">
                                </div>
                                <div class="layui-input-inline">
                                    <select lay-filter="fasttype">
                                        <option data-url="">ćžžçšćéšéŸæ„</option>
                                        <option data-url="cms/index/index">éŠéĄ”</option>
                                        <option data-url="cms/index/lists?catid=2">ćèĄšéĄ”/ćéĄ”</option>
                                        <option data-url="cms/index/shows?catid=2&id=1">èŻŠæéĄ”</option>
                                        <?php if(isModuleInstall('formguide')): ?>
                                        <option data-url="formguide/index/index?id=2">èĄšćéĄ”</option>
                                        <?php endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div style="clear: both;"></div>
                            <div class="layui-form-mid layui-word-aux">
                                æćŒæ¶çæïŒćéšéŸæ„æ ŒćŒ:æšĄć/æ§ć¶ćš/æäœ?ćæ°=ćæ°ćŒ&...ïŒć€éšéŸæ„ććżéĄ»http://ćŒć€Ž
                            </div>
                        </div>
                        <div class="layui-form-item web_seo">
                            <label>æ çźçźä»</label>
                            <div class="w300">
                                <textarea name="description" placeholder="æ çźçźä»" class="layui-textarea"><?php echo htmlentities($data['description']); ?></textarea>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label>ćŸçæ éą </label>
                            <div class="w300">
                                <input type="text" name="picname" placeholder="ćŸçæ éą" class="layui-input" value="<?php echo htmlentities($data['picname']); ?>">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label>ćŸçćŻæ éą </label>
                            <div class="w300">
                                <input type="text" name="subpicname" placeholder="ćŸçćŻæ éą" class="layui-input" value="<?php echo htmlentities($data['subpicname']); ?>">
                            </div>
                        </div>
                        <?php if(config('dev_pc_image')): ?>
                        <div class="layui-form-item layui-form-text">
                            <label><?php echo config('dev_pc_image'); ?></label>
                            <div class="layui-form-field-label">
                                <div class="js-upload-image">
                                    <?php echo \util\Form::images('image','',$data['image']) ?>
                                </div>
                            </div>
                        </div>
                        <?php endif; if(config('dev_mobile_image')): ?>
                        <div class="layui-form-item layui-form-text">
                            <label><?php echo config('dev_mobile_image'); ?></label>
                            <div class="layui-form-field-label">
                                <div class="js-upload-image">
                                    <?php echo \util\Form::images('imagem','',$data['imagem']) ?>
                                </div>
                            </div>
                        </div>
                        <?php endif; if(config('dev_cat_image')): ?>
                        <div class="layui-form-item layui-form-text">
                            <label><?php echo config('dev_cat_image'); ?></label>
                            <div class="layui-form-field-label">
                                <div class="js-upload-image">
                                    <?php echo \util\Form::images('imagecat','',$data['imagecat']) ?>
                                </div>
                            </div>
                        </div>
                        <?php endif; if(config('dev_icon_image')): ?>
                        <div class="layui-form-item layui-form-text">
                            <label><?php echo config('dev_icon_image'); ?></label>
                            <div class="layui-form-field-label">
                                <div class="js-upload-image">
                                    <?php echo \util\Form::images('imageico','',$data['imageico']) ?>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="layui-tab-item">
                        <div class="layui-form-item">
                            <label>ćšéĄ¶éšćŻŒèȘæŸç€ș</label>
                            <div class="w300">
                                <input type="radio" name="status" value="1" title="æŸç€ș" <?php if($data['status'] == '1'): ?>checked<?php endif; ?>>
                                <input type="radio" name="status" value="0" title="éè" <?php if($data['status'] == '0'): ?>checked<?php endif; ?>>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label>ćšćșéšćŻŒèȘæŸç€ș</label>
                            <div class="w300">
                                <input type="radio" name="bottom_status" value="1" title="æŸç€ș" <?php if($data['bottom_status'] == '1'): ?>checked<?php endif; ?>>
                                <input type="radio" name="bottom_status" value="0" title="éè" <?php if($data['bottom_status'] == '0'): ?>checked<?php endif; ?>>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label>æŸç€șæćș</label>
                            <div class="w300">
                                <input type="text" name="listorder" autocomplete="off" placeholder="æŸç€șæćș" class="layui-input" value="<?php echo htmlentities($data['listorder']); ?>">
                            </div>
                        </div>
                        <div class="layui-form-item web_seo">
                            <label>çœéĄ”æ éą</label>
                            <div class="w300">
                                <input type="text" name="setting[meta_title]" autocomplete="off" placeholder="éćŻčæçŽąćŒæèźŸçœźçæ éą" class="layui-input" value="<?php echo htmlentities($setting['meta_title']); ?>">
                            </div>
                        </div>
                        <div class="layui-form-item web_seo">
                            <label>çœéĄ”ćłéźèŻ</label>
                            <div class="w300">
                                <input type="text" name="setting[meta_keywords]" autocomplete="off" placeholder="ćłéźć­äž­éŽçšćè§éć·éćŒ" class="layui-input" value="<?php echo htmlentities($setting['meta_keywords']); ?>">
                            </div>
                        </div>
                        <div class="layui-form-item web_seo">
                            <label>çœéĄ”æèż°</label>
                            <div class="w300">
                                <textarea name="setting[meta_description]" placeholder="éćŻčæçŽąćŒæèźŸçœźççœéĄ”æèż°" class="layui-textarea"><?php echo htmlentities($setting['meta_description']); ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="layui-tab-item">
                        <div class="layui-form-item web_list">
                            <label>æ çźéŠéĄ”æšĄæż</label>
                            <div class="w300">
                                <select name="setting[category_template]">
                                    <option value="category.<?php echo config('template.view_suffix'); ?>" selected>é»èź€æ çźéŠéĄ”:category.<?php echo config('template.view_suffix'); ?></option>
                                    <?php if(is_array($tp_category) || $tp_category instanceof \think\Collection || $tp_category instanceof \think\Paginator): $i = 0; $__LIST__ = $tp_category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <option value="<?php echo htmlentities($vo); ?>" <?php if($setting['category_template'] == $vo): ?>selected<?php endif; ?>><?php echo htmlentities($vo); ?> </option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                            <div class="layui-form-mid layui-word-aux">æ°ćąæšĄæżä»„category_xx.<?php echo config('template.view_suffix'); ?>ćœąćŒ,ăć«æć­æ çźæ¶çæă</div>
                        </div>
                        <div class="layui-form-item web_list">
                            <label>æ çźćèĄšéĄ”æšĄæż</label>
                            <div class="w300">
                                <select name="setting[list_template]">
                                    <option value="list.<?php echo config('template.view_suffix'); ?>" selected>é»èź€æ çźćèĄšéĄ”:list.<?php echo config('template.view_suffix'); ?></option>
                                    <?php if(is_array($tp_list) || $tp_list instanceof \think\Collection || $tp_list instanceof \think\Paginator): $i = 0; $__LIST__ = $tp_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <option value="<?php echo htmlentities($vo); ?>" <?php if($setting['list_template'] == $vo): ?>selected<?php endif; ?>><?php echo htmlentities($vo); ?> </option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                            <div class="layui-form-mid layui-word-aux">æ°ćąæšĄæżä»„list_xx.<?php echo config('template.view_suffix'); ?>ćœąćŒ,ăæČĄæć­æ çźæ¶çæă</div>
                        </div>
                        <div class="layui-form-item web_list">
                            <label>ććźčéĄ”æšĄæż</label>
                            <div class="w300">
                                <select name="setting[show_template]">
                                    <option value="show.<?php echo config('template.view_suffix'); ?>" selected>é»èź€ććźčéĄ”:show.<?php echo config('template.view_suffix'); ?></option>
                                    <?php if(is_array($tp_show) || $tp_show instanceof \think\Collection || $tp_show instanceof \think\Paginator): $i = 0; $__LIST__ = $tp_show;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <option value="<?php echo htmlentities($vo); ?>" <?php if($setting['show_template'] == $vo): ?>selected<?php endif; ?>><?php echo htmlentities($vo); ?> </option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                            <div class="layui-form-mid layui-word-aux">æ°ćąæšĄæżä»„show_xx.<?php echo config('template.view_suffix'); ?>ćœąćŒ</div>
                        </div>
                        <div class="layui-form-item web_list">
                            <label>æšĄæżćșçšć°ć­æ çź</label>
                            <div class="w300">
                                <input type="radio" name="template_child" value="1" title="æŻ">
                                <input type="radio" name="template_child" value="0" title="ćŠ" checked>
                            </div>
                        </div>
                    </div>
                    <div class="layui-tab-item">
                        <?php if(isModuleInstall('member')): ?>
                        <div class="layui-form-item web_list">
                            <label>äŒćç»æé</label>
                            <table class="layui-table" style="max-width: 250px;">
                              <colgroup>
                                <col width="150">
                                <col width="100">
                              </colgroup>
                              <thead>
                                <tr>
                                  <th>äŒćç»ćç§°</th>
                                  <th>ćèźžæçšż</th>
                                </tr> 
                              </thead>
                              <tbody>
                                <?php if(is_array($Member_Group) || $Member_Group instanceof \think\Collection || $Member_Group instanceof \think\Paginator): $i = 0; $__LIST__ = $Member_Group;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <tr>
                                  <td><?php echo htmlentities($vo['name']); ?></td>
                                  <td><input type="checkbox" name="priv_groupid[]" value="add,<?php echo htmlentities($vo['id']); ?>" title="ćèźž" lay-skin="primary" <?php  echo model("cms/CategoryPriv")->check_category_priv($privs,'add',$vo['id'],0); ?>></td>
                                </tr>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                              </tbody>
                            </table>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <input type="hidden" name="modelid" value="<?php echo htmlentities($data['modelid']); ?>">
                <input type="hidden" name="type" value="2">
                <input name="id" type="hidden" value="<?php echo htmlentities($data['id']); ?>">
                <div class="layui-form-item">
                    <div>
                        <button class="layui-btn" lay-submit lay-filter="formSubmit">ç«ćłæäș€</button>
                        <button type="reset" class="layui-btn layui-btn-primary">éçœź</button>
                    </div>
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
layui.use('form', function() {
    var form = layui.form;
    form.on('select(fasttype)', function(data) {
        $('#url').val($(data.elem).find("option:selected").attr("data-url"));
    });
});
</script>

</body>

</html>