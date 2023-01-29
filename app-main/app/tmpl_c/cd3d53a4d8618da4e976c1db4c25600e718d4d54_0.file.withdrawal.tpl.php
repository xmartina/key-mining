<?php /* Smarty version 3.1.27, created on 2022-11-18 12:54:11
         compiled from "/home/multistream6/domains/keymining.ltd/public_html/app/tmpl/withdrawal.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18119295546377807322ff73_63459763%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd3d53a4d8618da4e976c1db4c25600e718d4d54' => 
    array (
      0 => '/home/multistream6/domains/keymining.ltd/public_html/app/tmpl/withdrawal.tpl',
      1 => 1551245266,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18119295546377807322ff73_63459763',
  'variables' => 
  array (
    'say' => 0,
    'batch' => 0,
    'fatal' => 0,
    'settings' => 0,
    'currency_sign' => 0,
    'preview' => 0,
    'amount' => 0,
    'ec' => 0,
    'comment' => 0,
    'currency' => 0,
    'to_withdraw' => 0,
    'account' => 0,
    'userinfo' => 0,
    'ab_formated' => 0,
    'ps' => 0,
    'hold' => 0,
    'pay_accounts' => 0,
    'mpay_accounts' => 0,
    'p' => 0,
    'withdraw_systems' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_637780732c5331_38362995',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_637780732c5331_38362995')) {
function content_637780732c5331_38362995 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/multistream6/domains/keymining.ltd/public_html/app/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '18119295546377807322ff73_63459763';
echo $_smarty_tpl->getSubTemplate ("mheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<style>
body {
    color: #000!important;
}
</style>
<h3>Ask for withdrawal:</h3><br>

<?php if ($_smarty_tpl->tpl_vars['say']->value == 'processed') {?>
<?php if ($_smarty_tpl->tpl_vars['batch']->value == '') {?>Withdrawal request saved.<?php } else { ?> Withdrawal processed. Batch id: <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['batch']->value);
}?>
<br><br>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['fatal']->value) {?>

<?php if ($_smarty_tpl->tpl_vars['fatal']->value == 'one_per_month') {?>
You can withdraw once per month only.
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['fatal']->value == 'times_limit') {?>
You can withdraw <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['limit_withdraw_period_times']);?>
 per <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['limit_withdraw_period_date']);?>
 only.
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['fatal']->value == 'withdrawal_percent_reached') {?>
Withdrawl percent has been reached. We have stopped all withdrawals.
<?php }?>

<?php } else { ?>

<?php if ($_smarty_tpl->tpl_vars['say']->value == 'on_hold') {?>
Sorry, this amount on hold now.<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value == 'zero') {?>
Sorry, you can't request a withdraw smaller than <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
0.00 only<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value == 'less_min') {?>
Sorry, you can request not less than <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['min_withdrawal_amount']);?>
<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value == 'less_min_bankwire') {?>
Sorry, you can request not less than <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
1000 for BankWire withdrawal<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value == 'greater_max') {?>
Sorry, you can request not greater than <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['max_withdrawal_amount']);?>
<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value == 'daily_limit') {?>
Sorry, you have exceeded a daily limit<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value == 'not_enought') {?>
Sorry, you have requested the amount larger than the one on your balance.<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value == 'invalid_transaction_code') {?>
You have entered the invalid transaction code.<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value == 'no_deposits') {?>
You have not done any deposits yet. Withdrawal function will be available after a deposit.
<br><br>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value == 'no_active_deposits') {?>
You must have active deposit to withdraw.
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['preview']->value) {?>

<form method=post>
<input type=hidden name=a value=withdraw>
<input type=hidden name=action value=withdraw>
<input type=hidden name=amount value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['amount']->value);?>
>
<input type=hidden name=ec value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ec']->value);?>
>
<input type=hidden name=comment value="<?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value, ENT_QUOTES, 'UTF-8', true));?>
">

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td colspan=2>You are withdrawing <b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['amount']->value);?>
</b> of <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency']->value);?>
. 
<?php if ($_smarty_tpl->tpl_vars['settings']->value['withdrawal_fee'] > 0 || $_smarty_tpl->tpl_vars['settings']->value['withdrawal_fee_min'] > 0) {?> Our fee is 
<?php if ($_smarty_tpl->tpl_vars['settings']->value['withdrawal_fee'] > 0) {?><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['withdrawal_fee']);?>
%</b><?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['withdrawal_fee'] > 0 && $_smarty_tpl->tpl_vars['settings']->value['withdrawal_fee_min'] > 0) {?> or <?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['withdrawal_fee_min'] > 0) {?> <b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['withdrawal_fee_min']);?>
</b><?php if ($_smarty_tpl->tpl_vars['settings']->value['withdrawal_fee'] > 0) {?> as a minimum<?php }
}?>
.
<?php } else { ?>
We have no fee for this operation. 
<?php }?>
</td>
</tr>
<tr>
 <td colspan=2>Actually you will acquire the total of <b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['to_withdraw']->value);?>
</b> on your <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency']->value);?>
 account <?php if ($_smarty_tpl->tpl_vars['account']->value) {
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['account']->value);
}?>.</td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['comment']->value) {?>
<tr>
 <td colspan=2>Your comments: <?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value, ENT_QUOTES, 'UTF-8', true));?>
</td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['use_transaction_code'] && $_smarty_tpl->tpl_vars['userinfo']->value['transaction_code']) {?>
<tr>
 <td colspna=2>&nbsp;</td>
</tr>
<tr>
 <td width=1% nowrap>Transaction Code:</td>
 <td width=99<?php echo '%>';?><input type="password" name="transaction_code" class=inpts size=15></td>
</tr>
<?php }?>
<tr>
 <td><br><input type=submit value="Confirm" class=sbmt></td>
</tr></table>
</form>


<?php } else { ?>


<form method=post>
<input type=hidden name=a value=withdraw>
<input type=hidden name=action value=preview>

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Account Balance:</td>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['total']);?>
</b></td>
</tr>
<tr><td>&nbsp;</td>
 <td> <small>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['p'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['name'] = 'p';
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ps']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total']);
?>
   <?php if ($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['balance'] > 0) {
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['balance']);?>
 of <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['name']);
if ($_smarty_tpl->tpl_vars['hold']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['amount'] > 0) {?> / <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['hold']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['amount']);?>
 on hold<?php }?><br><?php }?>
<?php endfor; endif; ?>
 </td>
</tr>
<tr>
 <td>Pending Withdrawals: </td>
 <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
<b><?php if ($_smarty_tpl->tpl_vars['ab_formated']->value['withdraw_pending'] != 0) {
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['withdraw_pending']);
} else { ?>0.00<?php }?></b></td>
</tr>

<?php
$_from = $_smarty_tpl->tpl_vars['pay_accounts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ps'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ps']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ps']->value) {
$_smarty_tpl->tpl_vars['ps']->_loop = true;
$foreach_ps_Sav = $_smarty_tpl->tpl_vars['ps'];
?>
<tr>
 <td>Your <?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
 Account:</td>
 <td><?php if ($_smarty_tpl->tpl_vars['ps']->value['account'] != '') {
echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['account'], ENT_QUOTES, 'UTF-8', true));
} else { ?><a href=?a=edit_account><i>not set</i></a><?php }?></td>
</tr>
<?php
$_smarty_tpl->tpl_vars['ps'] = $foreach_ps_Sav;
}
?>
<?php
$_from = $_smarty_tpl->tpl_vars['mpay_accounts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
<tr>
 <td>Your <?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
 Account:</td>
 <td>
<?php
$_from = $_smarty_tpl->tpl_vars['p']->value['accounts'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ps'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ps']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ps']->value) {
$_smarty_tpl->tpl_vars['ps']->_loop = true;
$foreach_ps_Sav = $_smarty_tpl->tpl_vars['ps'];
?>
 <?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
: <?php if ($_smarty_tpl->tpl_vars['ps']->value['value'] != '') {
echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['ps']->value['value'], ENT_QUOTES, 'UTF-8', true));
} else { ?><a href=?a=edit_account><i>not set</i></a><?php }?><br>
<?php
$_smarty_tpl->tpl_vars['ps'] = $foreach_ps_Sav;
}
?>
 </td>
</tr>
<?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>
</table>


<?php if ($_smarty_tpl->tpl_vars['withdraw_systems']->value) {?>
<table cellspacing=0 cellpadding=2 border=0 width=200>
<tr>
 <td colspan=2>&nbsp;</td>
</tr>
<tr>
 <td>Select eCurrency:</td>
 <td><select name=ec class=inpts>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['p'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['name'] = 'p';
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['withdraw_systems']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['p']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['p']['total']);
?>
   <option value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['withdraw_systems']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['id']);?>
><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['withdraw_systems']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['name']);?>
</option>
<?php endfor; endif; ?>
     </select>
 </td>
</tr><tr>
 <td>Withdrawal (<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
):</td>
 <td><input type=text name=amount value="10.00" class=inpts size=15></td>
</tr><tr>
 <td colspan=2><textarea name=comment class=inpts cols=45 rows=4>Your comment</textarea>
</tr>
<tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Request" class=sbmt></td>
</tr></table>
<?php } else { ?>
<br><br>
You have no funds to withdraw.
<?php }?>
</form>

<?php }?>

<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("mfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>