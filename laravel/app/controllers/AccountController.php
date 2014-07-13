<?php

class AccountController extends BaseController {

	public function showRegister()
	{
		echo "show owner Registration form";
		// make form a partial
		return View::make('accounts.index');
		
	}

	public function showEdit()
	{
		
	}	
	public function postRegister()
	{
	
		// maybe move validation to model.. As post and update both need to validate the same form fields
				
		//todo hash password after validation so that validation doesn't fail on the required length for empty password fields.
		
		$owner = Input::all();
		$owner['postcode'] = Str::upper($owner['postcode']);
		//$temp = $owner['postcode'];
		//echo $temp;
		$rules = array(
			'email' => ['Required','Between:3,64','Email','Unique:users'],
			'password' => 'Required',
			'firstname' => ['Required','Between:2,20'],
			'lastname' => ['Required','Between:2,30'],
			'address1' => 'Required',
			'address2' => '',
			'town' => 'Required',
			'postcode' => ['Required','regex:/^([A-PR-UWYZ](([0-9](([0-9]|[A-HJKSTUW])?)?)|([A-HK-Y][0-9]([0-9]|[ABEHMNPRVWXY])?)) [0-9][ABD-HJLNP-UW-Z]{2})|GIR 0AA$/'],
			'phone' => ['Required','regex:/^\s*\(?(020[78]?\)? ?[1-9][0-9]{2,3} ?[0-9]{4})|(0[1-8][0-9]{3}\)? ?[1-9][0-9]{2} ?[0-9]{3})\s*$/'],
			'twitter' => 'regex:/^[a-zA-Z0-9_]{1,15}$/',
			'facebook' => 'regex:/^[a-z\d.]{5,}$/i'
		);
		
		$messages = array(
			'email.required' => 'We need to know your e-mail it will be used for your login name',
		);
		
		$validator = Validator::make($owner, $rules, $messages);
		
		if ($validator->passes())
		{
			//echo "   >> passed validation";
		}
		else
		{
			
			//echo "   >> failed validation";
			//return Redirect::to('register')->withErrors($validator)->withInput(Input::except('password'));
			return Redirect::action('AccountController@showRegister')->withErrors($validator)->withInput(Input::except('password'));

		}
	
		//User::create($owner);
	}
	

}
