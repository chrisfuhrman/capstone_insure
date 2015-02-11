<?php

class QuoteApplicationsController extends \BaseController {

	/**
	 * Display a listing of quoteapplications
	 *
	 * @return Response
	 */
	public function index()
	{
		$quoteapplications = Quoteapplication::all();

		return View::make('quoteapplications.index', compact('quoteapplications'));
	}

	/**
	 * Show the form for creating a new quoteapplication
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('quoteapplications.create');
	}

	/**
	 * Store a newly created quoteapplication in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Quoteapplication::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Quoteapplication::create($data);

		return Redirect::route('quoteapplications.index');
	}

	/**
	 * Display the specified quoteapplication.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$quoteapplication = Quoteapplication::findOrFail($id);

		return View::make('quoteapplications.show', compact('quoteapplication'));
	}

	/**
	 * Show the form for editing the specified quoteapplication.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$quoteapplication = Quoteapplication::find($id);

		return View::make('quoteapplications.edit', compact('quoteapplication'));
	}

	/**
	 * Update the specified quoteapplication in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$quoteapplication = Quoteapplication::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Quoteapplication::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$quoteapplication->update($data);

		return Redirect::route('quoteapplications.index');
	}

	/**
	 * Remove the specified quoteapplication from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Quoteapplication::destroy($id);

		return Redirect::route('quoteapplications.index');
	}

}
