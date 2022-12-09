<?php
// users = admins + members
class usersController{

    public function selectUsers()
    {
        $users = users::selectUsers();
        return $users;
    }
    public function insertIntoUsers()
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        users::insertIntoUsers($username, $email, $password);
    }
    public function updateUsers()
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $id_u = $_POST['id_u'];
        users::updateUsers($username, $email, $password, $avatar, $id_u);
    }
    public function deleteUsers()
    {
        $id_u = $_POST['id_u'];
        users::deleteUsers($id_u);
    }

}


// admins
class adminsController
{
    static public function selectAdmins()
    {
        $users = admins::selectAdmins();
        return $users;
    }
    
}

// members

class membersController
{
    static public function selectMembers()
    {
        $users = members::selectMembers();
        return $users;
    }
}
?>