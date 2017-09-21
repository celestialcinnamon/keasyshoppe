<?
include './user.php';

class Session {
    public function createSession()
    {
        session_start();
    }

    public function logUser($userId)
    {
        $_SESSION['userId'] = $userId;

        $selector = base64_encode(random_bytes(8));
        $token = bin2hex(random_bytes(32));

        $cookieValue = $selector.':'.base64_encode($token);
        $hashedToken = hash('sha256', $token);

        $timestamp = time() + (86400*14);

        setcookie('authToken', $cookieValue, $timestamp, NULL, NULL, NULL, true);

        $connection = new Connection;
        $db = $connection->openConnection_Login();
        $sql = $db->query("INSERT INTO ".DB_TBL_LOGINS." VALUES('$selector', '$hashedToken', '$userId', '$timestamp')");
    }
    public function relogUser($userId)
    {
        $_SESSION['userId'] = $userId;
    }
    public function isLogged()
    {
        if (isset($_SESSION['userId'])) {
            return true;
        } else {
            if (isset($_COOKIE['authToken'])) {
                $connection = new Connection;
                $db = $connection->openConnection(false);

                list($selector, $token) = explode(':', $_COOKIE['authToken']);

                $sql = $db->prepare('SELECT * FROM '.DB_TBL_LOGINS.'WHERE login_selector = :login_selector');
                $sql->bindValue(':login_selector', $selector);

                $sql->execute();
                $results = $sql->fetch();
                
                if ($results) {
                    if (hash_equals($results['login_token'], hash('sha256', base64_decode($token)))) {
                        $this->relogUser($results['login_userId']);
                    } else {
                        $this->logOut();
                        return false;
                    }
                    
                } else {
                    return false;
                }
                
            } else {
                return false;
            }
            
        }
        
    }
    public function logOut()
    {
        $connection = new Connection;
        $db = $connection->openConnection_Login(false);
        list($selector, $token)=explode(':', $_COOKIE['authToken']);

        $sql = $db->prepare('DELETE FROM '.DB_TBL_LOGINS.' WHERE login_selector = :login_userId');
        $sql->bindValue(':login_selector', $selector);

        $sql->execute();

        $sql = $db->prepare('DELETE FROM '.DB_TBL_LOGINS.' WHERE login_userId = :login_userId');
        $sql->bindValue(':login_userId', $selector);

        $sql->execute();

        unset($_SESSION['userId']);
        setcookie('authToken', '', 1);
        unset($_COOKIE['authToken']);

    }

    public function getId()
    {
        return $_SESSION['userId'];
    }
}
?>