<?php
function tukar_besar_kecil($string){
//kode di sini
	
	$tampung="";
	for ($i=0; $i < strlen($string) ; $i++) { 
		$orde=ord($string[$i]);
		if ($orde>64 && $orde <91) {
			$tampung .=chr($orde+32);
		}
		elseif ($orde >95 && $orde < 123) {
			$tampung .=chr($orde-32);
		}
		else{
			$tampung .=$string[$i];
		}
	}
	return $tampung;
}

// TEST CASES
echo "<br>". tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo "<br>". tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo "<br>". tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo "<br>". tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo "<br>". tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>