<?php

namespace App\Http\Controllers;

use App\Http\Requests\SupplierRequest;
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
}
