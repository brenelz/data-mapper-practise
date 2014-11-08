<?php namespace Brenelz\Playground\ValueObject;

use Exception;

class TicketStatus {
	private $status;

	public function __construct($status) {
		if(!in_array($status, ['open','closed'])) {
			throw new Exception('Invalid status.');
		}
		$this->status = $status;
	}

	public function getStatus() {
		return $this->status;
	}

	public function __toString() {
		return $this->getStatus();
	}

	public function equals(TicketStatus $other)
    {
        return $this->status == $other->status;
    }

}