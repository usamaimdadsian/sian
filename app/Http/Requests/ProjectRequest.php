<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
        $rules = array();
        switch($this->method())
        {
            case 'POST':
                $rules['pic_addr'] = 'required | image' ;
            case 'PUT':
                $rules = array_merge($rules,[
                    'title' => 'required|max:500',
                    'description' => 'required',
                    'rating' => 'required',
                    'client' => 'required',
                    'completed' => 'required',
                    'status' => 'required'
                ]);
            default: break;
        }
        return $rules;
    }

    public function messages()
    {
        return [
            'title.required' => 'Title is required',
            'description.required' => 'Description is required.',
            'rating.required' => 'Rating is required.',
            'client.required' => 'Client Name is required.',
            'completed.required' => 'Completing date is required.',
            'status.required' => 'Status is Required.'
        ];
    }
}
