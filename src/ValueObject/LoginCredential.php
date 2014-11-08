<?php namespace Brenelz\Playground\ValueObject;

class LoginCredential {
	private $username;
	private $password;
	private $passwordHash;

	public function __construct($username,$password) {
		$this->username = $username;
		$this->password = $password;
		$this->passwordHash = $this->hashPassword($password);
	}

	public function getUsername() {
		return $this->username;
	}

	public function getPasswordHash() {
		return $this->passwordHash;
	}

	public function __toString() {
		return $this->getUsername();
	}

	public function equals(LoginCredential $other)
    {
        return $this->username == $other->username && $this->password == $other->password;
    }

    private function hashPassword($password) {
		return password_hash($password,PASSWORD_DEFAULT);
	}

}
