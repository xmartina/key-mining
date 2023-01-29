<?php /* Smarty version 3.1.27, created on 2023-01-26 10:50:04
         compiled from "my:_emailbody_withdraw_request_user_notification" */ ?>
<?php
/*%%SmartyHeaderCode:126319825163d25adc0b54f2_69531198%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9dc888fe0e1392f2ec617e0f326be507e67362b' => 
    array (
      0 => 'my:_emailbody_withdraw_request_user_notification',
      1 => 1674730204,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '126319825163d25adc0b54f2_69531198',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63d25adc0c7453_62640042',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63d25adc0c7453_62640042')) {
function content_63d25adc0c7453_62640042 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '126319825163d25adc0b54f2_69531198';
?>
Hello #name#,


You have requested to withdraw $#amount#.
Request IP address is #ip#.


Thank you.
#site_name#
#site_url#<?php }
}
?>