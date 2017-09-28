<?php
include 'config.php';
class Connection
{
    # Opens a connection to the database.
    public static function openConnection($includeDB)
    {
        if ($includeDB === NULL) $includeDB = false;
        $db = $includeDB ? new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME) : new mysqli(DB_HOST, DB_USER, DB_PASS);
        if ($db->connect_error) {
            throw new Exception($db->connect_error, $db->connect_errno);
        }
        return $db;
    }

    public static function openConnection_Login(Boolean $includeDB)
    {
        if ($includeDB === NULL) $includeDB = false;
        $db = $includeDB ? new mysqli(DB_HOST, DB_USER, DB_PASS, DB_TBL_ACCOUNTS) : new mysqli(DB_HOST, DB_USER, DB_PASS);
        if ($db->connect_error) {
            throw new Exception($db->connect_error, $db->connect_errno);
        }
        return $db;
    }

    public static function open()
    {
        $db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($db->connect_error) {
            throw new Exception($db->connect_error, $db->connect_errno);
        }
        return $db;
    }
}
?>
