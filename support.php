
<?php
require_once ('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="author" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="cryptocurrencies, crypto, cryptos, investment, forex, capital, ROI, roi, invest" />
    <meta name="description" content="The Investment Company for Smart People" />
    <title><?php echo $siteName ?> • The Future of Investing</title>
    <link rel="icon" href="secured/img/logos/favicon.png" />
    <script src="d0032c5e6e.html"></script>
    <link rel="stylesheet" href="secured/css/plugins.css" />
    <link rel="stylesheet" href="secured/search/search.css" />
    <link href="secured/css/styles-2.css" rel="stylesheet" id="colors">
    <link rel="stylesheet" href="secured/mycss.css" type="text/css">
    <link rel="stylesheet" href="secured/css/lang-style.css">


    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element_id');
        }
    </script>


</head>
<body>
<div id="preloader">
    <div class="row loader">
        <div class="loader-icon"></div>
    </div>
</div>
<div class="main-wrapper">
    <?php
        require_once ('top.bar.php');
        require_once ('nav.php');
    ?>
    <section class="page-title-section2 bg-img cover-background" data-overlay-dark="7" data-background="img/bg/about6.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact <?php echo $siteName ?> </h1>
                </div>
                <div class="col-md-12">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="padding-40px-bottom sm-padding-20px-bottom">
        <div class="container">
            <div class="section-heading">
                <h3>Contact Us</h3>
            </div>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 sm-margin-30px-bottom">
                            <div class="padding-30px-right sm-no-padding-right">
                                <div-- class="row">
                                    <div class="col-12">
                                        <div class="section-heading left half">
                                            <h4 class="font-weight-600">Get advice any time</h4>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="padding-25px-tb sm-padding-20px-tb border-bottom border-color-medium-gray">
                                            <span class="d-inline-block font-size26 sm-font-size22 xs-font-size20 line-height-30 text-theme-color vertical-align-top width-30px xs-width-25px"><i class="fas fa-map-marker-alt vertical-align-top"></i></span>
                                            <div class="d-inline-block vertical-align-top padding-10px-left width-75">
                                                <h5 class="margin-5px-bottom text-uppercase font-size15 xs-font-size14">Locations</h5>
                                                <p class="no-margin line-height-normal">3201 24 Ave, Vernon, British Columbia, Canada</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="padding-25px-tb sm-padding-20px-tb">
                                            <span class="d-inline-block font-size26 sm-font-size22 xs-font-size20 line-height-30 text-theme-color vertical-align-top width-30px xs-width-25px"><i class="far fa-envelope vertical-align-top"></i></span>
                                            <div class="d-inline-block vertical-align-top padding-10px-left width-75">
                                                <h5 class="margin-5px-bottom text-uppercase font-size15 xs-font-size14">Email</h5>
                                                <p class="no-margin line-height-normal">admin@<?php echo $baseURL ?> </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--div class="col-12">
                                      <div class="padding-25px-tb sm-padding-20px-tb">
                                        <span class="d-inline-block font-size26 sm-font-size22 xs-font-size20 line-height-30 text-theme-color vertical-align-top width-30px xs-width-25px"><i class="fa fa-phone vertical-align-top"></i></span>
                                        <div class="d-inline-block vertical-align-top padding-10px-left width-75">
                                          <h5 class="margin-5px-bottom text-uppercase font-size15 xs-font-size14">Telephone</h5>
                                          <p class="no-margin line-height-normal">+1 (419) 405-1038</p>
                                        </div>
                                      </div>
                                    </div-->
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-form-box">
                                <div class="section-heading left half">
                                    <h4 class="font-weight-600">Let's talk about your next investment.</h4>
                                </div>

                                <script language=javascript>

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

                                </script>

                                <form method=post name=mainform onsubmit="return checkform()" class="mailform off2"><input type="hidden" name="form_id" value="16656714657631"><input type="hidden" name="form_token" value="4bf675c2c62a9a2096dbb8cba93b197d">
                                    <input type=hidden name=a value=support>
                                    <input type=hidden name=action value=send>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" name="name" value="" placeholder="Your Name" ></div>

                                        <div class="col-md-6">
                                            <input type="text" name="phone" placeholder="Telephone:" data-constraints="@Phone">
                                        </div>


                                        <div class="col-md-6">
                                            <input type="text" placeholder="Email" name="email" value=""> </div>

                                        <div class="col-md-12">
                                            <textarea name="message" rows="5" placeholder="Message:" ></textarea>
                                        </div>


                                        <div class="mfControls col-md-12">
                                            <button type="submit" class="butn theme">Sumbit</button>
                                        </div>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>

                </div>
        </div>
    </section>

