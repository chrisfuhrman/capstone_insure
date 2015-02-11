<?php

class QuoteSavedController extends \BaseController {

	/**
	 * Display a listing of quotesaveds
	 *
	 * @return Response
	 */
	public function index()
	{
		$quotesaveds = Quotesaved::all();

		return View::make('quotesaved.index', compact('quotesaved'));
	}

	/**
	 * Show the form for creating a new quotesaved
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('quotesaved.create');
	}

	/**
	 * Store a newly created quotesaved in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Quotesaved::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Quotesaved::create($data);

		return Redirect::route('quotesaved.index');
	}

	/**
	 * Display the specified quotesaved.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$quotesaved = Quotesaved::findOrFail($id);

		return View::make('quotesaved.show', compact('quotesaved'));
	}

	/**
	 * Show the form for editing the specified quotesaved.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$quotesaved = Quotesaved::find($id);

		return View::make('quotesaved.edit', compact('quotesaved'));
	}

	/**
	 * Update the specified quotesaved in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$quotesaved = Quotesaved::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Quotesaved::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$quotesaved->update($data);

		return Redirect::route('quotesaved.index');
	}

	/**
	 * Remove the specified quotesaved from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Quotesaved::destroy($id);

		return Redirect::route('quotesaved.index');
	}

}
