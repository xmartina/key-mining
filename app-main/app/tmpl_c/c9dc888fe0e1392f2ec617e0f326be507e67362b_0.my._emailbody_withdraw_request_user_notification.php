<?php /* Smarty version 3.1.27, created on 2022-11-17 15:13:51
         compiled from "my:_emailbody_withdraw_request_user_notification" */ ?>
<?php
/*%%SmartyHeaderCode:53086206663764faf6849f6_69553106%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9dc888fe0e1392f2ec617e0f326be507e67362b' => 
    array (
      0 => 'my:_emailbody_withdraw_request_user_notification',
      1 => 1668698031,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '53086206663764faf6849f6_69553106',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63764faf6926d2_51327303',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63764faf6926d2_51327303')) {
function content_63764faf6926d2_51327303 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '53086206663764faf6849f6_69553106';
?>
Hello #name#,


You have requested to withdraw $#amount#.
Request IP address is #ip#.


Thank you.
#site_name#
#site_url#<?php }
}
?>