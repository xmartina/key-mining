<?php /* Smarty version 3.1.27, created on 2022-11-19 19:50:38
         compiled from "/home/multistream6/domains/keymining.ltd/public_html/app/tmpl/logo.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2038171966379338e3bbbb3_68440612%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccfb1c9c959c07c71fe5f7d5fddb2cc3cded4f18' => 
    array (
      0 => '/home/multistream6/domains/keymining.ltd/public_html/app/tmpl/logo.tpl',
      1 => 1666710952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2038171966379338e3bbbb3_68440612',
  'variables' => 
  array (
    'settings' => 0,
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6379338e3d7b75_49705016',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6379338e3d7b75_49705016')) {
function content_6379338e3d7b75_49705016 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/multistream6/domains/keymining.ltd/public_html/app/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '2038171966379338e3bbbb3_68440612';
?>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<title><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 LTD</title>
	<link href='styles/assets/custom.css' rel='stylesheet' type='text/css'>
	<link href='styles/assets/hover.css' rel='stylesheet' type='text/css'>
	<link href='styles/assets/animate.css' rel='stylesheet' type='text/css'>
	<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link rel="icon" href="styles/assets/images/favicon.png" type="image/png"/>
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">
	<link href='styles/assets/bootstrap.min.css' rel='stylesheet' type='text/css'>
	<link href='styles/assets/custom_back.css' rel='stylesheet' type='text/css'>
	<?php echo '<script'; ?>
 src='styles/assets/jquery.js' type='text/javascript'><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="styles/assets/wow.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="styles/assets/wow.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="styles/assets/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src='styles/assets/setting.js' type='text/javascript'><?php echo '</script'; ?>
>


	<?php echo '<script'; ?>
 type="text/javascript">
	//// Get the CryptoCurrency Information from the API
	jQuery.ajax({
		url: "https://min-api.cryptocompare.com/data/pricemulti",
		data: "fsyms=BTC,ETH,DASH,LTC&tsyms=USD",
		dataType : 'json',
	}).done(function(data) {
		// console.log( "BTC : " + data.BTC.USD + ", ETH : " + data.ETH.USD + ", DASH : " + data.DASH.USD, LTC : " + data.LTC.USD);
		jQuery(".dashCoin").html('$' + data.DASH.USD);
		jQuery(".ethCoin").html('$' + data.ETH.USD);
		jQuery(".bitCoin").html('$' + data.BTC.USD);
		jQuery(".liteCoin").html('$' + data.LTC.USD);
	}).fail(function() {
		console.log( "API error" );
	});
<?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function() {
		$(".cal2").click(function() {
			$(".calculate_ctn").toggle();
			$(".calculate_ctn").addClass("animated lightSpeedIn");
		});
	});
<?php echo '</script'; ?>
>



<?php echo '<script'; ?>
 type="text/javascript">
	var tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
	var tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

	function GetClock(){
		var tzOffset = -5;//set this to the number of hours offset from UTC

		var d=new Date();
		var dx=d.toGMTString();
		dx=dx.substr(0,dx.length -3);
		d.setTime(Date.parse(dx))
		d.setHours(d.getHours()+tzOffset);
		var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate();
		var nhour=d.getHours(),nmin=d.getMinutes(),ap;
		if(nhour==0){ap=" AM";nhour=12;}
		else if(nhour<12){ap=" AM";}
		else if(nhour==12){ap=" PM";}
		else if(nhour>12){ap=" PM";nhour-=12;}

		if(nmin<=9) nmin="0"+nmin;

		document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+" "+nhour+":"+nmin+ap+"";
	}

	window.onload=function(){
		GetClock();
		setInterval(GetClock,1000);
	}
<?php echo '</script'; ?>
>







</head>

<div class="headerContainer">
	<div class="headerInner fadeInLeft wow"> <a href="?a=home" id="logo">
    <img src="" alt="logo" style="max-width:210;" />
    </a>
		<p>1 BTC: <span class="bitCoin"></span></p>
		<div class="hdRight">
			<div class="mainNavRight">
				<div class="navbar">
					<div class="navbar-inner">
						<ul class="nav">
							<li><a href="?a=home">Home</a></li>
							<li><a href="?a=about">About</a></li>
							<li><a href="?a=faq">FAQ </a></li>
							<li><a href="?a=cust&amp;page=investment">PLANS</a></li>
							<li><a href="?a=support">SUPPORT</a></li>
							<li><a href="?a=paidout">PAID</a></li>
							<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] != 1) {?>
							<li><a href="?a=login" class="login">login</a></li>
							<li><a href="?a=signup" class="signup">signup</a></li><?php } else { ?>
							<li><a href="?a=logout" class="login">logout</a></li>
							<li><a href="?a=account" class="signup">dashboard</a></li><?php }?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<body>

	
<?php }
}
?>