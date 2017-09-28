<?php
include 'connection.php';

class User{
    
    public $username;
    public $name_last, $name_first, $name_middle;
    public $meetp_address;
    public $contact_number;
    public $fbid, $gid, $keasyid;
    private $password;
    
    public function __construct($username, $name_last="", $name_first="", $name_middle="", $meetup_address="", $contact="", $fbid="", $gid="", $keasyid="", $pass="") {
        $this->username = $username;
        $this->name_last = $name_last;
        $this->name_first = $name_first;
        $this->name_middle = $name_middle;
        $this->meetup_address= $meetup_address;
        $this->contact_number = $contact;
        $this->fbid = $fbid;
        if(strlen($keasyid)<=0){
            $keasyid .= time()."";
        }
        $this->keasyid=$keasyid;
        $this->gid = $gid;
        $this->password = $pass;
    }
    public function CreateAccount()
    {
        $db = Connection::open();
        $sqlStr = "SELECT UserName FROM ".DB_TBL_ACCOUNTS." WHERE UserName = '{$this->username}'";
        $sql= $db->query($sqlStr);
        $result = $sql->fetch_assoc();

        if(!$result){ #if user does not exist
            
            $sqlStr = "INSERT INTO ".DB_TBL_ACCOUNTS."(ID, UserName, Password, FirstName, MiddleName,LastName) VALUES(0, '{$this->username}', '{$this->password}', '{$this->name_first}', '{$this->name_middle}', '{$this->name_last}')";
            $sql = $db->query($sqlStr);

            if($sql){
                $jsonRtn = array("status"=>"Account creation success", "statusCode"=>DB_ACCOUNT_CREATION_SUCCESS, "line"=>__LINE__, "file"=>__FILE__);
            return json_encode($jsonRtn);
            } else {
                throw new Exception("Unable to create new account: "+$sql);
            }
        } else {
            $jsonRtn = array("status"=>"Username is already taken", "statusCode"=>AccountExceptions::USERNAME_EXISTS, "line"=>__LINE__, "file"=>__FILE__);
            return json_encode($jsonRtn);
        }
}
    public function LogIn($password, $mode){
        switch ($mode) {
            case LoginMode::KEASYSHOPPE:
                LogInKeasyshoppe($password);
                break;
            case LoginMode::FACEBOOK:
                LogInFacebook($password);
                break;
            case LoginMode::GOOGLE:
                LogInGoogle($password);
                break;
            default:
                throw new Exception("Unspecified login mode: ".__FILE__." at line ".__LINE__."\n");
                break;
        }
    }
    private function LogInKeasyshoppe($password){
        if(strlen($this->username)>0 && strlen($password)>0){
            $db=Connection::open(false);
            $sql = $db->prepare("SELECT acc_Username, acc_Password FROM :accounts WHERE acc_Username = :username");

            $sql->bindValue(":accounts", DB_TBL_ACCOUNTS);
            $sql->bindValue(":username", $this->username);
            $sql->execute();

            $results=$sql->fetch();

            if($results){
                $verify = password_verify($password, $results['acc_Password']);
                if ($verify) {
                    $jsonRtn = array('status'=> true, 'statusMessage'=> 'Account log in successful');
                    $jsonRtn = json_encode($jsonRtn);
                    return $jsonRtn;
                } else {
                    $jsonRtn = array('status'=>false, 'statusMessage'=>"Password does not match: ".__FILE__." at line ".__LINE__, 'errorCode'=>AccountExceptions::PASSWORD_DOES_NOT_MATCH);
                    return json_encode($jsonRtn);
                }
                
            } else{
                $jsonRtn = array('status'=>false, 'statusMessage'=>"Username does not exist: ".__FILE__." at line ".__LINE__, 'errorCode'=>AccountExceptions::USERNAME_DOES_NOT_EXIST);
            }

        } else {
            $jsonRtn = array('status'=>false, 'statusMessage'=>"No username or password given at ".__FILE__." at line ".__LINE__, 'errorCode'=>AccountExceptions::USERNAME_PASSWORD_EMPTY);
        }
    }
    private function LogInFacebook($password){
        throw new Exception("Function ".__FUNCTION__." not yet supported: ".__FILE__." at line ".__LINE__."\n");
    }
    private function LogInGoogle($password){
        throw new Exception("Function ".__FUNCTION__." not yet supported: ".__FILE__." at line ".__LINE__."\n");
    }
}
?>
