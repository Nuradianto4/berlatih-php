<?php
function ubah_huruf($string){
//kode di sini
//psudecode
//1. buat abjed
//2. looping string
//3. tampung ke variabel pada posisi $i+1
//4. return
	$abjad = "abcdefghijklmnopqrstuvwxyz";
	$tampung = "";
	for ($i=0; $i <strlen($string) ; $i++) { 
		$posisi = strrpos($abjad, $string[$i]);
		$tampung .=substr($abjad, $posisi+1, 1);
	}
	return $tampung;
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo "<br>". ubah_huruf('developer'); // efwfmpqfs
echo "<br>". ubah_huruf('laravel'); // mbsbwfm
echo "<br>". ubah_huruf('keren'); // lfsfo
echo "<br>". ubah_huruf('semangat'); // tfnbohbu

?>