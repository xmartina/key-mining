<?php /* Smarty version 3.1.27, created on 2022-11-19 09:58:05
         compiled from "/home/multistream6/domains/keymining.ltd/public_html/app/tmpl/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11289106486378a8ad546aa6_82312508%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c3de5a33aa1a9bfbfdb99322da6f3c803b0ee0e' => 
    array (
      0 => '/home/multistream6/domains/keymining.ltd/public_html/app/tmpl/header.tpl',
      1 => 1578467872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11289106486378a8ad546aa6_82312508',
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6378a8ad54dc83_61610544',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6378a8ad54dc83_61610544')) {
function content_6378a8ad54dc83_61610544 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/multistream6/domains/keymining.ltd/public_html/app/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '11289106486378a8ad546aa6_82312508';
echo $_smarty_tpl->getSubTemplate ("logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="subpage-title">
	<div class="subpage-inner-title container">
		
		Welcome to <span><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
</span>
		
	</div>
</div>


<div class="subpage-container container"><?php }
}
?>