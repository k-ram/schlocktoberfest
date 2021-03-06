<?php

namespace App\Views;

use Mailgun\Mailgun;

abstract class EmailView extends View
{
	public function sendEmail($templateFile)
	{
		extract($this->data);
		# Instantiate the client.
		$mgClient = new Mailgun('MAILGUN_KEY');
		$domain = MAILGUN_DOMAIN;

		ob_start();

		include $templateFile;

		$emailBody = ob_get_clean();

		# Make the call to the client.
		$result = $mgClient->sendMessage($domain, array(
		    'from'    => $emailHeader['from'],
		    'to'      => $emailHeader['to'],
		    'subject' => $emailHeader['subject'],
		    'text'    => $emailBody
		));
	}
}

