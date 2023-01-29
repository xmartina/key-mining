<?php /* Smarty version 3.1.27, created on 2023-01-13 10:45:48
         compiled from "/home/multistream6/domains/keymining.ltd/public_html/app/tmpl/withdraw_principal.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:87038398963c1365cd54367_74651787%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5d6f9e497eb1e745f57be40cdba63be2df8bbac' => 
    array (
      0 => '/home/multistream6/domains/keymining.ltd/public_html/app/tmpl/withdraw_principal.tpl',
      1 => 1442742698,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87038398963c1365cd54367_74651787',
  'variables' => 
  array (
    'fatal' => 0,
    'say' => 0,
    'preview' => 0,
    'deposit' => 0,
    'amount' => 0,
    'currency_sign' => 0,
    'type' => 0,
    'fee' => 0,
    'to_balance' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63c1365cdf9b47_75774561',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63c1365cdf9b47_75774561')) {
function content_63c1365cdf9b47_75774561 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/multistream6/domains/keymining.ltd/public_html/app/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '87038398963c1365cd54367_74651787';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<h3>Withdraw Principal:</h3><br><br>
<?php if ($_smarty_tpl->tpl_vars['fatal']->value) {?> <?php if ($_smarty_tpl->tpl_vars['fatal']->value == 'deposit_not_found') {?>Wrong deposit ID has been provided<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['fatal']->value == 'withdraw_forbidden') {?>Can not process principal withdrawal for this 
plan<?php }?> <?php if ($_smarty_tpl->tpl_vars['fatal']->value == 'too_early_withdraw') {?>Can not process principal withdrawal 
yet<?php }?> <?php if ($_smarty_tpl->tpl_vars['fatal']->value == 'too_late_withdraw') {?>Can not process principal withdrawal 
longer<?php }?> <?php if ($_smarty_tpl->tpl_vars['fatal']->value == 'withdraw_complete') {?>Withdrawal has been sucessfully 
completed.<?php }?> <?php } else { ?> <?php if ($_smarty_tpl->tpl_vars['say']->value == 'too_big_amount') {?>You have no such amount on 
this deposit.<br>
<br><?php }?>
<?php if ($_smarty_tpl->tpl_vars['say']->value == 'too_small_amount') {?>Provided amount is too small.<br><br><?php }?>

<?php if ($_smarty_tpl->tpl_vars['preview']->value == 1) {?>

<form method=post name=withdraw_form>
<input type=hidden name=a value=withdraw_principal>
<input type=hidden name=action value=withdraw>
<input type=hidden name=deposit value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['id']);?>
>
<input type=hidden name=amount value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['amount']->value);?>
>

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Withdrawal from <b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['deposit']);?>
</b> deposit from the <b><?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['type']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</b></td>
</tr>
<tr>
      <td>You are withdrawing <b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['amount']->value);?>
</b>. Our fee is <b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['type']->value['withdraw_principal_percent']);?>
%</b> 
        that is <b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['fee']->value);?>
</b>.</td>
</tr>
<tr>
 <td>Actually you will acquire the total of <b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['to_balance']->value);?>
</b> on your balance.</td>
</tr>
<tr>
 <td><br><input type=submit value="Confirm" class=sbmt></td>
</tr></table>
</form>

<?php } else { ?>

<?php echo '<script'; ?>
>

function withdraw()
{
  var max_amount = new Number('<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['deposit']);?>
');
  var percent = new Number('<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['type']->value['withdraw_principal_percent']);?>
');
  var out_val = new Number(document.withdraw_form.amount.value.replace(",","."));
  if (isNaN(out_val))
  { out_val = 0; }
  out_val = Math.floor(out_val * 100) / 100;

  if (out_val > max_amount)
  {
    out_val = max_amount;
    document.withdraw_form.amount.value = out_val;
  }

  if (out_val < 0)
  {
    document.withdraw_form.amount.value = '';
    document.withdraw_form.quote.value = 0;
  }
  else
  {
    var fee = (Math.round(Math.floor(out_val * percent)) / 100);
    if (fee <= 0.01) fee = 0.01;
    out_val = out_val - fee;
    if (out_val < 0) out_val = 0;
    out_val = (Math.round(Math.floor(out_val * 100)) / 100);
    document.withdraw_form.quote.value = out_val;
  }
}

<?php echo '</script'; ?>
>

<form method=post name=withdraw_form>
<input type=hidden name=a value=withdraw_principal>
<input type=hidden name=action value=withdraw_preview>
<input type=hidden name=deposit value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['id']);?>
>

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td colspan=2>Withdrawal from <b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['deposit']);?>
</b> deposit from the <b><?php echo smarty_modifier_myescape(htmlspecialchars($_smarty_tpl->tpl_vars['type']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</b></td>
</tr>
<tr>
 <td colspan=2>Withdrawal fee is <b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['type']->value['withdraw_principal_percent']);?>
% or <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
0.01 as minimal</b></b></td>
</tr>
<tr>
 <td width=1% nowrap>Withdrawal (<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
):</td>
 <td><input type=text name=amount value="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['deposit']->value['deposit']);?>
" class=inpts size=15 onchange="withdraw()" onkeyup="withdraw()"
      onfocusout="withdraw()" onactivate="withdraw()" ondeactivate="withdraw()"></td>
</tr>
<tr>
 <td width=1% nowrap>You will get on you account balance (<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
):</td>
 <td><input type=text name=quote readonly class=inpts size=15></td>
</tr>
<tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Withdraw" class=sbmt></td>
</tr></table>
</form>

<?php echo '<script'; ?>
>
withdraw();
<?php echo '</script'; ?>
>
<?php }?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>