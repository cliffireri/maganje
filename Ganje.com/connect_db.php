<?php

if(!mysql_connect('localhost','root','') || !mysql_select_db('maganji_db')){
	die(mysql_error);
}else{
	echo'yeees';
}
?>