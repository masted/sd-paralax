<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8"/>
  <title>Site Draw Parallax</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
  <link type="text/css" rel="stylesheet" href="/paralax/css/parallax.css">
  <link type="text/css" rel="stylesheet" href="/paralax/css/sample.css">
</head>
<body class="unloaded" style="background: #000">

<?/*
<!--<img class="loadBackground" src="/paralax/img/bck.png">-->
<div id="parallax">
  <img alt=".1" class="parallaxBackground" src="/paralax/img/bck.png">
  <? foreach (['A', 'D', 'S'] as $n => $v) { ?>
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
*/?>
<img class="loadBackground" src="/paralax/img/bck.png">

<div class='preloaderCont'>
  <span class='ending'><img src="/paralax/img/logo/classic.svg" /></span><span class='starting'><img src="/paralax/img/logo/preload.svg" /></span>
</div>

<div id="parallax">

  <img alt=".1" class="parallaxBackground" src="/paralax/img/bck.png">

  <div id="hi">
    <div class='popularResolution para-totalCenterAlign'>
      <div class='story'>
        <div class="padded"><h1>Hi!</h1> That’s a parallax engine. Navigate by pressing keyboard arrows or rotating mouse wheel →</div>
      </div></div>
  </div>

  <div id="simple">
    <div class='popularResolution para-totalCenterAlign'>

      <!-- You can create much simpler and fully working layers than that, but nested structure gives you more flexibilty. -->
      <div class='fastLayer' style='left: 200px;
	top: 30px;'><div alt='2'><div style='width:300px;height:300px;background: rgba(255, 255, 255, 0.25);'></div></div></div>
      <div class='fastLayer' style='left: 750px;
	top: 200px;'><div alt='5'><div style='width:300px;height:300px;background: rgba(255, 255, 255, 0.4);'></div></div></div>
      <div class='fastLayer' style='left: 530px;
	top: 450px;'><div alt='1.1'><div style='width:300px;height:300px;background: rgba(255, 255, 255, 0.5);'></div></div></div>
      <div class='story'>
        <div class="padded">It moves layers you place in your page with different speed.</div>
      </div></div>
  </div>

  <div id="more">
    <div class='popularResolution para-totalCenterAlign'>
      <div class='story'>
        <div class="padded">How about tons of layers?</div>
      </div></div>
  </div>

  <div id="anime">
    <div class='popularResolution para-totalCenterAlign'>
      <div class='story'>
        <div class="padded">Animated? Why not!</div>
      </div>
    </div>
  </div>

  <div id="optimization">
    <div class='popularResolution para-totalCenterAlign'>

      <div class='fastLayer' style='left: 534px;
	top: 0px;'><div alt='2'><div style='width:300px;height:300px;background: rgba(255, 255, 255, 0.47);'></div></div></div>
      <div class='story'>
        <div class="padded"><p>It is highly optimized. Slides not visible at the moment are fully suspended for you automatically.</p><p>Want to increase performance even more? Engine lets you stop any animations in slides while you are scrolling.</p>
        </div>
      </div></div>
  </div>

  <div id="scaling" class='para-totalCenterAlign'><div class='story'>
      <div class="padded">If you want, everything on your slide will scale to fit the window.
        <span class="hint">experiment with the size of the window to see the magic</span>
      </div>
    </div></div>

  <div id="layouts">
    <div class='popularResolution para-totalCenterAlign'>
      <div class='story'>
        <div class="padded">
          We provide you <i>Alternative Layouts</i> API for top-notch webpage execution.
          <span class="hint">resize window so the browser’s orientation will change</span>
          <div class='landscapeOnly' >You're viewing album ▭ version of the slide.</div>
          <div class='portraitOnly' >You're viewing portrait  ▯  version of the slide.</div>
        </div>
      </div></div>
  </div>
</div>

<div id="footer">
  &copy; masted
</div>

<div style='display:none'>
  Placed here just to make the preloader busy.
  <img src="/paralax/img/lp/ipad/5.png"/>
  <img src="/paralax/img/mainPage/intro/2.png"/>
  <img src="/paralax/img/cryingCyan.png"/>
</div>

<!-- TODO: Describe which functions of .custom JS-files are needed -->
<script type="text/javascript" src="/paralax/js/third_party/jquery.js"></script>
<script type="text/javascript" src="/paralax/js/third_party/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/paralax/js/third_party/jquery.custom.js"></script>
<script type="text/javascript" src="/paralax/js/third_party/modernizr.custom.js"></script>

<script type="text/javascript" src="/paralax/js/parallax.js"></script>
<script type="text/javascript" src="/paralax/js/sample.js"></script>

</body>
</html>
