<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
    <div id="fh5co-main">
      <div class="fh5co-narrow-content">
        <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">最新文章</h2>
        <div class="row row-bottom-padded-md">

          <?php while($this->next()): ?>
            
          <div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
            <div class="blog-entry">

              <a href="<?php $this->permalink() ?>" class="blog-img"><img src="<?php echo thumb($this); ?>" class="img-responsive" alt="<?php $this->title() ?>"></a>
              <div class="desc">
                <h3><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
                <span><small><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time> </small> / <small> <?php $this->category(','); ?> </small> / <small> <i class="icon-comment"></i> <a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></small></span>
                <p><?php $this->excerpt(50); ?></p>
                <a href="<?php $this->permalink() ?>" class="lead">阅读更多<i class="icon-arrow-right3"></i></a>
              </div>
            </div>
          </div>
          <?php endwhile; ?>  
          
        </div>
      </div>
    
      <div id="get-in-touch">
        <div class="fh5co-narrow-content">
          <div class="row">
           <?php $this->pageNav('前一页', '后一页'); ?>
          </div>
          
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