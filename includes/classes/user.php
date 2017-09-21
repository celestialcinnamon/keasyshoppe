<?php
include 'connection.php';
class User
{
    # @* @param integer $userID A number that represents the user ID of the account stored in the database.
    public function __construct(int $userID)
    {
        try {

            $db = Connection::openConnection(false);
        } catch (Exception $e) {
            if ($e->getCode() == SADERR_DB_DOES_NOT_EXIST) {
                // User::CreateTable();
                echo $e->getMessage();
            }
        }
    }

    public static function CreateTable()
    {
        $dbconn = Connection::openConnection();
        $statement = $dbconn->query("CREATE TABLE tblUsers(ID int(32) AUTO_INCREMENT NOT NULL PRIMARY KEY, FirstName varchar(50) NOT NULL, MiddleName varchar(50), LastName varchar(50) NOT NULL);");
        $results = $statement->fetch();
        return $results;
    }
    public $id;
    public $name;
    public $lastName;
    public $middleName;
    public $firstnameName;
    public $cart;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Constructor Test</title>
</head>
<body>
    <?php $user = new User(123); ?>
</body>
</html>