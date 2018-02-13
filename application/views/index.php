<!DOCTYPE html>
<html lang="en">
<head>
<title>AirLines</title>
<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo base_url('gudang/maskapai/') ?>css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo base_url('gudang/maskapai/') ?>css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo base_url('gudang/maskapai/') ?>css/style.css" type="text/css" media="all">
<script type="text/javascript" src="<?php echo base_url('gudang/maskapai/') ?>js/jquery-1.5.2.js" ></script>
<script type="text/javascript" src="<?php echo base_url('gudang/maskapai/') ?>js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo base_url('gudang/maskapai/') ?>js/cufon-replace.js"></script>
<script type="text/javascript" src="<?php echo base_url('gudang/maskapai/') ?>js/Cabin_400.font.js"></script>
<script type="text/javascript" src="<?php echo base_url('gudang/maskapai/') ?>js/tabs.js"></script>
<script type="text/javascript" src="<?php echo base_url('gudang/maskapai/') ?>js/jquery.jqtransform.js" ></script>
<script type="text/javascript" src="<?php echo base_url('gudang/maskapai/') ?>js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="<?php echo base_url('gudang/maskapai/') ?>js/atooltip.jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url('gudang/maskapai/') ?>js/script.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<style type="text/css">.main, .tabs ul.nav a, .content, .button1, .box1, .top { behavior:url("../js/PIE.htc")}</style>
<![endif]-->
</head>
<body id="page1">
<div class="main">
  <!--header -->
  <header>
    <div class="wrapper">
      <h1><a href="index.php" id="logo">AirLines</a></h1>
      <span id="slogan">Fast, Frequent &amp; Safe Flights</span>
      <nav id="top_nav">
        <ul>
      </nav>
    </div>
    <nav>
      <ul id="menu">
        <li id="menu_active"><a href="index.php"><span><span>Home</span></span></a></li>
        <li><a href="<?php echo base_url('index.php/backend/tampil') ?>"><span><span>Book</span></span></a></li>
        
      
      </ul>
    </nav>
  </header>
  <!-- / header -->
  <!--content -->
  <section id="content">
    <div class="for_banners">
      <article class="col1">
        <div class="tabs">
          <ul class="nav">
            <li class="selected"><a href="#Flight">Flight</a></li>
            <li><a href="#Hotel"></a></li>
            <li class="end"><a href="#Rental"></a></li>
          </ul>
          <div class="content">
            <div class="tab-content" id="Flight">
              <form id="form_1" action="#" method="post">
                <div>
                  <div class="radio">
                    <div class="wrapper">
                      <input type="radio" name="name1" checked>
                      <span class="left">Standard</span>
                      <input type="radio" name="name1">
                      <span class="left"></span> </div>
                  </div>
                  <div class="row"> <span class="left">From</span>
                    <input type="text" class="input">
                  </div>
                  <div class="row"> <span class="left">To</span>
                    <input type="text" class="input">
                  </div>
                  <div class="wrapper">
                    <div class="col1">
                      <div class="row"> <span class="left">Outbound</span>
                        <input type="text" class="input1" value="03.05.2011"  onblur="if(this.value=='') this.value='03.05.2011'" onFocus="if(this.value =='03.05.2011' ) this.value=''">
                      </div>
                      <div class="row"> <span class="left">Return</span>
                        <input type="text" class="input1" value="10.05.2011"  onblur="if(this.value=='') this.value='10.05.2011'" onFocus="if(this.value =='10.05.2011' ) this.value=''">
                      </div>
                    </div>
                    <input type="text" class="input1 marg_top1" value="+/- 0 Days"  onblur="if(this.value=='') this.value='+/- 0 Days'" onFocus="if(this.value =='+/- 0 Days' ) this.value=''">
                  </div>
                  <div class="row"> <span class="left">Adults</span>
                    <input type="text" class="input2" value="2"  onblur="if(this.value=='') this.value='2'" onFocus="if(this.value =='2' ) this.value=''">
                  </div>
                  <div class="row"> <span class="left">Children</span>
                    <input type="text" class="input2" value="0"  onblur="if(this.value=='') this.value='0'" onFocus="if(this.value =='0' ) this.value=''">
                    <span class="pad_left1">(0-11 years)</span> </div>
                  <div class="wrapper"> <span class="right relative"><a href="#" class="button1"><strong>Search</strong></a></span> <a href="#" class="link1">
                    
                  </a> </div>
                </div>
              </form>
            </div>
            <div class="tab-content" id="Hotel">
              <form id="form_2" action="#" method="post">
                <div>
                  <div class="radio">
                    <div class="wrapper">
                      <input type="checkbox" checked>
                      Our Partners </div>
                  </div>
                  <div class="row"> <span class="left">Location</span>
                    <input type="text" class="input">
                  </div>
                  <div class="row"> <span class="left">Check-in </span>
                    <input type="text" class="input1" value="03.05.2011"  onblur="if(this.value=='') this.value='03.05.2011'" onFocus="if(this.value =='03.05.2011' ) this.value=''">
                    <a href="#" class="help"></a> </div>
                  <div class="row"> <span class="left">Check-out </span>
                    <input type="text" class="input1" value="10.05.2011"  onblur="if(this.value=='') this.value='10.05.2011'" onFocus="if(this.value =='10.05.2011' ) this.value=''">
                    <a href="#" class="help"></a> </div>
                  <div class="row"> <span class="left">Rooms</span>
                    <input type="text" class="input2" value="1"  onblur="if(this.value=='') this.value='1'" onFocus="if(this.value =='1' ) this.value=''">
                    <a href="#" class="help"></a> </div>
                  <div class="row"> <span class="left">Adults</span>
                    <input type="text" class="input2" value="2"  onblur="if(this.value=='') this.value='2'" onFocus="if(this.value =='2' ) this.value=''">
                  </div>
                  <div class="row"> <span class="left">Children</span>
                    <input type="text" class="input2" value="0"  onblur="if(this.value=='') this.value='0'" onFocus="if(this.value =='0' ) this.value=''">
                    <span class="pad_left1">(0-11 years)</span> </div>
                  <div class="wrapper"> <span class="right relative"><a href="#" class="button1"><strong>Search</strong></a></span> <a href="#" class="link1">More Options</a> </div>
                </div>
              </form>
            </div>
            <div class="tab-content" id="Rental">
              <form id="form_3" action="#" method="post">
                <div>
                  <div class="radio">
                    <div class="wrapper">
                      <input type="radio" name="name2" checked>
                      <span class="left">Avis</span>
                      <input type="radio" name="name2">
                      <span class="left">Europcar</span> </div>
                  </div>
                  <div class="row"> <span class="left">Rental location</span>
                    <input type="text" class="input">
                  </div>
                  <div class="row"> <span class="left">Pick-up</span>
                    <input type="text" class="input1" value="03.05.2011"  onblur="if(this.value=='') this.value='03.05.2011'" onFocus="if(this.value =='03.05.2011' ) this.value=''">
                    <input type="text" class="input2" value="12:00"  onblur="if(this.value=='') this.value='12:00'" onFocus="if(this.value =='12:00' ) this.value=''">
                  </div>
                  <div class="row"> <span class="left">Return</span>
                    <input type="text" class="input1" value="10.05.2011"  onblur="if(this.value=='') this.value='10.05.2011'" onFocus="if(this.value =='10.05.2011' ) this.value=''">
                    <input type="text" class="input2" value="12:00"  onblur="if(this.value=='') this.value='12:00'" onFocus="if(this.value =='12:00' ) this.value=''">
                  </div>
                  <div class="row_select"> <span class="left">Miles &amp; More</span>
                    <select>
                      <option>no membership</option>
                    </select>
                  </div>
                  <div class="row_select">
                    <div class="pad_left1"> Country of residence<br>
                      <div class="select1">
                        <select>
                          <option>&nbsp;</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="wrapper"> <span class="right relative"><a href="#" class="button1"><strong>Search</strong></a></span> </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </article>
      <div id="slider"> <img src="images/banner1.jpg" alt=""> <img src="images/banner2.jpg" alt=""> <img src="images/banner3.jpg" alt=""> </div>
    </div>
    
  </section>
  <!--content end-->
  <!--footer -->
  <footer>
    <div class="wrapper">
      <ul id="icons">
        <li><a href="#" class="normaltip"><img src="gudang/maskapai/images/icon1.jpg" alt=""></a></li>
        <li><a href="#" class="normaltip"><img src="gudang/maskapai/images/icon2.jpg" alt=""></a></li>
        <li><a href="#" class="normaltip"><img src="gudang/maskapai/images/icon3.jpg" alt=""></a></li>
        <li><a href="#" class="normaltip"><img src="gudang/maskapai/images/icon4.jpg" alt=""></a></li>
        <li><a href="#" class="normaltip"><img src="gudang/maskapai/images/icon5.jpg" alt=""></a></li>
        <li><a href="#" class="normaltip"><img src="gudang/maskapai/images/icon6.jpg" alt=""></a></li>
      </ul>
      <div class="links">Copyright &copy; <a href="#">Domain Name</a> All Rights Reserved<br>
        Design by <a target="_blank" href="http://www.templatemonster.com/">TemplateMonster.com</a></div>
    </div>
  </footer>
  <!--footer end-->
