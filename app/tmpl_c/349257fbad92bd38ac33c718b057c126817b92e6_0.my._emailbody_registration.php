<?php /* Smarty version 3.1.27, created on 2023-01-25 21:47:49
         compiled from "my:_emailbody_registration" */ ?>
<?php
/*%%SmartyHeaderCode:141174776863d1a38597a110_80272653%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '349257fbad92bd38ac33c718b057c126817b92e6' => 
    array (
      0 => 'my:_emailbody_registration',
      1 => 1674683269,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '141174776863d1a38597a110_80272653',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63d1a38597c6b4_26685443',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63d1a38597c6b4_26685443')) {
function content_63d1a38597c6b4_26685443 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '141174776863d1a38597a110_80272653';
?>
Hello #name#,

Thank you for registration on our site.

Your login information:

Login: #username#
Password: #password#

You can login here: #site_url#

Contact us immediately if you did not authorize this registration.

Thank you.<?php }
}
?>