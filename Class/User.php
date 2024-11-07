<?php
class User {
    public function __construct(
        public string $username,
        public string $email,
        public string $password,
    ) {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function register() {
        // code to register a new user
    }

    public function login() {
        // code to log in a user
    }

    public function update() {
        // code to update a user's information
    }
}