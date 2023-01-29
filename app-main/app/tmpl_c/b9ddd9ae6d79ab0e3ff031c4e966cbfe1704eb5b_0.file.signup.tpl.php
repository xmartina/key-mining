<?php /* Smarty version 3.1.27, created on 2022-11-20 07:46:38
         compiled from "/home/multistream6/domains/keymining.ltd/public_html/app/tmpl/signup.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10994985036379db5e906867_21882289%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9ddd9ae6d79ab0e3ff031c4e966cbfe1704eb5b' => 
    array (
      0 => '/home/multistream6/domains/keymining.ltd/public_html/app/tmpl/signup.tpl',
      1 => 1666891503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10994985036379db5e906867_21882289',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6379db5e91dfa2_33868629',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6379db5e91dfa2_33868629')) {
function content_6379db5e91dfa2_33868629 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10994985036379db5e906867_21882289';
?>
<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>keymining.ltd </title>
<link rel="shortcut icon" href="../secured/img/logos/favicon.png">
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<link rel="stylesheet" type="text/css" href="../css/animate.css" />
<link rel="stylesheet" type="text/css" href="../css/dc_accordion_toggle.css" />
<link rel="stylesheet" type="text/css" href="#">
<link rel="stylesheet" type="text/css" href="#">

<?php echo '<script'; ?>
 src='../js/jquery-1.11.3.min.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='../js/wow.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='../js/dc_accordion_toggle.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    wow = new WOW();
    wow.init(); 
<?php echo '</script'; ?>
>

</head>
<body style="background: #000;">
<div id="slider2">
<div id="sub_slider">
<div class="emial bounceInLeft animated wow" data-wow-duration="2s">
<p><i class="far fa-envelope"></i> Email :hello@keymining.ltd </p>
</div>
<div class="language bounceInUp animated wow" data-wow-duration="2s">
<div id="google_translate_element"></div>

<?php echo '<script'; ?>
 data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
                function googleTranslateElementInit() {
                  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
                }
                <?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/javascript" src="../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"><?php echo '</script'; ?>
>
                
</div>
<div class="button bounceInRight animated wow" data-wow-duration="2s">
<div class="button_one">
<a href="?a=login" class="a-link"><i class="fas fa-unlock"></i> Log In </a>
</div>
<div class="button_two">
<a href="?a=signup" class="a-link"><i class="fas fa-user-plus"></i> Register </a>
</div>
</div>
</div>
<div id="top_header">
<div id="sub_top_header">
<div class="logo zoomIn animated wow" data-wow-duration="2s">
<a href="/"><img src="../secured/img/logos/logo-2-light.png"></a>
</div>
<div class="menu">
<ul>
<li><a href="?a=home">Home</a></li>
<li><a href="?a=about">About</a></li>
<li><a href="?a=support">Contact</a></li>
</ul>
</div>
</div>
</div>
<div id="sub_slid">
<div class="headline">
<p>REGISTER ACCOUNT</p>
</div>
</div>
</div>
<div id="others" style="margin-top: 20px;">
<div id="sub_others">

<style>
    .other-tittle p{
        font-weight: bold !important;
        font-size: 20px;
    }
</style>

 

 <?php echo '<script'; ?>
 language=javascript>
 function checkform() {
  if (document.regform.fullname.value == '') {
    alert("Please enter your full name!");
    document.regform.fullname.focus();
    return false;
  }
 
  
  if (document.regform.username.value == '') {
    alert("Please enter your username!");
    document.regform.username.focus();
    return false;
  }
  if (!document.regform.username.value.match(/^[A-Za-z0-9_\-]+$/)) {
    alert("For username you should use English letters and digits only!");
    document.regform.username.focus();
    return false;
  }
  if (document.regform.password.value == '') {
    alert("Please enter your password!");
    document.regform.password.focus();
    return false;
  }
  if (document.regform.password.value != document.regform.password2.value) {
    alert("Please check your password!");
    document.regform.password2.focus();
    return false;
  }
 
  
  if (document.regform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.regform.email.focus();
    return false;
  }
  if (document.regform.email.value != document.regform.email1.value) {
    alert("Please retype your e-mail!");
    document.regform.email.focus();
    return false;
  }


  if (document.regform.agree.checked == false) {
    alert("You have to agree with the Terms and Conditions!");
    return false;
  }

  return true;
 }

 function IsNumeric(sText) {
  var ValidChars = "0123456789";
  var IsNumber=true;
  var Char;
  if (sText == '') return false;
  for (i = 0; i < sText.length && IsNumber == true; i++) { 
    Char = sText.charAt(i); 
    if (ValidChars.indexOf(Char) == -1) {
      IsNumber = false;
    }
  }
  return IsNumber;
 }
 <?php echo '</script'; ?>
>
 

 
<form method=post onsubmit="return checkform()" name="regform">
                            <input type=hidden name=a value="signup">
                            <input type=hidden name=action value="signup">
<div class="pages-left">
<div class="other-head-">
<p>Account Information</p>
</div>
<div class="other-one">
<div class="other-tittle">
<p>Full Name *</p>
</div>
<div class="other-type-icon">
<div class="other-type">
<input type="text" placeholder="Full Name" name=fullname value="">
</div>
<div class="other-icon">
<img src="../images/ruser.png">
</div>
</div>
</div>
<div class="other-one">
<div class="other-tittle">
<p>your Username *</p>
</div>
<div class="other-type-icon">
<div class="other-type">
<input type="text" placeholder="Username" name=username value="">
</div>
<div class="other-icon">
<img src="../images/ruser.png">
</div>
</div>
</div>

<div class="other-one">
<div class="other-tittle">
<p>your Email * </p>
</div>
<div class="other-type-icon">
<div class="other-type">
<input type="text" placeholder="Email" name=email value="">
</div>
<div class="other-icon-mail">
<img src="../images/rmail.png">
</div>
</div>
</div>
<div class="other-one">
<div class="other-tittle">
<p>your Retype Email *</p>
</div>
<div class="other-type-icon">
<div class="other-type">
<input type="text" placeholder="Retype Email" name=email1 value="">
</div>
<div class="other-icon-mail">
<img src="../images/rmail.png">
</div>
</div>
</div>

<div class="other-one">
<div class="other-tittle">
<p> Password *</p>
</div>
<div class="other-type-icon">
<div class="other-type">
<input type="password" placeholder="Password" name=password value="">
</div>
<div class="other-icon-mail">
<img src="../images/rpass.png">
</div>
</div>
</div>
<div class="other-one">
<div class="other-tittle">
<p>Retpe Password *</p>
</div>
<div class="other-type-icon">
<div class="other-type">
<input type="password" placeholder="Retype Password" name=password2 value="">
</div>
<div class="other-icon-mail">
<img src="../images/rpass.png">
</div>
</div>
</div>

<div class="other-one">
<div class="other-tittle">
<p>Secret Question</p>
</div>
<div class="other-type-icon">
<div class="other-type">
<input type="text" placeholder="Secret Question" name=sq value="">
</div>
<div class="other-icon-sq">
<img src="../images/sq.png">
</div>
</div>
</div>
<div class="other-one">
<div class="other-tittle">
<p>Secret Answer</p>
</div>
<div class="other-type-icon">
<div class="other-type">
<input type="text" placeholder="Secret Answer" name=sa value="">
</div>
<div class="other-icon-mail">
<img src="../images/sa.png">
</div>
</div>
</div>
</div>
<div class="pages-right">
<div class="other-head-">
<p>Payment Information</p>
</div>
<div class="other-one">
<div class="other-tittle">
<p>PerfectMoney Wallet Address Wallet</p>
</div>
<div class="other-type-icon">
<div class="other-type">
<input type=text class="form-control" size=30  value="" data-validate="regexp" placeholder="U12345678">
</div>
<div class="other-icon-pay">
<img src="../images/rpay.png">
</div>
</div>
</div>
<div class="other-one">
<div class="other-tittle">
<p>BTC Wallet Address Wallet</p>
</div>
<div class="other-type-icon">
<div class="other-type">
<input type=text class="form-control" size=30  value="" placeholder="">
</div>
<div class="other-icon-pay">
<img src="../images/rpay.png">
</div>
</div>
</div>
<div class="other-one">
<div class="other-tittle">
<p>ETH Wallet Address Wallet</p>
</div>
<div class="other-type-icon">
<div class="other-type">
<input type=text class="form-control" size=30  value="" placeholder="">
</div>
<div class="other-icon-pay">
<img src="../images/rpay.png">
</div>
</div>
</div>
<div class="other-one">
<div class="other-tittle">
<p>USDT ERC20 Wallet Address Wallet</p>
</div>
<div class="other-type-icon">
<div class="other-type">
<input type=text class="form-control" size=30  value="" placeholder="">
</div>
<div class="other-icon-pay">
<img src="../images/rpay.png">
</div>
</div>
</div>
<div class="other-one">
<div class="other-tittle">
<p>USDT TRC20 Wallet Address Wallet</p>
</div>
<div class="other-type-icon">
<div class="other-type">
<input type=text class="form-control" size=30  value="" placeholder="">
</div>
<div class="other-icon-pay">
<img src="../images/rpay.png">
</div>
</div>
</div>

<div class="clr"></div>
<div class="upline">
<p>Your Upline : N/A (n/a)</p>
</div>


<div class="clr"></div>
<div class="check-text">
<div class="check-box">
<input type="checkbox" name=agree value=1 >
</div>
<div class="agree">
<p>I have read <span><a target="_blank" href="?a=rules"> Rules and Agreement</a></span></p>
</div>
</div>
<div class="regnow">
<input type="submit" value="REGISTER NOW">
</div>
</div>

</form>


</div>
</div>
<div id="">
<div id="sub_footer">
<div class="logof zoomIn animated wow" data-wow-duration="2s">
<a href="index.html"><img src="../secured/img/logos/logo-2-dark.png" /></a>
</div>
<div class="copyright">
<p>Copyright 2021 &copy; keymining.ltd  All rights reserved</p>
</div>
</div>
</div>
</body>

</html>



<?php }
}
?>