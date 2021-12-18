<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PaketTravelsRequest extends FormRequest
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
            'title' => 'required|max:255',
            'namapaket' => 'required|max:255', 
            'deskripsi' => 'required', 
            'hotel' => 'required|max:255', 
            'maskapai' => 'required|max:255', 
            'jenispaket' => 'required|max:255',
            'tgl_berangkat' => 'required|date', 
            'programhari' => 'required|max:255', 
            'bandara' => 'required|max:255', 
            'kamar' => 'required|max:255', 
            'type' => 'required|max:255', 
            'harga' => 'required|integer'
        ];
    }
}
