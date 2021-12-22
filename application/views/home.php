<div class="fullpage-loader" ><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i></div>
<div id="slider-with-blocks-1" class="royalSlider rsMinW " >
  <div class="rsContent slide5" style="background: url(Assets/public/media/services/iphone-xs.jpg) left top no-repeat; background-size: cover;">
    <img class="for-mobile-sld" src="<?php echo base_url('Assets/public/media/services/iphone-xs-m.jpg')?>" alt="Software & App development services">
    <div class="rsABlock banner-txt" data-move-effect="left" data-delay="300" >
      <div class="wrapper">
        <div class="inner-txt">
          <h1><span><?php echo $this->lang->line('paragraph1'); ?></span><?php echo $this->lang->line('paragraph2'); ?></h1>
          <p><?php echo $this->lang->line('paragraph3'); ?></p>
          <a class="read-more common-btn" target="_blank"  href="<?php echo base_url('home/appdev')?>" ><?php echo $this->lang->line('learnbtn'); ?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
      </div>
    </div>  
  </div>
  <div class="rsContent slide2" style="background: url(Assets/public/media/services/notebook.png) 50% 40% no-repeat;background-size: cover;">
    <img class="for-mobile-sld" src="<?php echo base_url('Assets/public/media/services/notebook-m.png')?>" alt="Marketing services">
    <div class="rsABlock banner-txt" data-move-effect="left" data-delay="300">
      <div class="wrapper">
        <div class="inner-txt">
          <h1><span><?php echo $this->lang->line('second_paragraph1'); ?></span><?php echo $this->lang->line('second_paragraph2'); ?></h1>
          <p><?php echo $this->lang->line('second_paragraph3'); ?>.</p>
          <a class="read-more common-btn" target="_blank"  href="<?php echo base_url('home/mark')?>" ><?php echo $this->lang->line('learnbtn'); ?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
      </div>
    </div>
  </div>
  <div class="rsContent slide3" style="background: url(Assets/public/media/services/cctv.jpg) no-repeat; background-size: cover;">
    <img class="for-mobile-sld" src="<?php echo base_url('Assets/public/media/services/cctv-m.jpg')?>" alt="IT Enabled Services">
    <div class="rsABlock banner-txt" data-move-effect="left" data-delay="300">
      <div class="wrapper">
        <div class="inner-txt">
          <h1><span><?php echo $this->lang->line('third_paragraph1'); ?></span> <?php echo $this->lang->line('third_paragraph2'); ?></h1>
          <p><?php echo $this->lang->line('third_paragraph3'); ?></p>
          <a class="read-more common-btn" target="_blank"  href="services/it-enabled-services.html"><?php echo $this->lang->line('learnbtn'); ?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
      </div>
    </div>
  </div>
  <div class="rsContent slide4" style="background: url(Assets/public/media/services/digital-media.jpg) right top no-repeat; background-size: cover;">
    <img class="for-mobile-sld" src="<?php echo base_url('Assets/public/media/services/digital-media-m.jpg')?>" alt="Digital Media Services">
    <div class="rsABlock banner-txt" data-move-effect="left" data-delay="300">
      <div class="wrapper">
        <div class="inner-txt">
          <h1><span><?php echo $this->lang->line('for_paragraph1'); ?></span><?php echo $this->lang->line('for_paragraph2'); ?></h1>
          <p><?php echo $this->lang->line('for_paragraph3'); ?></p>
          <a class="read-more common-btn" target="_blank"  href="<?php echo base_url('home/digitalmaedia')?>" ><?php echo $this->lang->line('learnbtn'); ?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
      </div>
    </div>
  </div>
  <div  class="rsContent slide6" style="background: url(Assets/public/media/services/erp-web.jpg) center center no-repeat; background-size: cover;">
    <img class="for-mobile-sld" src="<?php echo base_url('Assets/public/media/services/erp-web-m.jpg')?>" alt="Web services">
    <div class="rsABlock banner-txt" data-move-effect="left" data-delay="300">
      <div class="wrapper">
        <div class="inner-txt">
          <h1><span><?php echo $this->lang->line('fiv_paragraph1'); ?></span><?php echo $this->lang->line('fiv_paragraph2'); ?></h1>
          <p><?php echo $this->lang->line('fiv_paragraph3'); ?></p>
          <a class="read-more common-btn" target="_blank"  href="<?php echo base_url('home/web')?>" ><?php echo $this->lang->line('learnbtn'); ?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
      </div>
    </div>
  </div>
  <div  class="rsContent slide6" style="background: url(Assets/public/media/services/erp-web.jpg) center center no-repeat; background-size: cover;">
    <img class="for-mobile-sld" src="Assets/public/media/services/erp-web-m.jpg" alt="ERP services">
    <div class="rsABlock banner-txt" data-move-effect="left" data-delay="300">
      <div class="wrapper">
        <div class="inner-txt">
          <h1><span><?php echo $this->lang->line('six_paragraph1'); ?> </span><?php echo $this->lang->line('six_paragraph2'); ?> </h1>
          <p><?php echo $this->lang->line('six_paragraph3'); ?> </p>
          <a class="read-more common-btn" target="_blank"  href="<?php echo base_url('home/erp')?>" ><?php echo $this->lang->line('six_paragraph4'); ?><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
      </div>
    </div>
  </div>
