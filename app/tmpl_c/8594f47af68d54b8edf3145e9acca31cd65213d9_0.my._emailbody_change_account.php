<?php /* Smarty version 3.1.27, created on 2023-01-13 10:43:44
         compiled from "my:_emailbody_change_account" */ ?>
<?php
/*%%SmartyHeaderCode:43186591763c135e0108c75_74817503%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8594f47af68d54b8edf3145e9acca31cd65213d9' => 
    array (
      0 => 'my:_emailbody_change_account',
      1 => 1673606624,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '43186591763c135e0108c75_74817503',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63c135e01166e8_75272689',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63c135e01166e8_75272689')) {
function content_63c135e01166e8_75272689 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '43186591763c135e0108c75_74817503';
?>
Hello #name#,

Your account data has been changed from ip #ip#


New information:

Password: #password#
E-mail address: #email#

Contact us immediately if you did not authorize this change.

Thank you.<?php }
}
?>