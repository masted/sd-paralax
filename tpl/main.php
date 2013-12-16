<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8"/>
  <title>HD Parallax</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
  <link type="text/css" rel="stylesheet" href="/sd/paralax/css/parallax.css">
  <link type="text/css" rel="stylesheet" href="/sd/paralax/css/sample.css">
</head>
<body class="unloaded" style="background: #000">

<!--<img class="loadBackground" src="/sd/paralax/img/bck.png">-->
<div id="parallax">
  <!--<img alt=".1" class="parallaxBackground" src="/sd/paralax/img/bck.png">-->
  <? foreach ($d['blocks'] as $n => $v) { ?>
  <div id="blockN<?= $n ?>">
    <div class="popularResolution para-totalCenterAlign">
      <div class="story">
        <div class="padded">
          <?= $v ?>
        </div>
      </div>
    </div>
  </div>
  <? } ?>
</div>

<div id="footer">
  &copy; masted
</div>

<div style='display:none'>
  Placed here just to make the preloader busy.
  <img src="/sd/paralax/img/lp/ipad/5.png"/>
  <img src="/sd/paralax/img/mainPage/intro/2.png"/>
  <img src="/sd/paralax/img/cryingCyan.png"/>
</div>

<!-- TODO: Describe which functions of .custom JS-files are needed -->
<script type="text/javascript" src="/sd/paralax/js/third_party/jquery.js"></script>
<script type="text/javascript" src="/sd/paralax/js/third_party/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/sd/paralax/js/third_party/jquery.custom.js"></script>
<script type="text/javascript" src="/sd/paralax/js/third_party/modernizr.custom.js"></script>

<script type="text/javascript" src="/sd/paralax/js/parallax.js"></script>
<script type="text/javascript" src="/sd/paralax/js/sample.js"></script>


</body>
</html>
