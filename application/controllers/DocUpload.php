 <?php

class DocUpload extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->model("DocUploadModel");
		$this->load->helper(array('url','download'));

	}

	function index(){

		$data["content_page"]="docupload";
		$this->load->view("docupload",$data);

	}


	public function eplant(){
		$data["content_page"]="docupload";
		
		#$data["doctype"] = str_replace("%20"," ",$this->uri->segment(3));
		#data["docid"]=str_replace("%20"," ",$this->uri->segment(4));
		#$doctype = str_replace("%20"," ",$this->uri->segment(3));
		#$docid=str_replace("%20"," ",$this->uri->segment(4));

		if(isset($_GET["type"])){
			$data["doctype"] =$_GET["type"];
			$doctype2 =$_GET["type"];
		} else {
			$data["doctype"]="";
			$doctype2 ="";
		}
		
		if(isset($_GET["id"])){
			$data["docid"] =$_GET["id"];
			$docid2 =$_GET["id"];
		} else {
			$data["id"]="";
			$docid2 ="";
		}

		$doctype = str_replace("%20"," ",$doctype2);
		$docid=str_replace("%20"," ",$docid2);



		if($doctype == null) {
			echo  "<script language='JavaScript'>
						alert(Gagal Masuk Halaman');
						document.location='".base_url().'ErrorMessage/inputreq/DOC TYPE'."';
						</script>";
		}

		if($docid == null) {
			echo  "<script language='JavaScript'>
						alert('Gagal Masuk Halaman');
						document.location='".base_url().'ErrorMessage/inputreq/DOC ID'."';
						</script>";
		}

		$datafile = array(
					'DOCTYPE' => $doctype,
					'DOCID' => $docid
				);

		$data["file_data"] = $this->DocUploadModel->getAllFile($datafile);

		$numFile = $this->DocUploadModel->getNumAllFile($datafile);

		if($numFile > 0) {
			$data["content_table"]="full";
		} else {
			$data["content_table"]="empty";
		}

		$this->load->view("docupload",$data);

	}

	public function uploadSubmit() {

		$doctype = $this->input->post("DOCTYPE");
		$docid = $this->input->post("DOCID");
		$docname = $this->input->post("fileuploadname");
		
		/*echo "doctype = ".$doctype."<br>";
		echo "docid = ".$docid."<br>";
		echo "docname = ".$docname."<br>";*/

		$doctypepath = str_replace("/","",$doctype);
		$docidpath=str_replace("/","",$docid);
		$docnamepath=str_replace("/","",$docname);
		$yearpath = date("Y");
		$monthpath = date("m");

		$config['upload_path']= './ext/upload/eplant/'.$yearpath.'/'.$monthpath.'/'.$doctypepath.'/'.$docidpath;
		$config['allowed_types'] = '*';
		$config['max_size'] = 0;
		$config['max_width'] = 0;
		$config['max_height']= 0;
		$config['remove_spaces']='FALSE';
		$this->load->library('upload', $config);

		$docpath='./ext/upload/eplant/'.$yearpath.'/'.$monthpath.'/'.$doctypepath.'/'.$docidpath.'/'.$docnamepath;

		if(file_exists($docpath)) {
			echo  "<script language='JavaScript'>
						alert('Gagal upload file : File sudah ada');
						document.location='".base_url().'DocUpload/eplant?type='.$doctype.'&id='.$docid."';
						</script>";
		} else {
						if($this->upload->do_upload("fileUpload")){ 

				 			$namafile=$this->upload->file_name;
				 			$ukuranfile=$this->upload->file_size;
				 			$upload_data = $this->upload->data();
							$lokasifile = './ext/upload/eplant/'.$yearpath.'/'.$monthpath.'/'.$doctypepath.'/'.$docidpath;


							$dataform = array(
								'DOCTYPE' => $doctype,
								'DOCID' => $docid,
								'FILENAME' => $namafile,
								'FILELOC' => $lokasifile,
								'FILESIZE' => $ukuranfile
							);

							$datainput = $this->DocUploadModel->addFileUpload($dataform);

							if( $datainput = 0) {
									echo  "<script language='JavaScript'>
									alert('Data Gagal Masuk');
									document.location='".base_url().'DocUpload/eplant?type='.$doctype.'&id='.$docid."';
									</script>";

									//redirect(base_url()."DocUpload/eplant/".$doctype."/".$docid);

								} else if ($datainput = 1) {

									echo  "<script language='JavaScript'>
									alert('Data Berhasil Masuk');
									document.location='".base_url().'DocUpload/eplant?type='.$doctype.'&id='.$docid."';
									</script>";

									
									
								}


				 		} else {				 			
				 			echo  "<script language='JavaScript'>
							alert('File Gagal Upload - ".$this->upload->display_errors()."');
							document.location='".base_url().'DocUpload/eplant?type='.$doctype.'&id='.$docid."';
							</script>";	
				 		}
				}

			}
	
	public function download(){
		$id=$this->input->post("ID");
		$data = $this->DocUploadModel->getOneFile($id);
		
		force_download( substr($data->FILELOC,2).'/'.$data->FILENAME,NULL);
	}

	public function deleteFile(){
		$fileid = $this->input->post("ID");

		$file=$this->DocUploadModel->getOneFile($fileid);
		$filepath = $file->FILELOC.'/'.$file->FILENAME;
		//$locpath = $file->FILELOC;
		// echo "fileid = ".$fileid."<br>";
		// echo "type = ".$file->DOCTYPE."<br>";
		// echo "id = ".$file->DOCID."<br>";
		
		if (!unlink($filepath))
			  {
			  echo  "<script language='JavaScript'>
				alert('Gagal Hapus File');
				document.location='".base_url().'DocUpload/eplant?type='.$file->DOCTYPE.'&id='.$file->DOCID."';
				</script>";
			  }
			else
			  {

			  $deletefile=$this->DocUploadModel->deleteOneFile($fileid);

			  if($deletefile == 0){
				  echo  "<script language='JavaScript'>
					alert('Berhasil Hapus File');
					document.location='".base_url().'DocUpload/eplant?type='.$file->DOCTYPE.'&id='.$file->DOCID."';
					</script>";
				} else {
					echo  "<script language='JavaScript'>
						alert('Gagal : File terhapus tetapi data di database tidak terhapus ');
						document.location='".base_url().'DocUpload/eplant?type='.$file->DOCTYPE.'&id='.$file->DOCID."';
						</script>";

				}
			  }
	}

	public function downloadGet(){
		$id=$this->input->get("ID");
		$data = $this->DocUploadModel->getOneFile($id);

		$docpath=$data->FILELOC.'/'.$data->FILENAME;
		
		if(file_exists($docpath)) {
			force_download( substr($data->FILELOC,2).'/'.$data->FILENAME,NULL);
		} else {
			echo  "<script language='JavaScript'>
					alert('Gagal Download file : File tidak ada');
					window.close();
					</script>";
		}
		// force_download( substr($data->FILELOC,2).'/'.$data->FILENAME,NULL);
	}


} 