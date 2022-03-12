<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
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
        if ($this->method() == 'POST') {
            return [
                'code',
                'slug',
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'phone',
                'folio' => 'required',
                'city' => 'required',
                'state' => 'required',
                'observations'
            ];
        } else {
            return [
                'code',
                'slug',
                'name' => 'required',
                'email' => 'required|email',
                'phone',
                'folio' => 'required',
                'city' => 'required',
                'state' => 'required',
                'observations'
            ];
        }
    }
}
