<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFilms extends FormRequest
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
            //

            'titre'=>'required|unique:films|min:2'
        ];
    }
    public function messages()
    {
        return [
            'titre.unique'=>' Le titre du film doit être unique dans la base. '
        ];
    }
    public function withValidator($validator)
    {
        $validator->after(function ($validator){
            if(true){
                $validator->errors()->add('field', 'Buuupppppp y a un souci avec :'.$this->titre);
            }
        });
    }
}
