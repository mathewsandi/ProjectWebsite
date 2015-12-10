<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SendApplicationRequest extends Request
{
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
            'name' => 'required',
            'age' => 'required',
            'email' => 'required|email',
            'position' => 'required',
            'experience' => 'required',
            'why' => 'required',
            'what' => 'required',
        ];
    }
}
