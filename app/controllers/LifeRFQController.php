<?php

class LifeRFQController extends BaseController 
{
	// public function __construct()
	// {
	// 	parent::__construct();

 //   		$this->beforeFilter('auth', ['except' => ['index', 'show'] ]);

	// }


	public function index()
	{

		$test = LifeRFQ::all();

		// show life insurance RFQ results

		// send data from RFQ to CompuLife 
		// and retrieve data from compulife and spit out to panels
	}

	public function create()
	{
		return View::make('LifeRFQ.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$lifeRFQ = new LifeRFQ();

		$dob = strtotime(Input::get('dob'));

		// dd($lifeRFQ);
		$lifeRFQ->gender = Input::get('gender');
		$lifeRFQ->dob = date('Y-m-d',$dob);
		$lifeRFQ->coverage_amount = Input::get('coverage_amount');
		$lifeRFQ->coverage_duration = Input::get('coverage_duration');
		$lifeRFQ->smoker = Input::get('smoker');
		$lifeRFQ->cholesterol = Input::get('cholesterol');
		$lifeRFQ->blood_pressure = Input::get('blood_pressure');
		$lifeRFQ->drugs = Input::get('drugs');

		$lifeRFQ->save();


		$RFQ = new RFQ();

		$RFQ->first_name = Input::get('first_name');
		$RFQ->zip = Input::get('zip');
		$RFQ->insurance_id = $lifeRFQ->id;
		$RFQ->insurance_type = 'life_rfq';
		// $RFQ->user_id = Auth::id();

		$RFQ->save();

		return View::make('RFQResults.index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		// try {
		// 	$post = Post::findOrFail($id);
			
		// } catch (Exception $e) {
		// 	Log::info("User tried to request this id: $id");
		// 	App::abort(404);
			
		// }

		// return View::make('posts.show')->with('posts', $post);
		
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// $post = Post::findOrFail($id);
		// return View::make('posts.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// $post = Post::findOrFail($id);
		// return $this->saveLifeRFQ($LifeRFQ);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// try {
		// 	$post = Post::findOrFail($id);
		// } catch (Exception $e) {
		// 	Log::warning("User made a bad PostsController request", ['id' => 
		// 		$id]);
		// 	App::abort(404);
		// }
		
		// $post->delete();
		// Session::flash('successMessage', 'Post deleted');

		// return Redirect::action('PostsController@index');
	}

	protected function saveLifeRFQ($LifeRFQ)
	{
		// $validator = Validator::make(Input::all(), Post::$rules);
		
		// if ($validator->fails()) {
		// 	Session::flash('errorMessage', 'Failed to save your post!');

		// 	return Redirect::back()->withInput()->withErrors($validator);

		// } else {
						
			$LifeRFQ->save();
			// Session::flash('successMessage', 'Sucessfully saved your post!');

			return Redirect::action('RFQResultsController@index');

	}


}
