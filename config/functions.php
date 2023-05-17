<?php

function flash_in($t, $mess){
	array_push($_SESSION['message'], [$t, $mess]);
}

function flash_out(){
	foreach($_SESSION['message'] as $m){
		echo '<p class="message '.$m[0].'">'.$m[1].'</p>';
	}
	$_SESSION['message'] = [];
}