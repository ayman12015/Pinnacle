<div class="fullpage-loader"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i></div>
<div class="page-banner"><img src="<?php echo base_url('Assets/public/media/services/careers.jpg')?>" alt="Careers at Pinnacle"></div>
<?php if($this->session->userdata('site_lang') == 'arabic'){
												echo '<div class="common-padding" dir="rtl">';
												}else {
													echo '<div class="about-padd top-cont common-padding">';
												}
												?>
<?php if($this->session->userdata('site_lang') == 'arabic'){
												echo '<div class="wrapper2" dir="rtl">';
												}else {
													echo '<div class="common-padding">';
												}
												?>


  <div class="wrapper2 content-part">
    <div class="right fl-right">
      <h4><?php echo $this->lang->line('car1'); ?></h4>
      <p> <?php echo $this->lang->line('car2'); ?></p>
      <p><?php echo $this->lang->line('car3'); ?></p>
      <p><?php echo $this->lang->line('car4'); ?>.</p>
    </div>
    <div class="left fl-left"><img src="<?php echo base_url('Assets/public/media/about/1.jpg')?>" alt=""></div>
    <div class="clr">&nbsp;</div>
    <ul class="carrer-job-list">
      <li>
        <div class="job-box"><img src="<?php echo base_url('Assets/public/media/careers/creativity.jpg')?>" alt="">
          <div class="job-content">
            <h6><?php echo $this->lang->line('car5'); ?></h6>
            <p><?php echo $this->lang->line('car6'); ?></p>
          </div>
        </div>
      </li>
      <li>
        <div class="job-box"><img src="<?php echo base_url('Assets/public/media/careers/equality.jpg')?>" alt="">
          <div class="job-content">
            <h6><?php echo $this->lang->line('car7'); ?></h6>
            <p><?php echo $this->lang->line('car8'); ?>.</p>
          </div>
        </div>
      </li>
      <li>
        <div class="job-box"><img src="<?php echo base_url('Assets/public/media/careers/long-term.jpg')?>" alt="">
          <div class="job-content">
            <h6><?php echo $this->lang->line('car9'); ?></h6>
            <p><?php echo $this->lang->line('car10'); ?></p>
          </div>
        </div>
      </li>
      <li>
        <div class="job-box"><img src="<?php echo base_url('Assets/public/media/careers/growth.jpg')?>" alt="">
          <div class="job-content">
            <h6><?php echo $this->lang->line('car11'); ?></h6>
            <p><?php echo $this->lang->line('car12'); ?></p>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
<div class="scenes-sec common-padding pattern-gap">
  <div class="wrapper">
    <h1><?php echo $this->lang->line('car22'); ?></span></h1>
    <p><?php echo $this->lang->line('car23'); ?></p>
  </div>
</div>
<div class="scroll-hidden" id="view-sec2">&nbsp;</div>
<div class="view-sec common-padding">
  <div class="wrapper2 circle-pattern">
    <h1><?php echo $this->lang->line('car24'); ?></span></h1>
    <p><?php echo $this->lang->line('car25'); ?></p>
    <form name="frmCarrerSearch" id="frmCarrerSearch" method="post" action="">
      <div class="flt-carrer">
        <div class="flt-col">
          <label><?php echo $this->lang->line('car27'); ?></label>
          <div class="input">
            <input type="text" placeholder="<?php echo $this->lang->line('car28'); ?>" name="title" id="title">
          </div>
          <div class="input search-career">
            <input type="submit" name="btn-carrer-search" id="btn-carrer-search" value="<?php echo $this->lang->line('car26'); ?>">
            <div class="loader" id="loader-carrer-search"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i></div>
          </div>
        </div>
      </div>
    </form>
    <div id="result-data">
      <div class="view-list">
        <div class="job-head"><?php echo $this->lang->line('car29'); ?></div>
        <div class="view-row">
          <div class="view-col">
            <div class="view-head">01<span>opening</span></div>
          </div>
          <div class="view-col2">
            <div class="job-listing"><a href="careers/payroll-executive.html">Payroll Executive</a></div>
          </div>
        </div>
      </div>
      <div class="view-list">
        <div class="job-head"><?php echo $this->lang->line('car30'); ?></div>
        <div class="view-row">
          <div class="view-col">
            <div class="view-head">02<span>opening</span></div>
          </div>
          <div class="view-col2">
            <div class="job-listing"><a href="careers/hr-executive.html">HR Executive</a></div>
          </div>
        </div>
      </div>
      <div class="view-list">
        <div class="job-head"><?php echo $this->lang->line('car31'); ?></div>
        <div class="view-row">
          <div class="view-col">
            <div class="view-head">03<span>opening</span></div>
          </div>
          <div class="view-col2">
            <div class="job-listing"><a href="careers/business-development-manager-executive.html">Business Development Manager/Executive-Hardware</a></div>
                            <div class="job-listing"><a href="careers/business-development-manager-Executive-network.html">Business Development Manager/Executive-Network</a></div>
                            <div class="job-listing"><a href="careers/business-development-manager-executive-software.html">Business Development Manager/Executive-Software</a></div>
                      </div>
