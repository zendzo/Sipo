<?php

use Gurindam\Forms\RegistrationForm;

class RegistrationController extends \BaseController {

    protected $registrationForm;

    function __construct(RegistrationForm $registrationForm)
    {
        $this->registrationForm = $registrationForm;
    }


    public function create()
	{
		if( Auth::guest() )
        {
            return View::make('auth.register');
        }

        return Redirect::home();
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /registration
	 *
	 * @return Response
	 */
	public function store()
	{
        $input = Input::only('username','email','occupation','password','password_confirmation');

        $this->registrationForm->validate($input);

		$user = User::create($input);

		Auth::login($user);

		return Redirect::home()->with('flash_message','You Are Now Registered! Welcome to Gurindam Management Project');
	}


}