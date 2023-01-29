<?php /* Smarty version 3.1.27, created on 2023-01-27 10:42:45
         compiled from "my:_emailbody_deposit_account_admin_notification" */ ?>
<?php
/*%%SmartyHeaderCode:116444758163d3aaa5460b24_43303510%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0566ba57c73b51ab1f136ca8d5e8588d0a7ece71' => 
    array (
      0 => 'my:_emailbody_deposit_account_admin_notification',
      1 => 1674816165,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '116444758163d3aaa5460b24_43303510',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63d3aaa5462860_04617214',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63d3aaa5462860_04617214')) {
function content_63d3aaa5462860_04617214 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '116444758163d3aaa5460b24_43303510';
?>
User #username# deposit $#amount# #currency# from account balance to #plan#.

Account: #account#
Batch: #batch#
Compound: #compound#%.
Referrers fee: $#ref_sum#<?php }
}
?>