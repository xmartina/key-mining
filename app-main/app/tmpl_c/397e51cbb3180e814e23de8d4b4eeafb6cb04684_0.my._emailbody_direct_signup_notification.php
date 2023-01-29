<?php /* Smarty version 3.1.27, created on 2022-11-19 13:38:40
         compiled from "my:_emailbody_direct_signup_notification" */ ?>
<?php
/*%%SmartyHeaderCode:7980861376378dc60709764_10232611%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '397e51cbb3180e814e23de8d4b4eeafb6cb04684' => 
    array (
      0 => 'my:_emailbody_direct_signup_notification',
      1 => 1668865120,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '7980861376378dc60709764_10232611',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6378dc6076b471_69119829',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6378dc6076b471_69119829')) {
function content_6378dc6076b471_69119829 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7980861376378dc60709764_10232611';
?>
Dear #name# (#username#)

You have a new direct signup on #site_name#
User: #ref_username#
Name: #ref_name#
E-mail: #ref_email#

Thank you.<?php }
}
?>