<?php global $base_url; ?>
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
    <div id="content" class="full">
      <?php print $messages; ?>
    	<?php print render($page['content']); ?>                       
    </div>
</div>
<footer>
<div class="wrapper">
	<a href="<?php print $base_url; ?>/user">Webmaster Login</a>
</div>
</footer>