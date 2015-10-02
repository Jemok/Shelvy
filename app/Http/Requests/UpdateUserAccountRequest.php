<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateUserAccountRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
            'firstName' => 'required|min:1',
            'lastName' => 'required|min:1',
            'phoneNumber' => 'required|min:1',
            'location' => 'required|min:1',
            'nationality' => 'required|min:1',
            'preferredShop' => 'required|min:1',
            'interest' => 'required|min:1',
            'email' => 'required|min:1',
		];
	}

}
