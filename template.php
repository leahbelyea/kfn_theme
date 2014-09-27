<?php
function kfn_preprocess_html(&$variables) {
  	drupal_add_css('http://fonts.googleapis.com/css?family=Quattrocento:700,400', array('type' => 'external'));
  	drupal_add_css('http://fonts.googleapis.com/css?family=Lato:400,700', array('type' => 'external'));
}

function kfn_preprocess_page(&$variables) {
  if (!empty($variables['node']) && !empty($variables['node']->type)) {
    $variables['theme_hook_suggestions'][] = 'page__node__' . $variables['node']->type;
  }
}

function kfn_preprocess_node(&$vars, $hook) {
	// MenuDuplicateLinks support, preserve path to original node
	$vars['node_original_url'] = $vars['node_url'];
	if (property_exists($vars['node'], 'path')) {
		$vars['node_url'] = url($vars['node']->path);
	}
	$date_array = explode(' ', $vars['date']);
	$vars['short_date'] = $date_array[1];

	$vars['block'] = false;
	if (array_key_exists('view', $vars) && $vars['view']->current_display == 'block'){
		$vars['block'] = true;
	}

}

function kfn_preprocess_maintenance_page(&$variables) {
  	drupal_add_css('http://fonts.googleapis.com/css?family=Quattrocento:700,400', array('type' => 'external'));
  	drupal_add_css('http://fonts.googleapis.com/css?family=Lato:400,700', array('type' => 'external'));
  	drupal_add_css(drupal_get_path('theme', 'kfn') . '/css/kfn.css');
}

function kfn_date_nav_title($params) {
  $view = $params['view'];
  $date_info = $view->date_info;
  $format = 'F Y';
  return date_format_date($date_info->min_date, 'custom', $format);
}

// Removes the unnecessary css files included in the html
function kfn_css_alter(&$css) {
  $exclude = array(
    'misc/vertical-tabs.css' => FALSE,
    'modules/aggregator/aggregator.css' => FALSE,
    'modules/block/block.css' => FALSE,
    'modules/book/book.css' => FALSE,
    'modules/comment/comment.css' => FALSE,
    'modules/dblog/dblog.css' => FALSE,
    'modules/field/theme/field.css' => FALSE,
    'modules/file/file.css' => FALSE,
    'modules/filter/filter.css' => FALSE,
    'modules/forum/forum.css' => FALSE,
    'modules/help/help.css' => FALSE,
    'modules/menu/menu.css' => FALSE,
    'modules/node/node.css' => FALSE,
    'modules/openid/openid.css' => FALSE,
    'modules/poll/poll.css' => FALSE,
    'modules/profile/profile.css' => FALSE,
    'modules/search/search.css' => FALSE,
    'modules/statistics/statistics.css' => FALSE,
    'modules/syslog/syslog.css' => FALSE,
    'modules/system/admin.css' => FALSE,
    'modules/system/maintenance.css' => FALSE,
    'modules/system/system.css' => FALSE,
    'modules/system/system.admin.css' => FALSE,

    // TODO: add this line back in conditionally when user is not logged in
    //'modules/system/system.base.css' => FALSE,

    'modules/system/system.maintenance.css' => FALSE,
    'modules/system/system.menus.css' => FALSE,
    'modules/system/system.messages.css' => FALSE,
    'modules/system/system.theme.css' => FALSE,
    'modules/taxonomy/taxonomy.css' => FALSE,
    'modules/tracker/tracker.css' => FALSE,
    'modules/update/update.css' => FALSE,
    'modules/user/user.css' => FALSE,
  );
  $css = array_diff_key($css, $exclude);
}
?>