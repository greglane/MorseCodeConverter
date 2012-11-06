<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
* MorseCode Class
* 
* 
* @author      Greg Lane
* @link        http://www.greglane.me/
*/

class Morsecode
{

var $CI;
var $arr_convert;

	function __construct(){
		$this->CI =& get_instance();
	}

	function convert(){

		if($this->CI->input->post('code') == "encode"){
			return $this->convert2morse();
		} 
		elseif($this->CI->input->post('code') == "decode")
		{
			return $this->morse2text();
		}

	}

	function convert2morse(){

		$mytextstring = strtolower($this->CI->input->post('message'));

		$this->arr_convert = array(
		'a' => '·-  ',
		'b' => '-···  ',
		'c' => '-·-·  ',
		'd' => '-··  ',
		'e' => '·  ',
		'f' => '··-·  ',
		'g' => '--·  ',
		'h' => '····  ',
		'i' => '··  ',
		'j' => '·---  ',
		'k' => '-·-  ',
		'l' => '·-··  ',
		'm' => '--  ',
		'n' => '-·  ',
		'o' => '---  ',
		'p' => '·--·  ',
		'q' => '--·-  ',
		'r' => '·-·  ',
		's' => '···  ',
		't' => '-  ',
		'u' => '··-  ',
		'v' => '···-  ',
		'w' => '·--  ',
		'x' => '-··-  ',
		'y' => '-·--  ',
		'z' => '--··  ',
		'0' => '-----  ',
		'1' => '·----  ',
		'2' => '··---  ',
		'3' => '···--  ',
		'4' => '····-  ',
		'5' => '·····  ',
		'6' => '-····  ',
		'7' => '--···  ',
		'8' => '---··  ',
		'9' => '----·  ',
		'!' => '-·-·--  ',
		',' => '--··--  ',
		'.' => '·-·-·-  ',
		'?' => '··--··  ',
		'\'' => '·----·  '

		);

		foreach($this->arr_convert as $key=>$val){
			$mytextstring = str_replace($key, $val, $mytextstring);
		}

		return $mytextstring;

	}

	function morse2text()
	{

		$mytextstring = str_replace(".","·",$this->CI->input->post('message'));
		$mytextstring = str_replace("_","-",$mytextstring);
		$mytextstring = str_replace("—","-",$mytextstring);

		$words = array();
		$words = preg_split("([\s]{3,})", $mytextstring);
//		$words = explode("  ",$mytextstring);
//		echo("<pre>");
//		print_r($words);
//		echo("</pre>");
//		die();


		$arr_convert = array(
		'·-' => 'a',
		'-···' => 'b',
		'-·-·' => 'c',
		'-··' => 'd',
		'·' => 'e',
		'··-·' => 'f',
		'--·' => 'g',
		'····' => 'h',
		'··' => 'i',
		'·---' => 'j',
		'-·-' => 'k',
		'·-··' => 'l',
		'--' => 'm',
		'-·' => 'n',
		'---' => 'o',
		'·--·' => 'p',
		'--·-' => 'q',
		'·-·' => 'r',
		'···' => 's',
		'-' => 't',
		'··-' => 'u',
		'···-' => 'v',
		'·--' => 'w',
		'-··-' => 'x',
		'-·--' => 'y',
		'--··' => 'z',
		'-----' => '0',
		'·----' => '1',
		'··---' => '2',
		'···--' => '3',
		'····-' => '4',
		'·····' => '5',
		'-····' => '6',
		'--···' => '7',
		'---··' => '8',
		'----·' => '9',
		'-·-·--' => '!',
		'--··--' => ',',
		'·-·-·-' => '.',
		'··--··' => '?',
		'·----·' => '\''

		);

		$letters = array();
		$returnstring = "";

		foreach($words as $word){
			$newword = '';
			$word = str_replace("  "," ",$word);
			$letters = preg_split("([\s+])", $word);
			foreach($letters as $letter){
				if(strlen($letter) > 0){
				$newword .= $arr_convert[$letter];
				}
			}
			unset($letters);
			$returnstring .= $newword . " ";
		}

		return $returnstring;


	}
}


