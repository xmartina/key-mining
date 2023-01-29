<?php /* Smarty version 3.1.27, created on 2022-11-10 09:21:46
         compiled from "/home/multistream6/domains/keymining.ltd/public_html/app/tmpl/support.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:570246337636cc2aa9ba6c1_72824953%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2179b2e4ce7a367a11a1259a2d68c3410a1c30bd' => 
    array (
      0 => '/home/multistream6/domains/keymining.ltd/public_html/app/tmpl/support.tpl',
      1 => 1564870156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '570246337636cc2aa9ba6c1_72824953',
  'variables' => 
  array (
    'settings' => 0,
    'userinfo' => 0,
    'say' => 0,
    'errors' => 0,
    'frm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_636cc2aaa14a17_18012838',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_636cc2aaa14a17_18012838')) {
function content_636cc2aaa14a17_18012838 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/multistream6/domains/keymining.ltd/public_html/app/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '570246337636cc2aa9ba6c1_72824953';
?>
<!DOCTYPE html>
<html>


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 LTD</title>
  <link rel="shortcut icon" href="styles/assets/images/favicon.png">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">
  <link href='styles/assets/bootstrap.min.css' rel='stylesheet' type='text/css'>
  <link href='styles/assets/animate.css' rel='stylesheet' type='text/css'>
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

</head>
<body>
  <div class="wrapper">
    <div class="headerContainer">
      <div class="headerInner fadeInLeft wow"> <a href="?a=home" id="logo"></a>
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
                  <li><a href="?a=affiliate">AFFILIATES</a></li>
                  <li><a style="color:#c79021!important;" href="?a=support">SUPPORT</a></li>
                  <li><a href="?a=paidout">PAID</a></li>
                  <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] != 1) {?>
                  <li><a href="?a=login" class="login">login</a></li>
                  <li><a href="?a=signup" class="signup">signup</a></li><?php } else { ?>

                  <li><a href="?a=account" class="signup">dashboard</a></li><?php }?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="bannerContainer">
      <div class="bannerInner insideheader fadeInRight wow">
        <div class="ctn-banner">
          <h3>Contact <span>Us</span></h3>
        </div>
      </div>
    </div>



    <div class="inside_wrap">
      <div class="inside_inner">

        <div class="contact_right">
          <h1 class="section-header">Feedback Form</h1>



<?php if ($_smarty_tpl->tpl_vars['say']->value == 'send') {?>
Message has been successfully sent. We will back to you in next 24 hours. Thank you.<br><br>
<?php } else { ?>

<?php echo '<script'; ?>
 language=javascript>
<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] == 1) {?>

function checkform() { 
  if (document.mainform.message.value == '') {
    alert("Please type your message!");
    document.mainform.message.focus();
    return false;
  }
  return true;
}

<?php } else { ?>

function checkform() {
  if (document.mainform.name.value == '') {
    alert("Please type your full name!");
    document.mainform.name.focus();
    return false;
  }
  if (document.mainform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.mainform.email.focus();
    return false;
  }
  if (document.mainform.message.value == '') {
    alert("Please type your message!");
    document.mainform.message.focus();
    return false;
  }
  return true;
}

<?php }?>
<?php echo '</script'; ?>
>

<form method=post name=mainform onsubmit="return checkform()">
<input type=hidden name=a value=support>
<input type=hidden name=action value=send>

 <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
  <ul style="color:red">
   <?php if ($_smarty_tpl->tpl_vars['errors']->value['turing_image'] == 1) {?>
    <li>Invalid turing image</li>
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['errors']->value['invalid_email'] == 1) {?>
    <li>Invalid email address</li>
   <?php }?>
  </ul>
 <?php }?>

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Your Name:</td>
<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged']) {?>
 <td><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['name']);?>
</b></td>
<?php } else { ?>
 <td><input type="text" name="name" value="<?php echo smarty_modifier_myescape(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" size=30 class=inpts></td>
<?php }?>
</tr>
<tr>
 <td>Your Email:</td>
<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged']) {?>
 <td><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['email']);?>
</b></td>
<?php } else { ?>
 <td><input type="text" name="email" value="<?php echo smarty_modifier_myescape(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['email'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" size=30 class=inpts></td>
<?php }?>
</tr>
<tr>
 <td colspan=2>Message:<br><br><textarea name=message class=inpts cols=45 rows=4><?php echo smarty_modifier_myescape(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['frm']->value['message'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
</textarea>
</tr>
<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['validation_enabled'] == 1) {?>
<tr>
 <td class=menutxt><img src="<?php echo smarty_modifier_myescape(encurl("?a=show_validation_image&".((string)$_smarty_tpl->tpl_vars['userinfo']->value['session_name'])."=".((string)$_smarty_tpl->tpl_vars['userinfo']->value['session_id'])."&rand=".((string)$_smarty_tpl->tpl_vars['userinfo']->value['rand'])));?>
"></td>
 <td><input type=text name=validation_number class=inpts size=30></td>
</tr>
<?php }?>
<tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Send" class=sbmt></td>
</tr></table>
</form>

<?php }?>



    </div>
    <div class="contact_mid">
      <p> Do You have any questions? We strongly recommend that you start searching for the necessary information in the <a href="?a=faq">FAQ</a> section. If you need advice or technical assistance, do not hesitate to contact our specialists. Customer support is available around the clock. You just need to send a letter or a request via the feedback form to promptly receive the necessary assistance. Remember that the more detailed the description of your problem is, the sooner it will be solved. Do not forget to indicate your login, if you are a registered user of the website.</p>
      <div class="email">
        <h2>Our E-mail:</h2>
        <p><a href="mailto:admin@<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
.com">admin@<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
.com</a></p>
      </div> </div>  </div> </div>
    </div>
  </div>
</div>
<div class="solidContainer">
  <div class="solidInner zoomIn wow">
    <div class="solid"> <a href="#" class="solid1"></a> <a href="#" class="solid2"></a> <a href="#" class="solid3"></a> <a href="#" class="solid4"></a> <a href="#" class="solid5"></a> <a href="#" class="solid6"></a> <a href="#" class="solid7"></a> <a href="#" class="solid8"></a> </div>
  </div>
</div>
<div class="footerContainer">
  <div class="footerInner">
    <div class="ft-row1">
      <h3>&copy; 2019. <a href="?a=home"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
</a> ALL RIGHTS RESERVED</h3>
    </div>
    <div class="ft-part1"> <a href="?a=about">ABOUT US</a> <a href="?a=news">NEWS</a> <a href="?a=faq">FAQ</a> <a href="?a=support">support</a> <a href="?a=rules">terms</a><a href="?a=paidout">ALL PAID </a></div>
  </div>
</div>
</body>

</html>
<?php }
}
?>