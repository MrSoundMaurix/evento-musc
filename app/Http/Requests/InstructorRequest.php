<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstructorRequest extends FormRequest
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
            case 'PATCH': //update               
                //$producto = Producto::find($this->pro_id);
                return [
                    //'pro_codigo' => 'required|string|max:10|unique:inv_productos,pro_codigo,'.$producto->pro_id.',pro_id',
                    // 'esp_nombre' => 'required|string|max:200',
                    // 'esp_capacidad' => 'required|integer|min:0',
                    'esp_foto'=>'nullable|file|mimes:jpeg,png,jpg,JPG|dimensions:min_width=200,min_height=200,max_width=4000,max_height=4000|max:2048',
                ];
                
                break; 
            case 'PUT': //update
                break; 
            case 'POST': //store
                
                return [
                    // 'esp_nombre' => 'required|string|max:200',
                    // 'esp_capacidad' => 'required|integer|min:0',
                    'esp_foto'=>'nullable|file|mimes:jpeg,png,jpg,JPG|dimensions:min_width=200,min_height=200,max_width=4000,max_height=4000|max:2048',                    
                ];
                
                break; 
            default:
                break;
        }
    }
}
