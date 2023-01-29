<?php /* Smarty version 3.1.27, created on 2022-11-19 19:51:27
         compiled from "/home/multistream6/domains/keymining.ltd/public_html/app/tmpl/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2016867795637933bfdf78b3_42479901%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3caa8a5e5f244a7bde604dd43dfbfc1af2e76e61' => 
    array (
      0 => '/home/multistream6/domains/keymining.ltd/public_html/app/tmpl/login.tpl',
      1 => 1666890107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2016867795637933bfdf78b3_42479901',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_637933bfe16ba7_89723818',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_637933bfe16ba7_89723818')) {
function content_637933bfe16ba7_89723818 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2016867795637933bfdf78b3_42479901';
?>
<!doctype html>
<html>

<!-- Mirrored from keymining.ltd/?a=login by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Oct 2022 14:31:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<title>keymining.ltd </title>
<link rel="shortcut icon" href="secured/img/logos/favicon.png">
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
 data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"><?php echo '</script'; ?>
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
<p>LOG IN YOUR ACCOUNT</p>
</div>
</div>
</div>
<div id="others" style="margin-top: 50px;">
<div id="sub_others">


<?php echo '<script'; ?>
 language=javascript>
function checkform() {
  if (document.mainform.username.value=='') {
    alert("Please type your username!");
    document.mainform.username.focus();
    return false;
  }
  if (document.mainform.password.value=='') {
    alert("Please type your password!");
    document.mainform.password.focus();
    return false;
  }
  return true;
}
<?php echo '</script'; ?>
>


<br/>
<style>
    .other-tittle p{
        font-weight: bold !important;
        font-size: 20px;
    }
</style>
<form method=post name=mainform onsubmit="return checkform()"><input type="hidden" name="form_id" value="16656714639706"><input type="hidden" name="form_token" value="e31bfc3c913cae268d5bac16b845141d">
<input type=hidden name=a value='do_login'>
<input type=hidden name=follow value=''>
<input type=hidden name=follow_id value=''>
<div class="login_box">
<div class="other-head-">
<p style="text-align:center;">LOG INFO.</p>
</div>
<div class="login_boxa">
<div class="other-one">
<div class="other-tittle">
 <p>your Username *</p>
</div>
<div class="other-type-icona">
<div class="other-type typea">
<input type="text" placeholder="Username" name=username value=''>
</div>
<div class="other-icon">
<img src="../images/ruser.png">
</div>
</div>
</div>
<div class="other-one">
<div class="other-tittle">
<p>Password *</p>
</div>
<div class="other-type-icona">
<div class="other-type typea">
<input type="password" placeholder="password" name=password value=''>
</div>
<div class="other-icon">
<img src="../images/rpass.png">
</div>
</div>
</div>
<div class="clr"></div>
<div class="for-log">
<div class="forgot">
<a href="?a=forgot_password">Forgot Password ?</a>
</div>

<div class="login">
<input type="submit" value="LOG IN NOW">
</div>
</div>
</div>
</div>
</form>
</div>
</div>
<div id="">
<div id="sub_footer">
<div class="logof zoomIn animated wow" data-wow-duration="2s">
<a href="/"><img src="../secured/img/logos/logo-2-dark.png" /></a>
</div>
<div class="copyright">
<p>Copyright 2021 &copy; keymining.ltd  All rights reserved</p>
</div>
</div>
</div>
</body>

<!-- Mirrored from keymining.ltd/?a=login by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Oct 2022 14:31:51 GMT -->
</html>


<?php }
}
?>