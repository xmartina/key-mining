<?php /* Smarty version 3.1.27, created on 2022-11-09 09:15:19
         compiled from "my:_emailbody_referral_commision_notification" */ ?>
<?php
/*%%SmartyHeaderCode:1038590527636b6fa7d54af0_73283994%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b22dae1eb645238796be578d1b985550bbf18781' => 
    array (
      0 => 'my:_emailbody_referral_commision_notification',
      1 => 1667985319,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '1038590527636b6fa7d54af0_73283994',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_636b6fa7d60df0_82332587',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_636b6fa7d60df0_82332587')) {
function content_636b6fa7d60df0_82332587 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1038590527636b6fa7d54af0_73283994';
?>
Dear #name# (#username#)

You have received a referral comission of $#amount# #currency# from the #ref_name# (#ref_username#) deposit.

Thank you.<?php }
}
?>