<?php

class CityController extends BaseController
{
	/**
	 * List all cities function
	 * @return Respond
	 */
	public function index()
	{
		//Grab all cities
		$Cities = City::all();

		//Make list city view
		return View::make('/city/city-index')
			->with('cities', $Cities);
	}

	/**
	 * Show one single city function
	 * @param  int $id
	 * @return Respond
	 */
	public function show($id)
	{
		$City = City::find($id);

		//Make show city view;
		return View::make('/city/city-show')
			->with('city', $City);
	}

	/**
	 * Create city function
	 * @return Respond
	 */
	public function create()
	{
		return View::make('/city/city-create');
	}

	/**
	 * Store city information to model
	 * @return Respond
	 */
	public function store()
	{
		//create new city
		$City = new City;

		//pupulate city attributes
		$City->name = Input::get('name');
		$City->province = Input::get('province');
		$City->population = Input::get('population');
		$City->save();

		//Redirect
		Session::flash('message', "City: " . $City->name . " is successfully created");
		return Redirect::to('city');
	}


	/**
	 * Edit city information function
	 * @param int $id
	 * @return void
	 */
	public function edit($id)
	{
		//Get city
		$City = City::find($id);

		return View::make('/city/city-edit')
			->with('city',$City);
	}


	/**
	 * Update city information in model
	 * @param  int $id
	 * @return Respond
	 */
	public function update($id)
	{
		//Get city
		$City = City::find($id);

		//Update city attributes
		$City->name = Input::get('name');
		$City->province = Input::get('province');
		$City->population = Input::get('population');
		$City->save();

		//Redirect
		Session::flash('message', "City: " . $City->name . " is successfully updated");
		return Redirect::to('city');		
	}

	/**
	 * Delete City Function
	 * @param  int $id
	 * @return Respond
	 */
	public function destroy($id)
	{
		//Get city
		$City = City::find($id);

		//Delete City
		$City->delete();

		//Redirect
		Session::flash('message', "City: " . $City->name . " is removed.");
		return Redirect::to('city');
	}
}
