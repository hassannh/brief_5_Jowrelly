<?php
// users = admins
require_once './database/connect.php';
class users
{
    static public function selectUsers()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM users');
        $stmt->execute();
        $users = $stmt->fetchAll();
        return $users;
    }

    static public function insertIntoUsers($username, $email, $password)
    {
        $stmt = DB::connect()->prepare('INSERT INTO 
                                                users (
                                                    username,
                                                    email, 
                                                    password
                                                
                                                ) 
                                            VALUES (
                                                :zusername,
                                                :zemail,
                                                :zpassword
                                            
                                            )
                                        ');
        $stmt->execute(
            array(
                'zusername' => $username,
                'zemail' => $email,
                'zpassword' => $password
                
            )
        );
    }

    static public function updateUsers($username, $email, $password, $id_u)
    {
        $stmt = DB::connect()->prepare("UPDATE 
        users 
    SET 
    username = ?,
    email = ?, 
    password = ?
    WHERE 
        id_u = ?");

        $stmt->execute(array($username, $email, $password, $id_u));
    }

    static public function deleteUsers($id_u)
    {
        $stmt = DB::connect()->prepare("DELETE FROM users WHERE id_u = :zid");

        $stmt->bindParam(":zid", $id_u);

        $stmt->execute();
    }
}
