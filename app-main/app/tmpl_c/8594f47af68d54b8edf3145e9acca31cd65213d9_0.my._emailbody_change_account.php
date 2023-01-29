<?php /* Smarty version 3.1.27, created on 2022-11-11 13:43:58
         compiled from "my:_emailbody_change_account" */ ?>
<?php
/*%%SmartyHeaderCode:2060246867636e519ee00035_92511344%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8594f47af68d54b8edf3145e9acca31cd65213d9' => 
    array (
      0 => 'my:_emailbody_change_account',
      1 => 1668174238,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '2060246867636e519ee00035_92511344',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_636e519ee5e833_45810091',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_636e519ee5e833_45810091')) {
function content_636e519ee5e833_45810091 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2060246867636e519ee00035_92511344';
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