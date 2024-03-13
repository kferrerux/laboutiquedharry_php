<?php

function login($db, $username, $password)
{
    $sql = $db->prepare("SELECT * FROM admin WHERE username = :username");
    $sql->bindValue(':username', $username, PDO::PARAM_STR);
    $sql->execute();

    $result = $sql->fetch(PDO::FETCH_OBJ);

    if (!$result) {
        $msg_error = "Login ou Mot de passe invalide";
        return ['result' => false, 'msg' => $msg_error];
    } else {
        if (password_verify($password, $result->password)) {
            setUserSession($db, $result->id, $result->username);
            $msg_success = "Bienvenue";
            return ['result' => true, 'msg' => $msg_success];
        } else {
            $msg_error = "Login ou Mot de passe invalide";
            return ['result' => false, 'msg' => $msg_error];
        }
    }
}

function setUserSession($db, $id, $username)
{
    session_start();
    $sql = "UPDATE admin SET lastLogin = NOW() WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $_SESSION['id'] = $id;
    $_SESSION['admin'] = $username;
}
