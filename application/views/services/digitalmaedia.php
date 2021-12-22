<div class="fullpage-loader"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i></div>
<div class="page-banner"><img src="../public/media/services/notebook-m.png" alt="digital media services"></div>
<?php if($this->session->userdata('site_lang') == 'arabic'){
												echo ' <div class="services-derail-page top-cont blue-patten common-padding " dir="rtl">';
												}else {
													echo ' <div class="services-derail-page top-cont blue-patten common-padding ">';
												}
												?>
<?php if($this->session->userdata('site_lang') == 'arabic'){
												echo '<div class="wrapper2" dir="rtl">';
												}else {
													echo '<div class="wrapper2" >';
												}
												?>

  <div class="wrapper2">
    <h1 class="title2"><?php echo $this->lang->line('dg1'); ?></h1>
    <div class="content-part">
      <div class="content-row">
        <div class="fiull-cont">
<p><?php echo $this->lang->line('dg2'); ?></p>
<p><?php echo $this->lang->line('dg3'); ?></p>
<p><?php echo $this->lang->line('dg4'); ?></p>
<p><?php echo $this->lang->line('dg5'); ?></p>
</div>
</div>
</div>
</div>
</div>
<div class="service-box common-padding pattern-gap">
  <div class="wrapper circle-pattern">
    <h2 class="title2"><?php echo $this->lang->line('dg6'); ?></h2>
    <p><?php echo $this->lang->line('dg7'); ?></p>
    <ul>
      <li><a href="digital-ads.html"><img src="<?php echo base_url('./Assets//public/media/services/copywriting.jpg')?>" alt="Advertisement Services"></a>
        <div class="txt-div">
          <div class="txt-div-in">
            <h2><a href="digital-ads.html"><?php echo $this->lang->line('dg8'); ?></a></h2>
            <p><?php echo $this->lang->line('dg9'); ?></p>
            <a class="common-btn" href="digital-ads.html">View<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
        </div>
      </li>
      <li><a href="postcards.html"><img src="<?php echo base_url('./Assets//public/media/services/marketing.jpg')?>" alt="Postcards"></a>
        <div class="txt-div">
          <div class="txt-div-in">
            <h2><a href="postcards.html"><?php echo $this->lang->line('dg10'); ?></a></h2>
            <p><?php echo $this->lang->line('dg11'); ?></p>
            <a class="common-btn" href="postcards.html">View<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
        </div>
      </li>
      <li><a href="emails.html"><img src="<?php echo base_url('./Assets//public/media/services/code.jpg')?>" alt="Email Services"></a>
        <div class="txt-div">
          <div class="txt-div-in">
            <h2><a href="emails.html"><?php echo $this->lang->line('dg12'); ?></a></h2>
            <p><?php echo $this->lang->line('dg13'); ?>.</p>
            <a class="common-btn" href="emails.html">View<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
        </div>
      </li>
      <div class="clr"></div>
      <li><a href="sms.html"><img src="<?php echo base_url('./Assets//public/media/services/crm4co.jpg')?>" alt="SMS services for better CRM"></a>
        <div class="txt-div">
          <div class="txt-div-in">
            <h2><a href="sms.html"><?php echo $this->lang->line('dg14'); ?></a></h2>
            <p>We offer latest solutions which achieve values from mobile devices.</p>
            <a class="common-btn" href="sms.html">View<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
        </div>
      </li>
      <li><a href="social-media.html"><img src="<?php echo base_url('./Assets//public/media/services/digital-media-m.jpg')?>" alt="Social Media Services"></a>
        <div class="txt-div">
          <div class="txt-div-in">
            <h2><a href="social-media.html"><?php echo $this->lang->line('dg15'); ?></a></h2>
            <p><?php echo $this->lang->line('dg16'); ?></p>
            <a class="common-btn" href="social-media.html">View<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
        </div>
      </li>
      <li><a href="landing-pages-for-shopping.html"><img src="<?php echo base_url('./Assets//public/media/services/erp-web-m.jpg')?>" alt="Landing Pages for Shopping"></a>
        <div class="txt-div">
          <div class="txt-div-in">
            <h2><a href="landing-pages-for-shopping.html"><?php echo $this->lang->line('dg16'); ?></a></h2>
            <p><?php echo $this->lang->line('dg17'); ?></p>
            <a class="common-btn" href="landing-pages-for-shopping.html">View<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
        </div>
      </li>
    </ul>
  </div>
</div>
<div class="top-cont common-padding common-form-style head-center">
  <div class="wrapper2">
    <h2 class="title2 center"><?php echo $this->lang->line('erp29'); ?></h2>
    <p><?php echo $this->lang->line('erp28'); ?></p>
            <form name="frmGetinTouchService" id="frmGetinTouchService" method="post" action="">
      <input type="hidden" name="service_id" value="70">
      <div class="form-row">
        <div class="form-div wid25 input">
          <input class="form-control" placeholder="<?php echo $this->lang->line('erp31'); ?>" type="text" name="name" id="name">
        </div>
        <div class="form-div wid25 input">
          <input class="form-control" placeholder="<?php echo $this->lang->line('erp32'); ?>" type="text" name="email" id="email">
        </div>
        <div class="form-div wid25 input">
			   <div class="rcode-left">
          <input type="text" name="rcode" id="rcode" class="form-control number_only tel-inp makeReadOnly">
         </div>
          <div class="rcode-right">
            <input class="form-control number_only" placeholder="<?php echo $this->lang->line('erp33'); ?>" type="text" name="mobile" id="mobile" maxlength="12">
          </div>
        </div>
        <div class="form-div wid25 input">
          <input class="form-control" placeholder="<?php echo $this->lang->line('erp34'); ?>" type="text" name="company_name" id="company_name">
        </div>
        <div class="form-div wid25 input">
          <input class="form-control" placeholder="<?php echo $this->lang->line('cont12'); ?>" type="text" name="designation" id="designation">
        </div>
        <div class="form-div wid25 input">
          <select class="form-control" name="type" id="type">
              <option value="">Select Service</option>
			 				<option value="57">Emails</option>
			 				<option value="66">SMS</option>
              <option value="68">Postcards</option>
			 				<option value="72">Digital Advertisement</option>
			 				<option value="70" selected="&quot;selected&quot;">Social Media Services</option>
			 				<option value="71">Landing Pages for Shopping</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-div input">
        <textarea class="form-control" placeholder="<?php echo $this->lang->line('cont13'); ?>" name="message" id="message"></textarea>
        </div>
      </div>
      <div class="form-row">
        <div class="form-div input disc-col">
          <input class="check" id="disclaimer_status" type="checkbox" name="disclaimer_status" checked="checked" value="Checked">
          <label for="disclaimer_status"> I have read and understood the</label>
          <a class="disc-open" href="javascript:void(0)">disclaimer</a>
          <!--   <div class="clr"></div>
          <span class="help-block">Click To Agree</span> -->
          <div class="clr"></div>
          <div class="disc-cont"> <span>Disclaimer:</span> I agree that by clicking the 'Submit' button below, I am explicitly soliciting a call from Pinnacle or its partners on my 'Mobile' in order to assist me with query on product and services.</div>
        </div>
      </div>
      <div class="form-row">
        <div class="form-div input last-col">
        <button class="common-btn" id="btn-get-in-touch-service" type="submit"><?php echo $this->lang->line('erp37'); ?><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
        <div class="loader" id="loader-get-in-touch"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i></div>
        <span class="success-msg" id="success-get-in-touch-service"></span>
        </div>
      </div>
    </form>
  </div>
</div>
<div class="clr"></div>