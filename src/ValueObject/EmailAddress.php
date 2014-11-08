<?php namespace Brenelz\Playground\ValueObject;

use Exception;

class EmailAddress {
	private $email;

	public function __construct($email) {
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			throw new Exception('Invalid Email');
		}

		$this->email = $email;
	}

	public function getEmail() {
		return $this->email;
	}

	public function __toString() {
		return $this->getEmail();
	}

	public function equals(EmailAddress $other)
    {
        return $this->email == $other->email;
    }

}