
<div class="fullpage-loader"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i></div>
<!--<div class="page-banner"><img src="../public/media/services/media.jpg" alt="Media Consultancy and Solutions"></div>-->
<?php if($this->session->userdata('site_lang') == 'arabic'){
												echo '<div class="services-derail-page top-cont blue-patten common-padding no-service-list" dir="rtl">';
												}else {
													echo '<div class="services-derail-page top-cont blue-patten common-padding no-service-list" >';
												}
												?>

  <div class="wrapper2">
    <h1 class="title2"><?php echo $this->lang->line('mda1'); ?></h1>
    <div class="content-part"> <div class="content-row">
<div class="left fl-left">
<p><?php echo $this->lang->line('mda2'); ?></p>
<p></p>
<p><?php echo $this->lang->line('mda13'); ?></p>
</div>
<div class="right fl-right">
<h3><?php echo $this->lang->line('mda4'); ?></h3>
<ul class="bullet">
<li><?php echo $this->lang->line('mda5'); ?></li>
<li><?php echo $this->lang->line('mda6'); ?></li>
<li><?php echo $this->lang->line('mda7'); ?></li>
<li><?php echo $this->lang->line('mda8'); ?></li>
<li><?php echo $this->lang->line('mda9'); ?></li>
</ul>
</div>
<div class="clr">&nbsp;</div>
<div class="left fl-left">
<h3><?php echo $this->lang->line('mda10'); ?></h3>
<p><?php echo $this->lang->line('mda11'); ?></p>
<p><?php echo $this->lang->line('mda12'); ?></p>
<p><?php echo $this->lang->line('mda13'); ?></p>
<ul class="bullet">
<li><?php echo $this->lang->line('mda14'); ?></li>
<li><?php echo $this->lang->line('mda15'); ?></li>

</ul>
</div>
<!--<div class="right fl-right">
<div class="pattern-img"><img src="../public/media/services/media-purchasing.jpg" alt="Media"></div>
</div>-->
<div class="clr">&nbsp;</div>
<p><strong><?php echo $this->lang->line('mda16'); ?></strong></p>
<ul class="bullet">
<li><strong><?php echo $this->lang->line('mda17'); ?></strong> <?php echo $this->lang->line('mda18'); ?></li>
<li><strong><?php echo $this->lang->line('mda19'); ?></strong> <?php echo $this->lang->line('mda20'); ?></li>
<li><strong><?php echo $this->lang->line('mda21'); ?></strong> <?php echo $this->lang->line('mda22'); ?></li>
</ul>
</div>
</div>
</div>
</div>
<div class="top-cont common-padding common-form-style head-center">
  <div class="wrapper2">
    <h2 class="title2 center"><?php echo $this->lang->line('dev55'); ?></h2>
    <p><?php echo $this->lang->line('dev56'); ?></p>
    
     <form name="frmRequestACallBack" id="frmRequestACallBack" method="post">
        <div class="col60">
          <div class="carrer-row">
            <div class="carrer-input input">
              <input type="text" placeholder="<?php echo $this->lang->line('cont7'); ?>" class="form-control" name="name" id="name">
            </div>
            <div class="carrer-input input">
              <input type="text" placeholder="<?php echo $this->lang->line('cont8'); ?>" class="form-control" name="email" id="email">
            </div>
          </div>
          <div class="carrer-row">
            <div class="carrer-input input">
              <!--<div class="rcode-left">
			        <input type="text" name="rcode" id="rcode" class="form-control number_only tel-inp makeReadOnly">
            </div>-->
              <div class="rcode-right">
              <input type="text" placeholder="<?php echo $this->lang->line('cont9'); ?>" class="form-control number_only" name="mobile" id="mobile" maxlength="12">
              </div>
            </div>
            <div class="carrer-input input">
              <select class="form-control" name="service_id" id="service_id">
                <option value=""><?php echo $this->lang->line('cont10'); ?></option>
                <option value="1">Marketing</option>
                <option value="2">IT Enabled Services</option>
                <option value="3">Digital Media Services</option>
                <option value="4">App &amp; Software Development</option>
                <option value="5">Web Development</option>
                <option value="6">ERP Services</option>
              </select>
            </div>
          </div>
          <div class="carrer-row">
            <div class="carrer-input input">
              <input type="text" placeholder="<?php echo $this->lang->line('cont11'); ?>" class="form-control" name="company_name" id="company_name">
            </div>
            <div class="carrer-input input">
              <input type="text" placeholder="<?php echo $this->lang->line('cont12'); ?>" class="form-control" name="designation" id="designation">
            </div>
          </div>
          <div class="carrer-row">
            <div class="carrer-input-full input">
              <textarea placeholder="<?php echo $this->lang->line('cont13'); ?>" class="form-control" name="message" id="message"></textarea>
            </div>
          </div>
           <div class="carrer-row">
             <div class="carrer-input-full input disc-col">
               <input class="check" id="disclaimer_status" type="checkbox" name="disclaimer_status" checked="checked" value="Checked">
               <label for="disclaimer_status"> I have read and understood the</label>
               <a class="disc-open" href="javascript:void(0)">disclaimer</a>
               <!-- <div class="clr"></div>
                    <span class="help-block">Click To Agree</span> -->
               <div class="clr"></div>
               <div class="disc-cont"> <span>Disclaimer:</span> I agree that by clicking the 'Submit' button below, I am explicitly soliciting a call from Pinnacle or its partners on my 'Mobile' in order to assist me with query on product and services. </div>
             </div>
           </div>
           <!--<div class="carrer-row">
             <div class="carrer-input-full">
              <div class="g-recaptcha" id="recaptcha1"></div>
              <span class="help-block" id="recaptcha"></span> </div>
           </div>-->
           <div class="carrer-row">
            <div class="carrer-input-full subtit-btn">
              <input type="submit" value="<?php echo $this->lang->line('cont14'); ?>" id="btn-contact-us">
              <div class="loader" id="loader-contact-us"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i></div>
              <span class="success-msg" id="success-contact-us"></span> </div>
           </div>
        </div>
      </form>
  </div>
</div>
<div class="clr"></div>