</div>
</section>

<?php require_once ('footer.php'); ?>

</div>
<script src="secured/js/jquery.min.js"></script>
<script src="secured/js/modernizr.js"></script>
<script src="secured/js/bootstrap.min.js"></script>
<script src="secured/js/nav-menu.js"></script>
<script src="secured/search/search.js"></script>
<script src="secured/js/easy.responsive.tabs.js"></script>
<script src="secured/js/owl.carousel.js"></script>
<script src="secured/js/jquery.counterup.min.js"></script>
<script src="secured/js/jquery.stellar.min.js"></script>
<script src="secured/js/waypoints.min.js"></script>
<script src="secured/js/tabs.min.js"></script>
<script src="secured/js/countdown.js"></script>
<script src="secured/js/jquery.magnific-popup.min.js"></script>
<script src="secured/js/isotope.pkgd.min.js"></script>
<script src="secured/js/chart.min.js"></script>
<script src="secured/js/owl.carousel.thumbs.js"></script>
<script src="secured/js/animated-headline.js"></script>
<script src="secured/js/clipboard.min.js"></script>
<script src="secured/js/prism.js"></script>
<script src="secured/js/map.js"></script>
<script src="secured/js/main.js"></script>
<script src="secured/js/mailform/jquery.form.min.js"></script>
<script src="secured/js/mailform/jquery.rd-mailform.min.c.js"></script>
<script type="text/javascript">
    (function(){var gtConstEvalStartTime = new Date();/*
Copyright The Closure Library Authors.
SPDX-License-Identifier: Apache-2.0
*/
        function d(b){var a=document.getElementsByTagName("head")[0];a||(a=document.body.parentNode.appendChild(document.createElement("head")));a.appendChild(b)}function _loadJs(b){var a=document.createElement("script");a.type="text/javascript";a.charset="UTF-8";a.src=b;d(a)}function _loadCss(b){var a=document.createElement("link");a.type="text/css";a.rel="stylesheet";a.charset="UTF-8";a.href=b;d(a)}function _isNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)if(!(a=a[b[c]]))return!1;return!0}
        function _setupNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)a.hasOwnProperty?a.hasOwnProperty(b[c])?a=a[b[c]]:a=a[b[c]]={}:a=a[b[c]]||(a[b[c]]={});return a}window.addEventListener&&"undefined"==typeof document.readyState&&window.addEventListener("DOMContentLoaded",function(){document.readyState="complete"},!1);
        if (_isNS('google.translate.Element')){return}(function(){var c=_setupNS('google.translate._const');c._cest = gtConstEvalStartTime;gtConstEvalStartTime = undefined;c._cl='en';c._cuc='googleTranslateElementInit';c._cac='';c._cam='';c._ctkk='443047.1598284275';var h='translate.googleapis.com';var s=(true?'https':window.location.protocol=='https:'?'https':'http')+'://';var b=s+h;c._pah=h;c._pas=s;c._pbi=b+'/translate_static/img/te_bk.gif';c._pci=b+'/translate_static/img/te_ctrl3.gif';c._pli=b+'/translate_static/img/loading.gif';c._plla=h+'/translate_a/l';c._pmi=b+'/translate_static/img/mini_google.png';c._ps=b+'/translate_static/css/translateelement.css';c._puh='translate.google.com';_loadCss(c._ps);_loadJs(b+'/translate_static/js/element/main.js');})();})();
</script>

<script type="text/javascript" id="zsiqchat">var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode: "8af6ac5f09333d78e361f2454b0239b8c17d90764346c8dd54509e49f4aa6a4d1b5fef0951f147d94965b0c80199bebc", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);</script>

<div style="    position: fixed;bottom: 20px; left: 0px;right: 0px;height:62px; background-color: #24262e; overflow:hidden; box-sizing: border-box;border-radius: 4px; text-align: right; line-height:14px; block-size:36px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; padding: 0px;width: 100%;margin-bottom: -21px;">
    <div style="height:40px; padding:0px; margin:0px; width: 100%;">
        <iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&amp;theme=light&amp;pref_coin_id=1505&amp;invert_hover=no" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe>
    </div>
    <div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;">
        <a href="https://coinlib.io/" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib
    </div>
</div>

</body>
</html>
