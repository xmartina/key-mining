<?php /* Smarty version 3.1.27, created on 2022-11-08 17:29:35
         compiled from "my:_emailbody_withdraw_admin_notification" */ ?>
<?php
/*%%SmartyHeaderCode:1294302619636a91ffddb932_10318995%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce68560a47afc22233eb2c1078a7db9d7c45a618' => 
    array (
      0 => 'my:_emailbody_withdraw_admin_notification',
      1 => 1667928575,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '1294302619636a91ffddb932_10318995',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_636a91ffddcb71_67612527',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_636a91ffddcb71_67612527')) {
function content_636a91ffddcb71_67612527 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1294302619636a91ffddb932_10318995';
?>
User #username# received $#amount# to #currency# account #account#. Batch is #batch#.<?php }
}
?>