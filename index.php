<?php
$premiumAccountID = "814545209495110650915259"; ///// ENTER PREMIUM ACCOUNT ID HERE

include('inc/simple_html_dom.php');
include('inc/mainconfig.php');
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
<!-- Google Tag Manager -->
<!-- End Google Tag Manager -->
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php if (!strstr($singleTitle,'PipSnip')) { echo $singleTitle; } else { echo $defaultTitle; } ;?></title>
<meta name="description" content="<?php if(!strstr($singleDescr,'Turn any web page into a curated content instantly!')) { echo $singleDescr; } else { echo $defaultDescr; }?>">
<meta name="robots" content="INDEX, FOLLOW">
<meta property="og:site_name" content="<?php echo $_SERVER[HTTP_HOST];?>"/>
<meta property="og:image" content="<?php echo $ogimage;?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo $url2;?>"/>
<meta property="og:description" content="<?php if(!strstr($singleDescr,'Turn any web page into a curated content instantly!')) { echo $singleDescr; } else { echo $defaultDescr; }?>" />
<meta property="og:type" content="article" />
<meta name="p:domain_verify" content="8c2f4ce231759c5e59c6d36bd461c480"/>
<link rel="canonical" href="<?php echo $url2;?>" />
<?php echo $analtcs;?>
</head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://www.pipsnip.com/member/js/premcont.js?actID=<?php echo $premiumAccountID ;?>"></script> 
<script type="text/javascript" language="javascript" src="http://<?php echo $hostDomain ;?>/js/jquery.dotdotdot.js"></script>
<link rel="stylesheet" href="http://<?php echo $hostDomain ;?>/css/foundation.css" />
<link rel="stylesheet" href="http://<?php echo $hostDomain ;?>/css/custom.css" />
<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<body>
<!-- Google Tag Manager (noscript) -->

<!-- End Google Tag Manager (noscript) -->
<header>
  <div class="row">
    <div class="medium-4 columns" id="logo"></div>
    <div class="medium-8 columns"><span id="ad1" class="ad1"></span></div>
  </div>
  <div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium" style="display: none;" data-responsivetoggle="uyelk2-responsivetoggle">
    <button class="menu-icon" type="button" data-toggle=""></button>
    <div class="title-bar-title">Menu</div>
  </div>
  <div class="row top-bar" id="main-menu">
    <ul class="menu vertical medium-horizontal expanded medium-text-center dropdown" data-responsive-menu="drilldown medium-dropdown" role="menubar" data-dropdownmenu="86unxc-dropdownmenu" data-responsivemenu="o7w9bq-responsivemenu">
    </ul>
  </div>
</header>
<div class="row">
  <div class="medium-8 columns" id="leftCol">
    <div class="row" id="leftCol-top">
      <div class="medium-8 columns" id="featPrimary"> </div>
      <div class="medium-4 columns">
        <div class="row">
          <div id="featSecondary" class="column"></div>
          <div id="featTertiary" class="column"></div>
        </div>
      </div>
    </div>
    <div class="row" id="leftCol-mid">
      <div class="medium-4 columns" id="ftrd-primary"></div>
      <div class="medium-4 columns" id="ftrd-secondary"></div>
      <div class="medium-4 columns" id="ftrd-tertiary"></div>
    </div>
    <div class="row leftCol-bottom" id="leftCol-bottom"></div>
  </div>
  <div class="medium-4 columns" id="rightCol">
    <div class="row">
      <div class="medium-10 medium-centered sidebar">
        <p class="relatedArt">Share this page:</p>
        <div id="demo-custom" class="clearfix"></div>
        <div class="sidebar-wrap"><span id="ad2" class="ad2"></span>
          <p class="relatedArt">Most Recent Posts:</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row" id="footer">
<span id="ad3" class="ad3"></span>
<?php if ($socialicons) { echo $socialicons ; }?>
  <div class="column footerMenu"></div>
</div>
<div id="pg1"></div>
<div id="pg2"></div>
<div id="_temp"></div>
<script>
    var list = ['facebook', 'twitter', 'tumblr', 'reddit', 'stumbleupon'];
    $(function () {
        $('#demo-custom').sharrre({
            share: {
                googlePlus: true,
                facebook: true,
                twitter: true,
                delicious: true,
                stumbleupon: true,
                linkedin: true,
                pinterest: true,
                tumblr: true,
                reddit: true,
                twitterFollow: true
            },
            buttons: {
                facebook: {
                    popup: {
                        width: 1200,
                        height: 900
                    }
                },
                twitter: {},
                delicious: {},
                linkedin: {},
                pinterest: {},
                twitterFollow: {
                    user: 'Your-Twitter-Name-Here'
                }
            },
            url: '<?php echo $url2 ;?>',

            enableCounter: false,
            enableHover: false,
            template: function () {
                content = '';
                for (i in list) {
                    service = list[i];
                    content += '<a class="' + service + '"><i class="fa fa-' + service + '"></i></a>';
                }
                return content;
            }(),
            render: function (api, options) {
                for (i in list) {
                    service = list[i];
                    $(api.element).on('click', '.' + service, function () {
                        api.openPopup(this.className);
                    });
                }
            }
        });
    });
</script>
<script src="http://<?php echo $hostDomain ;?>/js/platform/platform.js"></script> 
<script src="http://<?php echo $hostDomain ;?>/js/platform/twitter.js"></script> 
<script src="http://<?php echo $hostDomain ;?>/js/platform/googlePlus.js"></script> 
<script src="http://<?php echo $hostDomain ;?>/js/platform/google-plus.js"></script> 
<script src="http://<?php echo $hostDomain ;?>/js/platform/facebook.js"></script> 
<script src="http://<?php echo $hostDomain ;?>/js/platform/digg.js"></script> 
<script src="http://<?php echo $hostDomain ;?>/js/platform/delicious.js"></script> 
<script src="http://<?php echo $hostDomain ;?>/js/platform/stumbleupon.js"></script> 
<script src="http://<?php echo $hostDomain ;?>/js/platform/linkedin.js"></script> 
<script src="http://<?php echo $hostDomain ;?>/js/platform/pinterest.js"></script> 
<script src="http://<?php echo $hostDomain ;?>/js/platform/tumblr.js"></script> 
<script src="http://<?php echo $hostDomain ;?>/js/platform/reddit.js"></script> 
<script src="http://<?php echo $hostDomain ;?>/js/platform/twitterFollow.js"></script> 
<script src="http://<?php echo $hostDomain ;?>/js/jquery.sharrre.js"></script> 

<!----> 
<script src="http://<?php echo $hostDomain ;?>/js/vendor/what-input.js"></script> 
<script src="http://<?php echo $hostDomain ;?>/js/vendor/foundation.min.js"></script> 
<script>
      $(document).foundation();
    </script>
</body>
</html>
