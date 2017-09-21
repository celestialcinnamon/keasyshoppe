<?php
    include 'session.php';

    $session = new Session;
    $session->createSession();

    if ($session->isLogged()) {
        header('Location: '.__DIR__.'../../pages/u/');
        exit();
    }

    $connection = new Connection;
    $db = $connection->openConnection(false);
    
    if (isset($_POST['username'])&&isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_post['password'];

        if (strlen($username)>0&&strlen($password)>0) {
            $sql = $db->prepare('SELECT * FROM '.DB_TBL_ACCOUNTS.' WHERE acc_Username = :username');
            $sql->bindValue(':username', $username);

            $sql->execute();
            $results = $sql->fetch();
            if ($results) {
                $verify = password_verify($password, $results['acc_Password']);
                if ($verify) {
                    $session->logUser($results['accID']);
                    header('Location: '.__DIR__.'../../pages/u/');
                } else {
                    # TODO: Handle wrong password
                }
                
            } else {
                # TODO: Handle no user found
            }
            
        } else {
            # TODO: Handle no username/password given
        }
        
    }

    include '../views/sign_up.html';
    
?>