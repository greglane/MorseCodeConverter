<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Morsecodes Controller Class
* 
* @author      Greg Lane
* @link        http://www.greglane.me/
* 
*
*/

class Morsecodes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['message'] = "";
		$this->radio_default("encode");		
		$this->load->view('morsecodes/form', $this->data);
	}

	public function convert(){

		$this->load->library('MorseCode');
	
		$source = $this->input->post('message');	
	
		if($this->input->post('code') == "encode"){
			$message = $this->morsecode->convert2morse($source);
			$this->radio_default("decode");
		} 
		elseif($this->input->post('code') == "decode")
		{
			$message = $this->morsecode->morse2text($source);
			$this->radio_default("encode");
		}

		$this->data['message'] = $message;
		$this->load->view('morsecodes/form', $this->data);
	}	
	
	private function radio_default($state = "encode")
	{
		if($state == "encode"){
			$encode = TRUE;
			$decode = FALSE;
		}else{
			$encode = FALSE;
			$decode = TRUE;			
		}
		$this->data['code1'] = array(
		'name'        => 'code',
		'id'          => 'code1',
		'value'       => 'encode',
		'checked'     => $encode,
		);
		$this->data['code2'] = array(
		'name'        => 'code',
		'id'          => 'code2',
		'value'       => 'decode',
		'checked'     => $decode,
		);
	}	

}

/* End of file morsecodes.php */
/* Location: ./application/controllers/morsecodes.php */