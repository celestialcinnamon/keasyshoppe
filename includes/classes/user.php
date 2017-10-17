<?php
include 'connection.php';

class User
{

    public $username;
    public $name_last, $name_first, $name_middle;
    public $meetp_address;
    public $contact_number;
    public $fbid, $gid, $keasyid;
    private $password;
    public $account_type;

    public function __construct($username, $name_last = "", $name_first = "", $name_middle = "", $meetup_address = "", $contact = "", $fbid = "", $gid = "", $keasyid = "", $pass = "")
    {
        $this->username = $username;
        $this->name_last = $name_last;
        $this->name_first = $name_first;
        $this->name_middle = $name_middle;
        $this->meetup_address = $meetup_address;
        $this->contact_number = $contact;
        $this->fbid = $fbid;
        if (strlen($keasyid) <= 0) {
            $keasyid .= time() . "";
        }
        $this->keasyid = $keasyid;
        $this->gid = $gid;
        $this->password = $pass;
    }
    public function CreateAccount()
    {
        $db = Connection::open();
        $sqlStr = "SELECT acc_username FROM " . DB_TBL_ACCOUNTS . " WHERE acc_username = '{$this->username}'";
        $sql = $db->query($sqlStr);
        $result = $sql->fetch_assoc();

        if (!$result) { #if user does not exist

            $sqlStr = "INSERT INTO " . DB_TBL_ACCOUNTS . "(keasyID, acc_username, acc_password, acc_name_first, acc_name_mid, acc_name_last, acc_type, acc_contact, acc_address) VALUES(0, '{$this->username}', '" . password_hash($this->password, PASSWORD_DEFAULT) . "', '{$this->name_first}', '{$this->name_middle}', '{$this->name_last}', 'USER', '{$this->contact_number}', '{$this->meetup_address}')";
            $sql = $db->query($sqlStr);

            if ($sql) {
                $jsonRtn = array("status" => "Account creation success", "statusCode" => DB_ACCOUNT_CREATION_SUCCESS, "line" => __LINE__, "file" => __FILE__, "username" => $this->username);
                return json_encode($jsonRtn);
            }
            else {
                $retval = json_encode(array('status' => 'Username already taken', "statusCode" => AccountExceptions::USERNAME_EXISTS, "line" => __LINE__, "file" => __FILE__));
                return $retval;
            }
        }
        else {
            $jsonRtn = array("status" => "Username is already taken", "statusCode" => AccountExceptions::USERNAME_EXISTS, "line" => __LINE__, "file" => __FILE__);
            return json_encode($jsonRtn);
        }
    }
    public function LogIn($password, $mode)
    {
        if (strlen($this->username) > 0 && strlen($password) > 0) {
            $db = Connection::open(false);
            $sql = $db->query("SELECT acc_Username, acc_Password FROM " . DB_TBL_ACCOUNTS . " WHERE acc_Username = '{$this->username}'");

            if ($sql->num_rows > 0) {
                $results = $sql->fetch_assoc();
                $verify = password_verify($password, $results['acc_Password']);
                if ($verify) {
                    $sql = $db->query("SELECT * FROM ". DB_TBL_ACCOUNTS . " WHERE acc_Username = '{$this->username}'");
                    $results = $sql->fetch_assoc();
                    $this->account_type = $results["acc_type"];
                    $userdata = array("username"=> $this->username, "firstName"=>$results["acc_name_first"],
                                      "middleName"=>$results["acc_name_mid"], "lastName"=> $results["acc_name_last"],
                                      "accountType"=>$this->account_type);
                    $userdata = json_encode($userdata);
                    $jsonRtn = array('status' => AccountStati::USERNAME_LOGGED_IN, 'statusMessage' => 'Account log in successful', 'username' => $this->username, 'userdata'=>$userdata);
                    return json_encode($jsonRtn);
                }
                else {
                    $jsonRtn = array('status' => AccountExceptions::PASSWORD_DOES_NOT_MATCH, 'statusMessage' => "Password does not match: " . __FILE__ . " at line " . __LINE__);
                    return json_encode($jsonRtn);
                }

            }
            else {
                $jsonRtn = array('status' => AccountExceptions::USERNAME_DOES_NOT_EXIST, 'statusMessage' => "Username does not exist: " . __FILE__ . " at line " . __LINE__);
                return json_encode($jsonRtn);
            }

        }
        else {
            $jsonRtn = array('status' => AccountExceptions::USERNAME_PASSWORD_EMPTY, 'statusMessage' => "No username or password given at " . __FILE__ . " at line " . __LINE__);
        }
        // switch ($mode) {
        //     case LoginMode::KEASYSHOPPE :
        //         return $this->LogInKeasyshoppe($password);
        //         break;
        //     case LoginMode::FACEBOOK :
        //         return $this->LogInFacebook($password);
        //         break;
        //     case LoginMode::GOOGLE :
        //         return $this->LogInGoogle($password);
        //         break;
        //     default :
        //         throw new Exception("Unspecified login mode: " . __FILE__ . " at line " . __LINE__ . "\n");
        //         break;
        // }


























    }
    private function LogInKeasyshoppe($password)
    {
        if (strlen($this->username) > 0 && strlen($password) > 0) {
            $db = Connection::open(false);
            $sql = $db->prepare("SELECT acc_Username, acc_Password FROM :accounts WHERE acc_Username = :username");

            $sql->bindValue(":accounts", DB_TBL_ACCOUNTS);
            $sql->bindValue(":username", $this->username);
            $sql->execute();

            $results = $sql->fetch();

            if ($results) {
                $verify = password_verify($password, $results['acc_Password']);
                if ($verify) {
                    $jsonRtn = array('status' => AccountStati::USERNAME_LOGGED_IN, 'statusMessage' => 'Account log in successful', 'username' => $this->username);
                    $jsonRtn = json_encode($jsonRtn);
                    return $jsonRtn;
                }
                else {
                    $jsonRtn = array('status' => AccountExceptions::PASSWORD_DOES_NOT_MATCH, 'statusMessage' => "Password does not match: " . __FILE__ . " at line " . __LINE__);
                    return json_encode($jsonRtn);
                }

            }
            else {
                $jsonRtn = array('status' => AccountExceptions::USERNAME_DOES_NOT_EXIST, 'statusMessage' => "Username does not exist: " . __FILE__ . " at line " . __LINE__);
            }

        }
        else {
            $jsonRtn = array('status' => AccountExceptions::USERNAME_PASSWORD_EMPTY, 'statusMessage' => "No username or password given at " . __FILE__ . " at line " . __LINE__);
        }
    }
    private function LogInFacebook($password)
    {
        throw new Exception("Function " . __FUNCTION__ . " not yet supported: " . __FILE__ . " at line " . __LINE__ . "\n");
    }
    private function LogInGoogle($password)
    {
        throw new Exception("Function " . __FUNCTION__ . " not yet supported: " . __FILE__ . " at line " . __LINE__ . "\n");
    }
}
?>
