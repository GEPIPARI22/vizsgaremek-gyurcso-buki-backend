<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreErtekelesRequest extends FormRequest
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
            'szempontsor_id' => ['required'],
            'idopont' => ['required']
        ];
    }
}
