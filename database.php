<?php
// Database.php
class Database {
    private $users = [
        ['id' => 1, 'name' => 'David', 'email' => 'davidestudosdev@gmail.com', 'password' => '1234'],
        // More users can be added here
    ];

    public function getUserByEmailAndPassword($email, $password) {
        foreach ($this->users as $user) {
            if ($user['email'] == $email && $user['password'] == $password) {
                return $user;
            }
        }
        return null;
    }
}
