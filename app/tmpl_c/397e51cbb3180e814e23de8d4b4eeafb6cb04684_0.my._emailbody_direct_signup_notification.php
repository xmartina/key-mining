<?php /* Smarty version 3.1.27, created on 2023-01-25 21:47:45
         compiled from "my:_emailbody_direct_signup_notification" */ ?>
<?php
/*%%SmartyHeaderCode:98752885463d1a381540aa8_08494090%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '397e51cbb3180e814e23de8d4b4eeafb6cb04684' => 
    array (
      0 => 'my:_emailbody_direct_signup_notification',
      1 => 1674683265,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '98752885463d1a381540aa8_08494090',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63d1a38154fe36_61796536',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63d1a38154fe36_61796536')) {
function content_63d1a38154fe36_61796536 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '98752885463d1a381540aa8_08494090';
?>
Dear #name# (#username#)

You have a new direct signup on #site_name#
User: #ref_username#
Name: #ref_name#
E-mail: #ref_email#

Thank you.<?php }
}
?>