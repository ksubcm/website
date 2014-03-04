<?php
/*
 * Functions to handle toolbar information interface.
 *
 * @author Noah Harvey <noah.harvey247@gmail.com>
 */

function checkLogin()
{
	return @$_SESSION['login'];
}

function login($username,$passwd = '')
{
	global $conf;
	$users = parse_ini_file($conf['USERDATA']);
	//TODO: add SHA1 encryption to users file
	//if user is validated then start a session and return to main page
	if(@$users[$username] != NULL && $users[$username] === $passwd)
		$_SESSION['login'] = true;
	else
		$_SESSION['login'] = false;
}

function savePage($page,$data)
{
	file_put_contents($page,$data);
}

?>
