<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadRequest extends FormRequest
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
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'os' => 'required',
            'browser' => 'required',
            'app' => 'required',
            'issue_info' => 'required'
        ];
        $screenshots = count($this->input('screenshots'));

        foreach(range(0, $screenshots) as $index) {
            $rules['screenshots.' . $index] = 'image|mimes:jpg,jpeg,bmp,png|max:2000';
        }

        return $rules;
    }
}
