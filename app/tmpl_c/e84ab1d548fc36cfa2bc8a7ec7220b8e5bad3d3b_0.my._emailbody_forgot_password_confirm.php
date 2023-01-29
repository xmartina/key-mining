<?php /* Smarty version 3.1.27, created on 2022-12-24 01:52:51
         compiled from "my:_emailbody_forgot_password_confirm" */ ?>
<?php
/*%%SmartyHeaderCode:29198650563a65b73223d22_68267864%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e84ab1d548fc36cfa2bc8a7ec7220b8e5bad3d3b' => 
    array (
      0 => 'my:_emailbody_forgot_password_confirm',
      1 => 1671846771,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '29198650563a65b73223d22_68267864',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63a65b7328c2e0_06788552',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63a65b7328c2e0_06788552')) {
function content_63a65b7328c2e0_06788552 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '29198650563a65b73223d22_68267864';
?>
Hello #name#,

Please confirm your reqest for password reset.

Copy and paste this link to your browser:
#site_url#/?a=forgot_password&action=confirm&c=#confirm_string#

Thank you.
#site_name#<?php }
}
?>