</div>

<?php if($this->session->userdata('site_lang') == 'arabic'){
												echo ' <div class="about-box common-padding" dir="rtl">';
												}else {
													echo '<div class="about-box common-padding">';
												}
												?>
<?php if($this->session->userdata('site_lang') == 'arabic'){
												echo '<div class="wrapper2" dir="rtl">';
												}else {
													echo '<div class="wrapper2" >';
												}
												?>
  
    <h2 class="title2"><?php echo $this->lang->line('aboutus'); ?> </h2>
    <p><?php echo $this->lang->line('aboutsec'); ?> <span class="il"><?php echo $this->lang->line('abotu2'); ?></span>.<?php echo $this->lang->line('abotu3'); ?></p>
<div class="about-slider">
  <div id="horizontalTab">
    <div class="left fl-left">
      <ul class="resp-tabs-list">
        <li><?php echo $this->lang->line('agile1'); ?></li>
        <li><?php echo $this->lang->line('agile2'); ?></li>
        <li><?php echo $this->lang->line('agile3'); ?></li>
        <li><?php echo $this->lang->line('agile4'); ?></li>
      </ul>
      <a class="common-btn" href="<?php echo base_url('home/about'); ?>"><?php echo $this->lang->line('agile5'); ?></a>
    </div>
    <div class="resp-tabs-container right circle-pattern fl-right">
      <div class="pattern-img"><img src="<?php echo base_url('Assets/public/media/about/1.jpg')?>" alt="Increasing Agility" /></div>
      <div class="pattern-img"><img src="<?php echo base_url('Assets/public/media/about/2.jpg')?>" alt="Flexibility" /></div>
      <div class="pattern-img"><img src="<?php echo base_url('Assets/public/media/about/3.jpg')?>" alt="Simplifying System Integration" /></div>
      <div class="pattern-img"><img src="<?php echo base_url('Assets/public/media/about/4.jpg')?>" alt="Innovating to Lead" /></div>
    </div>
  </div>
</div>
</div>
</div>
<div class="service-box common-padding pattern-gap">
  <div class="wrapper circle-pattern">
    <h1><?php echo $this->lang->line('serv1'); ?> </h1>
    <p><?php echo $this->lang->line('serv2'); ?></p>
    <ul>
      <li><a href="services/marketing.html"><img src="<?php echo base_url('Assets/public/media/services/index/apple-s.jpg')?>" alt="Marketing" /></a>
        <div class="txt-div">
          <div class="txt-div-in">
            <h2><a href="services/marketing.html"><?php echo $this->lang->line('agile3'); ?></a></h2>
            <p><?php echo $this->lang->line('serv4'); ?></p>
            <a class="common-btn" href="services/marketing.html"><?php echo $this->lang->line('servview'); ?><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
        </div>
      </li>
      <li><a href="services/it-enabled-services.html"><img src="<?php echo base_url('Assets/public/media/services/index/dell-s.png')?>" alt="IT Enabled Services" /></a>
        <div class="txt-div">
          <div class="txt-div-in">
            <h2><a href="services/it-enabled-services.html"><?php echo $this->lang->line('serv5'); ?></a></h2>
            <p><?php echo $this->lang->line('serv6'); ?></p>
            <a class="common-btn" href="services/it-enabled-services.html"><?php echo $this->lang->line('servview'); ?><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
        </div>
      </li>
      <li><a href="services/digital-media.html"><img src="<?php echo base_url('Assets/public/media/services/index/copywriting-s.jpg')?>" alt="digital media consulting" /></a>
        <div class="txt-div">
          <div class="txt-div-in">
            <h2><a href="services/digital-media.html"><?php echo $this->lang->line('serv7'); ?></a></h2>
            <p><?php echo $this->lang->line('serv8'); ?></p>
            <a class="common-btn" href="services/digital-media.html"><?php echo $this->lang->line('servview'); ?><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
        </div>
      </li>
      <li><a href="services/app-software-development.html"><img src="<?php echo base_url('Assets/public/media/services/index/code-s.jpg')?>" alt="App &amp; Software Development" /></a>
        <div class="txt-div">
          <div class="txt-div-in">
            <h2><a href="services/app-software-development.html"><?php echo $this->lang->line('serv11'); ?></a></h2>
            <p><?php echo $this->lang->line('serv12'); ?>.</p>
            <a class="common-btn" href="services/app-software-development.html"><?php echo $this->lang->line('servview'); ?><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
        </div>
      </li>
      <li><a href="services/erp.html"><img src="<?php echo base_url('Assets/public/media/services/index/crm.jpg')?>" alt="ERP" /></a>
        <div class="txt-div">
          <div class="txt-div-in">
            <h2><a href="services/erp.html"><?php echo $this->lang->line('serv13'); ?></a></h2>
            <p><?php echo $this->lang->line('serv14'); ?></p>
            <a class="common-btn" href="services/erp.html"><?php echo $this->lang->line('servview'); ?><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
        </div>
      </li>
    </ul>
  </div>
