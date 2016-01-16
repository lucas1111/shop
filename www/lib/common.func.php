<?php 
	/*used for alerting and redirection*/

	function alertMes($mes,$url){
		echo "<script>alert('{$mes}');</script>";
		echo "<script>window.location='{$url}';</script>";
	}
