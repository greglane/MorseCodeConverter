<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Morsecodes extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->data['code1'] = array(
		'name'        => 'code',
		'id'          => 'code1',
		'value'       => 'encode',
		'checked'     => TRUE,
		);
		$this->data['code2'] = array(
		'name'        => 'code',
		'id'          => 'code2',
		'value'       => 'decode',
		'checked'     => FALSE,
		);
	}


	public function index()
	{
		$this->data['message'] = "";
		$this->load->view('morsecodes/form', $this->data);
	}


	function convert(){

		$this->load->library('MorseCode');
	
		if($this->input->post('code') == "encode"){
			$message = $this->morsecode->convert2morse();
		} 
		elseif($this->input->post('code') == "decode")
		{
			$message = $this->morsecode->morse2text();
		}
		$this->data['message'] = $message;
		$this->load->view('morsecodes/form', $this->data);
	}	
	

}

/* End of file morsecodes.php */
/* Location: ./application/controllers/morsecodes.php */