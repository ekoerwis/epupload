 <?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class CI_TopNavBar{

   function __construct(){
    $this->CI =& get_instance();
   }

   public function load_view(){
       $this->CI->load->view('topnavbar');
   		//return 'topnavbar';
   }

}