<?php

class LifeRFQController extends BaseController 
{
	public function showLifeRFQ() 
	{
		
		return View::make('RFQs.life');
	}

	public function showLifeHealthQuestionnaire()
	{
		
		return View::make('RFQs.life_health_questionnaire');

	}

	public function __construct()
	{
		parent::__construct();
	}



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
		$LifeRFQ = new LifeRFQ();
			// dd($LifeRFQ);
		// $LifeRFQ->user_id = Auth::id();

		return $this->saveLifeRFQ($LifeRFQ);
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
			// $LifeRFQ->zip = Input::get('zip');
			// $LifeRFQ->insurance_id = Input::get('insurance_id');
			// $LifeRFQ->insurance_type = Input::get('insurance_type');
			$LifeRFQ->dob = Input::get('dob');
			$LifeRFQ->gender = Input::get('gender');
			$LifeRFQ->coverage_amount = Input::get('coverage_amount');
			$LifeRFQ->coverage_duration = Input::get('coverage_duration');
			$LifeRFQ->smoker = Input::get('smoker');
			$LifeRFQ->cholesterol = Input::get('cholesterol');
			$LifeRFQ->blood_pressure = Input::get('blood_pressure');
			$LifeRFQ->drugs = Input::get('drugs');

						
			$LifeRFQ->save();
			// Session::flash('successMessage', 'Sucessfully saved your post!');

			return Redirect::action('RFQResultsController@index');

	}


}
