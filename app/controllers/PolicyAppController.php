<?php

class PolicyAppController extends BaseController 
{
	public function showLifeAppBL()
	{	

		$user = Auth::user();
		$userId = $user->id;

		// $usersPolicy = User::with('policies')->where('user_id', '=', $userId)->firstOrFail();
		$usersPolicy = Policy::with('user')->where('user_id', '=', $userId)->firstOrFail();
		// dd($usersPolicy);

		// $usersPolicy = Policy::where('user_id', '=', $userId)->firstOrFail();

		// $user = Policy::findOrFail(1)->user()->where('userId', '=', $userId);

		$data = 
		[
			'usersPolicy' => $usersPolicy,
			'user' => $user
		];
			
		return View::make('PolicyApps.BannerLife.banner-life-app')->with($data);
	}	

	public function showLifeAppSecA() {

		// display correct form based on input
		// by company
		// by product (basically which duration of term coverage)
		// by state
		
		return View::make('banner_life.bl_form_sec_a');


	}

	public function showLifeAppSecB() {

		// display correct form based on input
		// by company
		// by product (basically which duration of term coverage)
		// by state
		
		return View::make('banner_life.bl_form_sec_b');


	}

	public function showLifeAppSecC() {

		// display correct form based on input
		// by company
		// by product (basically which duration of term coverage)
		// by state
		
		return View::make('banner_life.bl_form_sec_c');


	}

	public function showLifeAppSecE() {

		// display correct form based on input
		// by company
		// by product (basically which duration of term coverage)
		// by state
		
		return View::make('banner_life.bl_form_sec_e');


	}
	
	public function showLifeAppSecF() {

		// display correct form based on input
		// by company
		// by product (basically which duration of term coverage)
		// by state
		
		return View::make('banner_life.bl_form_sec_f');


	}

	public function showLifeAppSecG() {

		// display correct form based on input
		// by company
		// by product (basically which duration of term coverage)
		// by state
		
		return View::make('banner_life.bl_form_sec_G');


	}

	public function showLifeAppSecH() {

		// display correct form based on input
		// by company
		// by product (basically which duration of term coverage)
		// by state
		
		return View::make('banner_life.bl_form_sec_h');


	}

	public function showLifeAppSecI() {

		// display correct form based on input
		// by company
		// by product (basically which duration of term coverage)
		// by state
		
		return View::make('banner_life.bl_form_sec_i');


	}

	public function showLifeAppSecJ() {

		// display correct form based on input
		// by company
		// by product (basically which duration of term coverage)
		// by state
		
		return View::make('banner_life.bl_form_sec_j');


	}

	public function showLifeAppSecK() {

		// display correct form based on input
		// by company
		// by product (basically which duration of term coverage)
		// by state
		
		return View::make('banner_life.bl_form_sec_k');


	}

	public function showMedHistory() {

		// display correct form based on input
		// by company
		// by product (basically which duration of term coverage)
		// by state
		
		return View::make('banner_life.bl_form_medical_history');


	}

	public function showFileUpload() {

		// display correct form based on input
		// by company
		// by product (basically which duration of term coverage)
		// by state
		
		return View::make('PolicyApps.upload');


	}

	public function saveFileUpload() {

		$file = Input::file('file');

		$destinationPath = public_path() . '/uploads';
		
		$filename = Auth::User()->username . '_' . $file->getClientOriginalName();

		$upload_success = Input::file('file')->move($destinationPath, $filename);

		if( $upload_success ) {
		   return Response::json('success', 200);
		} else {
		   return Response::json('error', 400);
		}
		
		return View::make('PolicyApps.upload');


	}

}
