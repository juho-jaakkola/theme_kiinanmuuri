<?php

elgg_register_event_handler('init', 'system', 'theme_kiinanmuuri_init');

function theme_kiinanmuuri_init () {
	elgg_unregister_plugin_hook_handler('prepare', 'menu:site', 'elgg_site_menu_setup');
	
	elgg_unregister_menu_item('topbar', 'elgg_logo');
}
