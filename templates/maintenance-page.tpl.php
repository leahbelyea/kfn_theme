<?php global $base_url; ?>
<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page while offline.
 *
 * All the available variables are mirrored in html.tpl.php and page.tpl.php.
 * Some may be blank but they are provided for consistency.
 *
 * @see template_preprocess()
 * @see template_preprocess_maintenance_page()
 *
 * @ingroup themeable
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>">
	<header>
		<div id="title">
			<div class="wrapper">
				<h1>Kingsclear First Nation</h1>
				<a href="<?php print base_path(); ?>"><img src="<?php print base_path() . drupal_get_path('theme', 'kfn'); ?>/images/KFN-Logo.png" alt="Logo"></a>
			</div>
		</div>
		<nav id="main-nav" style="height: 40px;">	
	    </nav>
	</header>

	<div id="page-body" class="wrapper">     
	    <div id="content" style="margin-left: 0;">
	    	<?php print $content; ?>                      
	    </div>
	</div>
	<footer>
	<div class="wrapper">
		<a href="<?php print $base_url; ?>/user">Webmaster Login</a>
	</div>
	</footer>
</body>
</html>