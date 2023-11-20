<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH .'libraries/RestController.php';
use chriskacerguis\RestServer\RestController;   

class MahasiswaController extends RestController {
    public function __construct() {
        parent::__construct();
		$this->load->model('Mahasiswa_model','mahasiswa');
		$this->load->model('Jurusan_model','jurusan');
    }

	public function index_get()
	{
		$mahasiswa = $this->mahasiswa->getMahasiswa();
		
		$id = $this->get('nim');

		if($id == null){
			$mahasiswa = $this->mahasiswa->getMahasiswa();
		}
		else{
			$mahasiswa = $this->mahasiswa->getMahasiswa($id);
		}

		if ($mahasiswa) {
			$this->response([
			'status' => true,
			'data' => $mahasiswa
		], RestController::HTTP_OK) ;
	}
	else{
		$this->response([
			'status'=> false,
			'message'=>'id not found'
			], RestController::HTTP_OK) ;
}
	}

	public function jurusan_get(){
		$jurusan['data'] = $this->jurusan->getJurusan();
		$this->load->view('jurusan_view', $jurusan);

	}
	
	
}