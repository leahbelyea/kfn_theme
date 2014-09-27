<h2><?php print render($title); ?></h2>
<?php print render($content['field_photo']); ?>
<?php print render($content['field_alert']); ?>
<div class="contact">
	<?php print render($content['field_address']); ?> 
	<?php print render($content['field_hours']); ?> 
</div>
<?php print render($content['field_info']); ?>  
<?php 
  $newsFilter = strtolower($title);
  print views_embed_view('department_news', 'default', $newsFilter); 
?>

