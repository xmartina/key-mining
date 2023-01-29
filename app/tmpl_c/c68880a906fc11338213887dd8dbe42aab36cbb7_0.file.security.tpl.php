<?php /* Smarty version 3.1.27, created on 2023-01-17 11:14:09
         compiled from "/home/multistream6/domains/keymining.ltd/public_html/app/tmpl/security.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:166961157963c683010ef3b0_87555868%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c68880a906fc11338213887dd8dbe42aab36cbb7' => 
    array (
      0 => '/home/multistream6/domains/keymining.ltd/public_html/app/tmpl/security.tpl',
      1 => 1551244960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166961157963c683010ef3b0_87555868',
  'variables' => 
  array (
    'security' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63c68301114b44_57471953',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63c68301114b44_57471953')) {
function content_63c68301114b44_57471953 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '166961157963c683010ef3b0_87555868';
echo $_smarty_tpl->getSubTemplate ("mheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<style>
body {
    color: #000!important;
}
</style>

<h3>Advanced login security settings:</h3><br><br>

<form method=post>
<input type=hidden name=a value="security">
<input type=hidden name=action value="save">
Detect IP Address Change Sensitivity<br>
<input type=radio name=ip value=disabled <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_ip'] == 'disabled') {?>checked<?php }?>>Disabled<br>
<input type=radio name=ip value=medium <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_ip'] == 'medium') {?>checked<?php }?>>Medium<br>
<input type=radio name=ip value=high <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_ip'] == 'high') {?>checked<?php }?>>High<br><br>

Detect Browser Change<br>
<input type=radio name=browser value=disabled <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_browser'] == 'disabled') {?>checked<?php }?>>Disabled<br>
<input type=radio name=browser value=enabled <?php if ($_smarty_tpl->tpl_vars['security']->value['detect_browser'] == 'enabled') {?>checked<?php }?>>Enabled<br><br>
<input type=submit value="Set" class=sbmt>
</form>


<?php echo $_smarty_tpl->getSubTemplate ("mfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>