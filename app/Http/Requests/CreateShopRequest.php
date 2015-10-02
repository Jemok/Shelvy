<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateShopRequest extends Request {

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
			'shop_name' => 'required|min:1',
            'shop_description' => 'required',
            'slug' => 'required|min:1|alpha_dash',
            'shop_location' => 'required|min:1',
            'shop_building' => 'required|min:1',
            'shop_category' => 'required|min:1',
            'shop_street'   => 'required|min:1',

		];
	}

}
