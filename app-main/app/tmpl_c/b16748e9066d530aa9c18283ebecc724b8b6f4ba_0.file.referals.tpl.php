<?php /* Smarty version 3.1.27, created on 2022-11-14 07:29:08
         compiled from "/home/multistream6/domains/keymining.ltd/public_html/app/tmpl/referals.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4541440706371ee4403a962_38139778%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b16748e9066d530aa9c18283ebecc724b8b6f4ba' => 
    array (
      0 => '/home/multistream6/domains/keymining.ltd/public_html/app/tmpl/referals.tpl',
      1 => 1551310512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4541440706371ee4403a962_38139778',
  'variables' => 
  array (
    'upline' => 0,
    'total_ref' => 0,
    'active_ref' => 0,
    'currency_sign' => 0,
    'commissions' => 0,
    'settings' => 0,
    'userinfo' => 0,
    'month' => 0,
    'frm' => 0,
    'day' => 0,
    'year' => 0,
    'show_refstat' => 0,
    'refstat' => 0,
    'show_referals' => 0,
    'referals' => 0,
    'cnt_other' => 0,
    'cnt_other_active' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6371ee440bfdd2_34100878',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6371ee440bfdd2_34100878')) {
function content_6371ee440bfdd2_34100878 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/multistream6/domains/keymining.ltd/public_html/app/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '4541440706371ee4403a962_38139778';
echo $_smarty_tpl->getSubTemplate ("mheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<style>
body {
    color: #000!important;
}
</style>
<br>
<h3>Your Referrals:</h3><br>
<?php if ($_smarty_tpl->tpl_vars['upline']->value['email'] != '') {?>
Your upline is <a href=mailto:<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['upline']->value['email']);?>
><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['upline']->value['name']);?>
</a><br><br>
<?php }?>
<br>
<table width=300 cellspacing=1 cellpadding=1>
<tr>
  <td class=item>Referrals:</td>
  <td class=item><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['total_ref']->value);?>
</td>
</tr><tr>
  <td class=item>Active referrals:</td>
  <td class=item><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['active_ref']->value);?>
</td>
</tr><tr>
  <td class=item>Total referral commission:</td>
  <td class=item><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['commissions']->value);?>
</td>
</tr>
</table>
<h3 class="title">Our Custom Banners</h3><br>
<h4>Your Unique Referral Link: <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/?ref=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
</h4>
<br>
<div style="text-align:left;">
<h4>125x125 banner</h4><br>
<img src="styles/banners/banner_125.gif" alt="" width="125" height="125" /><br /><br>

<textarea  class="reftextarea" cols=35 rows=4>
<a href=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/?ref=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
><img src="styles/banners/banner_125" alt="" width="125" height="125" /></a>
</textarea><br><br>

<h4>468x60 banner</h4><br>    
<img src="styles/banners/banner_468.gif" alt="" width="468" height="60" /><br /><br>

<textarea  class="reftextarea" cols=35 rows=4>
<a href=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/?ref=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
><img src="styles/banners/banner_468.gif" alt="" width="468" height="60" /></a>
</textarea>
<br><br>

<h4>728x90 banner</h4><br>
<img src="styles/banners/banner_728.gif" width=728 height=90><br><br>
<textarea  class="reftextarea" cols=35 rows=4>
<a href=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/?ref=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
><img src="styles/banners/banner_728.gif" alt="" width="728" height="90" /></a>
</textarea><br><br>

</div>
<br>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_refstat']) {?>

<h1>Referral ins/signups</h1><br>
<table cellspacing=0 cellpadding=1 border=0>
<form method=post name=opts>
<input type=hidden name=a value=referals>
 <td align=right>
From: </td>
<td>
<select name=month_from class=inpts>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['month_from'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['name'] = 'month_from';
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['month']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['month_from']['total']);
?>
<option value=<?php echo smarty_modifier_myescape($_smarty_tpl->getVariable('smarty')->value['section']['month_from']['index']+1);?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['month_from']['index']+1 == $_smarty_tpl->tpl_vars['frm']->value['month_from']) {?>selected<?php }?>><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['month']->value[$_smarty_tpl->getVariable('smarty')->value['section']['month_from']['index']]);?>

<?php endfor; endif; ?>
</select> &nbsp;
<select name=day_from class=inpts>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['day_from'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['name'] = 'day_from';
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['day']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['day_from']['total']);
?>
<option value=<?php echo smarty_modifier_myescape($_smarty_tpl->getVariable('smarty')->value['section']['day_from']['index']+1);?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['day_from']['index']+1 == $_smarty_tpl->tpl_vars['frm']->value['day_from']) {?>selected<?php }?>><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['day']->value[$_smarty_tpl->getVariable('smarty')->value['section']['day_from']['index']]);?>

<?php endfor; endif; ?>
</select> &nbsp;
<select name=year_from class=inpts>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['year_from'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['name'] = 'year_from';
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['year']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['year_from']['total']);
?>
<option value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['year']->value[$_smarty_tpl->getVariable('smarty')->value['section']['year_from']['index']]);?>
 <?php if ($_smarty_tpl->tpl_vars['year']->value[$_smarty_tpl->getVariable('smarty')->value['section']['year_from']['index']] == $_smarty_tpl->tpl_vars['frm']->value['year_from']) {?>selected<?php }?>><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['year']->value[$_smarty_tpl->getVariable('smarty')->value['section']['year_from']['index']]);?>

<?php endfor; endif; ?>
</select>
</td>
 <td rowspan=2>
	&nbsp; <input type=submit value="Go" class=sbmt>
 </td>
</tr>
<tr><td align=right>To:</td><td> <select name=month_to class=inpts>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['month_to'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['name'] = 'month_to';
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['month']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['month_to']['total']);
?>
<option value=<?php echo smarty_modifier_myescape($_smarty_tpl->getVariable('smarty')->value['section']['month_to']['index']+1);?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['month_to']['index']+1 == $_smarty_tpl->tpl_vars['frm']->value['month_to']) {?>selected<?php }?>><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['month']->value[$_smarty_tpl->getVariable('smarty')->value['section']['month_to']['index']]);?>

<?php endfor; endif; ?>
</select> &nbsp;
<select name=day_to class=inpts>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['day_to'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['name'] = 'day_to';
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['day']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['day_to']['total']);
?>
<option value=<?php echo smarty_modifier_myescape($_smarty_tpl->getVariable('smarty')->value['section']['day_to']['index']+1);?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['day_to']['index']+1 == $_smarty_tpl->tpl_vars['frm']->value['day_to']) {?>selected<?php }?>><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['day']->value[$_smarty_tpl->getVariable('smarty')->value['section']['day_to']['index']]);?>

<?php endfor; endif; ?>
</select> &nbsp;

<select name=year_to class=inpts>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['year_to'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['name'] = 'year_to';
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['year']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['year_to']['total']);
?>
<option value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['year']->value[$_smarty_tpl->getVariable('smarty')->value['section']['year_to']['index']]);?>
 <?php if ($_smarty_tpl->tpl_vars['year']->value[$_smarty_tpl->getVariable('smarty')->value['section']['year_to']['index']] == $_smarty_tpl->tpl_vars['frm']->value['year_to']) {?>selected<?php }?>><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['year']->value[$_smarty_tpl->getVariable('smarty')->value['section']['year_to']['index']]);?>

<?php endfor; endif; ?>
</select>

 </td>
</tr></form></table>


<table width=300 celspacing=1 cellpadding=1 border=0>
<tr>
 <td class=inheader>Date</td>
 <td class=inheader>Ins</td>
 <td class=inheader>Signups</td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['show_refstat']->value) {?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['s'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['s']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['name'] = 's';
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['refstat']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total']);
?>
<tr>
 <td class=item align=center><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['refstat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['date']);?>
</b></td>
 <td class=item align=right><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['refstat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['income']);?>
</td>
 <td class=item align=right><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['refstat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['reg']);?>
</td>
</tr>
<?php endfor; endif; ?>
<?php } else { ?>
<tr>
 <td class=item align=center colspan=3>No statistics found for this period.</td>
</tr>
<?php }?>
</table><br>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_referals']) {?>
<?php if ($_smarty_tpl->tpl_vars['show_referals']->value) {?>
<h1>Your referrals:</h1>
<table cellspacing=1 cellpadding=1 border=0>
<tr>
 <td class=inheader>Nickname</td>
 <td class=inheader>E-mail</td>
 <td class=inheader>Status</td>
</tr>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['s'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['s']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['name'] = 's';
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['referals']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['s']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['s']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['s']['total']);
?>
<tr>
 <td class=item><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['referals']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['username']);?>
</b></td>
 <td class=item><a href=mailto:<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['referals']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['email']);?>
><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['referals']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['email']);?>
</a></td>
 <td class=item><?php if ($_smarty_tpl->tpl_vars['referals']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['q_deposits'] > 0) {?>Deposited<?php } else { ?>No deposit yet<?php }?></td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['referals']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['ref_stats']) {?>
<tr>
 <td colspan=3>
  User referrals:
  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['l'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['l']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['name'] = 'l';
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['referals']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['ref_stats']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total']);
?>
   <nobr><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['referals']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['ref_stats'][$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['cnt_active']);?>
 active of <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['referals']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['ref_stats'][$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['cnt']);?>
 on level <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['referals']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['ref_stats'][$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['level']);
if (!$_smarty_tpl->getVariable('smarty')->value['section']['l']['last']) {?>;<?php }?></nobr>
  <?php endfor; endif; ?>
 </td>
</tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['referals']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['came_from']) {?>
<tr><td colspan=3>
<a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['referals']->value[$_smarty_tpl->getVariable('smarty')->value['section']['s']['index']]['came_from']);?>
" target=_blank>[User came from]</a>
</td></tr>
<?php }?>
<?php endfor; endif; ?>
<tr>
 <td colspan=3>&nbsp;</td>
</tr>
<tr>
 <td colspan=3><b>2-10 level referrals:</b> <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['cnt_other']->value);?>
</td>
</tr>
<tr>
 <td colspan=3><b>2-10 level active referrals:</b> <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['cnt_other_active']->value);?>
</td>
</tr>
</table>
<?php }?>
<?php }?>


<?php echo $_smarty_tpl->getSubTemplate ("mfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>