<?php /* Smarty version 3.1.27, created on 2022-11-19 13:38:40
         compiled from "my:_emailbody_registration" */ ?>
<?php
/*%%SmartyHeaderCode:13818553256378dc60be48a5_18417878%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '349257fbad92bd38ac33c718b057c126817b92e6' => 
    array (
      0 => 'my:_emailbody_registration',
      1 => 1668865120,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '13818553256378dc60be48a5_18417878',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6378dc60be7030_00107328',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6378dc60be7030_00107328')) {
function content_6378dc60be7030_00107328 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13818553256378dc60be48a5_18417878';
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