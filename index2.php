<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KeasyShoppe&middot;Shop 'till you drop</title>
</head>
<body>
<?
include './includes/classes/connection.php';
$uri = "";
// TODO: Create a database upon first use.
// TODO: Initialize the first admin account on first use.

//CREATE A DATABASE UPON FIRST USE
//-> Create a connection to the database
$dbconn = Connection::openConnection(false);
//-> Create a database
$sql = $dbconn->query("CREATE DATABASE IF NOT EXISTS " . DB_NAME);
//-> Change the connection's database.
$dbconn = Connection::openConnection(false);
$dbconn->dbname = DB_NAME;
//-> Check if this database has any tables (if it is empty, then maybe it is newly created)
$sql = $dbconn->query("SHOW TABLES FROM " . DB_NAME);
//-> Notify for errors: 
//TODO: Redirect to a page if an error happens (Something like ERROR 404-ish)
if (!$sql) echo "<b>Error:</b> " . $dbconn->error;
//-> If successful...
//--> and there are not yet any tables, redirect to dashboard (the one that creates a new admin)
echo $sql->num_rows <= 0 . "";

if ($sql->num_rows <= 0) {
    echo "Preparing for first use...";
    echo "Redirecting";
    header('Location: ' . $uri . './pages/register-admin/');
    exit;
}
else {
    header('Location:' . $uri . "./pages/u/");
}

function setHeader()
{
    if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
        $uri = 'https://';
    }
    else {
        $uri = 'http://';
    }
    $uri .= $_SERVER['HTTP_HOST'];
}

?>
    
</body>
</html>
