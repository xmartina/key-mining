<?php /* Smarty version 3.1.27, created on 2022-11-08 17:29:35
         compiled from "my:_emailbody_withdraw_user_notification" */ ?>
<?php
/*%%SmartyHeaderCode:1491480051636a91ffcab679_15458205%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7a7404a6eceba5701abda34f51f9c5dbc4ef702' => 
    array (
      0 => 'my:_emailbody_withdraw_user_notification',
      1 => 1667928575,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '1491480051636a91ffcab679_15458205',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_636a91ffcae880_74486518',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_636a91ffcae880_74486518')) {
function content_636a91ffcae880_74486518 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1491480051636a91ffcab679_15458205';
?>
Hello #name#.

$#amount# has been successfully sent to your #currency# account #account#.
Transaction batch is #batch#.

#site_name#
#site_url#<?php }
}
?>