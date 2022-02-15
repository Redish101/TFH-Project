<?php
/**
 * 基于Typecho 程序响应式网站主题。
 * 这款主题适合个人博客、个人网站、图片网站。
 *
 * 免责声明：免费主题，我们没有义务和责任提供技术服务，需要用到正规网站，如果用于不良网站造成的后果我们不负责任。造成后果自行承担。
 *
 * @package Marble Theme For Typecho 
 * @author 笨笨
 * @version 2.0
 * @link https://www.imbwh.com/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
    <div id="fh5co-main">
      <div class="fh5co-narrow-content">
        <p>当前页面：&nbsp;<?php if($this->is('index')):?><!-- 页面首页时 -->
  <a href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->title(); ?>">首页</a> &gt; 
  <?php elseif ($this->is('post')): ?><!-- 页面为文章单页时 -->
    <a href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->title(); ?>">首页</a> &gt; <?php $this->category(); ?> &gt; 正文
  <?php else: ?><!-- 页面为其他页时 -->
    <a href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->title(); ?>">首页</a> &gt; <?php $this->archiveTitle(' &raquo; ','',''); ?>
  <?php endif; ?></p>    
         
            
          <div class="col-md-12 col-sm-12 animate-box">         

             <h1><?php $this->title() ?></h1>
             <p><span class="post-category">文章分类：<?php $this->category(','); ?></span> / <span class="post-date">发布时间：<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></span> / <span class="comments-link">访问次数：<?php get_post_view($this) ?></span> / <?php _e('标签: '); ?><?php $this->tags(', ', true, 'none'); ?></p>
            <p><?php $this->content(); ?></p><hr/>
            <p>上一篇&gt;&gt;<?php $this->thePrev('%s','没有了'); ?></p>
<p>下一篇&gt;&gt;<?php $this->theNext('%s','没有了'); ?></p>
<hr/>
            </div>
        
          
       
      </div>
    
      <div class="fh5co-narrow-content">
          <div class="row">
          <?php $this->need('comments.php'); ?>
          </div>
          
        </div>
    </div>
  </div>
  <script src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>"></script>
  <script src="<?php $this->options->themeUrl('js/jquery.easing.1.3.js'); ?>"></script>
  <script src="<?php $this->options->themeUrl('js/bootstrap.min.js'); ?>"></script>
  <script src="<?php $this->options->themeUrl('js/jquery.waypoints.min.js'); ?>"></script>
  <script src="<?php $this->options->themeUrl('js/jquery.flexslider-min.js'); ?>"></script>
  <script src="<?php $this->options->themeUrl('js/main.js'); ?>"></script>
  </body>
</html>

