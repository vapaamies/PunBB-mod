<?php
$forum_loader->add_js(forum_link('/style/common/responsive-nav.js'), array('weight' => 55, 'async' => false, 'group' => FORUM_JS_GROUP_SYSTEM));

$forum_loader->add_css(forum_link('/style/Oxygen/Oxygen.css'), array('type' => 'url', 'group' => FORUM_CSS_GROUP_SYSTEM, 'media' => 'screen'));
$forum_loader->add_css(forum_link('/style/Oxygen/Oxygen_cs.css'), array('type' => 'url', 'group' => FORUM_CSS_GROUP_SYSTEM, 'media' => 'screen'));

$tpl_main = str_replace('<!-- forum_board_title -->', forum_htmlencode($forum_config['o_board_title']), $tpl_main);
$tpl_main = str_replace('<!-- forum_lang_menu_admin -->', $lang_common['Menu admin'], $tpl_main);
$tpl_main = str_replace('<!-- forum_lang_menu_profile -->', $lang_common['Menu profile'], $tpl_main);