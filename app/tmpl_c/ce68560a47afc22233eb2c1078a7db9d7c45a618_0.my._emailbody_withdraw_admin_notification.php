<?php /* Smarty version 3.1.27, created on 2022-12-23 22:23:37
         compiled from "my:_emailbody_withdraw_admin_notification" */ ?>
<?php
/*%%SmartyHeaderCode:182656670063a62a6908a560_67946807%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce68560a47afc22233eb2c1078a7db9d7c45a618' => 
    array (
      0 => 'my:_emailbody_withdraw_admin_notification',
      1 => 1671834217,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '182656670063a62a6908a560_67946807',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63a62a6908b992_37892771',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63a62a6908b992_37892771')) {
function content_63a62a6908b992_37892771 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '182656670063a62a6908a560_67946807';
?>
User #username# received $#amount# to #currency# account #account#. Batch is #batch#.<?php }
}
?>