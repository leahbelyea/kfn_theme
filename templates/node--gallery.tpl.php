<?php 
drupal_add_css(drupal_get_path('theme', 'kfn') . '/support/lightbox/css/lightbox.css');
drupal_add_js(drupal_get_path('theme', 'kfn') . '/support/lightbox/js/lightbox-2.6.min.js');
drupal_add_js(drupal_get_path('theme', 'kfn') . '/js/gallery.js');
?>

<h2><?php print render($title); ?></h2>
<?php print render($content['field_gallery_photo']); ?>



