<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Taller;

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
         switch($this->method())
        {
            case 'POST': //store

                return [
                    'tal_tema' => 'required|string|max:500|unique:talleres',
                    'tal_fecha' => 'required|string|max:10',
                    'tal_horainicio'=>'required|max:10',
                    'tal_horafin'=> 'required|max:10',
                    'esp_id'=>'nullable|integer|exists:espacios,esp_id',
                    'cat_id'=>'required|integer|exists:categorias,cat_id',
                    'ins_id'=>'required|integer|exists:instructores,ins_id',
                    'tal_materiales'=>'nullable|string|max:500',
                    'tal_resumen'=>'nullable|string|max:5000',
                    'tal_foto'=>'nullable|file|mimes:jpeg,png,jpg,JPG|dimensions:min_width=200,min_height=200,max_width=4000,max_height=4000|max:2048',
                ];
                 break;
            case 'PATCH': //update
                $taller = Taller::find($this->tal_id);
                return [
                     //'pro_codigo' => 'required|string|max:10|unique:inv_productos,pro_codigo,'.$producto->pro_id.',pro_id',
                    'tal_tema' => 'required|string|max:500|unique:talleres,tal_tema,'.$taller->tal_id.',tal_id',
                    'tal_fecha' => 'required|string|max:10',
                    'tal_horainicio'=>'required|max:10',
                    'tal_horafin'=> 'required|max:10',
                    'esp_id'=>'nullable|integer|exists:espacios,esp_id',
                    'cat_id'=>'required|integer|exists:categorias,cat_id',
                    'ins_id'=>'required|integer|exists:instructores,ins_id',
                    'tal_materiales'=>'nullable|string|max:500',
                    'tal_resumen'=>'nullable|string|max:5000',
                    'tal_foto'=>'nullable|file|mimes:jpeg,png,jpg,JPG|dimensions:min_width=200,min_height=200,max_width=4000,max_height=4000|max:2048',
                 ];

                break;
            default:
                break;
        }
    }
}
