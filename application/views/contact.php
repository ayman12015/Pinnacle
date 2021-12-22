<div class="fullpage-loader"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i></div>
<div class="page-banner"><img src="<?php echo base_url('Assets/public/media/it.jpg')?>" alt="Contact Pinnacle"></div>
<div class="contact common-padding">
  <div class="wrapper2">
    <h1><?php echo $this->lang->line('cont1'); ?></h1>
    <div class="row martop45">
      <div class="col60">
        <div class="get-in common-padding">
          <h4><?php echo $this->lang->line('cont2'); ?></span></h4>
          <p><?php echo $this->lang->line('cont3'); ?>.</p>
          <p><a href="tel:+24918-323-4900">+249 18-323-4900</a></p>
          <p><a href="mailto:info@pinnacle-sd.com">info@pinnacle-sd.com</a></p>
        </div>
      </div>
      <div class="col35">
        <div class="address-box">
          <h4><?php echo $this->lang->line('cont4'); ?></h4>
          <address>Pinnacle Company,<br>
          Alriyadh, Aljazar street,<br>
          Khartoum, Sudan.<br>
          (postal code:11123, P.O. Box 7091).
          </address>
        </div>
        <!--<div class="add-box">
          <div class="add-box-icon mobile"><a href="tel:+24918-323-4900">+249 18-323-4900</a></div>
          <div class="add-box-icon email"><a href="mailto:info@pinnacle-sd.com">info@pinnacle-sd.com</a> <a href="mailto:ceo@pinnacle-sd.com">ceo@pinnacle-sd.com</a></div>
        </div>-->
      </div>
    </div>
  </div>
</div>
<div class="clr"></div>
<div class="get-in common-padding">
  <div class="wrapper2">
    <h1>Request a <span>Call Back</span></h1>
    <div class="row">
      <div class="col35">
        <p><?php echo $this->lang->line('cont5'); ?></p>
      </div>
      <?php if($this->session->userdata('site_lang') == 'arabic'){
												echo ' <form name="frmRequestACallBack" id="frmRequestACallBack" method="post" dir="rtl">';
												}else {
													echo ' <form name="frmRequestACallBack" id="frmRequestACallBack" method="post">';
												}
												?>

     
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
</div>
<div class="clr"></div>