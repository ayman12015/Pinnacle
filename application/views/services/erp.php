<div class="fullpage-loader"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i></div>
<div class="page-banner"><img src="../public/media/services/erp-web-m.jpg"  alt="ERP" /></div>
<div class="services-derail-page top-cont blue-patten common-padding no-service-list">
  <div class="wrapper2">
    <h1 class="title2"><?php echo $this->lang->line('erp1'); ?></h1>
    <div class="content-part">
      <div class="content-row">
<div class="left fl-left">
<p><?php echo $this->lang->line('erp2'); ?></p>
<h3>ERP</h3>
<p><?php echo $this->lang->line('erp3'); ?></p>
</div>
<!--<div class="right fl-right">
<div class="pattern-img"><img src="/public/assets/images/ai.jpg" alt="" /></div>
</div>-->
<div class="clr">&nbsp;</div>
<p>&nbsp;</p>
<div class="left fl-left">
<h3><?php echo $this->lang->line('erp4'); ?></h3>
<p><strong>Consulting</strong></p>
<p><?php echo $this->lang->line('erp5'); ?></p>
<p><?php echo $this->lang->line('erp6'); ?></p>
<p><?php echo $this->lang->line('erp7'); ?></p>
<p><?php echo $this->lang->line('erp8'); ?></p>
<h3><?php echo $this->lang->line('erp9'); ?></h3>
<p><?php echo $this->lang->line('erp10'); ?></p>
</div>
<div class="right fl-right">
<h3><?php echo $this->lang->line('erp11'); ?></h3>
<p><?php echo $this->lang->line('erp12'); ?></p>
<h3><?php echo $this->lang->line('erp13'); ?></h3>
<p><?php echo $this->lang->line('erp14'); ?></p>
<p><strong><?php echo $this->lang->line('erp15'); ?></strong></p>
<p><?php echo $this->lang->line('erp16'); ?></p>
<p><strong><?php echo $this->lang->line('erp17'); ?></strong></p>
<p><?php echo $this->lang->line('erp18'); ?></p>
<p><strong><?php echo $this->lang->line('erp19'); ?></strong></p>
<p><?php echo $this->lang->line('erp20'); ?></p>
</div>
<div class="clr">&nbsp;</div>
<div class="left fl-left">
<h3><?php echo $this->lang->line('erp21'); ?></h3>
<p><?php echo $this->lang->line('erp22'); ?></p>
</div>
<div class="right fl-right">
<p><?php echo $this->lang->line('erp23'); ?></p>
<p><strong><?php echo $this->lang->line('erp24'); ?></strong></p>
<p><strong><?php echo $this->lang->line('erp25'); ?></strong></p>
<p><strong><?php echo $this->lang->line('erp26'); ?></strong></p>
<p><strong><?php echo $this->lang->line('erp27'); ?></strong></p>
</div>
</div>
</div>
</div>
</div>
<div class="top-cont common-padding common-form-style head-center">
  <div class="wrapper2">
    <h2 class="title2 center"><?php echo $this->lang->line('erp28'); ?></h2>
    <p><?php echo $this->lang->line('erp29'); ?></p>
    <?php if($this->session->userdata('site_lang') == 'arabic'){
												echo ' <form name="frmRequestACallBack" id="frmRequestACallBack" method="post" dir="rtl">';
												}else {
													echo ' <form name="frmRequestACallBack" id="frmRequestACallBack" method="post">';
												}
												?>
<?php if($this->session->userdata('site_lang') == 'arabic'){
												echo '<div class="wrapper2" dir="rtl">';
												}else {
													echo '<div class="wrapper2" >';
												}
												?>
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
          <input class="form-control" placeholder="<?php echo $this->lang->line('erp35'); ?>" type="text" name="designation" id="designation">
        </div>
        <div class="form-div wid25 input">
          <select class="form-control" name="type" id="type">
              <option value="">Select Service</option>
			 				<option value="70" selected="&quot;selected&quot;">ERP Services</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-div input">
        <textarea class="form-control" placeholder="<?php echo $this->lang->line('erp36'); ?>" name="message" id="message"></textarea>
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
