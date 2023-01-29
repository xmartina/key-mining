<?php /* Smarty version 3.1.27, created on 2023-01-27 10:42:44
         compiled from "my:_emailbody_referral_commision_notification" */ ?>
<?php
/*%%SmartyHeaderCode:120640712663d3aaa4e7dc22_70168820%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b22dae1eb645238796be578d1b985550bbf18781' => 
    array (
      0 => 'my:_emailbody_referral_commision_notification',
      1 => 1674816164,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '120640712663d3aaa4e7dc22_70168820',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63d3aaa4e8d789_43847181',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63d3aaa4e8d789_43847181')) {
function content_63d3aaa4e8d789_43847181 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '120640712663d3aaa4e7dc22_70168820';
?>
Dear #name# (#username#)

You have received a referral comission of $#amount# #currency# from the #ref_name# (#ref_username#) deposit.

Thank you.<?php }
}
?>