</div>
<div id="project-bar">
  <div class="bar-chart">
    <div class="txt-comn pst-01">+10 YEARS <span>of excellence</span></div>
    <div class="txt-comn pst-02">+20 <span>software engineers</span></div>
    <div class="txt-comn pst-03">+50 <span>employees</span></div>
    <div class="txt-comn pst-04">100% <span>bilingual professionals</span></div>
    <div class="txt-comn pst-04-02">+20 <span>GLOBAL projects across 4 countries</span></div>
    <div class="txt-comn pst-05">+200 <span>domestic projects</span></div>
    <div class="txt-comn pst-06">+350 <span>customers</span></div>
    <div class="txt-comn pst-07">1st <span>IT Solutions company in Sudan</span></div>
  </div>
</div>
<div class="project-box common-padding">
  <div class="wrapper2">
    <h2 class="title2 center"><?php echo $this->lang->line('del1'); ?></h2>
    <p><?php echo $this->lang->line('del2'); ?></p>
    <div class="pro-boxes circle-pattern">
      <div class="up-boxes">
        <div class="left fl-left">
          <div class="image-div">
            <a href="services/web.html"><img src="<?php echo base_url('Assets/public/media/services/code.jpg')?>" alt="Web Development" /></a>
            <a href="services/web.html"><h3><?php echo $this->lang->line('del3'); ?></h3></a>
          </div>
        </div>
        <div class="right fl-right">
          <div class="image-div">
            <a href="services/it-enabled-services.html"><img src="<?php echo base_url('Assets/public/media/about/4.jpg')?>" alt="IT Enabled Services" /></a>
            <a href="services/it-enabled-services.html"><h3><?php echo $this->lang->line('del4'); ?></h3></a>
          </div>
        </div>
      </div>
      <div class="bottom-boxes">
        <div class="one fl-left">
          <div class="image-div">
            <div class="normal-img"><a href="services/app-software-development.html"><img src="<?php echo base_url('Assets/public/media/services/data.jpg')?>" alt="App and Software Development" /></a>
              <a href="services/app-software-development.html"><h3><?php echo $this->lang->line('del5'); ?></h3></a>
            </div>
          </div>
          <div class="clr"></div>
          <div class="image-div"><a href="services/networking.html"><img src="<?php echo base_url('Assets/public/media/services/networking.jpg')?>" alt="Network and Unified Communication" /></a>
            <a href="services/networking.html"><h3><?php echo $this->lang->line('del6'); ?></h3></a>
          </div>
        </div>
        <div class="two fl-left">
          <div class="image-div"><a href="services/marketing.html"><img src="<?php echo base_url('Assets/public/media/services/sale.jpg')?>" alt="Marketing" /></a>
            <a href="services/marketing.html"><h3><?php echo $this->lang->line('del7'); ?></h3></a>
          </div>
        </div>
        <div class="three fl-right">
          <div class="image-div managed"><a href="services/business-continuity.html"><img  src="<?php echo base_url('Assets/public/media/services/continuity.jpg')?>" alt="Business Solutions" /></a>
            <a href="services/business-continuity.html"><h3><?php echo $this->lang->line('del8'); ?></h3></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>