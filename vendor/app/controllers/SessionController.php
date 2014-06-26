<?php

use Gurindam\Forms\LoginForm;

class SessionController extends \BaseController {

    protected $loginForm;

    function __construct(LoginForm $loginForm)
    {
        $this->loginForm = $loginForm;
    }


    /**
     * show login form
     * otherwise redirect home
     * @return mixed
     */
    public function create()
	{
        return $this->checkUser();
    }

	/**
	 * Store a newly created resource in storage.
	 * POST /session
	 *
	 * @return Response
	 */
	public function store()
	{
        $this->loginForm->validate($input = Input::only('username','password'));
        $remember = Input::get('remember_me') ?: $remember = null;
        if(Auth::attempt($input,$remember))
        {
            return Redirect::intended('/');
        }

        return Redirect::back()->withInput()->withFlashMessage('Gagal Login, Username dan Password Salah.');
	}

    /**
     * @return mixed
     * Logout users
     */
    public function destroy()
	{
        Auth::logout();
        return Redirect::home();
	}

    /**
     * @return mixed
     */
    private function checkUser()
    {
        if (Auth::check()) {
            return Redirect::to('/');
        } else {
            return View::make('auth.login');
        }
    }

}