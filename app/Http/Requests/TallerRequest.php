<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TallerRequest extends FormRequest
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
       /*  switch($this->method())
        { */
           // case 'POST': //store

                return [
                    'tal_tema' => 'required|string|max:500|unique:talleres',
                    'tal_fecha' => 'required|string|max:10',
                    'tal_horainicio'=>'required|string|max:10',
                    'tal_horafin'=> 'required|string|max:10',
                    'esp_id'=>'nullable|integer|exists:espacios,esp_id',
                    'cat_id'=>'required|integer|exists:categorias,cat_id',
                    'ins_id'=>'required|integer|exists:instructores,ins_id',
                    'tal_materiales'=>'nullable|string|max:500',
                    'tal_resumen'=>'nullable|string|max:5000'
                ];
            /*     break;
            default:
                break; */
      //  }
    }
}