</div>
<script type="text/javascript">Cufon.now();</script>
<script type="text/javascript">
$(document).ready(function () {
    tabs.init();
});
jQuery(document).ready(function ($) {
    $('#form_1, #form_2, #form_3').jqTransform({
        imgPath: 'jqtransformplugin/img/'
    });
});
$(window).load(function () {
    $('#slider').nivoSlider({
        effect: 'fade', //Specify sets like: 'fold,fade,sliceDown, sliceDownLeft, sliceUp, sliceUpLeft, sliceUpDown, sliceUpDownLeft' 
        slices: 15,
        animSpeed: 500,
        pauseTime: 6000,
        startSlide: 0, //Set starting Slide (0 index)
        directionNav: false, //Next & Prev
        directionNavHide: false, //Only show on hover
        controlNav: false, //1,2,3...
        controlNavThumbs: false, //Use thumbnails for Control Nav
        controlNavThumbsFromRel: false, //Use image rel for thumbs
        controlNavThumbsSearch: '.jpg', //Replace this with...
        controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
        keyboardNav: true, //Use left & right arrows
        pauseOnHover: true, //Stop animation while hovering
        manualAdvance: false, //Force manual transitions
        captionOpacity: 1, //Universal caption opacity
        beforeChange: function () {},
        afterChange: function () {},
        slideshowEnd: function () {} //Triggers after all slides have been shown
    });
});
</script>
</body>
</html>