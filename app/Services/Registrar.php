<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'firstName' => 'required|max:255',
			'lastName' => 'required|max:255',
			'phoneNumber' => 'required|max:255',
			'location' => 'required|max:255',
			'nationality' => 'required|max:255',
			'preferredShop' => 'required|max:255',
			'interest' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',

		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		return User::create([
			'email' => $data['email'],
			'firstName' => $data['firstName'],
			'lastName' => $data['lastName'],
			'phoneNumber' => $data['phoneNumber'],
			'location' => $data['location'],
			'interest' => $data['interest'],
			'preferredShop' => $data['preferredShop'],
			'nationality' => $data['nationality'],
			'password' => bcrypt($data['password']),
		]);
	}

}
