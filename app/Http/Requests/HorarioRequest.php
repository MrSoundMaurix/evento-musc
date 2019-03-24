<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HorarioRequest extends FormRequest
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
        switch($this->method())
        {
            case 'POST': //store

                return [
                    'horainicio' => 'required|max:500|unique:horarios',
                    'horafin' => 'required|unique:horarios',
                ];
            break;
            default:
            break;
        }
    }
}
