<?php namespace Brenelz\Playground\Entity;

use Brenelz\Playground\ValueObject\TicketStatus;

class Ticket {
	private $orderNumber;
	private $status;
	private $user;

	public function __construct($orderNumber) {
		$this->orderNumber = $orderNumber;
		$this->setStatus('open');
	}

	public function getOrderNumber() {
		return $this->orderNumber;
	}

	public function getStatus() {
		return $this->status;
	}

	public function setStatus($status){
		$this->status = new TicketStatus($status);
	}

	public function assignUser($user) {
		$this->user = $user;
	}


}