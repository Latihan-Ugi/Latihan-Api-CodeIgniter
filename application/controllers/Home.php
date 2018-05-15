<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Home extends REST_Controller {

	function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
	}
	
	public function index_get(){
		$data = $this->db->get('user')->result();

		$this->response($data);
	}
}
