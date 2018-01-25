<?php
/**
 * 
 */
 class WordTruncat
 {
 	
 	// function __construct(argument)
 	// {
 	// 	# code...
 	// }
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
	
 } 
 ?>