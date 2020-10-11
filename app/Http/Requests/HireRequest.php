<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HireRequest extends FormRequest
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
           'name' => 'required | max:100',
           'email' => 'required | email',
           'organization' => 'required',
           'address' => 'required',
           'project_name' => 'required',
           'technologies' => 'required',
           'complete_date' => 'required',
           'project_description' => 'required',
           'files' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required.',
            'email.required' => 'Email is required.',
            'organization.required' => 'Organization is required.',
            'address.required' => 'Address is required.',
            'project_name.required' => 'Project Name is required.',
            'technologies.required' => 'Technologies are required.',
            'complete_date.required' => 'Completion date is required',
            'project_description.required' => 'Project Description is required.',
            'files.required' => 'At least attach one attachment.'
        ];
    }
}
