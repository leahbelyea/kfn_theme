<?php global $base_url; ?>
<?php 
drupal_add_css(drupal_get_path('theme', 'kfn') . '/support/flexslider/flexslider.css');
drupal_add_js(drupal_get_path('theme', 'kfn') . '/support/flexslider/jquery.flexslider-min.js');
drupal_add_js(drupal_get_path('theme', 'kfn') . '/js/home.js');
?>
<header>
  <div id="title">
    <div class="wrapper">
      <h1>Kingsclear First Nation</h1>
      <a href="<?php print base_path(); ?>"><img src="<?php print base_path() . drupal_get_path('theme', 'kfn'); ?>/images/KFN-Logo.png" alt="Logo"></a>
    </div>
  </div>
  <nav id="main-nav">
          <?php print render($page['primary_nav']); ?>  
    </nav>
</header>

<div id="page-body" class="wrapper">   
  <?php print $messages; ?>    
  <div id="main-feature">
    <div id="main-photo" class="flexslider">
      <ul class="slides">
        <?php $field = field_view_field('node', $node, 'field_slider_photo'); ?>
        <?php print render($field); ?>
      </ul>
    </div>
    <div id="main-text">
      <h2><?php print $title; ?></h2>
      <?php $field = field_view_field('node', $node, 'field_about', array('label' => 'hidden')); ?>
      <?php print render($field); ?>
    </div>
    <div class="clear"></div>                     
  </div>
  <?php $showNews = count(views_get_view_result('homepage_news')) == 3 ? TRUE : FALSE; ?>
  <?php if ($showNews): ?>
    <div class="home-news">
      <?php print views_embed_view('homepage_news'); ?>
    </div>
  <?php endif; ?>
</div>
<footer>
  <div class="wrapper">
    <a href="<?php print $base_url; ?>/user">Webmaster Login</a>
  </div>
</footer>