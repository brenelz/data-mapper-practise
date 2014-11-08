<?php namespace Brenelz\Playground\ValueObject;

class Name {
	private $firstName;
	private $lastName;

	public static function fromString($name) {
		list($firstName,$lastName) = explode(' ',$name);
		return new static($firstName,$lastName);
	}

	public function __construct($firstName,$lastName) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}

	public function getFirstname() {
		return $this->firstName;
	}

	public function getLastName() {
		return $this->lastName;
	}

	public function getFullName() {
		return $this->firstName.' '.$this->lastName;
	}

	public function __toString() {
		return $this->getFullName();
	}

	public function equals(Name $other)
    {
        return $this->firstName == $other->firstName &&
            $this->lastName == $other->lastName;
    }

}