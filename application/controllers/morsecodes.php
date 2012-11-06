<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Morsecodes extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
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

		$this->data['page'] = 'main_form';
		$this->load->view('container', $this->data);
	}

	function result()
	{

		$crlf = "\n";
		
		$this->load->library('MorseCode');		
		$file_string = $this->morsecode->convert();

		$this->data['file_string'] = $file_string;
		$this->data['filetype'] = $filetype;

		$this->data['page'] = 'main_result';
		$this->load->view('container', $this->data);
	}

}

/* End of file morsecodes.php */
/* Location: ./application/controllers/morsecodes.php */