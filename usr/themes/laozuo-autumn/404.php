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
          <div class="col-md-12 col-sm-12 animate-box">        

             <h2 class="post-title">404 - <?php _e('页面没找到'); ?></h2>
            <p><?php _e('你想查看的页面已被转移或删除了, 要不要搜索看看: '); ?></p>
            <form method="post">
                <p><input type="text" name="s" class="text" autofocus /></p>
                <p><button type="submit" class="submit"><?php _e('搜索'); ?></button></p>
            </form>
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


