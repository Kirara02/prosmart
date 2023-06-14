<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BarangBuktiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'no_reg' => 'required|string',
            'nama_terpidana' => 'required|string',
            'id_jaksa' => 'required|exists:jaksa,id',
            'jenis' => 'required|string',
            'no_tgl_putusan' => 'required|string',
            'status' => 'required|string'
        ];
    }
}
