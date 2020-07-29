<?php

function papan_catur($angka) {
// tulis kode di sini
	for ($x=0; $x < $angka; $x++) { 
		for ($y=0; $y < ($angka*2)-1; $y++) { 
			if ($y%2==1 && $x%2==1) {
				echo " #";
			}
			elseif ($y%2==0 && $x%2 == 0) {
				echo " g";
			}
			else{
				echo " ";
				echo " ";
			}
		}
		echo "<br>";
	}
}

// TEST CASES
echo papan_catur(4)."<br> <br>"; 
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8)."<br> <br>";
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo papan_catur(5); 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/