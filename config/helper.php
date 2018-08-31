<?php 
		
		define("URL","http://localhost/sabri/");


		function rupiah($nilai){

			$rp= "Rp ".number_format($nilai);
			return $rp;
		}
?>