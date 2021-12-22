<div class="fullpage-loader"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i></div>
<!--<div class="page-banner"><img src="../public/media/services/media-planning.jpg" alt="Media Planning Consultancy and Solutions"></div>-->
<?php if($this->session->userdata('site_lang') == 'arabic'){
												echo '<div class="services-derail-page top-cont blue-patten common-padding no-service-list" dir="rtl">';
												}else {
													echo '<div class="services-derail-page top-cont blue-patten common-padding no-service-list" >';
												}
												?>

  <div class="wrapper2">
    <h1 class="title2"><?php echo $this->lang->line('mdia1'); ?></h1>
    <div class="content-part"> <div class="content-row">
<div class="left fl-left">
<p><?php echo $this->lang->line('mdia2'); ?></p>
<p><?php echo $this->lang->line('mdia3'); ?>.</p>
</div>
<!--<div class="right fl-right">
<div class="pattern-img"><img src="../public/media/services/media-planning.jpg" alt="Media Planning"></div>
</div>-->
<div class="clr">&nbsp;</div>
<h3><?php echo $this->lang->line('mdia4'); ?></h3>
<p><?php echo $this->lang->line('mdia5'); ?></p>
<div class="left fl-left">
<ul class="bullet">
<li><strong><?php echo $this->lang->line('mdia6'); ?></strong> <?php echo $this->lang->line('mdia7'); ?></li>
<li><strong><?php echo $this->lang->line('mdia8'); ?></strong> <?php echo $this->lang->line('mdia9'); ?></li>
<li><strong><?php echo $this->lang->line('mdia10'); ?></strong> <?php echo $this->lang->line('mdia11'); ?></li>
</ul>
</div>
<div class="right fl-right">
<ul class="bullet">
<li><strong><?php echo $this->lang->line('mdia12'); ?></strong> <?php echo $this->lang->line('mdia13'); ?></li>
</ul>
</div>
<div class="clr">&nbsp;</div>
<h3><?php echo $this->lang->line('mdia14'); ?></h3>
<div class="left fl-left">
<ul class="bullet">
<li><?php echo $this->lang->line('mdia15'); ?></li>
<li><?php echo $this->lang->line('mdia16'); ?></li>
</ul>
</div>
<div class="right fl-right">
<ul class="bullet">
<li><?php echo $this->lang->line('mdia17'); ?></li>
<li><?php echo $this->lang->line('mdia18'); ?></li>
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
     <form name="frmRequestACallBack" id="frmRequestACallBack" method="post">

<div class="wrapper2">
												
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
			 				<option value="57">Content Creation</option>
			 				<option value="66">Branding</option>
              <option value="68">Copywriting</option>
			 				<option value="72" selected="&quot;selected&quot;">Media Planning</option>
			 				<option value="70">Media Purchasing</option>
			 				<option value="71">Video Production</option>
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