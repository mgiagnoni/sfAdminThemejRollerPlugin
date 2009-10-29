<?php if (sfConfig::get('app_sf_admin_theme_jroller_plugin_css_reset')): // reset css ?>
  [?php use_stylesheet('<?php echo sfConfig::get('app_sf_admin_theme_jroller_plugin_web_dir','/sfAdminThemejRollerPlugin'). '/css/reset.css'?>') ?]
<?php endif; ?>

<?php if (sfConfig::get('app_sf_admin_theme_jroller_plugin_use_jquery')): // use jQuery ?>
  [?php use_javascript('<?php echo sfConfig::get('app_sf_admin_theme_jroller_plugin_web_dir','/sfAdminThemejRollerPlugin') . '/js/jquery.min.js'?>') ?]
  [?php use_javascript('<?php echo sfConfig::get('app_sf_admin_theme_jroller_plugin_web_dir','/sfAdminThemejRollerPlugin') . '/js/jquery-ui.custom.min.js'?>') ?]
<?php endif; ?>

[?php use_stylesheet('<?php echo sfConfig::get('app_sf_admin_theme_jroller_plugin_theme_dir','/sfAdminThemejRollerPlugin/css/jquery').'/' . sfConfig::get('app_sf_admin_theme_jroller_plugin_theme','redmond').'/jquery-ui.custom.css'?>') ?]

<?php if (isset($this->params['css'])): // custom CSS ?>
  [?php use_stylesheet('<?php echo $this->params['css'] ?>', 'first') ?]
<?php else: // jRoller CSS ?>
  [?php use_stylesheet('<?php echo sfConfig::get('app_sf_admin_theme_jroller_plugin_web_dir','/sfAdminThemejRollerPlugin'). '/css/jroller.css'?>') ?]
<?php endif; ?>

[?php // additionnal stylesheet (filament group)
  use_stylesheet('<?php echo sfConfig::get('app_sf_admin_theme_jroller_plugin_web_dir','/sfAdminThemejRollerPlugin'). '/css/fg.menu.css'?>');
  use_stylesheet('<?php echo sfConfig::get('app_sf_admin_theme_jroller_plugin_web_dir','/sfAdminThemejRollerPlugin'). '/css/fg.buttons.css'?>');
  use_stylesheet('<?php echo sfConfig::get('app_sf_admin_theme_jroller_plugin_web_dir','/sfAdminThemejRollerPlugin'). '/css/ui.selectmenu.css'?>');
?]

[?php // additionnal javascript (filament group)
  use_javascript('<?php echo sfConfig::get('app_sf_admin_theme_jroller_plugin_web_dir','/sfAdminThemejRollerPlugin') . '/js/fg.menu.js'?>');
  use_javascript('<?php echo sfConfig::get('app_sf_admin_theme_jroller_plugin_web_dir','/sfAdminThemejRollerPlugin') . '/js/jroller.js'?>');
  use_javascript('<?php echo sfConfig::get('app_sf_admin_theme_jroller_plugin_web_dir','/sfAdminThemejRollerPlugin') . '/js/ui.selectmenu.js'?>');
?]
