<?php /* Smarty version 3.1.27, created on 2023-01-28 05:30:27
         compiled from "/home/multistream6/domains/keymining.ltd/public_html/app/tmpl/mheader.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:204141330163d4b2f37ec363_05381916%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d317d95507627e151004ac2b05dd3019848eb67' => 
    array (
      0 => '/home/multistream6/domains/keymining.ltd/public_html/app/tmpl/mheader.tpl',
      1 => 1472555812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204141330163d4b2f37ec363_05381916',
  'variables' => 
  array (
    'userinfo' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_63d4b2f37f8a31_43454971',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_63d4b2f37f8a31_43454971')) {
function content_63d4b2f37f8a31_43454971 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/multistream6/domains/keymining.ltd/public_html/app/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '204141330163d4b2f37ec363_05381916';
echo $_smarty_tpl->getSubTemplate ("logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


	
<div class="account_contentContainer">
		<div class="account_contentInner">
			<div class="account_title">
				<div class="account_title_Left">
					<div class="user"></div>
					<p>Hello, <span><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
</span></p>
					<div class="clearfix"></div>
				</div>
				<div class="account_title_Right">
					<p>Your Personal Affiliate Link:</p>
					<a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/?ref=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
"> <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/?ref=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="account_ctn">
				<div class="account_ctn_Left">
					<ul>
						<li><a class="btn_acc hvr-sweep-to-right" href="?a=account">account</a></li>
						<li><a class="btn_dep hvr-sweep-to-right" href="?a=deposit">deposit</a></li>
						<li><a class="btn_withd hvr-sweep-to-right" href="?a=withdraw">withdraw</a></li>
						<li><a class="btn_yourdep hvr-sweep-to-right" href="?a=deposit_list">your deposits</a></li>
						<li><a class="btn_trans hvr-sweep-to-right" href="?a=deposit_history">transactions</a></li>
						<li><a class="btn_refer hvr-sweep-to-right" href="?a=referals">referrals</a></li>
						<li><a class="btn_setting hvr-sweep-to-right" href="?a=edit_account">settings</a></li>
						<li><a class="btn_securi hvr-sweep-to-right" href="?a=security">security</a></li>
					</ul>
				</div>
				<div class="account_ctn_Right">


<?php }
}
?>