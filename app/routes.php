<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

use Brenelz\Playground\Entity\User;
use Brenelz\Playground\Entity\Ticket;

use Brenelz\Playground\ValueObject\Name;
use Brenelz\Playground\ValueObject\EmailAddress;
use Brenelz\Playground\ValueObject\LoginCredential;



Route::get('/', function() {
	$user = new User(
		Name::fromString('John Doe'),
		new EmailAddress('john.doe@gmail.com')
	);
	$user->setCredential('test@test.com','password');

	$ticket1 = new Ticket('1001');
	$ticket2 = new Ticket('1002');
	$ticket3 = new Ticket('1003');

	$user->addTickets([$ticket1,$ticket2,$ticket3]);

	$ticket1->setStatus('closed');

	dd($user);
});
