<?php

class SessionsController extends BaseController
{

	// public function __construct()
	// {
		// parent::__construct();

		// require authentication for certain functions
   		// $this->beforeFilter('auth', ['except' => ['index', 'show'] ]);
	// }


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{


	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()

	{
				//validate

		$attempt = Auth::attempt([
			'username' => $input['username'],
			'password' => $input['password']
		]);	

		if ($attempt) {
			Session::flash('successMessage', "You've logged in! Welcome!");

			return Redirect::intended('/');
		} else {
			Session::flash('errorMessage', 'Failed to log in');
			return Redirect::action('SessionController@create')->withInput();	
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		

	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{

		Auth::logout();

		return Redirect::home();

	}
		

}
