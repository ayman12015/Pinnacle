<?php
class LanguageLoader
{
    function initialize() {
        $ci =& get_instance();
        $ci->load->helper('language');
        $sitelang = $ci->session->userdata('site_lang');
        if ($sitelang) {

            $ci->lang->load('home',$sitelang);
            $ci->lang->load('head',$sitelang);
            $ci->lang->load('about',$sitelang);
            $ci->lang->load('career',$sitelang);
            $ci->lang->load('partner',$sitelang);
            $ci->lang->load('contact',$sitelang);
        } else {
            $ci->lang->load('home','english');
            $ci->lang->load('head','english');
            $ci->lang->load('about','english');
            $ci->lang->load('career','english');
            $ci->lang->load('partner','english');
            $ci->lang->load('contact','english');
        }
        
    }
}


