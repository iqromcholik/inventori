<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BarangRequest extends FormRequest
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
            'kode_barang' => 'required|numeric|min:5|unique:barangs',
            'nama_barang' => 'required|string|max:150',
            'unit' => 'required|in:Pcs,Buah,Lembar',
            'ukuran' => 'required|string|max:150',
            'warna' => 'required|string|max:50',
            'jenis' => 'required|string|max:50',
            'harga_satuan' => 'required',
            'stok' => 'required'
        ];
    }
}
