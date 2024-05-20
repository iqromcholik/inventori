<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOrderDetailRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'no_po' => 'required|numeric|min:5',
            'kode_barang' => 'required|numeric',
            'nama_barang' => 'required|string|max:150',
            'harga' => 'required',
            'kuantity' => 'required|numeric',
            'tgl_simpan' => 'required|date',
        ];
    }
}
