<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class DataPelanggansRequest extends FormRequest
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
            'namalengkap' => 'required|max:255',
            'jenis_kelamin' => 'required', 
            'tempat_lahir' => 'required|max:255',
            'tgl_lahir' => 'required|date', 
            'ktp' => 'required|max:255', 
            'telp' => 'required|max:255', 
            'alamat' => 'required|max:255', 
            'no_passport' => 'required|max:255'
        ];
    }
}
