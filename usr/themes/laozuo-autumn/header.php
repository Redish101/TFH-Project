<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php if($this->_currentPage>1) echo '第 '.$this->_currentPage.' 页 - '; ?><?php $this->archiveTitle('', '', '_'); ?><?php $this->options->title(); ?><?php if($this->is('index')): ?>_<?php $this->options->subtitle() ?><?php endif; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/animate.css'); ?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/icomoon.css'); ?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/bootstrap.css'); ?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/flexslider.css'); ?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>">
 <?php if($this->is('index')): ?>
  <meta name="description" content="<?php $this->options->description() ?>" />
  <meta name="keywords" content="<?php $this->options->keywords() ?>" />
   <?php else: ?>
    <?php $this->header(); ?><?php endif; ?>
  </head>
  <body>
  <div id="fh5co-page">
    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
    <aside id="fh5co-aside" role="complementary" class="border js-fullheight">
<?php if ($this->options->logoUrl): ?>
                <a href="<?php $this->options->siteUrl(); ?>">
                    <div class="logo"><img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" /></div>
                </a>
                <p class="description"><?php $this->options->subtitle() ?></p>
            <?php else: ?>
                <h1 id="fh5co-logo"> <a id="logo" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></h1>
              <p class="description"><?php $this->options->subtitle() ?></p>
            <?php endif; ?>
    
      <nav id="fh5co-main-menu" role="navigation">
        <ul>
              <li> <a<?php if($this->is('index')): ?> class="fh5co-active"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>
                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>
                    <li><a<?php if($this->is('page', $pages->slug)): ?> class="fh5co-active"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
                    <?php endwhile; ?></ul>
      </nav>     
<?php $this->need('footer.php'); ?>
    </aside>






