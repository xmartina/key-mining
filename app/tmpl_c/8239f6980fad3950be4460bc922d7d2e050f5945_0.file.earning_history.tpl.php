<?php /* Smarty version 3.1.27, created on 2023-01-27 10:56:24
         compiled from "/home/multistream6/domains/keymining.ltd/public_html/app/tmpl/earning_history.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:66813524663d3add8ecd8b4_55256654%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8239f6980fad3950be4460bc922d7d2e050f5945' => 
    array (
      0 => '/home/multistream6/domains/keymining.ltd/public_html/app/tmpl/earning_history.tpl',
      1 => 1465408442,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66813524663d3add8ecd8b4_55256654',
  'variables' => 
  array (
    'current_page' => 0,
    'options' => 0,
    'ecs' => 0,
    'frm' => 0,
    'month' => 0,
    'day' => 0,
    'year' => 0,
    'settings' => 0,
    'qtrans' => 0,
    'trans' => 0,
    'currency_sign' => 0,
    'periodcredit' => 0,
    'perioddebit' => 0,
    'periodbalance' => 0,
    'allcredit' => 0,
    'alldebit' => 0,
    'allbalance' => 0,
    'periodsum' => 0,
    'allsum' => 0,
    'colpages' => 0,
    'prev_page' => 0,
    'pages' => 0,
    'next_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63d3add9043438_12572983',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63d3add9043438_12572983')) {
function content_63d3add9043438_12572983 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/multistream6/domains/keymining.ltd/public_html/app/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '66813524663d3add8ecd8b4_55256654';
echo $_smarty_tpl->getSubTemplate ("mheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<?php echo '<script'; ?>
 language=javascript>
function go(p)
{
  document.opts.page.value = p;
  document.opts.submit();
}
<?php echo '</script'; ?>
>


<table cellspacing=0 cellpadding=0 border=0 width=100<?php echo '%>';?>
<tr>
 <td colspan=3>
	<h1>History:</h1>
 </td>
</tr>
<tr>
<form method=post name=opts>
<input type=hidden name=a value=earnings>
<input type=hidden name=page value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['current_page']->value);?>
>
 <td>
   <select name=type class=inpts onchange="document.opts.submit();">
<option value="">All transactions</option>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['opt'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['opt']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['name'] = 'opt';
$_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['options']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['opt']['total']);
?>
<option value="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opt']['index']]['type']);?>
" <?php if ($_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opt']['index']]['selected']) {?>selected<?php }?>><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['options']->value[$_smarty_tpl->getVariable('smarty')->value['section']['opt']['index']]['type_name']);?>
</option>
<?php endfor; endif; ?>
   </select>
<?php if ($_smarty_tpl->tpl_vars['ecs']->value) {?>
<br><img src=images/q.gif width=1 height=4><br>
   <select name=ec class=inpts>
     <option value=-1>All eCurrencies</option>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ec'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ec']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['name'] = 'ec';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ecs']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ec']['total']);
?>
 <option value=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ecs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ec']['index']]['id']);?>
 <?php if ($_smarty_tpl->tpl_vars['frm']->value['ec'] == $_smarty_tpl->tpl_vars['ecs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ec']['index']]['id']) {?>selected<?php }?>><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ecs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ec']['index']]['name']);?>
</option>
<?php endfor; endif; ?>
   </select>
<?php }?>
 </td>
 <td align=right>
From: <select name=month_from class=inpts>
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
</select><br><img src=images/q.gif width=1 height=4><br>

To: <select name=month_to class=inpts>
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
 <td>
	&nbsp; <input type=submit value="Go" class=sbmt>
 </td>
</tr></table>
</form>
<br><br>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['use_history_balance_mode']) {?>
<table cellspacing=1 cellpadding=2 border=0 width=100<?php echo '%>';?>
<tr>
 <td class=inheader>Date</td>
 <td class=inheader>Type</td>
 <td class=inheader>Credit</td>
 <td class=inheader>Debit</td>
 <td class=inheader>Balance</td>
 <td class=inheader>P.S.</td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['qtrans']->value > 0) {?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['trans'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['name'] = 'trans';
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['trans']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['total']);
?>
<tr>
 <td align=center nowrap><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['d']);?>
</td>
 <td><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['transtype']);?>
</b><br><small class=gray><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['description']);?>
</small></td>
 <td align=right><b>
  <?php if ($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['debitcredit'] == 0) {?>
  <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['actual_amount']);?>

  </b>
  <?php } else { ?>
  &nbsp;
  <?php }?>
 </td>
 <td align=right><b>
  <?php if ($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['debitcredit'] == 1) {?>
  <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['actual_amount']);?>

  </b> 
  <?php } else { ?>
  &nbsp;
  <?php }?>
 </td>
 <td align=right><b>
  <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['balance']);?>

 </td>
 <td><img src="images/<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['ec']);?>
.gif" align=absmiddle hspace=1 height=17></td>
</tr>
<?php endfor; endif; ?>
<?php } else { ?>
<tr>
 <td colspan=6 align=center>No transactions found</td>
</tr>
<?php }?>
<tr><td colspan=3>&nbsp;</td>

<?php if ($_smarty_tpl->tpl_vars['qtrans']->value > 0) {?>
<tr>
 <td colspan=2>Total for this period:</td>
 <td align=right nowrap><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['periodcredit']->value);?>
</b></td>
 <td align=right nowrap><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['perioddebit']->value);?>
</b></td>
 <td align=right nowrap><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['periodbalance']->value);?>
</b></td>
</tr>
<?php }?>
<tr>
 <td colspan=2>Total:</td>
 <td align=right nowrap><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['allcredit']->value);?>
</b></td>
 <td align=right nowrap><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['alldebit']->value);?>
</b></td>
 <td align=right nowrap><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['allbalance']->value);?>
</b></td>
</tr>
</table>
<?php } else { ?>
<table cellspacing=1 cellpadding=2 border=0 width=100<?php echo '%>';?>
<tr>
 <td class=inheader><b>Type</b></td>
 <td class=inheader width=200><b>Amount</b></td>
 <td class=inheader width=170><b>Date</b></td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['qtrans']->value > 0) {?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['trans'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['name'] = 'trans';
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['trans']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['trans']['total']);
?>
<tr>
 <td><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['transtype']);?>
</b></td>
 <td width=200 align=right><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
 <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['actual_amount']);?>
</b> <img src="images/<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['ec']);?>
.gif" align=absmiddle hspace=1 height=17></td>
 <td width=170 align=center valign=bottom><b><small><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['d']);?>
</small></b></td>
</tr>
<tr>
 <td colspan=3 class=gray><small><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['trans']->value[$_smarty_tpl->getVariable('smarty')->value['section']['trans']['index']]['description']);?>
</small></td>
</tr>
<?php endfor; endif; ?>
<?php } else { ?>
<tr>
 <td colspan=3 align=center>No transactions found</td>
</tr>
<?php }?>
<tr><td colspan=3>&nbsp;</td>

<?php if ($_smarty_tpl->tpl_vars['qtrans']->value > 0) {?>
<tr>
    <td colspan=2>For this period:</td>
 <td align=right><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
 <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['periodsum']->value);?>
</b></td>
</tr>
<?php }?>
<tr>
    <td colspan=2>Total:</td>
 <td align=right><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
 <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['allsum']->value);?>
</b></td>
</tr>
</table>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['colpages']->value > 1) {?>
<center>
<?php if ($_smarty_tpl->tpl_vars['prev_page']->value > 0) {?>
 <a href="javascript:go('<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['prev_page']->value);?>
')">&lt;&lt;</a>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['p'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['p']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['name'] = 'p';
$_smarty_tpl->tpl_vars['smarty']->value['section']['p']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
<?php if ($_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['current'] == 1) {?>
<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['page']);?>

<?php } else { ?>
 <a href="javascript:go('<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['page']);?>
')"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['p']['index']]['page']);?>
</a>
<?php }?>
<?php endfor; endif; ?>
<?php if ($_smarty_tpl->tpl_vars['next_page']->value > 0) {?>
 <a href="javascript:go('<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['next_page']->value);?>
')">&gt;&gt;</a>
<?php }?>
</center>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("mfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>