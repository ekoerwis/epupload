 <?php

class ErrorMessage extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->model("DocUploadModel");

	}

	function index(){



	}


	public function inputreq(){
		$data["content_page"]="errormessage";
		$data["errortype"] = str_replace("%20"," ",$this->uri->segment(3));
		
		
		$this->load->view("errormessage",$data);

	}

	

} 