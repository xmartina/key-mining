<?php /* Smarty version 3.1.27, created on 2022-11-17 15:19:51
         compiled from "my:editaccount_2" */ ?>
<?php
/*%%SmartyHeaderCode:17964654863765117d22fb4_35381343%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3343014239e3e2b8908ea06697548cf733a73735' => 
    array (
      0 => 'my:editaccount_2',
      1 => 1668698391,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '17964654863765117d22fb4_35381343',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63765117d2f386_16869402',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63765117d2f386_16869402')) {
function content_63765117d2f386_16869402 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17964654863765117d22fb4_35381343';
?>
 <tr> <td>E-mail address:</td> <td><input type=text name=email value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
" class=inpts size=30></td> </tr><?php }
}
?>