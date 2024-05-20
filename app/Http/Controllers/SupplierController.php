<?php

namespace App\Http\Controllers;

use App\Http\Requests\SupplierRequest;
use App\Http\Requests\UpdateSuplierRequest;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return view('pages.supplier.index', compact('suppliers'));
    }

    public function create()
    {
        return view('pages.supplier.create');
    }

    public function store(Supplier $supplier, SupplierRequest $supplierRequest)
    {
        $data = $supplierRequest->validated();
        $supplier->create($data);

        return redirect(route('supplier.index'));
    }

    public function edit(Supplier $supplier)
    {
        return view('pages.supplier.edit', compact('supplier'));
    }

    public function update(Supplier $supplier, UpdateSuplierRequest $updateSuplierRequest)
    {
        $data = $updateSuplierRequest->validated();
        $supplier->update($data);
        return redirect(route('supplier.index'));
    }

    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return redirect(route('supplier.index'));
    }
}
