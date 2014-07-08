<?php
class AccountController extends BaseController {

	public function getSignIn()
	{
		return View::make('account.signin');
	}

	public function postSignIn()
	{
		$validator = Validator::make(Input::all(), array(
				'email' => 'required|email',
				'password' => 'required'
			));

		if ($validator->fails())
		{
			return Redirect::route('account-sign-in')->withErrors($validator)->withInput();
		} 
		else
		{
			$remember = (Input::has('remember')) ? true : false;

			$auth = Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'),'active' => 1), $remember);

			if ($auth)
			{
				return Redirect::intended('/');
			}
			else
			{
				return Redirect::route('account-sign-in')->with('global', 'Problem: Email or password WRONG<br>Did you activate your motherfucking account??!!');
			}
		}

		return Redirect::route('account-sign-in')->with('global', 'Problem: Did you activate your motherfucking account??!!');
	}

	public function getSignOut()
	{
		Auth::logout();
		return Redirect::route('home');
	}

	public function getCreate()
	{
		return View::make('account.create');
	}

	public function postCreate()
	{
		$validator = Validator::make(Input::all(), 
			array(
				'email' 		 => 'required|max:50|email|unique:users',
				'username' 		 => 'required|max:20|min:3|unique:users',
				'password' 		 => 'required|min:6',
				'password_again' => 'required|same:password'
			));

		if($validator->fails())
		{
			return Redirect::route('account-create')->withErrors($validator)->withInput();
		}
		else
		{
			$email 		= Input::get('email');
			$username 	= Input::get('username');
			$password 	= Input::get('password');

			$code  		= str_random(60);

			$create = User::create(array(
					'email' 		=> $email,
					'username' 		=> $username,
					'password' 		=> Hash::make($password),
					'code' 			=> $code,
					'active'		=> 0
				));

			if($create)
			{

				Mail::send('emails.auth.activate', array('link' => URL::route('account-activate', $code), 'username' => $username), function($message) use ($create) 
				{
					$message->to($create->email, $create->username)->subject('Activate your account');
				});

				return Redirect::route('home')->with('global', 'Your account has been created, check your email.');
			}
		}

	}

	public function getActivate($code)
	{
		$user = User::where('code', '=', $code)->where('active','=',0);
		if ($user->count())
		{
			$user = $user->first();
			$user->active = 1;
			$user->code = '';
			$user->save();

			if($user->save())
			{
				return Redirect::route('home')->with('global', 'You have activated your account');
			}
		}

		return Redirect::route('home')->with('global', 'Could not activate your account');

	}
	
	public function getChangePassword()
	{
		return View::make('account.password');
	}

	public function postChangePassword()
	{
		$validator = Validator::make(Input::all(),
			array(
					'old_password' => 'required',
					'password'     => 'required|min:6',
					'password_again' => 'required|same:password'

				));

		if($validator->fails())
		{
			return Redirect::route('account-change-password')->withErrors($validator);
		}
		else
		{
			$user 			= User::find(Auth::user()->id);

			$old_password 	= Input::get('old_password');
			$password 		= Input::get('password');

			if (Hash::check($old_password, $user->getAuthPassword()))
			{
				$user->password = Hash::make($password);
				if ($user->save())
				{
					return Redirect::route('home')->with('global', 'Your password has been changed.');
				}
			}
			else
			{
				return Redirect::route('account-change-password')->with('global', 'Your old password is incorrect.');
			}
		}

		return Redirect::route('account-change-password')->with('global', 'Your password could not be changed.');
	}
}