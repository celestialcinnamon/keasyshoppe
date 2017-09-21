<?
/**
 * This file is the one responsible for preparing everything for first use.
 * @author SADism team
 */
include '../../includes/classes/connection.php';
$dbconn = Connection::openConnection(true);
$sql = $dbconn->query("CREATE TABLE IF NOT EXISTS tblAccounts(
    ID int(32) AUTO_INCREMENT PRIMARY KEY NOT NULL, 
    UserName varchar(20) NOT NULL UNIQUE, 
    Password varchar(30) NOT NULL, 
    FirstName varchar(50) NOT NULL, 
    MiddleName varchar(50), 
    LastName varchar(50) NOT NULL, 
    Photo char(255), 
    AccountType TINYINT(1) UNSIGNED
    )");
if ($sql) echo $sql."";#echo "Storage for tables created.";
else echo $dbconn->error;
?>