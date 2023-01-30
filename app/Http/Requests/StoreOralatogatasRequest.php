<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOralatogatasRequest extends FormRequest
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
            'oktato_id' => ['required'],
            'latogato' => ['required','max:255'],
            'idopont' => ['required'],
            'tantargy' => ['max:255'],
            'tema' => ['max:255'],
            'osztaly' => ['max:255'],
            'oktato_megjegyzes' => ['max:255'],
            'osszegzes' => ['max:255'],
            'dokumantum' => ['max:255'],
        ];
    }
}
