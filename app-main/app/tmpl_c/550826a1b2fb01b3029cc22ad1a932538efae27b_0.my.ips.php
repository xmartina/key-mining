<?php /* Smarty version 3.1.27, created on 2022-11-17 23:00:27
         compiled from "my:ips" */ ?>
<?php
/*%%SmartyHeaderCode:19514719666376bd0b3226a3_27282184%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '550826a1b2fb01b3029cc22ad1a932538efae27b' => 
    array (
      0 => 'my:ips',
      1 => 1668726027,
      2 => 'my',
    ),
  ),
  'nocache_hash' => '19514719666376bd0b3226a3_27282184',
  'variables' => 
  array (
    'ips' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6376bd0b33d937_71199279',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6376bd0b33d937_71199279')) {
function content_6376bd0b33d937_71199279 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19514719666376bd0b3226a3_27282184';
?>
 <?php echo $_smarty_tpl->getSubTemplate ("my:admin_header", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <h3>Check IPs for double usage:</h3> <a href="?a=check_ips&mode=2" style="float:right">Switch to Experimental Mode</a> <br> <table class=list> <tr> <th>IP</th> <th>Quantity</th> </tr> <?php
$_from = $_smarty_tpl->tpl_vars['ips']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?> <tr> <td><a href=?a=check_ips&ip=<?php echo $_smarty_tpl->tpl_vars['i']->value['ip'];?>
><?php echo $_smarty_tpl->tpl_vars['i']->value['ip'];?>
</a></td> <td align=right><a href=?a=check_ips&ip=<?php echo $_smarty_tpl->tpl_vars['i']->value['ip'];?>
><?php echo $_smarty_tpl->tpl_vars['i']->value['q'];?>
</a></td> </tr> <?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
if (!$_smarty_tpl->tpl_vars['i']->_loop) {
?> <tr><td colspan=2 align=center>No double usage IP found</td></tr> <?php
}
?> </table> <?php echo $_smarty_tpl->getSubTemplate ("my:admin_footer", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 <?php }
}
?>