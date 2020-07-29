<?php
function pasangan_terbesar($angka){
// kode di sini
//1. looping sebanyak karakter
//2. tangkap pasangan angka dengan substr
//3. pasangan angka pertama diset sebagai terbesar
//4. return
	$angka_terbesar = substr($angka,0,2);
	for ($i=0; $i <=strlen($angka)-2 ; $i++) { 
		$pasangan = substr($angka, $i,2);
		if ($pasangan > $angka_terbesar) {
			$angka_terbesar = $pasangan;
		}
	}
	return $angka_terbesar;
}

// TEST CASES
echo "<br>"."Pasangan Terbesar Dari (641573)  : " .pasangan_terbesar(641573); // 73
echo "<br>"."Pasangan Terbesar Dari (12783456): " .pasangan_terbesar(12783456); // 83
echo "<br>"."Pasangan Terbesar Dari (910233)  : " .pasangan_terbesar(910233); // 91
echo "<br>"."Pasangan Terbesar Dari (71856421): " .pasangan_terbesar(71856421); // 85
echo "<br>"."Pasangan Terbesar Dari (79918293): " .pasangan_terbesar(79918293); // 99

?>