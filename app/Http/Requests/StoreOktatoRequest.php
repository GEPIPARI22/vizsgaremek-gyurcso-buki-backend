<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOktatoRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'vezeteknev' => ['required','max:255'],
            'keresztnev' => ['required', 'max:255'],
            'om_azonosito' => ['required','max:10'],
            'iskola_id' => ['required'],
            'munkakor_id' => ['required']
        ];
    }
}
