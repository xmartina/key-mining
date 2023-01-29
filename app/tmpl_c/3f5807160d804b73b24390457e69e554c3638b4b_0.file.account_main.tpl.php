<?php /* Smarty version 3.1.27, created on 2023-01-28 05:30:18
         compiled from "/home/multistream6/domains/keymining.ltd/public_html/app/tmpl/account_main.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:175635904763d4b2ea5d96c8_34440854%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f5807160d804b73b24390457e69e554c3638b4b' => 
    array (
      0 => '/home/multistream6/domains/keymining.ltd/public_html/app/tmpl/account_main.tpl',
      1 => 1551318702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175635904763d4b2ea5d96c8_34440854',
  'variables' => 
  array (
    'userinfo' => 0,
    'last_access' => 0,
    'currency_sign' => 0,
    'ab_formated' => 0,
    'last_deposit' => 0,
    'last_withdrawal' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63d4b2ea679d07_63871374',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63d4b2ea679d07_63871374')) {
function content_63d4b2ea679d07_63871374 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/multistream6/domains/keymining.ltd/public_html/app/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '175635904763d4b2ea5d96c8_34440854';
echo $_smarty_tpl->getSubTemplate ("mheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



	<div class="account_ctn_Right_Part1">
						<div class="acr_Part1 acr_Part11">
							<h4>username:</h4>
							<h3><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
</h3>
						</div>
						<div class="acr_Part1 acr_Part12">
							<h4>Registration Date:</h4>
							<h3><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['create_account_date']);?>
</h3>
						</div>
						<div class="acr_Part1 acr_Part13">
							<h4>last access:</h4>
							<h3><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['last_access']->value);?>
&nbsp;</h3>
						</div>
					</div>
					<div class="account_ctn_Right_Part2">
						<div class="acr_Part2 acr_Part21 ">
							<div class="acr_Part2_title">
								<p>Account Balance</p>
								<h3><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['total']);?>
</b></h3>
							</div>
							<div class="acr_Part2_ctn">
								<a href="?a=withdraw">request payment</a>
							</div>
						</div>
						<div class="acr_Part2 acr_Part22 ">
							<div class="acr_Part2_title">
								<p>earned total</p>
								<h3><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['earning']);?>
</h3>
							</div>
							<div class="acr_Part2_ctn">
								<a href="?a=deposit">make a deposit</a>
							</div>
						</div>
						<div class="acr_Part2 acr_Part23">
							<div class="acr_Part2_title">
								<p>active deposit</p>
								<h3><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['active_deposit']);?>
</b></h3>
							</div>
							<div class="acr_Part2_ctn">
								<ul>
									<li>Last Deposit:<span><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
<b><?php echo smarty_modifier_myescape((($tmp = @$_smarty_tpl->tpl_vars['last_deposit']->value)===null||$tmp==='' ? "0.00" : $tmp));?>
</b><span></li>
									<li>Total Deposit:<span><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['deposit']);?>
</b><span></li>
								</ul>
							</div>
						</div>
						<div class="acr_Part2 acr_Part24">
							<div class="acr_Part2_title">
								<p>total withdrawal</p>
								<h3><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['withdrawal']);?>
</b></h3>
							</div>
							<div class="acr_Part2_ctn">
								<ul>
									<li>Last Withdrawal: <span><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
<b><?php echo smarty_modifier_myescape((($tmp = @$_smarty_tpl->tpl_vars['last_withdrawal']->value)===null||$tmp==='' ? "0.00" : $tmp));?>
</b><span></li>
									<li>Pending Withdrawal: <span><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);?>
<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['withdraw_pending']);?>
</b><span></li>
								</ul>
							</div>
						</div>
					</div>


                                                              
<br><br>
<br>
<?php echo $_smarty_tpl->getSubTemplate ("mfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


				<?php }
}
?>