</div>
</div>
<div class="view-list">
  <div class="job-head"><?php echo $this->lang->line('car32'); ?></div>
  <div class="view-row">
    <div class="view-col">
      <div class="view-head">04<span>opening</span></div>
    </div>
    <div class="view-col2">
                        <div class="job-listing"><a href="careers/desktop-engineer.html">Desktop Engineer</a></div>
                            <div class="job-listing"><a href="careers/exchange-admin.html">Exchange  Admin</a></div>
                            <div class="job-listing"><a href="careers/it-helpdesk-executive.html">IT Helpdesk Executive</a></div>
                            <div class="job-listing"><a href="careers/lync-admin.html">Lync  Admin</a></div>
                            <div class="job-listing"><a href="careers/exchange.html">O365 + Exchange Admin</a></div>
                            <div class="job-listing"><a href="careers/admin.html">O365-admin</a></div>
                            <div class="job-listing"><a href="careers/project-engineer.html">Project Engineer</a></div>
                            <div class="job-listing"><a href="careers/remote-desktop-engineer.html">Remote Desktop Engineer</a></div>
                            <div class="job-listing"><a href="careers/sccm-admin.html">SCCM Admin</a></div>
                            <div class="job-listing"><a href="careers/system-admin.html">System Admin</a></div>
                      </div>
</div>
</div>
<div class="view-list">
  <div class="job-head"><?php echo $this->lang->line('car33'); ?></div>
  <div class="view-row">
    <div class="view-col">
      <div class="view-head">05<span>opening</span></div>
    </div>
    <div class="view-col2">
                        <div class="job-listing"><a href="careers/dot-net-mvc-developer-delhi-gurgaon-noida.html">.Net MVC Developer</a></div>
                            <div class="job-listing"><a href="careers/angular-dotnet.html">Angular JS with .NET Developer</a></div>
                            <div class="job-listing"><a href="careers/associate-consultant-analytics.html">Associate Consultant- Analytics</a></div>
                            <div class="job-listing"><a href="careers/associate-consultant-bI.html">Associate Consultant- BI</a></div>
                            <div class="job-listing"><a href="careers/consultant-azure.html">Consultant – Azure (MS Cloud)</a></div>
                            <div class="job-listing"><a href="careers/consultant-azure-presales.html">Consultant – Azure Presales</a></div>
                            <div class="job-listing"><a href="careers/consultant-presales-analytics-bi.html">Consultant – Presales (Analytics &amp; BI)</a></div>
                            <div class="job-listing"><a href="careers/database-administration.html">DBA (Database Administration)</a></div>
                            <div class="job-listing"><a href="careers/senior-dot-net-developer-mvc-developer-delhi-noida-gurgaon.html">Senior .Net MVC Developer</a></div>
                            <div class="job-listing"><a href="careers/sharepoint-consultant.html">Sharepoint Consultant</a></div>
                            <div class="job-listing"><a href="careers/software-engineer.html">Software Engineer</a></div>

	   </div>
  </div>
</div>
</div>
</div>
</div>
<div class="clr"></div>