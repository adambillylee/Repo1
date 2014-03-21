<?php

class UserController extends BaseController
{
	/**
	 * Create Index
	 * @return response
	 */
	public function index()
	{
		$Users = User::all();

		return View::make('/user/user-index')
			->with('users', $Users);
	}

	/**
	 * Create User
	 * @return response
	 */
	public function create()
	{
		return View::make('/user/user-create');
	}

	/**
	 * Store user attributes to model
	 * @return response
	 */
	public function store()
	{
		//create user
		$user = new User;

		//populate the attributes
		$user->name = Input::get('name');
		$user->mail = Input::get('mail');
		$user->save();

		//redirect
		Session::flash('message', 'Successfully created User!');
		return Redirect::to('user');
	}

	public function show($id)
	{
		//get the user
		$user = User::find($id);

		//show the user
		return View::make('/user/user-show')
			->with('user', $user);
	}


	public function edit($id)
	{
		//get the user
		$user = User::find($id);

		//show the user
		return View::make('/user/user-edit')
			->with('user', $user);
	}

	public function update($id)
	{
		//create user
		$user = User::find($id);

		//populate the attributes
		$user->name = Input::get('name');
		$user->mail = Input::get('mail');
		$user->save();

		//redirect
		Session::flash('message', 'Successfully updated User!');
		return Redirect::to('user');
	}

	public function destroy($id)
	{
		//get the user
		$user = User::find($id);

		//delete user
		$user->delete();

		//Redirect
		Session::flash('message',"Successfully deleted user!!");
		return Redirect::to('user');
	}

}