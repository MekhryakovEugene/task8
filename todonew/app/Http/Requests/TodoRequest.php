<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class TodoRequest extends FormRequest
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
            'name' => ['required'],
            'description' => ['required'],
        ];
    }

    public function getName():string
    {
        return $this->name;
    }

    public function getDescription():string
    {
        return $this->description;
    }

    public function getStatus():string
    {
        return 0;
    }

	/*public function messages()
    {
        return [
            'name.required' => 'Name is required, please fill up the field',
            'description.required' => 'Description is required, please fill up the field',
        ];
    }*/
}
