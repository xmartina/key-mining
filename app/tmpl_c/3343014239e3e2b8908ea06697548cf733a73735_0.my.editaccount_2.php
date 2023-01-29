<?php /* Smarty version 3.1.27, created on 2023-01-26 14:18:51
         compiled from "my:editaccount_2" */ ?>
<?php
/*%%SmartyHeaderCode:104891395763d28bcbe21423_75435936%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3343014239e3e2b8908ea06697548cf733a73735' => 
    array (
      0 => 'my:editaccount_2',
      1 => 1674742731,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '104891395763d28bcbe21423_75435936',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63d28bcbe290f0_60047164',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63d28bcbe290f0_60047164')) {
function content_63d28bcbe290f0_60047164 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '104891395763d28bcbe21423_75435936';
?>
 <tr> <td>E-mail address:</td> <td><input type=text name=email value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td> </tr><?php }
}
?>