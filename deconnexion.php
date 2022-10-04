<?php session_start(); 
if(isset($_SESSION['login']) && !empty($_SESSION['login']) ) {
	session_destroy(); header('location: /a');
} else {
	header('location: /a');
}