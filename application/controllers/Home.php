<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {




    public function __construct()
    {
        parent::__construct();

       


        $this->load->helper(array('form','url'));
        $this->lang->load('home','english');
        $this->lang->load('head','english');
        $this->lang->load('about','english');
        $this->lang->load('career','english');
        $this->lang->load('partner','english');
        $this->lang->load('contact','english');



        

    }
    

    public function index()
    {
        $this->load->view('header');
        $this->load->view('home');
        $this->load->view('footer');


    }

    public function about()
    
    {

        $this->load->view('header');
        $this->load->view('about');
        $this->load->view('footer');

    }

  

    public function career()
    
    {

        $this->load->view('header');
        $this->load->view('career');
        $this->load->view('footer');

    }

    public function partners()
    
    {

        $this->load->view('header');
        $this->load->view('partner');
        $this->load->view('footer');

    }
    public function contact()
    
    {

       $this->load->view('header');
       $this->load->view('contact');
       $this->load->view('footer');

   }

   public function appdev()
    
    {

       $this->load->view('header');
       $this->load->view('services/appdev');
       $this->load->view('footer');

     }

     public function appdevsoft()
    
     {
 
        $this->load->view('header');
        $this->load->view('services/appsoftdev');
        $this->load->view('footer');
 
      }
      public function brancreat()
    
     {
 
        $this->load->view('header');
        $this->load->view('services/brandcreation');
        $this->load->view('footer');
 
      }
 
      public function businesscontinuity()
    
      {
  
         $this->load->view('header');
         $this->load->view('services/businesscontinuity');
         $this->load->view('footer');
  
       }
   
       public function callcenter()
    
       {
   
          $this->load->view('header');
          $this->load->view('services/callcenter');
          $this->load->view('footer');
   
        }
       
        public function cctvcamrecord()
    
        {
    
           $this->load->view('header');
           $this->load->view('services/cctvcamrecord');
           $this->load->view('footer');
    
         }

       public function contentreation()
    
        {
    
           $this->load->view('header');
           $this->load->view('services/contentcreate');
           $this->load->view('footer');
    
         }

         public function copywriting()
    
         {
     
            $this->load->view('header');
            $this->load->view('services/copywriting');
            $this->load->view('footer');
     
          }
          public function digitalads()
    
          {
      
             $this->load->view('header');
             $this->load->view('services/digitalads');
             $this->load->view('footer');
      
           }
           public function web()
    
           {
       
              $this->load->view('header');
              $this->load->view('services/web');
              $this->load->view('footer');
       
            }
            public function mediaplan()
    
            {
        
               $this->load->view('header');
               $this->load->view('services/mediaplang');
               $this->load->view('footer');
        
             }
             public function mediapurchasing()
    
             {
         
                $this->load->view('header');
                $this->load->view('services/mediapurchasing');
                $this->load->view('footer');
         
              }

              public function videoprod()
    
             {
         
                $this->load->view('header');
                $this->load->view('services/videoprod');
                $this->load->view('footer');
         
              }
 
              public function networking()
    
             {
         
                $this->load->view('header');
                $this->load->view('services/networking');
                $this->load->view('footer');
         
              }

           

              public function retailandcam()
    
             {
         
                $this->load->view('header');
                $this->load->view('services/retailandcam');
                $this->load->view('footer');
         
              }
              public function erp()
    
              {
          
                 $this->load->view('header');
                 $this->load->view('services/erp');
                 $this->load->view('footer');
          
               }
              
               public function mark()
    
               {
           
                  $this->load->view('header');
                  $this->load->view('services/mark');
                  $this->load->view('footer');
           
                }
                public function manufacturing()
    
               {
           
                  $this->load->view('header');
                  $this->load->view('services/manufacturing');
                  $this->load->view('footer');
           
                }
                public function redfineindustry()
    
                {
            
                   $this->load->view('header');
                   $this->load->view('services/redfineindustry');
                   $this->load->view('footer');
            
                 }
                 public function logistics()
    
                {
            
                   $this->load->view('header');
                   $this->load->view('services/logistics');
                   $this->load->view('footer');
            
                 }
                 public function digitalmaedia()
    
                {
            
                   $this->load->view('header');
                   $this->load->view('services/digitalmaedia');
                   $this->load->view('footer');
            
                 }
                 public function emails()
    
                {
            
                   $this->load->view('header');
                   $this->load->view('services/emails');
                   $this->load->view('footer');
            
                 }
              
                 public function socialmedia()
    
                {
            
                   $this->load->view('header');
                   $this->load->view('services/socialmedia');
                   $this->load->view('footer');
            
                 }
                 public function landingshopping()
    
                 {
             
                    $this->load->view('header');
                    $this->load->view('services/landingshopping');
                    $this->load->view('footer');
             
                  }
                  public function postcards()
    
                  {
              
                     $this->load->view('header');
                     $this->load->view('services/postcards');
                     $this->load->view('footer');
              
                   }
              
}
