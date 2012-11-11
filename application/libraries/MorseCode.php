<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
* MorseCode Class
* 
* 
* @author      Greg Lane
* @link        http://www.greglane.me/
* 
*
*/

class Morsecode
{

var $CI;
var $arr_convert;

	public function __construct(){
		$this->CI =& get_instance();
	}

/**
 * Encodes latin text string to morse code
 *
 * @access	public
 * @param	string
 * @return	string
 */	
	public function convert_to_morse($message){

		$mytextstring = strtolower($message);

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

/**
 * Decodes morse code string to latin text
 *
 * @access	public
 * @param	string
 * @return	string
 */	
	public function morse_to_text($message)
	{

		$mytextstring = str_replace(".","·",$message);
		$mytextstring = str_replace("_","-",$mytextstring);
		$mytextstring = str_replace("—","-",$mytextstring);

		$words = array();
		$words = preg_split("([\s]{3,})", $mytextstring);

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