<?php


class user
{

    public static function userExist($email){
        global $db;
        $query = $db->prepare('SELECT * FROM users WHERE username=:email');
        $query->execute([
            'email' => $email
        ]);
        $row = $query->fetch(PDO::FETCH_ASSOC);

        if ($row == ''){
            return false;
        }else{
            return $row;
        }
    }
}