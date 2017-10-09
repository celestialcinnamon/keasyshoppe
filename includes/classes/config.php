<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'admin');
define('DB_PASS', 'keasyshoppe');
define('DB_NAME', 'db_keasyshoppe');
define('DB_TBL_ACCOUNTS', 'tblAccounts');
define('DB_TBL_LOGINS', 'tblLogins');
define('DB_ACCOUNT_CREATION_SUCCESS', 100001);
define('DB_UPLOAD_IMAGE_SUCCESS', 510001);

abstract class LoginMode
{
    const KEASYSHOPPE = 10001;
    const FACEBOOK = 10002;
    const GOOGLE = 10003;
}

abstract class AccountExceptions
{
    const PASSWORD_DOES_NOT_MATCH = 20001;
    const USERNAME_DOES_NOT_EXIST = 20002;
    const USERNAME_PASSWORD_EMPTY = 20003;
    const USERNAME_EXISTS = 20004;
}

abstract class AccountStati
{
    const USERNAME_LOGGED_IN = 120001;
}
?>
