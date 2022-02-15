<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<script src="<?php $this->options->themeUrl('js/modernizr-2.6.2.min.js'); ?>"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
 <script src="<?php $this->options->themeUrl('js/respond.min.js'); ?>"></script>
  <![endif]-->
 <div class="fh5co-footer">
        <p><small>&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a></small></p>
        <ul>
          <li><a href="<?php $this->options->facebook() ?>"><i class="icon-facebook2"></i></a></li>
          <li><a href="<?php $this->options->twitter() ?>"><i class="icon-twitter2"></i></a></li>
          <li><a href="<?php $this->options->instagram() ?>"><i class="icon-instagram"></i></a></li>
          <li><a href="<?php $this->options->linkedin() ?>"><i class="icon-linkedin2"></i></a></li>
        </ul>
      </div>
 <?php $this->footer(); ?>

