<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点 LOGO 地址'), _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO'));
    $subtitle = new Typecho_Widget_Helper_Form_Element_Text('subtitle', NULL, NULL, _t('网站副标题：'), _t(''));
    $facebook = new Typecho_Widget_Helper_Form_Element_Text('facebook', NULL, NULL, _t('FaceBook账户地址：'), _t(''));
    $twitter = new Typecho_Widget_Helper_Form_Element_Text('twitter', NULL, NULL, _t('Twitter账户地址：'), _t(''));
    $instagram = new Typecho_Widget_Helper_Form_Element_Text('instagram', NULL, NULL, _t('instagram地址：'), _t(''));
    $linkedin = new Typecho_Widget_Helper_Form_Element_Text('linkedin', NULL, NULL, _t('LinkedIn地址：'), _t(''));
   
    $form->addInput($logoUrl);
    $form->addInput($subtitle);
    $form->addInput($facebook);
    $form->addInput($twitter);
    $form->addInput($instagram);
    $form->addInput($linkedin);
    
    
    
}

/*
* 无插件阅读数
*/
function get_post_view($archive)
{
$cid = $archive->cid;
$db = Typecho_Db::get();
$prefix = $db->getPrefix();
if (!array_key_exists('views', $db->fetchRow($db->select()->from('table.contents')))) {
$db->query('ALTER TABLE `' . $prefix . 'contents` ADD `views` INT(10) DEFAULT 0;');
echo 0;
return;
}
$row = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid));
if ($archive->is('single')) {
$db->query($db->update('table.contents')->rows(array('views' => (int) $row['views'] + 1))->where('cid = ?', $cid));
}
echo $row['views'];
}
/*
* 随机缩略图
*/
function thumb($obj) {
    $rand_num = 6; //随机图片数量，根据图片目录中图片实际数量设置
    if ($rand_num == 0) {
        $imgurl = "./usr/themes/laozuo-autumn/images/random/1.jpg";
        //如果$rand_num = 0,则显示默认图片，须命名为"0.jpg"，注意是绝对地址
    }else{
        $imgurl = "./usr/themes/laozuo-autumn/images/random/".rand(1,$rand_num).".jpg";
            //随机图片，须按"1.jpg","2.jpg","3.jpg"...的顺序命名，注意是绝对地址
    }
    $attach = $obj->attachments(1)->attachment;
    if(isset($attach->isImage) && $attach->isImage == 1){
        $thumb = $attach->url;
    }else{
        $thumb = $imgurl;
    }
        return $thumb;
}
