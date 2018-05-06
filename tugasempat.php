<?php
	function kembalian($bayar, $harga){
		$jumlah=$bayar - $harga;
		echo "kembalian : $jumlah";
	}
	kembalian(50000, 21500);
?>