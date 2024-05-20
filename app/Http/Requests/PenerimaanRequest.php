<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PenerimaanRequest extends FormRequest
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
            'tgl_penyimpanan' => 'required|date',
            'alamat' => 'required|string|max:255',
            'kode_barang' => 'required|unique:penerimaan_barangs,kode_barang',
            'kuantity' => 'required|numeric',
        ];
    }
}
