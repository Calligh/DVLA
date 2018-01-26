<?php
/**
 * 
 */
 class WordTruncat
 {
     public $_name = '';
     public $_version;
     public $_getupper;
 	
 	 function __construct($exceptions=true)
 	 {
 	 	$this->Name = $this->_name;
 	 	$this->GetUpper = $this->_getupper;

 	 }

 	public static function truncatFunction(string $string_name = NULL,int $length = 0,string $limiter = "...")
	{
		$data = $string_name;
		$getLength = strlen($string_name);
		$dataSize  = $length;
		$delimiter = $limiter;

		if (!empty($data) && is_string($data)) {
			if ($getLength > 0 && $getLength >= $dataSize) {
				$finalString = "";
				//Trying something out to see the effect
				for ($i=0; $i <= $dataSize; $i++) 
				{ 
					if ($i == $dataSize) {
						# code...
						$finalString .= " ".$delimiter;
					}
					else{
						$finalString .= $data[$i];
					}
				}
				return $finalString;

			}
			else{
				return $data;
			}
		}
		else{
			return "something happened";
		}

	}

	function toUpperCase(string $name){
 	     return ucfirst($name);
    }

	function getCharacter(string $username){
 	     $this->_name = $username;
 	     if(!empty($this->_name) && is_string($this->_name))
         {
             $this->_getupper = $this->toUpperCase($this->_name[0]);
             return $this->_getupper;
         }
         else{
 	         return "Argument Not A String";
         }
    }
	
 } 
 ?>