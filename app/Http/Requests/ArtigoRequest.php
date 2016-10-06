<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ArtigoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){
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
            "titulo"   => "required|string",
            "conteudo" => "required|string",
        ];
    }

    public function except($keys){
        $all = parent::except($keys);
        $all["user_id"] =  Auth::user()->id;
        return $all;
    }


}
