<?php namespace Brenelz\Playground\Entity;

use Brenelz\Playground\ValueObject\Name;
use Brenelz\Playground\ValueObject\EmailAddress;
use Brenelz\Playground\ValueObject\LoginCredential;

class User {
	private $name;
	private $email;
	private $credential;
	private $tickets;

	public function __construct(Name $name,EmailAddress $email) {
		$this->name = $name;
		$this->email = $email;
	}

	public function getEmail() {
		return $this->email;
	}

	public function getName() {
		return $this->name;
	}

	public function setCredential($username,$password) {
		$this->credential = new LoginCredential($username,$password);
	}

	public function getCredential() {
		return $this->credential;
	}

	public function getTickets() {
		return $this->tickets;
	}

	public function addTickets(array $tickets) {
		foreach($tickets as $ticket) {
			$this->addTicket($ticket);
		}
	}

	public function addTicket(Ticket $ticket) {
		$this->tickets[] = $ticket;
	}
}