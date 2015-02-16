<?php

class RFQResultsController extends BaseController
{

	// public function processLifeResults() {
	// 	$input = Input::all();
	// 	dd($input);

	// 	$rfq = new RFQResults();

	}

	// public function __construct()
	// {
	// 	parent::__construct();
	// }


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		// show insurance RFQ results
		return View::make('RFQResults.index');

		// send data from RFQ to CompuLife 
		// and retrieve data from compulife and spit out to panels
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$quote = new LifeResult();
		// $quote->user_id = Auth::id();

		return $this->savePost($post);
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
		// return $this->savePost($post);
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

	protected function savePost($quote)
	{
		// $validator = Validator::make(Input::all(), Post::$rules);
		
		// if ($validator->fails()) {
			// Session::flash('errorMessage', 'Failed to save your post!');

			// return Redirect::back()->withInput()->withErrors($validator);

		// } else {
			// $quote->zip = Input::get('zip');
			// $quote->insurance_id = Input::get('insurance_id');
			// $quote->insurance_type = Input::get('insurance_type');
			// // $quote->user_id = Input::get('id');

			
			
			// $quote->save();
			// Session::flash('successMessage', 'Sucessfully saved your post!');

			// return Redirect::action('PostsController@index');
		// }

	}


}
