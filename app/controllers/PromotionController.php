<?php
class PromotionController extends BaseController {

	public function sendEmail($name, $email, $subject)
	{
		Mail::send('emails.promo', array('link' => URL::route('send-email'), 'name' => $name), function($message) use ($name,$email,$subject)
		{
			$message->to($email, $name)->subject($subject);
		});
		
		echo "Email Sent!";
	}
}