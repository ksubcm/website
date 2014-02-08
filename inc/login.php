<?php
function checkLogin()
{
	return @$_SESSION['login'];
}

function login($username,$passwd)
{
	$users = parse_ini_file($conf['USERDATA']);
	//TODO: add SHA1 encryption to users file
	//if user is validated then start a session and return to main page
	if(@$users[$username] != NULL && $users[$username] === $passwd)
		$_SESSION['login'] = true;
	else
		$_SESSION['login'] = false;
}
?>
