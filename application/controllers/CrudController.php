<?php
defined('BASEPATH') OR exit('No direct script access allowed');



///////////////////////////7
// ruta
http://localhost/crud_codeigniter/index.php/CrudController
///////////////////////////////
class CrudController extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->Model('Crud_model');
		}

		public function index(){
				$data['result'] = $this->Crud_model->getAllData();
				$this->load->view('CrudView',$data);
		}

		public function create(){
				$this->Crud_model->createData();
				redirect('CrudController');
		}

		public function edit($id) {
			$data['row'] = $this->Crud_model->getData($id);
			$this->load->view('CrudEdit', $data);
		}

		public function update($id){
			$this->Crud_model->updateData($id);
			redirect("CrudController");
			}

			public function delete($id){
				$this->Crud_model->deleteData($id);
				redirect("CrudController");
			}
}
