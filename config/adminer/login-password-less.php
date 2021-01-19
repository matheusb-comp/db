<?php

// Based on:
// https://github.com/vrana/adminer/blob/master/adminer/sqlite.php

require_once('plugins/login-password-less.php');

/** Set allowed password
	* @param string result of password_hash
	*/
return new AdminerLoginPasswordLess(
    $password_hash = password_hash('null', PASSWORD_DEFAULT)
);
