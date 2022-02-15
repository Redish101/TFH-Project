<?php
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
             <p><span class="post-date">发布时间：<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></span> / <span class="comments-link">访问次数：<?php get_post_view($this) ?></span></p>
            <p><?php $this->content(); ?></p><hr/>
            
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

