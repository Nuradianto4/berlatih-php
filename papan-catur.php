<?php

function papan_catur($angka) {
// tulis kode di sini
	for ($x=0; $x < $angka; $x++) { 
		for ($y=0; $y < ($angka); $y++) { 
			if ($y%2==1 && $x%2==1) {
				echo "bener";
			}
			elseif ($y%2==0 && $x%2 == 0) {
				echo "bener";
			}
			else{
				echo "salah";
			}
		}
		echo "<br>";
	}
}

// TEST CASES
echo papan_catur(4); 
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #

echo papan_catur(5) 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/