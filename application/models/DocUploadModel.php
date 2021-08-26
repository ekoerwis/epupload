<?php
	class DocUploadModel extends CI_Model{

		public function __construct(){
			parent::__construct();
			$this->load->database();
		} 


		public function addFileUpload($dataform) {
			$this->db->insert('FILEUPLOAD', $dataform);
		
			$query = $this->db->get_where('FILEUPLOAD',$dataform);
			return $query->num_rows();

		}


		public function getAllFile($datafile) {
			
			//$query = $this->db->get_where('FILEUPLOAD',$datafile);

			$this->db->select("ID,DOCTYPE,DOCID,FILELOC,FILENAME,to_char(UPDATEDATE,'dd-Mon-YYYY HH24:MI:SS') as UPDATEDATE,UPDATEBY,FILESIZE");
			$this->db->from("FILEUPLOAD");
			$this->db->where($datafile);
			$this->db->order_by('UPDATEDATE', 'DESC');
			$query = $this->db->get();

			return $query->result_array();

		}


		public function getOneFile($fileid) {
			
			//$query = $this->db->get_where('FILEUPLOAD',$datafile);

			$this->db->select("ID,DOCTYPE,DOCID,FILELOC,FILENAME,to_char(UPDATEDATE,'dd-Mon-YYYY HH24:MI:SS') as UPDATEDATE,UPDATEBY,FILESIZE");
			$this->db->from("FILEUPLOAD");
			$this->db->where("ID",$fileid);
			$query = $this->db->get();

			return $query->row();

		}

		public function deleteOneFile($fileid) {

			$sql="DELETE FILEUPLOAD WHERE ID='".$fileid."'";
			$this->db->query($sql);
			
			//$query = $this->db->get_where('FILEUPLOAD',$datafile);

			$this->db->select("ID,DOCTYPE,DOCID,FILELOC,FILENAME,to_char(UPDATEDATE,'dd-Mon-YYYY HH24:MI:SS') as UPDATEDATE,UPDATEBY,FILESIZE");
			$this->db->from("FILEUPLOAD");
			$this->db->where("ID",$fileid);
			$query = $this->db->get();

			return $query->num_rows();

		}

		public function getNumAllFile($datafile) {
			
			$query = $this->db->get_where('FILEUPLOAD',$datafile);
			return $query->num_rows();

		}		





		

}

 