<?php /* Smarty version 3.1.27, created on 2022-11-10 09:27:38
         compiled from "/home/multistream6/domains/keymining.ltd/public_html/app/tmpl/deposit.account.confirm.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1196238115636cc40a8c30e6_03718101%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c708f07117d1d83d3abb0c40976a318d6311d1c' => 
    array (
      0 => '/home/multistream6/domains/keymining.ltd/public_html/app/tmpl/deposit.account.confirm.tpl',
      1 => 1442742698,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1196238115636cc40a8c30e6_03718101',
  'variables' => 
  array (
    'ok' => 0,
    'deposit' => 0,
    'currency_sign' => 0,
    'type' => 0,
    'h_id' => 0,
    'famount' => 0,
    'compound' => 0,
    'max_deposit_less' => 0,
    'max_deposit_format' => 0,
    'wrong_paln' => 0,
    'not_enough_funds' => 0,
    'less_than_min' => 0,
    'plan_name' => 0,
    'min_amount' => 0,
    'on_hold' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_636cc40a936767_41935559',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_636cc40a936767_41935559')) {
function content_636cc40a936767_41935559 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/multistream6/domains/keymining.ltd/public_html/app/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '1196238115636cc40a8c30e6_03718101';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php if ($_smarty_tpl->tpl_vars['ok']->value == 1) {?>
<h3>Deposit Confirmation:</h3><br><br>

<table cellspacing=0 cellpadding=2 class="form deposit_confirm">
<tr>
 <th>Plan:</th>
 <td><?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['deposit']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</td>
</tr>
<tr>
 <th>Profit:</th>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['percent']);?>
% <?php if ($_smarty_tpl->tpl_vars['deposit']->value['period'] == 'end') {?>after <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['periods']);?>
 days<?php } else {
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['period_name']);?>
 for <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['periods']);?>
 <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['time_units']);
if ($_smarty_tpl->tpl_vars['deposit']->value['time_units'] != 1) {?>s<?php }?> <?php if ($_smarty_tpl->tpl_vars['deposit']->value['work_week']) {?>(mon-fri)<?php }
}?></td>
</tr>
<tr>
 <th>Principal Return:</th>
 <td><?php if ($_smarty_tpl->tpl_vars['deposit']->value['principal_return']) {?>Yes<?php if ($_smarty_tpl->tpl_vars['deposit']->value['principal_return_hold_percent'] > 0) {?>, with <?php echo smarty_modifier_myescape(number_format($_smarty_tpl->tpl_vars['deposit']->value['principal_return_hold_percent'],2));?>
% fee<?php }
} else { ?>No (included in profit)<?php }?></td>
</tr>
<tr>
 <th>Principal Withdraw:</th>
 <td><?php if ($_smarty_tpl->tpl_vars['deposit']->value['principal_withdraw']) {?>Available with <?php echo smarty_modifier_myescape(number_format($_smarty_tpl->tpl_vars['deposit']->value['principal_withdraw_hold_percent'],2));?>
% fee <?php if ($_smarty_tpl->tpl_vars['deposit']->value['principal_withdraw_duration_min']) {?>after <?php echo smarty_modifier_myescape(number_format($_smarty_tpl->tpl_vars['deposit']->value['principal_withdraw_duration_min']));?>
 days<?php }
if ($_smarty_tpl->tpl_vars['deposit']->value['principal_withdraw_duration_max']) {?> before <?php echo smarty_modifier_myescape(number_format($_smarty_tpl->tpl_vars['deposit']->value['principal_withdraw_duration_max']));?>
 days<?php }
} else { ?>Not available<?php }?></td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['deposit']->value['compound'] != -1) {?>
<tr>
 <th>Compound:</th>
 <td><?php echo smarty_modifier_myescape(number_format($_smarty_tpl->tpl_vars['deposit']->value['compound']));?>
%</td>
</tr>
<?php }?>
<tr>
 <th>Amount:</th>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['amount']);?>
</td>
</tr>
</table>

<form name=spend method=post>

<input type=hidden name=a value=deposit>
<input type=hidden name=action value=confirm>
<input type=hidden name=type value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['type']->value);?>
>
<input type=hidden name=h_id value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['h_id']->value);?>
>
<input type=hidden name=amount value="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['famount']->value);?>
">
<input type=hidden name=compound value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['compound']->value);?>
>
<br><input type=submit value="Process" class=sbmt> &nbsp;
<input type=button class=sbmt value="Cancel" onclick="document.location='?a=deposit'">
</form>

<?php } else { ?>
<?php if ($_smarty_tpl->tpl_vars['max_deposit_less']->value == 1) {?>Sorry, the maximal deposit is <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['max_deposit_format']->value);?>
.<br><?php }?>
<?php if ($_smarty_tpl->tpl_vars['wrong_paln']->value == 1) {?> The Plan does not exist. <?php }?> 
<?php if ($_smarty_tpl->tpl_vars['not_enough_funds']->value == 1) {?> You have not enough funds to complete the operation.<br><?php }?>
<?php if ($_smarty_tpl->tpl_vars['less_than_min']->value == 1) {?>The minimal spend amount for '<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['plan_name']->value);?>
' is <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['min_amount']->value);?>
.<br><?php }?>
<?php if ($_smarty_tpl->tpl_vars['on_hold']->value == 1) {?>Sorry, this amount on hold now.<br><?php }?>
<br>
Click <a href="<?php echo smarty_modifier_myescape(encurl("?a=deposit"));?>
">here</a> and try again.
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>