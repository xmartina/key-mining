<?php /* Smarty version 3.1.27, created on 2022-12-23 22:23:17
         compiled from "my:withdraw_details_table" */ ?>
<?php
/*%%SmartyHeaderCode:198079710763a62a555e68b4_96480249%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2d7b11418655459885851f41460085ebbd5fe47' => 
    array (
      0 => 'my:withdraw_details_table',
      1 => 1671834197,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '198079710763a62a555e68b4_96480249',
  'variables' => 
  array (
    'user' => 0,
    'exchange_system_name' => 0,
    'trans' => 0,
    'account' => 0,
    'converted_to_withdraw' => 0,
    'settings' => 0,
    'orig_fiat' => 0,
    'to_withdraw' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63a62a555f4fc0_39502913',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63a62a555f4fc0_39502913')) {
function content_63a62a555f4fc0_39502913 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '198079710763a62a555e68b4_96480249';
?>
 <tr> <th>User:</th> <td><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
 (<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
)</td> </tr> <tr> <th>Payment System:</th> <td><?php echo $_smarty_tpl->tpl_vars['exchange_system_name']->value;?>
 <img src="images/<?php echo $_smarty_tpl->tpl_vars['trans']->value['ec'];?>
.gif" width=44 height=17 align=absmiddle></td> </tr> <tr> <th>Payee Account:</th> <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['account']->value)===null||$tmp==='' ? "n/a" : $tmp);?>
</td> </tr> <?php if ($_smarty_tpl->tpl_vars['converted_to_withdraw']->value) {?>  <tr> <th>Amount:</th> <td><?php echo $_smarty_tpl->tpl_vars['settings']->value['currency_sign'];
echo $_smarty_tpl->tpl_vars['converted_to_withdraw']->value;?>
</td> </tr>  <tr> <th><?php echo $_smarty_tpl->tpl_vars['orig_fiat']->value;?>
 Amount:</th> <td><?php echo $_smarty_tpl->tpl_vars['to_withdraw']->value;?>
</td> </tr> <?php } else { ?> <tr> <th>Amount:</th> <td><?php echo $_smarty_tpl->tpl_vars['settings']->value['currency_sign'];
echo $_smarty_tpl->tpl_vars['to_withdraw']->value;?>
</td> </tr> <?php }?> <tr> <th>User Comment:</th> <td><?php echo $_smarty_tpl->tpl_vars['trans']->value['description'];?>
</td> </tr><?php }
}
?>