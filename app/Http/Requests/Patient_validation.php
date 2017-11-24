<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Patient;

class Patient_validation extends FormRequest
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
            'p_code'=>'required|numeric|min:11|max:11',
            'name'=>'required|min:2',
            'surname'=>'required|min:2',
            'address'=>'required|min:2',
        ];
    }
    public function messages(){
      return[
        'p_code.required'=>'Įveskite paciento asmens kodą',
        'name.required'=>'Įveskite paciento vardą',
        'surname.required'=>'Įveskite paciento pavardę',
        'address.required'=>'Įveskite paciento gyvenamąją vietą',
      ];
    }
}
