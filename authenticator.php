<?php
// Authenticator.php
require_once 'Database.php';
require_once 'User.php';

class Authenticator {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function login($email, $password) {
        // Mock database query for example purposes
        $user = $this->db->getUserByEmailAndPassword($email, $password);

        if ($user) {
            return new User($user['id'], $user['name'], $user['email']);
        }

        return null;
    }
}
