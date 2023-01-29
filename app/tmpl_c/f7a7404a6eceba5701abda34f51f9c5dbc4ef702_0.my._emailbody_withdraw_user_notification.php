<?php /* Smarty version 3.1.27, created on 2022-12-23 22:23:36
         compiled from "my:_emailbody_withdraw_user_notification" */ ?>
<?php
/*%%SmartyHeaderCode:95313859163a62a68e832f8_86170446%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7a7404a6eceba5701abda34f51f9c5dbc4ef702' => 
    array (
      0 => 'my:_emailbody_withdraw_user_notification',
      1 => 1671834216,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '95313859163a62a68e832f8_86170446',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63a62a68e84904_41504910',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63a62a68e84904_41504910')) {
function content_63a62a68e84904_41504910 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '95313859163a62a68e832f8_86170446';
?>
Hello #name#.

$#amount# has been successfully sent to your #currency# account #account#.
Transaction batch is #batch#.

#site_name#
#site_url#<?php }
}
?>