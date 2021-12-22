<div class="fullpage-loader"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i></div>
<!--<div class="page-banner"><img src="../public/media/services/redefining-industries.jpg" alt="Redefining Industries"></div>-->

<?php if($this->session->userdata('site_lang') == 'arabic'){
												echo '<div class="services-derail-page top-cont blue-patten common-padding " dir="rtl"> ';
												}else {
													echo ' <form name="frmRequestACallBack" id="frmRequestACallBack" method="post">';
												}
												?>
<?php if($this->session->userdata('site_lang') == 'arabic'){
												echo '<div class="services-derail-page top-cont blue-patten common-padding "> ';
												}else {
													echo '<div class="wrapper2" >';
												}
												?>
  <div class="wrapper2">
    <h1 class="title2"><?php echo $this->lang->line('red1'); ?></h1> 
    <div class="content-part"> <div class="content-row">
<div class="fiull-cont">
<p><?php echo $this->lang->line('red2'); ?></p>
<p><?php echo $this->lang->line('red3'); ?></p>
<p><?php echo $this->lang->line('red4'); ?></p>
<div class="left fl-left">
<h3><?php echo $this->lang->line('red5'); ?></h3>
<ul class="bullet">
<li><?php echo $this->lang->line('red6'); ?></li>
<li><?php echo $this->lang->line('red7'); ?></li>
<li><?php echo $this->lang->line('red8'); ?></li>
<li><?php echo $this->lang->line('red9'); ?></li>
<li><?php echo $this->lang->line('red10'); ?></li>
<li><?php echo $this->lang->line('red11'); ?></li>
</ul>
</div>
<!--<div class="right fl-right">
<div class="pattern-img2"><img src="../public/media/services/industries.jpg" alt=""></div>
</div>-->
<div class="clr">&nbsp;</div>
<p>&nbsp;</p>
<h3><?php echo $this->lang->line('red12'); ?></h3>
<ul class="bullet">
<li><?php echo $this->lang->line('red13'); ?></li>
<li><?php echo $this->lang->line('red14'); ?></li>
<li><?php echo $this->lang->line('red15'); ?></li>
</ul>
</div>
</div>
</div>
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
          <input class="form-control" placeholder="<?php echo $this->lang->line('con12'); ?>" type="text" name="designation" id="designation">
        </div>
        <div class="form-div wid25 input">
          <select class="form-control" name="type" id="type">
              <option value=""><?php echo $this->lang->line('erp35'); ?></option>
			 				<option value="57">Manufacturing</option>
			 				<option value="66" selected="&quot;selected&quot;">Redefining Industries</option>
			 				<option value="72">Logistics</option>
			 				<option value="70">App Development</option>
			 				<option value="71">Retail &amp; E-commerce</option>
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